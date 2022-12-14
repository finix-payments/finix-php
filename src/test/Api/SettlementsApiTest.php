<?php
/**
 * SettlementsApiTest
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
 * SettlementsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class SettlementsApiTest extends TestCase
{
    public $client;
    const settlementId = "STmCc8GbjjX33SdymwNhb9Et";
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
        $username = "USpumes23XhzHwXqiy9bfX2B";
        $password = "c69d39e3-f9ff-4735-8c3e-abca86441906";
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
     * Create a Batch Settlement.
     *
     */
    public function testCreateIdentitySettlement()
    {
        try{
            $identityId = "IDqvpp6sfYBLxDsYNeFRdYeF";
            $settlementRequest = new Model\CreateSettlementRequest(array(
                'processor' => "DUMMY_V1", 
                'currency' => Model\Currency::USD, 
                'tags' => array('Internal Daily Settlement ID'=> "21DFASJSAKAS") 
            ));
            $settlement = $this->client->settlements->create($identityId, $settlementRequest);
        } catch(ApiException $e){
            $this->assertSame($e->getCode(), 422);
            $this->assertSame($e->getResponseBody()[0]['message'], "There are no unsettled SUCCEEDED transfers to be settled.");
            $this->assertTrue(count($e->getResponseBody()) >= 1);
        }
    }

    /**
     * Test case for get
     *
     * Fetch a Batch Settlement
     *
     */
    public function testGetSettlement()
    {
        $settlement = $this->client->settlements->get(self::settlementId);
        $this->assertSame(self::settlementId, $settlement->getId());
        $this->assertSame("AP3AB2itAWrrrPVS6spvrGYp", $settlement->getApplication());
    }

    /**
     * Test case for listFundingTransfers
     *
     * List Settlement Funding Transfers.
     *
     */
    public function testListSettlementFundingTransfers()
    {
        $settlementFundingList = $this->client->settlements->listFundingTransfers(array(
            'settlement_id' => self::settlementId
        ));
        $this->assertTrue(count($settlementFundingList) >= 0);
        if (count($settlementFundingList) == 0)
        {
            $this->assertSame($settlementFundingList->hasMore(), false);
        }
        if ($settlementFundingList->hasMore())
        {
            $nextList = $settlementFundingList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }
    }

    /**
     * Test case for listTransfersBySettlementId
     *
     * List Settlement Transfers.
     *
     */
    public function testListSettlementTransfers()
    {
        $settlementTransferList = $this->client->settlements->listTransfersBySettlementId(array(
            'settlement_id' => self::settlementId
        ));
        $this->assertTrue(count($settlementTransferList) >= 0);
        if (count($settlementTransferList) == 0)
        {
            $this->assertSame($settlementTransferList->hasMore(), false);
        }
        if ($settlementTransferList->hasMore())
        {
            $nextList = $settlementTransferList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }
    }

    /**
     * Test case for list
     *
     * List Settlements.
     *
     */
    public function testListSettlements()
    {
        $settlementList = $this->client->settlements->list(array());
        $this->assertTrue(count($settlementList) >= 0);
        if (count($settlementList) == 0)
        {
            $this->assertSame($settlementList->hasMore(), false);
        }
        if ($settlementList->hasMore())
        {
            $nextList = $settlementList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }
    }

    /**
     * Test case for removeTransfersFromSettlement
     *
     * Delete Settlement Transfers.
     *
     */
    public function testRemoveSettlementTransfers()
    {
        $transfersId = "TRr61njQxaa7AJf6E1C3QwCc";
        $transfers[0] = $transfersId;
        try{
            $removedSettlement = $this->client->settlements->removeTransfersFromSettlement(
                self::settlementId, new Model\RemoveSettlementTransfer(
                    array('transfers' => $transfers)
                )
            );

        }catch(ApiException $e){
            $this->assertSame($e->getResponseBody()[0]['message'], "Unable to process request. Entries [TRr61njQxaa7AJf6E1C3QwCc] not found in settlement STmCc8GbjjX33SdymwNhb9Et");
        }

    }

   
}
