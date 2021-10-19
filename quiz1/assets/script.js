$(document).ready(function () {
  $("#USD").click(function () {
    $.ajax({
      type: "GET",
      url: "assets/data.json",
      dataType: "json",
      success: function (responseData) {
        var output = " ";
        output += "<h1>Currency:</h1>";
        output += "<h3>" + responseData.base + "</h3>";
        output += "<h1>Amount:</h1>";
        output += "<h3>" + responseData.amount + "</h3>";
        output += "<h1>Date of Conversion:</h1>";
        output += "<h3>" + responseData.date + "</h3>";
        output += "<h1>EUR to USD:</h1>";
        output += "<h3>" + responseData.rates.USD + "</h3>";
        $('#stage').html(output);
      }
    })
  });
  $("#AUD").click(function () {
    $.ajax({
      type: "GET",
      url: "assets/data.json",
      dataType: "json",
      success: function (responseData) {
        var output = " ";
        output += "<h1>Currency:</h1>";
        output += "<h3>" + responseData.base + "</h3>";
        output += "<h1>Amount:</h1>";
        output += "<h3>" + responseData.amount + "</h3>";
        output += "<h1>Date of Conversion:</h1>";
        output += "<h3>" + responseData.date + "</h3>";
        output += "<h1>EUR to AUD:</h1>";
        output += "<h3>" + responseData.rates.AUD + "</h3>";
        $('#stage').html(output);
      }
    })
  });
  $("#JPY").click(function () {
    $.ajax({
      type: "GET",
      url: "assets/data.json",
      dataType: "json",
      success: function (responseData) {
        var output = " ";
        output += "<h1>Currency:</h1>";
        output += "<h3>" + responseData.base + "</h3>";
        output += "<h1>Amount:</h1>";
        output += "<h3>" + responseData.amount + "</h3>";
        output += "<h1>Date of Conversion:</h1>";
        output += "<h3>" + responseData.date + "</h3>";
        output += "<h1>EUR to JPY:</h1>";
        output += "<h3>" + responseData.rates.JPY + "</h3>";
        $('#stage').html(output);
      }
    })
  });
  $("#NZD").click(function () {
    $.ajax({
      type: "GET",
      url: "assets/data.json",
      dataType: "json",
      success: function (responseData) {
        var output = " ";
        output += "<h1>Currency:</h1>";
        output += "<h3>" + responseData.base + "</h3>";
        output += "<h1>Amount:</h1>";
        output += "<h3>" + responseData.amount + "</h3>";
        output += "<h1>Date of Conversion:</h1>";
        output += "<h3>" + responseData.date + "</h3>";
        output += "<h1>EUR to NZD:</h1>";
        output += "<h3>" + responseData.rates.NZD + "</h3>";
        $('#stage').html(output);
      }
    })
  });
  $("#SEK").click(function () {
    $.ajax({
      type: "GET",
      url: "assets/data.json",
      dataType: "json",
      success: function (responseData) {
        var output = " ";
        output += "<h1>Currency:</h1>";
        output += "<h3>" + responseData.base + "</h3>";
        output += "<h1>Amount:</h1>";
        output += "<h3>" + responseData.amount + "</h3>";
        output += "<h1>Date of Conversion:</h1>";
        output += "<h3>" + responseData.date + "</h3>";
        output += "<h1>EUR to SEK:</h1>";
        output += "<h3>" + responseData.rates.SEK + "</h3>";
        $('#stage').html(output);
      }
    })
  });
  // $.ajax({
  //   type: "GET",
  //   url: "data.json",
  //   dataType: "json",
  //   success: function (responseData) {
  //     var output = " ";
  //     output += "<h1>Amount</h1>";
  //     output += "<p>" + responseData.amount + "</p>";
  //     output += "<h1>Base</h1>";
  //     output += "<p>" + responseData.base + "</p>";
  //     output += "<h1>Date</h1>";
  //     output += "<p>" + responseData.date + "</p>";
  //     output += "<h1>EUR to USD</h1>";
  //     output += "<p>" + responseData.rates.USD + "</p>";
  //     $('#stage').html(output);
  //   }
  // })
})