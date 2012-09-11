<?php
	class cpuLoad {
		function getCpuLoad(){
		
		  $getLoad = sys_getloadavg();
		  
		  $rawCPUSpeed = shell_exec('cat /proc/cpuinfo | grep "model name" | head -n1');
		  $cpuSpeed = str_replace("model name :", " ", "$rawCPUSpeed");
		  
          if ($getLoad[0] > 1) {
              $warning = "<img src=\"_lib/images/warning.png\" height=\"18\" />";
          } else {
              $warning = "<img src=\"_lib/images/ok.png\" height=\"18\" />";
          } 
          ?>
		  
		  <div class="cpuIcon">
		  	<img src='_lib/images/cpu.png' align='middle'>
		  </div> 
		  
		  <div class="cpuTitle">
		  	CPU 
		  </div>
		  
		  <div class="cpuWarning">
		  	<?php echo $warning ?>
		  </div>
		  
		  <div class="cpuText">
			  Loads: 1 Min: <strong> <?php echo $getLoad[0]; ?> </strong> &middot
			  5 Mins: <strong><?php echo $getLoad[1]; ?> </strong> &middot
			  15 Mins: <strong><?php echo $getLoad[2]; ?> </strong> <br/><br/> CPU: <strong><?php echo $cpuSpeed; ?></strong>
		  </div>
<?php		
		}
		}
