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

  // $(".search-btn").click(function() {
  //   const get_searchName = $( ".nice-select" ).find('span').html();
  //   console.log(get_searchName);
  //   location.href = `./search-shop-grid.html?search=${get_searchName}`;
  // })
});

function goBack() {
  window.history.back();
};