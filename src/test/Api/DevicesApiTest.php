<?php
/**
 * DevicesApiTest
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
 * DevicesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DevicesApiTest extends TestCase
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
        $username = "USjHFGYvecE4LBitYG8KDE2g";
        $password = "b698f403-d9b7-4157-82d8-162cea8c8cc3";
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
     * Create a Device.
     *
     */
    public function testCreateMerchantDevice()
    {
        $merchantId = "MUu56ZGx3Xb6U9gAqKfgNisd";
        $createDevice = new Model\CreateDevice(array(
            'description' => "Mike Jones",
            'configuration' => new Model\ConfigurationDetails(array(
                'allow_debit' => true,
                'prompt_signature' => "NEVER",
                'bypass_device_on_capture' => true
            )),
            'model' => Model\CreateDevice::MODEL_MX915,
            'name' => "Finix  triPOS #1"
        ));
        $device = $this->client->devices->create($merchantId, $createDevice);
        $this->assertSame($device->getMerchant(), $merchantId);
        $this->assertSame($createDevice->getName(), $device->getName());
        $this->assertSame("MX915", $device->getModel());
    }

    /**
     * Test case for get
     *
     * Get Device.
     *
     */
    public function testGetDevice()
    {
       $deviceId = "DVf2H8sh4LZZC52GTUrwCPPf";
       $device = $this->client->devices->get(array(
        'device_id' => $deviceId
       ));
       $this->assertSame($device->getMerchant(), "MUu56ZGx3Xb6U9gAqKfgNisd");
    }

}