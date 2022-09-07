<?php
/**
 * InstrumentUpdatesApiTest
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
 * InstrumentUpdatesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class InstrumentUpdatesApiTest extends TestCase
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
     * Create Instrument Updates.
     *
     */
    public function testCreatePaymentInstrumentUpdate()
    {
        try{
            $file =  fopen('test.png', 'r');
            $createInstrumentUpdateRequest = new Model\CreateInstrumentUpdateRequest(array(
                'file'=>$file));
            $createInstrumentUpdateRequest->setRequest("{\"merchant\":\"MUucec6fHeaWo3VHYoSkUySM\"}");

            $instrumentUpdate = $this->client->instrumentUpdates->create($createInstrumentUpdateRequest
            );
                
            $this->assertSame($instrumentUpdate->getMerchant(), "MUucec6fHeaWo3VHYoSkUySM");
        } catch (ApiException $e)
        {
            var_dump($e->getResponseBody());
        }
    }

    /**
     * Test case for download
     *
     * Download Instrument Updates.
     *
     */
    public function testDownloadInstrumentUpdate()
    {
        $instrumentUpdateId = "IUp9oSWhWUF31DPrJ8CojQeQ";
        $downloadedFile = $this->client->instrumentUpdates->download(array(
            'instrument_updates_id' => $instrumentUpdateId
        ));
        $this->assertTrue($downloadedFile->getSize() > 0);

    }

    /**
     * Test case for get
     *
     * Fetch an Instrument Update.
     *
     */
    public function testGetInstrumentUpdate()
    {
        $instrumentUpdateId = "IUp9oSWhWUF31DPrJ8CojQeQ";
        $instrumentUpdate = $this->client->instrumentUpdates->get($instrumentUpdateId);
        $this->assertSame($instrumentUpdate->getId(), $instrumentUpdateId);

    }
}
