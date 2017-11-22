<?
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
$BaseLink	=	'http://202.61.43.40:8080/';
	$SiteURL	=	'http://202.61.43.40:8080/index.php?r=site%2Fsearchbyfir&page=1';
	$Pagination = 	file_get_html($SiteURL);
	$numberforloop = $Pagination->find("//*[@id='w0']/div/b[2]",0)->plaintext;
	$text = str_replace(',', '', $numberforloop);
	echo $loop = $text/20;
	?>
			
