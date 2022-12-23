function validoInput() {
    var regexEmail = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.(com|net)$/;
    var emailUserit = document.getElementById('email').value;
    var regexPassword = /^[A-Z]+[A-Za-z0-9!@#$%^&*()_+=-]{7,}[0-9!@#$%^&*()_+=-]/;
    var passUserit = document.getElementById('password').value;

    if (emailUserit == "" && passUserit == "") {
        alert("Duhet te shenosh email dhe password!");
        return;
    } if (emailUserit == "") {
        alert("Email eshte shkruar gabim!\n\nEmail nuk duhet te jete i zbrazte!");
    } if (regexEmail != true) {
        alert("Email eshte shkruar gabim!\n\nEmail mund te kete shkronja te medha ose te vogla!\nEmail duhet te kete shenjen @\nEmail duhet te perfundoj me .com ose .net");
    }if (passUserit == "") {
        alert("Password eshte shkruar gabim!\n\nPassword nuk duhet te jete i zbrazte!");
    } if (regexPassword != true) {
        alert("Password eshte shkruar gabim!\n\nPassword duhet te jete i gjate minimum 7 karaktere!\nPasswordi duhet te filloj me shkronje te madhe!");
    }
}

function validoInputSignup() {
    var regexEmriU = /^[A-Z][A-Za-z]{1,}$/;
    var emriUserit = document.getElementById('emri').value;
    var regexMbimriU = /^[A-Z][A-Za-z]{1,}$/;
    var mbiemrilUserit = document.getElementById('mbiemri').value;
    var regexEmailUserit = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.(com|net)$/;
    var emailUseritS = document.getElementById('emailS').value;
    var regexPasswordUserit = /^[A-Z]+[A-Za-z0-9!@#$%^&*()_+=-]{7,}[0-9!@#$%^&*()_+=-]/;
    var passUseritS = document.getElementById('passwordS').value;
    var passKUseritS = document.getElementById('passwordK').value;

    if (emriUserit == "" && mbiemrilUserit == "" && emailUseritS == "" && passUseritS == "" && passKUseritS == "") {
        alert("Duhet te plotesoni te dhenat!");
        return;
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

    } else if (passUseritS != passKUseritS) {
        alert("Password-et nuk perputhen!")

    } else {
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