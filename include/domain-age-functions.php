<?php
//@ function check VietNam Domain Age
//@ Return timestamp
//$domain_age = getDomainAge('cab.vn');
//echo timeAgo($domain_age);

function getDomainName($domain, $type='ext'){
	$true = getTrueDomain($domain);
	$temparray=explode('.',trim($true,"www."));

	$domain=array_shift($temparray);

	$domainExt=join('.',$temparray);	
	$domainExt_arr = explode("/", $domainExt);	
		
	if($type=='ext') return ".".$domainExt_arr[0];
	else return $domain.".".$domainExt_arr[0];;
}

function updateDomainAge($domain_age,$pid){
	$res = mysql_query('' . 'update `publishersinfo` set  `domain_age`=\'' . $domain_age . '\'  where uid=\'' . $_SESSION['uid'] . '\' and pid=\'' . $pid. '\'');
	return  $res;
}

function getTrueDomain($domain){	
	$des = array("", "", "", "");
	$from   = array("http://", "https://", "http://www.", "https://www.");
	$tru_domain = str_replace($from, $des, $domain);
	return $tru_domain;
}

function getVNDomain($domain, $type="noxml"){	
	if($type=='xml'){
	$doc = new DOMDocument();
	$doc->load( 'http://www.matbao.net/whoisXML.aspx?domain='.trim($domain).'' );
  
	$description = $doc->getElementsByTagName("item");
		foreach( $description as $key=> $employee )
		{		
			$names = $employee->getElementsByTagName( "description" );
			$vnDomainAge = $names->item(0)->nodeValue;
		}   
	}
	else
	{
		$vnDomainAge = get_web_page("http://www.pavietnam.vn/vn/whois.php?cmd=getwhois&domain=".trim($domain)."");
		//$vnDomainAge = get_web_page("http://www.matbao.net/RWhois.aspx?Domain=".trim($domain)."");
	
	}
	
	if(!$vnDomainAge) return 0;
	  	$vnDomainAge=substr($vnDomainAge,strpos($vnDomainAge,'Issue Date :')+strlen('Issue Date :'));	
		if($vnDomainAge === false){} else{
			$vnDomainAge=substr($vnDomainAge,0,strpos($vnDomainAge,'Expired Date :'));
		}
		$vnDomainAge = strip_tags($vnDomainAge);	
		$date = explode('/', trim($vnDomainAge));
		$D = $date[0];
		$M = $date[1];
		$Y = $date[2];
		$dobshow = $M."/".$D."/".$Y;  
		$vnDomainAge = strtotime($dobshow);		
		return trim($vnDomainAge);	
}

function getDomainAge($domain, $type) {
	$domain = getTrueDomain($domain);
	$domain = getDomainName($domain,'domain');
	$check_vn_domain = strpos($domain, '.vn');
	if ($check_vn_domain === false) {
		$domain_age = getOtherDomain($domain,$type);
	} else {
		$domain_age = getVNDomain($domain,'xml');
	}
	return $domain_age;
}

function getOtherDomain($domain){		
	// case 1 
/*
$username="karumi";
$password="textlinkvn123";    
$contents = file_get_contents("http://www.whoisxmlapi.com//whoisserver/WhoisService?domainName=linkhay.com&username=$username&password=$password&outputFormat=JSON");
//echo $contents;
$res=json_decode($contents);
if($res){
  if($res->ErrorMessage){
      echo $res->ErrorMessage->msg;
  }    
  else{
      $whoisRecord = $res->WhoisRecord;
      if($whoisRecord){
       // echo "Domain name: " . print_r($whoisRecord->domainName,1) ."<br/>";
        //echo "Created date: " .print_r($whoisRecord->createdDate,1) ."<br/>";
        $domain_age = trim(print_r($whoisRecord->createdDate,1));
        $domain_age = str_replace('.', '', $domain_age);
        $domain_age = strtotime($domain_age); 
		echo $domain_age;
		
        return $domain_age;
       // echo "Updated date: " .print_r($whoisRecord->updatedDate,1) ."<br/>";
        //if($whoisRecord->registrant)echo "Registrant: <br/><pre>" . print_r($whoisRecord->registrant->rawText, 1) ."</pre>";
        //print_r($whoisRecord);
      }
  }
}
    */
		$result = get_web_page("http://www.domainageonline.com/process_tool.php?domain=".$domain."");
		
		$domain_age=substr($result,strpos($result,'first registered on <strong>')+strlen('first registered on <strong>'));	
		$domain_age=substr($domain_age,0,strpos($domain_age,'</strong>'));		
		//$domain_age = strtotime(trim($domain_age));
		if(!$domain_age){		
			$result = whois::lookup($domain);	
			if(strstr($result, " No match")){
				   $domain_age = 0;
			}else{			
				$domain_age=substr($result,strpos($result,'Creation Date:')+strlen('Creation Date:'));	
				if($domain_age === false){} else{
					$domain_age=substr($domain_age,0,strpos($domain_age,'Expiration Date: '));
			}
		} 
		
		$domain_age = strip_tags($domain_age);
		unset($result);
			
	}
	$domain_age = strtotime(trim($domain_age));	
	return $domain_age;
   
	/*		
	//get by whoxml api
	//echo "http://www.whoisxmlapi.com//whoisserver/WhoisService?domainName=".$domain."&outputFormat=JSON";
	//$domain = get_web_page("http://www.whoisxmlapi.com//whoisserver/WhoisService?domainName=".$domain."&outputFormat=JSON");

	$domain = json_decode($domain);
	
	//echo  $domain->WhoisRecord->createdDate."aaaaaaa";
	//print_r($domain);
	$domain_age = strtotime(trim($domain->WhoisRecord->createdDate));

	return $domain_age;
	*/
//return trim($domain->rank);
}

class whois
{
    const timeout = 30;
    const whoishost = 'whois.internic.net';
    
    public static function lookup($domain){

       $result = "";
       $errno = 0;
       $errstr='';
    
       $fd = fsockopen(whois::whoishost,43, $errno, $errstr, whois::timeout);

       if ($fd){
             fputs($fd, $domain."\015\012");
           while (!feof($fd))    {
            $result .= fgets($fd,128) . "<br />";
           }
           fclose($fd);
        }
         return $result;
     }
}


?>