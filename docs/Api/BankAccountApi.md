# Billingo\BankAccountApi

All URIs are relative to *https://api.billingo.hu/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBankAccount**](BankAccountApi.md#createbankaccount) | **POST** /bank-accounts | Create a bank account
[**deleteBankAccount**](BankAccountApi.md#deletebankaccount) | **DELETE** /bank-accounts/{id} | Delete a bank account
[**getBankAccount**](BankAccountApi.md#getbankaccount) | **GET** /bank-accounts/{id} | Retrieve a bank account
[**listBankAccount**](BankAccountApi.md#listbankaccount) | **GET** /bank-accounts | List all bank account
[**updateBankAccount**](BankAccountApi.md#updatebankaccount) | **PUT** /bank-accounts/{id} | Update a bank account

# **createBankAccount**
> \Billingo\Model\BankAccount createBankAccount($body)

Create a bank account

Create a new bank account. Returns a bank account object if the create is succeded.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Billingo\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Billingo\Model\BankAccount(); // \Billingo\Model\BankAccount | BankAccount object that you would like to store.

try {
    $result = $apiInstance->createBankAccount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->createBankAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Billingo\Model\BankAccount**](../Model/BankAccount.md)| BankAccount object that you would like to store. |

### Return type

[**\Billingo\Model\BankAccount**](../Model/BankAccount.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBankAccount**
> deleteBankAccount($id)

Delete a bank account

Delete an existing bank account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Billingo\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->deleteBankAccount($id);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->deleteBankAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankAccount**
> \Billingo\Model\BankAccount getBankAccount($id)

Retrieve a bank account

Retrieves the details of an existing bank account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Billingo\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->getBankAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->getBankAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Billingo\Model\BankAccount**](../Model/BankAccount.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBankAccount**
> \Billingo\Model\BankAccountList listBankAccount($page, $per_page)

List all bank account

Returns a list of your bank accounts. The bank accounts are returned sorted by creation date, with the most recent bank account appearing first.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Billingo\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | 
$per_page = 25; // int | 

try {
    $result = $apiInstance->listBankAccount($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->listBankAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional] [default to 25]

### Return type

[**\Billingo\Model\BankAccountList**](../Model/BankAccountList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBankAccount**
> \Billingo\Model\BankAccount updateBankAccount($body, $id)

Update a bank account

Update an existing bank accounts. Returns a bank account object if the update is succeded.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Billingo\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Billingo\Model\BankAccount(); // \Billingo\Model\BankAccount | Bank account object that you would like to update.
$id = 56; // int | 

try {
    $result = $apiInstance->updateBankAccount($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->updateBankAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Billingo\Model\BankAccount**](../Model/BankAccount.md)| Bank account object that you would like to update. |
 **id** | **int**|  |

### Return type

[**\Billingo\Model\BankAccount**](../Model/BankAccount.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

