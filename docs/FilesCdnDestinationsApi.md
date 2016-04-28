# Softonic\StorageApiSdk\FilesCdnDestinationsApi

All URIs are relative to *http://v1.storage.priv.sftapi.com*

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

$api_instance = new Softonic\StorageApiSdk\Api\FilesCdnDestinationsApi();
$id_files = "id_files_example"; // string | SHA-1 hash of the file
$id_cdn_destinations = "id_cdn_destinations_example"; // string | CDN destination where the file is uploaded

try { 
    $api_instance->deleteFileCdnDestination($id_files, $id_cdn_destinations);
} catch (Exception $e) {
    echo 'Exception when calling FilesCdnDestinationsApi->deleteFileCdnDestination: ', $e->getMessage(), "\n";
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

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **findFileCdnDestination**
> \Softonic\StorageApiSdk\Client\Model\FileCdnDestination[] findFileCdnDestination($id_files)

List of FileCdnDestinations

List of FileCdnDestinations

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\StorageApiSdk\Api\FilesCdnDestinationsApi();
$id_files = "id_files_example"; // string | SHA-1 hash of the file

try { 
    $result = $api_instance->findFileCdnDestination($id_files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesCdnDestinationsApi->findFileCdnDestination: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_files** | **string**| SHA-1 hash of the file | 

### Return type

[**\Softonic\StorageApiSdk\Client\Model\FileCdnDestination[]**](FileCdnDestination.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

