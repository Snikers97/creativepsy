$(document).ready(function () {
    $('#jtimeline-demo').jTimeline({

// pixels per second
resolution: 50000, 

// minimum spacing between events
minimumSpacing: 200, 

// scrolling (translateX) step size
step: 200, 

// character for left arrow
leftArrow: "&larr;", 

// character for right arrow
rightArrow: "&rarr;", 

});

$(".scroll").mCustomScrollbar({
  scrollButtons:{enable:true},
  theme:"light-thick",
  scrollbarPosition:"outside"
});


function styleChanger() {
  var prop = document.getElementById("prop");
  var div = document.createElement("div");
  var block = document.getElementById("prop").appendChild(div);
  document.getElementById("posFix").style.position = "fixed";
  block.className = "popUpbg";
  block.id = "popUpBg";
  // var popUp = document.getElementById("popUpBg");
  // popUp.style.display = "block";
  // popUp.style.opacity = ".9";
  // popUp.style.transition = "opacity 4s cubic-bezier(.22, .61, .36, 1)";

  var mainPopUp = document.getElementById("popUp1");
      mainPopUp.style.display = "block";
};
var elem = document.getElementById("event");
elem.addEventListener("click", styleChanger);


function windowClose() {
  document.getElementById("popUpBg").remove();
  document.getElementById("popUp1").style.display = "none";
  document.getElementById("posFix").style.position = "unset";
};
var closeButton = document.getElementById("close_button");
closeButton.addEventListener("click", windowClose);  

function ClickWindowClose() {
  document.getElementById("popUp1").style.display = "none";
  document.getElementById("popUpBg").remove();
  document.getElementById("posFix").style.position = "unset";
};
var closeClick = document.getElementById("prop");
closeClick.addEventListener("click", ClickWindowClose);  

});

