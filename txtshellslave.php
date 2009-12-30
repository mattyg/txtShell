#!/usr/bin/php
<?php
	include_once('SimplePie/simplepie.inc');
	include_once('my_twitter.php');
	date_default_timezone_set('America/New_York');
	
	echo "s---> slave started\n";
	//get arguments from cl: email and url of rss feed
	ob_start();
		var_export($argv[1]);
		$mailto = substr(ob_get_contents(),1,-1);
	ob_end_clean();	
	ob_start();
		var_export($argv[2]);
		$url = substr(ob_get_contents(),1,-1);
	ob_end_clean();
	
	//output this info
	echo "s---> address: " . $mailto. "\n";
	echo "s---> url: $url\n";
	
	//setup twitter connection
	$twitter = new MyTwitter('acatman','holland');
	
	//get the last rss feed
	$rss = new SimplePie($url);
	$item = $rss->get_item(0);
	
	if($item)
	{
		$t = stripos($item->get_title(),":");
		$input = htmlspecialchars_decode(substr($item->get_title(), $t+2));
		$cache = $item->get_title();
		$l = strpos($item->get_link(),"statuses/");
		$id = substr($item->get_link(), $l+9);

		echo "s---> input: $input\n";
		$output = exec($input, $o); //might be an issue with $output[0] how does exec handle output?
		echo "s---> output: $output\n";
	
		if(strtolower($input) != "quit")
		{
			$mailed = mail($mailto, "ssh output", "$output");
			if($mailed)
			{
				echo "s---> txt sent\n";
			}
			else 
			{
				echo "s---> txt sending failed\n";
			}
		}
		$twitter->destroyStatus($id);
	}
	else
	{
		echo "---> No new items in feed\n";
	}
?>