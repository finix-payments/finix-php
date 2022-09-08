<?php
/**
 * Configuration
 * PHP version 7.4
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */

namespace Finix;

use Finix\Api\AuthorizationsApi;
use Finix\Api\BalanceTransfersApi;
use Finix\Api\ComplianceFormsApi;
use Finix\Api\DevicesApi;
use Finix\Api\DisputesApi;
use Finix\Api\FeeProfilesApi;
use Finix\Api\FilesApi;
use Finix\Api\IdentitiesApi;
use Finix\Api\InstrumentUpdatesApi;
use Finix\Api\MerchantProfilesApi;
use Finix\Api\MerchantsApi;
use Finix\Api\OnboardingFormsApi;
use Finix\Api\PaymentInstrumentsApi;
use Finix\Api\SettlementsApi;
use Finix\Api\TransfersApi;
use Finix\Api\VerificationsApi;
use Finix\Api\WebhooksApi;
use GuzzleHttp\ClientInterface;


/**
 * Configuration Class Doc Comment
 * PHP version 7.4
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class Configuration
{
    public const BOOLEAN_FORMAT_INT = 'int';
    public const BOOLEAN_FORMAT_STRING = 'string';

    /**
     * @var Configuration
     */
    private static $defaultConfiguration;

    /**
     * Associate array to store API key(s)
     *
     * @var string[]
     */
    protected $apiKeys = [];

    /**
     * Associate array to store API prefix (e.g. Bearer)
     *
     * @var string[]
     */
    protected $apiKeyPrefixes = [];

    /**
     * Access token for OAuth/Bearer authentication
     *
     * @var string
     */
    protected $accessToken = '';

    /**
     * Boolean format for query string
     *
     * @var string
     */
    protected $booleanFormatForQueryString = self::BOOLEAN_FORMAT_INT;

    /**
     * Username for HTTP basic authentication
     *
     * @var string
     */
    protected $username = '';

    /**
     * Password for HTTP basic authentication
     *
     * @var string
     */
    protected $password = '';

    /**
     * The host
     *
     * @var string
     */
    protected $host = 'https://finix.sandbox-payments-api.com';

    /**
     * User agent of the HTTP request, set to "OpenAPI-Generator/{version}/PHP" by default
     *
     * @var string
     */
    protected $userAgent = 'OpenAPI-Generator/1.0.0/PHP';

    /**
     * Debug switch (default set to false)
     *
     * @var bool
     */
    protected $debug = false;

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $debugFile = 'php://output';

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $tempFolderPath;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();
    }

    /**
     * Sets API key
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $key              API key or token
     *
     * @return $this
     */
    public function setApiKey($apiKeyIdentifier, $key)
    {
        $this->apiKeys[$apiKeyIdentifier] = $key;
        return $this;
    }

    /**
     * Gets API key
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return null|string API key or token
     */
    public function getApiKey($apiKeyIdentifier)
    {
        return isset($this->apiKeys[$apiKeyIdentifier]) ? $this->apiKeys[$apiKeyIdentifier] : null;
    }

    /**
     * Sets the prefix for API key (e.g. Bearer)
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $prefix           API key prefix, e.g. Bearer
     *
     * @return $this
     */
    public function setApiKeyPrefix($apiKeyIdentifier, $prefix)
    {
        $this->apiKeyPrefixes[$apiKeyIdentifier] = $prefix;
        return $this;
    }

    /**
     * Gets API key prefix
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return null|string
     */
    public function getApiKeyPrefix($apiKeyIdentifier)
    {
        return isset($this->apiKeyPrefixes[$apiKeyIdentifier]) ? $this->apiKeyPrefixes[$apiKeyIdentifier] : null;
    }

    /**
     * Sets the access token for OAuth
     *
     * @param string $accessToken Token for OAuth
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Sets boolean format for query string.
     *
     * @param string $booleanFormatForQueryString Boolean format for query string
     *
     * @return $this
     */
    public function setBooleanFormatForQueryString(string $booleanFormat)
    {
        $this->booleanFormatForQueryString = $booleanFormat;

        return $this;
    }

    /**
     * Gets boolean format for query string.
     *
     * @return string Boolean format for query string
     */
    public function getBooleanFormatForQueryString(): string
    {
        return $this->booleanFormatForQueryString;
    }

    /**
     * Sets the username for HTTP basic authentication
     *
     * @param string $username Username for HTTP basic authentication
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Gets the username for HTTP basic authentication
     *
     * @return string Username for HTTP basic authentication
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the password for HTTP basic authentication
     *
     * @param string $password Password for HTTP basic authentication
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets the password for HTTP basic authentication
     *
     * @return string Password for HTTP basic authentication
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the host
     *
     * @param string $host Host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Gets the host
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Sets the user agent of the api client
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        if (!is_string($userAgent)) {
            throw new \InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Sets debug flag
     *
     * @param bool $debug Debug flag
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Sets the debug file
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;
        return $this;
    }

    /**
     * Gets the debug file
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }

    /**
     * Sets the temp folder path
     *
     * @param string $tempFolderPath Temp folder path
     *
     * @return $this
     */
    public function setTempFolderPath($tempFolderPath)
    {
        $this->tempFolderPath = $tempFolderPath;
        return $this;
    }

    /**
     * Gets the temp folder path
     *
     * @return string Temp folder path
     */
    public function getTempFolderPath()
    {
        return $this->tempFolderPath;
    }

    /**
     * Gets the default configuration instance
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration()
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new Configuration();
        }

        return self::$defaultConfiguration;
    }

    /**
     * Sets the default configuration instance
     *
     * @param Configuration $config An instance of the Configuration Object
     *
     * @return void
     */
    public static function setDefaultConfiguration(Configuration $config)
    {
        self::$defaultConfiguration = $config;
    }

    /**
     * Gets the essential information for debugging
     *
     * @return string The report for debugging
     */
    public static function toDebugReport()
    {
        $report  = 'PHP SDK (Finix) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    The version of the OpenAPI document: 2022-02-01' . PHP_EOL;
        $report .= '    Temp Folder Path: ' . self::getDefaultConfiguration()->getTempFolderPath() . PHP_EOL;

        return $report;
    }

    /**
     * Get API key (with prefix if set)
     *
     * @param  string $apiKeyIdentifier name of apikey
     *
     * @return null|string API key with the prefix
     */
    public function getApiKeyWithPrefix($apiKeyIdentifier)
    {
        $prefix = $this->getApiKeyPrefix($apiKeyIdentifier);
        $apiKey = $this->getApiKey($apiKeyIdentifier);

        if ($apiKey === null) {
            return null;
        }

        if ($prefix === null) {
            $keyWithPrefix = $apiKey;
        } else {
            $keyWithPrefix = $prefix . ' ' . $apiKey;
        }

        return $keyWithPrefix;
    }

    /**
     * Returns an array of host settings
     *
     * @return array an array of host settings
     */
    public function getHostSettings()
    {
        return [
            [
                "url" => "https://finix.sandbox-payments-api.com",
                "description" => "Sandbox server to be used for testing and development",
            ]
        ];
    }

    /**
     * Returns URL based on the index and variables
     *
     * @param int        $index     index of the host settings
     * @param array|null $variables hash of variable and the corresponding value (optional)
     * @return string URL based on host settings
     */
    public function getHostFromSettings($index, $variables = null)
    {
        if (null === $variables) {
            $variables = [];
        }

        $hosts = $this->getHostSettings();

        // check array index out of bound
        if ($index < 0 || $index >= sizeof($hosts)) {
            throw new \InvalidArgumentException("Invalid index $index when selecting the host. Must be less than ".sizeof($hosts));
        }

        $host = $hosts[$index];
        $url = $host["url"];

        // go through variable and assign a value
        foreach ($host["variables"] ?? [] as $name => $variable) {
            if (array_key_exists($name, $variables)) { // check to see if it's in the variables provided by the user
                if (in_array($variables[$name], $variable["enum_values"], true)) { // check to see if the value is in the enum
                    $url = str_replace("{".$name."}", $variables[$name], $url);
                } else {
                    throw new \InvalidArgumentException("The variable `$name` in the host URL has invalid value ".$variables[$name].". Must be ".join(',', $variable["enum_values"]).".");
                }
            } else {
                // use default value
                $url = str_replace("{".$name."}", $variable["default_value"], $url);
            }
        }

        return $url;
    }
}

