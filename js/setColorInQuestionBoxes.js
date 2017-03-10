function appendColorStyle() {
	var box = document.getElementByClassName("questionBox");
	box.style.background-color = getRandomColor();
}

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