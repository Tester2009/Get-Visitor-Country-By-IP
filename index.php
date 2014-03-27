<?php
/*
*  Proudly Coded by Tester2009 . 
*  <3 Cat xD
*  https://www.facebook.com/Tester2009
*  https://github.com/alepcat1710
*  Feel free to use . Do not change copyright, mastah !
*/


// Get ip .
	function userip()
	// With CloudFlare reverse IP support
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP']))
		//check ip from share internet
			{
				$ip=$_SERVER['HTTP_CLIENT_IP'];
			}
			elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
			//to check ip is pass from proxy//
			{
				$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
			}
			elseif (isset($_SERVER["HTTP_CF_CONNECTING_IP"]))
			{
				$ip=$_SERVER["HTTP_CF_CONNECTING_IP"];
			} else {
				$ip=$_SERVER['REMOTE_ADDR'];
			}
			return $ip;
	}

	$iphere = userip();

	function ip_details($ip) {
		$json = file_get_contents("http://ipinfo.io/{$ip}/json/");
   		$details = json_decode($json);
    	return $details;
    }

    $details = ip_details($iphere);
    $getcountry = $details->country;  // => MY

    if ($getcountry == "MY")
    {
    	echo '<br />Hello';
    }
    else
    {
    	echo '<br />Bye bye';
    }


?>
