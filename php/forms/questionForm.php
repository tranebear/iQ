<form method='post'>
	  
	Question:
	<br>
		<input type = "text" name="question" id="question">
	<br>

	<!-- Denne submit knappen MÅ være en div -->
	<div id="enter" class="enterClass" type="submit" onclick='submit($("#question").val())' value="Publish" style="background-color:green; width:50px; padding: 10px;">Submit</div>
</form>

