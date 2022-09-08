<?php
/**
 * SettlementsApi
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
 * SettlementsApi Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix 
 * @link     https://finix.com
 */
class SettlementsApi
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
     * Operation create
     *
     * Close Current Active Settlement
     *
     * @param  string $identity_id ID of the &#x60;Identity&#x60; for the merchant you want to settle. (required)
     * @param  \Finix\Model\CreateSettlementRequest $create_settlement_request create_settlement_request (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Finix\Model\Settlement|\Finix\Model\ErrorGeneric|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable|\Finix\Model\ErrorGeneric
     */
    public function create($identity_id, $create_settlement_request = null)
    {
        list($response) = $this->createWithHttpInfo($identity_id, $create_settlement_request);
        return $response;
    }

    /**
     * Operation createWithHttpInfo
     *
     * Close Current Active Settlement
     *
     * @param  string $identity_id ID of the &#x60;Identity&#x60; for the merchant you want to settle. (required)
     * @param  \Finix\Model\CreateSettlementRequest $create_settlement_request (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Finix\Model\Settlement|\Finix\Model\ErrorGeneric|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable|\Finix\Model\ErrorGeneric, HTTP status code, HTTP response headers (array of strings)
     */
    public function createWithHttpInfo($identity_id, $create_settlement_request = null)
    {
        $request = $this->createRequest($identity_id, $create_settlement_request);

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
                case 201:
                    if ('\Finix\Model\Settlement' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Settlement' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Settlement', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Finix\Model\ErrorGeneric' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\ErrorGeneric' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\ErrorGeneric', []),
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
                    if ('\Finix\Model\ErrorGeneric' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\ErrorGeneric' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\ErrorGeneric', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Finix\Model\Settlement';
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Settlement',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\ErrorGeneric',
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
                        '\Finix\Model\ErrorGeneric',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createAsync
     *
     * Close Current Active Settlement
     *
     * @param  string $identity_id ID of the &#x60;Identity&#x60; for the merchant you want to settle. (required)
     * @param  \Finix\Model\CreateSettlementRequest $create_settlement_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAsync($identity_id, $create_settlement_request = null)
    {
        return $this->createAsyncWithHttpInfo($identity_id, $create_settlement_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createAsyncWithHttpInfo
     *
     * Close Current Active Settlement
     *
     * @param  string $identity_id ID of the &#x60;Identity&#x60; for the merchant you want to settle. (required)
     * @param  \Finix\Model\CreateSettlementRequest $create_settlement_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAsyncWithHttpInfo($identity_id, $create_settlement_request = null)
    {
        $returnType = '\Finix\Model\Settlement';
        $request = $this->createRequest($identity_id, $create_settlement_request);

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
     * Create request for operation 'create'
     *
     * @param  string $identity_id ID of the &#x60;Identity&#x60; for the merchant you want to settle. (required)
     * @param  \Finix\Model\CreateSettlementRequest $create_settlement_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRequest($identity_id, $create_settlement_request = null)
    {
        // verify the required parameter 'identity_id' is set
        if ($identity_id === null || (is_array($identity_id) && count($identity_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $identity_id when calling createIdentitySettlement'
            );
        }

        $resourcePath = '/identities/{identity_id}/settlements';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($identity_id !== null) {
            $resourcePath = str_replace(
                '{' . 'identity_id' . '}',
                ObjectSerializer::toPathValue($identity_id),
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
        if (isset($create_settlement_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($create_settlement_request));
            } 
            elseif($headers['Content-Type'] === 'multipart/form-data'){
                $multiStreamArr = [];
                $i = 0;
                foreach (array_keys($create_settlement_request->getters()) as $get){
                    $getterName = $create_settlement_request->getters()[$get];
                    $multiStreamArr[$i] =  ['name' => $get, 
                    'contents' =>$create_settlement_request->$getterName()];
                    $i = $i + 1;
                }
                $httpBody = new MultipartStream($multiStreamArr, 'boundary');
                
                $headers = $this->headerSelector->selectHeadersForMultipart(
                    ['application/hal+json']
                );
            }
            else {
                $httpBody = $create_settlement_request;
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation get
     *
     * Fetch a Settlement
     *
     * @param  string $settlement_id ID of &#x60;Settlement&#x60; object. (required)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Finix\Model\Settlement|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable
     */
    public function get($settlement_id)
    {
        list($response) = $this->getWithHttpInfo($settlement_id);
        return $response;
    }

    /**
     * Operation getWithHttpInfo
     *
     * Fetch a Settlement
     *
     * @param  string $settlement_id ID of &#x60;Settlement&#x60; object. (required)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Finix\Model\Settlement|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo($settlement_id)
    {
        $request = $this->getRequest($settlement_id);

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
                    if ('\Finix\Model\Settlement' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Settlement' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Settlement', []),
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
            }

            $returnType = '\Finix\Model\Settlement';
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
                        '\Finix\Model\Settlement',
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
            }
            throw $e;
        }
    }

    /**
     * Operation getAsync
     *
     * Fetch a Settlement
     *
     * @param  string $settlement_id ID of &#x60;Settlement&#x60; object. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync($settlement_id)
    {
        return $this->getAsyncWithHttpInfo($settlement_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAsyncWithHttpInfo
     *
     * Fetch a Settlement
     *
     * @param  string $settlement_id ID of &#x60;Settlement&#x60; object. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsyncWithHttpInfo($settlement_id)
    {
        $returnType = '\Finix\Model\Settlement';
        $request = $this->getRequest($settlement_id);

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
     * @param  string $settlement_id ID of &#x60;Settlement&#x60; object. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getRequest($settlement_id)
    {
        // verify the required parameter 'settlement_id' is set
        if ($settlement_id === null || (is_array($settlement_id) && count($settlement_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $settlement_id when calling getSettlement'
            );
        }

        $resourcePath = '/settlements/{settlement_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($settlement_id !== null) {
            $resourcePath = str_replace(
                '{' . 'settlement_id' . '}',
                ObjectSerializer::toPathValue($settlement_id),
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
     * Operation listFundingTransfers
     *
     * List Settlement Funding Transfers
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $settlement_id ID of &#x60;Settlement&#x60; object. (required)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Finix\Model\TransfersList|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable
     */
    public function listFundingTransfers($associative_array)
    {
        list($response) = $this->listFundingTransfersWithHttpInfo($associative_array);
        $hasNextCursor = ($response->openAPITypes()['page'] == '\Finix\Model\PageCursor');
        $queryParams = $this->getQueryParam($response->getPage(), $associative_array, $hasNextCursor);
        $reachedEnd = $this->reachedEnd($response->getPage(), $hasNextCursor);
        $listNextFunc = function($limit = null) use($queryParams, $reachedEnd){
            $queryParams['limit'] = $limit;
            if ($reachedEnd)
            {
                throw new ApiException;
            }
            return $this->listFundingTransfers($queryParams);
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
     * Operation listFundingTransfersWithHttpInfo
     *
     * List Settlement Funding Transfers
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $settlement_id ID of &#x60;Settlement&#x60; object. (required)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Finix\Model\TransfersList|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable, HTTP status code, HTTP response headers (array of strings)
     */
    public function listFundingTransfersWithHttpInfo($associative_array)
    {
        $request = $this->listFundingTransfersRequest($associative_array);

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
                    if ('\Finix\Model\TransfersList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\TransfersList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\TransfersList', []),
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
            }

            $returnType = '\Finix\Model\TransfersList';
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
                        '\Finix\Model\TransfersList',
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
            }
            throw $e;
        }
    }

    /**
     * Operation listFundingTransfersAsync
     *
     * List Settlement Funding Transfers
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $settlement_id ID of &#x60;Settlement&#x60; object. (required)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listFundingTransfersAsync($associative_array)
    {
        return $this->listFundingTransfersAsyncWithHttpInfo($associative_array)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listFundingTransfersAsyncWithHttpInfo
     *
     * List Settlement Funding Transfers
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $settlement_id ID of &#x60;Settlement&#x60; object. (required)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listFundingTransfersAsyncWithHttpInfo($associative_array)
    {
        $returnType = '\Finix\Model\TransfersList';
        $request = $this->listFundingTransfersRequest($associative_array);

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
     * Create request for operation 'listFundingTransfers'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $settlement_id ID of &#x60;Settlement&#x60; object. (required)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listFundingTransfersRequest($associative_array)
    {
        // unbox the parameters from the associative array
        $settlement_id = array_key_exists('settlement_id', $associative_array) ? $associative_array['settlement_id'] : null;
        $limit = array_key_exists('limit', $associative_array) ? $associative_array['limit'] : null;
        $after_cursor = array_key_exists('after_cursor', $associative_array) ? $associative_array['after_cursor'] : null;
        $before_cursor = array_key_exists('before_cursor', $associative_array) ? $associative_array['before_cursor'] : null;

        // verify the required parameter 'settlement_id' is set
        if ($settlement_id === null || (is_array($settlement_id) && count($settlement_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $settlement_id when calling listSettlementFundingTransfers'
            );
        }

        $resourcePath = '/settlements/{settlement_id}/funding_transfers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
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
            $before_cursor,
            'before_cursor', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($settlement_id !== null) {
            $resourcePath = str_replace(
                '{' . 'settlement_id' . '}',
                ObjectSerializer::toPathValue($settlement_id),
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
     * Operation listTransfersBySettlementId
     *
     * List Settlement Transfers
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $settlement_id ID of &#x60;Settlement&#x60; object. (required)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Finix\Model\TransfersList|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable
     */
    public function listTransfersBySettlementId($associative_array)
    {
        list($response) = $this->listTransfersBySettlementIdWithHttpInfo($associative_array);
        $hasNextCursor = ($response->openAPITypes()['page'] == '\Finix\Model\PageCursor');
        $queryParams = $this->getQueryParam($response->getPage(), $associative_array, $hasNextCursor);
        $reachedEnd = $this->reachedEnd($response->getPage(), $hasNextCursor);
        $listNextFunc = function($limit = null) use($queryParams, $reachedEnd){
            $queryParams['limit'] = $limit;
            if ($reachedEnd)
            {
                throw new ApiException;
            }
            return $this->listTransfersBySettlementId($queryParams);
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
     * Operation listTransfersBySettlementIdWithHttpInfo
     *
     * List Settlement Transfers
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $settlement_id ID of &#x60;Settlement&#x60; object. (required)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Finix\Model\TransfersList|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable, HTTP status code, HTTP response headers (array of strings)
     */
    public function listTransfersBySettlementIdWithHttpInfo($associative_array)
    {
        $request = $this->listTransfersBySettlementIdRequest($associative_array);

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
                    if ('\Finix\Model\TransfersList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\TransfersList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\TransfersList', []),
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
            }

            $returnType = '\Finix\Model\TransfersList';
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
                        '\Finix\Model\TransfersList',
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
            }
            throw $e;
        }
    }

    /**
     * Operation listTransfersBySettlementIdAsync
     *
     * List Settlement Transfers
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $settlement_id ID of &#x60;Settlement&#x60; object. (required)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTransfersBySettlementIdAsync($associative_array)
    {
        return $this->listTransfersBySettlementIdAsyncWithHttpInfo($associative_array)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listTransfersBySettlementIdAsyncWithHttpInfo
     *
     * List Settlement Transfers
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $settlement_id ID of &#x60;Settlement&#x60; object. (required)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTransfersBySettlementIdAsyncWithHttpInfo($associative_array)
    {
        $returnType = '\Finix\Model\TransfersList';
        $request = $this->listTransfersBySettlementIdRequest($associative_array);

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
     * Create request for operation 'listTransfersBySettlementId'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $settlement_id ID of &#x60;Settlement&#x60; object. (required)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listTransfersBySettlementIdRequest($associative_array)
    {
        // unbox the parameters from the associative array
        $settlement_id = array_key_exists('settlement_id', $associative_array) ? $associative_array['settlement_id'] : null;
        $limit = array_key_exists('limit', $associative_array) ? $associative_array['limit'] : null;
        $after_cursor = array_key_exists('after_cursor', $associative_array) ? $associative_array['after_cursor'] : null;
        $before_cursor = array_key_exists('before_cursor', $associative_array) ? $associative_array['before_cursor'] : null;

        // verify the required parameter 'settlement_id' is set
        if ($settlement_id === null || (is_array($settlement_id) && count($settlement_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $settlement_id when calling listSettlementTransfers'
            );
        }

        $resourcePath = '/settlements/{settlement_id}/transfers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
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
            $before_cursor,
            'before_cursor', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($settlement_id !== null) {
            $resourcePath = str_replace(
                '{' . 'settlement_id' . '}',
                ObjectSerializer::toPathValue($settlement_id),
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
     * List All Settlements
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $created_at_gte Filter where &#x60;created_at&#x60; is after the given date. (optional)
     * @param  string $created_at_lte Filter where &#x60;created_at&#x60; is before the given date. (optional)
     * @param  string $updated_at_gte Filter where &#x60;updated_at&#x60; is after the given date. (optional)
     * @param  string $updated_at_lte Filter where &#x60;updated_at&#x60; is before the given date. (optional)
     * @param  string $id Filter by &#x60;id&#x60;. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Finix\Model\SettlementsList|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error406NotAcceptable
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
     * List All Settlements
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $created_at_gte Filter where &#x60;created_at&#x60; is after the given date. (optional)
     * @param  string $created_at_lte Filter where &#x60;created_at&#x60; is before the given date. (optional)
     * @param  string $updated_at_gte Filter where &#x60;updated_at&#x60; is after the given date. (optional)
     * @param  string $updated_at_lte Filter where &#x60;updated_at&#x60; is before the given date. (optional)
     * @param  string $id Filter by &#x60;id&#x60;. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Finix\Model\SettlementsList|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error406NotAcceptable, HTTP status code, HTTP response headers (array of strings)
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
                    if ('\Finix\Model\SettlementsList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\SettlementsList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\SettlementsList', []),
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
            }

            $returnType = '\Finix\Model\SettlementsList';
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
                        '\Finix\Model\SettlementsList',
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
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\Error406NotAcceptable',
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
     * List All Settlements
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $created_at_gte Filter where &#x60;created_at&#x60; is after the given date. (optional)
     * @param  string $created_at_lte Filter where &#x60;created_at&#x60; is before the given date. (optional)
     * @param  string $updated_at_gte Filter where &#x60;updated_at&#x60; is after the given date. (optional)
     * @param  string $updated_at_lte Filter where &#x60;updated_at&#x60; is before the given date. (optional)
     * @param  string $id Filter by &#x60;id&#x60;. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
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
     * List All Settlements
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $created_at_gte Filter where &#x60;created_at&#x60; is after the given date. (optional)
     * @param  string $created_at_lte Filter where &#x60;created_at&#x60; is before the given date. (optional)
     * @param  string $updated_at_gte Filter where &#x60;updated_at&#x60; is after the given date. (optional)
     * @param  string $updated_at_lte Filter where &#x60;updated_at&#x60; is before the given date. (optional)
     * @param  string $id Filter by &#x60;id&#x60;. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listAsyncWithHttpInfo($associative_array)
    {
        $returnType = '\Finix\Model\SettlementsList';
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
     * @param  string $created_at_gte Filter where &#x60;created_at&#x60; is after the given date. (optional)
     * @param  string $created_at_lte Filter where &#x60;created_at&#x60; is before the given date. (optional)
     * @param  string $updated_at_gte Filter where &#x60;updated_at&#x60; is after the given date. (optional)
     * @param  string $updated_at_lte Filter where &#x60;updated_at&#x60; is before the given date. (optional)
     * @param  string $id Filter by &#x60;id&#x60;. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listRequest($associative_array)
    {
        // unbox the parameters from the associative array
        $created_at_gte = array_key_exists('created_at_gte', $associative_array) ? $associative_array['created_at_gte'] : null;
        $created_at_lte = array_key_exists('created_at_lte', $associative_array) ? $associative_array['created_at_lte'] : null;
        $updated_at_gte = array_key_exists('updated_at_gte', $associative_array) ? $associative_array['updated_at_gte'] : null;
        $updated_at_lte = array_key_exists('updated_at_lte', $associative_array) ? $associative_array['updated_at_lte'] : null;
        $id = array_key_exists('id', $associative_array) ? $associative_array['id'] : null;
        $limit = array_key_exists('limit', $associative_array) ? $associative_array['limit'] : null;
        $after_cursor = array_key_exists('after_cursor', $associative_array) ? $associative_array['after_cursor'] : null;
        $before_cursor = array_key_exists('before_cursor', $associative_array) ? $associative_array['before_cursor'] : null;


        $resourcePath = '/settlements';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_at_gte,
            'created_at.gte', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_at_lte,
            'created_at.lte', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $updated_at_gte,
            'updated_at.gte', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $updated_at_lte,
            'updated_at.lte', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $id,
            'id', // param base name
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
            $before_cursor,
            'before_cursor', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




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
     * Operation removeTransfersFromSettlement
     *
     * Delete Settlement Transfers
     *
     * @param  string $settlement_id ID of &#x60;Settlement&#x60; object. (required)
     * @param  \Finix\Model\RemoveSettlementTransfer $remove_settlement_transfer remove_settlement_transfer (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function removeTransfersFromSettlement($settlement_id, $remove_settlement_transfer = null)
    {
        $this->removeTransfersFromSettlementWithHttpInfo($settlement_id, $remove_settlement_transfer);
        
    }

    /**
     * Operation removeTransfersFromSettlementWithHttpInfo
     *
     * Delete Settlement Transfers
     *
     * @param  string $settlement_id ID of &#x60;Settlement&#x60; object. (required)
     * @param  \Finix\Model\RemoveSettlementTransfer $remove_settlement_transfer (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function removeTransfersFromSettlementWithHttpInfo($settlement_id, $remove_settlement_transfer = null)
    {
        $request = $this->removeTransfersFromSettlementRequest($settlement_id, $remove_settlement_transfer);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
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
     * Operation removeTransfersFromSettlementAsync
     *
     * Delete Settlement Transfers
     *
     * @param  string $settlement_id ID of &#x60;Settlement&#x60; object. (required)
     * @param  \Finix\Model\RemoveSettlementTransfer $remove_settlement_transfer (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeTransfersFromSettlementAsync($settlement_id, $remove_settlement_transfer = null)
    {
        return $this->removeTransfersFromSettlementAsyncWithHttpInfo($settlement_id, $remove_settlement_transfer)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation removeTransfersFromSettlementAsyncWithHttpInfo
     *
     * Delete Settlement Transfers
     *
     * @param  string $settlement_id ID of &#x60;Settlement&#x60; object. (required)
     * @param  \Finix\Model\RemoveSettlementTransfer $remove_settlement_transfer (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeTransfersFromSettlementAsyncWithHttpInfo($settlement_id, $remove_settlement_transfer = null)
    {
        $returnType = '';
        $request = $this->removeTransfersFromSettlementRequest($settlement_id, $remove_settlement_transfer);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'removeTransfersFromSettlement'
     *
     * @param  string $settlement_id ID of &#x60;Settlement&#x60; object. (required)
     * @param  \Finix\Model\RemoveSettlementTransfer $remove_settlement_transfer (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function removeTransfersFromSettlementRequest($settlement_id, $remove_settlement_transfer = null)
    {
        // verify the required parameter 'settlement_id' is set
        if ($settlement_id === null || (is_array($settlement_id) && count($settlement_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $settlement_id when calling removeSettlementTransfers'
            );
        }

        $resourcePath = '/settlements/{settlement_id}/transfers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($settlement_id !== null) {
            $resourcePath = str_replace(
                '{' . 'settlement_id' . '}',
                ObjectSerializer::toPathValue($settlement_id),
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
        if (isset($remove_settlement_transfer)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($remove_settlement_transfer));
            } 
            elseif($headers['Content-Type'] === 'multipart/form-data'){
                $multiStreamArr = [];
                $i = 0;
                foreach (array_keys($remove_settlement_transfer->getters()) as $get){
                    $getterName = $remove_settlement_transfer->getters()[$get];
                    $multiStreamArr[$i] =  ['name' => $get, 
                    'contents' =>$remove_settlement_transfer->$getterName()];
                    $i = $i + 1;
                }
                $httpBody = new MultipartStream($multiStreamArr, 'boundary');
                
                $headers = $this->headerSelector->selectHeadersForMultipart(
                    ['application/hal+json']
                );
            }
            else {
                $httpBody = $remove_settlement_transfer;
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
            'DELETE',
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
