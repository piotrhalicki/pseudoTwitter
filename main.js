										// Odliczanie przekierowania
window.onload = function(){
	(function(){
		var odlicz = 10;
		setInterval(function() {
		odlicz--;
			if (odlicz >= 0) {
				span = document.getElementById("odliczanie");
				span.innerHTML = odlicz;
			}
		}, 1000);
	})();
}
										// Animacja logo :)
var red = [0, 100, 63];
var orange = [40, 100, 60];
var green = [75, 100, 40];
var blue = [196, 77, 55];
var purple = [280, 50, 60];

var myName = "k!tter";
letterColors=[red, orange, green, blue, purple];

if(100 < 1) {
 bubbleShape = "square";   
}

else {
 bubbleShape = "circle";  
}

drawName(myName, letterColors);
bounceBubbles();

										// Odsłanianie ukrytych formularzy / opcji

$(document).ready(function() {
    $(".modyfikacja").click(function() {
        $(".ukryty").toggle('slow');
    });
   
    $(".kasujProfil").click(function() {
    	$(".ukrytyKasownik").show('slow');
    	
    });
});
	
	
	
