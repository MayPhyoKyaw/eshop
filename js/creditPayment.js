function goBack() {
  window.history.back();
}
$('.credit-payment-submit').click(function() {
  const get_cardName = $(".cards").val();
  location.href = `creditPaymentConfirm.php?card_type=${get_cardName}`;
});