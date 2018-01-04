$(document).ready(function(){
	var image = ["blue.jpg", "poster.jpg", "autumn.jpg", "hall.jpg"];
	var current = Math.floor(Math.random() * image.length);

	(function imageFader() {
		$("#bannerimg").hide();
		$("#bannerimg").attr("src", "images/" + image[current]);
		$("#bannerimg").fadeIn(3000);
		$("#bannerimg").delay(5000).fadeOut(3000);
		if(current >= image.length-1){
			current = 0;
		} else {
			current = current+1;
		}
		setTimeout(imageFader, 11000);
	})();
});