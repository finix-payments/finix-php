<?php
/**
 * AuthorizationsApi
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
 * AuthorizationsApi Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix 
 * @link     https://finix.com
 */
class AuthorizationsApi
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
     * Operation update
     *
     * Capture an Authorization
     *
     * @param  string $authorization_id ID of &#x60;Authorization&#x60; to fetch. (required)
     * @param  \Finix\Model\UpdateAuthorizationRequest $update_authorization_request update_authorization_request (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Finix\Model\AuthorizationCaptured|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error406NotAcceptable|\Finix\Model\Error422InvalidFieldList
     */
    public function update($authorization_id, $update_authorization_request = null)
    {
        list($response) = $this->updateWithHttpInfo($authorization_id, $update_authorization_request);
        return $response;
    }

    /**
     * Operation updateWithHttpInfo
     *
     * Capture an Authorization
     *
     * @param  string $authorization_id ID of &#x60;Authorization&#x60; to fetch. (required)
     * @param  \Finix\Model\UpdateAuthorizationRequest $update_authorization_request (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Finix\Model\AuthorizationCaptured|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error406NotAcceptable|\Finix\Model\Error422InvalidFieldList, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateWithHttpInfo($authorization_id, $update_authorization_request = null)
    {
        $request = $this->updateRequest($authorization_id, $update_authorization_request);

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
                    if ('\Finix\Model\AuthorizationCaptured' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\AuthorizationCaptured' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\AuthorizationCaptured', []),
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

            $returnType = '\Finix\Model\AuthorizationCaptured';
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
                        '\Finix\Model\AuthorizationCaptured',
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
     * Capture an Authorization
     *
     * @param  string $authorization_id ID of &#x60;Authorization&#x60; to fetch. (required)
     * @param  \Finix\Model\UpdateAuthorizationRequest $update_authorization_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync($authorization_id, $update_authorization_request = null)
    {
        return $this->updateAsyncWithHttpInfo($authorization_id, $update_authorization_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateAsyncWithHttpInfo
     *
     * Capture an Authorization
     *
     * @param  string $authorization_id ID of &#x60;Authorization&#x60; to fetch. (required)
     * @param  \Finix\Model\UpdateAuthorizationRequest $update_authorization_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsyncWithHttpInfo($authorization_id, $update_authorization_request = null)
    {
        $returnType = '\Finix\Model\AuthorizationCaptured';
        $request = $this->updateRequest($authorization_id, $update_authorization_request);

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
     * @param  string $authorization_id ID of &#x60;Authorization&#x60; to fetch. (required)
     * @param  \Finix\Model\UpdateAuthorizationRequest $update_authorization_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateRequest($authorization_id, $update_authorization_request = null)
    {
        // verify the required parameter 'authorization_id' is set
        if ($authorization_id === null || (is_array($authorization_id) && count($authorization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization_id when calling captureAuthorization'
            );
        }

        $resourcePath = '/authorizations/{authorization_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($authorization_id !== null) {
            $resourcePath = str_replace(
                '{' . 'authorization_id' . '}',
                ObjectSerializer::toPathValue($authorization_id),
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
        if (isset($update_authorization_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($update_authorization_request));
            } 
            elseif($headers['Content-Type'] === 'multipart/form-data'){
                $multiStreamArr = [];
                $i = 0;
                foreach (array_keys($update_authorization_request->getters()) as $get){
                    $getterName = $update_authorization_request->getters()[$get];
                    $multiStreamArr[$i] =  ['name' => $get, 
                    'contents' =>$update_authorization_request->$getterName()];
                    $i = $i + 1;
                }
                $httpBody = new MultipartStream($multiStreamArr, 'boundary');
                
                $headers = $this->headerSelector->selectHeadersForMultipart(
                    ['application/hal+json']
                );
            }
            else {
                $httpBody = $update_authorization_request;
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
     * Operation create
     *
     * Create an Authorization
     *
     * @param  \Finix\Model\CreateAuthorizationRequest $create_authorization_request create_authorization_request (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Finix\Model\Authorization|\Finix\Model\ErrorGeneric|\Finix\Model\Error401Unauthorized|\Finix\Model\ErrorGeneric|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable|\Finix\Model\Error422InvalidFieldList
     */
    public function create($create_authorization_request = null)
    {
        list($response) = $this->createWithHttpInfo($create_authorization_request);
        return $response;
    }

    /**
     * Operation createWithHttpInfo
     *
     * Create an Authorization
     *
     * @param  \Finix\Model\CreateAuthorizationRequest $create_authorization_request (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Finix\Model\Authorization|\Finix\Model\ErrorGeneric|\Finix\Model\Error401Unauthorized|\Finix\Model\ErrorGeneric|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable|\Finix\Model\Error422InvalidFieldList, HTTP status code, HTTP response headers (array of strings)
     */
    public function createWithHttpInfo($create_authorization_request = null)
    {
        $request = $this->createRequest($create_authorization_request);

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
                    if ('\Finix\Model\Authorization' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Authorization' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Authorization', []),
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
                case 402:
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

            $returnType = '\Finix\Model\Authorization';
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
                        '\Finix\Model\Authorization',
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
                case 402:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Finix\Model\ErrorGeneric',
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
     * Operation createAsync
     *
     * Create an Authorization
     *
     * @param  \Finix\Model\CreateAuthorizationRequest $create_authorization_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAsync($create_authorization_request = null)
    {
        return $this->createAsyncWithHttpInfo($create_authorization_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createAsyncWithHttpInfo
     *
     * Create an Authorization
     *
     * @param  \Finix\Model\CreateAuthorizationRequest $create_authorization_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAsyncWithHttpInfo($create_authorization_request = null)
    {
        $returnType = '\Finix\Model\Authorization';
        $request = $this->createRequest($create_authorization_request);

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
     * @param  \Finix\Model\CreateAuthorizationRequest $create_authorization_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRequest($create_authorization_request = null)
    {

        $resourcePath = '/authorizations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





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
        if (isset($create_authorization_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($create_authorization_request));
            } 
            elseif($headers['Content-Type'] === 'multipart/form-data'){
                $multiStreamArr = [];
                $i = 0;
                foreach (array_keys($create_authorization_request->getters()) as $get){
                    $getterName = $create_authorization_request->getters()[$get];
                    $multiStreamArr[$i] =  ['name' => $get, 
                    'contents' =>$create_authorization_request->$getterName()];
                    $i = $i + 1;
                }
                $httpBody = new MultipartStream($multiStreamArr, 'boundary');
                
                $headers = $this->headerSelector->selectHeadersForMultipart(
                    ['application/hal+json']
                );
            }
            else {
                $httpBody = $create_authorization_request;
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
     * Fetch an Authorization
     *
     * @param  string $authorization_id ID of &#x60;Authorization&#x60; to fetch. (required)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Finix\Model\Authorization|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable
     */
    public function get($authorization_id)
    {
        list($response) = $this->getWithHttpInfo($authorization_id);
        return $response;
    }

    /**
     * Operation getWithHttpInfo
     *
     * Fetch an Authorization
     *
     * @param  string $authorization_id ID of &#x60;Authorization&#x60; to fetch. (required)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Finix\Model\Authorization|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo($authorization_id)
    {
        $request = $this->getRequest($authorization_id);

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
                    if ('\Finix\Model\Authorization' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\Authorization' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\Authorization', []),
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

            $returnType = '\Finix\Model\Authorization';
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
                        '\Finix\Model\Authorization',
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
     * Fetch an Authorization
     *
     * @param  string $authorization_id ID of &#x60;Authorization&#x60; to fetch. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync($authorization_id)
    {
        return $this->getAsyncWithHttpInfo($authorization_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAsyncWithHttpInfo
     *
     * Fetch an Authorization
     *
     * @param  string $authorization_id ID of &#x60;Authorization&#x60; to fetch. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsyncWithHttpInfo($authorization_id)
    {
        $returnType = '\Finix\Model\Authorization';
        $request = $this->getRequest($authorization_id);

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
     * @param  string $authorization_id ID of &#x60;Authorization&#x60; to fetch. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getRequest($authorization_id)
    {
        // verify the required parameter 'authorization_id' is set
        if ($authorization_id === null || (is_array($authorization_id) && count($authorization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization_id when calling getAuthorization'
            );
        }

        $resourcePath = '/authorizations/{authorization_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($authorization_id !== null) {
            $resourcePath = str_replace(
                '{' . 'authorization_id' . '}',
                ObjectSerializer::toPathValue($authorization_id),
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
     * List Authorizations
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  int $amount Filter by an amount equal to the given value. (optional)
     * @param  int $amount_gt Filter by an amount greater than. (optional)
     * @param  int $amount_gte Filter by an amount greater than or equal. (optional)
     * @param  int $amount_lt Filter by an amount less than. (optional)
     * @param  int $amount_lte Filter by an amount less than or equal. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     * @param  string $created_at_gte Filter where &#x60;created_at&#x60; is after the given date. (optional)
     * @param  string $created_at_lte Filter where &#x60;created_at&#x60; is before the given date. (optional)
     * @param  string $idempotency_id Filter by &#x60;idempotency_id&#x60;. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $sort Specify key to be used for sorting the collection. (optional)
     * @param  string $state Filter by Transaction state. (optional)
     * @param  string $updated_at_gte Filter where &#x60;updated_at&#x60; is after the given date. (optional)
     * @param  string $updated_at_lte Filter where &#x60;updated_at&#x60; is before the given date. (optional)
     * @param  string $trace_id Filter by &#x60;trace_id&#x60;. (optional)
     * @param  string $is_void Filter by &#x60;idempotency_id&#x60;. (optional)
     * @param  string $instrument_bin Filter by Bank Identification Number (BIN). The BIN is the first 6 digits of the masked number. (optional)
     * @param  string $instrument_account_last4 Filter Transactions by the last 4 digits of the bank account. The bank account last 4 are the last 4 digits of the masked number instrument_account_last4&#x3D;9444 BIN. (optional)
     * @param  string $instrument_brand_type Filter by card brand. Available card brand types can be found in the drop-down. (optional)
     * @param  string $merchant_identity_id Filter by &#x60;Identity&#x60; ID. (optional)
     * @param  string $merchant_identity_name Filter Transactions by &#x60;Identity&#x60; name. The name is not case-sensitive. (optional)
     * @param  string $instrument_name Filter Transactions by &#x60;Payment Instrument&#x60; name. (optional)
     * @param  string $instrument_type Filter Transactions by &#x60;Payment Instrument&#x60; type. Available instrument types include: Bank Account or Payment Card. (optional)
     * @param  string $merchant_id Filter by &#x60;Merchant&#x60; ID. (optional)
     * @param  string $merchant_mid Filter by Merchant Identification Number (MID). (optional)
     * @param  string $instrument_card_last4 Filter by the payment card last 4 digits. (optional)
     * @param  string $merchant_processor_id Filter by &#x60;Processor&#x60; ID. (optional)
     * @param  string $type Type of the &#x60;Authorization&#x60;. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Finix\Model\AuthorizationsList|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable
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
     * List Authorizations
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  int $amount Filter by an amount equal to the given value. (optional)
     * @param  int $amount_gt Filter by an amount greater than. (optional)
     * @param  int $amount_gte Filter by an amount greater than or equal. (optional)
     * @param  int $amount_lt Filter by an amount less than. (optional)
     * @param  int $amount_lte Filter by an amount less than or equal. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     * @param  string $created_at_gte Filter where &#x60;created_at&#x60; is after the given date. (optional)
     * @param  string $created_at_lte Filter where &#x60;created_at&#x60; is before the given date. (optional)
     * @param  string $idempotency_id Filter by &#x60;idempotency_id&#x60;. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $sort Specify key to be used for sorting the collection. (optional)
     * @param  string $state Filter by Transaction state. (optional)
     * @param  string $updated_at_gte Filter where &#x60;updated_at&#x60; is after the given date. (optional)
     * @param  string $updated_at_lte Filter where &#x60;updated_at&#x60; is before the given date. (optional)
     * @param  string $trace_id Filter by &#x60;trace_id&#x60;. (optional)
     * @param  string $is_void Filter by &#x60;idempotency_id&#x60;. (optional)
     * @param  string $instrument_bin Filter by Bank Identification Number (BIN). The BIN is the first 6 digits of the masked number. (optional)
     * @param  string $instrument_account_last4 Filter Transactions by the last 4 digits of the bank account. The bank account last 4 are the last 4 digits of the masked number instrument_account_last4&#x3D;9444 BIN. (optional)
     * @param  string $instrument_brand_type Filter by card brand. Available card brand types can be found in the drop-down. (optional)
     * @param  string $merchant_identity_id Filter by &#x60;Identity&#x60; ID. (optional)
     * @param  string $merchant_identity_name Filter Transactions by &#x60;Identity&#x60; name. The name is not case-sensitive. (optional)
     * @param  string $instrument_name Filter Transactions by &#x60;Payment Instrument&#x60; name. (optional)
     * @param  string $instrument_type Filter Transactions by &#x60;Payment Instrument&#x60; type. Available instrument types include: Bank Account or Payment Card. (optional)
     * @param  string $merchant_id Filter by &#x60;Merchant&#x60; ID. (optional)
     * @param  string $merchant_mid Filter by Merchant Identification Number (MID). (optional)
     * @param  string $instrument_card_last4 Filter by the payment card last 4 digits. (optional)
     * @param  string $merchant_processor_id Filter by &#x60;Processor&#x60; ID. (optional)
     * @param  string $type Type of the &#x60;Authorization&#x60;. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Finix\Model\AuthorizationsList|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable, HTTP status code, HTTP response headers (array of strings)
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
                    if ('\Finix\Model\AuthorizationsList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\AuthorizationsList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\AuthorizationsList', []),
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

            $returnType = '\Finix\Model\AuthorizationsList';
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
                        '\Finix\Model\AuthorizationsList',
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
     * Operation listAsync
     *
     * List Authorizations
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  int $amount Filter by an amount equal to the given value. (optional)
     * @param  int $amount_gt Filter by an amount greater than. (optional)
     * @param  int $amount_gte Filter by an amount greater than or equal. (optional)
     * @param  int $amount_lt Filter by an amount less than. (optional)
     * @param  int $amount_lte Filter by an amount less than or equal. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     * @param  string $created_at_gte Filter where &#x60;created_at&#x60; is after the given date. (optional)
     * @param  string $created_at_lte Filter where &#x60;created_at&#x60; is before the given date. (optional)
     * @param  string $idempotency_id Filter by &#x60;idempotency_id&#x60;. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $sort Specify key to be used for sorting the collection. (optional)
     * @param  string $state Filter by Transaction state. (optional)
     * @param  string $updated_at_gte Filter where &#x60;updated_at&#x60; is after the given date. (optional)
     * @param  string $updated_at_lte Filter where &#x60;updated_at&#x60; is before the given date. (optional)
     * @param  string $trace_id Filter by &#x60;trace_id&#x60;. (optional)
     * @param  string $is_void Filter by &#x60;idempotency_id&#x60;. (optional)
     * @param  string $instrument_bin Filter by Bank Identification Number (BIN). The BIN is the first 6 digits of the masked number. (optional)
     * @param  string $instrument_account_last4 Filter Transactions by the last 4 digits of the bank account. The bank account last 4 are the last 4 digits of the masked number instrument_account_last4&#x3D;9444 BIN. (optional)
     * @param  string $instrument_brand_type Filter by card brand. Available card brand types can be found in the drop-down. (optional)
     * @param  string $merchant_identity_id Filter by &#x60;Identity&#x60; ID. (optional)
     * @param  string $merchant_identity_name Filter Transactions by &#x60;Identity&#x60; name. The name is not case-sensitive. (optional)
     * @param  string $instrument_name Filter Transactions by &#x60;Payment Instrument&#x60; name. (optional)
     * @param  string $instrument_type Filter Transactions by &#x60;Payment Instrument&#x60; type. Available instrument types include: Bank Account or Payment Card. (optional)
     * @param  string $merchant_id Filter by &#x60;Merchant&#x60; ID. (optional)
     * @param  string $merchant_mid Filter by Merchant Identification Number (MID). (optional)
     * @param  string $instrument_card_last4 Filter by the payment card last 4 digits. (optional)
     * @param  string $merchant_processor_id Filter by &#x60;Processor&#x60; ID. (optional)
     * @param  string $type Type of the &#x60;Authorization&#x60;. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
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
     * List Authorizations
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  int $amount Filter by an amount equal to the given value. (optional)
     * @param  int $amount_gt Filter by an amount greater than. (optional)
     * @param  int $amount_gte Filter by an amount greater than or equal. (optional)
     * @param  int $amount_lt Filter by an amount less than. (optional)
     * @param  int $amount_lte Filter by an amount less than or equal. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     * @param  string $created_at_gte Filter where &#x60;created_at&#x60; is after the given date. (optional)
     * @param  string $created_at_lte Filter where &#x60;created_at&#x60; is before the given date. (optional)
     * @param  string $idempotency_id Filter by &#x60;idempotency_id&#x60;. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $sort Specify key to be used for sorting the collection. (optional)
     * @param  string $state Filter by Transaction state. (optional)
     * @param  string $updated_at_gte Filter where &#x60;updated_at&#x60; is after the given date. (optional)
     * @param  string $updated_at_lte Filter where &#x60;updated_at&#x60; is before the given date. (optional)
     * @param  string $trace_id Filter by &#x60;trace_id&#x60;. (optional)
     * @param  string $is_void Filter by &#x60;idempotency_id&#x60;. (optional)
     * @param  string $instrument_bin Filter by Bank Identification Number (BIN). The BIN is the first 6 digits of the masked number. (optional)
     * @param  string $instrument_account_last4 Filter Transactions by the last 4 digits of the bank account. The bank account last 4 are the last 4 digits of the masked number instrument_account_last4&#x3D;9444 BIN. (optional)
     * @param  string $instrument_brand_type Filter by card brand. Available card brand types can be found in the drop-down. (optional)
     * @param  string $merchant_identity_id Filter by &#x60;Identity&#x60; ID. (optional)
     * @param  string $merchant_identity_name Filter Transactions by &#x60;Identity&#x60; name. The name is not case-sensitive. (optional)
     * @param  string $instrument_name Filter Transactions by &#x60;Payment Instrument&#x60; name. (optional)
     * @param  string $instrument_type Filter Transactions by &#x60;Payment Instrument&#x60; type. Available instrument types include: Bank Account or Payment Card. (optional)
     * @param  string $merchant_id Filter by &#x60;Merchant&#x60; ID. (optional)
     * @param  string $merchant_mid Filter by Merchant Identification Number (MID). (optional)
     * @param  string $instrument_card_last4 Filter by the payment card last 4 digits. (optional)
     * @param  string $merchant_processor_id Filter by &#x60;Processor&#x60; ID. (optional)
     * @param  string $type Type of the &#x60;Authorization&#x60;. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listAsyncWithHttpInfo($associative_array)
    {
        $returnType = '\Finix\Model\AuthorizationsList';
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
     * @param  int $amount Filter by an amount equal to the given value. (optional)
     * @param  int $amount_gt Filter by an amount greater than. (optional)
     * @param  int $amount_gte Filter by an amount greater than or equal. (optional)
     * @param  int $amount_lt Filter by an amount less than. (optional)
     * @param  int $amount_lte Filter by an amount less than or equal. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     * @param  string $created_at_gte Filter where &#x60;created_at&#x60; is after the given date. (optional)
     * @param  string $created_at_lte Filter where &#x60;created_at&#x60; is before the given date. (optional)
     * @param  string $idempotency_id Filter by &#x60;idempotency_id&#x60;. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $sort Specify key to be used for sorting the collection. (optional)
     * @param  string $state Filter by Transaction state. (optional)
     * @param  string $updated_at_gte Filter where &#x60;updated_at&#x60; is after the given date. (optional)
     * @param  string $updated_at_lte Filter where &#x60;updated_at&#x60; is before the given date. (optional)
     * @param  string $trace_id Filter by &#x60;trace_id&#x60;. (optional)
     * @param  string $is_void Filter by &#x60;idempotency_id&#x60;. (optional)
     * @param  string $instrument_bin Filter by Bank Identification Number (BIN). The BIN is the first 6 digits of the masked number. (optional)
     * @param  string $instrument_account_last4 Filter Transactions by the last 4 digits of the bank account. The bank account last 4 are the last 4 digits of the masked number instrument_account_last4&#x3D;9444 BIN. (optional)
     * @param  string $instrument_brand_type Filter by card brand. Available card brand types can be found in the drop-down. (optional)
     * @param  string $merchant_identity_id Filter by &#x60;Identity&#x60; ID. (optional)
     * @param  string $merchant_identity_name Filter Transactions by &#x60;Identity&#x60; name. The name is not case-sensitive. (optional)
     * @param  string $instrument_name Filter Transactions by &#x60;Payment Instrument&#x60; name. (optional)
     * @param  string $instrument_type Filter Transactions by &#x60;Payment Instrument&#x60; type. Available instrument types include: Bank Account or Payment Card. (optional)
     * @param  string $merchant_id Filter by &#x60;Merchant&#x60; ID. (optional)
     * @param  string $merchant_mid Filter by Merchant Identification Number (MID). (optional)
     * @param  string $instrument_card_last4 Filter by the payment card last 4 digits. (optional)
     * @param  string $merchant_processor_id Filter by &#x60;Processor&#x60; ID. (optional)
     * @param  string $type Type of the &#x60;Authorization&#x60;. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listRequest($associative_array)
    {
        // unbox the parameters from the associative array
        $amount = array_key_exists('amount', $associative_array) ? $associative_array['amount'] : null;
        $amount_gt = array_key_exists('amount_gt', $associative_array) ? $associative_array['amount_gt'] : null;
        $amount_gte = array_key_exists('amount_gte', $associative_array) ? $associative_array['amount_gte'] : null;
        $amount_lt = array_key_exists('amount_lt', $associative_array) ? $associative_array['amount_lt'] : null;
        $amount_lte = array_key_exists('amount_lte', $associative_array) ? $associative_array['amount_lte'] : null;
        $before_cursor = array_key_exists('before_cursor', $associative_array) ? $associative_array['before_cursor'] : null;
        $created_at_gte = array_key_exists('created_at_gte', $associative_array) ? $associative_array['created_at_gte'] : null;
        $created_at_lte = array_key_exists('created_at_lte', $associative_array) ? $associative_array['created_at_lte'] : null;
        $idempotency_id = array_key_exists('idempotency_id', $associative_array) ? $associative_array['idempotency_id'] : null;
        $limit = array_key_exists('limit', $associative_array) ? $associative_array['limit'] : null;
        $sort = array_key_exists('sort', $associative_array) ? $associative_array['sort'] : null;
        $state = array_key_exists('state', $associative_array) ? $associative_array['state'] : null;
        $updated_at_gte = array_key_exists('updated_at_gte', $associative_array) ? $associative_array['updated_at_gte'] : null;
        $updated_at_lte = array_key_exists('updated_at_lte', $associative_array) ? $associative_array['updated_at_lte'] : null;
        $trace_id = array_key_exists('trace_id', $associative_array) ? $associative_array['trace_id'] : null;
        $is_void = array_key_exists('is_void', $associative_array) ? $associative_array['is_void'] : null;
        $instrument_bin = array_key_exists('instrument_bin', $associative_array) ? $associative_array['instrument_bin'] : null;
        $instrument_account_last4 = array_key_exists('instrument_account_last4', $associative_array) ? $associative_array['instrument_account_last4'] : null;
        $instrument_brand_type = array_key_exists('instrument_brand_type', $associative_array) ? $associative_array['instrument_brand_type'] : null;
        $merchant_identity_id = array_key_exists('merchant_identity_id', $associative_array) ? $associative_array['merchant_identity_id'] : null;
        $merchant_identity_name = array_key_exists('merchant_identity_name', $associative_array) ? $associative_array['merchant_identity_name'] : null;
        $instrument_name = array_key_exists('instrument_name', $associative_array) ? $associative_array['instrument_name'] : null;
        $instrument_type = array_key_exists('instrument_type', $associative_array) ? $associative_array['instrument_type'] : null;
        $merchant_id = array_key_exists('merchant_id', $associative_array) ? $associative_array['merchant_id'] : null;
        $merchant_mid = array_key_exists('merchant_mid', $associative_array) ? $associative_array['merchant_mid'] : null;
        $instrument_card_last4 = array_key_exists('instrument_card_last4', $associative_array) ? $associative_array['instrument_card_last4'] : null;
        $merchant_processor_id = array_key_exists('merchant_processor_id', $associative_array) ? $associative_array['merchant_processor_id'] : null;
        $type = array_key_exists('type', $associative_array) ? $associative_array['type'] : null;
        $after_cursor = array_key_exists('after_cursor', $associative_array) ? $associative_array['after_cursor'] : null;


        $resourcePath = '/authorizations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $amount,
            'amount', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $amount_gt,
            'amount.gt', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $amount_gte,
            'amount.gte', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $amount_lt,
            'amount.lt', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $amount_lte,
            'amount.lte', // param base name
            'integer', // openApiType
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
            $idempotency_id,
            'idempotency_id', // param base name
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
            $sort,
            'sort', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $state,
            'state', // param base name
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
            $trace_id,
            'trace_id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $is_void,
            'is_void', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $instrument_bin,
            'instrument_bin', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $instrument_account_last4,
            'instrument_account_last4', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $instrument_brand_type,
            'instrument_brand_type', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $merchant_identity_id,
            'merchant_identity_id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $merchant_identity_name,
            'merchant_identity_name', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $instrument_name,
            'instrument_name', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $instrument_type,
            'instrument_type', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $merchant_id,
            'merchant_id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $merchant_mid,
            'merchant_mid', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $instrument_card_last4,
            'instrument_card_last4', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $merchant_processor_id,
            'merchant_processor_id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type,
            'type', // param base name
            'string', // openApiType
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
