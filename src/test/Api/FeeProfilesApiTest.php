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
 * FeeProfilesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class FeeProfilesApiTest extends TestCase
{
    public $client;
    public $feeProfileId;
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

        $createFeeProfileRequest = new Model\CreateFeeProfileRequest(array(
            'ach_fixed_fee' => 30, 
            'basis_points' => 200, 
            'application' => "APmuwPBaW8pVcwb4vCTHQH32", 
            'tags' => array("app pricing" => "simple"), 
            'charge_interchange' => false, 
            'fixed_fee' => 100, 
            'ach_basis_points' => 300
        ));
        $feeProfile = $this->client->feeProfiles->create($createFeeProfileRequest);
        $this->feeProfileId = $feeProfile->getId();
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
     * Create a Fee Profile.
     *
     */
    public function testCreateFeeProfile()
    {
        $createFeeProfileRequest = new Model\CreateFeeProfileRequest(array(
            'ach_fixed_fee' => 30, 
            'basis_points' => 200, 
            'application' => "APmuwPBaW8pVcwb4vCTHQH32", 
            'tags' => array("app pricing" => "simple"), 
            'charge_interchange' => false, 
            'fixed_fee' => 100, 
            'ach_basis_points' => 300
        ));
        $feeProfile = $this->client->feeProfiles->create($createFeeProfileRequest);
        $this->assertSame($feeProfile->getAchBasisPoints(), $createFeeProfileRequest->getAchBasisPoints());
        $this->assertSame($feeProfile->getChargeInterchange(), $createFeeProfileRequest->getChargeInterchange());
        $this->assertSame($feeProfile->getBasisPoints(), $createFeeProfileRequest->getBasisPoints());
    }

    /**
     * Test case for get
     *
     * Fetch a Fee Profile.
     *
     */
    public function testGetFeeProfile()
    {
        $feeProfile = $this->client->feeProfiles->get($this->feeProfileId);
        $this->assertSame($feeProfile->getId(), $this->feeProfileId);
    }

    /**
     * Test case for list
     *
     * List Fee Profiles.
     *
     */
    public function testListFeeProfiles()
    {
        $feeProfileList = $this->client->feeProfiles->list(array());
        $this->assertTrue(count($feeProfileList) >= 0);
        if (count($feeProfileList) == 0)
        {
            $this->assertSame($feeProfileList->hasMore(), false);
        }
        if ($feeProfileList->hasMore())
        {
            $nextList = $feeProfileList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }
    }
}
