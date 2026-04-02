document.addEventListener("DOMContentLoaded", () => {
    // Elements
    const startExercise = document.getElementById("startExercise") as HTMLButtonElement;
    const planContent = document.querySelector(".planContent") as HTMLElement;
    const exercisePlayer = document.getElementById("exercisePlayer") as HTMLElement;
    const restScreen = document.getElementById("restScreen") as HTMLElement;
    const finishScreen = document.getElementById("finishScreen") as HTMLElement;
    const exerciseImage = document.getElementById("exerciseImage") as HTMLImageElement;
    const exerciseVideo = document.getElementById("exerciseVideo") as HTMLVideoElement;
    const exerciseVideoSource = document.getElementById("exerciseVideoSource") as HTMLSourceElement;
    const exerciseName = document.getElementById("exerciseName") as HTMLElement;
    const exerciseQuantity = document.getElementById("exerciseQuantity") as HTMLElement;
    const nextStepButton = document.getElementById("nextStepButton") as HTMLButtonElement;
    const restTimer = document.getElementById("restTimer") as HTMLElement;
    const exerciseSetCounter = document.getElementById("exerciseSetCounter") as HTMLElement | null;
    const restSetCounter = document.getElementById("restSetCounter") as HTMLElement | null;

    // Data
    const exercises = (window as any).exercises || [];
    const totalSets = (window as any).planSets || 1;
    const planId = (window as any).currentPlanId;
    const finishTime = 30;
    const restTime = 1;

    let currentExerciseIndex = 0;
    let currentSet = 1;

    // Helpers
    const formatTime = (seconds: number) => {
        const mins = Math.floor(seconds / 60).toString().padStart(2, "0");
        const secs = (seconds % 60).toString().padStart(2, "0");
        return `${mins}:${secs}`;
    };

    const updateSetCounters = () => {
        if (exerciseSetCounter) exerciseSetCounter.textContent = `Set ${currentSet}/${totalSets}`;
        if (restSetCounter) restSetCounter.textContent =
            currentSet < totalSets
                ? `${currentSet}/${totalSets} set(s) completed`
                : `All sets complete`;
    };

    // Display functions
    const showExercise = (index: number) => {
        const exercise = exercises[index];
        if (!exercise) return currentSet < totalSets ? showRest() : showFinish();

        // Media
        if (exercise.img.endsWith(".mp4")) {
            exerciseVideoSource.src = "/" + exercise.img;
            exerciseVideo.load();
            exerciseVideo.play();
            exerciseVideo.classList.remove("hidden");
            exerciseImage.classList.add("hidden");
        } else {
            exerciseImage.src = "/" + exercise.img;
            exerciseImage.classList.remove("hidden");
            exerciseVideo.classList.add("hidden");
            exerciseVideo.pause();
        }

        // Text
        exerciseName.textContent = exercise.exercise_name;
        exerciseQuantity.textContent = exercise.formatted_quantity || "";

        currentExerciseIndex = index;
        exercisePlayer.classList.remove("hidden");
        restScreen.classList.add("hidden");
        finishScreen?.classList.add("hidden");
        updateSetCounters();
    };

    const showRest = () => {
        exercisePlayer.classList.add("hidden");
        restScreen.classList.remove("hidden");
        finishScreen?.classList.add("hidden");
        updateSetCounters();

        let timeLeft = restTime;
        restTimer.textContent = formatTime(timeLeft);

        const timer = setInterval(() => {
            timeLeft--;
            restTimer.textContent = formatTime(timeLeft);
            if (timeLeft <= 0) {
                clearInterval(timer);
                currentSet++;
                currentExerciseIndex = 0;
                showExercise(currentExerciseIndex);
            }
        }, 1000);
    };

    const showFinish = () => {
        exercisePlayer.classList.add("hidden");
        restScreen.classList.add("hidden");
        finishScreen?.classList.remove("hidden");

        // Save done workout if user is logged in
        if (planId) {
            console.log("Saving done workout for plan:", planId);
            fetch(`/done-workouts/${planId}/complete`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": (document.querySelector('meta[name="csrf-token"]') as HTMLMetaElement).content
                },
                body: JSON.stringify({})
            })
            .then(res => res.json())
            .then(data => console.log("Done workout response:", data))
            .catch(err => console.error("Error saving done workout:", err));
        }

        // Finish countdown
        let timeLeft = finishTime;
        const timer = setInterval(() => {
            timeLeft--;
            if (timeLeft <= 0) {
                clearInterval(timer);
                window.location.href = (window as any).mainUrl;
            }
        }, 1000);
    };

    // Event listeners
    nextStepButton.addEventListener("click", () => showExercise(currentExerciseIndex + 1));

    startExercise.addEventListener("click", () => {
        planContent.style.display = "none";
        currentSet = 1;
        currentExerciseIndex = 0;
        window.scrollTo(0, 0);
        document.body.style.overflow = "hidden";
        showExercise(currentExerciseIndex);
    });
});