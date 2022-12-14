<?php
/**
 * MerchantsApiTest
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
 * MerchantsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class MerchantsApiTest extends TestCase
{
    public $client;
    public static $merchantId;
    public static $identityId;

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
     * Provision a merchant
     *
     */
    public function testCreateMerchant()
    {
        $createIdentityRequest = new Model\CreateIdentityRequest(array(
            'entity' => new Model\CreateIdentityRequestEntity(array(
                'phone' => "1234567890",
                'first_name' => "Dwayne",
                'last_name' => "Sunkhronos",
                'email' => "user@example.org"
            )),
            'additional_underwriting_data' => new Model\CreateIdentityRequestAdditionalUnderwritingData(array(
                'merchant_agreement_accepted' => true,
                'merchant_agreement_ip_address' => "42.1.1.113",
                "average_ach_transfer_amount" => 200000,
                "annual_ach_volume" => 200000 
            ))
        ));
        $identity = $this->client->identities->create($createIdentityRequest);
        self::$identityId = $identity->getId();
        $paymentRequest = new Model\CreatePaymentInstrumentRequest(array(
            'account_type' => Model\CreatePaymentInstrumentRequest::ACCOUNT_TYPE_SAVINGS,
            'name' => "Alice",
            'tags' => array('Bank Account' => "Company Account"),
            'country' => "USA",
            'bank_code' => "123123123",
            'account_number' => "123123123",
            'type' =>  Model\CreatePaymentInstrumentRequest::TYPE_BANK_ACCOUNT,
            'identity' => self::$identityId
        ));
        $paymentInstrument = $this->client->paymentInstruments->create($paymentRequest);
        
        $merchantRequest = new Model\CreateMerchantUnderwritingRequest(array(
            'processor' => "DUMMY_V1",
            'tags' => array('key_2' => "value_2")
        ));

        $merchant = $this->client->merchants->create(self::$identityId, $merchantRequest);
        self::$merchantId = $merchant->getId();

        $this->assertSame($merchant->getIdentity(), self::$identityId);
        $this->assertSame($merchant->getApplication(), "APgPDQrLD52TYvqazjHJJchM");
        $this->assertSame($merchant->getProcessor(), $merchantRequest->getProcessor());
    }

    /**
     * Test case for createMerchantVerification
     *
     * Verify a Merchant.
     *
     */
    public function testCreateMerchantVerification()
    {
        $reattemptedMerchantVerification = $this->client->merchants->createMerchantVerification(self::$merchantId, 
        new Model\createVerificationRequest(array()));

        $this->assertSame($reattemptedMerchantVerification->getMerchant(), self::$merchantId);
        $this->assertSame($reattemptedMerchantVerification->getApplication(), "APgPDQrLD52TYvqazjHJJchM");
        $this->assertSame($reattemptedMerchantVerification->getProcessor(), "DUMMY_V1");

    }

    /**
     * Test case for get
     *
     * Get a Merchant.
     *
     */
    public function testGetMerchant()
    {
        $fetchedMerchant = $this->client->merchants->get(self::$merchantId);
        $this->assertSame($fetchedMerchant->getIdentity(), self::$identityId);
        $this->assertSame($fetchedMerchant->getApplication(), "APgPDQrLD52TYvqazjHJJchM");
        $this->assertSame($fetchedMerchant->getProcessor(), "DUMMY_V1");

    }

    /**
     * Test case for list
     *
     * List Merchants.
     *
     */
    public function testListMerchants()
    {
        $merchantsList = $this->client->merchants->list(array());
        $this->assertTrue(count($merchantsList) >= 0);
        if (count($merchantsList) == 0)
        {
            $this->assertSame($merchantsList->hasMore(), false);
        }
        if ($merchantsList->hasMore())
        {
            $nextList = $merchantsList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }
    }

    /**
     * Test case for listByMerchantId
     *
     * List Merchant Verifications.
     *
     */
    public function testListMerchantVerifications()
    {
        $merchantsVerificationList = $this->client->verifications->listByMerchantId(array(
            'merchant_id' => self::$merchantId
        ));
        $this->assertTrue(count($merchantsVerificationList) >= 0);
        if (count($merchantsVerificationList) == 0)
        {
            $this->assertSame($merchantsVerificationList->hasMore(), false);
        }
        if ($merchantsVerificationList->hasMore())
        {
            $nextList = $merchantsVerificationList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }
    }


    /**
     * Test case for update
     *
     * Update a Merchant.
     *
     */
    public function testUpdateMerchant()
    {
        $client2 = new FinixClient("UStxEci4vXxGDWLQhNvao7YY", "25038781-2369-4113-8187-34780e91052e");
        $updatedMerchant = $client2->merchants->update("MUeDVrf2ahuKc9Eg5TeZugvs", new Model\UpdateMerchantRequest(array(
            'level_two_level_three_data_enabled' => true
        )));

        $this->assertSame("MUeDVrf2ahuKc9Eg5TeZugvs", $updatedMerchant->getId());
        $this->assertSame(true, $updatedMerchant->getLevelTwoLevelThreeDataEnabled());
    }

}
