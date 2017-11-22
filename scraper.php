<?
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
$BaseLink	=	'http://202.61.43.40:8080/';
	$SiteURL	=	'http://202.61.43.40:8080/index.php?r=site%2Fsearchbyfir&page=1';
	sleep(5);
	$Pagination = 	file_get_html($SiteURL);
	$numberforloop = $Pagination->find("//*[@id='w0']/div/b[2]",0)->plaintext;
	$text = str_replace(',', '', $numberforloop);
	$loop = $text/20;
	
	
	// echo $AllPages = (int)$numberforloop;
	
	
	
	//	Page pagination
	for($PageLoop = 1; $PageLoop < $loop; $PageLoop++)
	{
		
		$FinalURL  		=  'http://202.61.43.40:8080/index.php?r=site%2Fsearchbyfir&page='.$PageLoop;
		$Html		=	file_get_html($FinalURL);
		sleep(10);
		$RowNumb	=	-1;
		if ($Html) 
		{
			//	Paginate all 'View' buttons
			foreach ($Html->find("//div[@id='w0']/table[contains(@class,'table-striped')]/tbody/tr") as $element) 
			{
				$RowNumb	+=	1;
				if ($RowNumb != 0) 
				{
					$no			=	$element->find('./td[1]', 0)->plaintext;
					$CourtName	=	$element->find('./td[2]', 0)->plaintext;
					$CaseNumbr	=	$element->find('./td[3]', 0)->plaintext;
					$CaseStats	=	$element->find('./td[4]', 0)->plaintext;
					$CaseValue	=	$element->find('./td[5]/button', 0);
					$CaseLinkR	=	$BaseLink . $CaseValue->attr['value'];
					$CaseLink	=	str_replace("amp;", "", $CaseLinkR);
          echo $FinalURL;
				}
			}
		}
	}
			
