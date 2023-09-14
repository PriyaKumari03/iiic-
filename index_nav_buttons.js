let currentSection = 1;
const totalSections = 5;

const nextBtn = document.querySelector('.next-btn');
const prevBtn = document.querySelector('.prev-btn');
const submitBtn = document.querySelector('[name="submit"]');

nextBtn.addEventListener('click', function () {
    if (currentSection < totalSections) {
        document.getElementById(`section${currentSection}`).style.display = 'none';
        currentSection++;
        document.getElementById(`section${currentSection}`).style.display = 'block';

        if (currentSection === totalSections) {
            // Hide next button and show submit button on the last section
            nextBtn.style.display = 'none';
            submitBtn.style.display = 'block';
        }

        // Ensure previous button is visible when not on the first section
        if (currentSection > 1 && prevBtn.style.display === 'none') {
            prevBtn.style.display = 'block';
        }

        // Scroll to the top of the page
        window.scrollTo(0, 0);
    }
});

prevBtn.addEventListener('click', function () {
    if (currentSection > 1) {
        document.getElementById(`section${currentSection}`).style.display = 'none';
        currentSection--;
        document.getElementById(`section${currentSection}`).style.display = 'block';

        // Hide submit button and show next button if not on the last section
        if (currentSection !== totalSections) {
            nextBtn.style.display = 'block';
            submitBtn.style.display = 'none';
        }

        // Hide previous button if back on the first section
        if (currentSection === 1) {
            prevBtn.style.display = 'none';
        }

        // Scroll to the top of the page
        window.scrollTo(0, 0);
    }
});

// Initial setup: Hide previous button on the first section
if (currentSection === 1) {
    prevBtn.style.display = 'none';
}