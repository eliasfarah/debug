<?php
 
function debug($what =null) {
	$file_line = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT, 1);
	echo "<br />Arquivo:".$file_line[0]['file']."<br /> Linha:". $file_line[0]['line'] ."<br />";
	echo "<div id='sys_debug'><pre>";
		print_r($what);
	echo "</div></pre>";
}

