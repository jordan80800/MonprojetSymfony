console.log("Le script JavaScript fonctionne !");


const burgerButton = document.querySelector('[data-collapse-toggle="navbar-search"]');
const menu = document.getElementById('navbar-search');

// Add a click event listener to the burger button
burgerButton.addEventListener('click', () => {
  // Toggle the visibility of the menu when the button is clicked
  menu.classList.toggle('hidden');
});

