<?php
/**
 * PaymentInstrumentsApiTest
 * PHP version 7.4
 *
 * @category Class
 * @package  Finix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Finix API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2022-02-01
 * Contact: support@finixpayments.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
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
 * PaymentInstrumentsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentInstrumentsApiTest extends TestCase
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
     * Test case for createApplePaySession
     *
     * Create an Apple Pay Session.
     *
     */
    // public function testCreateApplePaySession()
    // {
        
    // }

    /**
     * Test case for create
     *
     * Create a Bank account.
     *
     */
    public function testCreatePaymentInstrument()
    {
        $paymentRequest = new Model\CreatePaymentInstrumentRequest(array(
            'account_type' => Model\CreatePaymentInstrumentRequest::ACCOUNT_TYPE_SAVINGS,
            'name' => "Alice",
            'tags' => array('Bank Account' => "Company Account"),
            'country' => "USA",
            'bank_code' => "123123123",
            'account_number' => "123123123",
            'type' =>  Model\CreatePaymentInstrumentRequest::TYPE_BANK_ACCOUNT,
            'identity' => "IDpYDM7J9n57q849o9E9yNrG"
        ));
        $paymentInstrument = $this->client->paymentInstruments->create($paymentRequest);
        $this->assertSame($paymentInstrument->getName(), $paymentRequest->getName());
        $this->assertSame($paymentInstrument->getBankCode(), $paymentRequest->getBankCode());
    }

    /**
     * Test case for create
     *
     * Create a Payment Card.
     *
     */
    public function testCreatePaymentCard()
    {
        $paymentRequest = new Model\CreatePaymentInstrumentRequest(array(
            'name' => "Alice",
            'tags' => array('card_name' => "Business Card"),
            'expiration_year' => 2029,
            'expiration_month' => 12,
            'number' => "4895142232120006",
            'address' => new Model\CreatePaymentInstrumentRequestAddress(array(
                'city' => 'San Francisco', 
                'region' => 'CA', 
                'postal_code' => "94404", 
                'line_1' => '900 Metro Center Blv', 
                'country' => "USA"
            )),
            'type' =>  Model\CreatePaymentInstrumentRequest::TYPE_PAYMENT_CARD,
            'identity' => "IDgWxBhfGYLLdkhxx2ddYf9K", 
            'security_code' => "022"
        ));
        $paymentInstrument = $this->client->paymentInstruments->create($paymentRequest);
        $this->assertSame($paymentInstrument->getName(), $paymentRequest->getName());
        $this->assertSame($paymentInstrument->getExpirationMonth(), $paymentRequest->getExpirationMonth());
    }

    /**
     * Test case for get
     *
     * Get a Payment Instrument.
     *
     */
    public function testGetPaymentInstrument()
    {
        $paymentInstrumentId = "PI8sdzepdapDehPWKFTcre1m";
        $paymentInstrument = $this->client->paymentInstruments->get($paymentInstrumentId);
        $this->assertSame($paymentInstrumentId, $paymentInstrument->getId());
        $this->assertSame("APgPDQrLD52TYvqazjHJJchM", $paymentInstrument->getApplication());
    }

    /**
     * Test case for unknown enum 
     *
     * Get a Payment Instrument.
     *
     */
    public function testUnknownEnum()
    {
        $paymentInstrumentId = "PI8sdzepdapDehPWKFTcre1m";
        $paymentInstrument = $this->client->paymentInstruments->get($paymentInstrumentId);
        $this->assertSame($paymentInstrumentId, $paymentInstrument->getId());
        $this->assertSame("APgPDQrLD52TYvqazjHJJchM", $paymentInstrument->getApplication());
    }
    /**
     * Test case for listUpdatesByPaymentInstrumentId
     *
     * List Payment Instrument Updates.
     *
     */
    public function testListPaymentInstrumentUpdates()
    {
        $paymentInstrumentUpdateList = $this->client->paymentInstruments->listUpdatesByPaymentInstrumentId(array(
            'payment_instrument_id' => "PIe2YvpcjvoVJ6PzoRPBK137"
        ));
        $this->assertTrue(count($paymentInstrumentUpdateList) >= 0);
        if (count($paymentInstrumentUpdateList) == 0)
        {
            $this->assertSame($paymentInstrumentUpdateList->hasMore, false);
        }
        if ($paymentInstrumentUpdateList->hasMore)
        {
            $nextList = $paymentInstrumentUpdateList->listNext(1);
            $this->assertSame(count($nextList), 2);
        }
    }

    /**
     * Test case for list
     *
     * List Payment Instruments.
     *
     */
    public function testListPaymentInstruments()
    {
        $paymentInstrumentList = $this->client->paymentInstruments->list(array());
        $this->assertTrue(count($paymentInstrumentList) >= 0);
        if (count($paymentInstrumentList) == 0)
        {
            $this->assertSame($paymentInstrumentList->hasMore, false);
        }
        if ($paymentInstrumentList->hasMore)
        {
            $nextList = $paymentInstrumentList->listNext(1);
            $this->assertSame(count($nextList), 2);
        }
    }

    /**
     * Test case for update
     *
     * Update a Payment Instrument.
     *
     */
    public function testUpdatePaymentInstrument()
    {
        $paymentInstrumentId = "PIe2YvpcjvoVJ6PzoRPBK137";
        $updatedPaymentInstrument = $this->client->paymentInstruments->update($paymentInstrumentId,
            new Model\UpdatePaymentInstrumentRequest(array(
                'tags' => array("test" => "update_test")
            )));
        $this->assertSame("update_test", $updatedPaymentInstrument->getTags()['test']);
        $this->assertSame($paymentInstrumentId, $updatedPaymentInstrument->getId());
    }
}
