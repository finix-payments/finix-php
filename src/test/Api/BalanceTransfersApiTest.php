<?php
/**
 * BalanceTransfersApiTest
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
 * BalanceTransfersApiTest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class BalanceTransfersApiTest extends TestCase
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
        $username = "USbkjk46XqUTQHN3i2jaVnc1";
        $password = "ac915962-2757-49ea-aeee-10960a408b99";
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
     * Create a Balance Transfer.
     *
     */
    public function testCreateBalanceTransfer()
    {
        $createBalanceTransferRequest = new Model\CreateBalanceTransferRequest(array(
            'description' => "Need to increase buffer given the high number of NSFs on merchant fee debits",
            'tags' => null,
            'destination' => Model\CreateBalanceTransferRequest::DESTINATION_FOR_BENEFIT_OF_ACCOUNT,
            'currency' => Model\Currency::USD,
            'amount' => 4000,
            'source' => Model\CreateBalanceTransferRequest::SOURCE_OPERATING_ACCOUNT,
            'processor_type' => "LITLE_V1"
        ));
        $balanceTransfer = $this->client->balanceTransfers->create($createBalanceTransferRequest);
        $this->assertSame($balanceTransfer->getSource(), Model\CreateBalanceTransferRequest::SOURCE_OPERATING_ACCOUNT);
        $this->assertSame($balanceTransfer->getAmount(), $createBalanceTransferRequest->getAmount());
        $this->assertSame($balanceTransfer->getDescription(), $createBalanceTransferRequest->getDescription());
    }

    /**
     * Test case for get
     *
     * Get a Balance Transfer.
     *
     */
    public function testGetBalanceTransfers()
    {
        $balanceTransferId = "BT_v3KQqgpDPqskH8VH6isFyz";
        $balanceTransfer = $this->client->balanceTransfers->get($balanceTransferId);
        $this->assertSame($balanceTransfer->getAmount(), 4000);
        $this->assertSame($balanceTransfer->getSource(), Model\CreateBalanceTransferRequest::SOURCE_OPERATING_ACCOUNT);
        $this->assertSame($balanceTransfer->getId(), $balanceTransferId);
    }

    /**
     * Test case for list
     *
     * List Balance Transfers.
     *
     */
    public function testListBalanceTransfers()
    {
        $balanceTransferList = $this->client->balanceTransfers->list(array());
        $this->assertTrue(count($balanceTransferList) >= 0);
        if (count($balanceTransferList) == 0)
        {
            $this->assertSame($balanceTransferList->hasMore(), false);
        }
        if ($balanceTransferList->hasMore())
        {
            $nextList = $balanceTransferList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }
    }
}
