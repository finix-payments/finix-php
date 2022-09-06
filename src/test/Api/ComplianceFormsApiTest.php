<?php
/**
 * ComplianceFormsApiTest
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
 * ComplianceFormsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
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

    // /**
    //  * Test case for updateComplianceForms
    //  *
    //  * Complete Compliance Forms.
    //  *
    //  */
    // public function testUpdateComplianceForms()
    // {
    //     $complianceFormsId = "cf_fEojUGLjwUiqNTBp68JWq8";
    //     $complianceForm = $this->client->complianceForms->getComplianceForms($complianceFormsId);
    //     $oldValidDate = $complianceForm->getValidFrom();

    //     $updatedForm = $this->client->complianceForms->updateComplianceForms($complianceFormsId);
    //     $this->assertEquals()
    // }
}
