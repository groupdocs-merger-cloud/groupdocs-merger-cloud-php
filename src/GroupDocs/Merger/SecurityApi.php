<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="SecurityApi.php">
 *   Copyright (c) 2003-2024 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Merger;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GroupDocs\Merger\Model\Requests;

/*
 * GroupDocs.Merger Cloud API Reference
 */
class SecurityApi
{
    /*
     * Stores client instance
     * @var ClientInterface client for calling api
     */
    protected $client;

    /*
     * Stores configuration
     * @var Configuration configuration info
     */
    protected $config;
  
    /*
     * Stores header selector
     * HeaderSelector class for header selection
     */
    protected $headerSelector;

    /*
     * Stores access token
     * @var accessToken Access token
     */
    protected $accessToken;

    /*
     * Initialize a new instance of SecurityApi
     * @param Configuration   $config configuration info
     * @param ClientInterface   $client client for calling api
     * @param HeaderSelector   $selector class for header selection
     */
    public function __construct(Configuration $config = null, ClientInterface $client = null, HeaderSelector $selector = null)
    {
        $this->config = $config ?: new Configuration();
        $this->client = $client ?: new Client();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /*
     * Gets the config
     * @return Configuration
     */
    public function getConfig() 
    {
        return $this->config;
    }

    /*
     * Operation addPassword
     *
     * Add document password protection
     *
     * @param Requests\addPasswordRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Merger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GroupDocs\Merger\Model\DocumentResult
     */
    public function addPassword(Requests\addPasswordRequest $request)
    {
        list($response) = $this->addPasswordWithHttpInfo($request);
        return $response;
    }

    /*
     * Operation addPasswordWithHttpInfo
     *
     * Add document password protection
     *
     * @param Requests\addPasswordRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Merger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GroupDocs\Merger\Model\DocumentResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function addPasswordWithHttpInfo(Requests\addPasswordRequest $request)
    {
        $returnType = '\GroupDocs\Merger\Model\DocumentResult';
        $request = $this->addPasswordRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $responseBody = $e->getResponse()->getBody();
                $content = $responseBody->getContents();
                $error = json_decode($content);
                if(property_exists($error, 'message')) {
                    $errorCode = $e->getCode();
                    $errorMessage = $error != null && $error->message != null
                        ? $error->message
                        : $e->getMessage();
                    
                    throw new ApiException($errorMessage, $errorCode);
                }
                else {                    
                    $errorCode = $e->getCode();
                    $errorMessage = $error != null && $error->error->message != null
                        ? $error->error->message
                        : $e->getMessage();
                    
                    throw new ApiException($errorMessage, $errorCode);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode);
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\GroupDocs\Merger\Model\DocumentResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation addPasswordAsync
     *
     * Add document password protection
     *
     * @param Requests\addPasswordRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addPasswordAsync(Requests\addPasswordRequest $request) 
    {
        return $this->addPasswordAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation addPasswordAsyncWithHttpInfo
     *
     * Add document password protection
     *
     * @param Requests\addPasswordRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addPasswordAsyncWithHttpInfo(Requests\addPasswordRequest $request) 
    {
        $returnType = '\GroupDocs\Merger\Model\DocumentResult';
        $request = $this->addPasswordRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode
                    );
                }
            );
    }

    /*
     * Create request for operation 'addPassword'
     *
     * @param Requests\addPasswordRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addPasswordRequest(Requests\addPasswordRequest $request)
    {
        // verify the required parameter 'options' is set
        if ($request->options === null) {
            throw new \InvalidArgumentException('Missing the required parameter $options when calling addPassword');
        }

        $resourcePath = '/merger/password';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

    
    
        $resourcePath = $this->_buildUrl($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->options)) {
            if (is_string($request->options)) {
                $_tempBody = "\"" . $request->options . "\"";   
            } else {
                $_tempBody = $request->options;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'filename' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->accessToken !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->accessToken;
        }

        $defaultHeaders = [];
        
        if ($this->config->getClientName()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getClientName();
        }

        if ($this->config->getClientVersion()) {
            $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation checkPassword
     *
     * Checks whether document is password protected
     *
     * @param Requests\checkPasswordRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Merger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GroupDocs\Merger\Model\PasswordResult
     */
    public function checkPassword(Requests\checkPasswordRequest $request)
    {
        list($response) = $this->checkPasswordWithHttpInfo($request);
        return $response;
    }

    /*
     * Operation checkPasswordWithHttpInfo
     *
     * Checks whether document is password protected
     *
     * @param Requests\checkPasswordRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Merger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GroupDocs\Merger\Model\PasswordResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkPasswordWithHttpInfo(Requests\checkPasswordRequest $request)
    {
        $returnType = '\GroupDocs\Merger\Model\PasswordResult';
        $request = $this->checkPasswordRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $responseBody = $e->getResponse()->getBody();
                $content = $responseBody->getContents();
                $error = json_decode($content);
                if(property_exists($error, 'message')) {
                    $errorCode = $e->getCode();
                    $errorMessage = $error != null && $error->message != null
                        ? $error->message
                        : $e->getMessage();
                    
                    throw new ApiException($errorMessage, $errorCode);
                }
                else {                    
                    $errorCode = $e->getCode();
                    $errorMessage = $error != null && $error->error->message != null
                        ? $error->error->message
                        : $e->getMessage();
                    
                    throw new ApiException($errorMessage, $errorCode);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode);
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\GroupDocs\Merger\Model\PasswordResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation checkPasswordAsync
     *
     * Checks whether document is password protected
     *
     * @param Requests\checkPasswordRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkPasswordAsync(Requests\checkPasswordRequest $request) 
    {
        return $this->checkPasswordAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation checkPasswordAsyncWithHttpInfo
     *
     * Checks whether document is password protected
     *
     * @param Requests\checkPasswordRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkPasswordAsyncWithHttpInfo(Requests\checkPasswordRequest $request) 
    {
        $returnType = '\GroupDocs\Merger\Model\PasswordResult';
        $request = $this->checkPasswordRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode
                    );
                }
            );
    }

    /*
     * Create request for operation 'checkPassword'
     *
     * @param Requests\checkPasswordRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function checkPasswordRequest(Requests\checkPasswordRequest $request)
    {
        // verify the required parameter 'filePath' is set
        if ($request->filePath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $filePath when calling checkPassword');
        }

        $resourcePath = '/merger/password';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->filePath !== null) {
            $localName = lcfirst('filePath');
            $localValue = is_bool($request->filePath) ? ($request->filePath ? 'true' : 'false') : $request->filePath;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storageName !== null) {
            $localName = lcfirst('storageName');
            $localValue = is_bool($request->storageName) ? ($request->storageName ? 'true' : 'false') : $request->storageName;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->versionId !== null) {
            $localName = lcfirst('versionId');
            $localValue = is_bool($request->versionId) ? ($request->versionId ? 'true' : 'false') : $request->versionId;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_buildUrl($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'filename' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->accessToken !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->accessToken;
        }

        $defaultHeaders = [];
        
        if ($this->config->getClientName()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getClientName();
        }

        if ($this->config->getClientVersion()) {
            $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation removePassword
     *
     * Remove document password protection
     *
     * @param Requests\removePasswordRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Merger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GroupDocs\Merger\Model\DocumentResult
     */
    public function removePassword(Requests\removePasswordRequest $request)
    {
        list($response) = $this->removePasswordWithHttpInfo($request);
        return $response;
    }

    /*
     * Operation removePasswordWithHttpInfo
     *
     * Remove document password protection
     *
     * @param Requests\removePasswordRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Merger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GroupDocs\Merger\Model\DocumentResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function removePasswordWithHttpInfo(Requests\removePasswordRequest $request)
    {
        $returnType = '\GroupDocs\Merger\Model\DocumentResult';
        $request = $this->removePasswordRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $responseBody = $e->getResponse()->getBody();
                $content = $responseBody->getContents();
                $error = json_decode($content);
                if(property_exists($error, 'message')) {
                    $errorCode = $e->getCode();
                    $errorMessage = $error != null && $error->message != null
                        ? $error->message
                        : $e->getMessage();
                    
                    throw new ApiException($errorMessage, $errorCode);
                }
                else {                    
                    $errorCode = $e->getCode();
                    $errorMessage = $error != null && $error->error->message != null
                        ? $error->error->message
                        : $e->getMessage();
                    
                    throw new ApiException($errorMessage, $errorCode);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode);
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\GroupDocs\Merger\Model\DocumentResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation removePasswordAsync
     *
     * Remove document password protection
     *
     * @param Requests\removePasswordRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removePasswordAsync(Requests\removePasswordRequest $request) 
    {
        return $this->removePasswordAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation removePasswordAsyncWithHttpInfo
     *
     * Remove document password protection
     *
     * @param Requests\removePasswordRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removePasswordAsyncWithHttpInfo(Requests\removePasswordRequest $request) 
    {
        $returnType = '\GroupDocs\Merger\Model\DocumentResult';
        $request = $this->removePasswordRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode
                    );
                }
            );
    }

    /*
     * Create request for operation 'removePassword'
     *
     * @param Requests\removePasswordRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function removePasswordRequest(Requests\removePasswordRequest $request)
    {
        // verify the required parameter 'options' is set
        if ($request->options === null) {
            throw new \InvalidArgumentException('Missing the required parameter $options when calling removePassword');
        }

        $resourcePath = '/merger/password';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

    
    
        $resourcePath = $this->_buildUrl($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->options)) {
            if (is_string($request->options)) {
                $_tempBody = "\"" . $request->options . "\"";   
            } else {
                $_tempBody = $request->options;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'filename' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->accessToken !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->accessToken;
        }

        $defaultHeaders = [];
        
        if ($this->config->getClientName()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getClientName();
        }

        if ($this->config->getClientVersion()) {
            $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'DELETE',
            $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('DELETE', $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation updatePassword
     *
     * Update document password
     *
     * @param Requests\updatePasswordRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Merger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GroupDocs\Merger\Model\DocumentResult
     */
    public function updatePassword(Requests\updatePasswordRequest $request)
    {
        list($response) = $this->updatePasswordWithHttpInfo($request);
        return $response;
    }

    /*
     * Operation updatePasswordWithHttpInfo
     *
     * Update document password
     *
     * @param Requests\updatePasswordRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Merger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GroupDocs\Merger\Model\DocumentResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function updatePasswordWithHttpInfo(Requests\updatePasswordRequest $request)
    {
        $returnType = '\GroupDocs\Merger\Model\DocumentResult';
        $request = $this->updatePasswordRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $responseBody = $e->getResponse()->getBody();
                $content = $responseBody->getContents();
                $error = json_decode($content);
                if(property_exists($error, 'message')) {
                    $errorCode = $e->getCode();
                    $errorMessage = $error != null && $error->message != null
                        ? $error->message
                        : $e->getMessage();
                    
                    throw new ApiException($errorMessage, $errorCode);
                }
                else {                    
                    $errorCode = $e->getCode();
                    $errorMessage = $error != null && $error->error->message != null
                        ? $error->error->message
                        : $e->getMessage();
                    
                    throw new ApiException($errorMessage, $errorCode);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode);
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\GroupDocs\Merger\Model\DocumentResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation updatePasswordAsync
     *
     * Update document password
     *
     * @param Requests\updatePasswordRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updatePasswordAsync(Requests\updatePasswordRequest $request) 
    {
        return $this->updatePasswordAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updatePasswordAsyncWithHttpInfo
     *
     * Update document password
     *
     * @param Requests\updatePasswordRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updatePasswordAsyncWithHttpInfo(Requests\updatePasswordRequest $request) 
    {
        $returnType = '\GroupDocs\Merger\Model\DocumentResult';
        $request = $this->updatePasswordRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode
                    );
                }
            );
    }

    /*
     * Create request for operation 'updatePassword'
     *
     * @param Requests\updatePasswordRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updatePasswordRequest(Requests\updatePasswordRequest $request)
    {
        // verify the required parameter 'options' is set
        if ($request->options === null) {
            throw new \InvalidArgumentException('Missing the required parameter $options when calling updatePassword');
        }

        $resourcePath = '/merger/password';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

    
    
        $resourcePath = $this->_buildUrl($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->options)) {
            if (is_string($request->options)) {
                $_tempBody = "\"" . $request->options . "\"";   
            } else {
                $_tempBody = $request->options;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'filename' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->accessToken !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->accessToken;
        }

        $defaultHeaders = [];
        
        if ($this->config->getClientName()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getClientName();
        }

        if ($this->config->getClientVersion()) {
            $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    private function _createHttpClientOption() 
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = true;
        }

        return $options;
    }
    
    /*
     * Executes response logging
     */
    private function _writeResponseLog($statusCode, $headers, $body)
    {
        $logInfo = "\nResponse: $statusCode \n";
        echo $logInfo . $this->_writeHeadersAndBody($logInfo, $headers, $body);
    }
	
    /*
     * Executes request logging
     */
    private function _writeRequestLog($method, $url, $headers, $body)
    {
        $logInfo = "\n$method: $url \n";
        echo $logInfo . $this->_writeHeadersAndBody($logInfo, $headers, $body);
    }
	
    /*
     * Executes header and boy formatting
     */
    private function _writeHeadersAndBody($logInfo, $headers, $body)
    {
        foreach ($headers as $name => $value) {
            if(is_array($value))
            {
                $logInfo .= $name . ': ';
                foreach ($value as $val)
                    $logInfo .= $val . "; ";
                $logInfo .= "\n";
            }
            else
                $logInfo .= $name . ': ' . $value . "\n";
        }
        
        return $logInfo .= "Body: " . $body . "\n";
    }

    /*
     * Executes url parsing
     */
    private function _buildUrl($url, $queryParams) 
    {
        $urlPath = trim($url, '/');
        $urlQuery = http_build_query($queryParams);
 
        $url = $this->config->getServerUrl() . '/' . $urlPath . "?" . $urlQuery;
        
        return $url;
    }
  
    /*
     * Gets a request token from server
     */
    private function _requestToken() 
    {
        if($this->accessToken == null) 
        {
            $requestUrl = $this->config->getApiBaseUrl() . "/connect/token";
            $postData = "grant_type=client_credentials" . "&client_id=" . $this->config->getAppSid() . "&client_secret=" . $this->config->getAppKey();
            try {
                $headers = [];
                $headers["Content-Type"] = "application/x-www-form-urlencoded";                
                $response = $this->client->send(new Request('POST', $requestUrl, $headers, $postData));
                $result = json_decode($response->getBody()->getContents(), true);
            
                $this->accessToken = $result["access_token"];                
            } catch (RequestException $e) {
                $responseBody = $e->getResponse()->getBody();
                $content = $responseBody->getContents();
                $error = json_decode($content);

                $errorCode = $e->getCode();
                $errorMessage = $error->error != null 
                    ? $error->error
                    : $e->getMessage();
                    
                throw new ApiException($errorMessage, $errorCode);
            }
        }
    }
  
}
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="addPasswordRequest.php">
 *   Copyright (c) 2003-2024 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Merger\Model\Requests;

/*
 * Request model for addPassword operation.
 */
class addPasswordRequest
{
    /*
     * Initializes a new instance of the addPasswordRequest class.
     *  
     * @param \GroupDocs\Merger\Model\Options $options Options to specify document name and new password
     */
    public function __construct($options)             
    {
        $this->options = $options;
    }

