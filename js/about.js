$(".fa-plus-square-payment-method").click(function () {
  var men = document.getElementById("payment_method");
  // $(this).removeClass('fa-plus-square')
  // $(this).addClass('fa-minus-square')
  men.classList.toggle('hidden');
})

$(".fa-plus-square-money-back").click(function () {
  var women = document.getElementById("money_back");
  // $(this).removeClass('fa-plus-square')
  // $(this).addClass('fa-minus-square')
  women.classList.toggle('hidden');
})