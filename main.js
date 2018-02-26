let ajax = new XMLHttpRequest();

let whenDataLoaded = function() {
  let tasksText = ajax.responseText;
  let tasksObject = JSON.parse(tasksText);
}

ajax.onload = whenDataLoaded;                 // +- pareil que onreadystatechange
ajax.open("GET", "cancer.json", true);        // the type, the url, asynchronous?
ajax.send(null);



$(':checkBox').click(function() {

  let item = $(this).closest('p');

  $('#archive').append(item);
  // tasksObject.foreach(function(element) {
  //   if (element["message"] =partie text de l input) {
  //     if (element["fait"] === true) {
  //       element["fait"] = false;
  //
  //     }else
  //   }
  // })
});
