
<html>
<button id="rzp-button1" class="btn btn-outline-dark btn-lg"><i class="fas fa-money-bill"></i> Own Checkout</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    amt = 340;
  var options = {
    "key": "rzp_test_Mh332dFAGXtlgm", 
    "amount": amt * 100,
    "currency": "INR",
    "description": "LOCHO Paymnet ",
    "image": "https://s3.amazonaws.com/rzp-mobile/images/rzp.jpg",
    "prefill":
    {
      "email": "gaurav.kumar@example.com",
      "contact": +919900000000,
    },
    
    "handler": function (response) {
      alert(response.razorpay_payment_id);
    },
   
  };
  var rzp1 = new Razorpay(options);
  document.getElementById('rzp-button1').onclick = function (e) {
    rzp1.open();
    e.preventDefault();
  }
</script>
</html>