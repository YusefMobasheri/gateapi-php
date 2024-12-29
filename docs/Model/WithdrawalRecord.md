# # WithdrawalRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Record ID | [optional] [readonly] 
**txid** | **string** | Hash record of the withdrawal | [optional] [readonly] 
**block_number** | **string** | 区块编号 | [optional] [readonly] 
**withdraw_order_id** | **string** | Client order id, up to 32 length and can only include 0-9, A-Z, a-z, underscore(_), hyphen(-) or dot(.) | [optional] 
**timestamp** | **string** | Operation time | [optional] [readonly] 
**amount** | **string** | Currency amount | 
**fee** | **string** | fee | [optional] [readonly] 
**currency** | **string** | Currency name | 
**address** | **string** | Withdrawal address. Required for withdrawals | [optional] 
**memo** | **string** | Additional remarks with regards to the withdrawal | [optional] 
**status** | **string** | 交易状态  - DONE: 完成 (block_number &gt; 0 才算真的上链完成) - CANCEL: 已取消 - REQUEST: 请求中 - MANUAL: 待人工审核 - BCODE: 充值码操作 - EXTPEND: 已经发送等待确认 - FAIL: 链上失败等待确认 - INVALID: 无效订单 - VERIFY: 验证中 - PROCES: 处理中 - PEND: 处理中 - DMOVE: 待人工审核 - SPLITPEND: cny提现大于5w,自动分单 | [optional] [readonly] 
**chain** | **string** | Name of the chain used in withdrawals | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)