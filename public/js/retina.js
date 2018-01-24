jQuery(function($){
					if (window.matchMedia) {
					 	var mq = window.matchMedia("only screen and (min--moz-device-pixel-ratio: 1.3), only screen and (-o-min-device-pixel-ratio: 2.6/2), only screen and (-webkit-min-device-pixel-ratio: 1.3), only screen and (min-device-pixel-ratio: 1.3), only screen and (min-resolution: 1.3dppx)");
			            if (mq && mq.matches || (window.devicePixelRatio > 1)) {
			                // Standard logo
							$(".site-logo .logo-default .logo").attr("src", "images/header-250-retina.png");
							$(".site-logo .logo-default .logo").css("height", "35");
							// Light logo
							$(".site-logo .logo-light .logo").attr("src", "images/header-250-retina.png");
							$(".site-logo .logo-light .logo").css("height", "35");
							// Dark logo
							$(".site-logo .logo-dark .logo").attr("src", "images/header-250-retina.png");
							$(".site-logo .logo-dark .logo").css("height", "35");
							// Logo on scroll
							$(".site-logo .logo-scroll .logo").attr("src", "");
							$(".site-logo .logo-scroll .logo").css("height", "0");
			            }
					 }
				});