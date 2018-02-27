let ajax = new XMLHttpRequest();

let whenDataLoaded = function() {
  let tasksText = ajax.responseText;
  let tasksObject = JSON.parse(tasksText);
}

ajax.onload = whenDataLoaded;
ajax.open("GET", "cancer.json", true);
ajax.send(null);







$(':checkBox').click(function() {
  let tasksText = ajax.responseText;
  let tasksObject = JSON.parse(tasksText);

  let item = $(this).closest('p');

  $('#archive').append(item);
  $(item).addClass("done");


  // tasksObject.foreach(function(element) {
  //   if (element["message"] = $("#check").value) {
  //     if (element["todo"] === false) {
  //       element["todo"] = true;
  //
  //     }else {
  //       element["todo"] = false;
  //     }
  //   }
  // })
});
