// var snd1 = new Audio();
// var src1 = document.createElement("source");
// src1.type = "audio/mpeg";
// src1.src = document.getElementsById("fynnSound");
// snd1.appendChild(src1);

// var snd2 = new Audio();
// var src2 = document.createElement("source");
// src2.type = "audio/mpeg";
// src2.src = document.getElementsById("isolate1");
// snd2.appendChild(src2);

// snd1.play();
// snd2.play();

// function play() {
//   const AudioContext = window.AudioContext || window.webkitAudioContext;
//   const audioContext = new AudioContext();
//   const audioElement = document.querySelector("audio");
//   // const audioElement = document.getElementsById("fynnSound");
//   // const audioElement2 = document.getElementsById("isolate1");
//   // const audioElement3 = document.getElementsById("isolate2");
//   // const audioElement4 = document.getElementsById("isolate3");

//   // pass it into the audio context
//   const track = audioContext.createMediaElementSource(audioElement);
//   track.connect(audioContext.destination);
//   const playButton = document.querySelector("button");

//   playButton.addEventListener(
//     "click",
//     function() {
//       // check if context is in suspended state (autoplay policy)
//       if (audioContext.state === "suspended") {
//         audioContext.resume();
//       }

//       // play or pause track depending on state
//       if (this.dataset.playing === "false") {
//         audioElement.play();
//         // audioElement2.play();
//         // audioElement3.play();
//         // audioElement4.play();
//         this.dataset.playing = "true";
//       } else if (this.dataset.playing === "true") {
//         audioElement.pause();
//         // audioElement2.pause();
//         // audioElement3.pause();
//         // audioElement4.pause();
//         this.dataset.playing = "false";
//       }
//     },
//     false
//   );
// }
$("#preloaderDiv").css("height", window.innerHeight + "px");
$(window).on("load", function() {
  $("#preloadingDiv").hide();
});

// $(function playSound() {
//   var fynn = $("#fynnSound")[0];
//   var fynnAlone = $("#fynnSound")[0];
//   var fynnAlone1 = $("#isolate1")[0];
//   var fynnAlone2 = $("#isolate2")[0];
//   var fynnAlone3 = $("#isolate3")[0];
//   var context = new AudioContext();
//   // $("#mySong").preload = "auto";
//   //   $("#mySong").attr("src", fynn);
//   $("#isolate").on("click", function() {
//     fynn.playSound();
//   });

//   $("#howler-pause").on("click", function() {
//     fynn.pause();
//   });

//   $("#howler-stop").on("click", function() {
//     fynn.stop();
//   });

//   $("#howler-volup").on("click", function() {
//     var vol = fynn.volume();
//     vol += 0.1;
//     if (vol > 1) {
//       vol = 1;
//     }
//     fynn.volume(vol);
//   });
// });
