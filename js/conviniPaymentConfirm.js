var get_url = new URL(location);
var conviniName = get_url.searchParams.get('convini');


var date = new Date();
var day = date.getDate() + 7;
var month = date.getMonth() + 1;
var year = date.getFullYear();
if (month < 10) month = "0" + month;
if (day < 10) day = "0" + day;

var expireDate = year + "/" + month + "/" + day;

$(".convini-conf-method").append(conviniName);
$(".convini-conf-date").append(expireDate);