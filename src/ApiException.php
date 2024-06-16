<?php
/**
 * ApiException
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

namespace Cloudinary\Analysis;

use Exception;
use stdClass;

/**
 * ApiException Class Doc Comment
 *
 * @package  Cloudinary\Analysis
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApiException extends Exception
{
    /**
     * The HTTP body of the server response either as Json or string.
     *
     * @var stdClass|string|null
     */
    protected stdClass|string|null $responseBody;

    /**
     * The HTTP header of the server response.
     *
     * @var string[]|null
     */
    protected ?array $responseHeaders;

    /**
     * The deserialized response object
     *
     * @var mixed
     */
    protected mixed $responseObject = null;

    /**
     * Constructor
     *
     * @param string                $message         Error message
     * @param int                   $code            HTTP status code
     * @param string[]|null         $responseHeaders HTTP response header
     * @param mixed $responseBody    HTTP decoded body of the server response either as stdClass or string
     */
    public function __construct(string $message = "", int $code = 0, ?array $responseHeaders = [], mixed $responseBody = null)
    {
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    /**
     * Gets the HTTP response header
     *
     * @return string[]|null HTTP response header
     */
    public function getResponseHeaders(): ?array
    {
        return $this->responseHeaders;
    }

    /**
     * Gets the HTTP body of the server response either as Json or string
     *
     * @return stdClass|string|null HTTP body of the server response either as \stdClass or string
     */
    public function getResponseBody(): stdClass|string|null
    {
        return $this->responseBody;
    }

    /**
     * Sets the deserialized response object (during deserialization)
     *
     * @param mixed $obj Deserialized response object
     *
     * @return void
     */
    public function setResponseObject(mixed $obj): void
    {
        $this->responseObject = $obj;
    }

    /**
     * Gets the deserialized response object (during deserialization)
     *
     * @return mixed the deserialized response object
     */
    public function getResponseObject(): mixed
    {
        return $this->responseObject;
    }
}