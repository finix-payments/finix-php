<?php
/**
 * FeeProfilesApiTest
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
 * Error Response 
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class ErrorResponseTest extends TestCase
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
     * Test case for wrong password 
     *
     * 401 error - Unauthorized error wrong password 
     *
     */
    public function testWrongPasswordError()
    {
        try{
            $username = "USimz3zSq5R2PqiEBXY6rSiJ";
            $wrongPassword = "123123";
            $invalidClient = new FinixClient($username, $wrongPassword, Environment::SANDBOX);
            $verification = $invalidClient->verifications->get("VIcrdHd2vBu5RDZJWNGTQihc");
        }catch(ApiException $e){
            $this->assertSame($e->getCode(), 401);
            $this->assertSame($e->getResponseBody()[0]['message'], "Unauthorized");
            $this->assertTrue(count($e->getResponseBody()) >= 1);
        }
    }

    /**
     * Test case for invalid username 
     *
     * 401 - Unauthorized error invalid username
     *
     */
    public function testInvlidUsernamedError()
    {
        try{
            $invalidUsername = "123123";
            $password = "8bacba32-9550-48ff-b567-fe7648947041";
            $invalidClient = new FinixClient($invalidUsername, $password, Environment::SANDBOX);
            $verification = $invalidClient->verifications->get("VIcrdHd2vBu5RDZJWNGTQihc");
        }catch(ApiException $e){
            $this->assertSame($e->getCode(), 401);
            $this->assertSame($e->getResponseBody()[0]['message'], "Unauthorized");
            $this->assertTrue(count($e->getResponseBody()) >= 1);
        }
    }

    /**
     * Test case for not found 
     *
     * 404 - Not found
     *
     */
    public function testNotFound()
    {
        try{
            $verification = $this->client->transfers->list(array(
                'after_cursor' => "123"
            ));
        }catch(ApiException $e){
            $this->assertSame($e->getCode(), 404);
            $this->assertSame($e->getResponseBody()[0]['message'], "Unable to parse value 123");
            $this->assertTrue(count($e->getResponseBody()) >= 1);
        }
    }

    /**
     * Test case for Refused/Declined payments
     *
     * 402 - Refused/Declined payments -- declined authorization
     *
     */
    public function testDeclinedAuthorization()
    {
        try{
            $paymentRequest = new Model\CreatePaymentInstrumentRequest(array(
                'name' => "Amy White",
                'tags' => array('card_name' => "Business Card"),
                'expiration_year' => 2029,
                'expiration_month' => 12,
                'number' => "4000000000009979",
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
            $paymentCardId = $paymentInstrument->getId();

            $createAuthorizationRequest = new Model\CreateAuthorizationRequest(array(
                'source' => $paymentCardId,
                'merchant' => "MUeDVrf2ahuKc9Eg5TeZugvs",
                'currency' => Model\Currency::USD, 
                'amount' => 123, 
            ));
            $authorization = $this->client->authorizations->create($createAuthorizationRequest);
        }catch(ApiException $e){
            $this->assertSame($e->getCode(), 402);
            $this->assertSame($e->getResponseBody()[0]['code'], "DECLINED");
            $this->assertTrue(count($e->getResponseBody()) >= 1);
        }
    }

    /**
     * Test case for Refused/Declined payments -- payment declined
     *
     * 402 - Refused/Declined payments -- payment declined
     *
     */
    public function testDeclinedPayment()
    {
        try{
            $paymentRequest = new Model\CreatePaymentInstrumentRequest(array(
                'name' => "Amy White",
                'tags' => array('card_name' => "Business Card"),
                'expiration_year' => 2029,
                'expiration_month' => 12,
                'number' => "4111111111111111",
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
            $paymentCardId = $paymentInstrument->getId();

            $createAuthorizationRequest = new Model\CreateAuthorizationRequest(array(
                'source' => $paymentCardId,
                'merchant' => "MUeDVrf2ahuKc9Eg5TeZugvs",
                'currency' => Model\Currency::USD, 
                'amount' => 123, 
            ));
            $authorization = $this->client->authorizations->create($createAuthorizationRequest);
            $authorizationId = $authorization->getId();

            $capturedAuthorization = $this->client->authorizations->update($authorizationId, new Model\UpdateAuthorizationRequest(
                array('capture_amount' => 102)
            ));
        }catch(ApiException $e){
            $this->assertSame($e->getCode(), 402);
            $this->assertSame($e->getResponseBody()[0]['code'], "PAYMENT_DECLINED");
            $this->assertTrue(count($e->getResponseBody()) >= 1);
        }
    }

    /**
     * Test case for invalid field
     *
     * 422 - Refused/Declined payments -- invalid field 
     *
     */
    public function testInvalidField()
    {
        try{
            $paymentRequest = new Model\CreatePaymentInstrumentRequest(array(
                'name' => "Amy White",
                'tags' => array('card_name' => "Business Card"),
                'expiration_year' => 1990,
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
        }catch(ApiException $e){
            $this->assertSame($e->getCode(), 422);
            $this->assertSame($e->getResponseBody()[0]['code'], "INVALID_FIELD");
            $this->assertTrue(count($e->getResponseBody()) >= 1);
        }
    }


}
