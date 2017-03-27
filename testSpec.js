/**var questionIsEmpty = require('../js/textfield');

describe('Textfield', function(){
	it('should not be empty', function(){
		
		expect(questionIsEmpty("")).toEqual(true);
	});
});

 **/

var isBadWord = require('../js/submitButton');
var isBadInput = require('../js/submitButton');


describe('Inputfield', function () {
    it('has bad word', function () {
        expect(isBadWord("faen")).toEqual(true);
    });
    it('has bad input', function () {
        expect(isBadInput("Du er faen meg teit.")).toEqual(true);
    });
});



