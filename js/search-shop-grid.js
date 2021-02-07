var items = $(".search-product-wrapper .search-product-item");
var numItems = items.length;
var perPage = 3;
// $(".search-count-item").append(` 在${perPage}件　/ 全${numItems}件`);

if (numItems < perPage)
    $(".search-count-item").append(` 在${numItems}件　/ 全${numItems}件`)
else
    $(".search-count-item").append(` 在${perPage}件　/ 全${numItems}件`)

items.slice(perPage).hide();

$('#search-product-pagination-container').pagination({
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