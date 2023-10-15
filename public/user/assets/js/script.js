document.addEventListener("DOMContentLoaded", () => {
    const inViewport = (entries, observer) => {
        entries.forEach(entry => {
            (entry.isIntersecting) ? entry.target.classList.add("animate") : "";
        });
    };

    const Obs = new IntersectionObserver(inViewport);
    const obsOptions = {};

    document.querySelectorAll('[data-animate]').forEach(el => {
        Obs.observe(el, obsOptions);
    });
})