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
        expect(removeNonLettersFromInput("d.u.s.t")).toEqual("dust");
    });
});




