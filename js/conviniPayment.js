$('.card-submit').click(function() {
  const get_conviniName = $(this).parent().parent().find('.convini-type .convini-head').text();
  location.href = `conviniPaymentConfirm.php?convini=${get_conviniName}`;
});