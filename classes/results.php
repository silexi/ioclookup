<?php 

############################
# HASH RESULTS PRINT SECTION
############################
function getHashResults($hash){
	$results = getFileHashReputation($hash); // get hash results
	//Virustotal Start
	$url = $results['Virustotal'];
	$title = "Virustotal";
	$description = "Virustotal Result";
	echo"
	        <div class='resultContainer'>
	            <h3 class='title'>
	                <a class='result' href='$url'>
	                    $title
	                </a>
	            </h3>
	            <span class='url'>$url</span>
	            <span class='description'>$description</span>
	        </div>
	    ";
	//Virustotal End
	//IBM X-Force Start
	$title = "IBM X-Force";
	$url = $results[$title];
	$description = "$title Result";
	echo"
	        <div class='resultContainer'>
	            <h3 class='title'>
	                <a class='result' href='$url'>
	                    $title
	                </a>
	            </h3>
	            <span class='url'>$url</span>
	            <span class='description'>$description</span>
	        </div>
	    ";
	//IBM X-Force End
	//Any.Run Start
	$title = "Any.Run";
	$url = $results[$title];
	$description = "$title Results Searching with Google";
	echo"
	        <div class='resultContainer'>
	            <h3 class='title'>
	                <a class='result' href='$url'>
	                    $title
	                </a>
	            </h3>
	            <span class='url'>$url</span>
	            <span class='description'>$description</span>
	        </div>
	    ";
	//Any.Run End

	//Print Result Count:
	    $resultsCount = count($results);
	echo "</div>"; //search content end
	echo "<p class='resultsCount'>Available $resultsCount Results</p>";

}


###############################
# PROCESS RESULTS PRINT SECTION
###############################
function getProcessInformation($text){
	$results = getProcessTextInformation($text); // get hash results from functions.php
	//Microsoft Process Search Start
	$url = $results['Microsoft Docs'];
	$title = "Microsoft Docs";
	$description = "Microsoft Docs Result";
	echo"
	        <div class='resultContainer'>
	            <h3 class='title'>
	                <a class='result' href='$url'>
	                    $title
	                </a>
	            </h3>
	            <span class='url'>$url</span>
	            <span class='description'>$description</span>
	        </div>
	    ";
	//Microsoft Process Search End

	//Process Search with Google Start
	$url = $results['With Google'];
	$title = "With Google";
	$description = "With Google Result";
	echo"
	        <div class='resultContainer'>
	            <h3 class='title'>
	                <a class='result' href='$url'>
	                    $title
	                </a>
	            </h3>
	            <span class='url'>$url</span>
	            <span class='description'>$description</span>
	        </div>
	    ";
	//Process Search with Google End
	//Print Result Count:
	    $resultsCount = count($results);
	echo "</div>"; //search content end
	echo "<p class='resultsCount'>Available $resultsCount Result</p>";

}






?>