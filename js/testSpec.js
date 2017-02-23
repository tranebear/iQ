describe('Textfield', function(){
	var addQuestion = require('../js/textfield');

	it('should not be empty', function(){
		
		addQuestion.equal(true, addQuestion(""));
	});
})



