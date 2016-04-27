# Softonic\StorageApiSdk\ScanUrlsApi

All URIs are relative to *http://v1.virus-total.priv.sftapi.com.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createScanUrl**](ScanUrlsApi.md#createScanUrl) | **POST** /scan-urls | Creates a new ScanUrl
[**deleteScanUrl**](ScanUrlsApi.md#deleteScanUrl) | **DELETE** /scan-urls/{id_scan_url} | Deletes a ScanUrl
[**findScanUrl**](ScanUrlsApi.md#findScanUrl) | **GET** /scan-urls | List of ScanUrls
[**readScanUrl**](ScanUrlsApi.md#readScanUrl) | **GET** /scan-urls/{id_scan_url} | Fetches a single ScanUrl
[**updateScanUrl**](ScanUrlsApi.md#updateScanUrl) | **PATCH** /scan-urls/{id_scan_url} | Partially updates a ScanUrl


# **createScanUrl**
> createScanUrl($body)

Creates a new ScanUrl

Creates a new ScanUrl

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

$api_instance = new Softonic\StorageApiSdk\Api\ScanUrlsApi();
$body = new \Softonic\StorageApiSdk\Client\Model\ScanUrl(); // \Softonic\StorageApiSdk\Client\Model\ScanUrl | 

try { 
    $api_instance->createScanUrl($body);
} catch (Exception $e) {
    echo 'Exception when calling ScanUrlsApi->createScanUrl: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Softonic\StorageApiSdk\Client\Model\ScanUrl**](\Softonic\StorageApiSdk\Client\Model\ScanUrl.md)|  | [optional] 

### Return type

void (empty response body)

### Authorization

[virus_total_api_implicit](../README.md#virus_total_api_implicit), [virus_total_api_password](../README.md#virus_total_api_password), [virus_total_api_access_code](../README.md#virus_total_api_access_code), [virus_total_api_application](../README.md#virus_total_api_application)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteScanUrl**
> deleteScanUrl($id_scan_url)

Deletes a ScanUrl

Deletes a ScanUrl

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

$api_instance = new Softonic\StorageApiSdk\Api\ScanUrlsApi();
$id_scan_url = "id_scan_url_example"; // string | Scan UUID

try { 
    $api_instance->deleteScanUrl($id_scan_url);
} catch (Exception $e) {
    echo 'Exception when calling ScanUrlsApi->deleteScanUrl: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_scan_url** | **string**| Scan UUID | 

### Return type

void (empty response body)

### Authorization

[virus_total_api_implicit](../README.md#virus_total_api_implicit), [virus_total_api_password](../README.md#virus_total_api_password), [virus_total_api_access_code](../README.md#virus_total_api_access_code), [virus_total_api_application](../README.md#virus_total_api_application)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **findScanUrl**
> \Softonic\StorageApiSdk\Client\Model\ScanUrl[] findScanUrl()

List of ScanUrls

List of ScanUrls

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

$api_instance = new Softonic\StorageApiSdk\Api\ScanUrlsApi();

try { 
    $result = $api_instance->findScanUrl();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScanUrlsApi->findScanUrl: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Softonic\StorageApiSdk\Client\Model\ScanUrl[]**](ScanUrl.md)

### Authorization

[virus_total_api_implicit](../README.md#virus_total_api_implicit), [virus_total_api_password](../README.md#virus_total_api_password), [virus_total_api_access_code](../README.md#virus_total_api_access_code), [virus_total_api_application](../README.md#virus_total_api_application)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **readScanUrl**
> \Softonic\StorageApiSdk\Client\Model\ScanUrl readScanUrl($id_scan_url)

Fetches a single ScanUrl

Fetches a single ScanUrl

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

$api_instance = new Softonic\StorageApiSdk\Api\ScanUrlsApi();
$id_scan_url = "id_scan_url_example"; // string | Scan UUID

try { 
    $result = $api_instance->readScanUrl($id_scan_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScanUrlsApi->readScanUrl: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_scan_url** | **string**| Scan UUID | 

### Return type

[**\Softonic\StorageApiSdk\Client\Model\ScanUrl**](ScanUrl.md)

### Authorization

[virus_total_api_implicit](../README.md#virus_total_api_implicit), [virus_total_api_password](../README.md#virus_total_api_password), [virus_total_api_access_code](../README.md#virus_total_api_access_code), [virus_total_api_application](../README.md#virus_total_api_application)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateScanUrl**
> updateScanUrl($id_scan_url, $body)

Partially updates a ScanUrl

Partially updates a ScanUrl

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

$api_instance = new Softonic\StorageApiSdk\Api\ScanUrlsApi();
$id_scan_url = "id_scan_url_example"; // string | Scan UUID
$body = new \Softonic\StorageApiSdk\Client\Model\ScanUrl(); // \Softonic\StorageApiSdk\Client\Model\ScanUrl | 

try { 
    $api_instance->updateScanUrl($id_scan_url, $body);
} catch (Exception $e) {
    echo 'Exception when calling ScanUrlsApi->updateScanUrl: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_scan_url** | **string**| Scan UUID | 
 **body** | [**\Softonic\StorageApiSdk\Client\Model\ScanUrl**](\Softonic\StorageApiSdk\Client\Model\ScanUrl.md)|  | [optional] 

### Return type

void (empty response body)

### Authorization

[virus_total_api_implicit](../README.md#virus_total_api_implicit), [virus_total_api_password](../README.md#virus_total_api_password), [virus_total_api_access_code](../README.md#virus_total_api_access_code), [virus_total_api_application](../README.md#virus_total_api_application)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

