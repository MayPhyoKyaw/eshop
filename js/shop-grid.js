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
    console.log($('.side-sub-category').text());
    var subCat = $('.side-sub-category');
    var subCat_Arr = subCat.map(function() {
        return this.textContent.trim();
    }).get();
    console.log(subCat_Arr, small_categoryName);
    for(i=0; i<subCat_Arr.length; i++){
        if (subCat_Arr[i] === small_categoryName){
            console.log(subCat_Arr[i])
            $(`#${subCat_Arr[i]}`).addClass('selected').siblings().removeClass('selected');
        }
    }
})