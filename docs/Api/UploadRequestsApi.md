# Softonic\StorageApiSdk\UploadRequestsApi

All URIs are relative to *http://storage-v2.eu-west.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUploadRequest**](UploadRequestsApi.md#createUploadRequest) | **POST** /upload-requests | Creates a new UploadRequest
[**readUploadRequest**](UploadRequestsApi.md#readUploadRequest) | **GET** /upload-requests/{id_upload_requests} | Fetches a single UploadRequest


# **createUploadRequest**
> createUploadRequest($body)

Creates a new UploadRequest

Creates a new UploadRequest

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

$apiInstance = new Softonic\StorageApiSdk\Api\UploadRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\StorageApiSdk\Client\Model\UploadRequest(); // \Softonic\StorageApiSdk\Client\Model\UploadRequest | 

try {
    $apiInstance->createUploadRequest($body);
} catch (Exception $e) {
    echo 'Exception when calling UploadRequestsApi->createUploadRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Softonic\StorageApiSdk\Client\Model\UploadRequest**](../Model/UploadRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[storage_api_access_code](../../README.md#storage_api_access_code), [storage_api_application](../../README.md#storage_api_application), [storage_api_implicit](../../README.md#storage_api_implicit), [storage_api_password](../../README.md#storage_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readUploadRequest**
> \Softonic\StorageApiSdk\Client\Model\UploadRequest readUploadRequest($id_upload_requests)

Fetches a single UploadRequest

Fetches a single UploadRequest

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

$apiInstance = new Softonic\StorageApiSdk\Api\UploadRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_upload_requests = 56; // int | Upload Request ID

try {
    $result = $apiInstance->readUploadRequest($id_upload_requests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadRequestsApi->readUploadRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_upload_requests** | **int**| Upload Request ID |

### Return type

[**\Softonic\StorageApiSdk\Client\Model\UploadRequest**](../Model/UploadRequest.md)

### Authorization

[storage_api_access_code](../../README.md#storage_api_access_code), [storage_api_application](../../README.md#storage_api_application), [storage_api_implicit](../../README.md#storage_api_implicit), [storage_api_password](../../README.md#storage_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

