$(document).ready(function () {

  // console.log($(".price").text());
  var ini_Prices = $(".price").text();
  var single_prices = ini_Prices.split("￥");
  // var item_quantity = $(".item-quantity").val();
  // console.log(item_quantity);
  // var qty_Arr = Array()
  var cal_amount = $(".calculated-amount").text();
  // console.log(cal_amount)
  for (i = 1; i <= cal_amount.length; i++) {
    console.log(i);
    var item_quantity = $(".item-quantity").val();
    // console.log(item_quantity);
    var qty = document.getElementById("cart-table").rows[i].cells[4].value;
    console.log(qty);
    document.getElementById("cart-table").rows[i].cells[5].innerHTML = `￥${single_prices[i]}`;
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

  $("#calculate-total").click(function () {
    var get_Price = $('.calculated-amount');
    var prices_Arr = get_Price.map(function () {
      return this.textContent.trim();
    }).get();
    console.log(prices_Arr);
    var prices,
      subtotal = 0;
    // console.log(typeof(prices))
    prices_Arr.map(p => {
      // console.log(typeof(p), p)
      if (p === "￥") {
        prices = "0";
      } else {
        prices = p.replace(regExpr, "");
      }
      // prices = parseFloat(price_Str).toFixed(2);
      // console.log(typeof(prices), prices)
      subtotal += parseFloat(prices);
    })
    console.log(typeof (subtotal), subtotal);
    document.getElementById("subtotal-amount").innerHTML = `￥ ${subtotal.toFixed(2)}`;
    var total = subtotal - (subtotal * (parseInt(discount_value)) / 100) + 700 + (subtotal * 0.01);
    document.getElementById("calculated-total-amount").innerHTML = `￥ ${total.toFixed(2)}`
  })
})

// function deleteRow(row){
//   // console.log()
//   var row_index = row.parentNode.parentNode.rowIndex;
//   console.log(row_index)
//   document.getElementById("cart-table").deleteRow(row_index);
//   document.getElementById("cart-table").refresh();
// }
