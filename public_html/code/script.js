// JavaScript to change the width of lines on figure hover
const pic1 = document.getElementById('pic1');
const fourImages = document.querySelector('.fourimages');
const lines = document.querySelectorAll('.line');

for (let i = 1; i <= 4; i++) {
    const img = document.getElementById(`img${i}`);
    const line = document.getElementById(`line${i}`);
    
    img.addEventListener('mouseenter', () => {
        line.style.width = '100px'; // Change the width on hover
        line.style.background = '#8ABE41';
        if (i === 2 || i === 3 || i === 4) {
            lines[0].style.width = '73px'; 
            lines[0].style.background = '#D4D5D9';
            pic1.style.width = '120px';
        }
    });

    img.addEventListener('mouseleave', () => {
        line.style.width = '73px'; // Restore the initial width on mouse leave
        line.style.background = '#D4D5D9';
    });
}

fourImages.addEventListener('mouseleave', () => {
    lines[0].style.width = '100px'; // Change the width on hover
    lines[0].style.background = '#8ABE41';
    pic1.style.width = '260px';
});


document.addEventListener('DOMContentLoaded', function() {
    // Check if no figure is hovered
    const noFigureHovered = true; 

    if (noFigureHovered) {
        lines[0].style.width = '100px'; // Change the width on hover
        lines[0].style.background = '#8ABE41';
        pic1.style.width = '260px';
    }
});




// demo button 
document.addEventListener('DOMContentLoaded', function() {
    const popupBtn = document.getElementById('popupBtn');
    const popup = document.getElementById('popup');
    const closeBtn = document.getElementById('closeBtn');
    const form = document.getElementById('popupform');

    popupBtn.addEventListener('click', function() {
        popup.style.display = 'block';
    });

    closeBtn.addEventListener('click', function() {
        popup.style.display = 'none';
    });
});


// online course section in home page
const courseTitle = document.getElementById('courseTitle');
const courseDescription = document.getElementById('courseDescription');
const violinHeading = document.getElementById('violinheading');
const guitarHeading = document.getElementById('guitarheading');
const pianoHeading = document.getElementById('pianoheading');
const vocalHeading = document.getElementById('vocalheading');

// Add a click event listener to the headings
guitarHeading.addEventListener('click', function() {
    // Update the content of the <h3> and <p> elements when Guitar is clicked
    courseTitle.textContent = 'Guitar Classes'; // Change the title
    courseDescription.textContent = "Step into the world of music with our Guitar classes! Designed for all levels, from beginners to budding musicians, our classes offer an exciting journey into the realm of strings. Our skilled instructors will guide you through the basics of playing the guitar, from proper finger placement to strumming techniques. Join us and embark on a melodious adventure that will inspire and captivate both students and parents alike."; // Change the description
    const highlighter = document.querySelector('#guitarheading + div');
    highlighter.style.background = '#8ABE41';
});

pianoHeading.addEventListener('click', function() {
    // Update the content of the <h3> and <p> elements when Piano is clicked
    courseTitle.textContent = 'Piano Classes'; // Change the title
    courseDescription.textContent = "Discover the magic of music through our Piano classes! Ideal for students of all ages and parents seeking a rewarding musical journey for their children. Our classes provide a solid foundation in piano playing, from learning to read notes to mastering hand coordination. Led by our experienced instructors, you'll explore a world of melodies and develop a lifelong appreciation for music. Join us to unlock your musical potential and embark on a harmonious adventure with our Piano classes."; // Change the description
    const highlighter = document.querySelector('#pianoheading + div');
    highlighter.style.background = '#8ABE41';
});

vocalHeading.addEventListener('click', function() {
    // Update the content of the <h3> and <p> elements when Vocal is clicked
    courseTitle.textContent = 'Vocal Music\nClasses'; // Change the title
    courseDescription.textContent = "Unleash your inner melody with our Vocal Music classes! Tailored for all ages and perfect for parents seeking a harmonious musical journey for their children. Our classes offer a supportive environment to develop vocal techniques, from breathing exercises to hitting the right notes. Led by skilled instructors, you'll explore a diverse range of songs and styles, nurturing your unique voice along the way. Join us in discovering the power of your voice and embark on a melodious adventure with our Vocal Music classes."; // Change the description
    const highlighter = document.querySelector('vocalheading + div');
    highlighter.style.background = '#8ABE41';
});

