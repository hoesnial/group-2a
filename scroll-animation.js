// JavaScript code to animate the profile cards scrolling

// Get the profile cards container
const profileCards = document.querySelector(".shape-sections");

// Function to handle the scrolling effect
function startScrolling() {
  // Get the total width of all profile cards combined
  const totalWidth = profileCards.scrollWidth;
  const containerWidth = profileCards.offsetWidth; // Get the width of the visible container

  // Set an initial position for scrolling
  let currentPos = 0;

  // Scroll the cards
  function scrollCards() {
    // Move the cards to the left
    currentPos += 2;
    profileCards.style.transform = `translateX(-${currentPos}px)`;

    // Reset the position once it has scrolled out of view and start from the left again
    if (currentPos >= totalWidth) {
      currentPos = 0; // Reset to the starting position
      profileCards.style.transition = "none"; // Disable transition while resetting
      profileCards.style.transform = `translateX(0)`; // Reset position
      setTimeout(() => {
        profileCards.style.transition = "transform 0.5s ease-in-out"; // Re-enable transition
      }, 50); // Small delay to allow for transition reset
    }
  }

  // Scroll the cards every 10ms to create a smooth effect
  setInterval(scrollCards, 10);
}

// Start the scrolling animation once the page is loaded
window.onload = startScrolling;
