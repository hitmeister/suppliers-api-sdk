<?php
/**
 * SubscriptionApi
 * PHP version 5
 *
 * @category Class
 * @package  SMS\Suppliers
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Supplier API
 *
 * This documentation describes SMS Suppliers API. To be able use this API you should have an api-key and api-username
 *
 * OpenAPI spec version: 1.3.0
 * Contact: sms.tech@real-digital.de
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SMS\Suppliers\Api;

use \SMS\Suppliers\ApiClient;
use \SMS\Suppliers\ApiException;
use \SMS\Suppliers\Configuration;
use \SMS\Suppliers\ObjectSerializer;

/**
 * SubscriptionApi Class Doc Comment
 *
 * @category Class
 * @package  SMS\Suppliers
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionApi
{
    /**
     * API Client
     *
     * @var \SMS\Suppliers\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \SMS\Suppliers\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\SMS\Suppliers\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \SMS\Suppliers\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \SMS\Suppliers\ApiClient $apiClient set the API client
     *
     * @return SubscriptionApi
     */
    public function setApiClient(\SMS\Suppliers\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createSubscription
     *
     * Create new subscription
     *
     * @param \SMS\Suppliers\Model\CreateSubscriptionRequest $body Subscription object that needs to be created (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return \SMS\Suppliers\Model\CreateSubscriptionResponse
     */
    public function createSubscription($body)
    {
        list($response) = $this->createSubscriptionWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createSubscriptionWithHttpInfo
     *
     * Create new subscription
     *
     * @param \SMS\Suppliers\Model\CreateSubscriptionRequest $body Subscription object that needs to be created (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return array of \SMS\Suppliers\Model\CreateSubscriptionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createSubscriptionWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createSubscription');
        }
        // parse inputs
        $resourcePath = "/subscriptions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-username');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-username'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SMS\Suppliers\Model\CreateSubscriptionResponse',
                '/subscriptions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SMS\Suppliers\Model\CreateSubscriptionResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SMS\Suppliers\Model\CreateSubscriptionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SMS\Suppliers\Model\BadRequestResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteSubscription
     *
     * Delete existing subscription
     *
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return void
     */
    public function deleteSubscription()
    {
        list($response) = $this->deleteSubscriptionWithHttpInfo();
        return $response;
    }

    /**
     * Operation deleteSubscriptionWithHttpInfo
     *
     * Delete existing subscription
     *
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteSubscriptionWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/subscriptions/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-username');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-username'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/subscriptions/{id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation updateSubscription
     *
     * Update existing subscription
     *
     * @param \SMS\Suppliers\Model\UpdateSubscriptionRequest $body Subscription object that needs to be created (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return \SMS\Suppliers\Model\UpdateSubscriptionResponse
     */
    public function updateSubscription($body)
    {
        list($response) = $this->updateSubscriptionWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation updateSubscriptionWithHttpInfo
     *
     * Update existing subscription
     *
     * @param \SMS\Suppliers\Model\UpdateSubscriptionRequest $body Subscription object that needs to be created (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return array of \SMS\Suppliers\Model\UpdateSubscriptionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateSubscriptionWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateSubscription');
        }
        // parse inputs
        $resourcePath = "/subscriptions/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-username');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-username'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SMS\Suppliers\Model\UpdateSubscriptionResponse',
                '/subscriptions/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SMS\Suppliers\Model\UpdateSubscriptionResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SMS\Suppliers\Model\UpdateSubscriptionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SMS\Suppliers\Model\BadRequestResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation viewSubscription
     *
     * View existing subscription
     *
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return \SMS\Suppliers\Model\ViewSubscriptionResponse
     */
    public function viewSubscription()
    {
        list($response) = $this->viewSubscriptionWithHttpInfo();
        return $response;
    }

    /**
     * Operation viewSubscriptionWithHttpInfo
     *
     * View existing subscription
     *
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return array of \SMS\Suppliers\Model\ViewSubscriptionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function viewSubscriptionWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/subscriptions/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-username');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-username'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SMS\Suppliers\Model\ViewSubscriptionResponse',
                '/subscriptions/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SMS\Suppliers\Model\ViewSubscriptionResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SMS\Suppliers\Model\ViewSubscriptionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation viewSubscriptions
     *
     * Get all existing subscriptions
     *
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return void
     */
    public function viewSubscriptions()
    {
        list($response) = $this->viewSubscriptionsWithHttpInfo();
        return $response;
    }

    /**
     * Operation viewSubscriptionsWithHttpInfo
     *
     * Get all existing subscriptions
     *
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function viewSubscriptionsWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/subscriptions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-username');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-username'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/subscriptions'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
