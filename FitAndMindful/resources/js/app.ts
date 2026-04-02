import '../css/app.css';

document.addEventListener("DOMContentLoaded", () => {
    const toGoRight = document.querySelectorAll<HTMLElement>(".toGoRight");
    const toGoUp = document.querySelectorAll<HTMLElement>(".toGoUp");
    const toTurnVisible = document.querySelectorAll<HTMLElement>(".toTurnVisible");

    toGoRight.forEach((element) => {
        element.classList.add("goFromLeftToRight");
    });

    toGoUp.forEach((element) => {
        element.classList.add("goFromDownToUp");
    });

    toTurnVisible.forEach((element) => {
        element.classList.add("turnVisible");
    });

    const observer = new IntersectionObserver((entries) => {
        let leftToRightCounter = 0;
        let downToUpCounter = 0;
        let turnVisibleCounter = 0;
        entries.forEach((entry) => {

            if (!entry.isIntersecting) return;

            const element = entry.target as HTMLElement;

            if (element.classList.contains("goFromLeftToRight"))
            {
                leftToRightCounter++;
                setTimeout(() => {
                    element.classList.add("animationInProgress");

                    requestAnimationFrame(() => {
                        element.classList.remove("goFromLeftToRight");
                        element.classList.add("goFromLeftToRightEnd");
                    });

                    element.addEventListener("transitionend", () => {
                    element.classList.remove("animationInProgress");
                    }, { once: true });
                
                }, leftToRightCounter - 1 * 200);
            }
            else if (element.classList.contains("goFromDownToUp"))
            {
                downToUpCounter++;
                setTimeout(() => {
                    element.classList.add("animationInProgress");

                    requestAnimationFrame(() => {
                        element.classList.remove("goFromDownToUp");
                        element.classList.add("goFromDownToUpEnd");
                    });

                    element.addEventListener("transitionend", () => {
                    element.classList.remove("animationInProgress");
                    }, { once: true });
                
                }, downToUpCounter - 1 * 200);
            }
            else if (element.classList.contains("turnVisible"))
            {
                turnVisibleCounter++;
                setTimeout(() => {
                    element.classList.add("animationInProgress");

                    requestAnimationFrame(() => {
                        element.classList.remove("turnVisible");
                        element.classList.add("turnVisibleEnd");
                    });

                    element.addEventListener("transitionend", () => {
                    element.classList.remove("animationInProgress");
                    }, { once: true });
                
                }, turnVisibleCounter - 1 * 200);
            }

            observer.unobserve(element);
        });
    }, { threshold: 0.2 });

    toGoRight.forEach((element) => observer.observe(element));
    toGoUp.forEach((element) => observer.observe(element));
    toTurnVisible.forEach((element) => observer.observe(element));
});