// Function to open the popup
    function openPopup(id) {
      document.getElementById(id + 'Popup').style.display = 'flex';
    }

    // Function to close the popup
    function closePopup(id) {
      document.getElementById(id + 'Popup').style.display = 'none';
    }

// openPopup validation
 function validateForm(id) {
        var password = document.getElementById('user_password').value;
        var confirmPassword = document.getElementById('conf_password').value;

        if (password !== confirmPassword) {
            document.getElementById('passwordMatch').innerHTML = 'Password and Confirm Password do not match!';
            return false;
        } else if (!/^(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9]).{8,}$/.test(password)) {
            document.getElementById('passwordMatch').innerHTML = 'Password must contain at least one uppercase letter, one number, and one special character, and be at least 8 characters long!';
            return false;
        } else {
            document.getElementById('passwordMatch').innerHTML = '';
            return true;
        }
    }


// password show and hide validation
document.getElementById('togglePassword').addEventListener('click', function () {
        var passwordInput = document.getElementById('user_password');
        var toggleButton = document.getElementById('togglePassword');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            this.classList.add("fa-eye");
            this.classList.remove("fa-eye-slash");
        } else {
            passwordInput.type = 'password';
            this.classList.remove("fa-eye");
            this.classList.add("fa-eye-slash");
        }
    });

document.getElementById('conf_togglePassword').addEventListener('click', function () {
        var passwordInput = document.getElementById('conf_password');
        var toggleButton = document.getElementById('conf_togglePassword');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            this.classList.add("fa-eye");
            this.classList.remove("fa-eye-slash");
        } else {
            passwordInput.type = 'password';
            this.classList.remove("fa-eye");
            this.classList.add("fa-eye-slash");
        }
    });