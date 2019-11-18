//Account creation Ajax function
$(function() {
  $("#createAccountId").on("submit", function() {
    var post_url = $(this).attr("action");
    $.ajax({
      type: "post",
      url: post_url,
      data: {
        formData: $("#createAccountId").serialize()
      },

      success: function(res) {
        if (res == "passDiffer") {
          $("#errorForm").html("Vos mots de passe ne correspondent pas !");
        } else if (res == "mailUsed") {
          $("#errorForm").html("Adresse mail déjà utilisée !");
        } else if (res == "pseudoUsed") {
          $("#errorForm").html("Pseudo déjà utilisé !");
        } else if (res == "invalidMail") {
          $("#errorForm").html("Votre adresse mail n'est pas valide !");
        } else if (res == "mailDiffer") {
          $("#errorForm").html("Vos adresses mail ne correspondent pas !");
        } else if (res == "tooLong") {
          $("#errorForm").html(
            "Votre pseudo ne doit pas dépasser 255 caractères !"
          );
        } else if (res == "empty") {
          $("#errorForm").html("Tous les champs doivent être complétés !");
        } else if (res == "create") {
          location.href = "index.php?action=connect";
        }
      },
      error: function() {
        $("#errorForm").html("Une erreur est survenue, veuillez rééssayer");
      }
    });
    return false;
  });
});

//Account connection Ajax function

$(function() {
  $("#connectAccountId").on("submit", function() {
    var post_url = $(this).attr("action");
    $.ajax({
      type: "post",
      url: post_url,
      data: {
        connectData: $("#connectAccountId").serialize()
      },

      success: function(res) {
        if (res == "connectFailure") {
          $("#errorSignIn").html("Email ou mot de passe incorrect !");
        } else if (res == "emptyField") {
          $("#errorSignIn").html("Tous les champs sont obligatoires !");
        } else if (res == "adminConnect") {
          location.href = "index.php?action=adminHome";
        } else if (res == "userConnect") {
          location.href = "index.php?action=gameHome";
        }
      },
      error: function() {
        $("#errorForm").html("Une erreur est survenue, veuillez rééssayer");
      }
    });
    return false;
  });
});

// User validate answers
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
