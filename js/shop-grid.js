var get_url = new URL(location);
var small_categoryName = get_url.searchParams.get('small_category');
var large_categoryName = get_url.searchParams.get('large_category');

console.log(small_categoryName)
console.log(large_categoryName)
$(".main-category-name").append(large_categoryName);
$(".sub-category-name").append(small_categoryName);

var items = $(".product-wrapper .product-item");
var numItems = items.length;
var perPage = 3;
if (numItems < perPage)
    $(".count-item").append(` 在${numItems}件　/ 全${numItems}件`)
else
    $(".count-item").append(` 在${perPage}件　/ 全${numItems}件`)

items.slice(perPage).hide();

$('#pagination-container').pagination({
    items: numItems,
    itemsOnPage: perPage,
    prevText: "&laquo;",
    nextText: "&raquo;",
    edges: 1,
    onPageClick: function (pageNumber) {
        var showFrom = perPage * (pageNumber - 1);
        var showTo = showFrom + perPage;
        items.hide().slice(showFrom, showTo).show();
    }
});
$(document).ready(function () {

    var regExpr = /[&\/\\#, +()$~%.'"・:*?<>{}-]/g;
    console.log($('.side-sub-category').text());
    var subCat = $('.side-sub-category');
    var subCat_Arr = subCat.map(function() {
        return this.textContent.trim();
    }).get();
    console.log(subCat_Arr, small_categoryName);
    var sub_cat = small_categoryName.replace(regExpr, "_");
    console.log(sub_cat);
    for(i=0; i<subCat_Arr.length; i++){
        var arr = subCat_Arr[i].replace(regExpr, "_");
        if (arr === sub_cat){
            console.log(arr)
            $(`#${arr}`).addClass('selected').siblings().removeClass('selected');
        }
    }

    $(".view").click(function () {
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
        console.log(itemId);
    })
})