function validoInput() {
    var emailUserit = document.getElementById('email').value;
    var passUserit = document.getElementById('password').value;


    if (emailUserit == "" && passUserit == "") {
        alert("Duhet te shenosh email dhe password!");

    } else if (emailUserit == "") {
        alert("Duhet te shenosh email!");

    } else if (passUserit == "") {
        alert("Duhet te shenosh password!");

    } else {
        alert("Ju keni hyre me sukses!");
    }
}