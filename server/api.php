<?php
	//$urlSite = "http://localhost/selloRojoAdminC/index.php/";
	$urlSite = "http://integrattodev.cloudapp.net/selloRojoAdmin/index.php/";

	function getProductById($id,$idPre){
		global $urlSite;
		$curl_handle = curl_init();
	    curl_setopt($curl_handle, CURLOPT_URL, $urlSite.'front/getProductById?p='.$id.'&pre='.$idPre);
	    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    $buffer = curl_exec($curl_handle);
	    if($buffer){
	    	curl_close($curl_handle);
	    $json = json_decode($buffer,false);
	    //var_dump($json);
	    return $json;
	    }else{
	    	echo curl_error($curl_handle);
	    }
	}

	function getRandom($idT){
		global $urlSite;
		$curl_handle = curl_init();
	    curl_setopt($curl_handle, CURLOPT_URL, $urlSite.'front/getRandomProducts?idT='.$idT);
	    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    $buffer = curl_exec($curl_handle);
	    if($buffer){
	    	curl_close($curl_handle);
	    $json = json_decode($buffer,false);
	    //echo "<br><br><br>";
	    //var_dump($json);
	    return $json;
	    }else{
	    	echo curl_error($curl_handle);
	    }
	}

?>