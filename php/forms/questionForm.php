<form method='post'>
	  
	<input type = "text" name="question" id="question" placeholder="Write your question here...">

	<!-- Denne submit knappen MÅ være en div -->
	<div id="submit" class="enterClass" type="submit" onclick='submit($("#question").val())' value="Publish" style="background-color:green; width:50px; padding: 10px;">Submit</div>
</form>

