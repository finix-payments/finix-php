<?php
/**
 * PaymentInstrumentsApiTest
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
 * PaymentInstrumentsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
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
        $paymentInstrumentId = "PI4gTM3twQ5XyXfM4rTuFvpo";
        $paymentInstrument = $this->client->paymentInstruments->get($paymentInstrumentId);
        $this->assertSame("APPLE_PAY", $paymentInstrument->getType());
        $this->assertSame("APPLE_PAY", $paymentInstrument->getInstrumentType());
    }
    /**
     * Test case for listUpdatesByPaymentInstrumentId
     *
     * List Payment Instrument Updates.
     *
     */
    public function testListPaymentInstrumentUpdates()
    {
        // Removed as support for payment instrument updates removed.
        // $paymentInstrumentUpdateList = $this->client->paymentInstruments->listUpdatesByPaymentInstrumentId(array(
        //     'payment_instrument_id' => "PIe2YvpcjvoVJ6PzoRPBK137"
        // ));
        // $this->assertTrue(count($paymentInstrumentUpdateList) >= 0);
        // if (count($paymentInstrumentUpdateList) == 0)
        // {
        //     $this->assertSame($paymentInstrumentUpdateList->hasMore(), false);
        // }
        // if ($paymentInstrumentUpdateList->hasMore())
        // {
        //     $nextList = $paymentInstrumentUpdateList->listNext(1);
        //     $this->assertSame(count($nextList), 1);
        // }
        $this->markTestIncomplete('Not implemented');
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
            $this->assertSame($paymentInstrumentList->hasMore(), false);
        }
        if ($paymentInstrumentList->hasMore())
        {
            $nextList = $paymentInstrumentList->listNext(1);
            $this->assertSame(count($nextList), 1);
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
