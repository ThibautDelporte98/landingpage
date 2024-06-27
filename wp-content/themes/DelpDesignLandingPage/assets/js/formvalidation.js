// document.addEventListener('DOMContentLoaded', function() {
//     var myForm = document.getElementById('myForm');
//     console.log('Form element:', myForm); // Check if myForm is correctly identified
//     if (myForm) {
//         myForm.addEventListener('submit', function(event) {
//             console.log('Form submitted.');

//             // Reset all previous validation messages
//             resetValidationMessages();

//             // Validate name
//             const name = document.getElementById('user_name');
//             if (!name || !name.value.trim()) {
//                 displayValidationMessage('input1', 'Uw naam is veplicht.');
//                 event.preventDefault();
//             }

//             // Validate email
//             const email = document.getElementById('input3').value;
//             const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//             if (!emailPattern.test(email)) {
//                 displayValidationMessage('user_email', 'Voer een geldig email adress in.');
//                 event.preventDefault();
//             }

//             // Validate phone
//             const phone = document.getElementById('input4').value;
//             const phonePattern = /^[0-9-+\s()]*$/;
//             if (!phonePattern.test(phone)) {
//                 displayValidationMessage('user_phone', 'Voer een geldig telefoon nummer in.');
//                 event.preventDefault();
//             }

//             // Validate checkbox
//             const checkbox = document.getElementById('checkbox1');
//             if (!checkbox.checked) {
//                 displayValidationMessage('checkbox1', 'Akkoord gaan met de voorwaarden is verpl.');
//                 event.preventDefault();
//             }
//         });
//     } else {
//         console.error('Form element not found.');
//     }
// });

// function displayValidationMessage(inputId, message) {
//     const inputElement = document.getElementById(inputId);
//     const messageElement = document.createElement('div');
//     messageElement.className = 'validation-message';
//     messageElement.textContent = message;
//     inputElement.parentNode.appendChild(messageElement);
// }

// function resetValidationMessages() {
//     const validationMessages = document.querySelectorAll('.validation-message');
//     validationMessages.forEach(function(message) {
//         message.parentNode.removeChild(message);
//     });
// }
