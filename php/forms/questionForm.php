<form method='post'>
	
	<div class="col-10-lg col-10-sm col-10-md col-10-xs">  
		<input type="text" name="question" id="question" placeholder="Write your question here...">
	</div>
	
	<!-- Denne submit knappen MÅ være en div -->
	<div id="submit" class="submitClass col-2-lg col-2-sm col-2-md col-2-xs" type="submit" onclick='submit($("#question").val())' value="Publish" style="background-color:green; width:50px; padding: 10px;">Submit</div>
</form>

