function play() {
  var context = new AudioContext();
}

$("#preloaderDiv").css("height", window.innerHeight + "px");
$(window).on("load", function() {
  $("#preloadingDiv").hide();
});

$(function() {
  var v = $("#mySong")[0];
  //   $("#mySong").preload = "auto";
  //   $("#mySong").attr("src", fynn);
  $("#isolate").on("click", function() {
    v.play(), fynnIsolate1.play(), fynnIsolate2.play(), fynnIsolate3.play();
  });

  $("#howler-pause").on("click", function() {
    v.pause(), fynnIsolate1.pause(), fynnIsolate2.pause(), fynnIsolate3.pause();
  });

  $("#howler-stop").on("click", function() {
    v.stop();
  });

  $("#howler-volup").on("click", function() {
    var vol = v.volume();
    vol += 0.1;
    if (vol > 1) {
      vol = 1;
    }
    v.volume(vol);
  });
});
