# Cloudinary\Analysis\AnalysisApi

All URIs are relative to https://api.cloudinary.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**analyzeUri()**](AnalysisApi.md#analyzeUri) | **POST** /{cloud_name}/analysis/analyze/uri | Analyze an asset |


## `analyzeUri()`

```php
analyzeUri($cloudName, $analyzeUriRequest): \Cloudinary\Analysis\Model\AnalyzeResponse
```

Analyze an asset

Analyzes an asset with the requested analysis type.

### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloudName** | **string**| The name of your Cloudinary cloud | |
| **analyzeUriRequest** | [**\Cloudinary\Analysis\Model\AnalyzeUriRequest**](../Model/AnalyzeUriRequest.md)| A JSON object containing request parameters | |

### Return type

[**\Cloudinary\Analysis\Model\AnalyzeResponse**](../Model/AnalyzeResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
