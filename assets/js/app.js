$(document).ready(function () {    // open & close of table to input(numbers)
    $(".btn1").click(function () {
        $("#table").hide();
        $("#table2").show();
        $("#table3").hide();
    });
    $(".btn2").click(function () {
        $("#table").show();
        $("#table2").hide();
        $("#table3").hide();
    });
    $(".btn3").click(function () {
        $("#table3").show();
        $("#table2").hide();
        $("#table").hide();
    });
});

function showDiv(toggle) {
    document.getElementById(toggle).style.display = 'block';
}

function showDiv(toggle1) {
    document.getElementById(toggle1).style.display = 'block';
}

function showDiv(toggle2) {
    document.getElementById(toggle2).style.display = 'block';
}

$(document).ready(function () {
    $('#plsme').fadeOut(3000); // 5 seconds x 1000 milisec = 5000 milisec
});

// Open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.width = "100%";
    document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
