<?php
/**
 * FilesApiTest
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
 * FilesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class FilesApiTest extends TestCase
{

    public $client;
    public static $fileId;
    public static $externalId;
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
     * Test case for createExternalLink
     *
     * Create an External Link.
     * @depends testCreateFiles
     *
     */
    public function testCreateExternalLink()
    {
        $createExternalLinkRequest = new Model\CreateExternalLinkRequest(array(
            'type' => Model\CreateExternalLinkRequest::TYPE_UPLOAD,
            'duration' => 15
        ));
        $externalLink = $this->client->files->createExternalLink(self::$fileId, $createExternalLinkRequest);
        self::$externalId = $externalLink->getId();
        $this->assertSame("USsRhsHYZGBPnQw8CByJyEQW", $externalLink->getUserId());
        $this->assertSame($createExternalLinkRequest->getType(), $externalLink->getType());

    }

    /**
     * Test case for create
     *
     * Create a File.
     *
     */
    public function testCreateFiles()
    {
        $fileRequest = new Model\CreateFileRequest(array(
            'display_name' => "My Drivers License",
            'linked_to' => "MU2n7BSovtwYsWYZF6rBnnzk",
            'type' => Model\CreateFileRequest::TYPE_DRIVERS_LICENSE_FRONT,
            'tags' => array('key_1' => "value_1")
        ));

        $createdFile = $this->client->files->create($fileRequest);
        $this->assertSame($createdFile->getLinkedTo(), $fileRequest->getLinkedTo());
        $this->assertSame($createdFile->getType(), $fileRequest->getType());
        self::$fileId = $createdFile->getId();
    }

    /**
     * Test case for downloadFile
     *
     * Download a file.
     * @depends testCreateFiles
     *
     */
    public function testDownloadFile()
    {
        $downloadedFile = $this->client->files->download("FILE_bJecqoRPasStEPVpvKHtgA");
        $this->assertTrue($downloadedFile->getSize() > 0);
        
    }

    /**
     * Test case for getExternalLink
     *
     * Fetch an External LInk.
     * @depends testCreateFiles
     * @depends testCreateExternalLink
     *
     */
    public function testGetExternalLink()
    {
        $externalLink = $this->client->files->getExternalLink(self::$fileId, self::$externalId);
        $this->assertSame("USsRhsHYZGBPnQw8CByJyEQW", $externalLink->getUserId());
        $this->assertSame(self::$fileId, $externalLink->getFileId());
    }

    /**
     * Test case for get
     *
     * Fetch a File.
     * @depends testCreateFiles
     */
    public function testGetFile()
    {
        $file = $this->client->files->get(self::$fileId);
        $this->assertSame(self::$fileId, $file->getId());
        $this->assertSame("MU2n7BSovtwYsWYZF6rBnnzk", $file->getLinkedTo());
    }

    /**
     * Test case for listExternalLinks
     *
     * List All External Links.
     * @depends testCreateFiles
     *
     */
    public function testListExternalLinks()
    {
        $fileList = $this->client->files->list(array(
            'file_id' => self::$fileId
        ));
        $this->assertTrue(count($fileList) >= 0);
        if (count($fileList) == 0)
        {
            $this->assertSame($fileList->hasMore(), false);
        }
        if ($fileList->hasMore())
        {
            $nextList = $fileList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }
    }

    /**
     * Test case for list
     *
     * List All Files.
     * @depends testCreateFiles
     *
     */
    public function testListFiles()
    {
        $externalLinkList = $this->client->files->listExternalLinks(array(
            'file_id' => self::$fileId
        ));
        $this->assertTrue(count($externalLinkList) >= 0);
        if (count($externalLinkList) == 0)
        {
            $this->assertSame($externalLinkList->hasMore(), false);
        }
        if ($externalLinkList->hasMore())
        {
            $nextList = $externalLinkList->listNext(1);
            $this->assertSame(count($nextList), 1);
        }
    }

    /**
     * Test case for uploadFile
     *
     * Upload files Directly.
     * @depends testCreateFiles
     * 
     */
    public function testUploadFile()
    {
        $file =  fopen('test.png', 'r');
        $testUpload = $this->client->files->upload(self::$fileId
        , new Model\UploadFileRequest(array('file'=>$file)));
        $this->assertSame($testUpload->getId(), self::$fileId);
    }
}
