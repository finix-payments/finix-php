<?php
/**
 * OnboardingFormsApiTest
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
 * OnboardingFormsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OnboardingFormsApiTest extends TestCase
{
    public $client;
    public static $onboardingId;
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
     * Test case for createOnboardingForm
     *
     * Create an Onboarding Form.
     *
     */
    public function testCreateOnboardingForm()
    {
        $onboardingCreateRequest = new Model\CreateOnboardingFormRequest(array(
            "onboarding_data" => new Model\CreateOnboardingFormRequestOnboardingData((array(
                "max_transaction_amount" => 100000
            ))),
            "merchant_processors" => [new Model\CreateOnboardingFormRequestMerchantProcessorsInner(
                array("processor" => "LITLE_V1")
            )],
            "onboarding_link_details" => new Model\CreateOnboardingFormRequestOnboardingLinkDetails(array(
                "return_url" => "https://www.finix.com/docs",
                "expired_session_url" => "https://www.finix.com/",
                "terms_of_service_url" => "https://www.finix.com/terms-and-policies",
                "fee_details_url" => "https://www.finix.com/docs",
                "expiration_in_minutes" => "30"
            ))
        ));

        $onboardingForm = $this->client->onboardingForms->create($onboardingCreateRequest);
        self::$onboardingId = $onboardingForm->getId();
        $this->assertEquals($onboardingForm->getOnboardingData()->getMaxTransactionAmount(), $onboardingCreateRequest->getOnboardingData()->getMaxTransactionAmount());
        $this->assertEquals($onboardingForm->getMerchantProcessors(), $onboardingCreateRequest->getMerchantProcessors());
    }

    /**
     * Test case for createOnboardingFormLink
     *
     * Create an Onboarding Form Link.
     * @depends testCreateOnboardingForm
     */
    public function testCreateOnboardingFormLink()
    {
        $onboardingLinkRequest = new Model\CreateOnboardingFormLinkRequest(array(
            'terms_of_service_url' => "https://www.finix.com/terms-and-policies",
            'return_url' => "https://www.finix.com/docs",
            'fee_details_url' => "https://www.finix.com/docs",
            'expired_session_url' => "https://www.finix.com/",
            'expiration_in_minutes' => '30'
        ));

        $onboardingLink = $this->client->onboardingForms->createLink(self::$onboardingId, 
        $onboardingLinkRequest);

        $this->assertTrue(str_contains($onboardingLink->getLinkUrl(), self::$onboardingId));
    }

    /**
     * Test case for geteOnboardingFormLink
     *
     * Get an Onboarding Form.
     * @depends testCreateOnboardingForm
     */
    public function testGetOnboardingFormLink()
    {
        $onboardingForm = $this->client->onboardingForms->get(self::$onboardingId);

        $this->assertEquals($onboardingForm->getOnboardingData()->getMaxTransactionAmount(), 100000);
        $this->assertEquals($onboardingForm->getMerchantProcessors()[0]["processor"], "LITLE_V1");
    }
}
