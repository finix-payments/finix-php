<?php
/**
 * IdentitiesApiTest
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
 * IdentitiesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class IdentitiesApiTest extends TestCase
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
     * Test case for createAssociatedIdentity
     *
     * Create an Associated Identity.
     *
     */
    public function testCreateAssociatedIdentity()
    {
        $identityId = "IDpYDM7J9n57q849o9E9yNrG";
        $createIdentityRequest = new Model\CreateAssociatedIdentityRequest(array(
            'entity' => new Model\CreateAssociatedIdentityRequestEntity(array(
                'phone' => "7145677613",
                'first_name' => "Amy",
                'last_name' => "Wade",
                'email' => "therock@gmail.com"
            ))
            ));
        $associatedIdentity = $this->client->identities->createAssociatedIdentity($identityId, $createIdentityRequest);
        $this->assertSame($associatedIdentity->getEntity()->getFirstName(), $createIdentityRequest->getEntity()->getFirstName());
        $this->assertSame($associatedIdentity->getEntity()->getLastName(), $createIdentityRequest->getEntity()->getLastName());
        $this->assertSame($associatedIdentity->getEntity()->getEmail(), $createIdentityRequest->getEntity()->getEmail());

    }

    /**
     * Test case for create
     *
     * Create an Identity for a Buyer.
     *
     */
    public function testCreateBuyerIdentity()
    {
        $createIdentityRequest = new Model\CreateIdentityRequest(array(
            'entity' => new Model\CreateIdentityRequestEntity(array(
                'phone' => "7145677613",
                'first_name' => "Amy",
                'last_name' => "Wade",
                'email' => "therock@gmail.com"
            ))
        ));
        $identity = $this->client->identities->create($createIdentityRequest);
        $this->assertSame($identity->getEntity()->getFirstName(), $createIdentityRequest->getEntity()->getFirstName());
        $this->assertSame($identity->getEntity()->getLastName(), $createIdentityRequest->getEntity()->getLastName());
        $this->assertSame($identity->getEntity()->getEmail(), $createIdentityRequest->getEntity()->getEmail());
        
    }

    /**
     * Test case for create
     *
     * Create an Identity for Merchant.
     *
     */
    public function testCreateMerchantIdentity()
    {
        $createIdentityRequest = new Model\CreateIdentityRequest(array(
            'entity' => new Model\CreateIdentityRequestEntity(array(
                'phone' => "7145677613",
                'first_name' => "Amy",
                'last_name' => "Wade",
                'email' => "therock@gmail.com"
            )),
            'additional_underwriting_data' => new Model\CreateIdentityRequestAdditionalUnderwritingData(array(
                'merchant_agreement_accepted' => true,
                'merchant_agreement_ip_address' => "42.1.1.113",
                "average_ach_transfer_amount" => 200000,
                "annual_ach_volume" => 200000 
            ))
        ));
        $identity = $this->client->identities->create($createIdentityRequest);
        $this->assertSame($identity->getEntity()->getFirstName(), $createIdentityRequest->getEntity()->getFirstName());
        $this->assertSame($identity->getEntity()->getLastName(), $createIdentityRequest->getEntity()->getLastName());
        $this->assertSame($identity->getEntity()->getEmail(), $createIdentityRequest->getEntity()->getEmail());
    }

    /**
     * Test case for createIdentityVerification
     *
     * Verify an Identity.
     *
     */
    public function testCreateIdentityVerification()
    {
        $createVerificationRequest = new Model\CreateVerificationRequest(array(
            'processor' => "DUMMY_V1",
            "merchant" => "MUgWbPVvtKbzjKNNGKqdQYV7",
            'identity' => "ID2CGJmjqyYaQAu6qyuvGeWK"
        ));

        $identityVerification = $this->client->identities->createIdentityVerification("IDgWxBhfGYLLdkhxx2ddYf9K", $createVerificationRequest);
        $this->assertSame($identityVerification->getMerchant(), $createVerificationRequest->getMerchant());
        $this->assertSame($identityVerification->getMerchantIdentity(), $createVerificationRequest->getIdentity());

    }

    /**
     * Test case for get
     *
     * Fetch an Identity.
     *
     */
    public function testGetIdentity()
    {
        $identityId = "IDpYDM7J9n57q849o9E9yNrG";
        $identity = $this->client->identities->get($identityId);
        $this->assertSame("APgPDQrLD52TYvqazjHJJchM", $identity->getApplication());
        $this->assertSame(12000000, $identity->getEntity()->getAnnualCardVolume());
    }

    /**
     * Test case for list
     *
     * List Identities.
     *
     */
    public function testListIdentities()
    {
        $identitiesList = $this->client->identities->list(array());
        $this->assertTrue(count($identitiesList) >= 0);
        if (count($identitiesList) == 0)
        {
            $this->assertSame($identitiesList->hasMore(), false);
        }
        if ($identitiesList->hasMore())
        {
            $nextList = $identitiesList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }
    }

    /**
     * Test case for listAssocaiatedIdentities
     *
     * List Associated Identities.
     *
     */
    public function testListIdentityAssociatedIdentities()
    {
        $identityId = "IDpYDM7J9n57q849o9E9yNrG";
        $identitiesList = $this->client->identities->listAssociatedIdentities(array(
            'identity_id' => $identityId
        ));
        $this->assertTrue(count($identitiesList) >= 0);
        if (count($identitiesList) == 0)
        {
            $this->assertSame($identitiesList->hasMore(), false);
        }
        if ($identitiesList->hasMore())
        {
            $nextList = $identitiesList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }
    }

    /**
     * Test case for update
     *
     * Update an Identity.
     *
     */
    public function testUpdateIdentity()
    {
        $identityId = "IDpYDM7J9n57q849o9E9yNrG";
        $updateIdentityRequest = new Model\UpdateIdentityRequest(array(
            'tags' => array('test_tag' => "test_value")
        ));
        $updatedIdentity = $this->client->identities->update($identityId, $updateIdentityRequest);
        $this->assertSame($updatedIdentity->getTags()['test_tag'], "test_value");
    }
}
