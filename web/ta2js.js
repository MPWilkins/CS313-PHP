function clicked() {
    alert("Clicked!");
}

function colors() {
    var nColor = "newColor"; 
    var colorNew = document.getElementById(nColor);

    var newDiv = "div1";
    var div = document.getElementById(newDiv);

    var color = colorNew.value;
    div.style.backgroundColor = color;
}

$(document).ready(function(){
    $("button").click(function(){
      $("#div3").fadeToggle(5000);
    });
  });