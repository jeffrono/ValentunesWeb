<?php
print '<html><body>';

// this is our search term
$search = 'chinese violin';

// get the xml result for the search term
$request = 'http://skreemr.com/skreemr-web-service/search?q='.urlencode($search).'&limit=10&offset=0';
$response = file_get_contents($request);

// Retrieve HTTP status code
list($version,$status_code,$msg) = explode(' ',$http_response_header[0], 3);

if ($status_code != 200) {
	echo 'error retrieving xml - ' . $status_code;
}

// create a simple xml object
$xml = new SimpleXMLElement($response);

// loop through results (only 2 of the available elements in this case)
$i = 0;
echo '<table border="1"><tr><th>description</th><th>URL</th></tr>';
foreach($xml->link as $name=>$attr) {

	echo '<tr><td>' . $xml->link[$i]->anchortext . '</td><td><a href="' . $xml->link[$i]->url . '">' . $xml->link[$i]->url . '</td></tr>';
    $i++;
}
echo '</table></body></html>';

?>