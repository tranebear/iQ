/**var questionIsEmpty = require('../js/textfield');

describe('Textfield', function(){
	it('should not be empty', function(){
		
		expect(questionIsEmpty("")).toEqual(true);
	});
});

 **/

var isBadWord = require('../js/submitButton');
var isBadInput = require('../js/submitButton');
var removeNonLettersFromInput = require('../js/submitButton');

describe('Inputfield', function () {
    it('has bad word', function () {
        expect(isBadWord("dust")).toBeTruthy();
    });
    it('has bad input', function () {
        expect(isBadInput("Du er dust.")).toBeTruthy();
    });
    var str;
    it('has been modified. NoneLetters is removed. ', function () {
        str = removeNonLettersFromInput("d.u.s.t");
        expect(str).not.toEqual("dust");
    });
});


/**describe('Remove nonletters...', function () {
    it('like colon ":" ', function () {
        expect(removeNonLettersFromInput("De:nne lin:jen h:ar ingen kolon.:")).toEqual("denne linjen har ingen kolon.");
    });
})**/



