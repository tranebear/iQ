function addQuestion(text = document.getElementById("question").value) {
    
    var div = document.createElement("div");
    // Lage det fargerikt
    div.id = getRandomColor();
    
    div.innerHTML = text + '<br>';
    
    if(text != ""){
    document.getElementById("content").insertBefore(div, document.getElementById("content").firstChild);
    document.getElementById("question").value = "";
        return true;
    };
    
    return false;
}

module.exports = addQuestion;

function getRandomColor() {
    var val = Math.floor((Math.random()*10));
    switch(val) {
        case 0:
            return "aqua";
        case 1:
            return "blue";  
        case 2:
            return "Coral";
        case 3:
            return "DarkGoldenRod";
        case 4:
            return "DarkSlateGrey";
        case 5:
            return "DeepPink";
        case 6:
            return "Gold";
        case 7:
            return "GreenYellow";
        case 8:
            return "LightSeaGreen";
        case 9:
            return "Red";
    }
}
/*
document.getElementById("question").addEventListener("keydown", function(event){
    event.preventDefault();
    if (event.keyCode == 13) {
        document.getElementById("button").click();
        };
    }); */

var button_enter = function() {
    $("form input").keypress(function (e) {
        if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
            $('button[type=submit] .default').click();
            return false;
        } else {
            return true;
        }
    });
};



