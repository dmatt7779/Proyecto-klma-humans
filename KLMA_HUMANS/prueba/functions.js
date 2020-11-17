/* 
function CircleBar(e) {
    $(e)
      .circleProgress({ fill: { color: "#000000" } })
      .on("circle-animation-progress", function(_event, _progress, stepValue) {
        $(this)
          .find("strong")
          .text(String(parseInt(100 * stepValue)) + "%");
      });
  }
  CircleBar(".round"); */


  $('head style[type="text/css"]').attr('type', 'text/less');
less.refreshStyles();
window = function() {
  $('.radial-progress').attr('data-progress', Math.floor(Math.random() * 100));
}
setTimeout(window, 200);
$('.radial-progress').click(window);
  