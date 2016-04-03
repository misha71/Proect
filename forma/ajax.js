$(document).ready(function(){
$("form").submit(function(e) {
e.preventDefault();
var formData = new FormData($('form')[0]);
$.ajax({
type: "POST",
processData: false,
contentType: false,
url: "send.php",
data: formData,
success: function(response) {
$(".result").html(response);
}
});
});
});