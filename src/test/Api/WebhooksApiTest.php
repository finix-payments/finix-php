<?php
/**
 * WebhooksApiTest
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
 * WebhooksApiTest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebhooksApiTest extends TestCase
{
    public $client;
    public static $webhookId;
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
     * Create a Webhook.
     *
     */
    public function testCreateWebhook()
    {
       $urlValue = "https://example.com/";
       $webhook = $this->client->webhooks->create(
        new Model\CreateWebhookRequest(array(
            'url' => $urlValue
        ))
        );

        self::$webhookId = $webhook->getId();
        $updatedWebhook = $this->client->webhooks->update(self::$webhookId,
            new Model\UpdateWebhookRequest(array(
                'enabled' => false
            ))
        );

        $this->assertSame($webhook->getUrl(), $urlValue);
        $this->assertSame($webhook->getApplication(), "APgPDQrLD52TYvqazjHJJchM");
    }

    /**
     * Test case for get
     *
     * Get a Webhook.
     * @depends testCreateWebhook
     */
    public function testGetWebhook()
    {
        $urlValue = "https://example.com/";
        $webhook = $this->client->webhooks->get(self::$webhookId);
        $this->assertSame($webhook->getUrl(), $urlValue);
    }

    /**
     * Test case for list
     *
     * List Webhooks.
     *
     */
    public function testListWebhooks()
    {
        $webhookList = $this->client->webhooks->list(array());
        $this->assertTrue(count($webhookList) >= 0);
        if (count($webhookList) == 0)
        {
            $this->assertSame($webhookList->hasMore, false);
        }
        if ($webhookList->hasMore)
        {
            $nextList = $webhookList->listNext(1);
            $this->assertSame(count($nextList), 2);
        }
    }

    /**
     * Test case for update
     *
     * Update a Webhook.
     *
     */
    public function testUpdateWebhook()
    {
        $urlValue = "https://example.com/";
        $updatedWebhook = $this->client->webhooks->update(self::$webhookId, 
            new Model\UpdateWebhookRequest(array(
                'enabled' => true
            ))
        );

        $this->assertSame($updatedWebhook->getUrl(), $urlValue);
        $this->assertSame($updatedWebhook->getEnabled(), true);

        $updatedWebhook = $this->client->webhooks->update(self::$webhookId, 
            new Model\UpdateWebhookRequest(array(
                'enabled' => false
            ))
        );
        
    }
}
