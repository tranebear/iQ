
<div class="reactButtons">
	<div id="speak_up" onClick="speakUp()">
		<img src="../png/questionmark.png" >
	</div>
	
	
	<div id="speak_up_counter" class="counters">
		<?php include 'fetch/fetchSpeakCounterFromDb.php';?>
	</div>
</div>


<div class="reactButtons">
	<button id="not_understand" onClick="notUnderstand()">Not understand</button>
	
	<div id="not_understand_counter" class="counters">
		<?php include 'fetch/fetchNotUnderstandCounterFromDb.php';?>
	</div>
</div>


<div class="reactButtons">
	<button id="write_cleaner" onClick="writeCleaner()">Write cleaner</button>
	
	<div id="write_cleaner_counter" class="counters">
	<?php include 'fetch/fetchWriteCounterFromDb.php';?>
	</div>
</div>