    /*
     * Options to specify document name and new password
     */
    public $options;
}
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="checkPasswordRequest.php">
 *   Copyright (c) 2003-2024 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Merger\Model\Requests;

/*
 * Request model for checkPassword operation.
 */
class checkPasswordRequest
{
    /*
     * Initializes a new instance of the checkPasswordRequest class.
     *  
     * @param string $filePath File path
     * @param string $storageName Storage name
     * @param string $versionId Version Id
     */
    public function __construct($filePath, $storageName = null, $versionId = null)             
    {
        $this->filePath = $filePath;
        $this->storageName = $storageName;
        $this->versionId = $versionId;
    }

    /*
     * File path
     */
    public $filePath;
	
    /*
     * Storage name
     */
    public $storageName;
	
    /*
     * Version Id
     */
    public $versionId;
}
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="removePasswordRequest.php">
 *   Copyright (c) 2003-2024 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Merger\Model\Requests;

/*
 * Request model for removePassword operation.
 */
class removePasswordRequest
{
    /*
     * Initializes a new instance of the removePasswordRequest class.
     *  
     * @param \GroupDocs\Merger\Model\Options $options Options to specify document name and current password
     */
    public function __construct($options)             
    {
        $this->options = $options;
    }

    /*
     * Options to specify document name and current password
     */
    public $options;
}
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="updatePasswordRequest.php">
 *   Copyright (c) 2003-2024 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Merger\Model\Requests;

/*
 * Request model for updatePassword operation.
 */
class updatePasswordRequest
{
    /*
     * Initializes a new instance of the updatePasswordRequest class.
     *  
     * @param \GroupDocs\Merger\Model\UpdatePasswordOptions $options Options to specify document name, current and new password
     */
    public function __construct($options)             
    {
        $this->options = $options;
    }

    /*
     * Options to specify document name, current and new password
     */
    public $options;
}
