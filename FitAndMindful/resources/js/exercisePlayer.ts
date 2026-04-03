// Wait for the full page to load before running any code
document.addEventListener("DOMContentLoaded", () => {
    // Get all the HTML elements we need
    const startExercise = document.getElementById("startExercise") as HTMLButtonElement; // Start button
    const planContent = document.querySelector(".planContent") as HTMLElement; // Plan info section
    const exercisePlayer = document.getElementById("exercisePlayer") as HTMLElement; // Exercise display container
    const restScreen = document.getElementById("restScreen") as HTMLElement; // Rest screen container
    const finishScreen = document.getElementById("finishScreen") as HTMLElement; // Finish screen container
    const exerciseImage = document.getElementById("exerciseImage") as HTMLImageElement; // Image for exercise
    const exerciseVideo = document.getElementById("exerciseVideo") as HTMLVideoElement; // Video element for exercise
    const exerciseVideoSource = document.getElementById("exerciseVideoSource") as HTMLSourceElement; // Video source element
    const exerciseName = document.getElementById("exerciseName") as HTMLElement; // Name of the exercise
    const exerciseQuantity = document.getElementById("exerciseQuantity") as HTMLElement; // Reps or seconds
    const nextStepBtn = document.getElementById("nextStepBtn") as HTMLButtonElement; // Button to go to next exercise
    const restTimer = document.getElementById("restTimer") as HTMLElement; // Countdown timer during rest
    const exerciseSetCounter = document.getElementById("exerciseSetCounter") as HTMLElement | null; // Display current set
    const restSetCounter = document.getElementById("restSetCounter") as HTMLElement | null; // Display sets completed
    const abortExerciseBtn = document.getElementById("abortExerciseBtn") as HTMLButtonElement; // Abort button

    const abortModal = document.getElementById("abortModal") as HTMLElement; // Modal for abort confirmation
    const confirmAbortBtn = document.getElementById("confirmAbort") as HTMLButtonElement; // Confirm abort
    const cancelAbortBtn = document.getElementById("cancelAbort") as HTMLButtonElement; // Cancel abort

    // Timers (using 'any' to avoid TS errors from mixing setInterval Node vs browser types)
    let exerciseTimer: any = null; // Timer for exercise countdown
    let restTimerInterval: any = null; // Timer for rest countdown

    // Data from window (from Controller)
    const exercises = (window as any).exercises || [];
    const totalSets = (window as any).planSets || 1;
    const planId = (window as any).currentPlanId;
    const finishTimeSeconds = 3; // Time on finish screen before redirect
    const restTimeSeconds = 60; // Rest time between sets

    let currentExerciseIndex = 0; // Current exercise in the set
    let currentSet = 1; // Current set number

    // format seconds to MM:SS
    const formatTime = (seconds: number) => {
        const mins = Math.floor(seconds / 60).toString().padStart(2, "0");
        const secs = (seconds % 60).toString().padStart(2, "0");
        return `${mins}:${secs}`;
    };

    // Update the set counters on screen
    const updateSetCounters = () => {
        if (exerciseSetCounter) {
            exerciseSetCounter.textContent = `Set ${currentSet}/${totalSets}`;
        }

        if (restSetCounter) {
            restSetCounter.textContent =
                currentSet < totalSets
                    ? `${currentSet}/${totalSets} set(s) completed`
                    : `All sets complete`;
        }
    };

    // Get seconds from exercise quantity
    const getSecondsFromExercise = (exercise: any): number | null => {
        const match = exercise.formatted_quantity.match(/\d+/); // /\d+/ matches digits in the string ("30 sec" -> "30")
        if (!match) return null;

        const value = parseInt(match[0]);
        return exercise.formatted_quantity.toLowerCase().includes("sec") ? value : null;
    };

    // Show exercise screen
    const showExercise = (index: number) => {
        const exercise = exercises[index];

        if (!exercise) {
            // If no more exercise, go to rest or finish
            return currentSet < totalSets ? showRest() : showFinish();
        }

        // Clear any previous timers
        if (exerciseTimer) { clearInterval(exerciseTimer); exerciseTimer = null; }
        if (restTimerInterval) { clearInterval(restTimerInterval); restTimerInterval = null; }

        // Show image or video
        if (exercise.img.endsWith(".mp4")) {
            exerciseVideoSource.src = "/" + exercise.img;
            exerciseVideo.load(); exerciseVideo.play();
            exerciseVideo.classList.remove("hidden");
            exerciseImage.classList.add("hidden"); // hide img
        } else {
            exerciseImage.src = "/" + exercise.img;
            exerciseImage.classList.remove("hidden");
            exerciseVideo.classList.add("hidden"); // hide video player
            exerciseVideo.pause();
        }

        exerciseName.textContent = exercise.exercise_name; // Set exercise name
        const seconds = getSecondsFromExercise(exercise); // Get seconds if timed exercise
        if (seconds !== null) {
            let timeLeft = seconds;
            exerciseQuantity.textContent = formatTime(timeLeft);

            // Timer
            exerciseTimer = setInterval(() => {
                timeLeft--;
                exerciseQuantity.textContent = formatTime(timeLeft); // Update screen

                if (timeLeft <= 0) {
                    clearInterval(exerciseTimer); exerciseTimer = null;
                    showExercise(index + 1); // Move to next exercise
                }
            }, 1000);
        } else {
            // Not timed, show reps text
            exerciseQuantity.textContent = exercise.formatted_quantity || "";
        }

        currentExerciseIndex = index; // Update current exercise
        // Show exercise screen, hide others
        exercisePlayer.classList.remove("hidden");
        restScreen.classList.add("hidden");

        updateSetCounters();
    };

    // Show rest screen
    const showRest = () => {
        if (exerciseTimer) { clearInterval(exerciseTimer); exerciseTimer = null; }
        if (restTimerInterval) { clearInterval(restTimerInterval); }

        // Show rest screen, hide others
        exercisePlayer.classList.add("hidden");
        restScreen.classList.remove("hidden");

        updateSetCounters();

        let timeLeft = restTimeSeconds; // Start rest timer
        restTimer.textContent = formatTime(timeLeft);

        // Countdown for rest
        restTimerInterval = setInterval(() => {
            timeLeft--;
            restTimer.textContent = formatTime(timeLeft);

            if (timeLeft <= 0) {
                clearInterval(restTimerInterval); restTimerInterval = null;
                currentSet++; currentExerciseIndex = 0;
                showExercise(currentExerciseIndex); // Start exercises again
            }
        }, 1000);
    };

    // Show finish screen
    const showFinish = () => {
        if (exerciseTimer) clearInterval(exerciseTimer);
        if (restTimerInterval) clearInterval(restTimerInterval);

        // Hide exercise/rest, show finish
        exercisePlayer.classList.add("hidden");
        finishScreen?.classList.remove("hidden");

        // Send completion to server
        if (planId) {
            fetch(`/done-workouts/${planId}/complete`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": (document.querySelector('meta[name="csrf-token"]') as HTMLMetaElement).content
                },
                body: JSON.stringify({})
            });
        }

        let timeLeft = finishTimeSeconds; // Countdown before redirect
        const timer = setInterval(() => {
            timeLeft--;
            if (timeLeft <= 0) {
                clearInterval(timer);
                window.location.href = (window as any).mainUrl; // Go back to main page
            }
        }, 1000);
    };

    // Event listeners
    nextStepBtn.addEventListener("click", () => {
        if (exerciseTimer) { clearInterval(exerciseTimer); exerciseTimer = null; }
        showExercise(currentExerciseIndex + 1); // Show next exercise
    });

    startExercise.addEventListener("click", () => {
        planContent.classList.add("hidden"); // Hide plan overview

        currentSet = 1; currentExerciseIndex = 0; // Reset set and exercise

        window.scrollTo(0, 0); // Scroll to top immidietly
        document.body.style.overflow = "hidden"; // Prevent scrolling

        showExercise(currentExerciseIndex); // Start first exercise
    });

    abortExerciseBtn.addEventListener("click", () => { abortModal.classList.remove("hidden"); }); // Show abort modal
    cancelAbortBtn.addEventListener("click", () => { abortModal.classList.add("hidden"); }); // Hide modal

    confirmAbortBtn.addEventListener("click", () => {
        if (exerciseTimer) clearInterval(exerciseTimer);
        if (restTimerInterval) clearInterval(restTimerInterval);
        window.location.href = (window as any).mainUrl; // Go back to previous page
    });

    abortModal.addEventListener("click", (e) => {
        if (e.target === abortModal) { abortModal.classList.add("hidden"); } // Click outside modal closes it
    });
});