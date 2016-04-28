# Softonic\StorageApiSdk\FilesApi

All URIs are relative to *http://v1.storage.priv.sftapi.com.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**readFile**](FilesApi.md#readFile) | **GET** /files/{id_files} | Fetches a single File


# **readFile**
> \Softonic\StorageApiSdk\Client\Model\File readFile($id_files)

Fetches a single File

Fetches a single File

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\StorageApiSdk\Api\FilesApi();
$id_files = "id_files_example"; // string | SHA-1 hash of the file

try { 
    $result = $api_instance->readFile($id_files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->readFile: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_files** | **string**| SHA-1 hash of the file | 

### Return type

[**\Softonic\StorageApiSdk\Client\Model\File**](File.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

