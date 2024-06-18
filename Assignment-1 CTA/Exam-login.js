function validateLogin() {
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    // Placeholder - This would communicate with the server in a real project

    if (username === 'student' && password === 'password') {
        alert('Login successful!'); 
        // Redirect to exam area (you'd need another HTML page for the exam itself)
        window.location="Exam-main.html"; 
    } else {
        alert('Invalid credentials.');
    }
}