<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width"/>
    <title></title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
<form id="idFormAioCheckOut" method="post" action="Ecpay.php">
    <label>動作 (Action):<input type="text" name="ServiceURL" value="https://payment-stage.ecpay.com.tw/Cashier/AioCheckOut/V5" class="form-control"/></label>
    <label>編號 (MerchantTradeNo):
        <input type="text" name="MerchantTradeNo" value="oikidA0000001" class="form-control"/>
        不可重複使用。英數字大小寫混合
    </lael>
    <label class="col-xs-12">時間 (MerchantTradeDate):
        <input type="text" name="MerchantTradeDate" value="2017/06/30 00:00:00" class="form-control"/>
        yyyy/MM/dd HH:mm:ss
    </label>
    <label class="col-xs-12">類型 (PaymentType):
        <input type="text" name="PaymentType" value="aio" class="form-control"/>
        aio
    </label>
    <label class="col-xs-12">金額 (TotalAmount):
        <input type="text" name="TotalAmount" value="29999" class="form-control"/>
        請帶整數，不可有小數點 僅限新台幣 金額不可為 0 元 CVS&BARCODE 最低限制為 30 元，最高限制為 30,000 元
    </label>
    <label class="col-xs-12">描述 (TradeDesc):
        <input type="text" name="TradeDesc" value="Desc" class="form-control"/>
    </label>
    <label class="col-xs-12">名稱 (ItemName):
        <input type="text" name="ItemName" value="A#B" class="form-control"/>
        商品名稱以符號 # 分
    </label>
    <label class="col-xs-12">回傳網址 (ReturnURL):
        <input type="text" name="ReturnURL" value="127.0.0.1" class="form-control"/>
    </label>
    <label class="col-xs-12">付款方式 (ChoosePayment):
        <input type="text" name="ChoosePayment" value="ALL"/>
        Credit:信用卡及 AndroidPay AndroidPay: AndroidPay  WebATM:網路 ATM ATM:自動櫃員機 CVS:超商代碼 BARCODE:超商條碼 ALL:不指定
    </label>
 
    <input type="hidden" name="MerchantID" value="20b00132" />
    <input type="hidden" name="HashKey" value="5294y06JbISpM5x9" />
    <input type="hidden" name="HashIV" value="v77hoKGq4kWxNNIS" />
 
    <button type="submit" class="btn btn-default">綠界線上支付</button>
</form>

</body>
</html>