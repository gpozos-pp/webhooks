<?php

// imports Parse PHP SDK
require "parse-php-sdk/autoload.php";

use Parse\ParseClient;
use Parse\ParseQuery;
use Parse\ParseObject;

ParseClient::initialize( 'dVVty0n8MrhMhTusZHskFKJADY2HmG17KWW2TpQ9', 'Ifrp7J1Mji2ZPUObnid0AZ5i46zaLdyebHe3zSnO', 'WJ6MQPvVPjxkbyeLOMxgYj70AgIN181kFZYqtO2T' );
ParseClient::setServerURL('https://parseapi.back4app.com', '/');

// retrieve the request's body and parse it as JSON
$input = @file_get_contents("php://input");

// array of key-value pairs
$event_json = json_decode($input);

// validate webhook id
if (!isset($event_json->id))
{	
	echo 'ID NULL';
    http_response_code(200);
    exit();
}

// validate webhook event type
if ($event_json->event_type == 'PAYMENT.SALE.COMPLETED') {

	// get order by parentPayment
	$query = new ParseQuery("Order");
	$query->equalTo("parentPayment", $event_json->resource->parent_payment);
	$object = $query->first();
	// update order paymentStage
	$object->set("paymentStage", 2);
	$object->save();

	echo 'PAYMENT.SALE.COMPLETED received';
	http_response_code(200);
    exit();

} else {
	echo 'Other event';
	http_response_code(200);
    exit();
}

?>