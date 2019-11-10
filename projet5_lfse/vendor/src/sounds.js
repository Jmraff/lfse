var pong = new Howl({
  src: ["/lfse/projet5_lfse/App/uploads/fynn.mp3"],
  autoplay: false
});
function play() {
  var context = new AudioContext();
  pong.play();
}
