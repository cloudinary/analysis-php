# Analyze API (Beta) PHP SDK

Use the Analyze API to analyze any external asset and return details based on the type of analysis requested.

Currently supports the following analysis options:
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
  "repositories": [
    {
      "type": "git",
      "url": "git@github.com:cloudinary/analysis-php.git"
    }
  ],
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

$cloudName = "your-cloud-name"; // string | The name of your Cloudinary cloud
$analyzeUriRequest = new \Cloudinary\Analysis\Model\AnalyzeUriRequest(); // \Cloudinary\Analysis\Model\AnalyzeUriRequest | A JSON object containing request parameters

try {
    $result = $apiInstance->analyzeUri($cloudName, $analyzeUriRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->analyzeUri: ', $e->getMessage(), PHP_EOL;
}
```

## API Endpoints

All URIs are relative to https://api.cloudinary.com/v2, except if the operation defines another base path.

| Class | Method | HTTP request | Description |
| ------------ | ------------- | ------------- | ------------- |
| *AnalysisApi* | [**analyzeUri**](docs/Api/AnalysisApi.md#analyzeuri) | **POST** /{cloud_name}/analysis/analyze/uri | Analyze an asset |

## Models

- [AnalysisPayload](docs/Model/AnalysisPayload.md)
- [AnalyzeResponse](docs/Model/AnalyzeResponse.md)
- [AnalyzeUriRequest](docs/Model/AnalyzeUriRequest.md)
- [AnalyzeUriRequestParameters](docs/Model/AnalyzeUriRequestParameters.md)
- [CustomParameters](docs/Model/CustomParameters.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [ErrorResponseError](docs/Model/ErrorResponseError.md)
- [TagDefinition](docs/Model/TagDefinition.md)
- [VQAGeneralParameters](docs/Model/VQAGeneralParameters.md)
- [VQAModerationParameters](docs/Model/VQAModerationParameters.md)
- [VQATaggingParameters](docs/Model/VQATaggingParameters.md)

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

- Package version: `0.0.1`
- API version: `0.0.3`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`
