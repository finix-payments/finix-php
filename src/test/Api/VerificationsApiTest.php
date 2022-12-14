<?php
/**
 * VerificationsApiTest
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
 * VerificationsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class VerificationsApiTest extends TestCase
{
    public $client;
    public static $verificationId;
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
     * Perform a Verification.
     *
     */
    public function testCreateVerification()
    {
        $verificationRequest = new Model\CreateVerificationRequest(array(
            'merchant' => "MUucec6fHeaWo3VHYoSkUySM", 
            'processor' => "DUMMY_V1", 
            'tags' => array(
                'test' => "verification_test"
            )
        ));
        $verification = $this->client->verifications->create($verificationRequest);
        $this->assertSame($verification->getMerchant(), $verificationRequest->getMerchant());
        $this->assertSame($verification->getProcessor(), $verificationRequest->getProcessor());
        self::$verificationId = $verification->getId();
    }

    /**
     * Test case for get
     *
     * Get a Verification.
     * @depends testCreateVerification
     *
     */
    public function testGetVerification()
    {
        $verification = $this->client->verifications->get(self::$verificationId);
        $this->assertSame(self::$verificationId, $verification->getId());

    }

    /**
     * Test case for list
     *
     * List Verifications.
     *
     */
    public function testListVerifications()
    {
        $verificationList = $this->client->verifications->list(array());
        $this->assertTrue(count($verificationList) >= 0);
        if (count($verificationList) == 0)
        {
            $this->assertSame($verificationList->hasMore(), false);
        }
        if ($verificationList->hasMore())
        {
            $nextList = $verificationList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }
    }

     /**
     * Test case for list by Merchant Id 
     *
     * List Verifications by Merchant Id.
     *
     */
    public function testListVerificationsByMerchantId()
    {
        $merchantId = "MUucec6fHeaWo3VHYoSkUySM";
        $verificationList = $this->client->verifications->listByMerchantId(array(
            'merchant_id' => $merchantId
        ));
        $this->assertTrue(count($verificationList) >= 0);
        if (count($verificationList) == 0)
        {
            $this->assertSame($verificationList->hasMore(), false);
        }
        if ($verificationList->hasMore())
        {
            $nextList = $verificationList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }
    }

    /**
     * Test case for raw as string
     *
     * Raw as string.
     *
     */
    public function testRawAsString()
    {
        $client2 = new FinixClient("USpumes23XhzHwXqiy9bfX2B", "c69d39e3-f9ff-4735-8c3e-abca86441906");
        $verification = $client2->verifications->get("VIcrdHd2vBu5RDZJWNGTQihc");

        $this->assertSame("RawDummyMerchantUnderwriteResult", $verification->getRaw()[0]);

    }
}
