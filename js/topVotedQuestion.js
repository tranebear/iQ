

//Ajax for highest voted question:
function getHighestQuestion() {
    setInterval(function(){
        $.ajax({
            url: 'fetch/fetchHighestVotedQuestion.php',
            cache: false
        })
            .done(function( html ) {
                $( "#upVoteContent" ).html(html);
            });
    }, 1000);
}

getHighestQuestion();
/*

 //Get highest voted when loading page:
 */
 /*$.get('fetch/fetchHighestVotedQuestion.php').done(function (data) {
 $( "#upVoteContent" ).html(data);
 });


//Call if button has been clicked
$(".upVoteButton").one('click',(function () {
    $.ajax({
        url: 'fetch/fetchHighestVotedQuestion.php',
        cache: false
    })
        .done(function (data) {
            $( "#upVoteContent" ).html(data);
            console.log("Upvote så caller på get highest voted");
        })
}));

$(".downVoteButton").one('click',(function () {
    $.ajax({
        url: 'fetch/fetchHighestVotedQuestion.php',
        cache: false
    })
        .done(function (data) {
            $( "#upVoteContent" ).html(data);
            console.log("Downvote så caller på get highest voted");
        })
}));*/