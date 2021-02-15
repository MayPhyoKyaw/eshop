$(document).ready(function () {
  $(".card-submit").click(function () {
    $(".card-name").append($(".cards").val())
    $(".card-number").append($(".card-no").val())
    $(".card-expired-date").append($(".card-expired-month").val() + '/' + $(".card-expired-year").val())
    $(".card-user-name").append($(".card-username").val())
  })
  $("#card_confirmation").on("hidden.bs.modal", function () {
    $(".card-name").text('')
    $(".card-number").text('')
    $(".card-expired-date").text('')
    $(".card-user-name").text('')
  })
  $(".cancel").click(function () {
    $(".card-name").text('')
    $(".card-number").text('')
    $(".card-expired-date").text('')
    $(".card-user-name").text('')
  })
})
function goBack() {
  window.history.back();
}
$('.credit-payment-submit').click(function() {
  const get_cardName = $(".cards").val();
  location.href = `creditPaymentConfirm.php?card_type=${get_cardName}`;
});