<?php
/**
 * PayoutProfilesApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Finix
 * @author   Finix 
 * @link     https://finix.com
 */

namespace Finix\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Finix\ApiException;
use Finix\Configuration;
use Finix\HeaderSelector;
use Finix\ObjectSerializer;

/**
 * PayoutProfilesApi Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix 
 * @link     https://finix.com
 */
class PayoutProfilesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getByMerchantId
     *
     * Fetch Payout Profile by Merchant
     *
     * @param  string $merchant_id ID of the &#x60;Merchant&#x60;. (required)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Finix\Model\PayoutProfile|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable|\Finix\Model\Error422InvalidFieldList
     */
    public function getByMerchantId($merchant_id)
    {
        list($response) = $this->getByMerchantIdWithHttpInfo($merchant_id);
        return $response;
    }

    /**
     * Operation getByMerchantIdWithHttpInfo
     *
     * Fetch Payout Profile by Merchant
     *
     * @param  string $merchant_id ID of the &#x60;Merchant&#x60;. (required)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Finix\Model\PayoutProfile|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable|\Finix\Model\Error422InvalidFieldList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getByMerchantIdWithHttpInfo($merchant_id)
    {
        $request = $this->getByMerchantIdRequest($merchant_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Finix\Model\PayoutProfile' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\PayoutProfile' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\PayoutProfile', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Finix\Model\Error401Unauthorized' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Error401Unauthorized' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Error401Unauthorized', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Finix\Model\Error403ForbiddenList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Error403ForbiddenList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Error403ForbiddenList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Finix\Model\Error404NotFoundList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Error404NotFoundList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Error404NotFoundList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\Finix\Model\Error406NotAcceptable' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Error406NotAcceptable' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Error406NotAcceptable', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\Finix\Model\Error422InvalidFieldList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Error422InvalidFieldList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Error422InvalidFieldList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Finix\Model\PayoutProfile';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\PayoutProfile',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Error401Unauthorized',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Error403ForbiddenList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Error404NotFoundList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Error406NotAcceptable',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Error422InvalidFieldList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getByMerchantIdAsync
     *
     * Fetch Payout Profile by Merchant
     *
     * @param  string $merchant_id ID of the &#x60;Merchant&#x60;. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getByMerchantIdAsync($merchant_id)
    {
        return $this->getByMerchantIdAsyncWithHttpInfo($merchant_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getByMerchantIdAsyncWithHttpInfo
     *
     * Fetch Payout Profile by Merchant
     *
     * @param  string $merchant_id ID of the &#x60;Merchant&#x60;. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getByMerchantIdAsyncWithHttpInfo($merchant_id)
    {
        $returnType = '\Finix\Model\PayoutProfile';
        $request = $this->getByMerchantIdRequest($merchant_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getByMerchantId'
     *
     * @param  string $merchant_id ID of the &#x60;Merchant&#x60;. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getByMerchantIdRequest($merchant_id)
    {
        // verify the required parameter 'merchant_id' is set
        if ($merchant_id === null || (is_array($merchant_id) && count($merchant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $merchant_id when calling fetchPayoutProfilesbyMerchant'
            );
        }

        $resourcePath = '/merchants/{merchant_id}/payout_profile';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($merchant_id !== null) {
            $resourcePath = str_replace(
                '{' . 'merchant_id' . '}',
                ObjectSerializer::toPathValue($merchant_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/hal+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/hal+json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $headers['Finix-Version'] = '2022-02-01';
        
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation get
     *
     * Fetch a Payout Profile
     *
     * @param  string $payout_profile_id ID of the &#x60;Payout Profile&#x60;. (required)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Finix\Model\PayoutProfile|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable|\Finix\Model\Error422InvalidFieldList
     */
    public function get($payout_profile_id)
    {
        list($response) = $this->getWithHttpInfo($payout_profile_id);
        return $response;
    }

    /**
     * Operation getWithHttpInfo
     *
     * Fetch a Payout Profile
     *
     * @param  string $payout_profile_id ID of the &#x60;Payout Profile&#x60;. (required)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Finix\Model\PayoutProfile|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable|\Finix\Model\Error422InvalidFieldList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo($payout_profile_id)
    {
        $request = $this->getRequest($payout_profile_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Finix\Model\PayoutProfile' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\PayoutProfile' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\PayoutProfile', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Finix\Model\Error401Unauthorized' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Error401Unauthorized' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Error401Unauthorized', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Finix\Model\Error403ForbiddenList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Error403ForbiddenList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Error403ForbiddenList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Finix\Model\Error404NotFoundList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Error404NotFoundList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Error404NotFoundList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\Finix\Model\Error406NotAcceptable' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Error406NotAcceptable' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Error406NotAcceptable', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\Finix\Model\Error422InvalidFieldList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Error422InvalidFieldList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Error422InvalidFieldList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Finix\Model\PayoutProfile';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\PayoutProfile',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Error401Unauthorized',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Error403ForbiddenList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Error404NotFoundList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Error406NotAcceptable',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Error422InvalidFieldList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAsync
     *
     * Fetch a Payout Profile
     *
     * @param  string $payout_profile_id ID of the &#x60;Payout Profile&#x60;. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync($payout_profile_id)
    {
        return $this->getAsyncWithHttpInfo($payout_profile_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAsyncWithHttpInfo
     *
     * Fetch a Payout Profile
     *
     * @param  string $payout_profile_id ID of the &#x60;Payout Profile&#x60;. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsyncWithHttpInfo($payout_profile_id)
    {
        $returnType = '\Finix\Model\PayoutProfile';
        $request = $this->getRequest($payout_profile_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'get'
     *
     * @param  string $payout_profile_id ID of the &#x60;Payout Profile&#x60;. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getRequest($payout_profile_id)
    {
        // verify the required parameter 'payout_profile_id' is set
        if ($payout_profile_id === null || (is_array($payout_profile_id) && count($payout_profile_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payout_profile_id when calling getPayoutprofile'
            );
        }

        $resourcePath = '/payout_profiles/{payout_profile_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($payout_profile_id !== null) {
            $resourcePath = str_replace(
                '{' . 'payout_profile_id' . '}',
                ObjectSerializer::toPathValue($payout_profile_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/hal+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/hal+json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $headers['Finix-Version'] = '2022-02-01';
        
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation list
     *
     * List Payout Profiles
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Finix\Model\PayoutProfilesList|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error422InvalidFieldList
     */
    public function list($associative_array)
    {
        list($response) = $this->listWithHttpInfo($associative_array);
        $hasNextCursor = ($response->openAPITypes()['page'] == '\Finix\Model\PageCursor');
        $queryParams = $this->getQueryParam($response->getPage(), $associative_array, $hasNextCursor);
        $reachedEnd = $this->reachedEnd($response->getPage(), $hasNextCursor);
        $listNextFunc = function($limit = null) use($queryParams, $reachedEnd){
            $queryParams['limit'] = $limit;
            if ($reachedEnd)
            {
                throw new ApiException;
            }
            return $this->list($queryParams);
        };
        if($response->getEmbedded()){
            $key = key($response->getEmbedded()->getters());
            $getter = $response->getEmbedded()->getters()[$key];
            $listEmbedded = $response->getEmbedded()->$getter();
            if(count($listEmbedded) < $response->getPage()->getLimit()){
                $reachedEnd = true;
            }
            $currList = new \Finix\Model\FinixList($listEmbedded, $listNextFunc, !$reachedEnd);
        }
        else{
            $currList = new \Finix\Model\FinixList(array(), $listNextFunc, false);
        }
        $currList = $currList->setPage($response->getPage());
        $currList = $currList->setLinks($response->getLinks());
        return $currList;
    }

    /**
     * Operation listWithHttpInfo
     *
     * List Payout Profiles
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Finix\Model\PayoutProfilesList|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error422InvalidFieldList, HTTP status code, HTTP response headers (array of strings)
     */
    public function listWithHttpInfo($associative_array)
    {
        $request = $this->listRequest($associative_array);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Finix\Model\PayoutProfilesList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\PayoutProfilesList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\PayoutProfilesList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Finix\Model\Error401Unauthorized' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Error401Unauthorized' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Error401Unauthorized', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Finix\Model\Error403ForbiddenList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Error403ForbiddenList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Error403ForbiddenList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Finix\Model\Error404NotFoundList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Error404NotFoundList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Error404NotFoundList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\Finix\Model\Error422InvalidFieldList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Error422InvalidFieldList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Error422InvalidFieldList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Finix\Model\PayoutProfilesList';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\PayoutProfilesList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Error401Unauthorized',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Error403ForbiddenList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Error404NotFoundList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Error422InvalidFieldList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listAsync
     *
     * List Payout Profiles
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listAsync($associative_array)
    {
        return $this->listAsyncWithHttpInfo($associative_array)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listAsyncWithHttpInfo
     *
     * List Payout Profiles
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listAsyncWithHttpInfo($associative_array)
    {
        $returnType = '\Finix\Model\PayoutProfilesList';
        $request = $this->listRequest($associative_array);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'list'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listRequest($associative_array)
    {
        // unbox the parameters from the associative array
        $after_cursor = array_key_exists('after_cursor', $associative_array) ? $associative_array['after_cursor'] : null;
        $limit = array_key_exists('limit', $associative_array) ? $associative_array['limit'] : null;


        $resourcePath = '/payout_profiles';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $after_cursor,
            'after_cursor', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/hal+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/hal+json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $headers['Finix-Version'] = '2022-02-01';
        
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation update
     *
     * Update a Payout Profile
     *
     * @param  string $payout_profile_id ID of the &#x60;Payout Profile&#x60;. (required)
     * @param  \Finix\Model\UpdatePayoutProfileRequest $update_payout_profile_request update_payout_profile_request (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Finix\Model\PayoutProfile|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable|\Finix\Model\Error422InvalidFieldList
     */
    public function update($payout_profile_id, $update_payout_profile_request = null)
    {
        list($response) = $this->updateWithHttpInfo($payout_profile_id, $update_payout_profile_request);
        return $response;
    }

    /**
     * Operation updateWithHttpInfo
     *
     * Update a Payout Profile
     *
     * @param  string $payout_profile_id ID of the &#x60;Payout Profile&#x60;. (required)
     * @param  \Finix\Model\UpdatePayoutProfileRequest $update_payout_profile_request (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Finix\Model\PayoutProfile|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable|\Finix\Model\Error422InvalidFieldList, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateWithHttpInfo($payout_profile_id, $update_payout_profile_request = null)
    {
        $request = $this->updateRequest($payout_profile_id, $update_payout_profile_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Finix\Model\PayoutProfile' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\PayoutProfile' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\PayoutProfile', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Finix\Model\Error401Unauthorized' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Error401Unauthorized' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Error401Unauthorized', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Finix\Model\Error403ForbiddenList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Error403ForbiddenList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Error403ForbiddenList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Finix\Model\Error404NotFoundList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Error404NotFoundList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Error404NotFoundList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\Finix\Model\Error406NotAcceptable' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Error406NotAcceptable' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Error406NotAcceptable', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\Finix\Model\Error422InvalidFieldList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Error422InvalidFieldList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Error422InvalidFieldList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Finix\Model\PayoutProfile';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\PayoutProfile',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Error401Unauthorized',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Error403ForbiddenList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Error404NotFoundList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Error406NotAcceptable',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Error422InvalidFieldList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateAsync
     *
     * Update a Payout Profile
     *
     * @param  string $payout_profile_id ID of the &#x60;Payout Profile&#x60;. (required)
     * @param  \Finix\Model\UpdatePayoutProfileRequest $update_payout_profile_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync($payout_profile_id, $update_payout_profile_request = null)
    {
        return $this->updateAsyncWithHttpInfo($payout_profile_id, $update_payout_profile_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateAsyncWithHttpInfo
     *
     * Update a Payout Profile
     *
     * @param  string $payout_profile_id ID of the &#x60;Payout Profile&#x60;. (required)
     * @param  \Finix\Model\UpdatePayoutProfileRequest $update_payout_profile_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsyncWithHttpInfo($payout_profile_id, $update_payout_profile_request = null)
    {
        $returnType = '\Finix\Model\PayoutProfile';
        $request = $this->updateRequest($payout_profile_id, $update_payout_profile_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'update'
     *
     * @param  string $payout_profile_id ID of the &#x60;Payout Profile&#x60;. (required)
     * @param  \Finix\Model\UpdatePayoutProfileRequest $update_payout_profile_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateRequest($payout_profile_id, $update_payout_profile_request = null)
    {
        // verify the required parameter 'payout_profile_id' is set
        if ($payout_profile_id === null || (is_array($payout_profile_id) && count($payout_profile_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payout_profile_id when calling updatePayoutProfileRequest'
            );
        }

        $resourcePath = '/payout_profiles/{payout_profile_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($payout_profile_id !== null) {
            $resourcePath = str_replace(
                '{' . 'payout_profile_id' . '}',
                ObjectSerializer::toPathValue($payout_profile_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/hal+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/hal+json'],
                ['application/hal+json']
            );
        }

        // for model (json/xml)
        if (isset($update_payout_profile_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($update_payout_profile_request));
            } 
            elseif($headers['Content-Type'] === 'multipart/form-data'){
                $multiStreamArr = [];
                $i = 0;
                foreach (array_keys($update_payout_profile_request->getters()) as $get){
                    $getterName = $update_payout_profile_request->getters()[$get];
                    $multiStreamArr[$i] =  ['name' => $get, 
                    'contents' =>$update_payout_profile_request->$getterName()];
                    $i = $i + 1;
                }
                $httpBody = new MultipartStream($multiStreamArr, 'boundary');
                
                $headers = $this->headerSelector->selectHeadersForMultipart(
                    ['application/hal+json']
                );
            }
            else {
                $httpBody = $update_payout_profile_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $headers['Finix-Version'] = '2022-02-01';
        
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    protected function getQueryParam($pageObject, $queryParams, $hasNextCursor)
    {
        if($hasNextCursor)
        {
            $queryParams['after_cursor'] = $pageObject->getNextCursor();
            return $queryParams;
        }
        else
        {
            $queryParams['offset'] = $pageObject->getOffset() + $pageObject->getLimit();
            return $queryParams;
        }
    }

    protected function reachedEnd($pageObject, $hasNextCursor)
    {
        if($hasNextCursor)
        {
            $nextCursor = $pageObject->getNextCursor();
            if ($nextCursor == null){
                return true;
            }
            return false;
        }
        else
        {
            $offset = $pageObject->getOffset();
            $limit = $pageObject->getLimit();
            $count = $pageObject->getCount();
            if ($offset + $limit > $count){
                return true;
            }
            return false;
        }
    }
}
