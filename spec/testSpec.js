var questionIsEmpty = require('../js/textfield');

describe('Textfield', function(){
	it('should not be empty', function(){
		
		expect(questionIsEmpty("")).toEqual(true);
	});
})



