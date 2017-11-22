<?
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
$BaseLink	=	'http://202.61.43.40:8080/';
	$SiteURL	=	'http://202.61.43.40:8080/index.php?r=site%2Fsearchbyfir&page=1';
	$Pagination = 	file_get_html($SiteURL);
	echo $Pagination;
	?>
			
