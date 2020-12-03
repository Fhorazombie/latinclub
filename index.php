<?php get_header(); ?>

<div id="content" style="display: table; width: 100%;">
		<?php
		 
		// Variables
		$numposts = 6; // How many posts do we want?

		$categoryid = get_cat_ID( single_cat_title("",false) );

		 
		// Get Parents
		$parents = new WP_Query(array(
		  'posts_per_page' => $numposts,
		  'hide_empty' => 0,
		  'post_type' => 'post',
		));

		$numbolita = 0;

		while ($parents->have_posts()) : $parents->the_post(); ?>
			<div id="slider_<?php echo $numbolita; ?>" class="slider" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
				<div class="titulos_slider">
					<h1><?php the_title(); ?></h1>

					<?php if(get_secondary_title()){ ?>
					<h2><?php the_secondary_title()?></h2>
					<?php } ?>
				</div>
				<a href="<?php the_permalink(); ?>">
				<div class="vermas">
					Ver mas
				</div>
				</a>
			</div>
		<?php 

		$bolitas .= "<span id='bolita-".$numbolita."' class='bolita'></span>";

		$numbolita++;

		endwhile; wp_reset_postdata();?>
</div>
	<div id="flecha-izq" class="flechas"><span><</span></div>
	<div id="flecha-der" class="flechas"><span>></span></div>
<div id="bolitas">
	<?php echo $bolitas; ?>
