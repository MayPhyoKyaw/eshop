var get_url = new URL(location);
var creditCardName = get_url.searchParams.get('card_type');
// var creditCardNo = get_url.searchParams.get('card_no');

var date = new Date();
var day = date.getDate() + 7;
var month = date.getMonth() + 1;
var year = date.getFullYear();
if (month < 10) month = "0" + month;
if (day < 10) day = "0" + day;

var withdrawlDate = year + "/" + month + "/" + day;

$(".credit-withdrawl-method").append(creditCardName);
$(".credit-wiithdrawl-date").append(withdrawlDate);
// $(".credit-confーcardNo").append(creditCardNo);