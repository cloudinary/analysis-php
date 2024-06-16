<?php
/**
 * AnalysisApi
 * PHP version 8.1
 *
 * @package  Cloudinary\Analysis
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Analyze API (Beta)
 *
 * Use the Analyze API to analyze any external asset and return details based on the type of analysis requested.  Currently supports the following analysis options:   * [Google tagging](https://cloudinary.com/documentation/google_auto_tagging_addon)   * [Captioning](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#ai_based_image_captioning)   * [Cld Fashion](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#supported_content_aware_detection_models)   * [Coco](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#supported_content_aware_detection_models)   * [Lvis](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#supported_content_aware_detection_models)   * [Unidet](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#supported_content_aware_detection_models)   * [Human Anatomy](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#supported_content_aware_detection_models)   * [Cld Text](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#supported_content_aware_detection_models)   * [Shop Classifier](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#supported_content_aware_detection_models)    **Notes**:    * The Analyze API is currently in development and is available as a Public Beta, which means we value your feedback, so please feel free to [share any thoughts with us](https://support.cloudinary.com/hc/en-us/requests/new).   * The analysis options require an active subscription to the relevant add-on. Learn more about [registering for add-ons](https://cloudinary.com/documentation/cloudinary_add_ons#registering_for_add_ons).    The API supports both Basic Authentication using your Cloudinary API Key and API Secret (which can be found on the Dashboard page of your [Cloudinary Console](https://console.cloudinary.com/pm)) or OAuth2 ([Contact support](https://support.cloudinary.com/hc/en-us/requests/new) for more information regarding OAuth).
 *
 * The version of the OpenAPI document: 0.0.3
 * @generated Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cloudinary\Analysis\Api;

use InvalidArgumentException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Promise\PromiseInterface;
use Cloudinary\Analysis\ApiException;
use Cloudinary\Analysis\Configuration;
use Cloudinary\Analysis\HeaderSelector;
use Cloudinary\Analysis\ObjectSerializer;

/**
 * AnalysisApi Class Doc Comment
 *
 * @package  Cloudinary\Analysis
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AnalysisApi
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * @var HeaderSelector
     */
    protected HeaderSelector $headerSelector;

    /**
     * @var int Host index
     */
    protected int $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'analyzeUri' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface|null $client
     * @param Configuration|null   $config
     * @param HeaderSelector|null  $selector
     * @param int                  $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        int $hostIndex = 0
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
    public function setHostIndex(int $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex(): int
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Operation analyzeUri
     *
     * Analyze an asset
     *
     * @param  string $cloudName The name of your Cloudinary cloud (required)
     * @param  \Cloudinary\Analysis\Model\AnalyzeUriRequest $analyzeUriRequest A JSON object containing request parameters (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['analyzeUri'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Cloudinary\Analysis\Model\AnalyzeResponse|\Cloudinary\Analysis\Model\ErrorResponse|\Cloudinary\Analysis\Model\ErrorResponse|\Cloudinary\Analysis\Model\ErrorResponse|\Cloudinary\Analysis\Model\ErrorResponse|\Cloudinary\Analysis\Model\ErrorResponse|\Cloudinary\Analysis\Model\ErrorResponse
     */
    public function analyzeUri(
        string $cloudName,
        \Cloudinary\Analysis\Model\AnalyzeUriRequest $analyzeUriRequest,
        string $contentType = self::contentTypes['analyzeUri'][0]
    ): \Cloudinary\Analysis\Model\AnalyzeResponse
    {
        list($response) = $this->analyzeUriWithHttpInfo($cloudName, $analyzeUriRequest, $contentType);
        return $response;
    }

    /**
     * Operation analyzeUriWithHttpInfo
     *
     * Analyze an asset
     *
     * @param  string $cloudName The name of your Cloudinary cloud (required)
     * @param  \Cloudinary\Analysis\Model\AnalyzeUriRequest $analyzeUriRequest A JSON object containing request parameters (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['analyzeUri'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Cloudinary\Analysis\Model\AnalyzeResponse|\Cloudinary\Analysis\Model\ErrorResponse|\Cloudinary\Analysis\Model\ErrorResponse|\Cloudinary\Analysis\Model\ErrorResponse|\Cloudinary\Analysis\Model\ErrorResponse|\Cloudinary\Analysis\Model\ErrorResponse|\Cloudinary\Analysis\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function analyzeUriWithHttpInfo(
        string $cloudName,
        \Cloudinary\Analysis\Model\AnalyzeUriRequest $analyzeUriRequest,
        string $contentType = self::contentTypes['analyzeUri'][0]
    ): array
    {
        $request = $this->analyzeUriRequest($cloudName, $analyzeUriRequest, $contentType);

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
                    if ('\Cloudinary\Analysis\Model\AnalyzeResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Cloudinary\Analysis\Model\AnalyzeResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Cloudinary\Analysis\Model\AnalyzeResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Cloudinary\Analysis\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Cloudinary\Analysis\Model\ErrorResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Cloudinary\Analysis\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Cloudinary\Analysis\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Cloudinary\Analysis\Model\ErrorResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Cloudinary\Analysis\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Cloudinary\Analysis\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Cloudinary\Analysis\Model\ErrorResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Cloudinary\Analysis\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Cloudinary\Analysis\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Cloudinary\Analysis\Model\ErrorResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Cloudinary\Analysis\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 420:
                    if ('\Cloudinary\Analysis\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Cloudinary\Analysis\Model\ErrorResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Cloudinary\Analysis\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Cloudinary\Analysis\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Cloudinary\Analysis\Model\ErrorResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Cloudinary\Analysis\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Cloudinary\Analysis\Model\AnalyzeResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
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
                        '\Cloudinary\Analysis\Model\AnalyzeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Cloudinary\Analysis\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Cloudinary\Analysis\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Cloudinary\Analysis\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Cloudinary\Analysis\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 420:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Cloudinary\Analysis\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Cloudinary\Analysis\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation analyzeUriAsync
     *
     * Analyze an asset
     *
     * @param  string $cloudName The name of your Cloudinary cloud (required)
     * @param  \Cloudinary\Analysis\Model\AnalyzeUriRequest $analyzeUriRequest A JSON object containing request parameters (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['analyzeUri'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function analyzeUriAsync(
        string $cloudName,
        \Cloudinary\Analysis\Model\AnalyzeUriRequest $analyzeUriRequest,
        string $contentType = self::contentTypes['analyzeUri'][0]
    ): PromiseInterface
    {
        return $this->analyzeUriAsyncWithHttpInfo($cloudName, $analyzeUriRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation analyzeUriAsyncWithHttpInfo
     *
     * Analyze an asset
     *
     * @param  string $cloudName The name of your Cloudinary cloud (required)
     * @param  \Cloudinary\Analysis\Model\AnalyzeUriRequest $analyzeUriRequest A JSON object containing request parameters (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['analyzeUri'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function analyzeUriAsyncWithHttpInfo(
        $cloudName,
        $analyzeUriRequest,
        string $contentType = self::contentTypes['analyzeUri'][0]
    ): PromiseInterface
    {
        $returnType = '\Cloudinary\Analysis\Model\AnalyzeResponse';
        $request = $this->analyzeUriRequest($cloudName, $analyzeUriRequest, $contentType);

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
     * Create request for operation 'analyzeUri'
     *
     * @param  string $cloudName The name of your Cloudinary cloud (required)
     * @param  \Cloudinary\Analysis\Model\AnalyzeUriRequest $analyzeUriRequest A JSON object containing request parameters (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['analyzeUri'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function analyzeUriRequest(
        $cloudName,
        $analyzeUriRequest,
        string $contentType = self::contentTypes['analyzeUri'][0]
    ): Request
    {

        // verify the required parameter 'cloudName' is set
        if ($cloudName === null || (is_array($cloudName) && count($cloudName) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $cloudName when calling analyzeUri'
            );
        }

        // verify the required parameter 'analyzeUriRequest' is set
        if ($analyzeUriRequest === null || (is_array($analyzeUriRequest) && count($analyzeUriRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $analyzeUriRequest when calling analyzeUri'
            );
        }


        $resourcePath = '/{cloud_name}/analysis/analyze/uri';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($cloudName !== null) {
            $resourcePath = str_replace(
                '{' . 'cloud_name' . '}',
                ObjectSerializer::toPathValue($cloudName),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($analyzeUriRequest)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($analyzeUriRequest));
            } else {
                $httpBody = $analyzeUriRequest;
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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
    protected function createHttpClientOption(): array
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
}