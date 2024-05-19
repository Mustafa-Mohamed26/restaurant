document.getElementById('signup-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
    
    const errors = {
      username: '',
      email: '',
      password: '',
      confirmPassword: ''
    };
    
    if (!username.trim()) {
      errors.username = 'Username is required';
    }
    
    if (!emailRegex.test(email)) {
      errors.email = 'Invalid email format';
    }
    
    if (!passwordRegex.test(password)) {
      errors.password = 'Password must contain at least 8 characters, including uppercase, lowercase, and numbers';
    }
    
    if (password !== confirmPassword) {
      errors.confirmPassword = 'Passwords do not match';
    }
    
    Object.keys(errors).forEach(field => {
      const errorElement = document.getElementById(`${field}-error`);
      errorElement.textContent = errors[field];
    });
    
    if (!Object.values(errors).some(error => error)) {
      event.target.submit();
    }
  });
  