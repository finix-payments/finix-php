<?php
/**
 * TransfersApiTest
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
use PHPUnit\Framework\TestCase;
use \Finix\Model as Model;
use \Finix\Environment;
use \Finix\FinixClient;

/**
 * TransfersApiTest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class TransfersApiTest extends TestCase
{
    public $client;
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
     * Create a Transfer.
     *
     */
    public function testCreateTransfer()
    {
        $transfersRequest = new Model\CreateTransferRequest(array(
            'source' => "PIe2YvpcjvoVJ6PzoRPBK137", 
            'merchant' => "MUeDVrf2ahuKc9Eg5TeZugvs", 
            'tags' => array('order_number' => "21DFASJSAKAS"), 
            'currency' => Model\Currency::USD, 
            'amount' => 100, 
            'processor' => "DUMMY_V1"
        ));
        $transfer = $this->client->transfers->create($transfersRequest);
        $this->assertSame($transfer->getSource(), $transfersRequest->getSource());
        $this->assertSame($transfer->getAmount(), $transfersRequest->getAmount());

    }

     /**
     * Test case for create
     *
     * Create a Sale.
     *
     */
    public function testCreateSale()
    {
        $transfersRequest = new Model\CreateTransferRequest(array(
            'source' => "PIe2YvpcjvoVJ6PzoRPBK137", 
            'merchant' => "MUeDVrf2ahuKc9Eg5TeZugvs", 
            'tags' => array('test' => "sale"), 
            'currency' => Model\Currency::USD, 
            'amount' => 662154, 
            'processor' => "DUMMY_V1"
        ));
        $transfer = $this->client->transfers->create($transfersRequest);
        $this->assertSame($transfer->getSource(), $transfersRequest->getSource());
        $this->assertSame($transfer->getAmount(), $transfersRequest->getAmount());

    }

    /**
     * Test case for create sale with 3D secure
     *
     * Create a Sale with 3D secure.
     *
     */
    public function testCreateSale3D()
    {
        $transfersRequest = new Model\CreateTransferRequest(array(
            'source' => "PIe2YvpcjvoVJ6PzoRPBK137", 
            'merchant' => "MUeDVrf2ahuKc9Eg5TeZugvs", 
            'tags' => array('test' => "sale"), 
            'currency' => Model\Currency::USD, 
            'amount' => 662154, 
            'processor' => "DUMMY_V1", 
            '_3d_secure_authentication' => new Model\CreateAuthorizationRequest3dSecureAuthentication(array(
                'cardholder_authentication' => "BwABBJQ1AgAAAAAgJDUCAAAAAAA",
                'electronic_commerce_indicator' => "AUTHENTICATED",
                'transaction_id' => "EaOMucALHQqLAEGAgk"
            ))
        ));
        $transfer = $this->client->transfers->create($transfersRequest);
        $this->assertSame($transfer->getSource(), $transfersRequest->getSource());
        $this->assertSame($transfer->getAmount(), $transfersRequest->getAmount());

    }

    /**
     * Test case for create sale with level 2 processing
     *
     * Create a Sale with level 2 processing.
     *
     */
    public function testCreateSaleL2()
    {
        $transfersRequest = new Model\CreateTransferRequest(array(
            'source' => "PIe2YvpcjvoVJ6PzoRPBK137", 
            'merchant' => "MUeDVrf2ahuKc9Eg5TeZugvs", 
            'tags' => array('test' => "sale"), 
            'currency' => Model\Currency::USD, 
            'amount' => 662154, 
            'processor' => "DUMMY_V1", 
            'additional_purchase_data' => new Model\AdditionalPurchaseData(array(
                'customer_reference_number' => "321xyz",
                'sales_tax' => 200
            ))
        ));
        $transfer = $this->client->transfers->create($transfersRequest);
        $this->assertSame($transfer->getSource(), $transfersRequest->getSource());
        $this->assertSame($transfer->getAmount(), $transfersRequest->getAmount());

    }

    /**
     * Test case for create sale with Level 3 Processing
     *
     * Create a Sale with Level 3 Processing.
     *
     */
    public function testCreateSaleL3()
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

        $transfersRequest = new Model\CreateTransferRequest(array(
            'source' => "PIe2YvpcjvoVJ6PzoRPBK137", 
            'merchant' => "MUeDVrf2ahuKc9Eg5TeZugvs", 
            'tags' => array('test' => "sale"), 
            'currency' => Model\Currency::USD, 
            'amount' => 1000, 
            'processor' => "DUMMY_V1", 
            'additional_purchase_data' => new Model\AdditionalPurchaseData(array(
                'customer_reference_number' => "321xyz",
                'sales_tax' => 100, 
                'item_data' => $itemData, 
                'discount_amount' => 100, 
                'shipping_amount' => 100, 
                'customs_duty_amount' => 10))
        ));
        $transfer = $this->client->transfers->create($transfersRequest);
        $this->assertSame($transfer->getSource(), $transfersRequest->getSource());
        $this->assertSame($transfer->getAmount(), $transfersRequest->getAmount());

    }
    /**
     * Test case for createTransferReversal
     *
     * Refund or Reverse a Transfer.
     *
     */
    public function testCreateTransferReversal()
    {
        $transferId = "TRacB6Q6GcW6yvFUKawSnMEP";
        $reverseRequest = new Model\CreateReversalRequest(array(
            'refund_amount' => 100,
            'tags' => array('test'=> 'refund')
        ));
        $reversedTransfer = $this->client->transfers->createTransferReversal($transferId, $reverseRequest);
        $this->assertSame($reversedTransfer->getAmount(), $reverseRequest->getRefundAmount());
        $this->assertSame($reversedTransfer->getTags()['test'], $reverseRequest->getTags()['test']);

    }

    /**
     * Test case for get
     *
     * Get a Transfer.
     *
     */
    public function testGetTransfer()
    {
       $transferId = "TRnH7FkSB7zePeHExNZwSb9H";
       $transfer = $this->client->transfers->get($transferId);
       $this->assertSame($transfer->getId(), $transferId);
       $this->assertSame($transfer->getAmount(), 7);
       $this->assertSame($transfer->getTraceId(), "0e201222-d357-4038-9ed2-23a38482fd07");
    }

    /**
     * Test case for listTransfersReversals
     *
     * List Reversals on a Transfer.
     *
     */
    public function testListTransferReversals()
    {
        $transferId = "TRnH7FkSB7zePeHExNZwSb9H";
        $transfersList = $this->client->transfers->listTransfersReversals(array(
            'transfer_id' => $transferId
        ));
        $this->assertTrue(count($transfersList) >= 0);
        if (count($transfersList) == 0)
        {
            $this->assertSame($transfersList->hasMore(), false);
        }
        if ($transfersList->hasMore())
        {
            $nextList = $transfersList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }
    }

    /**
     * Test case for list
     *
     * List Transfers.
     *
     */
    public function testListTransfers()
    {
        $transfersList = $this->client->transfers->list(array());
        $this->assertTrue(count($transfersList) >= 0);
        if (count($transfersList) == 0)
        {
            $this->assertSame($transfersList->hasMore(), false);
        }
        if ($transfersList->hasMore())
        {
            $nextList = $transfersList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }
    }

    /**
     * Test case for update
     *
     * Update a Transfer.
     *
     */
    public function testUpdateTransfer()
    {
        $transferId = "TRvtThmhZtk56z6dtCt8hUDR"; 
        $updateRequest = new Model\UpdateTransferRequest(array(
            "tags" => array("test_tag" => "123123")
        ));
        $updatedTransfer = $this->client->transfers->update($transferId, $updateRequest);
        $this->assertSame($updatedTransfer->getTags()["test_tag"], "123123");
    }
}
