# Softonic\StorageApiSdk\UploadRequestsApi

All URIs are relative to *https://storage.sftapi.com*

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
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: storage_api_application
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: storage_api_implicit
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: storage_api_password
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\StorageApiSdk\Api\UploadRequestsApi();
$body = new \Softonic\StorageApiSdk\Model\UploadRequest(); // \Softonic\StorageApiSdk\Model\UploadRequest | 

try {
    $api_instance->createUploadRequest($body);
} catch (Exception $e) {
    echo 'Exception when calling UploadRequestsApi->createUploadRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Softonic\StorageApiSdk\Model\UploadRequest**](../Model/\Softonic\StorageApiSdk\Model\UploadRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[storage_api_access_code](../../README.md#storage_api_access_code), [storage_api_application](../../README.md#storage_api_application), [storage_api_implicit](../../README.md#storage_api_implicit), [storage_api_password](../../README.md#storage_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readUploadRequest**
> \Softonic\StorageApiSdk\Model\UploadRequest readUploadRequest($id_upload_requests)

Fetches a single UploadRequest

Fetches a single UploadRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: storage_api_access_code
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: storage_api_application
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: storage_api_implicit
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: storage_api_password
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\StorageApiSdk\Api\UploadRequestsApi();
$id_upload_requests = 56; // int | Upload Request ID

try {
    $result = $api_instance->readUploadRequest($id_upload_requests);
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

[**\Softonic\StorageApiSdk\Model\UploadRequest**](../Model/UploadRequest.md)

### Authorization

[storage_api_access_code](../../README.md#storage_api_access_code), [storage_api_application](../../README.md#storage_api_application), [storage_api_implicit](../../README.md#storage_api_implicit), [storage_api_password](../../README.md#storage_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

