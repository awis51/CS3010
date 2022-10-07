function usrValid () {
    var usr = document.getElementById("user");
    if (usr){
        if (usr.value === "" || usr.value.length < 6 || usr.value.length > 50) {

            var usrDiv = document.getElementById("user");
            if (usrDiv) {
                usrDiv.classList.add("is-invalid");
                usrDiv.classList.remove("is-valid");
            }
            var usrErr = document.getElementById("usrErr");
            if (usrErr) {
                usrErr.classList.remove("d-none");
                usrErr.classList.add("d-block");
            }
            return false;
        } else {
            var usrDiv = document.getElementById("user");
            if (usrDiv) {
                usrDiv.classList.remove("is-invalid");
                usrDiv.classList.add("is-valid");
            }
            var usrErr = document.getElementById("usrErr");
            if (usrErr) {
                usrErr.classList.add("d-none");
                usrErr.classList.remove("d-block");
            }

        }
    } return true;
}
function passValid () {
    var pswd = document.getElementById("pass");
    //password check
    var regs = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
    if (pswd.value !== "" && pswd.value.match(regs)) { //if empty
        var pswdDiv = document.getElementById("pass");
        if (pswdDiv) {
            pswdDiv.classList.remove("is-invalid");
            pswdDiv.classList.add("is-valid");
        }
        var pswdErr = document.getElementById("passErr");
        if (pswdErr) {
            pswdErr.classList.add("d-none");
            pswdErr.classList.remove("d-block");
        }
        return false;
    }else{
        var pswdDiv = document.getElementById("pass");
        if (pswdDiv) {
            pswdDiv.classList.add("is-invalid");
            pswdDiv.classList.remove("is-valid");
        }
        var pswdErr = document.getElementById("passErr");
        if (pswdErr) {
            pswdErr.classList.remove("d-none");
            pswdErr.classList.add("d-block");
        }
    }
    return true;
}
function pass1Valid () {
    var pswd1 = document.getElementById("pass1");
    var pswd = document.getElementById("pass");
    if (pswd.value !== pswd1.value || pswd1.value === "") { //if both mismatch.
        var pswd1Div = document.getElementById("pass1");
        if (pswd1Div) {
            pswd1Div.classList.add("is-invalid");
            pswd1Div.classList.remove("is-valid");
        }
        var pswd1Err = document.getElementById("pass1Err");
        if (pswd1Err) {
            pswd1Err.classList.remove("d-none");
            pswd1Err.classList.add("d-block");
        }
        return false;
    } else {
        var pswd1Div = document.getElementById("pass1");
        if (pswd1Div) {
            pswd1Div.classList.remove("is-invalid");
            pswd1Div.classList.add("is-valid");
        }
        var pswd1Err = document.getElementById("pass1Err");
        if (pswd1Err) {
            pswd1Err.classList.add("d-none");
            pswd1Err.classList.remove("d-block");
        }
    }
    return true;
}
function fnameValid() {
    var fname = document.getElementById("fname");
    if (fname){
        if (fname.value === "" || fname.value.length > 50) { //if empty
            var fnameDiv = document.getElementById("fname");
            if (fnameDiv) {
                fnameDiv.classList.add("is-invalid");
                fnameDiv.classList.remove("is-valid");
            }
            var fnameErr = document.getElementById("fnameErr");
            if (fnameErr) {
                fnameErr.classList.remove("d-none");
                fnameErr.classList.add("d-block");
            }
            return false;
        } else {
            var fnameDiv = document.getElementById("fname");
            if (fnameDiv) {
                fnameDiv.classList.remove("is-invalid");
                fnameDiv.classList.add("is-valid");
            }
            var fnameErr = document.getElementById("fnameErr");
            if (fnameErr) {
                fnameErr.classList.add("d-none");
                fnameErr.classList.remove("d-block");
            }
            return true;
        }
    }}
