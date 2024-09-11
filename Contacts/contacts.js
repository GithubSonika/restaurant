//to show the invalid email address using regex pattern
document.getElementById('email').addEventListener('input', function() {
    var email = this.value;
    var emailPopup = document.getElementById('emailPopup');
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

   
    if (!emailPattern.test(email)) {
        emailPopup.style.display = 'block'; 
    } else {
        emailPopup.style.display = 'none'; 
    }
});
