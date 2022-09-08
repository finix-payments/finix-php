<?php
/**
 * AuthorizationsApiTest
 * PHP version 7.4
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */

namespace Finix\Test\Api;

use \Finix\Configuration;
use \Finix\ApiException;
use \Finix\ObjectSerializer;
use \PHPUnit\Framework\TestCase;
use \Finix\Model as Model;
use \Finix\Environment;
use \Finix\FinixClient;
/**
 * AuthorizationsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class AuthorizationsApiTest extends TestCase
{
    public $client;
    public $authorizationId;
    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
       
    }   

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $username = "USsRhsHYZGBPnQw8CByJyEQW";
        $password = "8a14c2f9-d94b-4c72-8f5c-a62908e5b30e";
        $environment = Environment::SANDBOX;
        $this->client = new FinixClient($username, $password, $environment);

        $createAuthorizationRequest = new Model\CreateAuthorizationRequest(array(
            'source' => "PIe2YvpcjvoVJ6PzoRPBK137",
            'merchant' => "MUeDVrf2ahuKc9Eg5TeZugvs",
            'currency' => Model\Currency::USD, 
            'amount' => 100, 
            'processor' => 'DUMMY_V1'
        ));
        $authorization = $this->client->authorizations->create($createAuthorizationRequest);
        $this->authorizationId = $authorization->getId();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for create
     *
     * Create an Authorization.
     *
     */
    public function testCreateAuthorization()
    {
        $createAuthorizationRequest = new Model\CreateAuthorizationRequest(array(
            'source' => "PIe2YvpcjvoVJ6PzoRPBK137",
            'merchant' => "MUeDVrf2ahuKc9Eg5TeZugvs",
            'currency' => Model\Currency::USD, 
            'amount' => 100, 
            'processor' => 'DUMMY_V1'
        ));
        $authorization = $this->client->authorizations->create($createAuthorizationRequest);
        $this->assertSame($authorization->getSource(), $createAuthorizationRequest->getSource());
        $this->assertSame($authorization->getAmount(), $createAuthorizationRequest->getAmount());
        $this->assertSame($authorization::STATE_SUCCEEDED, $authorization->getState());
    }

    /**
     * Test case for create
     *
     * Create an Authorization with 3D Secure.
     *
     */
    public function testCreate3DSecureAuthorization()
    {
        $createAuthorizationRequest = new Model\CreateAuthorizationRequest(array(
            'source' => "PIe2YvpcjvoVJ6PzoRPBK137",
            'merchant' => "MUeDVrf2ahuKc9Eg5TeZugvs",
            'currency' => Model\Currency::USD, 
            'amount' => 100, 
            'processor' => 'DUMMY_V1', 
            '_3dSecureAuthentication' => new Model\CreateAuthorizationRequest3dSecureAuthentication(array(
                'electronic_commerce_indicator' => "AUTHENTICATED",
                'cardholder_authentication' => "BwABBJQ1AgAAAAAgJDUCAAAAAAA=",
                'transaction_id' => "EaOMucALHQqLAEGAgk"
            )
            )
        ));
        $authorization = $this->client->authorizations->create($createAuthorizationRequest);
        $this->assertSame($authorization->getSource(), $createAuthorizationRequest->getSource());
        $this->assertSame($authorization->getAmount(), $createAuthorizationRequest->getAmount());
        $this->assertSame($authorization::STATE_SUCCEEDED, $authorization->getState());
    }

    /**
     * Test case for create
     *
     * Create an Authorization with Level 2 Processing.  
     *
     */
    public function testCreate2DAuthorization()
    {
        $createAuthorizationRequest = new Model\CreateAuthorizationRequest(array(
            'source' => "PIe2YvpcjvoVJ6PzoRPBK137",
            'merchant' => "MUeDVrf2ahuKc9Eg5TeZugvs",
            'currency' => Model\Currency::USD, 
            'amount' => 100, 
            'processor' => 'DUMMY_V1', 
            'additional_purchase_data' => new Model\AdditionalPurchaseData(array(
                'customer_reference_number' => "321xyz",
                'sales_tax' => 200
            ))
        ));
        $authorization = $this->client->authorizations->create($createAuthorizationRequest);
        $this->assertSame($authorization->getSource(), $createAuthorizationRequest->getSource());
        $this->assertSame($authorization->getAmount(), $createAuthorizationRequest->getAmount());
        $this->assertSame($authorization::STATE_SUCCEEDED, $authorization->getState());
    }

    /**
     * Test case for create
     *
     * Create an Authorization with Level 3 Processing.  
     *
     */
    public function testCreate3DAuthorization()
    {
        $itemData = new Model\AdditionalPurchaseDataItemDataInner(array(
            'amount_excluding_sales_tax' => 400,
            'amount_including_sales_tax' => 500,
            'commodity_code' => "175-62-20",
            'cost_per_unit' => 500,
            'item_description' => "printing paper",
            'item_discount_amount' => 100,
            'merchant_product_code' => "1149611",
            'quantity' => 1,
            'unit_of_measure' => "BX"
        ));
        $createAuthorizationRequest = new Model\CreateAuthorizationRequest(array(
            'source' => "PIe2YvpcjvoVJ6PzoRPBK137",
            'merchant' => "MUeDVrf2ahuKc9Eg5TeZugvs",
            'currency' => Model\Currency::USD, 
            'amount' => 100, 
            'processor' => 'DUMMY_V1', 
            'additional_purchase_data' => new Model\AdditionalPurchaseData(array(
                'customer_reference_number' => "321xyz",
                'sales_tax' => 100, 
                'item_data' => array($itemData
            ))
        )));
        $authorization = $this->client->authorizations->create($createAuthorizationRequest);
        $this->assertSame($authorization->getSource(), $createAuthorizationRequest->getSource());
        $this->assertSame($authorization->getAmount(), $createAuthorizationRequest->getAmount());
        $this->assertSame($authorization::STATE_SUCCEEDED, $authorization->getState());
    }

    /**
     * Test case for get
     *
     * Get an Authorization.
     *
     */
    public function testGetAuthorization()
    {
        $authorizationId = "AU9j85tCcnJ7DvkFjNtmZ7g1";
        $authorization = $this->client->authorizations->get($authorizationId);
        $this->assertSame($authorization->getSource(), "PIe2YvpcjvoVJ6PzoRPBK137");
    }

    /**
     * Test case for update
     *
     * Capture an Authorization.
     *
     */
    public function testCaptureAuthorization()
    {
        $updateAuthorizationRequest = new Model\UpdateAuthorizationRequest(array(
            'fee' => 0,
            'capture_amount' => 100
        ));
        $authorization = $this->client->authorizations->update($this->authorizationId, $updateAuthorizationRequest);
        $this->assertSame($authorization->getSource(), "PIe2YvpcjvoVJ6PzoRPBK137");
        $this->assertSame($authorization->getAmount(), $updateAuthorizationRequest->getCaptureAmount());

    }

    /**
     * Test case for update
     *
     * Capture an Authorization with Level 3 processing.
     *
     */
    public function testCaptureL3Authorization()
    {
        $itemData = new Model\AdditionalPurchaseDataItemDataInner(array(
            'amount_excluding_sales_tax' => 400,
            'amount_including_sales_tax' => 500,
            'commodity_code' => "175-62-20",
            'cost_per_unit' => 500,
            'item_description' => "printing paper",
            'item_discount_amount' => 100,
            'merchant_product_code' => "1149611",
            'quantity' => 1,
            'unit_of_measure' => "BX"
        ));   
        $updateAuthorizationRequest = new Model\UpdateAuthorizationRequest(array(
            'additional_purchase_data' => new Model\AdditionalPurchaseData(array(
                'customer_reference_number' => "321xyz",
                'sales_tax' => 100, 
                'item_data' => array($itemData))
        )));
        $authorization = $this->client->authorizations->update($this->authorizationId, $updateAuthorizationRequest);
        $this->assertSame($authorization->getSource(), "PIe2YvpcjvoVJ6PzoRPBK137");
        $this->assertSame($authorization->getAmount(), 100);
    }

    /**
     * Test case for update
     *
     * Void an Authorization.
     *
     */
    public function testVoidAuthorization()
    {
        $updateAuthorizationRequest = new Model\UpdateAuthorizationRequest(array(
            'void_me' => true
        ));
        $authorization = $this->client->authorizations->update($this->authorizationId, $updateAuthorizationRequest);
        $this->assertSame($authorization->getSource(), "PIe2YvpcjvoVJ6PzoRPBK137");
        $this->assertSame($authorization->getVoidState(), "PENDING");
    }

    /**
     * Test case for list
     *
     * List Authorizations.
     *
     */
    public function testListAuthorizations()
    {
        $authorizationList = $this->client->authorizations->list(array());
        $this->assertTrue(count($authorizationList) >= 0);
        if (count($authorizationList) == 0)
        {
            $this->assertSame($authorizationList->hasMore(), false);
        }
        if ($authorizationList->hasMore())
        {
            $nextList = $authorizationList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }

    }
}
