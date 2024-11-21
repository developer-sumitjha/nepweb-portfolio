/* Features Slider */
document.addEventListener('DOMContentLoaded', function() {
  const innerSection = document.querySelector('.slider .inner-section');
  const items = document.querySelectorAll('.item');
  const itemCount = items.length;
  const totalWidth = innerSection.scrollWidth;

  // Clone items to create a seamless scroll
  items.forEach(item => {
    const clone = item.cloneNode(true);
    innerSection.appendChild(clone);
  });

  // Adjust the animation duration based on the total width of the content
  innerSection.style.animationDuration = `${itemCount * 5}s`;

  // Restart the animation to ensure seamless scroll
  innerSection.addEventListener('animationiteration', function() {
    innerSection.style.animation = 'none';
    requestAnimationFrame(() => {
      innerSection.style.animation = '';
    });
  });
});



/* Skills Slider */
$ = jQuery;
const $sliderContainer = $('.slider-container');
const $slides = $('.slide');
const $prevButton = $('.prev');
const $nextButton = $('.next');

let currentSlide = 0;
const maxSlides = $slides.length;

function showSlide(slideIndex) {
    const offset = slideIndex * -200; // Adjust based on slide width + margin
    $sliderContainer.css('transform', `translateX(${offset}px)`);
}

$nextButton.on('click', function() {
    if (currentSlide < maxSlides - 1) {
        currentSlide++;
        showSlide(currentSlide);
    }
});

$prevButton.on('click', function() {
    if (currentSlide > 0) {
        currentSlide--;
        showSlide(currentSlide);
    }
});

