<?php
/**
 * LeadSourcesApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Insightly API v2.2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v2.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * LeadSourcesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LeadSourcesApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.insight.ly/v2.2');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return LeadSourcesApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addLeadSource
     *
     * Adds a Lead Source
     *
     * @param \Swagger\Client\Model\APILeadSource $lead_source The Lead Source to add (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LeadSource
     */
    public function addLeadSource($lead_source)
    {
        list($response) = $this->addLeadSourceWithHttpInfo($lead_source);
        return $response;
    }

    /**
     * Operation addLeadSourceWithHttpInfo
     *
     * Adds a Lead Source
     *
     * @param \Swagger\Client\Model\APILeadSource $lead_source The Lead Source to add (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LeadSource, HTTP status code, HTTP response headers (array of strings)
     */
    public function addLeadSourceWithHttpInfo($lead_source)
    {
        // verify the required parameter 'lead_source' is set
        if ($lead_source === null) {
            throw new \InvalidArgumentException('Missing the required parameter $lead_source when calling addLeadSource');
        }
        // parse inputs
        $resourcePath = "/LeadSources";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($lead_source)) {
            $_tempBody = $lead_source;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\LeadSource',
                '/LeadSources'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LeadSource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LeadSource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteLeadSource
     *
     * Deletes a Lead Source
     *
     * @param int $id A Lead Source&#39;s ID (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function deleteLeadSource($id)
    {
        list($response) = $this->deleteLeadSourceWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteLeadSourceWithHttpInfo
     *
     * Deletes a Lead Source
     *
     * @param int $id A Lead Source&#39;s ID (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteLeadSourceWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteLeadSource');
        }
        // parse inputs
        $resourcePath = "/LeadSources/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json']);
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
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
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
                '/LeadSources/{id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getLeadSources
     *
     * Gets a list of Lead Sources
     *
     * @param int $skip Optional, number of lead sources to skip. (optional)
     * @param int $top Optional, maximum number of lead sources to return in the response. (optional)
     * @param bool $count_total Optional, true if total number of records should be returned in the response headers. (optional, default to false)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LeadSource[]
     */
    public function getLeadSources($skip = null, $top = null, $count_total = null)
    {
        list($response) = $this->getLeadSourcesWithHttpInfo($skip, $top, $count_total);
        return $response;
    }

    /**
     * Operation getLeadSourcesWithHttpInfo
     *
     * Gets a list of Lead Sources
     *
     * @param int $skip Optional, number of lead sources to skip. (optional)
     * @param int $top Optional, maximum number of lead sources to return in the response. (optional)
     * @param bool $count_total Optional, true if total number of records should be returned in the response headers. (optional, default to false)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LeadSource[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getLeadSourcesWithHttpInfo($skip = null, $top = null, $count_total = null)
    {
        // parse inputs
        $resourcePath = "/LeadSources";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($skip !== null) {
            $queryParams['skip'] = $this->apiClient->getSerializer()->toQueryValue($skip);
        }
        // query params
        if ($top !== null) {
            $queryParams['top'] = $this->apiClient->getSerializer()->toQueryValue($top);
        }
        // query params
        if ($count_total !== null) {
            $queryParams['count_total'] = $this->apiClient->getSerializer()->toQueryValue($count_total);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\LeadSource[]',
                '/LeadSources'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LeadSource[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LeadSource[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateLeadSource
     *
     * Updates a Lead Source
     *
     * @param \Swagger\Client\Model\APILeadSource $lead_source A Lead Source (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LeadSource
     */
    public function updateLeadSource($lead_source)
    {
        list($response) = $this->updateLeadSourceWithHttpInfo($lead_source);
        return $response;
    }

    /**
     * Operation updateLeadSourceWithHttpInfo
     *
     * Updates a Lead Source
     *
     * @param \Swagger\Client\Model\APILeadSource $lead_source A Lead Source (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LeadSource, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateLeadSourceWithHttpInfo($lead_source)
    {
        // verify the required parameter 'lead_source' is set
        if ($lead_source === null) {
            throw new \InvalidArgumentException('Missing the required parameter $lead_source when calling updateLeadSource');
        }
        // parse inputs
        $resourcePath = "/LeadSources";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($lead_source)) {
            $_tempBody = $lead_source;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\LeadSource',
                '/LeadSources'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LeadSource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LeadSource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
