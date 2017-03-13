// Sets color on the boxes from the first submitted to the last submitted. Sets it in the order getRandomColor()'s colors are set. 
$( document ).ajaxComplete(function() {
    var n = 0;
    for (var i = $(".questionBox").length - 1; i >= 0; i--) {
        if (n > 5) {
            n = 0;
        }
        $(".questionBox")[i].style.backgroundColor = getRandomColor(n);
        n = n + 1
    };
})

function getRandomColor(val) {
    switch(val) {
        case 0:
            return "#AB47BC";
        case 1:
            return "#EC407A";  
        case 2:
            return "#FFEE58";
        case 3:
            return "#FF7043";
        case 4:
            return "#FFA726";
        case 5:
            return "#66BB6A";
    }
}

/*function getRandomColor() {
    var val = Math.floor((Math.random()*6));
    switch(val) {
        case 0:
            return "#AB47BC";
        case 1:
            return "#EC407A";  
        case 2:
            return "#FFEE58";
        case 3:
            return "#FF7043";
        case 4:
            return "#FFA726";
        case 5:
            return "#66BB6A";
    }
}*/



/*
$( document ).ajaxComplete(function() {
    $(".questionBox").each(function( i ) {
        if ( this.style.backgroundColor == "" ) {
            this.style.backgroundColor = getRandomColor();
        }
    console.log(this)
    });
});*/

