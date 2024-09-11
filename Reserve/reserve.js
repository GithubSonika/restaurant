document.addEventListener('DOMContentLoaded', function () {

    var dateElement = document.getElementById("date");
    flatpickr(dateElement, {
        dateFormat: "Y-m-d",
        minDate: "today",
        defaultDate: "today"
    });


    var timeElement = document.getElementById("time");
    flatpickr(timeElement, {
        enableTime: true,
        noCalendar: true,
        dateFormat: "h:i K",
        time_24hr: false,
        minuteIncrement: 30,
        defaultHour: 12
    });

});

//to increase and decrease the number of guests
function increment() {
    var guestsInput = document.getElementById("guests");
    var currentValue = parseInt(guestsInput.value);
    var maxValue = parseInt(guestsInput.max);
    if (currentValue < maxValue) {
        guestsInput.value = currentValue + 1;
    }
}


function decrement() {
    var guestsInput = document.getElementById("guests");
    var currentValue = parseInt(guestsInput.value);
    var minValue = parseInt(guestsInput.min);
    if (currentValue > minValue) {
        guestsInput.value = currentValue - 1;
    }
}

//to show the invalid email address using regex pattern
document.getElementById('email').addEventListener('input', function() {
    const emailInput = document.getElementById('email');
    const emailPopup = document.getElementById('emailPopup');
    
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

    if (emailInput.value === '' || !emailPattern.test(emailInput.value)) {
        emailPopup.style.display = 'block'; 
    } else {
        emailPopup.style.display = 'none'; 
    }
});

//Restricting to input only numbers 
document.getElementById('telephone').addEventListener('input', function(event) {
    const telephoneInput = event.target;
    const phonePopup = document.getElementById('phonePopup');
    
    telephoneInput.value = telephoneInput.value.replace(/\D/g, '');

   
    if (telephoneInput.value.length < 10 || telephoneInput.value.length > 15) {
        phonePopup.style.display = 'block'; 
    } else {
        phonePopup.style.display = 'none'; 
    }
});



