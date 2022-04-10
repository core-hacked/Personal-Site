$(function(){
    $("#landing").show();
    $("#about").hide();
    $("#contact").hide();
});

function ShowLanding() {
    $("#landing").show();
    $("#about").hide();
    $("#contact").hide();
}

function ShowContact() {
    $("#landing").hide();
    $("#about").hide();
    $("#contact").show();
}

function ShowAbout() {
    $("#landing").hide();
    $("#about").show();
    $("#contact").hide();
}