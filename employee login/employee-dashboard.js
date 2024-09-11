//Making the discount code copyable
function copyToClipboard() {

    var discountCode = document.getElementById('discount-code').innerText;
    var tempInput = document.createElement('textarea');
    tempInput.value = discountCode;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand('copy');

    // Remove the temporary textarea
    document.body.removeChild(tempInput);

    // Show the custom alert message
    var copyAlert = document.getElementById('copy-alert');
    copyAlert.style.display = 'inline';

    // Hide the alert after 3 seconds
    setTimeout(function () {
        copyAlert.style.display = 'none';
    }, 3000);
}


//Sliding images

let currentSlide = 0;
const slideInterval = 1000;
let autoSlide;

function changeSlide(n) {
    const slides = document.querySelectorAll('#slider .slide');
    const visibleSlides = 4;


    currentSlide = (currentSlide + n) % slides.length;
    if (currentSlide < 0) {
        currentSlide += slides.length;
    }

    const newLeft = -currentSlide * 700;
    const slider = document.getElementById('slider');
    slider.style.transition = 'transform 1s ease-in-out';
    slider.style.transform = `translateX(${newLeft}px)`;


    if (currentSlide >= visibleSlides) {
        setTimeout(() => {
            slider.style.transition = 'none';
            currentSlide = currentSlide % visibleSlides;
            slider.style.transform = `translateX(${-currentSlide * 700}px)`;
        }, 1000);
    }
}

function startAutoSlide() {
    return setInterval(() => changeSlide(1), slideInterval);
}

function stopAutoSlide() {
    clearInterval(autoSlide);
}


document.addEventListener('DOMContentLoaded', function () {
    const slider = document.getElementById('slider');
    slider.style.transform = 'translateX(0px)';

    autoSlide = startAutoSlide();

    document.querySelector('.prev').addEventListener('click', () => {
        stopAutoSlide();
        changeSlide(-1);
    });

    document.querySelector('.next').addEventListener('click', () => {
        stopAutoSlide();
        changeSlide(1);
    });
    slider.addEventListener('mouseenter', () => stopAutoSlide());
});




