function slider_kiri1() {
    // Redirect to the Google website
    alert("Slider kiri Berfungsi");
}


// Slider Atas :
let sliderState = -1;

// Function to handle clicking the slider
function slider_kanan1() {
    // Toggle the slider state
    sliderState = (sliderState + 1) % headings.length;

    // Update the content
    updateContent();
}

function slider_kiri1() {
    // Toggle the slider state
    sliderState = (sliderState - 1 + headings.length) % headings.length;

    // Update the content
    updateContent();
}

// Slider pertama :
// Function to update the content based on the slider state
// Define arrays for headings, content, and paragraphs
const headings = ['Heading for Slider 1', 'Heading for Slider 2', 'Heading for Slider 3','4'];
const contents = ['Content for Slider 1', 'Content for Slider 2', 'Content for Slider 3','4'];
const paragraphs = [
    'Content for Slider 1 goes here.',
    'Content for Slider 2 goes here.',
    'Content for Slider 3 goes here.',
    '4'
];

function updateContent() {
    // Get references to the elements you want to update
    const heading = document.querySelector('.heading .text-wrapper');
    const content = document.querySelector('.div-wrapper .text-wrapper-2');
    const paragraph = document.querySelector('.p-copy-text .would-you-like-easy');

    // Check if the elements exist (optional but recommended)
    if (heading && content && paragraph) {
        // Update the content based on the current slider state
        heading.textContent = headings[sliderState];
        content.textContent = contents[sliderState];
        paragraph.innerHTML = paragraphs[sliderState];
    }
}


// Modify the generateListItems function to create elements with the new structure
function generateListItems() {
    const listContainer = document.getElementById('list-container'); // Get the list container
  
    // Loop through the arrays and create list items
    for (let i = 0; i < headings.length; i++) {
      const listItem = document.createElement('div');
      listItem.className = 'item-margin';
  
      // Create the element with the new class
      const item2 = document.createElement('div');
      item2.className = 'item-2 item-2-style'; // Apply the new class here
  
      // Create and set the content for the item
      const headingElement = document.createElement('h3');
      headingElement.className = 'item-text'; // Add the class to hide the text
      headingElement.textContent = headings[i];
      const contentElement = document.createElement('p');
      contentElement.className = 'item-text'; // Add the class to hide the text
      contentElement.textContent = contents[i];
      const paragraphElement = document.createElement('p');
      paragraphElement.className = 'item-text'; // Add the class to hide the text
      paragraphElement.textContent = paragraphs[i];
  
      // Append the content elements to the item
      item2.appendChild(headingElement);
      item2.appendChild(contentElement);
      item2.appendChild(paragraphElement);
  
      // Append the item to the list
      listItem.appendChild(item2);
      listContainer.appendChild(listItem);
    }
  }
  


// Call Icon
window.addEventListener('load', generateListItems);

// Initialize the slider with the initial state
slider_kanan1();