violinHeading.addEventListener('click', function() {
    // Update the content of the <h3> and <p> elements when Violin is clicked
    courseTitle.textContent = 'Western Violin\nClasses'; // Change the title
    courseDescription.textContent = "Embark on a musical adventure with our Western Violin classes at the music academy!Whether you're starting from scratch or already have a love for melodies, our classes are tailored for all levels. From holding the violin to creating beautiful tunes, our skilled instructors guide you every step of the way. Join us in discovering the magic of Western violin and unlock your musical potential!"; // Change the description
    const highlighter = document.querySelector('violinheading + div');
    highlighter.style.background = '#8ABE41';
});

// Get references to the button elements and their corresponding underline divs
const buttonElements = document.querySelectorAll('.coursesbutton');
const underlineDivs = document.querySelectorAll('.highlighter');

// Add a click event listener to each button
buttonElements.forEach((button, index) => {
    button.addEventListener('click', () => {
        // Reset all underline divs to transparent background
        underlineDivs.forEach((underline) => {
            underline.style.backgroundColor = 'transparent';
        });

        // Set the background color of the clicked button's corresponding underline div to your desired color (e.g., green)
        underlineDivs[index].style.backgroundColor = '#8ABE41';
    });
});

// Initialize the first underline div to your desired color (e.g., green) by default
underlineDivs[0].style.backgroundColor = '#8ABE41';


// parents feedback
document.addEventListener("DOMContentLoaded", function () {
    const reviewList = document.getElementById("reviewList");
    const reviewItems = reviewList.querySelectorAll(".review-item");
    const nextButton = document.getElementById("next");
    const previousButton = document.getElementById("previous");
    
    const itemsPerPage = 3; // Number of items to display per page
    let currentPage = 0; // Current page
    
    // Function to update the visibility of items based on the current page
    function updateVisibility() {
        const startIndex = currentPage * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;

        reviewItems.forEach((item, index) => {
            if (index >= startIndex && index < endIndex) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        });
    }
    
    // Function to handle the "Next" button click
    function handleNextClick() {
        if (currentPage < Math.ceil(reviewItems.length / itemsPerPage) - 1) {
            currentPage++;
            updateVisibility();
        }
    }
    
    // Function to handle the "Previous" button click
    function handlePreviousClick() {
        if (currentPage > 0) {
            currentPage--;
            updateVisibility();
        }
    }
    
    // Attach click event listeners to the buttons
    nextButton.addEventListener("click", handleNextClick);
    previousButton.addEventListener("click", handlePreviousClick);
    
    // Initialize visibility
    updateVisibility();
});


// Function to filter and display courses in course page
$(document).ready(function () {
    document.addEventListener('DOMContentLoaded', function () {
        // Event listeners for instrument buttons
        document.getElementById('pianoButton').addEventListener('click', function () {
            displayCourses('Piano');
        });
    
        document.getElementById('violinButton').addEventListener('click', function () {
            displayCourses('Violin');
        });
    
        document.getElementById('guitarButton').addEventListener('click', function () {
            displayCourses('Guitar');
        });
    
        // Initially, display all courses
        displayCourses(''); // Empty string to display all courses on page load
    });
    
    function displayCourses(instrument) {
        fetch('courses.json')
            .then(response => response.json())
            .then(data => {
                const courseList = document.getElementById('courseList');
                courseList.innerHTML = ''; // Clear the existing list
    
                data.forEach(course => {
                    if (instrument === '' || course.instrument === instrument) {
                        const courseItem = `
                            <a href="class.html">
                                <section>
                                    <div></div>
                                    <h2 class="song-name">${course.songName}</h2>
                                    <p class="class-name">${course.className}</p>
                                    <p class="book-name">${course.bookName}</p>
                                </section>
                            </a>
                        `;
                        courseList.insertAdjacentHTML('beforeend', courseItem);
                    }
                });
            })
            .catch(error => console.error(error));
    }    
});
