# Document

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The document&#x27;s unique identifier. | [optional] 
**invoice_number** | **string** | The document&#x27;s invoice number. | [optional] 
**type** | [**\Billingo\Model\DocumentType**](DocumentType.md) |  | [optional] 
**cancelled** | **bool** |  | [optional] 
**block_id** | **int** | DocumentBlock&#x27;s identifier. | [optional] 
**payment_status** | [**\Billingo\Model\PaymentStatus**](PaymentStatus.md) |  | [optional] 
**payment_method** | [**\Billingo\Model\PaymentMethod**](PaymentMethod.md) |  | [optional] 
**gross_total** | **float** | The document&#x27;s gross total price. | [optional] 
**currency** | [**\Billingo\Model\Currency**](Currency.md) |  | [optional] 
**conversion_rate** | **float** |  | [optional] 
**invoice_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**fulfillment_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**paid_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**organization** | [**\Billingo\Model\DocumentOrganization**](DocumentOrganization.md) |  | [optional] 
**partner** | [**\Billingo\Model\Partner**](Partner.md) |  | [optional] 
**document_partner** | [**\Billingo\Model\DocumentPartner**](DocumentPartner.md) |  | [optional] 
**electronic** | **bool** |  | [optional] 
**comment** | **string** |  | [optional] 
**tags** | **string[]** |  | [optional] 
**notification_status** | [**\Billingo\Model\DocumentNotificationStatus**](DocumentNotificationStatus.md) |  | [optional] 
**language** | [**\Billingo\Model\DocumentLanguage**](DocumentLanguage.md) |  | [optional] 
**items** | [**\Billingo\Model\DocumentItem[]**](DocumentItem.md) |  | [optional] 
**summary** | [**\Billingo\Model\DocumentSummary**](DocumentSummary.md) |  | [optional] 
**settings** | [**\Billingo\Model\DocumentSettings**](DocumentSettings.md) |  | [optional] 
**related_documents** | [**\Billingo\Model\DocumentAncestor[]**](DocumentAncestor.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

