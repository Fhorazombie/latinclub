$(function() { 

$("#destacados").click(function(){
	console.log("entro a eventos")
	$("#subheader").css("height", "30vh")
	setTimeout(function(){
		$(".destacados").css("height", "0px")
		$(".eventos").css("height", "0px")
		$(".ganadores").css("height", "0px")
		$(".tablon").css("height", "0px")
		$(".listaN").css("height", "0px")
		$(".destacados").css("display", "none")
		$(".eventos").css("display", "none")
		$(".ganadores").css("display", "none")
		$(".tablon").css("display", "none")
		$(".listaN").css("display", "none")
		$(".destacados").css("height", "")
		$(".eventos").css("height", "")
		$(".ganadores").css("height", "")
		$(".tablon").css("height", "")
		$(".listaN").css("height", "")
	}, 300)

	setTimeout(function(){
		$("#subheader").css("height", "70vh")
	}, 300)

	setTimeout(function(){
		$("#subheader").css("height", "30vh")
	}, 600)

	setTimeout(function(){
		$(".destacados").css("height", "auto")
		$(".destacados").css("display", "block")
		$("#subheader").css("height", "")
	}, 700)
})

$("#eventos").click(function(){
	console.log("entro a eventos")
	$("#subheader").css("height", "30vh")
	setTimeout(function(){
		$(".destacados").css("height", "0px")
		$(".eventos").css("height", "0px")
		$(".ganadores").css("height", "0px")
		$(".tablon").css("height", "0px")
		$(".listaN").css("height", "0px")
		$(".destacados").css("display", "none")
		$(".eventos").css("display", "none")
		$(".ganadores").css("display", "none")
		$(".tablon").css("display", "none")
		$(".listaN").css("display", "none")
		$(".destacados").css("height", "")
		$(".eventos").css("height", "")
		$(".ganadores").css("height", "")
		$(".tablon").css("height", "")
		$(".listaN").css("height", "")
	}, 300)

	setTimeout(function(){
		$("#subheader").css("height", "70vh")
	}, 300)

	setTimeout(function(){
		$("#subheader").css("height", "30vh")
	}, 600)

	setTimeout(function(){
		$(".eventos").css("height", "auto")
		$(".eventos").css("display", "block")
		$("#subheader").css("height", "")
	}, 700)
})

$("#ganadores").click(function(){
	console.log("entro a eventos")
	$("#subheader").css("height", "30vh")
	setTimeout(function(){
		$(".destacados").css("height", "0px")
		$(".eventos").css("height", "0px")
		$(".ganadores").css("height", "0px")
		$(".tablon").css("height", "0px")
		$(".listaN").css("height", "0px")
		$(".destacados").css("display", "none")
		$(".eventos").css("display", "none")
		$(".ganadores").css("display", "none")
		$(".tablon").css("display", "none")
		$(".listaN").css("display", "none")
		$(".destacados").css("height", "")
		$(".eventos").css("height", "")
		$(".ganadores").css("height", "")
		$(".tablon").css("height", "")
		$(".listaN").css("height", "")
	}, 300)

	setTimeout(function(){
		$("#subheader").css("height", "70vh")
	}, 300)

	setTimeout(function(){
		$("#subheader").css("height", "30vh")
	}, 600)

	setTimeout(function(){
		$(".ganadores").css("height", "auto")
		$(".ganadores").css("display", "block")
		$("#subheader").css("height", "")
	}, 700)
})

$("#tablon").click(function(){
	console.log("entro a eventos")
	$("#subheader").css("height", "30vh")
	setTimeout(function(){
		$(".destacados").css("height", "0px")
		$(".eventos").css("height", "0px")
		$(".ganadores").css("height", "0px")
		$(".tablon").css("height", "0px")
		$(".listaN").css("height", "0px")
		$(".destacados").css("display", "none")
		$(".eventos").css("display", "none")
		$(".ganadores").css("display", "none")
		$(".tablon").css("display", "none")
		$(".listaN").css("display", "none")
		$(".destacados").css("height", "")
		$(".eventos").css("height", "")
		$(".ganadores").css("height", "")
		$(".tablon").css("height", "")
		$(".listaN").css("height", "")
	}, 300)

	setTimeout(function(){
		$("#subheader").css("height", "70vh")
	}, 300)

	setTimeout(function(){
		$("#subheader").css("height", "30vh")
	}, 600)

	setTimeout(function(){
		$(".tablon").css("height", "auto")
		$(".tablon").css("display", "block")
		$("#subheader").css("height", "")
	}, 700)
})

$("#listaN").click(function(){
	console.log("entro a lista negra")
	$("#subheader").css("height", "30vh")
	setTimeout(function(){
		$(".destacados").css("height", "0px")
		$(".eventos").css("height", "0px")
		$(".ganadores").css("height", "0px")
		$(".tablon").css("height", "0px")
		$(".listaN").css("height", "0px")
		$(".destacados").css("display", "none")
		$(".eventos").css("display", "none")
		$(".ganadores").css("display", "none")
		$(".tablon").css("display", "none")
		$(".listaN").css("display", "none")
		$(".destacados").css("height", "")
		$(".eventos").css("height", "")
		$(".ganadores").css("height", "")
		$(".tablon").css("height", "")
		$(".listaN").css("height", "")
	}, 300)

	setTimeout(function(){
		$("#subheader").css("height", "70vh")
	}, 300)

	setTimeout(function(){
		$("#subheader").css("height", "30vh")
	}, 600)

	setTimeout(function(){
		$(".listaN").css("height", "auto")
		$(".listaN").css("display", "block")
		$("#subheader").css("height", "")
	}, 700)
})

$("#menuRicon").click(function(){
	$("#menu").attr("id","menuresponsive")
	$(".itemmenu").attr("class","itemmenu itemmenuresponsive")
	$("#menuresponsive").slideDown()
	$("#menuRicon").fadeOut()
})

$("#cerrarmenu").click(function(){
	console.log("Entro a cerrar")
	$("#menuresponsive").slideUp(function(){
		$(".itemmenu").removeClass("itemmenuresponsive")
		$("#menuresponsive").attr("id","menu")
		$("#menuRicon").fadeIn()
	})
})

});