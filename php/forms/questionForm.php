
<style>


    input  {
        width: 400%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        text-align: center;
    }

    input:hover {
        background-color: #45a049;
        display: inline-block;
    }

    input[type=submit] {
        width: 4000%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    div {
        border-radius: 7px;




</style>

<div class="inputFormWithButton">


    <input
            type="text"
            maxlength = "200"
            name="question"
            id="question"
            placeholder="Write your question here...">



</div>

<!-- Denne submit knappen MÅ være en div -->
<div id="submit" class="submitClass inputFormWithButton" type="submit" onclick='submitQuestion($("#question").val())' value="Publish" style="background-color:green; width:70px; padding: 10px;">Submit</div>





