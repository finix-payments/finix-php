<?php

// ==================== Import =====================
require __DIR__.'/src/vendor/autoload.php';

use Finix\FinixClient;
use Finix\Environment;
use Finix\ApiException;
use Finix\Model as Model;

const username = "USsRhsHYZGBPnQw8CByJyEQW";
// const password = "8a14c2f9-d94b-4c72-8f5c-a62908e5b30e";
const password = "1231231";
const environment = Environment::SANDBOX;

// ==================== Instantiate client =====================
$client = new FinixClient(username, password, environment);

// ==================== Perform actions =====================
try {
    // $file =  fopen('test.png', 'r');
    // $testUpload = $client->disputes->createDisputeEvidence("DIs7yQRkHDdMYhurzYz72SFk"
    // , new Model\CreateDisputeEvidenceRequest(array('file'=>$file)));
    // var_dump($testUpload);

    // $downloadedFile = $client->files->downloadFile("FILE_bJecqoRPasStEPVpvKHtgA");
    // $contents = $downloadedFile->fread($downloadedFile->getSize());
    // var_dump($contents);

    // $transferList = $client->transfers->list(array('limit' =>2));

    // var_dump(count($transferList));
    // var_dump($transferList->listNext(2)->getPage());
    // $hasNextCursor = ($transferList->openAPITypes()['page'] == '\Finix\Model\PageCursor');
    // var_dump($hasNextCursor);
    // $key = key($transferList->getEmbedded()->getters());
    // $getter = $transferList->getEmbedded()->getters()[$key];
    // var_dump(key($transferList->getEmbedded()->getters()));
    // var_dump($getter);
    // var_dump($transferList->getEmbedded()->$getter());
    // $testFunc = function($a = null){
    //     var_dump($a+1);
    //     return 4;
    // };
    // $testList = new Model\FinixList(array(), $testFunc, false);
    // var_dump($testList->listNext(4));

    // $test =  $createInstrumentUpdateRequest = new Model\CreateInstrumentUpdateRequest(array(
    //     'file'=>$file, 
    //     'request' => "{\"merchant\":\"MUucec6fHeaWo3VHYoSkUySM\"}"));
    
        // var_dump($test->getters());
        // $tempArr = [];
        // foreach (array_keys($test->getters()) as $get){
        //     $getterName = $test->getters()[$get];
        //     array_push($tempArr, [$test->$getterName()]);
        // }
        // var_dump($tempArr);

        // $arrtest = [['name' => 'file', 
        //          'contents' => $create_file_request->getFile()]];
        // var_dump($arrtest);
        $paymentInstrumentId = "PI4gTM3twQ5XyXfM4rTuFvpo";
        $paymentInstrument = $client->paymentInstruments->get($paymentInstrumentId);
        // var_dump($paymentInstrument);

} catch (ApiException $e) {
    foreach($e->getResponseBody() as $error){
        var_dump($error["message"]);
    }
}
