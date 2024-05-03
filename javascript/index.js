document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.slider');
    const prevBtn = document.querySelector('.prev-slide');
    const nextBtn = document.querySelector('.next-slide');
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const slideCount = slides.length;
    const slideWidth = slides[0].clientWidth;
  
    function goToSlide(index) {
      if (index < 0) {
        index = slideCount - 1;
      } else if (index >= slideCount) {
        index = 0;
      }
      currentSlide = index;
      const offset = -currentSlide * slideWidth;
      slider.style.transform = `translateX(${offset}px)`;
    }
  
    prevBtn.addEventListener('click', () => {
      goToSlide(currentSlide - 1);
    });
  
    nextBtn.addEventListener('click', () => {
      goToSlide(currentSlide + 1);
    });
  });
  
  