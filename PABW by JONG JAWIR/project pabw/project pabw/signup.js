document.addEventListener('DOMContentLoaded', function () {
    // Get the signup form
    const signupForm = document.getElementById('signup-form');
  
    // Add event listener for form submission
    signupForm.addEventListener('submit', function (event) {
      event.preventDefault(); // Prevent the default form submission behavior
  
      // Perform signup logic (you can add AJAX or other logic here)
  
      // Redirect to home page after successful signup
      window.location.href = 'home.html';
    });
  });