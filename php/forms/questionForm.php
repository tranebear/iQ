
	
<div class="inputFormWithButton">  
	<input type="textarea" maxlength = "200" name="question" id="question" placeholder="Write your question here...">
</div>

<!-- Denne submit knappen MÅ være en div -->
<div id="submit" class="submitClass inputFormWithButton" type="submit" onclick='submit($("#question").val())' value="Publish" style="background-color:green; width:50px; padding: 10px;">Submit</div>


