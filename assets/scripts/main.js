$(document).ready(function () {
  $(".result-message").hide();
  $(".analyze-button").click(function () {
    $(".result-message").hide();
    $("#res").empty();
    var code = $("#code").val();

    var codeData = new FormData();

    codeData.append("data", code);

    $.ajax({
      url: "/api/analyze",
      method: "POST",
      data: codeData,
      processData: false,
      contentType: false,
      success: function (res) {
        var response = res;
        console.log(response);
        var analyzeResult = response.analyze_result;
        var analyzeScore =
          typeof response.analyze_score == "undefined"
            ? 0
            : response.analyze_score;
        $(".result-message").show();
        $("#res").append("<p class='score'>" + analyzeScore + "</p>");
        $("#res").append("<p>" + analyzeResult + "</p>");
        var getRes = $("#res");
        var posRes = getRes.position();
        $(document).scrollTop(posRes.top);
      },
    });
  });
});
