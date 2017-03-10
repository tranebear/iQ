
<div class="reactButtons">
	<button id="speak_up" onClick="speakUp()">Speak up</button>
	
	<div id="speak_up_counter">
		<?php include 'fetch/fetchSpeakCounterFromDb.php';?>
	</div>
</div>


<div class="reactButtons">
	<button id="not_understand" onClick="notUnderstand()">Not understand</button>
	
	<div id="not_understand_counter">
		<?php include 'fetch/fetchNotUnderstandCounterFromDb.php';?>
	</div>
</div>


<div class="reactButtons">
	<button id="write_cleaner" onClick="writeCleaner()">Write cleaner</button>
	
	<div id="write_cleaner_counter">
	<?php include 'fetch/fetchWriteCounterFromDb.php';?>
	</div>
</div>

