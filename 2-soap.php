<?php

// Create a new SoapClient instance with the WSDL URL
$wsdlUrl = "https://www.crcind.com/csp/samples/SOAP.Demo.CLS?WSDL";
$client = new SoapClient($wsdlUrl);

// Set the parameters for the SOAP request
$params = array(
    'name' => 'a',
);

// Make the SOAP request by calling the GetByName method directly
$response = $client->GetByName($params);

// Extract the result from the response object
$result = $response->GetByNameResult->any;
// Load the XML content
$xml = simplexml_load_string($result);

$i=1;
foreach ($xml->ListByName->SQL as $names){
	 echo $i.'.'.$names->Name . "<br>";
	 $i++;
}