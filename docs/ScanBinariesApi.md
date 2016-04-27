# Softonic\StorageApiSdk\ScanBinariesApi

All URIs are relative to *http://v1.virus-total.priv.sftapi.com.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createScanBinary**](ScanBinariesApi.md#createScanBinary) | **POST** /scan-binaries | Creates a new ScanBinary
[**deleteScanBinary**](ScanBinariesApi.md#deleteScanBinary) | **DELETE** /scan-binaries/{id_scan_binary} | Deletes a ScanBinary
[**findScanBinary**](ScanBinariesApi.md#findScanBinary) | **GET** /scan-binaries | List of ScanBinarys
[**readScanBinary**](ScanBinariesApi.md#readScanBinary) | **GET** /scan-binaries/{id_scan_binary} | Fetches a single ScanBinary
[**updateScanBinary**](ScanBinariesApi.md#updateScanBinary) | **PATCH** /scan-binaries/{id_scan_binary} | Partially updates a ScanBinary


# **createScanBinary**
> createScanBinary($body)

Creates a new ScanBinary

Creates a new ScanBinary

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: virus_total_api_implicit
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: virus_total_api_password
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: virus_total_api_access_code
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: virus_total_api_application
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\StorageApiSdk\Api\ScanBinariesApi();
$body = new \Softonic\StorageApiSdk\Client\Model\ScanBinary(); // \Softonic\StorageApiSdk\Client\Model\ScanBinary | 

try { 
    $api_instance->createScanBinary($body);
} catch (Exception $e) {
    echo 'Exception when calling ScanBinariesApi->createScanBinary: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Softonic\StorageApiSdk\Client\Model\ScanBinary**](\Softonic\StorageApiSdk\Client\Model\ScanBinary.md)|  | [optional] 

### Return type

void (empty response body)

### Authorization

[virus_total_api_implicit](../README.md#virus_total_api_implicit), [virus_total_api_password](../README.md#virus_total_api_password), [virus_total_api_access_code](../README.md#virus_total_api_access_code), [virus_total_api_application](../README.md#virus_total_api_application)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteScanBinary**
> deleteScanBinary($id_scan_binary)

Deletes a ScanBinary

Deletes a ScanBinary

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: virus_total_api_implicit
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: virus_total_api_password
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: virus_total_api_access_code
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: virus_total_api_application
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\StorageApiSdk\Api\ScanBinariesApi();
$id_scan_binary = "id_scan_binary_example"; // string | Scan UUID

try { 
    $api_instance->deleteScanBinary($id_scan_binary);
} catch (Exception $e) {
    echo 'Exception when calling ScanBinariesApi->deleteScanBinary: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_scan_binary** | **string**| Scan UUID | 

### Return type

void (empty response body)

### Authorization

[virus_total_api_implicit](../README.md#virus_total_api_implicit), [virus_total_api_password](../README.md#virus_total_api_password), [virus_total_api_access_code](../README.md#virus_total_api_access_code), [virus_total_api_application](../README.md#virus_total_api_application)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **findScanBinary**
> \Softonic\StorageApiSdk\Client\Model\ScanBinary[] findScanBinary()

List of ScanBinarys

List of ScanBinarys

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: virus_total_api_implicit
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: virus_total_api_password
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: virus_total_api_access_code
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: virus_total_api_application
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\StorageApiSdk\Api\ScanBinariesApi();

try { 
    $result = $api_instance->findScanBinary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScanBinariesApi->findScanBinary: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Softonic\StorageApiSdk\Client\Model\ScanBinary[]**](ScanBinary.md)

### Authorization

[virus_total_api_implicit](../README.md#virus_total_api_implicit), [virus_total_api_password](../README.md#virus_total_api_password), [virus_total_api_access_code](../README.md#virus_total_api_access_code), [virus_total_api_application](../README.md#virus_total_api_application)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **readScanBinary**
> \Softonic\StorageApiSdk\Client\Model\ScanBinary readScanBinary($id_scan_binary)

Fetches a single ScanBinary

Fetches a single ScanBinary

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: virus_total_api_implicit
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: virus_total_api_password
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: virus_total_api_access_code
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: virus_total_api_application
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\StorageApiSdk\Api\ScanBinariesApi();
$id_scan_binary = "id_scan_binary_example"; // string | Scan UUID

try { 
    $result = $api_instance->readScanBinary($id_scan_binary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScanBinariesApi->readScanBinary: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_scan_binary** | **string**| Scan UUID | 

### Return type

[**\Softonic\StorageApiSdk\Client\Model\ScanBinary**](ScanBinary.md)

### Authorization

[virus_total_api_implicit](../README.md#virus_total_api_implicit), [virus_total_api_password](../README.md#virus_total_api_password), [virus_total_api_access_code](../README.md#virus_total_api_access_code), [virus_total_api_application](../README.md#virus_total_api_application)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateScanBinary**
> updateScanBinary($id_scan_binary, $body)

Partially updates a ScanBinary

Partially updates a ScanBinary

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: virus_total_api_implicit
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: virus_total_api_password
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: virus_total_api_access_code
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: virus_total_api_application
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\StorageApiSdk\Api\ScanBinariesApi();
$id_scan_binary = "id_scan_binary_example"; // string | Scan UUID
$body = new \Softonic\StorageApiSdk\Client\Model\ScanBinary(); // \Softonic\StorageApiSdk\Client\Model\ScanBinary | 

try { 
    $api_instance->updateScanBinary($id_scan_binary, $body);
} catch (Exception $e) {
    echo 'Exception when calling ScanBinariesApi->updateScanBinary: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_scan_binary** | **string**| Scan UUID | 
 **body** | [**\Softonic\StorageApiSdk\Client\Model\ScanBinary**](\Softonic\StorageApiSdk\Client\Model\ScanBinary.md)|  | [optional] 

### Return type

void (empty response body)

### Authorization

[virus_total_api_implicit](../README.md#virus_total_api_implicit), [virus_total_api_password](../README.md#virus_total_api_password), [virus_total_api_access_code](../README.md#virus_total_api_access_code), [virus_total_api_application](../README.md#virus_total_api_application)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

