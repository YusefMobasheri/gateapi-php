# # OrderCancel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Order ID | [optional] [readonly] 
**text** | **string** | User defined information. If not empty, must follow the rules below:  1. prefixed with &#x60;t-&#x60; 2. no longer than 28 bytes without &#x60;t-&#x60; prefix 3. can only include 0-9, A-Z, a-z, underscore(_), hyphen(-) or dot(.)  Besides user defined information, reserved contents are listed below, denoting how the order is created:  - 101: from android - 102: from IOS - 103: from IPAD - 104: from webapp - 3: from web - 2: from apiv2 - apiv4: from apiv4 | [optional] 
**amend_text** | **string** | The custom data that the user remarked when amending the order | [optional] [readonly] 
**succeeded** | **bool** | Whether the batch of orders succeeded | [optional] 
**label** | **string** | Error label, if any, otherwise an empty string | [optional] 
**message** | **string** | Detailed error message, if any, otherwise an empty string | [optional] 
**create_time** | **string** | Creation time of order | [optional] [readonly] 
**update_time** | **string** | Last modification time of order | [optional] [readonly] 
**create_time_ms** | **int** | Creation time of order (in milliseconds) | [optional] [readonly] 
**update_time_ms** | **int** | Last modification time of order (in milliseconds) | [optional] [readonly] 
**status** | **string** | Order status  - &#x60;open&#x60;: to be filled - &#x60;closed&#x60;: filled - &#x60;cancelled&#x60;: cancelled | [optional] [readonly] 
**currency_pair** | **string** | Currency pair | 
**type** | **string** | Order Type    - limit : Limit Order - market : Market Order | [optional] [default to 'limit']
**account** | **string** | Account types， spot - spot account, margin - margin account, unified - unified account, cross_margin - cross margin account.  Portfolio margin accounts can only be set to &#x60;cross_margin&#x60; | [optional] [default to 'spot']
**side** | **string** | Order side | 
**amount** | **string** | When &#x60;type&#x60; is limit, it refers to base currency.  For instance, &#x60;BTC_USDT&#x60; means &#x60;BTC&#x60;  When &#x60;type&#x60; is &#x60;market&#x60;, it refers to different currency according to &#x60;side&#x60;  - &#x60;side&#x60; : &#x60;buy&#x60; means quote currency, &#x60;BTC_USDT&#x60; means &#x60;USDT&#x60; - &#x60;side&#x60; : &#x60;sell&#x60; means base currency，&#x60;BTC_USDT&#x60; means &#x60;BTC&#x60; | 
**price** | **string** | Price can&#39;t be empty when &#x60;type&#x60;&#x3D; &#x60;limit&#x60; | [optional] 
**time_in_force** | **string** | Time in force  - gtc: GoodTillCancelled - ioc: ImmediateOrCancelled, taker only - poc: PendingOrCancelled, makes a post-only order that always enjoys a maker fee - fok: FillOrKill, fill either completely or none Only &#x60;ioc&#x60; and &#x60;fok&#x60; are supported when &#x60;type&#x60;&#x3D;&#x60;market&#x60; | [optional] [default to 'gtc']
**iceberg** | **string** | Amount to display for the iceberg order. Null or 0 for normal orders.  Hiding all amount is not supported. | [optional] 
**auto_borrow** | **bool** | Used in margin or cross margin trading to allow automatic loan of insufficient amount if balance is not enough. | [optional] 
**auto_repay** | **bool** | Enable or disable automatic repayment for automatic borrow loan generated by cross margin order. Default is disabled. Note that:  1. This field is only effective for cross margin orders. Margin account does not support setting auto repayment for orders. 2. &#x60;auto_borrow&#x60; and &#x60;auto_repay&#x60; can be both set to true in one order. | [optional] 
**left** | **string** | Amount left to fill | [optional] [readonly] 
**filled_amount** | **string** | Amount traded to fill | [optional] [readonly] 
**fill_price** | **string** | Total filled in quote currency. Deprecated in favor of &#x60;filled_total&#x60; | [optional] [readonly] 
**filled_total** | **string** | Total filled in quote currency | [optional] [readonly] 
**avg_deal_price** | **string** | Average fill price | [optional] [readonly] 
**fee** | **string** | Fee deducted | [optional] [readonly] 
**fee_currency** | **string** | Fee currency unit | [optional] [readonly] 
**point_fee** | **string** | Points used to deduct fee | [optional] [readonly] 
**gt_fee** | **string** | GT used to deduct fee | [optional] [readonly] 
**gt_maker_fee** | **string** | GT used to deduct maker fee | [optional] [readonly] 
**gt_taker_fee** | **string** | GT used to deduct taker fee | [optional] [readonly] 
**gt_discount** | **bool** | Whether GT fee discount is used | [optional] [readonly] 
**rebated_fee** | **string** | Rebated fee | [optional] [readonly] 
**rebated_fee_currency** | **string** | Rebated fee currency unit | [optional] [readonly] 
**stp_id** | **int** | Orders between users in the same &#x60;stp_id&#x60; group are not allowed to be self-traded  1. If the &#x60;stp_id&#x60; of two orders being matched is non-zero and equal, they will not be executed. Instead, the corresponding strategy will be executed based on the &#x60;stp_act&#x60; of the taker. 2. &#x60;stp_id&#x60; returns &#x60;0&#x60; by default for orders that have not been set for &#x60;STP group&#x60; | [optional] [readonly] 
**stp_act** | **string** | Self-Trading Prevention Action. Users can use this field to set self-trade prevetion strategies  1. After users join the &#x60;STP Group&#x60;, he can pass &#x60;stp_act&#x60; to limit the user&#39;s self-trade prevetion strategy. If &#x60;stp_act&#x60; is not passed, the default is &#x60;cn&#x60; strategy。 2. When the user does not join the &#x60;STP group&#x60;, an error will be returned when passing the &#x60;stp_act&#x60; parameter。 3. If the user did not use &#39;stp_act&#39; when placing the order, &#39;stp_act&#39; will return &#39;-&#39;  - cn: Cancel newest, Cancel new orders and keep old ones - co: Cancel oldest, Cancel old orders and keep new ones - cb: Cancel both, Both old and new orders will be cancelled | [optional] 
**finish_as** | **string** | How the order was finished.  - open: processing - filled: filled totally - cancelled: manually cancelled - ioc: time in force is &#x60;IOC&#x60;, finish immediately - stp: cancelled because self trade prevention | [optional] [readonly] 
**action_mode** | **string** | Processing Mode: When placing an order, different fields are returned based on action_mode. This field is only valid during the request and is not included in the response result ACK: Asynchronous mode, only returns key order fields RESULT: No clearing information FULL: Full mode (default) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)