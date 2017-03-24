<table>
    <tr>
        <th>
            <div class="reactButtons">
                <div id="speak_up" class="reactButtonsCounter">
                    <img src="../png/buttonlouder.png" >

                    <div id="speak_up_counter" class="counters">
                        <?php include 'fetch/fetchSpeakCounterFromDb.php';?>
                    </div>
                </div>
            </div>
        </th>

        <th>
            <div class="reactButtons">
                <div id="not_understand" class="reactButtonsCounter">
                    <img src="../png/buttonquestion.png" >

                    <div id="not_understand_counter" class="counters">
                        <?php include 'fetch/fetchNotUnderstandCounterFromDb.php';?>
                    </div>
                </div>
            </div>
        </th>

        <th>
            <div class="reactButtons">
                <div id="write_cleaner" class="reactButtonsCounter">
                    <img src="../png/buttonbigger.png" >

                    <div id="write_cleaner_counter" class="counters">
                        <?php include 'fetch/fetchWriteCounterFromDb.php';?>
                    </div>
                </div>
                <!--<button id="write_cleaner" onclick="$(this.id).one('click',writeCleaner())">Write cleaner</button>-->
                <!--<button id="write_cleaner">Write cleaner</button>-->
            </div>
        </th>
    </tr>
</table>

<script type="text/javascript">

    //Loading the voting amount from db
    setInterval(function(){
        $('#speak_up_counter').load('http://org.ntnu.no/tdt4140iq/iQ/php/fetch/fetchSpeakCounterFromDb.php');
    }, 10000);

    setInterval(function(){
        $('#not_understand_counter').load('http://org.ntnu.no/tdt4140iq/iQ/php/fetch/fetchNotUnderstandCounterFromDb.php');
    }, 10000);

    setInterval(function(){
        $('#write_cleaner_counter').load('http://org.ntnu.no/tdt4140iq/iQ/php/fetch/fetchWriteCounterFromDb.php');
    }, 10000);


    //The functions under is for just clicking once at the react buttons
    $("#write_cleaner").one("click", function() {
        writeCleanerClicks += 1;
        document.getElementById("write_cleaner_counter").innerHTML = writeCleanerClicks;
        $.ajax({
            url:"../php/update/updateWriteCounterToDb.php", //the page containing php script
            type: "POST", //request type
        });
    });

    $("#not_understand").one("click", function() {
        notUnderstandClicks += 1;
        document.getElementById("not_understand_counter").innerHTML = notUnderstandClicks;
        $.ajax({
            url:"../php/update/updateNotUnderstandCounterToDb.php", //the page containing php script
            type: "POST", //request type
        });
    });

    $("#speak_up").one("click", function() {
        speakUpClicks += 1;
        document.getElementById("speak_up_counter").innerHTML = speakUpClicks;
        $.ajax({
            url:"../php/update/updateSpeakCounterToDb.php", //the page containing php script
            type: "POST", //request type
        });
    });
</script>

