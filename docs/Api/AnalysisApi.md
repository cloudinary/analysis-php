# Cloudinary\Analysis\AnalysisApi

All URIs are relative to https://api.cloudinary.com/v2/analysis/CLOUD_NAME/analyze, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**analyzeAiVisionGeneral()**](AnalysisApi.md#analyzeAiVisionGeneral) | **POST** /ai_vision_general | Analyze - AI Vision General |
| [**analyzeAiVisionModeration()**](AnalysisApi.md#analyzeAiVisionModeration) | **POST** /ai_vision_moderation | Analyze - AI Vision Moderation |
| [**analyzeAiVisionTagging()**](AnalysisApi.md#analyzeAiVisionTagging) | **POST** /ai_vision_tagging | Analyze - AI Vision Tagging |
| [**analyzeCaptioning()**](AnalysisApi.md#analyzeCaptioning) | **POST** /captioning | Analyze - Captioning |
| [**analyzeCldFashion()**](AnalysisApi.md#analyzeCldFashion) | **POST** /cld_fashion | Analyze - Cld-Fashion |
| [**analyzeCldText()**](AnalysisApi.md#analyzeCldText) | **POST** /cld_text | Analyze - Cld-Text |
| [**analyzeCoco()**](AnalysisApi.md#analyzeCoco) | **POST** /coco | Analyze - Coco |
| [**analyzeCustom()**](AnalysisApi.md#analyzeCustom) | **POST** /custom | Analyze - custom model |
| [**analyzeGoogleTagging()**](AnalysisApi.md#analyzeGoogleTagging) | **POST** /google_tagging | Analyze - Google Tagging |
| [**analyzeHumanAnatomy()**](AnalysisApi.md#analyzeHumanAnatomy) | **POST** /human_anatomy | Analyze - Human Anatomy |
| [**analyzeLvis()**](AnalysisApi.md#analyzeLvis) | **POST** /lvis | Analyze - Lvis |
| [**analyzeShopClassifier()**](AnalysisApi.md#analyzeShopClassifier) | **POST** /shop_classifier | Analyze - Shop Classifier |
| [**analyzeUnidet()**](AnalysisApi.md#analyzeUnidet) | **POST** /unidet | Analyze - Unidet |


## `analyzeAiVisionGeneral()`

```php
analyzeAiVisionGeneral($analyzeAIVisionGeneralRequest): \Cloudinary\Analysis\Model\AnalyzeAIVisionGeneralResponse
```

Analyze - AI Vision General

The General mode serves a wide array of applications by providing detailed answers to diverse questions about an image. Users can inquire about any aspect of an image, such as identifying objects, understanding scenes, or interpreting text within the image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Analysis\Api\AnalysisApi();

$analyzeAIVisionGeneralRequest = new \Cloudinary\Analysis\Model\AnalyzeAIVisionGeneralRequest(); // \Cloudinary\Analysis\Model\AnalyzeAIVisionGeneralRequest | A JSON object containing request parameters

try {
    $result = $apiInstance->analyzeAiVisionGeneral($analyzeAIVisionGeneralRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->analyzeAiVisionGeneral: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **analyzeAIVisionGeneralRequest** | [**\Cloudinary\Analysis\Model\AnalyzeAIVisionGeneralRequest**](../Model/AnalyzeAIVisionGeneralRequest.md)| A JSON object containing request parameters | |

### Return type

[**\Cloudinary\Analysis\Model\AnalyzeAIVisionGeneralResponse**](../Model/AnalyzeAIVisionGeneralResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `analyzeAiVisionModeration()`

```php
analyzeAiVisionModeration($analyzeAIVisionModerationRequest): \Cloudinary\Analysis\Model\AnalyzeAIVisionModerationResponse
```

Analyze - AI Vision Moderation

The Moderation mode accepts multiple questions about an image, to which the response provides concise answers of \"yes,\" \"no,\" or \"unknown.\" This functionality allows for a nuanced evaluation of whether the image adheres to specific content policies, creative specs, or aesthetic criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Analysis\Api\AnalysisApi();

$analyzeAIVisionModerationRequest = new \Cloudinary\Analysis\Model\AnalyzeAIVisionModerationRequest(); // \Cloudinary\Analysis\Model\AnalyzeAIVisionModerationRequest | A JSON object containing request parameters

try {
    $result = $apiInstance->analyzeAiVisionModeration($analyzeAIVisionModerationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->analyzeAiVisionModeration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **analyzeAIVisionModerationRequest** | [**\Cloudinary\Analysis\Model\AnalyzeAIVisionModerationRequest**](../Model/AnalyzeAIVisionModerationRequest.md)| A JSON object containing request parameters | |

### Return type

[**\Cloudinary\Analysis\Model\AnalyzeAIVisionModerationResponse**](../Model/AnalyzeAIVisionModerationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `analyzeAiVisionTagging()`

```php
analyzeAiVisionTagging($analyzeAIVisionTaggingRequest): \Cloudinary\Analysis\Model\AnalyzeAIVisionTaggingResponse
```

Analyze - AI Vision Tagging

The Tagging mode accepts a list of tag names along with their corresponding descriptions. If the image matches the description, which may encompass various elements, it will be appropriately tagged. This approach enables customers to align with their own brand taxonomy, offering a dynamic, flexible, and open method for image classification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Analysis\Api\AnalysisApi();

$analyzeAIVisionTaggingRequest = new \Cloudinary\Analysis\Model\AnalyzeAIVisionTaggingRequest(); // \Cloudinary\Analysis\Model\AnalyzeAIVisionTaggingRequest | A JSON object containing request parameters

try {
    $result = $apiInstance->analyzeAiVisionTagging($analyzeAIVisionTaggingRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->analyzeAiVisionTagging: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **analyzeAIVisionTaggingRequest** | [**\Cloudinary\Analysis\Model\AnalyzeAIVisionTaggingRequest**](../Model/AnalyzeAIVisionTaggingRequest.md)| A JSON object containing request parameters | |

### Return type

[**\Cloudinary\Analysis\Model\AnalyzeAIVisionTaggingResponse**](../Model/AnalyzeAIVisionTaggingResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `analyzeCaptioning()`

```php
analyzeCaptioning($analyzeCaptioningRequest): \Cloudinary\Analysis\Model\AnalyzeCaptioningResponse
```

Analyze - Captioning

Provides a caption for an image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Analysis\Api\AnalysisApi();

$analyzeCaptioningRequest = new \Cloudinary\Analysis\Model\AnalyzeCaptioningRequest(); // \Cloudinary\Analysis\Model\AnalyzeCaptioningRequest | A JSON object containing request parameters

try {
    $result = $apiInstance->analyzeCaptioning($analyzeCaptioningRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->analyzeCaptioning: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **analyzeCaptioningRequest** | [**\Cloudinary\Analysis\Model\AnalyzeCaptioningRequest**](../Model/AnalyzeCaptioningRequest.md)| A JSON object containing request parameters | |

### Return type

[**\Cloudinary\Analysis\Model\AnalyzeCaptioningResponse**](../Model/AnalyzeCaptioningResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `analyzeCldFashion()`

```php
analyzeCldFashion($analyzeCldFashionRequest): \Cloudinary\Analysis\Model\AnalyzeCldFashionResponse
```

Analyze - Cld-Fashion

Analyze an image using the [Cld-Fashion](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#ai_based_image_captioning) content-aware detection model. Cloudinary's fashion model is specifically dedicated to items of clothing. The response includes attributes of the clothing identified, for example whether the garment contains pockets, its material and the fastenings used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Analysis\Api\AnalysisApi();

$analyzeCldFashionRequest = new \Cloudinary\Analysis\Model\AnalyzeCldFashionRequest(); // \Cloudinary\Analysis\Model\AnalyzeCldFashionRequest | A JSON object containing request parameters

try {
    $result = $apiInstance->analyzeCldFashion($analyzeCldFashionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->analyzeCldFashion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **analyzeCldFashionRequest** | [**\Cloudinary\Analysis\Model\AnalyzeCldFashionRequest**](../Model/AnalyzeCldFashionRequest.md)| A JSON object containing request parameters | |

### Return type

[**\Cloudinary\Analysis\Model\AnalyzeCldFashionResponse**](../Model/AnalyzeCldFashionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `analyzeCldText()`

```php
analyzeCldText($analyzeCldTextRequest): \Cloudinary\Analysis\Model\AnalyzeCldTextResponse
```

Analyze - Cld-Text

Analyze an image using the [Cld-Text](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#ai_based_image_captioning) content-aware detection model. Cloudinary's text model tells you if your image includes text, and where it's located. Used with image tagging, you can then search for images that contain blocks of text. Used with object-aware cropping, you can choose to keep only the text part, or specify a crop that avoids the text.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Analysis\Api\AnalysisApi();

$analyzeCldTextRequest = new \Cloudinary\Analysis\Model\AnalyzeCldTextRequest(); // \Cloudinary\Analysis\Model\AnalyzeCldTextRequest | A JSON object containing request parameters

try {
    $result = $apiInstance->analyzeCldText($analyzeCldTextRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->analyzeCldText: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **analyzeCldTextRequest** | [**\Cloudinary\Analysis\Model\AnalyzeCldTextRequest**](../Model/AnalyzeCldTextRequest.md)| A JSON object containing request parameters | |

### Return type

[**\Cloudinary\Analysis\Model\AnalyzeCldTextResponse**](../Model/AnalyzeCldTextResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `analyzeCoco()`

```php
analyzeCoco($analyzeCocoRequest): \Cloudinary\Analysis\Model\AnalyzeCocoResponse
```

Analyze - Coco

Analyze an image using the [Coco](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#ai_based_image_captioning) content-aware detection model. The [Common Objects in Context](https://cocodataset.org/) model contains just 80 common objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Analysis\Api\AnalysisApi();

$analyzeCocoRequest = new \Cloudinary\Analysis\Model\AnalyzeCocoRequest(); // \Cloudinary\Analysis\Model\AnalyzeCocoRequest | A JSON object containing request parameters

try {
    $result = $apiInstance->analyzeCoco($analyzeCocoRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->analyzeCoco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **analyzeCocoRequest** | [**\Cloudinary\Analysis\Model\AnalyzeCocoRequest**](../Model/AnalyzeCocoRequest.md)| A JSON object containing request parameters | |

### Return type

[**\Cloudinary\Analysis\Model\AnalyzeCocoResponse**](../Model/AnalyzeCocoResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `analyzeCustom()`

```php
analyzeCustom($analyzeCustomRequest): \Cloudinary\Analysis\Model\AnalyzeCustomResponse
```

Analyze - custom model

TODO

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Analysis\Api\AnalysisApi();

$analyzeCustomRequest = new \Cloudinary\Analysis\Model\AnalyzeCustomRequest(); // \Cloudinary\Analysis\Model\AnalyzeCustomRequest | A JSON object containing request parameters

try {
    $result = $apiInstance->analyzeCustom($analyzeCustomRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->analyzeCustom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **analyzeCustomRequest** | [**\Cloudinary\Analysis\Model\AnalyzeCustomRequest**](../Model/AnalyzeCustomRequest.md)| A JSON object containing request parameters | |

### Return type

[**\Cloudinary\Analysis\Model\AnalyzeCustomResponse**](../Model/AnalyzeCustomResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `analyzeGoogleTagging()`

```php
analyzeGoogleTagging($analyzeGoogleTaggingRequest): \Cloudinary\Analysis\Model\AnalyzeGoogleTaggingResponse
```

Analyze - Google Tagging

Provides tags for an image using Google's tagging service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Analysis\Api\AnalysisApi();

$analyzeGoogleTaggingRequest = new \Cloudinary\Analysis\Model\AnalyzeGoogleTaggingRequest(); // \Cloudinary\Analysis\Model\AnalyzeGoogleTaggingRequest | A JSON object containing request parameters

try {
    $result = $apiInstance->analyzeGoogleTagging($analyzeGoogleTaggingRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->analyzeGoogleTagging: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **analyzeGoogleTaggingRequest** | [**\Cloudinary\Analysis\Model\AnalyzeGoogleTaggingRequest**](../Model/AnalyzeGoogleTaggingRequest.md)| A JSON object containing request parameters | |

### Return type

[**\Cloudinary\Analysis\Model\AnalyzeGoogleTaggingResponse**](../Model/AnalyzeGoogleTaggingResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `analyzeHumanAnatomy()`

```php
analyzeHumanAnatomy($analyzeHumanAnatomyRequest): \Cloudinary\Analysis\Model\AnalyzeHumanAnatomyResponse
```

Analyze - Human Anatomy

Analyze an image using the [Human Anatomy](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#ai_based_image_captioning) content-aware detection model. Cloudinary's human anatomy model identifies parts of the human body in an image. It works best when the majority of a human body is detected in the image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Analysis\Api\AnalysisApi();

$analyzeHumanAnatomyRequest = new \Cloudinary\Analysis\Model\AnalyzeHumanAnatomyRequest(); // \Cloudinary\Analysis\Model\AnalyzeHumanAnatomyRequest | A JSON object containing request parameters

try {
    $result = $apiInstance->analyzeHumanAnatomy($analyzeHumanAnatomyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->analyzeHumanAnatomy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **analyzeHumanAnatomyRequest** | [**\Cloudinary\Analysis\Model\AnalyzeHumanAnatomyRequest**](../Model/AnalyzeHumanAnatomyRequest.md)| A JSON object containing request parameters | |

### Return type

[**\Cloudinary\Analysis\Model\AnalyzeHumanAnatomyResponse**](../Model/AnalyzeHumanAnatomyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `analyzeLvis()`

```php
analyzeLvis($analyzeLvisRequest): \Cloudinary\Analysis\Model\AnalyzeLvisResponse
```

Analyze - Lvis

Analyze an image using the [Lvis](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#ai_based_image_captioning) content-aware detection model. The [Large Vocabulary Instance Segmentation](https://www.lvisdataset.org/) model contains thousands of general objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Analysis\Api\AnalysisApi();

$analyzeLvisRequest = new \Cloudinary\Analysis\Model\AnalyzeLvisRequest(); // \Cloudinary\Analysis\Model\AnalyzeLvisRequest | A JSON object containing request parameters

try {
    $result = $apiInstance->analyzeLvis($analyzeLvisRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->analyzeLvis: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **analyzeLvisRequest** | [**\Cloudinary\Analysis\Model\AnalyzeLvisRequest**](../Model/AnalyzeLvisRequest.md)| A JSON object containing request parameters | |

### Return type

[**\Cloudinary\Analysis\Model\AnalyzeLvisResponse**](../Model/AnalyzeLvisResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `analyzeShopClassifier()`

```php
analyzeShopClassifier($analyzeShopClassifierRequest): \Cloudinary\Analysis\Model\AnalyzeShopClassifierResponse
```

Analyze - Shop Classifier

Analyze an image using the [Shop Classifier](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#ai_based_image_captioning) content-aware detection model. Cloudinary's shop classifier model detects if the image is a product image taken in a studio, or if it's a natural image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Analysis\Api\AnalysisApi();

$analyzeShopClassifierRequest = new \Cloudinary\Analysis\Model\AnalyzeShopClassifierRequest(); // \Cloudinary\Analysis\Model\AnalyzeShopClassifierRequest | A JSON object containing request parameters

try {
    $result = $apiInstance->analyzeShopClassifier($analyzeShopClassifierRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->analyzeShopClassifier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **analyzeShopClassifierRequest** | [**\Cloudinary\Analysis\Model\AnalyzeShopClassifierRequest**](../Model/AnalyzeShopClassifierRequest.md)| A JSON object containing request parameters | |

### Return type

[**\Cloudinary\Analysis\Model\AnalyzeShopClassifierResponse**](../Model/AnalyzeShopClassifierResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `analyzeUnidet()`

```php
analyzeUnidet($analyzeUnidetRequest): \Cloudinary\Analysis\Model\AnalyzeUnidetResponse
```

Analyze - Unidet

Analyze an image using the [Unidet](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#ai_based_image_captioning) content-aware detection model. The [UniDet](https://github.com/xingyizhou/UniDet) model is a unified model, combining a number of object models, including [Objects365](https://www.objects365.org/overview.html), which focuses on diverse objects in the wild.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Analysis\Api\AnalysisApi();

$analyzeUnidetRequest = new \Cloudinary\Analysis\Model\AnalyzeUnidetRequest(); // \Cloudinary\Analysis\Model\AnalyzeUnidetRequest | A JSON object containing request parameters

try {
    $result = $apiInstance->analyzeUnidet($analyzeUnidetRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->analyzeUnidet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **analyzeUnidetRequest** | [**\Cloudinary\Analysis\Model\AnalyzeUnidetRequest**](../Model/AnalyzeUnidetRequest.md)| A JSON object containing request parameters | |

### Return type

[**\Cloudinary\Analysis\Model\AnalyzeUnidetResponse**](../Model/AnalyzeUnidetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
