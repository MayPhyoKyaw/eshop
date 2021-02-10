$(document).ready(function () {

  $("#owl-demo").owlCarousel({

    navigation: false,
    slideSpeed: 300,
    paginationSpeed: 500,
    items: 1,
    singleItem: true,
    autoPlay: 4000

  });

  $("#toggle").on('click', function () {
    var category = document.getElementById("main_Category");
    if (category.style.display === "none") {
      category.style.display = "block";
    } else {
      category.style.display = "none";
    }
    console.log("hello")
  });

  // $(".sub-category").click(function () {
  //   const get_smallCategoryName = $(this).find('.sub-categoryName').text();
  //   const get_largeCategoryName = $(this).parent().find('.main-categoryName').text();
  //   location.href = `./shop-grid.html?large_category=${get_largeCategoryName}&small_category=${get_smallCategoryName}`;
  // })

  $(".search-btn").click(function() {
    const get_searchName = $( ".nice-select" ).find('span').html();
    console.log(get_searchName);
    if (get_searchName === "ブランドから探す") {
      location.href = `./brand-display.html?search=${get_searchName}`;
    }
    else {
      location.href = `./search-shop-grid.html?search=${get_searchName}`;
    }
  })

  $(".view-detail").click(function () {
    // console.log($(this).parent().parent().parent().parent().html());
    var itemId = $(this).parent().parent().parent().parent().find('.hide-itemId').text();
    var itemName = $(this).parent().parent().parent().parent().find('.hide-itemName').text();
    var mainType = $(this).parent().parent().parent().parent().find('.hide-largeCat').text();
    var subType = $(this).parent().parent().parent().parent().find('.hide-smallCat').text();
    var gender = $(this).parent().parent().parent().parent().find('.hide-gender').text();
    var season = $(this).parent().parent().parent().parent().find('.hide-season').text();
    var brand = $(this).parent().parent().parent().parent().find('.hide-brand').text();
    var size = $(this).parent().parent().parent().parent().find('.hide-size').text();
    var color = $(this).parent().parent().parent().parent().find('.hide-color').text();
    var country = $(this).parent().parent().parent().parent().find('.hide-country').text();
    var description = $(this).parent().parent().parent().parent().find('.hide-description').text();
    var price = $(this).parent().parent().parent().parent().find('.hide-price').text();
    console.log(price)
    var img1 = $(this).parent().parent().parent().parent().find('.hide-img1').text();
    var img2 = $(this).parent().parent().parent().parent().find('.hide-img2').text();
    console.log(itemName, mainType, subType, gender, season, brand, size, color, country, description, price, img1, img2);
    // var r = '&commat;';
    $('.detail-itemName').text(itemName);
    $('.detail-main-sub').text(`${mainType} >> ${subType}`);
    $('.detail-gender').text(gender);
    $('.detail-season').text(season);
    $('.detail-brand').text(brand);
    $('.detail-size').text(size);
    $('.detail-color').text(color);
    $('.detail-country').text(country);
    $('.detail-description').text(description);
    $('.detail-price').text(price);
    $('.img1') .html(`<img src="./images/items/${img1}" alt="#">`);
    $('.img2').html(`<img src="./images/items/${img2}" alt="#">`);
    $('#cart_itemId').val(itemId);
  })
});

function goBack() {
  window.history.back();
};