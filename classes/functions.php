<?php 
function is_valid_domain_name($domain_name)
{
    return (preg_match("/^([a-z\d](-*[a-z\d])*)(\.([a-z\d](-*[a-z\d])*))*$/i", $domain_name) //valid chars check
            && preg_match("/^.{1,253}$/", $domain_name) //overall length check
            && preg_match("/^[^\.]{1,63}(\.[^\.]{1,63})*$/", $domain_name)   ); //length of each label
}
function detectInput($inp){
//	if (strpos($inp, '@') !== false) {
//		if ((substr($inp, strlen($inp)-1,1) == "@") || (substr($inp, 0,1) == "@")) {
//    		goto emailFail;
//    	}
//    	elseif (substr_count($inp,"@") >= 2) {
//    		goto emailFail;
//    	}
//		return "This is definitely an email.";
//    	emailFail:
//    	return "Seems like EMAIL but there is something wrong your input. (check your '@' character)";
//    }
//    elseif ((strpos($inp, '.') !== false) && (strpos($inp, '@') !== true) && (substr_count($inp,".") !== 3)){
//    	isDomain:
//    	if (filter_var(gethostbyname($inp), FILTER_VALIDATE_IP)) {
//			return "This is definitely a domain.";
//		}
//		else{
//			$blocks = explode(".", $inp);
//			$lastBlockNum = count($blocks)-1;
//			if (is_numeric($blocks[$lastBlockNum]) == true) {
//				return "If this is domain, could not be the last block number '$blocks[$lastBlockNum]'.";
//			}
//			return "Seems like domain, but im not sure.";
//		}
//    	
//    }
//    elseif (substr_count($inp,".") == 3){
//    	$blocks = explode(".", $inp);
//    	foreach ($blocks as $blok) {
//    		if (is_numeric($blok)) {
//    			# nothing else...
//    		}
//    		else {
//    			if (filter_var(gethostbyname($inp), FILTER_VALIDATE_IP)) {
//    				goto isDomain;
//    			}
//    			else{
//    				goto ipFail;
//    			}
//    		} 
//    	}
//    	
//    	
//    	return "This is definitely an IP Address";
//    	ipFail:
//    	return "Seems like IP Address or domain but there is something wrong your input. (check your address, maybe wrong separate characters '.' or block count)";
//    }
//	else{
//		switch (strlen($inp)) {
//			case 32:
//				return "This is probably MD5 hash.";
//				break;
//			case 40:
//				return "This is probably SHA-1 hash.";
//				break;
//			case 64:
//				return "This is probably SHA-256 hash.";
//				break;
//			default:
//				return "Probably Just Text";
//				break;
//		}
//	}
	if (strpos($inp, '@') !== false) {
		if ((substr($inp, strlen($inp)-1,1) == "@") || (substr($inp, 0,1) == "@")) {
    		goto emailFail;
    	}
    	elseif (substr_count($inp,"@") >= 2) {
    		goto emailFail;
    	}
		return "This is definitely an email.";
    	emailFail:
    	return "Seems like EMAIL but there is something wrong your input. (check your '@' character)";
    }
    elseif ((strpos($inp, '.') !== false) && (strpos($inp, '@') !== true) && (substr_count($inp,".") !== 3)){
    	isDomain:
    	if (filter_var(gethostbyname($inp), FILTER_VALIDATE_IP)) {
			return "This is definitely a domain.";
		}
		else{
			$blocks = explode(".", $inp);
			$lastBlockNum = count($blocks)-1;
			if (is_numeric($blocks[$lastBlockNum]) == true) {
				return "If this is domain, could not be the last block number '$blocks[$lastBlockNum]'.";
			}
			return "Seems like domain, but im not sure.";
		}
    	
    }
    elseif (substr_count($inp,".") == 3){
    	$blocks = explode(".", $inp);
    	foreach ($blocks as $blok) {
    		if (is_numeric($blok)) {
    			# nothing else...
    		}
    		else {
    			if (filter_var(gethostbyname($inp), FILTER_VALIDATE_IP)) {
    				goto isDomain;
    			}
    			else{
    				goto ipFail;
    			}
    		} 
    	}
    	
    	
    	return "This is definitely an IP Address";
    	ipFail:
    	return "Seems like IP Address or domain but there is something wrong your input. (check your address, maybe wrong separate characters '.' or block count)";
    }
	else{
		switch (strlen($inp)) {
			case 32:
				return "This is probably MD5 hash.";
				break;
			case 40:
				return "This is probably SHA-1 hash.";
				break;
			case 64:
				return "This is probably SHA-256 hash.";
				break;
			default:
				return "Probably Just Text";
				break;
		}
	}
}

function getFileHashReputation($hash){
	return array(
		"Virustotal"	=>	"https://www.virustotal.com/gui/file/".$hash."/detection",
		"IBM X-Force"	=>	"https://exchange.xforce.ibmcloud.com/search/".$hash,
		"Any.Run"		=>	"https://www.google.com/search?q=site:any.run%20".$hash,
		""
	);

}

function getWindowsFileInformation($fileName){
	return array(
		"Microsoft Docs"	=> "https://docs.microsoft.com/tr-tr/search/?terms=".$fileName,
		"With Google"		=> "https://www.google.com/search?q=".$fileName
	);
}

?>