</div>
<script type="text/javascript">
	window.onload = function() {


	  var cuantosslider = 0

	  cuantosslider = $(".slider").length

	  console.log("Tantos slides "+cuantosslider)

	  var mostradoslide = 1

	  var siguienteslide = 2

	  $("span#bolita-0").addClass("selected_slide")

	  var nslide = 0

	  var cambio = 0

	  		$("span#bolita-0").click(function(){
	  				console.log("Bolita 0")
	  				cambio = 1
	  				$(".slider:nth-child("+mostradoslide+")").css("opacity","0")
	  				setTimeout(function(){
	  					$(".bolita").removeClass("selected_slide")
	  					$("span#bolita-0").addClass("selected_slide")
	  					$(".slider:nth-child("+mostradoslide+")").css("position","absolute")
	  					$(".slider:nth-child("+mostradoslide+")").css("display","none")
	  					$(".slider:nth-child(1)").css("opacity","1")
	  					$(".slider:nth-child(1)").css("position","initial")
	  					$(".slider:nth-child(1)").css("display","table-cell")
	  					mostradoslide = 1
	  					siguienteslide = 2
	  					setTimeout(function(){
	  				  		cambio = 0
	  				  		if (cambio == 0) {
								cambiarslide()
							}
	  			  		}, 8000)
	  				}, 400)
	  		})


	  		$("span#bolita-1").click(function(){
	  				console.log("Bolita 1")
	  				cambio = 1
	  				$(".slider:nth-child("+mostradoslide+")").css("opacity","0")
	  				setTimeout(function(){
	  					$(".bolita").removeClass("selected_slide")
	  					$("span#bolita-1").addClass("selected_slide")
	  					$(".slider:nth-child("+mostradoslide+")").css("position","absolute")
	  					$(".slider:nth-child("+mostradoslide+")").css("display","none")
	  					$(".slider:nth-child(2)").css("opacity","1")
	  					$(".slider:nth-child(2)").css("position","initial")
	  					$(".slider:nth-child(2)").css("display","table-cell")
	  					mostradoslide = 2
	  					siguienteslide = 3
	  					setTimeout(function(){
	  				  		cambio = 0
	  				  		if (cambio == 0) {
								cambiarslide()
							}
	  			  		}, 8000)
	  				}, 400)
	  		})

	  		$("span#bolita-2").click(function(){
	  				console.log("Bolita 2")
	  				cambio = 1
	  				$(".slider:nth-child("+mostradoslide+")").css("opacity","0")
	  				setTimeout(function(){
	  					$(".bolita").removeClass("selected_slide")
	  					$("span#bolita-2").addClass("selected_slide")
	  					$(".slider:nth-child("+mostradoslide+")").css("position","absolute")
	  					$(".slider:nth-child("+mostradoslide+")").css("display","none")
	  					$(".slider:nth-child(3)").css("opacity","1")
	  					$(".slider:nth-child(3)").css("position","initial")
	  					$(".slider:nth-child(3)").css("display","table-cell")
	  					mostradoslide = 3
	  					siguienteslide = 4
	  					setTimeout(function(){
	  				  		cambio = 0
	  				  		if (cambio == 0) {
								cambiarslide()
							}
	  			  		}, 8000)
	  				}, 400)
	  		})

	  		$("span#bolita-3").click(function(){
	  				console.log("Bolita 3")
	  				cambio = 1
	  				$(".slider:nth-child("+mostradoslide+")").css("opacity","0")
	  				setTimeout(function(){
	  					$(".bolita").removeClass("selected_slide")
	  					$("span#bolita-3").addClass("selected_slide")
	  					$(".slider:nth-child("+mostradoslide+")").css("position","absolute")
	  					$(".slider:nth-child("+mostradoslide+")").css("display","none")
	  					$(".slider:nth-child(4)").css("opacity","1")
	  					$(".slider:nth-child(4)").css("position","initial")
	  					$(".slider:nth-child(4)").css("display","table-cell")
	  					mostradoslide = 4
	  					siguienteslide = 5
	  					setTimeout(function(){
	  				  		cambio = 0
	  				  		if (cambio == 0) {
								cambiarslide()
							}
	  			  		}, 8000)
	  				}, 400)
	  		})

	  		$("span#bolita-4").click(function(){
	  				console.log("Bolita 4")
	  				cambio = 1
	  				$(".slider:nth-child("+mostradoslide+")").css("opacity","0")
	  				setTimeout(function(){
	  					$(".bolita").removeClass("selected_slide")
	  					$("span#bolita-4").addClass("selected_slide")
	  					$(".slider:nth-child("+mostradoslide+")").css("position","absolute")
	  					$(".slider:nth-child("+mostradoslide+")").css("display","none")
	  					$(".slider:nth-child(5)").css("opacity","1")
	  					$(".slider:nth-child(5)").css("position","initial")
	  					$(".slider:nth-child(5)").css("display","table-cell")
	  					mostradoslide = 5
	  					siguienteslide = 6
	  					setTimeout(function(){
	  				  		cambio = 0
	  				  		if (cambio == 0) {
								cambiarslide()
							}
	  			  		}, 8000)
	  				}, 400)
	  		})

	  		$("span#bolita-5").click(function(){
	  				console.log("Bolita 5")
	  				cambio = 1
	  				$(".slider:nth-child("+mostradoslide+")").css("opacity","0")
	  				setTimeout(function(){
	  					$(".bolita").removeClass("selected_slide")
	  					$("span#bolita-5").addClass("selected_slide")
	  					$(".slider:nth-child("+mostradoslide+")").css("position","absolute")
	  					$(".slider:nth-child("+mostradoslide+")").css("display","none")
	  					$(".slider:nth-child(6)").css("opacity","1")
	  					$(".slider:nth-child(6)").css("position","initial")
	  					$(".slider:nth-child(6)").css("display","table-cell")
	  					mostradoslide = 6
	  					siguienteslide = 7
	  					setTimeout(function(){
	  						cambio = 0
	  				  		if (cambio == 0) {
								cambiarslide()
							}
	  			  		}, 8000)
	  				}, 400)
	  		})

	  		var menoriz = 0
	  		var cambioflechas = 0
	  		var cambioflechas2 = 0

	  		$("#flecha-izq").click(function(){
	  				console.log("Izquierda")
	  				cambio = 1
	  				cambioflechas = cambioflechas + 1
	  				menoriz = mostradoslide - 1
	  				if (menoriz <= 0) {
	  					menoriz = cuantosslider
	  				}
	  				console.log(menoriz)
	  				$(".slider:nth-child("+mostradoslide+")").css("opacity","0")
  					$(".slider:nth-child("+mostradoslide+")").css("opacity","0")
  					setTimeout(function(){
  						$(".bolita").removeClass("selected_slide")
  						$("span#bolita-"+(menoriz-1)).addClass("selected_slide")
  						$(".slider:nth-child("+mostradoslide+")").css("position","absolute")
  						$(".slider:nth-child("+mostradoslide+")").css("display","none")
  						$(".slider:nth-child("+menoriz+")").css("opacity","1")
  						$(".slider:nth-child("+menoriz+")").css("position","initial")
  						$(".slider:nth-child("+menoriz+")").css("display","table-cell")
  						mostradoslide = menoriz
  						siguienteslide = menoriz + 1
			  			setTimeout(function(){
			  				cambioflechas2 = cambioflechas2 + 1
			  				if (cambioflechas == cambioflechas2) {
		  						cambio = 0
		  						cambioflechas = 0
		  						cambioflechas2 = 0
		  				  		if (cambio == 0) {
									cambiarslide()
								}
			  				}
				  		}, 8000)
  						return
  					}, 400)
	  		})

	  		$("#flecha-der").click(function(){
	  				console.log("Derecha")
	  				cambio = 1
	  				menoriz = mostradoslide + 1
	  				cambioflechas = cambioflechas + 1
	  				if (menoriz > cuantosslider) {
	  					menoriz = 1
	  				}
	  				console.log(menoriz)
	  				$(".slider:nth-child("+mostradoslide+")").css("opacity","0")
  					$(".slider:nth-child("+mostradoslide+")").css("opacity","0")
  					setTimeout(function(){
  						$(".bolita").removeClass("selected_slide")
  						$("span#bolita-"+(menoriz-1)).addClass("selected_slide")
  						$(".slider:nth-child("+mostradoslide+")").css("position","absolute")
  						$(".slider:nth-child("+mostradoslide+")").css("display","none")
  						$(".slider:nth-child("+menoriz+")").css("opacity","1")
  						$(".slider:nth-child("+menoriz+")").css("position","initial")
  						$(".slider:nth-child("+menoriz+")").css("display","table-cell")
  						mostradoslide = menoriz
  						siguienteslide = menoriz + 1
			  			setTimeout(function(){
			  				cambioflechas2 = cambioflechas2 + 1
			  				if (cambioflechas == cambioflechas2) {
		  						cambio = 0
		  						cambioflechas = 0
		  						cambioflechas2 = 0
		  				  		if (cambio == 0) {
									cambiarslide()
								}
			  				}
				  		}, 8000)
  						return
  					}, 400)
	  		})

	  function cambiarslide(){

	  	console.log("Entro a cambiar slide")

		if (mostradoslide == cuantosslider) {

			$(".slider:nth-child("+mostradoslide+")").css("opacity","0")
			setTimeout(function(){
				$(".slider:nth-child("+mostradoslide+")").css("position","absolute")
				$(".slider:nth-child("+mostradoslide+")").css("display","none")
				$(".slider:nth-child(1)").css("opacity","1")
				$(".slider:nth-child(1)").css("position","initial")
				$(".slider:nth-child(1)").css("display","table-cell")
				$(".bolita").removeClass("selected_slide")
				$("span#bolita-0").addClass("selected_slide")
				mostradoslide = 1
				siguienteslide = 2
				setTimeout(function(){
					if (cambio == 0) {
						cambiarslide()
					}
					return
		  		}, 8000)
			}, 400)

		}


		if (mostradoslide < cuantosslider) {

				$(".slider:nth-child("+mostradoslide+")").css("opacity","0")
				setTimeout(function(){
					$(".bolita").removeClass("selected_slide")
					$("span#bolita-"+mostradoslide).addClass("selected_slide")
					$(".slider:nth-child("+mostradoslide+")").css("position","absolute")
					$(".slider:nth-child("+mostradoslide+")").css("display","none")
					$(".slider:nth-child("+siguienteslide+")").css("opacity","1")
					$(".slider:nth-child("+siguienteslide+")").css("position","initial")
					$(".slider:nth-child("+siguienteslide+")").css("display","table-cell")
					mostradoslide++
					siguienteslide++
					setTimeout(function(){
				  		if (cambio == 0) {
							cambiarslide()
						}
						return
			  		}, 8000)
				}, 400)
		}

	  }

	  setTimeout(function(){
	  	cambiarslide()
	  }, 8000)


	}
</script>

<?php get_footer(); ?>