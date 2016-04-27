# Softonic\StorageApiSdk\ScanBinariesCallbacksApi

All URIs are relative to *http://v1.virus-total.priv.sftapi.com.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createScanBinaryCallback**](ScanBinariesCallbacksApi.md#createScanBinaryCallback) | **POST** /scan-binaries/{id_scan_binary}/callbacks | Creates a new ScanBinaryCallback


# **createScanBinaryCallback**
> createScanBinaryCallback($id_scan_binary, $body)

Creates a new ScanBinaryCallback

Creates a new ScanBinaryCallback

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\StorageApiSdk\Api\ScanBinariesCallbacksApi();
$id_scan_binary = "id_scan_binary_example"; // string | Scan UUID
$body = new \Softonic\StorageApiSdk\Client\Model\ScanBinaryCallback(); // \Softonic\StorageApiSdk\Client\Model\ScanBinaryCallback | 

try { 
    $api_instance->createScanBinaryCallback($id_scan_binary, $body);
} catch (Exception $e) {
    echo 'Exception when calling ScanBinariesCallbacksApi->createScanBinaryCallback: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_scan_binary** | **string**| Scan UUID | 
 **body** | [**\Softonic\StorageApiSdk\Client\Model\ScanBinaryCallback**](\Softonic\StorageApiSdk\Client\Model\ScanBinaryCallback.md)|  | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

