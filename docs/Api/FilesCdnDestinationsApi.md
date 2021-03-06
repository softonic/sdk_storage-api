# Softonic\StorageApiSdk\FilesCdnDestinationsApi

All URIs are relative to *https://storage-v2.eu-west.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteFileCdnDestination**](FilesCdnDestinationsApi.md#deleteFileCdnDestination) | **DELETE** /files/{id_files}/cdn-destinations/{id_cdn_destinations} | Deletes a FileCdnDestination
[**findFileCdnDestination**](FilesCdnDestinationsApi.md#findFileCdnDestination) | **GET** /files/{id_files}/cdn-destinations | List of FileCdnDestinations


# **deleteFileCdnDestination**
> deleteFileCdnDestination($id_files, $id_cdn_destinations)

Deletes a FileCdnDestination

Deletes a FileCdnDestination

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: storage_api_access_code
$config = Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: storage_api_application
$config = Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: storage_api_implicit
$config = Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: storage_api_password
$config = Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\StorageApiSdk\Api\FilesCdnDestinationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_files = "id_files_example"; // string | SHA-1 hash of the file
$id_cdn_destinations = "id_cdn_destinations_example"; // string | CDN destination where the file is uploaded

try {
    $apiInstance->deleteFileCdnDestination($id_files, $id_cdn_destinations);
} catch (Exception $e) {
    echo 'Exception when calling FilesCdnDestinationsApi->deleteFileCdnDestination: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_files** | **string**| SHA-1 hash of the file |
 **id_cdn_destinations** | **string**| CDN destination where the file is uploaded |

### Return type

void (empty response body)

### Authorization

[storage_api_access_code](../../README.md#storage_api_access_code), [storage_api_application](../../README.md#storage_api_application), [storage_api_implicit](../../README.md#storage_api_implicit), [storage_api_password](../../README.md#storage_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findFileCdnDestination**
> \Softonic\StorageApiSdk\Client\Model\FileCdnDestination[] findFileCdnDestination($id_files)

List of FileCdnDestinations

List of FileCdnDestinations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: storage_api_access_code
$config = Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: storage_api_application
$config = Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: storage_api_implicit
$config = Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: storage_api_password
$config = Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\StorageApiSdk\Api\FilesCdnDestinationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_files = "id_files_example"; // string | SHA-1 hash of the file

try {
    $result = $apiInstance->findFileCdnDestination($id_files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesCdnDestinationsApi->findFileCdnDestination: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_files** | **string**| SHA-1 hash of the file |

### Return type

[**\Softonic\StorageApiSdk\Client\Model\FileCdnDestination[]**](../Model/FileCdnDestination.md)

### Authorization

[storage_api_access_code](../../README.md#storage_api_access_code), [storage_api_application](../../README.md#storage_api_application), [storage_api_implicit](../../README.md#storage_api_implicit), [storage_api_password](../../README.md#storage_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

