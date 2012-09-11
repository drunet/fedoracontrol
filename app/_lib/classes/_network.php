<?php

function networkUsage() {
    $string = exec("ifconfig p4p1 | grep RX\ bytes", $out);
    $string = str_ireplace("RX bytes:", "", $string);
    $string = str_ireplace("TX bytes:", "", $string);
    $string = trim($string);
    $string = explode(" ", $string);
    $out['rx'] = ($string[0] / 1024 / 1024);
    $out['rx'] = round($out['rx'], 2);
    $out['tx'] = ($string[4] / 1024 / 1024);
    $out['tx'] = round($out['tx'], 2);
    return $out;
}


class network{
	function networkUsage() {
	
	$netType = shell_exec("ifconfig");
	$netTypeRaw = explode(" ", $netType); 
	$netTypeFormatted = str_replace(" encap:", "", $netTypeRaw);
	
	
    $dataThroughput = exec("ifconfig p4p1 | grep RX\ bytes", $out);
    $dataThroughput = str_ireplace("RX bytes:", "", $dataThroughput);
    $dataThroughput = str_ireplace("TX bytes:", "", $dataThroughput);
    $dataThroughput = trim($dataThroughput);
    $dataThroughput = explode(" ", $dataThroughput);
    
    
    
    $rxRaw = $dataThroughput[0] / 1024 / 1024;
    $txRaw = $dataThroughput[4] / 1024 / 1024;
	$rx = round($rxRaw, 2)." ";
	$tx = round($txRaw, 2);
	$totalRxTx = $rx + $tx;

		$iTotalConnections = shell_exec("netstat -nta --inet | wc -l");
		$iTotalConnections--;
		
	?>

	
	
	<div class="networkIcon">
		  	<img src='_lib/images/network.png' align='middle'>
		  </div> 
		  
		  <div class="networkTitle">
		  	Network
		  </div>
		  
		  <div class="networkText">
			<strong> Ethernet | </strong> Received: <strong><?php echo $rx; ?> MB</strong> &middot Sent: <strong><?php echo $tx; ?> MB</strong> &middot Total: <strong><?php echo $totalRxTx; ?> MB</strong> <br /> Active Network Connections: <strong><?php echo $iTotalConnections; ?></strong>
		  </div>
	
	
	
<?php
}
}