class FinixClient
{
    /**
     * @var AuthorizationsApi AuthorizationsApi
     */
    public readonly AuthorizationsApi $authorizations;

    /**
     * @var BalanceTransfersApi BalanceTransfersApi
     */
    public readonly BalanceTransfersApi $balanceTransfers;

    /**
     * @var ComplianceFormsApi ComplianceFormsApi
     */
    public readonly ComplianceFormsApi $complianceForms;

    /**
     * @var DevicesApi DevicesApi
     */
    public readonly DevicesApi $devices;

    /**
     * @var DisputesApi DisputesApi
     */
    public readonly DisputesApi $disputes;

    /**
     * @var FeeProfilesApi FeeProfilesApi
     */
    public readonly FeeProfilesApi $feeProfiles;

    /**
     * @var FilesApi FilesApi
     */
    public readonly FilesApi $files;

    /**
     * @var IdentitiesApi IdentitiesApi
     */
    public readonly IdentitiesApi $identities;

    /**
     * @var InstrumentUpdatesApi InstrumentUpdatesApi
     */
    public readonly InstrumentUpdatesApi $instrumentUpdates;

    /**
     * @var MerchantProfilesApi MerchantProfilesApi
     */
    public readonly MerchantProfilesApi $merchantProfiles;

    /**
     * @var MerchantsApi MerchantsApi
     */
    public readonly MerchantsApi $merchants;

