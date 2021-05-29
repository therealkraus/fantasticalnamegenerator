$(document).ready(function () {
    GetData();

    $("#generate").click(function () {
        GetData();
    });
    
    $(".unlocked").click(function (event) {
        $(event.target).toggleClass("locked");
    });
});

function GetData() {
    var path = window.location.pathname;
    var page = path.split("/").pop();
    $.ajax({
        type: "POST",
        url: "getRandomNames.php",
        data: {pagename: page},
        dataType: "json",
        success: function (result) {
            console.log(result);
            PrintNames(result);
        }
    });
}

function PrintNames(names) {
    for (i = 0; i < names.length; i++) {
        if (!$('#responsecontainer' + i.toString()).hasClass("locked")) {
            $('#responsecontainer' + i.toString()).html(names[i]["adjective_nm"] + " " + names[i]["noun_nm"]);
        }
    }
}