<?php
/**
 * DisputesApiTest
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
 * DisputesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class DisputesApiTest extends TestCase
{
    public $client;
    public const disputeId = "DIs7yQRkHDdMYhurzYz72SFk";
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
     * Test case for createDisputeEvidence
     *
     * Create Dispute Evidence.
     *
     */
    public function testCreateDisputeEvidence()
    {
        $file =  fopen('test.png', 'r');
        $uploadedEvidence = $this->client->disputes->createDisputeEvidence($this::disputeId
        , new Model\CreateDisputeEvidenceRequest(array('file'=>$file)));
        
        $this->assertSame($this::disputeId, $uploadedEvidence->getDispute());

    }

    /**
     * Test case for get
     *
     * Get Dispute.
     *
     */
    public function testGetDispute()
    {
        $dispute = $this->client->disputes->get($this::disputeId);
        $this->assertSame($this::disputeId, $dispute->getId());
        $this->assertSame(888888, $dispute->getAmount());
    }

    /**
     * Test case for getDisputeEvidence
     *
     * Fetch Dispute Evidence.
     *
     */
    public function testGetDisputeEvidence()
    {
        $evidenceId = "DFnA9eVoYxRnxxLKzgcGGxYL";
        $disputeEvidence = $this->client->disputes->getDisputeEvidence($this::disputeId, $evidenceId);
        $this->assertSame($evidenceId, $disputeEvidence->getId());
        $this->assertSame($this::disputeId, $disputeEvidence->getDispute());
    }

    /**
     * Test case for listDisputeEvidenceByDisputeId
     *
     * List Dispute Evidence.
     *
     */
    public function testListDisputeEvidence()
    {
        $disputeEvidenceList = $this->client->disputes->listDisputeEvidenceByDisputeId(array(
            'dispute_id' => $this::disputeId));
        $this->assertTrue(count($disputeEvidenceList) >= 0);
        if (count($disputeEvidenceList) == 0)
        {
            $this->assertSame($disputeEvidenceList->hasMore(), false);
        }
        if ($disputeEvidenceList->hasMore())
        {
            $nextList = $disputeEvidenceList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }
    }

    /**
     * Test case for list
     *
     * List Disputes.
     *
     */
    public function testListDisputes()
    {
        $disputeList = $this->client->disputes->list(array());
        $this->assertTrue(count($disputeList) >= 0);
        if (count($disputeList) == 0)
        {
            $this->assertSame($disputeList->hasMore(), false);
        }
        if ($disputeList->hasMore())
        {
            $nextList = $disputeList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }
    }

    /**
     * Test case for listDisputesAdjustments
     *
     * Fetch Dispute Adjustment Transfers.
     *
     */
    public function testListDisputesAdjustments()
    {
        $disputeAdjustmentList = $this->client->disputes->listDisputesAdjustments(array(
            'dispute_id' => $this::disputeId));
        $this->assertTrue(count($disputeAdjustmentList) >= 0);
        if (count($disputeAdjustmentList) == 0)
        {
            $this->assertSame($disputeAdjustmentList->hasMore(), false);
        }
        if ($disputeAdjustmentList->hasMore())
        {
            $nextList = $disputeAdjustmentList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }
    }
}
