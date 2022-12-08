<?php
/**
 * PayoutProfilesApiTest
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
 * PayoutProfilesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class PayoutProfilesApiTest extends TestCase
{
    /**
     * @var FinixClient
     */
    public FinixClient $client;

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
        $username = "US4UKYcdgmg3CKPxDRyV3FtA";
        $password = "88214476-3d56-4708-adc2-a7f001b0d5a1";
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
     * Test case for getByMerchant
     *
     * Fetch Payout Profile by Merchant.
     *
     */
    public function testGetByMerchant()
    {
        $merchantId = "MUfbbKm7vRmBX2bP92pKw9zZ";
        $payoutProfile = $this->client->payoutProfiles->getByMerchantId($merchantId);
        $this->assertSame($payoutProfile->getLinkedId(), $merchantId);
        $this->assertSame($payoutProfile->getLinkedType(), "MERCHANT");
    }

    /**
     * Test case for get
     *
     * Fetch a Payout Profile.
     *
     */
    public function testGetPayoutprofile()
    {
        // To make test resilient, need to fetch merchant, then payout profile id.
        // payout profile id changes each update.
        $merchantId = "MUfbbKm7vRmBX2bP92pKw9zZ";
        $payoutProfile = $this->client->payoutProfiles->getByMerchantId($merchantId);
        $payoutProfileId = $payoutProfile->getId();
        $payoutProfile = $this->client->payoutProfiles->get($payoutProfileId);
        $this->assertSame($payoutProfile->getLinkedType(), "MERCHANT");
        $this->assertSame($payoutProfile->getId(), $payoutProfileId);
    }

    /**
     * Test case for listPayoutprofiles
     *
     * List Payout Profiles.
     *
     */
    public function testListPayoutprofiles()
    {

        $payoutProfilesList = $this->client->payoutProfiles->list(array());

        $this->assertTrue(count($payoutProfilesList) >= 0);
        if (count($payoutProfilesList) == 0)
        {
            $this->assertSame($payoutProfilesList->hasMore(), false);
        }
        if ($payoutProfilesList->hasMore())
        {
            $nextList = $payoutProfilesList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }
    }

    /**
     * Test case for updatePayoutProfile
     *
     * Update a Payout Profile.
     *
     */
    public function testUpdatePayoutProfile()
    {
        $merchantId = "MU6TXYpA37uM9H4GwitQr8E3";
        $paymentInstrumentId = "PI2EmosKE8tvfSiF7Pd4SYE";
        $payoutProfile = $this->client->payoutProfiles->getByMerchantId($merchantId);
        $payoutProfileId = $payoutProfile->getId();
        $newPayoutProfile = $this->client->payoutProfiles->update($payoutProfileId, 
            new Model\UpdatePayoutProfileRequest(array(
                'type' => "NET",
                'net'  => new Model\UpdatePayoutProfileRequestNet(array(
                    'frequency' => "DAILY",
                    "payment_instrument_id" => $paymentInstrumentId,
                    "rail" => "NEXT_DAY_ACH"
                ))
            )
        ));

        $this->assertSame($newPayoutProfile->getType(), "NET");
        $this->assertSame($newPayoutProfile->getNet()->getFrequency(), "DAILY");
        $this->assertSame($newPayoutProfile->getNet()->getPaymentInstrumentId(), $paymentInstrumentId);
    }
}
