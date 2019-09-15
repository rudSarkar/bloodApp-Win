$(document).ready(function() {

  // get data

  $("#division").on("change", function (e){

    var dis_data = e.target.value;

    //console.log(dis_data[1]);

    //var dis_id = dis_data[1];

    $.get('/ajax-dis?dis_id=' + dis_data, function (data) {
      $("#district").empty();
      $("#district").append('<option disabled="disabled" selected="selected">Choose District</option>');
      $.each(data, function (i, item) {
        $("#district").append('<option value="'+data[i].id+'">'+data[i].name+'</option>');
      });
    });

  });

  $("#district").on("change", function (e){

    var dis_data = e.target.value;

    //console.log(dis_data[1]);

    //var dis_id = dis_data[1];

    $.get('/ajax-upz?dis_id=' + dis_data, function (data) {
      $("#upazila").empty();
      $("#upazila").append('<option disabled="disabled" selected="selected">Choose Upazila</option>');
      $.each(data, function (i, item) {
        $("#upazila").append('<option value="'+ data[i].id+'">'+data[i].name+'</option>');
      });
    });

  });
});
