const slider = document.querySelector('.slider');
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');
let slideIndex = 0;

function showSlides() {
    const slides = document.querySelectorAll('.slide');
    const slideWidth = slides[0].offsetWidth + 20; // 20 for margins

    if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }

    slider.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
}

prevButton.addEventListener('click', () => {
    slideIndex--;
    showSlides();
});

nextButton.addEventListener('click', () => {
    slideIndex++;
    showSlides();
});

// Initial display
showSlides();
