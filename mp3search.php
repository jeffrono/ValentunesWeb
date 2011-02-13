<?php
function get_http_response_code($theURL) {
    $headers = get_headers($theURL);
    return substr($headers[0], 9, 3);
}

function get_mp3_url($artist, $track) {
	$search = $artist . " " . $track;

	// get the xml result for the search term
	$request = 'http://skreemr.com/skreemr-web-service/search?q='.urlencode($search).'&limit=25&offset=0';
	$response = file_get_contents($request);

	// Retrieve HTTP status code
	list($version,$status_code,$msg) = explode(' ',$http_response_header[0], 3);

	if ($status_code != 200) {
		return null;
	}

	// create a simple xml object
	$xml = new SimpleXMLElement($response);

	// loop through results (only 2 of the available elements in this case)
	$i = 0;
	foreach($xml->link as $name=>$attr) {
		$name = $xml->link[$i]->anchortext;
		$url = $xml->link[$i]->url;
		
		if( 
			// does this file exist
			!is_numeric(xfile_404($url, 'mp3')) &&
			// check if track and artist are in the description text
			preg_match("/$track/i", $name) &&
			preg_match("/$artist/i", $name)
			) {
				//print $url;
				//return $url;
				break;
			}
		$i++;
	}
	return $url;
}

function xfile_404($file, $ext=false){ 
        $file = ereg_replace(' +', '%20', trim($file));
        if(substr($file, 0, 7) !== "http://"){ $file = "http://" . $file;    }
        if($ext){
            $file_ext = strtolower(array_pop(explode('.', $file)));
            if($file_ext !== $ext){
                return 1;
                break;
                }
            }
        $domain = substr($file, 7); //lose the http prefix
        $domain_ext = strtoupper(array_pop(explode('.', substr($domain, 0, strpos($domain, '/'))))); // end up with 'com' or 'net' or something
        $types = array('AC', 'AD', 'AE', 'AERO', 'AF', 'AG', 'AI', 'AL', 'AM', 'AN', 'AO', 'AQ', 'AR', 'ARPA', 'AS', 'ASIA', 'AT', 'AU', 'AW', 'AX', 'AZ', 'BA', 'BB', 'BD', 'BE', 'BF', 'BG', 'BH', 'BI', 'BIZ', 'BJ', 'BM', 'BN', 'BO', 'BR', 'BS', 'BT', 'BV', 'BW', 'BY', 'BZ', 'CA', 'CAT', 'CC', 'CD', 'CF', 'CG', 'CH', 'CI', 'CK', 'CL', 'CM', 'CN', 'CO', 'COM', 'COOP', 'CR', 'CU', 'CV', 'CX', 'CY', 'CZ', 'DE', 'DJ', 'DK', 'DM', 'DO', 'DZ', 'EC', 'EDU', 'EE', 'EG', 'ER', 'ES', 'ET', 'EU', 'FI', 'FJ', 'FK', 'FM', 'FO', 'FR', 'GA', 'GB', 'GD', 'GE', 'GF', 'GG', 'GH', 'GI', 'GL', 'GM', 'GN', 'GOV', 'GP', 'GQ', 'GR', 'GS', 'GT', 'GU', 'GW', 'GY', 'HK', 'HM', 'HN', 'HR', 'HT', 'HU', 'ID', 'IE', 'IL', 'IM', 'IN', 'INFO', 'INT', 'IO', 'IQ', 'IR', 'IS', 'IT', 'JE', 'JM', 'JO', 'JOBS', 'JP', 'KE', 'KG', 'KH', 'KI', 'KM', 'KN', 'KR', 'KW', 'KY', 'KZ', 'LA', 'LB', 'LC', 'LI', 'LK', 'LOCAL', 'LR', 'LS', 'LT', 'LU', 'LV', 'LY', 'MA', 'MC', 'MD', 'MG', 'MH', 'MIL', 'MK', 'ML', 'MM', 'MN', 'MO', 'MOBI', 'MP', 'MQ', 'MR', 'MS', 'MT', 'MU', 'MUSEUM', 'MV', 'MW', 'MX', 'MY', 'MZ', 'NA', 'NAME', 'NC', 'NE', 'NET', 'NF', 'NG', 'NI', 'NL', 'NO', 'NP', 'NR', 'NU', 'NZ', 'OM', 'ORG', 'PA', 'PE', 'PF', 'PG', 'PH', 'PK', 'PL', 'PM', 'PN', 'PR', 'PRO', 'PS', 'PT', 'PW', 'PY', 'QA', 'RE', 'RO', 'RU', 'RW', 'SA', 'SB', 'SC', 'SD', 'SE', 'SG', 'SH', 'SI', 'SJ', 'SK', 'SL', 'SM', 'SN', 'SO', 'SR', 'ST', 'SU', 'SV', 'SY', 'SZ', 'TC', 'TD', 'TEL', 'TF', 'TG', 'TH', 'TJ', 'TK', 'TL', 'TM', 'TN', 'TO', 'TP', 'TR', 'TRAVEL', 'TT', 'TV', 'TW', 'TZ', 'UA', 'UG', 'UK', 'UM', 'US', 'UY', 'UZ', 'VA', 'VC', 'VE', 'VG', 'VI', 'VN', 'VU', 'WF', 'WS', 'YE', 'YT', 'YU', 'ZA', 'ZM', 'ZW');

        if(!in_array($domain_ext, $types)){
            return 2;
            break;
        }
        $file_headers = @get_headers($file);
        if(!$file_headers){
            return 3;
            break;
        }
        if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
            return 404;
        }else{
        
     return ereg_replace('%20', ' ', $file);
        
        }
}

?>

<html>
<body>

<table border="1">	
	<?php 
		$arr = array( 
				'jethro tull' => 'aqualung',
				'lady gaga' => 'just dance',
				'britney spears' => 'radar',
				'live' => 'lightning crashes',
				'electric six' => 'high voltage',
				'the killers' => 'human',
				'R.E.M.' => 'orange crush',
				'pink' => "i'm not dead"
			);
		foreach ($arr as $artist => $track) {
			//echo "$artist, $track";
			$url = get_mp3_url($artist, $track);
	?>
	<tr>
		<td>
			<?php
				echo '<a href="' . $url . '">' . "$artist - $track" . '</a><br>';
			?>
		</td>
	</tr>
	<?php } ?>
</table></body></html>