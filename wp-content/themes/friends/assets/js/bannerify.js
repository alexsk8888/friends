
function onImagesLoaded(container, event) {
	var images = container.getElementsByTagName("img");
	var loaded = images.length;
	for (var i = 0; i < images.length; i++) {
		if (images[i].complete) {
			loaded--;
		}
		else {
			images[i].addEventListener("load", function() {
				loaded--;
				if (loaded == 0) {
					event();
				}
			});
		}
		if (loaded == 0) {
			event();
		}
	}
}
