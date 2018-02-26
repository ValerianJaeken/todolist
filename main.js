$(':checkBox').click(function () {

let item = $(this).closest('p');

$('#archive').append(item);

});
