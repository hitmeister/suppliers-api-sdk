<?php
/**
 * OrderUnitApi
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
 * OpenAPI spec version: 1.11.0
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
 * OrderUnitApi Class Doc Comment
 *
 * @category Class
 * @package  SMS\Suppliers
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderUnitApi
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
     * @return OrderUnitApi
     */
    public function setApiClient(\SMS\Suppliers\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation cancelOrderUnit
     *
     * Cancel an order unit
     *
     * @param string $id ID of order unit to cancel (required)
     * @param \SMS\Suppliers\Model\CancelOrderUnitRequest $body  (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return void
     */
    public function cancelOrderUnit($id, $body)
    {
        list($response) = $this->cancelOrderUnitWithHttpInfo($id, $body);
        return $response;
    }

    /**
     * Operation cancelOrderUnitWithHttpInfo
     *
     * Cancel an order unit
     *
     * @param string $id ID of order unit to cancel (required)
     * @param \SMS\Suppliers\Model\CancelOrderUnitRequest $body  (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelOrderUnitWithHttpInfo($id, $body)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling cancelOrderUnit');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling cancelOrderUnit');
        }
        // parse inputs
        $resourcePath = "/order-units/{id}/cancel";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
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
                null,
                '/order-units/{id}/cancel'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SMS\Suppliers\Model\BadRequestResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getOrderUnit
     *
     * Find order unit by ID
     *
     * @param string $id ID of order unit to return (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return \SMS\Suppliers\Model\GetFulfilmentOrderUnitResponse
     */
    public function getOrderUnit($id)
    {
        list($response) = $this->getOrderUnitWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getOrderUnitWithHttpInfo
     *
     * Find order unit by ID
     *
     * @param string $id ID of order unit to return (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return array of \SMS\Suppliers\Model\GetFulfilmentOrderUnitResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderUnitWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getOrderUnit');
        }
        // parse inputs
        $resourcePath = "/order-units/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SMS\Suppliers\Model\GetFulfilmentOrderUnitResponse',
                '/order-units/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SMS\Suppliers\Model\GetFulfilmentOrderUnitResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SMS\Suppliers\Model\GetFulfilmentOrderUnitResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation pickOrderUnit
     *
     * Change order unit status to 'picking'
     *
     * @param string $id ID of order unit to update the status (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return void
     */
    public function pickOrderUnit($id)
    {
        list($response) = $this->pickOrderUnitWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation pickOrderUnitWithHttpInfo
     *
     * Change order unit status to 'picking'
     *
     * @param string $id ID of order unit to update the status (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function pickOrderUnitWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling pickOrderUnit');
        }
        // parse inputs
        $resourcePath = "/order-units/{id}/pick";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
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
                null,
                '/order-units/{id}/pick'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation sendOrderUnit
     *
     * Send an order unit
     *
     * @param string $id ID of order unit to mark as sent (required)
     * @param \SMS\Suppliers\Model\SendOrderUnitRequest $body  (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return void
     */
    public function sendOrderUnit($id, $body)
    {
        list($response) = $this->sendOrderUnitWithHttpInfo($id, $body);
        return $response;
    }

    /**
     * Operation sendOrderUnitWithHttpInfo
     *
     * Send an order unit
     *
     * @param string $id ID of order unit to mark as sent (required)
     * @param \SMS\Suppliers\Model\SendOrderUnitRequest $body  (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendOrderUnitWithHttpInfo($id, $body)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling sendOrderUnit');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling sendOrderUnit');
        }
        // parse inputs
        $resourcePath = "/order-units/{id}/send";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
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
                null,
                '/order-units/{id}/send'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SMS\Suppliers\Model\BadRequestResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateOrderUnitShipment
     *
     * Update shipment data of the order unit
     *
     * @param string $id ID of order unit to update shipment data (required)
     * @param \SMS\Suppliers\Model\UpdateOrderUnitShipmentDataRequest $body  (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return void
     */
    public function updateOrderUnitShipment($id, $body)
    {
        list($response) = $this->updateOrderUnitShipmentWithHttpInfo($id, $body);
        return $response;
    }

    /**
     * Operation updateOrderUnitShipmentWithHttpInfo
     *
     * Update shipment data of the order unit
     *
     * @param string $id ID of order unit to update shipment data (required)
     * @param \SMS\Suppliers\Model\UpdateOrderUnitShipmentDataRequest $body  (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateOrderUnitShipmentWithHttpInfo($id, $body)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling updateOrderUnitShipment');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateOrderUnitShipment');
        }
        // parse inputs
        $resourcePath = "/order-units/{id}/shipment";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
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
                null,
                '/order-units/{id}/shipment'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SMS\Suppliers\Model\BadRequestResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