function lnameValid () {
    var lname = document.getElementById("lname");
    if (lname){
        if (lname.value === "" || lname.value.length > 50) { //if empty
            var lnameDiv = document.getElementById("lname");
            if (lnameDiv) {
                lnameDiv.classList.add("is-invalid");
                lnameDiv.classList.remove("is-valid");
            }
            var lnameErr = document.getElementById("lnameErr");
            if (lnameErr) {
                lnameErr.classList.remove("d-none");
                lnameErr.classList.add("d-block");
            }
            return false;
        } else {
            var lnameDiv = document.getElementById("lname");
            if (lnameDiv) {
                lnameDiv.classList.remove("is-invalid");
                lnameDiv.classList.add("is-valid");
            }
            var lnameErr = document.getElementById("lnameErr");
            if (lnameErr) {
                lnameErr.classList.add("d-none");
                lnameErr.classList.remove("d-block");
            }
            return true;
        }
    }
}
function numValid () {
    var num = document.getElementById("pnum");
    var reg = /^(1-)?\d{3}-\d{3}-\d{4}$/
    if (num){
        if (num.value.match(reg)) { //if empty
            var numDiv = document.getElementById("pnum");
            if (numDiv) {
                numDiv.classList.remove("is-invalid");
                numDiv.classList.add("is-valid");
            }
            var numErr = document.getElementById("numErr");
            if (numErr) {
                numErr.classList.add("d-none");
                numErr.classList.remove("d-block");
            }
            return false;
        } else {
            var numDiv = document.getElementById("pnum");
            if (numDiv) {
                numDiv.classList.add("is-invalid");
                numDiv.classList.remove("is-valid");
            }
            var numErr = document.getElementById("numErr");
            if (numErr) {
                numErr.classList.remove("d-none");
                numErr.classList.add("d-block");
            }
            return true;
        }
    }
}
function formatNum(num1){
    if (!num1) return num1;
    const phoneNumber = num1.replace(/[^\d]/g, '');
    const phoneNumberLength = phoneNumber.length;
    if (phoneNumberLength < 4) return phoneNumber;
    if (phoneNumberLength < 7) {
        return `${phoneNumber.slice(0, 3)}-${phoneNumber.slice(3)}`;
    }
    return `${phoneNumber.slice(0, 3)}-${phoneNumber.slice(
        3,
        6
    )}-${phoneNumber.slice(6, 9)}`;
}
function phoneNumberFormatter() {
    const inputField = document.getElementById('pnum');
    const formattedInputValue = formatNum(inputField.value);
    inputField.value = formattedInputValue;
}
function emailValid () {
    var email = document.getElementById("email");
    var reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
    if (email){
        if (email.value === "" || !email.value.match(reg)) { //if empty
            var emailDiv = document.getElementById("email");
            if (emailDiv) {
                emailDiv.classList.add("is-invalid");
                emailDiv.classList.remove("is-valid");
            }
            var emailErr = document.getElementById("emailErr");
            if (emailErr) {
                emailErr.classList.remove("d-none");
                emailErr.classList.add("d-block");
            }
            return false;
        } else {
            var emailDiv = document.getElementById("email");
            if (emailDiv) {
                emailDiv.classList.remove("is-invalid");
                emailDiv.classList.add("is-valid");
            }
            var emailErr = document.getElementById("emailErr");
            if (emailErr) {
                emailErr.classList.add("d-none");
                emailErr.classList.remove("d-block");
            }
            return true;
        }
    }
}
function addrValid() {
    var addr1 = document.getElementById("addr1");
    var addr2 = document.getElementById("addr2");
    if (addr1.value === "" || addr1.value.length > 100 || addr2.value.length > 100) { //if empty
        var addr1Div = document.getElementById("addr1");
        var addr2Div = document.getElementById("addr2");
        addr1Div.classList.add("is-invalid");
        addr1Div.classList.remove("is-valid");
        addr2Div.classList.add("is-invalid");
        addr2Div.classList.remove("is-valid");
        var addr1Err = document.getElementById("addr1Err");
        if (addr1Err){
            addr1Err.classList.remove("d-none");
            addr1Err.classList.add("d-block");
        }
        return false;
    } else {
        var addr1Div = document.getElementById("addr1");
        var addr2Div = document.getElementById("addr2");
        if (addr1Div) {
            addr1Div.classList.remove("is-invalid");
            addr1Div.classList.add("is-valid");
            addr2Div.classList.remove("is-invalid");
            addr2Div.classList.add("is-valid");
        }
        var addr1Err = document.getElementById("addr1Err");
        if (addr1Err) {
            addr1Err.classList.add("d-none");
            addr1Err.classList.remove("d-block");
        }
    }
    return true;
}
function cityValid() {
    var city = document.getElementById("city");
    if (city){
        if (city.value === "" || city.value.length > 50) { //if empty or over 50
            var cityDiv = document.getElementById("city");
            if (cityDiv) {
                cityDiv.classList.add("is-invalid");
                cityDiv.classList.remove("is-valid");
            }
            var cityErr = document.getElementById("cityErr");
            if (cityErr) {
                cityErr.classList.remove("d-none");
                cityErr.classList.add("d-block");
            }
            return false;
        } else {
            var cityDiv = document.getElementById("city");
            if (cityDiv) {
                cityDiv.classList.remove("is-invalid");
                cityDiv.classList.add("is-valid");
            }
            var cityErr = document.getElementById("cityErr");
            if (cityErr) {
                cityErr.classList.add("d-none");
                cityErr.classList.remove("d-block");
            }
            return true;
        }
    }
}
function stateValid () {
    var state = document.getElementById("state");
    if (state){
        if (state.value === "" || state.value.length > 52) { //if empty
            var stateDiv = document.getElementById("state");
            if (stateDiv) {
                stateDiv.classList.add("is-invalid");
                stateDiv.classList.remove("is-valid");
            }
            var stateErr = document.getElementById("stateErr");
            if (stateErr) {
                stateErr.classList.remove("d-none");
                stateErr.classList.add("d-block");
            }
            return false;
        } else {
            var stateDiv = document.getElementById("state");
            if (stateDiv) {
                stateDiv.classList.remove("is-invalid");
                stateDiv.classList.add("is-valid");
            }
            var stateErr = document.getElementById("stateErr");
            if (stateErr) {
                stateErr.classList.add("d-none");
                stateErr.classList.remove("d-block");
            }
            return true;
        }
    }
}
function zipValid () {
    var zip = document.getElementById("zip");
    if (zip){
        if (zip.value === "" || zip.value.length < 5 || zip.value.length > 10 || zip.value.match(/\D/)) { //if empty
            var zipDiv = document.getElementById("zip");
            if (zipDiv) {
                zipDiv.classList.add("is-invalid");
                zipDiv.classList.remove("is-valid");
            }
            var zipErr = document.getElementById("zipErr");
            if (zipErr) {
                zipErr.classList.remove("d-none");
                zipErr.classList.add("d-block");
            }
            return false;
        } else {
            var zipDiv = document.getElementById("zip");
            if (zipDiv) {
                zipDiv.classList.remove("is-invalid");
                zipDiv.classList.add("is-valid");
            }
            var zipErr = document.getElementById("zipErr");
            if (zipErr) {
                zipErr.classList.add("d-none");
                zipErr.classList.remove("d-block");
            }

            return true;
        }
        var zip = document.getElementById("zip");
        var str = zip.value;
        str = str.replace("-","");
        if (str.length > 5) {
            str = str.substring(0,5) + "-" + str.substring(5);
        }
        zip.value = str
    }
}
function genderValid () {
    if(document.getElementById('male').checked) {
        var genderDiv = document.getElementById("male");
        genderDiv.classList.remove("is-invalid");
        genderDiv.classList.add("is-valid");
        var genderErr = document.getElementById("genderErr");
        genderErr.classList.add("d-none");
        genderErr.classList.remove("d-block");
    }
    else if(document.getElementById('female').checked) {
        var genderDiv = document.getElementById("female");
        genderDiv.classList.remove("is-invalid");
        genderDiv.classList.add("is-valid");
        var genderErr = document.getElementById("genderErr");
        genderErr.classList.add("d-none");
        genderErr.classList.remove("d-block");
    }
    else if(document.getElementById('other').checked) {
        var genderDiv = document.getElementById("other");
        genderDiv.classList.remove("is-invalid");
        genderDiv.classList.add("is-valid");
        var genderErr = document.getElementById("genderErr");
        genderErr.classList.add("d-none");
        genderErr.classList.remove("d-block");
    }
    else {
        var genderDiv = document.getElementById("other");
        if (genderDiv) {
            genderDiv.classList.add("is-invalid");
            genderDiv.classList.remove("is-valid");
        }
        var genderErr = document.getElementById("genderErr");
        if (genderErr) {
            genderErr.classList.remove("d-none");
            genderErr.classList.add("d-block");
        }
    }
}
function maritalValid () {
    if(document.getElementById('married').checked) {
        var maritalDiv = document.getElementById("married");
        maritalDiv.classList.remove("is-invalid");
        maritalDiv.classList.add("is-valid");
        var maritalErr = document.getElementById("maritalErr");
        maritalErr.classList.add("d-none");
        maritalErr.classList.remove("d-block");
    }
    else if(document.getElementById('divorced').checked) {
        var martialDiv = document.getElementById("divorced");
        martialDiv.classList.remove("is-invalid");
        martialDiv.classList.add("is-valid");
        var martialErr = document.getElementById("maritalErr");
        martialErr.classList.add("d-none");
        martialErr.classList.remove("d-block");
    }
    else if(document.getElementById('single').checked) {
        var maritalDiv = document.getElementById("single");
        maritalDiv.classList.remove("is-invalid");
        maritalDiv.classList.add("is-valid");
        var maritalErr = document.getElementById("maritalErr");
        maritalErr.classList.add("d-none");
        maritalErr.classList.remove("d-block");
    }
    else {
        var maritalDiv = document.getElementById("single");
        if (maritalDiv) {
            maritalDiv.classList.add("is-invalid");
            maritalDiv.classList.remove("is-valid");
        }
        var martialErr = document.getElementById("maritalErr");
        if (martialErr) {
            martialErr.classList.remove("d-none");
            martialErr.classList.add("d-block");
        }
    }
}
function dateValid () {
    var date = document.getElementById("date");
    if (date){
        if (date.value === "") { //if empty
            var dateDiv = document.getElementById("date");
            if (dateDiv) {
                dateDiv.classList.add("is-invalid");
                dateDiv.classList.remove("is-valid");
            }
            var dateErr = document.getElementById("dateErr");
            if (dateErr) {
                dateErr.classList.remove("d-none");
                dateErr.classList.add("d-block");
            }
            return false;
        } else {
            var dateDiv = document.getElementById("date");
            if (dateDiv) {
                dateDiv.classList.remove("is-invalid");
                dateDiv.classList.add("is-valid");
            }
            var dateErr = document.getElementById("dateErr");
            if (dateErr) {
                dateErr.classList.add("d-none");
                dateErr.classList.remove("d-block");
            }
            return true;
        }
    }
}
function resetValid () {
    var usrDiv = document.getElementById("user");
    if (usrDiv) {
        usrDiv.classList.remove("is-invalid");
        usrDiv.classList.remove("is-valid");
    }
    var usrErr = document.getElementById("usrErr");
    if (usrErr) {
        usrErr.classList.add("d-none");
        usrErr.classList.remove("d-block");
    }
    var pswdDiv = document.getElementById("pass");
    if (pswdDiv) {
        pswdDiv.classList.remove("is-invalid");
        pswdDiv.classList.remove("is-valid");
    }
    var pswdErr = document.getElementById("passErr");
    if (pswdErr) {
        pswdErr.classList.add("d-none");
        pswdErr.classList.remove("d-block");
    }
    var pswd1Div = document.getElementById("pass1");
    if (pswd1Div) {
        pswd1Div.classList.remove("is-invalid");
        pswd1Div.classList.remove("is-valid");
    }
    var pswd1Err = document.getElementById("pass1Err");
    if (pswd1Err) {
        pswd1Err.classList.add("d-none");
        pswd1Err.classList.remove("d-block");
    }
    var fnameDiv = document.getElementById("fname");
    if (fnameDiv) {
        fnameDiv.classList.remove("is-invalid");
        fnameDiv.classList.remove("is-valid");
    }
    var fnameErr = document.getElementById("fnameErr");
    if (fnameErr) {
        fnameErr.classList.add("d-none");
        fnameErr.classList.remove("d-block");
    }
    var lnameDiv = document.getElementById("lname");
    if (lnameDiv) {
        lnameDiv.classList.remove("is-invalid");
        lnameDiv.classList.remove("is-valid");
    }
    var lnameErr = document.getElementById("lnameErr");
    if (lnameErr) {
        lnameErr.classList.add("d-none");
        lnameErr.classList.remove("d-block");
    }
    var numDiv = document.getElementById("pnum");
    if (numDiv) {
        numDiv.classList.remove("is-invalid");
        numDiv.classList.remove("is-valid");
    }
    var numErr = document.getElementById("numErr");
    if (numErr) {
        numErr.classList.add("d-none");
        numErr.classList.remove("d-block");
    }
    var emailDiv = document.getElementById("email");
    if (emailDiv) {
        emailDiv.classList.remove("is-invalid");
        emailDiv.classList.remove("is-valid");
    }
    var emailErr = document.getElementById("emailErr");
    if (emailErr) {
        emailErr.classList.add("d-none");
        emailErr.classList.remove("d-block");
    }
    var addr1Div = document.getElementById("addr1");
    var addr2Div = document.getElementById("addr2");
    if (addr1Div) {
        addr1Div.classList.remove("is-invalid");
        addr2Div.classList.remove("is-invalid");
        addr1Div.classList.remove("is-valid");
        addr2Div.classList.remove("is-valid");
    }
    var addr1Err = document.getElementById("addr1Err");
    if (addr1Err) {
        addr1Err.classList.add("d-none");
        addr1Err.classList.remove("d-block");
    }
    var cityDiv = document.getElementById("city");
    if (cityDiv) {
        cityDiv.classList.remove("is-invalid");
        cityDiv.classList.remove("is-valid");
    }
    var cityErr = document.getElementById("cityErr");
    if (cityErr) {
        cityErr.classList.add("d-none");
        cityErr.classList.remove("d-block");
    }
    var stateDiv = document.getElementById("state");
    if (stateDiv) {
        stateDiv.classList.remove("is-invalid");
        stateDiv.classList.remove("is-valid");
    }
    var stateErr = document.getElementById("stateErr");
    if (stateErr) {
        stateErr.classList.add("d-none");
        stateErr.classList.remove("d-block");
    }
    var zipDiv = document.getElementById("zip");
    if (zipDiv) {
        zipDiv.classList.remove("is-invalid");
        zipDiv.classList.remove("is-valid");
    }
    var zipErr = document.getElementById("zipErr");
    if (zipErr) {
        zipErr.classList.add("d-none");
        zipErr.classList.remove("d-block");
    }
    var genderDiv = document.getElementById("other");
    if (genderDiv) {
        genderDiv.classList.remove("is-invalid");
        genderDiv.classList.remove("is-valid");
    }
    var genderErr = document.getElementById("genderErr");
    if (genderErr) {
        genderErr.classList.add("d-none");
        genderErr.classList.remove("d-block");
    }
    var martialDiv = document.getElementById("single");
    if (martialDiv) {
        martialDiv.classList.remove("is-invalid");
        martialDiv.classList.remove("is-valid");
    }
    var martialErr = document.getElementById("martialErr");
    if (martialErr) {
        martialErr.classList.add("d-none");
        martialErr.classList.remove("d-block");
    }
    var dateDiv = document.getElementById("date");
    if (dateDiv) {
        dateDiv.classList.remove("is-invalid");
        dateDiv.classList.remove("is-valid");
    }
    var dateErr = document.getElementById("dateErr");
    if (dateErr) {
        dateErr.classList.add("d-none");
        dateErr.classList.remove("d-block");
    }
}
function registerHandlers() {
    document.getElementById("user").addEventListener("blur", usrValid);
    document.getElementById("pass").addEventListener("blur", passValid);
    document.getElementById("pass1").addEventListener("blur", pass1Valid);
    document.getElementById("fname").addEventListener("blur", fnameValid);
    document.getElementById("lname").addEventListener("blur", lnameValid);
    document.getElementById("pnum").addEventListener("blur", numValid);
    document.getElementById("email").addEventListener("blur", emailValid);
    document.getElementById("addr1").addEventListener("blur", addrValid);
    document.getElementById("addr2").addEventListener("blur", addrValid);
    document.getElementById("city").addEventListener("blur", cityValid);
    document.getElementById("state").addEventListener("blur", stateValid);
    document.getElementById("zip").addEventListener("blur", zipValid);
    document.getElementById("date").addEventListener("blur", dateValid);
    document.getElementById("gender").addEventListener("blur", genderValid);
    document.getElementById("marital").addEventListener("blur", maritalValid);
    document.getElementById("reset").addEventListener("click", resetValid);
}
