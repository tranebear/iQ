
//input knapp
var input = document.getElementsByName('inputQuestion');

	//Lager funksjonen addQuestion() slik at man kan legge til flere spørsmål
	function addQuestion() {
		var addQuestion = document.createElement("label");
		addQuestion.innerHTML = '<name = "newQuestion" id = "' + idCount + '">' + input[0].value + '<br>';
		document.getElementById('Question').appendChild(addQuestion);
		
	};




//TESTING  ONCLICK ? ADDEVENT ? 
var questionList = document.getElementsByName('Question');
var inputText = document.getElementsByName('inputQuestion')[0];
var button = document.getElementById('button');

describe('DOM test', function() {
	it('Div-element for questions exists', function(){
		expect(questionList).to.not.equal(null);
	});
	it('input field should be set to type text', function(){
		expect(inputText.getAttribute('type')).to.equal('text');
	});
	it('Post-button has the right text', function(){
		expect(button.innerHTML).to.equal('Post');
	});
});