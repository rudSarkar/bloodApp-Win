$(document).ready(function() {

console.log('Working Perfect!');

var phonenumbers = [];
$(".phonenumber").each(function(i) {
    phonenumbers.push($(this).text());
    var newcontent = $(this).text().substr(0, $(this).text().length - 4)
    $(this).text(newcontent+"XXXX");
    $(this).bind("click", function() {
        if ($(this).text() == phonenumbers[i]) {
            //alert("Showing button");
            $(this).text(phonenumbers[i].substr(0, phonenumbers[i].length - 4)+"XXXX");
        } else {
        $(".phonenumber").each(function(x) {
            if ($(this).text() == phonenumbers[x]) {

               $(this).text(phonenumbers[x].substr(0, phonenumbers[x].length - 4));
            }
        });
        // Change
        $(this).before('<a class="btn btn-secondary btn-sm" href="/register">Register Require</a>');
        $(this).remove();
        }
    });
  });
});
