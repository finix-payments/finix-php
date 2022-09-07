<?php
/**
 * ComplianceFormsApiTest
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
 * ComplianceFormsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class ComplianceFormsApiTest extends TestCase
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
        $username = "USj46WbwgnjapmdYFnEDP3Ec";
        $password = "b9b4042c-9621-438d-a84b-8557d4bda84d";
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
     * Test case for getComplianceForms
     *
     * View Compliance Forms.
     *
     */
    public function testGetComplianceForms()
    {
        $complianceFormsId = "cf_fEojUGLjwUiqNTBp68JWq8";
        $complianceForm = $this->client->complianceForms->list($complianceFormsId);
        $this->assertEquals($complianceForm->getId(), $complianceFormsId);
        $this->assertEquals($complianceForm->getType(), "PCI_SAQ_A");
        $this->assertEquals($complianceForm->getLinkedType(), "MERCHANT");
        $this->assertEquals($complianceForm->getState(), "INCOMPLETE");
        $this->assertEquals($complianceForm->getLinkedTo(), "MUfnskvHiiDgP7x3TVL2LkG3");
        $this->assertEquals($complianceForm->getFiles()->getUnsignedFile(), "FILE_fFGMCY4sxGYTqpjnXh54kC");
        $this->assertEquals($complianceForm->getComplianceFormTemplate(), "cft_wua8ua1yLAcHRK9mx2mF9K");
    }

    /**
     * Test case for updateComplianceForms
     *
     * Complete Compliance Forms.
     *
     */
    public function testUpdateComplianceForms()
    {   
        $client2 = new FinixClient("US8MrUh4Eb1L9Kn6rgSKdem4", "94879501-e840-4263-ae01-b65e10084893", Environment::SANDBOX);
        $complianceFormsId = "cf_pzJCPAqrt9Z5653V3iXRDv";
        $updateComplianceFormRequest = new Model\UpdateComplianceFormRequest(array(
            'pci_saq_a' => new Model\UpdateComplianceFormRequestPciSaqA(array(
                'name' => 'test_php',
                'signed_at' => '2022-03-18T16:42:55Z',
                'user_agent' => "Mozilla 5.0(Macintosh; IntelMac OS X 10 _14_6)",
                'ip_address' => "42.1.1.113",
                'title' => "CTO"
            ))
        ));

        $updatedForm = $client2->complianceForms->update($complianceFormsId, $updateComplianceFormRequest);

        $this->assertEquals($updatedForm->getPciSaqA()->getName(), $updateComplianceFormRequest->getPciSaqA()->getName());
        $this->assertEquals($updatedForm->getPciSaqA()->getSignedAt(), $updateComplianceFormRequest->getPciSaqA()->getSignedAt());
        $this->assertEquals($updatedForm->getPciSaqA()->getUserAgent(), $updateComplianceFormRequest->getPciSaqA()->getUserAgent());
        $this->assertEquals($updatedForm->getPciSaqA()->getIpAddress(), $updateComplianceFormRequest->getPciSaqA()->getIpAddress());
        $this->assertEquals($updatedForm->getPciSaqA()->getTitle(), $updateComplianceFormRequest->getPciSaqA()->getTitle());

    }
}
