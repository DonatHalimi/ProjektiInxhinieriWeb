function validoInput() {

    var regexEmail = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.(com|net)$/;
    var emailUserit = document.getElementById('email').value;

    var regexPassword = /^[A-Z]+[A-Za-z0-9!@#$%^&*()_+=-]{7,}/;
    var passUserit = document.getElementById('password').value;

    if (emailUserit == "" && passUserit == "") {
        alert("Duhet te shenosh email dhe password!");
        return;
    } if (emailUserit == "") {
        alert("Email eshte shkruar gabim!\n\nEmail nuk duhet te jete i zbrazte!");

    } if (!regexEmail.test(emailUserit)) {
        alert("Email eshte shkruar gabim!\n\nEmail duhet te kete vetem shkronja te vogla!\nEmail duhet te kete shenjen @\nEmail duhet te perfundoj me .com ose .net");

    } if (passUserit == "") {
        alert("Password eshte shkruar gabim!\n\nPassword nuk duhet te jete i zbrazte!");

    } if (!regexPassword.test(passUserit)) {
        alert("Password eshte shkruar gabim!\n\nPassword duhet te jete i gjate minimum 7 karaktere!\nPasswordi duhet te filloj me shkronje te madhe!\nPasswordi duhet te mbaroje me ndonje numer apo shenje");
    }
}

function validoInputSignup() {
    var regexEmriU = /^[A-Z]+[A-Za-z]{2,}/;
    var emriUserit = document.getElementById('emri').value;

    var regexMbiemriU = /^[A-Z]+[A-Za-z]{2,}$/;
    var mbiemrilUserit = document.getElementById('mbiemri').value;

    var regexEmailUserit = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.(com|net)$/;
    var emailUseritS = document.getElementById('emailS').value;

    var regexPasswordUserit = /^[A-Z]+[A-Za-z0-9!@#$%^&*()_+=-]{7,}/;
    var passUseritS = document.getElementById('passwordS').value;

    var passKUseritS = document.getElementById('passwordK').value;

    if (emriUserit == "" && mbiemrilUserit == "" && emailUseritS == "" && passUseritS == "" && passKUseritS == "") {
        alert("Duhet te plotesoni te dhenat!");
        return;

    } if (emriUserit == "") {
        alert("Emri eshte shkruar gabim!\nEmri nuk duhet te jete i zbrazte!");

    } else if (!regexEmriU.test(emriUserit)) {
        alert("Emri eshte shkruar gabim!\n\nEmri duhet te filloj me shkronje te madhe!\nEmri duhet te jete minimum 2 karaktere!");

    } if (mbiemrilUserit == "") {
        alert("Mbiemri eshte shkruar gabim!\nMbiemri nuk duhet te jete i zbrazte!");

    } else if (!regexMbiemriU.test(mbiemrilUserit)) {
        alert("Mbiemri eshte shkruar gabim!\n\nMbiemri duhet te filloj me shkronje te madhe!\nMbiemri duhet te jete minimum 2 karaktere!");

    } if (emailUseritS == "") {
        alert("Email eshte shkruar gabim!\nEmail nuk duhet te jete i zbrazte!");

    } else if (!regexEmailUserit.test(emailUseritS)) {
        alert("Email eshte shkruar gabim!\n\nEmail mund te kete shkronja te medha ose te vogla!\nEmail duhet te kete shenjen @\nEmail duhet te perfundoj me .com ose .net");

    } if (passUseritS == "") {
        alert("Password eshte shkruar gabim!\n\nPassword nuk duhet te jete i zbrazte!");

    } else if (!regexPasswordUserit.test(passUseritS)) {
        alert("Password eshte shkruar gabim!\n\nPassword duhet te jete i gjate minimum 7 karaktere!\nPasswordi duhet te filloj me shkronje te madhe!");

    } if (passKUseritS == "") {
        alert("Duhet ta konfirmoni passwordin!");

    } else if (passUseritS != passKUseritS) {
        alert("Password-et nuk perputhen!");

    } else if (regexEmriU.test(emriUserit) && regexMbiemriU.test(mbiemrilUserit) && regexEmailUserit.test(emailUseritS) && regexPasswordUserit.test(passUseritS) && passUseritS != passKUseritS) {
        alert("Jeni regjistruar me sukses!");
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
}

const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
        toTop.classList.add("active");
    } else {
        toTop.classList.remove("active");
    }
})

document.getElementById("prevBtn").addEventListener("click", function () {
    index--;
    if (index < 0) {
        index = varguIFotove.length - 1;
    }
    document.getElementById('foto').src = varguIFotove[index];
});

document.getElementById("nextBtn").addEventListener("click", function () {
    index++;
    if (index == varguIFotove.length) {
        index = 0;
    }
    document.getElementById('foto').src = varguIFotove[index];
});
