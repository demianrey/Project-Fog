<?php

//fogserverip
//v2portas

//FILL UP ALL VARIABLE [ $ ] | BASE TO YOUR DESIRE://

/* Site Data */
$site_name        = "Project Fog";
$site_description = "Premium Fast And Reliable Servers";
$site_template    = "flatly"; // (flatly, darkly, sketchy, lumen, materia)
$site_ip_address = "v"; // set site ip
$site_v2ray = "http://fogserverip:v2portas"; // v2ray ip and PORT
$site_config = "http://fogserverip/projectfog.html"; // list of config
$daily_limit_user = "30"; // set daily limit


/* Server Data */
/* Format: Server_Name, IP_Address, Root_Pass, Account_Validity */
/* Example: 1=>array(1=>"Name of your Server 1","your-ip-address","server-or-root-password","5"), */

$server_lists_array=array(
			1=>array(1=>"Fog Server 1","fogserverip","server-or-root-password","5"),
			2=>array(2=>"- Reserve - ","other-server-ip","server-or-root-password","5"),
			3=>array(3=>"- Reserve - ","other-server-ip","server-or-root-password","5"),
	);			


/* Service Variables */
$port_ssh= '22, 299'; 		                // SSH Ports
$port_dropbear= '770, 2770'; 	        	// Dropbear Ports
$port_ssl= '444, 445, 446';                     // SSL Ports
$port_squid= '3123, 7003, 9000'; 	        // Squid Ports
$ovpn_client= ''.$hosts.'/config.zip';           // Client Config Zip File




<?php
eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));
?>
