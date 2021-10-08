$(document).ready(function () {
  $.ajax({
    type: "GET",
    url: "assets/data.json",
    dataType: "json",
    success: function (responseData) {
      var output = " ";
      output += "<h1>History</h1>";
      output += "<p>" + responseData.history + "</p>";
      output += "<h1>Mission</h1>";
      output += "<p>" + responseData.mission + "</p>"; 
      output += "<h1>Chapters</h1>";
      output += "<p>" + responseData.chapters + "</p>"; 
      output += "<h1>Membership</h1>";
      output += "<p>" + responseData.membership + "</p>"; 
      $('#stage').html(output);
    }
  })
})