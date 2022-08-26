# Finix PHP API Library
This is the official Finix PHP API Library 

## Installation
### Prerequisites
- PHP 8.1 or higher
- Suggested: Your own API credentials.
Our tests use the API credentials from Finix's public documentation, however you need your own credentials to submit requests.
### Composer
```
composer require finix/php
```

## Using the Library
### Initialization
Provide your api username and password as well as the environment you are interacting with.
```php
use \Finix\Model as Model;
use \Finix\Environment;
use \Finix\FinixClient;

$username = "<USERNAME>";
$password = "<PASSWORD>";
$environment = Environment::SANDBOX;
$client = new FinixClient($username, $password, $environment);
   
```

### Example API
Here is an example creating a Transfer:
```php
$transfersRequest = new Model\CreateTransferRequest(array(
        'source' => "PIe2YvpcjvoVJ6PzoRPBK137", 
        'merchant' => "MUeDVrf2ahuKc9Eg5TeZugvs", 
        'tags' => array('order_number' => "21DFASJSAKAS"), 
        'currency' => Model\Currency::USD, 
        'amount' => 100, 
        'processor' => "DUMMY_V1"
));

$transfer = $client->transfers->create($transfersRequest);
```

### Retrieving List 
finixList serves as the return type for all functions that involve retrieving a list. Here is an example of retrieving a list of transfers with and without query paramters, and a demonstration of the properties of finixList.
```typescript 
// Retrieving list of all transfers 
$transfersList = $client->transfers->list(array());

// Retrieving list of transfers with the following filters: 
// List limit: 2
// Amount less than 100
// Transfer type: Debits 
$transfersListWithFilter = $client->transfers->list(array(
    'limit' => 2,
    'amount_lt' => 100,
    'type' => "Debits"  
));

// Accessing transfers in the list and print out value
foreach($transferList as $transfer){
        var_dump($transfer);
    }

// Get the size of the current list 
$transferListSize = count($transferList);

// Get the page object that contains properties including offset/nextCursor, limit.
// Note: refer to the specific api to see if the page object associated is of type pageCursor or pageOffset
$page = transfersList->getPage();

// Get the links 
$links = transfersList->getLinks();

// Check if there is more to list, value equals to False if end of list has been reached 
$hasMore = transfersList->hasMore()();

// Get the next 5 elements
$nextTransfersList = transfersList->listNext(5);

```

### Uploading file 
Below is an example of uploading a dispute evidence file.
``` php
$file =  fopen('test.png', 'r');
$uploadedEvidence = $client->disputes->createDisputeEvidence($disputeId
, new Model\CreateDisputeEvidenceRequest(array('file'=>$file)));
        
```

### Error handling
Errors can be caught and handled with try-catch blocks. Below is an example of catching an error and accessing its information. 
```php
$username = "USimz3zSq5R2PqiEBXY6rSiJ";
$wrongPassword = "123123";

try{
    $invalidClient = new FinixClient($username, $wrongPassword, Environment::SANDBOX);
    $transferList = $invalidClient->transfers->list(array());
}catch(ApiException $e){
    // Print basic http information of the error
    var_dump($e->getCode());
    var_dump($e->getResponseHeader());

    // Print message of each error 
    foreach ($e->getResponseBody() as $error){
        console.log($error["message"]);
        console.log($error["code"]);
    }
}
```
## Supported APIs
- Transfers
- Authorization
- Identities
- Merchants
- Payment Instruments
- Instrument Updates
- Balance Transfers
- Devices
- Disputes
- Files
- Settlements
- Webhooks
- Verifications
- Merchant Profiles
- Fee Profiles
