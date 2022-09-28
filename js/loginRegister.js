//declare the function
function flipForms() {
    //get element by id
    var loginForm = document.getElementById(loginForm);
    var registerForm = document.getElementById(registerForm);
    var btn = document.getElementById(flipFormBtn);

    //see what form is on display and change it
    if (loginForm.classList.contains('hiddenForm')) {
        loginForm.classList.add('hiddenForm');
        registerForm.classList.remove('hiddenForm');
        btn.textContent = "Login"
    } else {
        loginForm.classList.remove('hiddenForm');
        registerForm.classList.add('hiddenForm');
        btn.textContent = "Register"
    }
}
