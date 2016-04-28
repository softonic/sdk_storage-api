# Softonic\StorageApiSdk\UploadRequestsApi

All URIs are relative to *http://v1.storage.priv.sftapi.com*

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

$api_instance = new Softonic\StorageApiSdk\Api\UploadRequestsApi();
$body = new \Softonic\StorageApiSdk\Client\Model\UploadRequest(); // \Softonic\StorageApiSdk\Client\Model\UploadRequest | 

try { 
    $api_instance->createUploadRequest($body);
} catch (Exception $e) {
    echo 'Exception when calling UploadRequestsApi->createUploadRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Softonic\StorageApiSdk\Client\Model\UploadRequest**](\Softonic\StorageApiSdk\Client\Model\UploadRequest.md)|  | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **readUploadRequest**
> \Softonic\StorageApiSdk\Client\Model\UploadRequest readUploadRequest($id_upload_requests)

Fetches a single UploadRequest

Fetches a single UploadRequest

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\StorageApiSdk\Api\UploadRequestsApi();
$id_upload_requests = 56; // int | Upload Request ID

try { 
    $result = $api_instance->readUploadRequest($id_upload_requests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadRequestsApi->readUploadRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_upload_requests** | [**int**](.md)| Upload Request ID | 

### Return type

[**\Softonic\StorageApiSdk\Client\Model\UploadRequest**](UploadRequest.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

