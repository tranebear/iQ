
//Removes nonletters from the input string
function removeNonLettersFromInput(input) {
    var alfabetet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','æ','ø','å','ñ',' '];
    input = input.toLowerCase();
    var result = '';
    for (var i = 0; i < input.length; i++) {
        for (var j = 0; j < alfabetet.length; j++) {
            if (input[i].indexOf(alfabetet[j]) > -1) {
                result = result + input[i];
            }
        }
    }
    return result;
}

//Export function to testSpec.js
module.exports = removeNonLettersFromInput;

//Returns the full sentence string input as an array
function returnInputAsArray(input) {
    var arraysentence = input.split(" ");
    var mellom = "";

    var arraysize = arraysentence.length;
    var i = 0;
    while(i < arraysize) {
        if  (arraysentence[i] == '') {
            arraysentence.splice(i,1);
            i--;
        }
        i++;
    }return arraysentence;
}

//inputword is a single word to be checked against blacklist
function isBadWord(inputword) {
    var blackList =['jævla','fitte','dust','kuk','faen','fittekuk','faens','helvete','drittsekk','satan','pokker','jævlig','føkka','fuckings','morraknuller','fuck','fuckings'];
    for (var i=0; i < blackList.length; i++) {
        if (inputword == blackList[i]) {
            return true;
        }
    }return false;
}

//Export functions to testSpec.js
module.exports = isBadWord;

// input is the String that is submitted. .
function isBadInput(inputString) {
    var inputArray = returnInputAsArray(removeNonLettersFromInput(inputString));
    for (var i = 0; i < inputArray.length; i++) {
        if (isBadWord(inputArray[i])) {
            return true;
        }
    }return false;
}

//Export function to testSpec.js
module.exports = isBadInput;

//Submits the value in question field in questionForm.php when the submitDiv is clicked if it is good input.
function submitQuestion(question) {
    if (!isBadInput(question)) {
        $.ajax({
            url:"../php/insert/insertQuestionToDb.php?question=" + question, //the page containing php script
            type: "POST", //request type
        });
    }if (isBadInput(question)) {
        alert("Watch your language!!");
    }
}