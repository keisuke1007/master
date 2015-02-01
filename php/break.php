<?php 

	function replace_br ($str)
	{	$str = str_replace("\r\n" , "\r" , $str);
		$str = str_replace("\r" , "\n" , $str);
		$str = str_replace("\n" , "<br>" , $str);
		
		return $str;
}
?>
