var circles = [];

		for (var i = 1; i <= 6; i++) {
			var child = document.getElementById('circles-' + i);

			circles.push(Circles.create({
				id:         child.id,
				value:			"",
				text:       function(value){return value + '%';},
<<<<<<< Updated upstream
				radius:     25,
				maxValue:	100,
=======
				radius:     30,
				maxValue:		50,
>>>>>>> Stashed changes
				duration:   1000,
				width:      6,
				colors:     ['rgba(10, 84, 114, 0.75)','rgba(56, 175, 8, 0.5)']
			}));
		};


	window.onresize = function(e) {
		for (var i = 0; i < circles.length; i++) {
			circles[i].updateRadius(getWidth());
		}
	};

	function getWidth() {
		return window.innerWidth / 45;
	}

