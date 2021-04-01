<?php
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; 
$paypal_id='nageshwarelc@gmail.com'; 
?>
<style>
body
{
    font: bold 14px arial;
}
.product
{
    float: left;
    margin-right: 10px;
    border: 1px solid #cecece;
    padding: 10px;
    margin-right: 20px;
}
</style>
<link rel="shortcut icon" href="icon.png" type="image/x-icon"><link rel="alternate" type="application/atom+xml" title="Gmail Atom Feed" href="feed/atom">
<div style="margin:50px">
    <h3></h3>
</div>
<h1>Welcome, to Checkout</h1>

<div class="product">            
    <div class="image">
        <img src="paypal.jpg" width="400" height="400" />
    </div>
    <div class="name">
       Your item: Microsoft Powershell Step by Step 3.0
    </div>
    <div class="price">
        Price: $10.00
    </div>
    <div class="btn">
    <form action="<?php echo $paypal_url ?>" method="post" name="frmPayPal1">
    <input type="hidden" name="business" value="<?php echo $paypal_id ?>">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="Microsoft Powershell Step by Step 3.0">
    <input type="hidden" name="item_number" value="1">
    <input type="hidden" name="credits" value="510">
    <input type="hidden" name="userid" value="1">
    <input type="hidden" name="amount" value="10">
    <input type="hidden" name="cpp_header_image" value="logo.jpg">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="handling" value="0">
    <input type="hidden" name="cancel_return" value="http://localhost:8080/bookshop/index.php/payment_with_paypal/cancel.php">
    <input type="hidden" name="return" value="http://localhost:8080/bookshop/index.php/payment_with_paypal/success.php">
    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form> 
    </div>
</div>

<?php
$title = "PayPal Payment in PHP";
$heading = "Pay Here at PayPal. Right now and own it ! PayPal - The safer, easier way to pay online! ";

include('html.inc');
?>