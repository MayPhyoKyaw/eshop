$(document).ready(function () {

  // console.log($(".price").text());
  var ini_Prices = $(".price").text();
  var single_prices = ini_Prices.split("￥");
  // var item_quantity = $(".item-quantity").val();
  // console.log(item_quantity);
  var qty_Arr = [];
  var qty = document.querySelectorAll(".item-quantity");
  qty.forEach((q) => {
    // console.log(q.value);
    qty_Arr.push(q.value);
  })
  var cal_amount = $(".calculated-amount").text();
  // console.log(cal_amount)
  for (i = 1; i <= cal_amount.length; i++) {
    // console.log(i);
    // var item_quantity = $(".item-quantity").val();
    // console.log(item_quantity);
    // qty_Arr.push(item_quantity);
    // console.log(qty_Arr);
    var single_qty = qty_Arr[i - 1];
    // console.log(typeof(qty_Arr[i-1]), typeof(single_prices[i]))
    // var qty = document.getElementById("cart-table").rows[i].cells[4].value;
    var single_price = single_prices[i];
    var sg_price = single_price.replace(",", "");
    // console.log(parseInt(qty_Arr[i-1]), parseFloat(sg_price));
    var calculate_sub_price = parseFloat(sg_price) * parseInt(qty_Arr[i - 1]);
    // console.log(calculate_sub_price);
    document.getElementById("cart-table").rows[i].cells[5].innerHTML = `￥${calculate_sub_price.toFixed(2)}`;
  }

  var shopping_items = document.getElementById("cart-table").rows.length;
  // console.log(parseInt(shopping_items)-1)
  document.getElementById('shopping_item_count').innerHTML = `${parseInt(shopping_items) - 1} items in cart`;

  var regExpr = /[^a-zA-Z0-9-. ]/g;
  var calculate_Price = 1, quantity = 0;
  $("#order_confirm").click(function () {
    $("order_confirmation").modal('hide');
  })

  // $(".input-group .minus").click(function () {
  //   quantity = parseInt($(this).siblings('.input-number').val());
  //   // quantity--;
  //   // $(this).siblings('.input-number').val(quantity);
  //   var priceStr = $(this).parent().parent().parent().find('.price').text();
  //   var price = priceStr.replace(regExpr, "");
  //   // console.log(parseFloat(price).toFixed(2))
  //   calculate_Price = parseInt(price).toFixed(2) * quantity;
  //   // console.log($(this).parent().parent().parent().find('.total-amount').text())
  //   $(this).parent().parent().parent().find('.calculated-amount').text(`￥${calculate_Price.toFixed(2)}`);
  // })

  // $(".input-group .plus").click(function () {
  //   quantity = parseInt($(this).siblings('.input-number').val());
  //   // quantity++;
  //   // $(this).siblings('.input-number').val(quantity);
  //   // console.log(quantity);
  //   var stock = $(this).siblings('.stock').text();
  //   console.log(parseInt(stock));
  //   if (quantity == parseInt(stock)) {
  //     $('#quantity_warning').modal('show');
  //   }
  //   else {
  //     // $(".plus-btn").css('cursor', 'pointer');
  //     console.log("hide")
  //   }
  //   var priceStr = $(this).parent().parent().parent().find('.price').text();
  //   var price = priceStr.replace(regExpr, "");
  //   // console.log(parseFloat(price).toFixed(2))
  //   calculate_Price = parseInt(price).toFixed(2) * quantity;
  //   // console.log($(this).parent().parent().parent().find('.total-amount').text())
  //   $(this).parent().parent().parent().find('.calculated-amount').text(`￥${calculate_Price.toFixed(2)}`);
  // })

  $(".item-quantity-confirm").click(function () {
    quantity = parseInt($(this).siblings('.item-quantity').val());
    var stock = $(this).siblings('.stock').text();
    if (quantity > parseInt(stock)) {
      $('#quantity_warning').modal('show');
    }
    else {
      // $(".plus-btn").css('cursor', 'pointer');
      var priceStr = $(this).parent().parent().parent().parent().find('.price').text();
      var price = priceStr.replace(regExpr, "");
      console.log(price)
      calculate_Price = parseFloat(price) * quantity;
      console.log(calculate_Price);
      $(this).parent().parent().parent().parent().find('.calculated-amount').text(`￥${calculate_Price.toFixed(2)}`);
      // console.log("hide");
    }
  })

  var discount_rate = $(".discount-rate").text();
  // console.log(discount_rate);
  var discount_value = discount_rate.replace(regExpr, "");

  // $("#calculate-total").click(function () {
  //   var get_Price = $('.calculated-amount');
  //   var prices_Arr = get_Price.map(function () {
  //     return this.textContent.trim();
  //   }).get();
  //   console.log(prices_Arr);
  //   var prices,
  //     subtotal = 0;
  //   // console.log(typeof(prices))
  //   prices_Arr.map(p => {
  //     // console.log(typeof(p), p)
  //     if (p === "￥") {
  //       prices = "0";
  //     } else {
  //       prices = p.replace(regExpr, "");
  //     }
  //     // prices = parseFloat(price_Str).toFixed(2);
  //     // console.log(typeof(prices), prices)
  //     subtotal += parseFloat(prices);
  //   })
  //   console.log(typeof (subtotal), subtotal);
  //   document.getElementById("subtotal-amount").innerHTML = `￥ ${subtotal.toFixed(2)}`;
  //   var total = subtotal - (subtotal * (parseInt(discount_value)) / 100) + 700 + (subtotal * 0.01);
  //   document.getElementById("calculated-total-amount").innerHTML = `￥ ${total.toFixed(2)}`
  // })

  // var subtotalAmountValue = $("#subtotal-amount").text();
  // var subtotalAmount = subtotalAmountValue.replace("￥"," ");

  // var consumptionTaxValue = $(".consumption-tax").text();
  // var consumptionTax = consumptionTaxValue.slice(0,2);

  // var deliveryFeeValue = $(".delivery-fee").text();
  // var deliveryFee = deliveryFeeValue.slice(1);

  // var total = (subtotalAmount/100)*consumptionTax;
  // var formula1 = parseInt(subtotalAmount) + parseInt(total) + parseInt(deliveryFee);
  // console.log("Formula1 => " + formula1);

  // var discountRateValue = $(".discount-rate").text();
  // var discountRate = discountRateValue.replace("%", " ");

  // var discountCalculation = (formula1/100)*parseInt(discountRate);
  // var formula2 = formula1 - discountCalculation;
  // console.log("Formula2 => " + formula2)

  // $("#calculated-total-amount").append(`${formula2}`);
})

// function deleteRow(row){
//   // console.log()
//   var row_index = row.parentNode.parentNode.rowIndex;
//   console.log(row_index)
//   document.getElementById("cart-table").deleteRow(row_index);
//   document.getElementById("cart-table").refresh();
// }
