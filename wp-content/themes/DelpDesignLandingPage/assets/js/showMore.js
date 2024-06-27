function initializeDescriptionToggle() {
    var descriptionContainers = document.querySelectorAll('.description-container');
    var descriptions = document.querySelectorAll('.description');
    var showMoreButtons = document.querySelectorAll('.show-more');

    // Function to check if the description text overflows
    function checkOverflow() {
        descriptionContainers.forEach((container, index) => {
            var description = descriptions[index];
            var showMoreButton = showMoreButtons[index];

            // Calculate the maximum height for 3 lines (adjust as needed)
            var lineHeight = parseFloat(getComputedStyle(description).lineHeight);
            var maxHeight = lineHeight * 4;
            const isMobile = window.innerWidth <= 1024;

            if (isMobile && description.scrollHeight > maxHeight) {
                showMoreButton.style.display = 'block';
            } else {
                showMoreButton.style.display = 'none';
            }
        });
    }

    // Check overflow on initial load
    checkOverflow();

    showMoreButtons.forEach((button, index) => {
        button.addEventListener('click', function() {
            descriptionContainers[index].classList.toggle('expanded');

            // Toggle button text based on expanded state
            if (descriptionContainers[index].classList.contains('expanded')) {
                button.textContent = 'Toon minder';
            } else {
                button.textContent = 'Toon meer';
            }
        });
    });

    // Optional: Recheck on window resize
    window.addEventListener('resize', checkOverflow);
}

// Attach the function to the window object to make it globally accessible
window.initializeDescriptionToggle = initializeDescriptionToggle;

// Initial call on DOMContentLoaded
document.addEventListener('DOMContentLoaded', initializeDescriptionToggle);
