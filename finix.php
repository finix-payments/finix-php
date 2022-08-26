<?php

// ==================== Import =====================
require __DIR__.'/src/vendor/autoload.php';

use Finix\FinixClient;
use Finix\Environment;
use Finix\ApiException;
use Finix\Model as Model;
// ==================== Define username, password and environment =====================
// const username = "USERNAME";
// const password = "PASSWORD";

const username = "USsRhsHYZGBPnQw8CByJyEQW";
const password = "8a14c2f9-d94b-4c72-8f5c-a62908e5b30e";
const environment = Environment::SANDBOX;

// ==================== Instantiate client =====================
$client = new FinixClient(username, password, environment);

// ==================== Perform actions =====================
try {
    // ==================== Get transfer details given transfer ID =====================
    $transferId = "TRvtThmhZtk56z6dtCt8hUDR";
    $fetchedTransfer = $client->transfers->get($transferId);

    // ==================== Get list of transfers =====================
    $transferList = $client->transfers->list(array());

    // Access first element of list 
    $firstTransfer = $transferList[0];
    
    //Access page and links object 
    $page = $transferList->getPage();
    $links = $transferList->getLinks();

    //Get next list
    $nextList = $transferList->listNext();
    
    // ==================== Get list of transfers by query parameters=====================
    $transferListWQuery = $client->transfers->list(array("limit" => 2));

    // ==================== Create a transfer =====================
    $createdTransfer = $client->transfers->create(new Model\CreateTransferRequest(array("amount" => 2, 
                                                                    "currency" => Model\Currency::USD, 
                                                                    "merchant"=> "MUeDVrf2ahuKc9Eg5TeZugvs", 
                                                                    "source" => "PIe2YvpcjvoVJ6PzoRPBK137")));
    
    // ==================== Update a transfer =====================
    $updatedTransfer = $client->transfers->update($transferId, new Model\UpdateTransferRequest(array("tags" => array("test_tag"=>"123123"))));

} catch (ApiException $e) {
    var_dump($e);
}
