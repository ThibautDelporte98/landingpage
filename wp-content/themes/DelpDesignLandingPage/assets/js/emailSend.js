import emailjs from 'emailjs-com';

document.addEventListener('DOMContentLoaded', function() {
    var myForm = document.getElementById('myForm');
    var loadingElement = document.getElementById('loading');
    var successPopup = document.getElementById('successPopup');
    var errorPopup = document.getElementById('errorPopup');
    var closeSuccessPopup = document.getElementById('closeSuccessPopup');
    var closeErrorPopup = document.getElementById('closeErrorPopup');

    if (myForm) {
        emailjs.init('VB6hnEqEIq71Pygt1'); // Replace with your actual USER ID

        const nameInput = document.getElementById('user_name');
        const emailInput = document.getElementById('user_email');
        const phoneInput = document.getElementById('user_phone');
        const checkboxInput = document.getElementById('checkbox1');

        // Add real-time validation listeners
        nameInput.addEventListener('input', validateName);
        emailInput.addEventListener('input', validateEmail);
        phoneInput.addEventListener('input', validatePhone);
        checkboxInput.addEventListener('change', validateCheckbox);

        myForm.addEventListener('submit', function(event) {
            resetValidationMessages();
            let valid = validateForm();

            if (!valid) {
                event.preventDefault();
                return;
            }

            loadingElement.style.display = 'block';

            // Collect user inputs from the form
            let formData = {
                user_name: nameInput.value,
                user_email: emailInput.value,
                user_phone: phoneInput.value,
                user_message: document.getElementById('user_message').value
            };

            // Send email using EmailJS
            emailjs.send('service_rjxs6hj', 'template_vib9shd', formData)
                .then(function(response) {
                    console.log('SUCCESS!', response.status, response.text);
                    showPopup(successPopup);
                    myForm.reset();
                }, function(error) {
                    console.log('FAILED...', error);
                    showPopup(errorPopup);
                })
                .finally(function() {
                    // Hide the loading element
                    loadingElement.style.display = 'none';
                });

            // Prevent the default form submission behavior
            event.preventDefault();
        });
    } else {
        console.error('Form element not found.');
    }

    function validateName() {
        const name = document.getElementById('user_name');
        if (!name.value.trim()) {
            displayValidationMessage('user_name', 'Uw naam is verplicht.');
            return false;
        } else {
            removeValidationMessage('user_name');
            return true;
        }
    }

    function validateEmail() {
        const email = document.getElementById('user_email').value;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            displayValidationMessage('user_email', 'Voer een geldig email adres in.');
            return false;
        } else {
            removeValidationMessage('user_email');
            return true;
        }
    }

    function validatePhone() {
        const phone = document.getElementById('user_phone').value;
        const phonePattern = /^\+?[0-9\s\-().]{7,}$/;
        if (!phonePattern.test(phone)) {
            displayValidationMessage('user_phone', 'Voer een geldig telefoon nummer in.');
            return false;
        } else {
            removeValidationMessage('user_phone');
            return true;
        }
    }

    function validateCheckbox() {
        const checkbox = document.getElementById('checkbox1');
        if (!checkbox.checked) {
            displayValidationMessage('checkbox1', 'Akkoord gaan met de voorwaarden is verplicht.');
            return false;
        } else {
            removeValidationMessage('checkbox1');
            return true;
        }
    }

    function validateForm() {
        let valid = true;
        if (!validateName()) valid = false;
        if (!validateEmail()) valid = false;
        if (!validatePhone()) valid = false;
        if (!validateCheckbox()) valid = false;
        return valid;
    }

    function displayValidationMessage(inputId, message) {
        const inputElement = document.getElementById(inputId);
        removeValidationMessage(inputId); // Remove any existing message
        const messageElement = document.createElement('div');
        messageElement.className = 'validation-message';
        messageElement.textContent = message;
        inputElement.parentNode.appendChild(messageElement);
    }

    function removeValidationMessage(inputId) {
        const inputElement = document.getElementById(inputId);
        const messageElement = inputElement.parentNode.querySelector('.validation-message');
        if (messageElement) {
            messageElement.parentNode.removeChild(messageElement);
        }
    }

    function resetValidationMessages() {
        const validationMessages = document.querySelectorAll('.validation-message');
        validationMessages.forEach(function(message) {
            message.parentNode.removeChild(message);
        });
    }

    function showPopup(popup) {
        popup.style.display = 'block';
        document.body.classList.add('no-scroll');
    }

    function hidePopup(popup) {
        popup.style.display = 'none';
        document.body.classList.remove('no-scroll');
    }

    closeSuccessPopup.addEventListener('click', function() {
        hidePopup(successPopup);
    });

    closeErrorPopup.addEventListener('click', function() {
        hidePopup(errorPopup);
    });

    window.addEventListener('click', function(event) {
        if (event.target == successPopup) {
            hidePopup(successPopup);
        }
        if (event.target == errorPopup) {
            hidePopup(errorPopup);
        }
    });
});
 