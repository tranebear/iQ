function addQuestion() {
    var div = document.createElement("div");
    
    // Lage det fargerikt
    div.id = randomId();
    
    div.innerHTML = document.getElementById("message").value + '<br>';

    document.getElementById("content").insertBefore(div, document.getElementById("content").firstChild);
}

function randomId() {
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
        default:
            return "Jaja";
    }
}