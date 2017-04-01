
<style>


    input  {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        text-align: center;

    }

    input:hover {
        /*background-color: #45a049;*/
        /*display: inline-block;*/
    }

    input [type=submit] {
        width: 100%;
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
        margin:7px;




</style>

<div class="inputFormWithButton">


    <input
            type="text"
            maxlength = "200"
            name="question"
            id="question"
            placeholder="Write your question here...">
    <div
            type="submit"
            id="submit"
            class="submitClass inputFormWithButton"
            onclick='submitQuestion($("#question").val())'
            value="Publish"
            style="background-color:green;
            width:700px;
            padding: 10px;
            ">Submit
    </div>


</div>

<!-- Denne submit knappen MÅ være en div -->

<div




