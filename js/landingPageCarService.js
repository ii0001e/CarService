function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

$(document).ready(function () {
    var o = document.getElementById('email');
    o.oninput = function (e) {
        console.log(o.value, validateEmail(o.value));
        if (!validateEmail(o.value)) {
            $("#email-warning").css("visibility", "visible");
        } else {
            $("#email-warning").css("visibility", "hidden");
        }
    };
    o.onpropertychange = o.oninput;

    sleep(100);

    var h1 = $('#login-and-advertise').height();
    var h2 = $("#slideshow1").height();

    if (h1 > h2) {
        $("#slideshow1 .item").css("min-height", (h - 30) + "px");
    } else {
        var h3 = $("#login").height();
        var h4 = $("#ring-advertise").height();
        // $("#ring-advertise").css("margin-top", (h2 - h3 - h4 - 10) + "px");
        $("#ring-advertise-img").css("height", (h2 - h3 - 10) + "px");
    }
});