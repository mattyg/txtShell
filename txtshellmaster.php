#!/usr/bin/php
<?php
	//Phone Config
	$cellnumber = '5555555555'; //Phone number to send responses 
	$carrier = 'vtext.com'; //text message email of phone's carrier
	$url = 'http://USERNAME:PASSWORD@twitter.com/statuses/user_timeline/FEEDURL.rss'; //url of twitter RSS feed, only need USERNAME:PASSWORD if feed is private

	//loop-de-loop the input reading
	while(true)
	{
		$orderoutput = shell_exec("php txtshellslave.php '$cellnumber@$carrier' '$url'");
		echo "m---> txtshellslave.php executed\n";
		echo "$orderoutput\n";
		sleep(10);
	}
?>