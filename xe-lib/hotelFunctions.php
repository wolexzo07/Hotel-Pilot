<?php
	
	function currentConnection(){
		
		return switchState("l"); // l | p 
		
	}
	
	function switchState($opt){
		
		$allowed = ["l","p"];
		
		if(in_array($opt,$allowed)){
			
			if($opt == "l"){
				
				$url = "https://localhost/hotel";
				
			}

			if($opt == "p"){
				
				$url = "https://hotels.com";
				
			}
			
			return $url;
			
		}
		
	}
	
	function h_auth($pageToken){
		
		if(!isset($pageToken)){
			
			exit();
			
		}
		
	}
	
	function h_checkSession(){
		
		if(x_validatesession("XELOWGC_HOTEL_ID")){
			
			$response = 1;
			
		}else{
			
			$response = 0;
			
		}
		
		return $response;
		
	}
	
?>