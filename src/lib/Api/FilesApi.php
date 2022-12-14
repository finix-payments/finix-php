<?php
/**
 * FilesApi
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
 * FilesApi Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix 
 * @link     https://finix.com
 */
class FilesApi
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
     * Operation createExternalLink
     *
     * Create an External Link
     *
     * @param  string $file_id Your &#x60;File&#x60; ID. (required)
     * @param  \Finix\Model\CreateExternalLinkRequest $create_external_link_request create_external_link_request (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Finix\Model\ExternalLink|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable
     */
    public function createExternalLink($file_id, $create_external_link_request = null)
    {
        list($response) = $this->createExternalLinkWithHttpInfo($file_id, $create_external_link_request);
        return $response;
    }

    /**
     * Operation createExternalLinkWithHttpInfo
     *
     * Create an External Link
     *
     * @param  string $file_id Your &#x60;File&#x60; ID. (required)
     * @param  \Finix\Model\CreateExternalLinkRequest $create_external_link_request (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Finix\Model\ExternalLink|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable, HTTP status code, HTTP response headers (array of strings)
     */
    public function createExternalLinkWithHttpInfo($file_id, $create_external_link_request = null)
    {
        $request = $this->createExternalLinkRequest($file_id, $create_external_link_request);

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
                    if ('\Finix\Model\ExternalLink' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\ExternalLink' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\ExternalLink', []),
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

            $returnType = '\Finix\Model\ExternalLink';
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
                        '\Finix\Model\ExternalLink',
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
     * Operation createExternalLinkAsync
     *
     * Create an External Link
     *
     * @param  string $file_id Your &#x60;File&#x60; ID. (required)
     * @param  \Finix\Model\CreateExternalLinkRequest $create_external_link_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createExternalLinkAsync($file_id, $create_external_link_request = null)
    {
        return $this->createExternalLinkAsyncWithHttpInfo($file_id, $create_external_link_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createExternalLinkAsyncWithHttpInfo
     *
     * Create an External Link
     *
     * @param  string $file_id Your &#x60;File&#x60; ID. (required)
     * @param  \Finix\Model\CreateExternalLinkRequest $create_external_link_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createExternalLinkAsyncWithHttpInfo($file_id, $create_external_link_request = null)
    {
        $returnType = '\Finix\Model\ExternalLink';
        $request = $this->createExternalLinkRequest($file_id, $create_external_link_request);

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
     * Create request for operation 'createExternalLink'
     *
     * @param  string $file_id Your &#x60;File&#x60; ID. (required)
     * @param  \Finix\Model\CreateExternalLinkRequest $create_external_link_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createExternalLinkRequest($file_id, $create_external_link_request = null)
    {
        // verify the required parameter 'file_id' is set
        if ($file_id === null || (is_array($file_id) && count($file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file_id when calling createExternalLink'
            );
        }

        $resourcePath = '/files/{file_id}/external_links';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($file_id !== null) {
            $resourcePath = str_replace(
                '{' . 'file_id' . '}',
                ObjectSerializer::toPathValue($file_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.api+json', 'application/hal+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.api+json', 'application/hal+json'],
                ['application/vnd.api+json']
            );
        }

        // for model (json/xml)
        if (isset($create_external_link_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($create_external_link_request));
            } 
            elseif($headers['Content-Type'] === 'multipart/form-data'){
                $multiStreamArr = [];
                $i = 0;
                foreach (array_keys($create_external_link_request->getters()) as $get){
                    $getterName = $create_external_link_request->getters()[$get];
                    $multiStreamArr[$i] =  ['name' => $get, 
                    'contents' =>$create_external_link_request->$getterName()];
                    $i = $i + 1;
                }
                $httpBody = new MultipartStream($multiStreamArr, 'boundary');
                
                $headers = $this->headerSelector->selectHeadersForMultipart(
                    ['application/hal+json']
                );
            }
            else {
                $httpBody = $create_external_link_request;
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
     * Operation create
     *
     * Create a File
     *
     * @param  \Finix\Model\CreateFileRequest $create_file_request create_file_request (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Finix\Model\File|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable
     */
    public function create($create_file_request = null)
    {
        list($response) = $this->createWithHttpInfo($create_file_request);
        return $response;
    }

    /**
     * Operation createWithHttpInfo
     *
     * Create a File
     *
     * @param  \Finix\Model\CreateFileRequest $create_file_request (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Finix\Model\File|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable, HTTP status code, HTTP response headers (array of strings)
     */
    public function createWithHttpInfo($create_file_request = null)
    {
        $request = $this->createRequest($create_file_request);

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
                    if ('\Finix\Model\File' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\File' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\File', []),
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

            $returnType = '\Finix\Model\File';
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
                        '\Finix\Model\File',
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
     * Operation createAsync
     *
     * Create a File
     *
     * @param  \Finix\Model\CreateFileRequest $create_file_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAsync($create_file_request = null)
    {
        return $this->createAsyncWithHttpInfo($create_file_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createAsyncWithHttpInfo
     *
     * Create a File
     *
     * @param  \Finix\Model\CreateFileRequest $create_file_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAsyncWithHttpInfo($create_file_request = null)
    {
        $returnType = '\Finix\Model\File';
        $request = $this->createRequest($create_file_request);

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
     * @param  \Finix\Model\CreateFileRequest $create_file_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRequest($create_file_request = null)
    {

        $resourcePath = '/files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.api+json', 'application/hal+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.api+json', 'application/hal+json'],
                ['application/vnd.api+json']
            );
        }

        // for model (json/xml)
        if (isset($create_file_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($create_file_request));
            } 
            elseif($headers['Content-Type'] === 'multipart/form-data'){
                $multiStreamArr = [];
                $i = 0;
                foreach (array_keys($create_file_request->getters()) as $get){
                    $getterName = $create_file_request->getters()[$get];
                    $multiStreamArr[$i] =  ['name' => $get, 
                    'contents' =>$create_file_request->$getterName()];
                    $i = $i + 1;
                }
                $httpBody = new MultipartStream($multiStreamArr, 'boundary');
                
                $headers = $this->headerSelector->selectHeadersForMultipart(
                    ['application/hal+json']
                );
            }
            else {
                $httpBody = $create_file_request;
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
     * Operation download
     *
     * Download a file
     *
     * @param  string $file_id The ID of the &#x60;File&#x60; that was created to upload the file. (required)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable
     */
    public function download($file_id)
    {
        list($response) = $this->downloadWithHttpInfo($file_id);
        return $response;
    }

    /**
     * Operation downloadWithHttpInfo
     *
     * Download a file
     *
     * @param  string $file_id The ID of the &#x60;File&#x60; that was created to upload the file. (required)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable, HTTP status code, HTTP response headers (array of strings)
     */
    public function downloadWithHttpInfo($file_id)
    {
        $request = $this->downloadRequest($file_id);

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
                    if ('\SplFileObject' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SplFileObject' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SplFileObject', []),
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

            $returnType = '\SplFileObject';
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
                        '\SplFileObject',
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
     * Operation downloadAsync
     *
     * Download a file
     *
     * @param  string $file_id The ID of the &#x60;File&#x60; that was created to upload the file. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadAsync($file_id)
    {
        return $this->downloadAsyncWithHttpInfo($file_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation downloadAsyncWithHttpInfo
     *
     * Download a file
     *
     * @param  string $file_id The ID of the &#x60;File&#x60; that was created to upload the file. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadAsyncWithHttpInfo($file_id)
    {
        $returnType = '\SplFileObject';
        $request = $this->downloadRequest($file_id);

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
     * Create request for operation 'download'
     *
     * @param  string $file_id The ID of the &#x60;File&#x60; that was created to upload the file. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function downloadRequest($file_id)
    {
        // verify the required parameter 'file_id' is set
        if ($file_id === null || (is_array($file_id) && count($file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file_id when calling downloadFile'
            );
        }

        $resourcePath = '/files/{file_id}/download';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($file_id !== null) {
            $resourcePath = str_replace(
                '{' . 'file_id' . '}',
                ObjectSerializer::toPathValue($file_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/octet-stream', 'application/hal+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/octet-stream', 'application/hal+json'],
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
     * Operation getExternalLink
     *
     * Fetch an External LInk
     *
     * @param  string $file_id The ID of the &#x60;File&#x60; that has the links you want to retrieve. (required)
     * @param  string $external_link_id The ID of the &#x60;external_link&#x60; that you want to retireve. (required)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Finix\Model\ExternalLink|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable
     */
    public function getExternalLink($file_id, $external_link_id)
    {
        list($response) = $this->getExternalLinkWithHttpInfo($file_id, $external_link_id);
        return $response;
    }

    /**
     * Operation getExternalLinkWithHttpInfo
     *
     * Fetch an External LInk
     *
     * @param  string $file_id The ID of the &#x60;File&#x60; that has the links you want to retrieve. (required)
     * @param  string $external_link_id The ID of the &#x60;external_link&#x60; that you want to retireve. (required)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Finix\Model\ExternalLink|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable, HTTP status code, HTTP response headers (array of strings)
     */
    public function getExternalLinkWithHttpInfo($file_id, $external_link_id)
    {
        $request = $this->getExternalLinkRequest($file_id, $external_link_id);

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
                    if ('\Finix\Model\ExternalLink' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\ExternalLink' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\ExternalLink', []),
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

            $returnType = '\Finix\Model\ExternalLink';
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
                        '\Finix\Model\ExternalLink',
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
     * Operation getExternalLinkAsync
     *
     * Fetch an External LInk
     *
     * @param  string $file_id The ID of the &#x60;File&#x60; that has the links you want to retrieve. (required)
     * @param  string $external_link_id The ID of the &#x60;external_link&#x60; that you want to retireve. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getExternalLinkAsync($file_id, $external_link_id)
    {
        return $this->getExternalLinkAsyncWithHttpInfo($file_id, $external_link_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getExternalLinkAsyncWithHttpInfo
     *
     * Fetch an External LInk
     *
     * @param  string $file_id The ID of the &#x60;File&#x60; that has the links you want to retrieve. (required)
     * @param  string $external_link_id The ID of the &#x60;external_link&#x60; that you want to retireve. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getExternalLinkAsyncWithHttpInfo($file_id, $external_link_id)
    {
        $returnType = '\Finix\Model\ExternalLink';
        $request = $this->getExternalLinkRequest($file_id, $external_link_id);

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
     * Create request for operation 'getExternalLink'
     *
     * @param  string $file_id The ID of the &#x60;File&#x60; that has the links you want to retrieve. (required)
     * @param  string $external_link_id The ID of the &#x60;external_link&#x60; that you want to retireve. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getExternalLinkRequest($file_id, $external_link_id)
    {
        // verify the required parameter 'file_id' is set
        if ($file_id === null || (is_array($file_id) && count($file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file_id when calling getExternalLink'
            );
        }
        // verify the required parameter 'external_link_id' is set
        if ($external_link_id === null || (is_array($external_link_id) && count($external_link_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $external_link_id when calling getExternalLink'
            );
        }

        $resourcePath = '/files/{file_id}/external_links/{external_link_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($file_id !== null) {
            $resourcePath = str_replace(
                '{' . 'file_id' . '}',
                ObjectSerializer::toPathValue($file_id),
                $resourcePath
            );
        }
        // path params
        if ($external_link_id !== null) {
            $resourcePath = str_replace(
                '{' . 'external_link_id' . '}',
                ObjectSerializer::toPathValue($external_link_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.api+json', 'application/hal+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.api+json', 'application/hal+json'],
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
     * Fetch a File
     *
     * @param  string $file_id Your &#x60;File&#x60; ID. (required)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Finix\Model\File|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable
     */
    public function get($file_id)
    {
        list($response) = $this->getWithHttpInfo($file_id);
        return $response;
    }

    /**
     * Operation getWithHttpInfo
     *
     * Fetch a File
     *
     * @param  string $file_id Your &#x60;File&#x60; ID. (required)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Finix\Model\File|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo($file_id)
    {
        $request = $this->getRequest($file_id);

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
                    if ('\Finix\Model\File' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\File' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\File', []),
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

            $returnType = '\Finix\Model\File';
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
                        '\Finix\Model\File',
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
     * Fetch a File
     *
     * @param  string $file_id Your &#x60;File&#x60; ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync($file_id)
    {
        return $this->getAsyncWithHttpInfo($file_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAsyncWithHttpInfo
     *
     * Fetch a File
     *
     * @param  string $file_id Your &#x60;File&#x60; ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsyncWithHttpInfo($file_id)
    {
        $returnType = '\Finix\Model\File';
        $request = $this->getRequest($file_id);

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
     * @param  string $file_id Your &#x60;File&#x60; ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getRequest($file_id)
    {
        // verify the required parameter 'file_id' is set
        if ($file_id === null || (is_array($file_id) && count($file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file_id when calling getFile'
            );
        }

        $resourcePath = '/files/{file_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($file_id !== null) {
            $resourcePath = str_replace(
                '{' . 'file_id' . '}',
                ObjectSerializer::toPathValue($file_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.api+json', 'application/hal+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.api+json', 'application/hal+json'],
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
     * Operation listExternalLinks
     *
     * List All External Links
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $file_id Your &#x60;File&#x60; ID. (required)
     * @param  string $sort Specify key to be used for sorting the collection. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $id Filter by &#x60;id&#x60;. (optional)
     * @param  string $created_at_gte Filter where &#x60;created_at&#x60; is after the given date. (optional)
     * @param  string $created_at_lte Filter where &#x60;created_at&#x60; is before the given date. (optional)
     * @param  string $updated_at_gte Filter where &#x60;updated_at&#x60; is after the given date. (optional)
     * @param  string $updated_at_lte Filter where &#x60;updated_at&#x60; is before the given date. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Finix\Model\ExternalLinksList|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList
     */
    public function listExternalLinks($associative_array)
    {
        list($response) = $this->listExternalLinksWithHttpInfo($associative_array);
        $hasNextCursor = ($response->openAPITypes()['page'] == '\Finix\Model\PageCursor');
        $queryParams = $this->getQueryParam($response->getPage(), $associative_array, $hasNextCursor);
        $reachedEnd = $this->reachedEnd($response->getPage(), $hasNextCursor);
        $listNextFunc = function($limit = null) use($queryParams, $reachedEnd){
            $queryParams['limit'] = $limit;
            if ($reachedEnd)
            {
                throw new ApiException;
            }
            return $this->listExternalLinks($queryParams);
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
     * Operation listExternalLinksWithHttpInfo
     *
     * List All External Links
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $file_id Your &#x60;File&#x60; ID. (required)
     * @param  string $sort Specify key to be used for sorting the collection. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $id Filter by &#x60;id&#x60;. (optional)
     * @param  string $created_at_gte Filter where &#x60;created_at&#x60; is after the given date. (optional)
     * @param  string $created_at_lte Filter where &#x60;created_at&#x60; is before the given date. (optional)
     * @param  string $updated_at_gte Filter where &#x60;updated_at&#x60; is after the given date. (optional)
     * @param  string $updated_at_lte Filter where &#x60;updated_at&#x60; is before the given date. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Finix\Model\ExternalLinksList|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList, HTTP status code, HTTP response headers (array of strings)
     */
    public function listExternalLinksWithHttpInfo($associative_array)
    {
        $request = $this->listExternalLinksRequest($associative_array);

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
                    if ('\Finix\Model\ExternalLinksList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\ExternalLinksList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\ExternalLinksList', []),
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
            }

            $returnType = '\Finix\Model\ExternalLinksList';
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
                        '\Finix\Model\ExternalLinksList',
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
            }
            throw $e;
        }
    }

    /**
     * Operation listExternalLinksAsync
     *
     * List All External Links
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $file_id Your &#x60;File&#x60; ID. (required)
     * @param  string $sort Specify key to be used for sorting the collection. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $id Filter by &#x60;id&#x60;. (optional)
     * @param  string $created_at_gte Filter where &#x60;created_at&#x60; is after the given date. (optional)
     * @param  string $created_at_lte Filter where &#x60;created_at&#x60; is before the given date. (optional)
     * @param  string $updated_at_gte Filter where &#x60;updated_at&#x60; is after the given date. (optional)
     * @param  string $updated_at_lte Filter where &#x60;updated_at&#x60; is before the given date. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listExternalLinksAsync($associative_array)
    {
        return $this->listExternalLinksAsyncWithHttpInfo($associative_array)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listExternalLinksAsyncWithHttpInfo
     *
     * List All External Links
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $file_id Your &#x60;File&#x60; ID. (required)
     * @param  string $sort Specify key to be used for sorting the collection. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $id Filter by &#x60;id&#x60;. (optional)
     * @param  string $created_at_gte Filter where &#x60;created_at&#x60; is after the given date. (optional)
     * @param  string $created_at_lte Filter where &#x60;created_at&#x60; is before the given date. (optional)
     * @param  string $updated_at_gte Filter where &#x60;updated_at&#x60; is after the given date. (optional)
     * @param  string $updated_at_lte Filter where &#x60;updated_at&#x60; is before the given date. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listExternalLinksAsyncWithHttpInfo($associative_array)
    {
        $returnType = '\Finix\Model\ExternalLinksList';
        $request = $this->listExternalLinksRequest($associative_array);

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
     * Create request for operation 'listExternalLinks'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $file_id Your &#x60;File&#x60; ID. (required)
     * @param  string $sort Specify key to be used for sorting the collection. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $id Filter by &#x60;id&#x60;. (optional)
     * @param  string $created_at_gte Filter where &#x60;created_at&#x60; is after the given date. (optional)
     * @param  string $created_at_lte Filter where &#x60;created_at&#x60; is before the given date. (optional)
     * @param  string $updated_at_gte Filter where &#x60;updated_at&#x60; is after the given date. (optional)
     * @param  string $updated_at_lte Filter where &#x60;updated_at&#x60; is before the given date. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listExternalLinksRequest($associative_array)
    {
        // unbox the parameters from the associative array
        $file_id = array_key_exists('file_id', $associative_array) ? $associative_array['file_id'] : null;
        $sort = array_key_exists('sort', $associative_array) ? $associative_array['sort'] : null;
        $after_cursor = array_key_exists('after_cursor', $associative_array) ? $associative_array['after_cursor'] : null;
        $limit = array_key_exists('limit', $associative_array) ? $associative_array['limit'] : null;
        $id = array_key_exists('id', $associative_array) ? $associative_array['id'] : null;
        $created_at_gte = array_key_exists('created_at_gte', $associative_array) ? $associative_array['created_at_gte'] : null;
        $created_at_lte = array_key_exists('created_at_lte', $associative_array) ? $associative_array['created_at_lte'] : null;
        $updated_at_gte = array_key_exists('updated_at_gte', $associative_array) ? $associative_array['updated_at_gte'] : null;
        $updated_at_lte = array_key_exists('updated_at_lte', $associative_array) ? $associative_array['updated_at_lte'] : null;
        $before_cursor = array_key_exists('before_cursor', $associative_array) ? $associative_array['before_cursor'] : null;

        // verify the required parameter 'file_id' is set
        if ($file_id === null || (is_array($file_id) && count($file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file_id when calling listExternalLinks'
            );
        }

        $resourcePath = '/files/{file_id}/external_links';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
            $before_cursor,
            'before_cursor', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($file_id !== null) {
            $resourcePath = str_replace(
                '{' . 'file_id' . '}',
                ObjectSerializer::toPathValue($file_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.api+json', 'application/hal+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.api+json', 'application/hal+json'],
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
     * List All Files
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $sort Specify key to be used for sorting the collection. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $id Filter by &#x60;id&#x60;. (optional)
     * @param  string $created_at_gte Filter where &#x60;created_at&#x60; is after the given date. (optional)
     * @param  string $created_at_lte Filter where &#x60;created_at&#x60; is before the given date. (optional)
     * @param  string $updated_at_gte Filter where &#x60;updated_at&#x60; is after the given date. (optional)
     * @param  string $updated_at_lte Filter where &#x60;updated_at&#x60; is before the given date. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Finix\Model\FilesList|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable
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
     * List All Files
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $sort Specify key to be used for sorting the collection. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $id Filter by &#x60;id&#x60;. (optional)
     * @param  string $created_at_gte Filter where &#x60;created_at&#x60; is after the given date. (optional)
     * @param  string $created_at_lte Filter where &#x60;created_at&#x60; is before the given date. (optional)
     * @param  string $updated_at_gte Filter where &#x60;updated_at&#x60; is after the given date. (optional)
     * @param  string $updated_at_lte Filter where &#x60;updated_at&#x60; is before the given date. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Finix\Model\FilesList|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable, HTTP status code, HTTP response headers (array of strings)
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
                    if ('\Finix\Model\FilesList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\FilesList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\FilesList', []),
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

            $returnType = '\Finix\Model\FilesList';
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
                        '\Finix\Model\FilesList',
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
     * List All Files
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $sort Specify key to be used for sorting the collection. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $id Filter by &#x60;id&#x60;. (optional)
     * @param  string $created_at_gte Filter where &#x60;created_at&#x60; is after the given date. (optional)
     * @param  string $created_at_lte Filter where &#x60;created_at&#x60; is before the given date. (optional)
     * @param  string $updated_at_gte Filter where &#x60;updated_at&#x60; is after the given date. (optional)
     * @param  string $updated_at_lte Filter where &#x60;updated_at&#x60; is before the given date. (optional)
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
     * List All Files
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $sort Specify key to be used for sorting the collection. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $id Filter by &#x60;id&#x60;. (optional)
     * @param  string $created_at_gte Filter where &#x60;created_at&#x60; is after the given date. (optional)
     * @param  string $created_at_lte Filter where &#x60;created_at&#x60; is before the given date. (optional)
     * @param  string $updated_at_gte Filter where &#x60;updated_at&#x60; is after the given date. (optional)
     * @param  string $updated_at_lte Filter where &#x60;updated_at&#x60; is before the given date. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listAsyncWithHttpInfo($associative_array)
    {
        $returnType = '\Finix\Model\FilesList';
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
     * @param  string $sort Specify key to be used for sorting the collection. (optional)
     * @param  string $after_cursor Return every resource created after the cursor value. (optional)
     * @param  int $limit The numbers of items to return. (optional)
     * @param  string $id Filter by &#x60;id&#x60;. (optional)
     * @param  string $created_at_gte Filter where &#x60;created_at&#x60; is after the given date. (optional)
     * @param  string $created_at_lte Filter where &#x60;created_at&#x60; is before the given date. (optional)
     * @param  string $updated_at_gte Filter where &#x60;updated_at&#x60; is after the given date. (optional)
     * @param  string $updated_at_lte Filter where &#x60;updated_at&#x60; is before the given date. (optional)
     * @param  string $before_cursor Return every resource created before the cursor value. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listRequest($associative_array)
    {
        // unbox the parameters from the associative array
        $sort = array_key_exists('sort', $associative_array) ? $associative_array['sort'] : null;
        $after_cursor = array_key_exists('after_cursor', $associative_array) ? $associative_array['after_cursor'] : null;
        $limit = array_key_exists('limit', $associative_array) ? $associative_array['limit'] : null;
        $id = array_key_exists('id', $associative_array) ? $associative_array['id'] : null;
        $created_at_gte = array_key_exists('created_at_gte', $associative_array) ? $associative_array['created_at_gte'] : null;
        $created_at_lte = array_key_exists('created_at_lte', $associative_array) ? $associative_array['created_at_lte'] : null;
        $updated_at_gte = array_key_exists('updated_at_gte', $associative_array) ? $associative_array['updated_at_gte'] : null;
        $updated_at_lte = array_key_exists('updated_at_lte', $associative_array) ? $associative_array['updated_at_lte'] : null;
        $before_cursor = array_key_exists('before_cursor', $associative_array) ? $associative_array['before_cursor'] : null;


        $resourcePath = '/files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
            $before_cursor,
            'before_cursor', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.api+json', 'application/hal+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.api+json', 'application/hal+json'],
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
     * Operation upload
     *
     * Upload files Directly
     *
     * @param  string $file_id The ID of the &#x60;File&#x60; that was created to upload the file. (required)
     * @param  \Finix\Model\UploadFileRequest $upload_file_request upload_file_request (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Finix\Model\File|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable
     */
    public function upload($file_id, $upload_file_request = null)
    {
        list($response) = $this->uploadWithHttpInfo($file_id, $upload_file_request);
        return $response;
    }

    /**
     * Operation uploadWithHttpInfo
     *
     * Upload files Directly
     *
     * @param  string $file_id The ID of the &#x60;File&#x60; that was created to upload the file. (required)
     * @param  \Finix\Model\UploadFileRequest $upload_file_request (optional)
     *
     * @throws \Finix\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Finix\Model\File|\Finix\Model\Error401Unauthorized|\Finix\Model\Error403ForbiddenList|\Finix\Model\Error404NotFoundList|\Finix\Model\Error406NotAcceptable, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadWithHttpInfo($file_id, $upload_file_request = null)
    {
        $request = $this->uploadRequest($file_id, $upload_file_request);

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
                    if ('\Finix\Model\File' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Finix\Model\File' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Finix\Model\File', []),
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

            $returnType = '\Finix\Model\File';
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
                        '\Finix\Model\File',
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
     * Operation uploadAsync
     *
     * Upload files Directly
     *
     * @param  string $file_id The ID of the &#x60;File&#x60; that was created to upload the file. (required)
     * @param  \Finix\Model\UploadFileRequest $upload_file_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadAsync($file_id, $upload_file_request = null)
    {
        return $this->uploadAsyncWithHttpInfo($file_id, $upload_file_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation uploadAsyncWithHttpInfo
     *
     * Upload files Directly
     *
     * @param  string $file_id The ID of the &#x60;File&#x60; that was created to upload the file. (required)
     * @param  \Finix\Model\UploadFileRequest $upload_file_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadAsyncWithHttpInfo($file_id, $upload_file_request = null)
    {
        $returnType = '\Finix\Model\File';
        $request = $this->uploadRequest($file_id, $upload_file_request);

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
     * Create request for operation 'upload'
     *
     * @param  string $file_id The ID of the &#x60;File&#x60; that was created to upload the file. (required)
     * @param  \Finix\Model\UploadFileRequest $upload_file_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function uploadRequest($file_id, $upload_file_request = null)
    {
        // verify the required parameter 'file_id' is set
        if ($file_id === null || (is_array($file_id) && count($file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file_id when calling uploadFile'
            );
        }

        $resourcePath = '/files/{file_id}/upload';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($file_id !== null) {
            $resourcePath = str_replace(
                '{' . 'file_id' . '}',
                ObjectSerializer::toPathValue($file_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.api+json', 'application/hal+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.api+json', 'application/hal+json'],
                ['multipart/form-data']
            );
        }

        // for model (json/xml)
        if (isset($upload_file_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($upload_file_request));
            } 
            elseif($headers['Content-Type'] === 'multipart/form-data'){
                $multiStreamArr = [];
                $i = 0;
                foreach (array_keys($upload_file_request->getters()) as $get){
                    $getterName = $upload_file_request->getters()[$get];
                    $multiStreamArr[$i] =  ['name' => $get, 
                    'contents' =>$upload_file_request->$getterName()];
                    $i = $i + 1;
                }
                $httpBody = new MultipartStream($multiStreamArr, 'boundary');
                
                $headers = $this->headerSelector->selectHeadersForMultipart(
                    ['application/hal+json']
                );
            }
            else {
                $httpBody = $upload_file_request;
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
