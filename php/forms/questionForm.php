
	
<div class="inputFormWithButton">  
	<input type="textarea" maxlength = "200" name="question" id="question" placeholder="Write your question here...">
</div>

<!-- Denne submit knappen MÅ være en div -->
<div id="submit" class="submitClass inputFormWithButton" type="submit" onclick='submitQuestion($("#question").val())' value="Publish" style="background-color:green; width:70px; padding: 10px;">Submit</div>


