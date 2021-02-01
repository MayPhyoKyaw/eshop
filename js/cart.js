$(document).ready(function () {

  console.log($(".price").text());
  var ini_Prices = $(".price").text();
  var single_prices = ini_Prices.split("￥");
  console.log(single_prices)
  var cal_amount = $(".calculated-amount").text();
  console.log(cal_amount)
  for (i=1; i<=cal_amount.length; i++){
    console.log(i);
    document.getElementById("cart-table").rows[i].cells[5].innerHTML = `￥${single_prices[i]}`;
  }

  var shopping_items = document.getElementById("cart-table").rows.length;
  console.log(parseInt(shopping_items)-1)
  document.getElementById('shopping_item_count').innerHTML = `${parseInt(shopping_items)-1} items in cart`;

  var regExpr = /[^a-zA-Z0-9-. ]/g;
  var calculate_Price = 1, quantity = 0;
  $("#order_confirm").click (function () {
    $("order_confirmation").modal('hide');
  })

  $(".input-group .minus").click(function () {
    quantity = parseInt($(this).siblings('.input-number').val());
    // quantity--;
    // $(this).siblings('.input-number').val(quantity);
    console.log(quantity);
    var priceStr = $(this).parent().parent().parent().find('.price').text();
    var price = priceStr.replace(regExpr, "");
    console.log(parseFloat(price).toFixed(2))
    calculate_Price = parseInt(price).toFixed(2) * quantity;
    // console.log($(this).parent().parent().parent().find('.total-amount').text())
    $(this).parent().parent().parent().find('.calculated-amount').text(`￥${calculate_Price.toFixed(2)}`);
  })

  $(".input-group .plus").click(function () {
    quantity = parseInt($(this).siblings('.input-number').val());
    // quantity++;
    // $(this).siblings('.input-number').val(quantity);
    console.log(quantity);
    // if (quantity == 5) {
    //   $(".plus-btn").css('cursor', 'not-allowed');
    // }
    // else {
    //   $(".plus-btn").css('cursor', 'pointer');
    // }
    var priceStr = $(this).parent().parent().parent().find('.price').text();
    var price = priceStr.replace(regExpr, "");
    console.log(parseFloat(price).toFixed(2))
    calculate_Price = parseInt(price).toFixed(2) * quantity;
    // console.log($(this).parent().parent().parent().find('.total-amount').text())
    $(this).parent().parent().parent().find('.calculated-amount').text(`￥${calculate_Price.toFixed(2)}`);
  })

  $("#calculate-total").click(function () {
    var get_Price = $('.calculated-amount');
    var prices_Arr = get_Price.map(function() {
      return this.textContent.trim();
    }).get();
    console.log(prices_Arr);
    var prices,
        subtotal = 0;
        // console.log(typeof(prices))
    prices_Arr.map(p => {
      // console.log(typeof(p), p)
      if(p === "￥"){
        prices = "0";
      }else{
        prices = p.replace(regExpr, "");
      }
      // prices = parseFloat(price_Str).toFixed(2);
      // console.log(typeof(prices), prices)
      subtotal += parseFloat(prices);
    })
    console.log(typeof(subtotal), subtotal);
    document.getElementById("subtotal-amount").innerHTML = `￥ ${subtotal.toFixed(2)}`;
    var total = subtotal - 20;
    document.getElementById("calculated-total-amount").innerHTML = `￥ ${total.toFixed(2)}`
  })
})