    /**
     * @var OnboardingFormsApi OnboardingFormsApi
     */
    public readonly OnboardingFormsApi $onboardingForms;

    /**
     * @var PaymentInstrumentsApi PaymentInstrumentsApi
     */
    public readonly PaymentInstrumentsApi $paymentInstruments;

    /**
     * @var SettlementsApi SettlementsApi
     */
    public readonly SettlementsApi $settlements;

    /**
     * @var TransfersApi TransfersApi
     */
    public readonly TransfersApi $transfers;

    /**
     * @var VerificationsApi VerificationsApi
     */
    public readonly VerificationsApi $verifications;

    /**
     * @var WebhooksApi WebhooksApi
     */
    public readonly WebhooksApi $webhooks;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        String $username, 
        String $password,
        String $environment = null,
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        if ($config == null) 
        {
            $new_config = new Configuration();
            $new_config = $new_config->setUsername($username);
            $new_config = $new_config->setPassword($password);
            if ($environment) {
                $new_config = $new_config->setHost($environment);
            }
            $this->config = $new_config;
            $config = $new_config;
        }

        $this->authorizations = new AuthorizationsApi($client, $config, $selector, $hostIndex);
        $this->balanceTransfers = new BalanceTransfersApi($client, $config, $selector, $hostIndex);
        $this->complianceForms = new ComplianceFormsApi($client, $config, $selector, $hostIndex);
        $this->devices = new DevicesApi($client, $config, $selector, $hostIndex);
        $this->disputes = new DisputesApi($client, $config, $selector, $hostIndex);
        $this->feeProfiles = new FeeProfilesApi($client, $config, $selector, $hostIndex);
        $this->files = new FilesApi($client, $config, $selector, $hostIndex);
        $this->identities = new IdentitiesApi($client, $config, $selector, $hostIndex);
        $this->instrumentUpdates = new InstrumentUpdatesApi($client, $config, $selector, $hostIndex);
        $this->merchantProfiles = new MerchantProfilesApi($client, $config, $selector, $hostIndex);
        $this->merchants = new MerchantsApi($client, $config, $selector, $hostIndex);
        $this->onboardingForms = new OnboardingFormsApi($client, $config, $selector, $hostIndex);
        $this->paymentInstruments = new PaymentInstrumentsApi($client, $config, $selector, $hostIndex);
        $this->settlements = new SettlementsApi($client, $config, $selector, $hostIndex);
        $this->transfers = new TransfersApi($client, $config, $selector, $hostIndex);
        $this->verifications = new VerificationsApi($client, $config, $selector, $hostIndex);
        $this->webhooks = new WebhooksApi($client, $config, $selector, $hostIndex);
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function getEnvironment()
    {
        return $this->config->getHost();
    }

    public function getUsername()
    {
        return $this->config->getUsername();
    }
}