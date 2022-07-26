<!-- <?php
$val = '{"id":"39N386145D265244A","intent":"CAPTURE","status":"COMPLETED","purchase_units":[{"reference_id":"default","amount":{"currency_code":"USD","value":"343.00"},"payee":{"email_address":"sb-93oja18398306@business.example.com","merchant_id":"CRAR7QCBUGHL2"},"shipping":{"name":{"full_name":"Amjad kazi sofhie"},"address":{"address_line_1":"1 Main St","admin_area_2":"San Jose","admin_area_1":"CA","postal_code":"95131","country_code":"US"}},"payments":{"captures":[{"id":"7P998868LB0172358","status":"COMPLETED","amount":{"currency_code":"USD","value":"343.00"},"final_capture":true,"seller_protection":{"status":"ELIGIBLE","dispute_categories":["ITEM_NOT_RECEIVED","UNAUTHORIZED_TRANSACTION"]},"create_time":"2022-07-26T17:25:52Z","update_time":"2022-07-26T17:25:52Z"}]}}],"payer":{"name":{"given_name":"Amjad kazi","surname":"sofhie"},"email_address":"sb-mtrle19484760@personal.example.com","payer_id":"JYTKFP53XGSMJ","address":{"country_code":"US"}},"create_time":"2022-07-26T17:25:43Z","update_time":"2022-07-26T17:25:52Z","links":[{"href":"https://api.sandbox.paypal.com/v2/checkout/orders/39N386145D265244A","rel":"self","method":"GET"}]}';
$dec = json_decode($val,true);

print_r($dec);
?>
<?php
// $dec["id"] --for id of transaction
// $dec["status"] --for completed or not 
// $dec["payer"]["email_address"] --for getting which email is used for make payment
// $dec["payer"]["payer_id"] --for getting which user_id is used for make payment
// $dec["payer"]["address"] --for getting which country is used for make payment//like US
//INSERT INTO forwork(order_id, status_pay, user_email, user_id, country) VALUES(

?> -->


