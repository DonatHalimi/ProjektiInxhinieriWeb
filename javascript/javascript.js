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

function validoInputSignup() {
    var emriUserit = document.getElementById('emri').value;
    var mbiemrilUserit = document.getElementById('mbiemri').value;
    var emailUseritS = document.getElementById('emailS').value;
    var passUseritS = document.getElementById('passwordS').value;
    var passKUseritS = document.getElementById('passwordK').value;

    if (emriUserit == "" && mbiemrilUserit == "" && emailUseritS == "" && passUseritS == "" && passKUseritS == "") {
        alert("Duhet te plotesoni te dhenat!");

    } else if (emriUserit == "") {
        alert("Duhet te shenoni emrin!");

    } else if (mbiemrilUserit == "") {
        alert("Duhet te shenoni mbiemrin!");

    } else if (emailUseritS == "") {
        alert("Duhet te shenosh email!");

    } else if (passUseritS == "") {
        alert("Duhet te shenoni passwordin");

    } else if (passKUseritS == "") {
        alert("Duhet ta konfirmoni passwordin!");

    } else if (passUseritS.length < 8) {
        alert("Password-i duhet ti kete se paku 8 karaktere!");

    } else if (passUseritS.search(/[A-Z]/) < 0) {
        alert("Password-i duhet te kete shkronje te madhe!");

    }else if (passUseritS != passKUseritS) {
        alert("Password-et nuk perputhen!")

    } else {
        alert("Jeni regjistruar me sukses!");
    }
}

function validoInputRezervo() {
    var dataZ = document.getElementById('dataZ').value;
    var orari = document.getElementById('orari').value;
    var persona = document.getElementById('persona').value;
    var filmZ = document.getElementById('filmZ').value;
    var qytet = document.getElementById('qytet').value;


    if (dataZ == "" && orari == "" && persona == "" && filmZ == "" && qytet == "") {
        alert("Duhet te plotesoni te dhenat!");
        
    } else if (dataZ == "") {
        alert("Duhet te zgjedhni daten");

    } else if (orari == "") {
        alert("Duhet te zgjedhni orarin");

    } else if (persona == "") {
        alert("Zgjedhni sa persona jeni");

    } else if (filmZ == "") {
        alert("Zgjedhni cilin film deshironi ta shikoni");

    } else if (qytet == "") {
        alert("Zgjedhni qytetin ku deshironi te rezervoni");

    } else {
        alert("Ju rezervuat me sukses")
    }
}