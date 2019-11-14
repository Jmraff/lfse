$(function() {
  $("#question1").on("submit", function() {
    var post_url = $(this).attr("action");
    $.ajax({
      type: "post",
      url: post_url,
      data: { dataPost1: $("#answer1").val() },
      success: function(res) {
        if (res == "success") {
          $("#status").html("Bravo");
        } else {
          $("#status").html("Ce n'est pas la bonne réponse");
        }
      },
      error: function() {
        $("#status").html("Failed");
      }
    });
    return false;
  });
});

$(function() {
  $("#question2").on("submit", function() {
    var post_url = $(this).attr("action");
    $.ajax({
      type: "post",
      url: post_url,
      data: { dataPost2: $("#answer2").val() },
      success: function(res) {
        if (res == "success") {
          $("#status2").html("Bravo");
        } else {
          $("#status2").html("Ce n'est pas la bonne réponse");
        }
      },
      error: function() {
        $("#status2").html("Failed");
      }
    });
    return false;
  });
});

$(function() {
  $("#question3").on("submit", function() {
    var post_url = $(this).attr("action");
    $.ajax({
      type: "post",
      url: post_url,
      data: { dataPost3: $("#answer3").val() },
      success: function(res) {
        if (res == "success") {
          $("#status3").html("Bravo");
        } else {
          $("#status3").html("Ce n'est pas la bonne réponse");
        }
      },
      error: function() {
        $("#status3").html("Failed");
      }
    });
    return false;
  });
});

$(function() {
  $("#question4").on("submit", function() {
    var post_url = $(this).attr("action");
    $.ajax({
      type: "post",
      url: post_url,
      data: { dataPost4: $("#answer4").val() },
      success: function(res) {
        if (res == "success") {
          $("#status4").html("Bravo");
        } else {
          $("#status4").html("Ce n'est pas la bonne réponse");
        }
      },
      error: function() {
        $("#status4").html("Failed");
      }
    });
    return false;
  });
});

$(function() {
  $("#finalQuestion").on("submit", function() {
    var post_url = $(this).attr("action");
    $.ajax({
      type: "post",
      url: post_url,
      data: { dataPostFinal: $("#finalAnswer").val() },
      success: function(res) {
        if (isNaN(res) === false) {
          location.href = "index.php?action=success&StoryId=" + res;
        } else {
          $("#status5").html("Ce n'est pas la bonne réponse");
        }
      },
      error: function() {
        $("#status5").html("Failed");
      }
    });
    return false;
  });
});
