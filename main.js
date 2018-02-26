


$(':checkBox').click(function () {

   let item = $(this).closest('p');
   
   $('#archive').append(item);

});




// mettre l input dans à faire ou Archives
// $(".check").click(function() {
//   console.log('hello');
//   if (dataObject["fait"] === 0) {
//     dataObject["fait"] = 1;
//     $("#archive").append("<input type='checkbox' class='check'>" + dataObject["message"] + "</input>");
//   } else {
//     dataObject["fait"] = 0;
//     $("#todo").append("<input type='checkbox' class='check'>" + dataObject["message"] + "</input>");
//   }
// })
