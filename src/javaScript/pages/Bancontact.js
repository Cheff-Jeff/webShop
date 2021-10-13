var stripe = Stripe('pk_test_51Igc7UKZIkFEWPuFcYcXEdmJL0J2LvEUBUdSguZk76R5Tydlkr0RTmBvegmWoIDVfDVdnUeDUBDkzrGAmY03KXTc00Eh7AYB04');

var response = fetch('/src/php/functions/Bancontact.php').then(function(response) {
  return response.json();
}).then(function(responseJson) {
  var clientSecret = responseJson.client_secret;
  console.log(clientSecret);
  stripe.confirmBancontactPayment(
    clientSecret,
    {
      payment_method: {
        billing_details: {
          name: "Jenny Rosen"
        }
      },
      return_url: 'https://localhost/thanks',
    }
  ).then(function(result) {
    if (result.error) {
      // Inform the customer that there was an error.
    }
  });
});