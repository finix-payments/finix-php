<?php
/**
 * MerchantProfilesApiTest
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
 * MerchantProfilesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class MerchantProfilesApiTest extends TestCase
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
        $username = "USimz3zSq5R2PqiEBXY6rSiJ";
        $password = "8bacba32-9550-48ff-b567-fe7648947041";
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
     * Test case for get
     *
     * Show Merchant Profile.
     *
     */
    public function testGetMerchantProfile()
    {
        $merchantProfileId = "MP7dqAPFRBM8gN9hb3Guumif";
        $merchantProfile = $this->client->merchantProfiles->get($merchantProfileId);
        $this->assertSame($merchantProfileId, $merchantProfile->getId());
    }

    /**
     * Test case for list
     *
     * List Merchant Profiles.
     *
     */
    public function testListMerchantProfiles()
    {
        $merchantProfileList = $this->client->merchantProfiles->list(array());
        $this->assertTrue(count($merchantProfileList) >= 0);
        if (count($merchantProfileList) == 0)
        {
            $this->assertSame($merchantProfileList->hasMore(), false);
        }
        if ($merchantProfileList->hasMore())
        {
            $nextList = $merchantProfileList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }
    }

    /**
     * Test case for update
     *
     * Update a Merchant Profile.
     *
     */
    public function testUpdateMerchantProfile()
    {
        $merchantProfileId = "MP7dqAPFRBM8gN9hb3Guumif";
        $riskProfileId = "RP7akGm3WVYf9Z7omCeeCpgB";

        $updatedProfile = $this->client->merchantProfiles->update($merchantProfileId, 
        new Model\UpdateMerchantProfileRequest(array(
            'risk_profile' => $riskProfileId
        )));
        $this->assertSame($merchantProfileId, $updatedProfile->getId());
        $this->assertSame($riskProfileId, $updatedProfile->getRiskProfile());
    }
}
