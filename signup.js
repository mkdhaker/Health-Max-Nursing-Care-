// Your Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyDygV2awKerDDV0AgHenDVPyB9OsfnMlfo",
    authDomain: "health-max-nursing-care.firebaseapp.com",
    projectId: "health-max-nursing-care",
    // Add other config options
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);

// Get elements
const signupForm = document.getElementById('signupForm');

// Add signup event
signupForm.addEventListener('submit', function (e) {
    e.preventDefault();

    const username = document.getElementById('signupUsername').value;
    const email = document.getElementById('signupEmail').value;
    const password = document.getElementById('signupPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    // Check if passwords match
    if (password !== confirmPassword) {
        alert('Passwords do not match. Please try again.');
        return;
    }

    // Create user with email and password
    firebase.auth().createUserWithEmailAndPassword(email, password)
        .then((userCredential) => {
            // Signed up successfully
            console.log('User signed up:', userCredential.user);
            alert('Signup successful!'); // You can replace this with your own logic

            window.location.href = 'login.html';
        })
        .catch((error) => {
            // Handle signup errors
            console.error('Signup error:', error.message);
            alert('Signup failed. Please try again.');
        });
});