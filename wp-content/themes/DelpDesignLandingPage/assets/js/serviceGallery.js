document.addEventListener('DOMContentLoaded', function() {
    const serviceItems = document.querySelectorAll('.service-item');
    const galleryItems = document.querySelectorAll('.gallery-item');
    const dotContainer = document.querySelector('.gallery-dots');
    const dots = dotContainer.querySelectorAll('.gallery-dot');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let currentIndex = 0;

    function updateContent(index) {
        serviceItems.forEach((item, i) => {
            item.classList.toggle('active', i === index);
        });
        galleryItems.forEach((item, i) => {
            item.classList.toggle('active', i === index);
        });
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === index);
        });

        initializeDescriptionToggle();
    }

    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex === 0) ? serviceItems.length - 1 : currentIndex - 1;
        updateContent(currentIndex);
    });

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex === serviceItems.length - 1) ? 0 : currentIndex + 1;
        updateContent(currentIndex);
    });

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentIndex = index;
            updateContent(currentIndex);
        });
    });

    // Initialize with the first content
    updateContent(currentIndex);
});
