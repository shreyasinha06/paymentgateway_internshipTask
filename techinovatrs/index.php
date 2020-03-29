<?php 
require_once('config.php'); 
?>
<html>
  <head>
    <title> RazorPay Integration in PHP - phpexpertise.com </title>
    <meta name="viewport" content="width=device-width">
    <style>
      .razorpay-payment-button {
        color: #ffffff !important;
        background-color: #7266ba;
        border-color: #7266ba;
        font-size: 14px;
        padding: 10px;
       text-align: center;
      }
      h1
      {
        animation-duration: 3s;
        animation-name: swing;
        color: #800000 ;
         width:90%;
         text-align: center;
 
      }
      li
      {
        
        color: #800000 ;
         width:20%;

         text-align: center;
      }
      p{
        text-align: center;
      }
      body
      {
        background-color: lightblue;
      }
      @keyframes swing { 
   20% { transform: rotate(15deg); } 
   40% { transform: rotate(-10deg);} 
   60% { transform: rotate(5deg); } 
   80% { transform: rotate(-5deg); } 
   100% { transform: rotate(0deg); } 
} 
    </style>
  </head>
  <body>
    <h1>benifits of online payment system</h1>
    <ul>
        <li>speed and convenience</li>
        <li>safety</li>
        <li>accept online payment</li>
        <li>cut costs</li>
        <li>environmental friendly</li>
    </ul><br><br><br>
    &nbsp&nbsp<form action="charge.php" method="POST">
    <!-- Note that the amount is in paise = 50 INR -->
    <script
        src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $razor_api_key; ?>"
        data-amount="1000"
        data-currency="INR"
        data-buttontext="Enjoy payment with Razorpay"
        data-name="TechInnovators.com"
        data-description="payment gateway with RazorPay"
        data-image="logo.jpg"
        data-prefill.name="Shreya Ananya"
        data-prefill.email="shreyaananya@razorpayexample.com"
        data-prefill.contact="9999999999"
        data-theme.color="darkblue"
    ></script>
    <input type="hidden" value="Hidden Element" name="hidden">
    </form>
    
  </body>
</html>