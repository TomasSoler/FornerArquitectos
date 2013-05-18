//Slider Proyectos.
		var flechaD 			= $("#flechaDcha"),
			flechaI 			= $("#flechaIzda"),
			flechas 			= $('#proyectos div.flecha'),
			contenedor 			= $("#proyectosCont"),
			proyectosNum		= $("#proyectosCont").find("a").length,
			totalBloq			= Math.ceil(proyectosNum / 4),
			currentBloq 		= 1,
			index				= $("#indice").find('ul'),
			speed				= 500;
		
		(function sliderInit() {
			// Dejamos desactivadas por defecto las flechas
			// por si no se tiene javascript. Y las activamos.
			flechaD.removeClass("inactive").addClass("active");
			getIndex();
			index.find('li').first().addClass("selected");
			bindClickArrows();
			bindClickIndex();
		})();

		function bindClickArrows () {
			flechas
				.off('click')
				.on('mousedown', function(e) {
					$(this).removeClass('active').addClass('clicked');
					var to = ($(this).data('dir') === 'izda') ? '+' : '-';
					if (!contenedor.is(':animated')) {
						contenedor.animate( { 'left' : to+'=940' }, speed );
					} else {
						return;
					}
					(to === '+') ? currentBloq-- : currentBloq++;
					direcLimit ($(this).data('dir'));
					index.find('li.selected').removeClass('selected');
					$('li[data-bloq="' + currentBloq + '"]').addClass('selected');
				})
				.on('mouseup', function (e) {
					$(this).removeClass('clicked active inactive hover').addClass('hover');
				})
				.hover(function() {
					$(this).removeClass('clicked active inactive hover').addClass('hover');
				}, function() {
					$(this).removeClass('clicked active inactive hover').addClass('active');
				});

		}
		
		function direcActiva (bloq) {
			if (bloq === 0 || bloq === totalBloq+1) {
				return false;
			} else {
				return true;
			}
		}

		function direcLimit (dir) {
			var to = (dir === 'izda') ? '-' : '+';
				bloq = '0';
			bloq = eval(currentBloq + to + 1); // QUITAR EVAL! IT'S EVIL!!!!
			if (!direcActiva (bloq)) {
				$('div[data-dir="' + dir + '"]').removeClass("clicked active inactive hover").addClass("inactive").off();
			} else {
				flechas.not($('div[data-dir="' + dir + '"]')).removeClass("clicked active inactive hover").addClass("active");
				bindClickArrows();
			}
		}

		function bindClickIndex () {
			index
				.find('li')
				.off('click')
				.hover(function() {
					$('li.selected').removeClass('selected');
				}, function() {
					$('li.selected').removeClass('selected');
					$('li[data-bloq="' + currentBloq + '"]').addClass('selected');
				})
				.on('mousedown', function() {
					var num = $(this).data('bloq'),
						to = num-1;
					if (num === currentBloq) {
						return;
					} else {
						if (!contenedor.is(':animated')) {
							to = to * 940;
							contenedor.animate( { 'left' : '-'+to }, speed );
							currentBloq = num;
							$('li[data-bloq="' + currentBloq + '"]').addClass('selected');
							dir = izdaOdcha(num);
							if (!direcActiva (currentBloq-1) || !direcActiva(currentBloq+1)) {
								$('div[data-dir="' + dir + '"]').removeClass("clicked active inactive hover").addClass("inactive").off();
							} else {
								flechas.not($('div[data-dir="' + dir + '"]')).removeClass("clicked active inactive hover").addClass("active");
								bindClickArrows();
							}
							flechas.not($('div[data-dir="' + dir + '"]')).removeClass("clicked active inactive hover").addClass("active");
						} else {
							return;
						}
					}
				});
		}
		function izdaOdcha(num) {
			var dir = 'meh';
			if (num === 1) {
				dir = 'izda';			
			} else if ( num === totalBloq) {
				dir = 'dcha';
			}
			return dir;
		}

		function getIndex() {
			var i = 1;
			while ( i < totalBloq+1 ) {
				index.append("<li data-bloq='"+i+"'></li>");
				i++
			}
		};