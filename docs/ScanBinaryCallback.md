# ScanBinaryCallback

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_scan_binary** | **string** | Scan UUID | 
**scan_id** | **string** | VirusTotal API scan identifier (sha256-timestamp) | 
**sha1** | **string** | SHA-1 hash of the file | [optional] 
**sha256** | **string** | SHA-256 hash of the file | [optional] 
**md5** | **string** | MD5 hash of the file | [optional] 
**scan_date** | [**\DateTime**](\DateTime.md) | Date and time when the scan was done | [optional] 
**total** | **int** | Total of antivirus that scanned the file | [optional] 
**positives** | **int** | Number of antivirus that gave a positive when scanning the file | [optional] 
**scans** | [**string[][]**](array.md) | Scan result for each antivirus | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


