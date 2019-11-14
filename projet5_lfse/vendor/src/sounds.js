// function play() {
//   var context = new AudioContext();
// }
// function pause() {
//   var context = new AudioContext();
// }
$(function() {
  $("#howler-play").on("click", function() {
    howler_example.play();
  });

  $("#howler-pause").on("click", function() {
    howler_example.pause();
  });

  $("#howler-stop").on("click", function() {
    howler_example.stop();
  });

  $("#howler-volup").on("click", function() {
    var vol = howler_example.volume();
    vol += 0.1;
    if (vol > 1) {
      vol = 1;
    }
    howler_example.volume(vol);
  });

  $("#howler-voldown").on("click", function() {
    var vol = howler_example.volume();
    vol -= 0.1;
    if (vol < 0) {
      vol = 0;
    }
    howler_example.volume(vol);
  });
});

// var wavesurfer = WaveSurfer.create({
//   container: document.querySelector("#waveform"),
//   plugins: [
//     WaveSurfer.cursor.create({
//       showTime: true,
//       opacity: 1,
//       customShowTimeStyle: {
//         "background-color": "#000",
//         color: "#fff",
//         padding: "2px",
//         "font-size": "10px"
//       }
//     })
//   ]
// });
