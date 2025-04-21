function validateForm() {
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirm_password").value;
    const errorMsg = document.getElementById("errorMsg");

    if (password !== confirmPassword) {
        errorMsg.innerText = "Passwords do not match!";
        return false;
    }

    return true;
}
