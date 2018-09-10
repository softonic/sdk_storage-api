# Softonic\StorageApiSdk\FilesApi

All URIs are relative to *https://storage-v2.eu-west.sftapi.com*

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

// Configure OAuth2 access token for authorization: storage_api_access_code
$config = Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: storage_api_application
$config = Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: storage_api_implicit
$config = Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: storage_api_password
$config = Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\StorageApiSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_files = "id_files_example"; // string | SHA-1 hash of the file

try {
    $result = $apiInstance->readFile($id_files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->readFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_files** | **string**| SHA-1 hash of the file |

### Return type

[**\Softonic\StorageApiSdk\Client\Model\File**](../Model/File.md)

### Authorization

[storage_api_access_code](../../README.md#storage_api_access_code), [storage_api_application](../../README.md#storage_api_application), [storage_api_implicit](../../README.md#storage_api_implicit), [storage_api_password](../../README.md#storage_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

