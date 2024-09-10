Analyze API (Beta) PHP SDK
==================

Use the Analyze API to analyze any external asset and return details based on the type of analysis requested.

Currently supports the following analysis options:
  * [AI Vision - Tagging](https://cloudinary.com/documentation/cloudinary_ai_vision_addon#tagging_mode)
  * [AI Vision - Moderation](https://cloudinary.com/documentation/cloudinary_ai_vision_addon#moderation_mode)
  * [AI Vision - General](https://cloudinary.com/documentation/cloudinary_ai_vision_addon#general_mode)
  * [Google tagging](https://cloudinary.com/documentation/google_auto_tagging_addon)
  * [Captioning](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#ai_based_image_captioning)
  * [Cld Fashion](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#supported_content_aware_detection_models)
  * [Coco](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#supported_content_aware_detection_models)
  * [Lvis](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#supported_content_aware_detection_models)
  * [Unidet](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#supported_content_aware_detection_models)
  * [Human Anatomy](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#supported_content_aware_detection_models)
  * [Cld Text](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#supported_content_aware_detection_models)
  * [Shop Classifier](https://cloudinary.com/documentation/cloudinary_ai_content_analysis_addon#supported_content_aware_detection_models)

  **Notes**: 
  * The Analyze API is currently in development and is available as a Public Beta, which means we value your feedback, so please feel free to [share any thoughts with us](https://support.cloudinary.com/hc/en-us/requests/new).
  * The analysis options require an active subscription to the relevant add-on. Learn more about [registering for add-ons](https://cloudinary.com/documentation/cloudinary_add_ons#registering_for_add_ons).

  The API supports both Basic Authentication using your Cloudinary API Key and API Secret (which can be found on the Dashboard page of your [Cloudinary Console](https://console.cloudinary.com/pm)) or OAuth2 ([Contact support](https://support.cloudinary.com/hc/en-us/requests/new) for more information regarding OAuth).


For more information, please visit [https://cloudinary.com/documentation/analyze_api_reference](https://cloudinary.com/documentation/analyze_api_reference).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "cloudinary/analysis": "*"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/analysis/vendor/autoload.php');
```


## Configuration

The API uses **Basic Authentication** over HTTPS.

You can find your product environment configuration credentials in the API Keys page of the Cloudinary Console [Dashboard](https://console.cloudinary.com/pm/developer-dashboard).

You can either pass configuration with each `$apiInstance` initialization:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
// $config = Cloudinary\Analysis\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Cloudinary URL: basicAuth
$config = Cloudinary\Analysis\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');

$apiInstance = new Cloudinary\Analysis\Api\AnalysisApi(null, $config);
```

Or set the environment variable globally.

For example, to set a temporary environment variable:

* On Mac or Linux:

    ```
    export CLOUDINARY_URL=cloudinary://key:secret@cloud_name
    ```

* On Windows:

    ```
    set CLOUDINARY_URL=cloudinary://key:secret@cloud_name
    ```

And then you can simply initialize `$apiInstance` as follows:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Analysis\Api\AnalysisApi();
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to https://api.cloudinary.com/v2/analysis/CLOUD_NAME/analyze, except if the operation defines another base path.

| Class | Method | HTTP request | Description |
| ------------ | ------------- | ------------- | ------------- |
| *AnalysisApi* | [**analyzeAiVisionGeneral**](docs/Api/AnalysisApi.md#analyzeaivisiongeneral) | **POST** /ai_vision_general | Analyze - AI Vision General |
| *AnalysisApi* | [**analyzeAiVisionModeration**](docs/Api/AnalysisApi.md#analyzeaivisionmoderation) | **POST** /ai_vision_moderation | Analyze - AI Vision Moderation |
| *AnalysisApi* | [**analyzeAiVisionTagging**](docs/Api/AnalysisApi.md#analyzeaivisiontagging) | **POST** /ai_vision_tagging | Analyze - AI Vision Tagging |
| *AnalysisApi* | [**analyzeCaptioning**](docs/Api/AnalysisApi.md#analyzecaptioning) | **POST** /captioning | Analyze - Captioning |
| *AnalysisApi* | [**analyzeCldFashion**](docs/Api/AnalysisApi.md#analyzecldfashion) | **POST** /cld_fashion | Analyze - Cld-Fashion |
| *AnalysisApi* | [**analyzeCldText**](docs/Api/AnalysisApi.md#analyzecldtext) | **POST** /cld_text | Analyze - Cld-Text |
| *AnalysisApi* | [**analyzeCoco**](docs/Api/AnalysisApi.md#analyzecoco) | **POST** /coco | Analyze - Coco |
| *AnalysisApi* | [**analyzeCustom**](docs/Api/AnalysisApi.md#analyzecustom) | **POST** /custom | Analyze - custom model |
| *AnalysisApi* | [**analyzeGoogleTagging**](docs/Api/AnalysisApi.md#analyzegoogletagging) | **POST** /google_tagging | Analyze - Google Tagging |
| *AnalysisApi* | [**analyzeHumanAnatomy**](docs/Api/AnalysisApi.md#analyzehumananatomy) | **POST** /human_anatomy | Analyze - Human Anatomy |
| *AnalysisApi* | [**analyzeLvis**](docs/Api/AnalysisApi.md#analyzelvis) | **POST** /lvis | Analyze - Lvis |
| *AnalysisApi* | [**analyzeShopClassifier**](docs/Api/AnalysisApi.md#analyzeshopclassifier) | **POST** /shop_classifier | Analyze - Shop Classifier |
| *AnalysisApi* | [**analyzeUnidet**](docs/Api/AnalysisApi.md#analyzeunidet) | **POST** /unidet | Analyze - Unidet |

## Models

- [AIVisionGeneralAnalysisData](docs/Model/AIVisionGeneralAnalysisData.md)
- [AIVisionGeneralAnalysisDataResponsesInner](docs/Model/AIVisionGeneralAnalysisDataResponsesInner.md)
- [AIVisionModerationAnalysisData](docs/Model/AIVisionModerationAnalysisData.md)
- [AIVisionModerationAnalysisDataResponsesInner](docs/Model/AIVisionModerationAnalysisDataResponsesInner.md)
- [AIVisionTaggingAnalysisData](docs/Model/AIVisionTaggingAnalysisData.md)
- [AIVisionTaggingAnalysisDataTagsInner](docs/Model/AIVisionTaggingAnalysisDataTagsInner.md)
- [AnalysisPayload](docs/Model/AnalysisPayload.md)
- [AnalysisType](docs/Model/AnalysisType.md)
- [AnalyzeAIVisionGeneralRequest](docs/Model/AnalyzeAIVisionGeneralRequest.md)
- [AnalyzeAIVisionGeneralResponse](docs/Model/AnalyzeAIVisionGeneralResponse.md)
- [AnalyzeAIVisionGeneralResponseAllOfData](docs/Model/AnalyzeAIVisionGeneralResponseAllOfData.md)
- [AnalyzeAIVisionModerationRequest](docs/Model/AnalyzeAIVisionModerationRequest.md)
- [AnalyzeAIVisionModerationResponse](docs/Model/AnalyzeAIVisionModerationResponse.md)
- [AnalyzeAIVisionModerationResponseAllOfData](docs/Model/AnalyzeAIVisionModerationResponseAllOfData.md)
- [AnalyzeAIVisionTaggingRequest](docs/Model/AnalyzeAIVisionTaggingRequest.md)
- [AnalyzeAIVisionTaggingRequestAllOfTagDefinitions](docs/Model/AnalyzeAIVisionTaggingRequestAllOfTagDefinitions.md)
- [AnalyzeAIVisionTaggingResponse](docs/Model/AnalyzeAIVisionTaggingResponse.md)
- [AnalyzeAIVisionTaggingResponseAllOfData](docs/Model/AnalyzeAIVisionTaggingResponseAllOfData.md)
- [AnalyzeCaptioningRequest](docs/Model/AnalyzeCaptioningRequest.md)
- [AnalyzeCaptioningResponse](docs/Model/AnalyzeCaptioningResponse.md)
- [AnalyzeCaptioningResponseAllOfData](docs/Model/AnalyzeCaptioningResponseAllOfData.md)
- [AnalyzeCldFashionRequest](docs/Model/AnalyzeCldFashionRequest.md)
- [AnalyzeCldFashionResponse](docs/Model/AnalyzeCldFashionResponse.md)
- [AnalyzeCldFashionResponseAllOfData](docs/Model/AnalyzeCldFashionResponseAllOfData.md)
- [AnalyzeCldTextRequest](docs/Model/AnalyzeCldTextRequest.md)
- [AnalyzeCldTextResponse](docs/Model/AnalyzeCldTextResponse.md)
- [AnalyzeCldTextResponseAllOfData](docs/Model/AnalyzeCldTextResponseAllOfData.md)
- [AnalyzeCocoRequest](docs/Model/AnalyzeCocoRequest.md)
- [AnalyzeCocoResponse](docs/Model/AnalyzeCocoResponse.md)
- [AnalyzeCocoResponseAllOfData](docs/Model/AnalyzeCocoResponseAllOfData.md)
- [AnalyzeCustomRequest](docs/Model/AnalyzeCustomRequest.md)
- [AnalyzeCustomResponse](docs/Model/AnalyzeCustomResponse.md)
- [AnalyzeCustomResponseAllOfData](docs/Model/AnalyzeCustomResponseAllOfData.md)
- [AnalyzeGoogleTaggingRequest](docs/Model/AnalyzeGoogleTaggingRequest.md)
- [AnalyzeGoogleTaggingResponse](docs/Model/AnalyzeGoogleTaggingResponse.md)
- [AnalyzeGoogleTaggingResponseAllOfData](docs/Model/AnalyzeGoogleTaggingResponseAllOfData.md)
- [AnalyzeHumanAnatomyRequest](docs/Model/AnalyzeHumanAnatomyRequest.md)
- [AnalyzeHumanAnatomyResponse](docs/Model/AnalyzeHumanAnatomyResponse.md)
- [AnalyzeHumanAnatomyResponseAllOfData](docs/Model/AnalyzeHumanAnatomyResponseAllOfData.md)
- [AnalyzeLvisRequest](docs/Model/AnalyzeLvisRequest.md)
- [AnalyzeLvisResponse](docs/Model/AnalyzeLvisResponse.md)
- [AnalyzeLvisResponseAllOfData](docs/Model/AnalyzeLvisResponseAllOfData.md)
- [AnalyzeResponse](docs/Model/AnalyzeResponse.md)
- [AnalyzeShopClassifierRequest](docs/Model/AnalyzeShopClassifierRequest.md)
- [AnalyzeShopClassifierResponse](docs/Model/AnalyzeShopClassifierResponse.md)
- [AnalyzeShopClassifierResponseAllOfData](docs/Model/AnalyzeShopClassifierResponseAllOfData.md)
- [AnalyzeUnidetRequest](docs/Model/AnalyzeUnidetRequest.md)
- [AnalyzeUnidetResponse](docs/Model/AnalyzeUnidetResponse.md)
- [AnalyzeUnidetResponseAllOfData](docs/Model/AnalyzeUnidetResponseAllOfData.md)
- [AnalyzeUriRequest](docs/Model/AnalyzeUriRequest.md)
- [BaseAnalyzeRequest](docs/Model/BaseAnalyzeRequest.md)
- [BaseAnalyzeResponse](docs/Model/BaseAnalyzeResponse.md)
- [CaptioningAnalysisData](docs/Model/CaptioningAnalysisData.md)
- [CaptioningAnalysisDataData](docs/Model/CaptioningAnalysisDataData.md)
- [CldFashionAnalysisData](docs/Model/CldFashionAnalysisData.md)
- [CldTextAnalysisData](docs/Model/CldTextAnalysisData.md)
- [CocoAnalysisData](docs/Model/CocoAnalysisData.md)
- [CustomAnalysisData](docs/Model/CustomAnalysisData.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [ErrorResponseError](docs/Model/ErrorResponseError.md)
- [Feature](docs/Model/Feature.md)
- [GoogleTaggingAnalysisData](docs/Model/GoogleTaggingAnalysisData.md)
- [GoogleTaggingAnalysisDataLabelAnnotations](docs/Model/GoogleTaggingAnalysisDataLabelAnnotations.md)
- [GoogleTaggingAnalysisDataLabelAnnotationsLabelsInner](docs/Model/GoogleTaggingAnalysisDataLabelAnnotationsLabelsInner.md)
- [HumanAnatomyAnalysisData](docs/Model/HumanAnatomyAnalysisData.md)
- [Limits](docs/Model/Limits.md)
- [LimitsUsage](docs/Model/LimitsUsage.md)
- [LvisAnalysisData](docs/Model/LvisAnalysisData.md)
- [ShopClassifierAnalysisData](docs/Model/ShopClassifierAnalysisData.md)
- [Source](docs/Model/Source.md)
- [UnidetAnalysisData](docs/Model/UnidetAnalysisData.md)

## Authorization

### basicAuth

- **Type**: HTTP basic authentication


### OAuth2

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://oauth.cloudinary.com/oauth2/auth`
- **Scopes**: 
    - **media_analysis**: Analyze media

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This Analyze API (Beta) PHP package is automatically generated.

- Package version: `0.1.0`
- API version: `0.1.0`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`
