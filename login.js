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
const loginForm = document.getElementById('loginForm');

// Add login event
loginForm.addEventListener('submit', function (e) {
    e.preventDefault();

    const email = document.getElementById('loginEmail').value;
    const password = document.getElementById('loginPassword').value;

    // Sign in with email and password
    firebase.auth().signInWithEmailAndPassword(email, password)
        .then((userCredential) => {
            // Signed in successfully
            console.log('User signed in:', userCredential.user);
            alert('Login successful!'); // You can replace this with your own logic

            window.location.href = 'afterlogin.html';
        })
        .catch((error) => {
            // Handle login errors
            console.error('Login error:', error.message);
            alert('Login failed. Please check your credentials.');
        });
});