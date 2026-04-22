$(document).ready(function() {
	$("#logoB").hide();
	
	$(".scroll").click(function(e){				
		e.preventDefault();		
		var strAncla=$(this).attr('href'); 
		//alert(strAncla);
		$('body,html').stop(true,true).animate({				
			scrollTop: $(strAncla).offset().top
		},1000);
	});

	$(".autoplay").slick({
        dots: true, 
        centerMode: true, 
        infinite: true, 
        autoplay: true,
			        autoplaySpeed: 1500, 
			        pauseOnHover: false, 
			        responsive: false,
			        respondTo: window, 
			        arrows: false, 
			        dots: true,
			        slidesToShow: 3, 
			        slidesToScroll: 1
    });

	var altura = $('.menu').offset().top;
	var t=500;
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			
			$(".logo").hide(t,"linear");
			$("#logoB").show(t,"linear");

			//$('#menu').addClass('menu-fixed');
		} else {
			$(".logo").show(t,"linear");
			$("#logoB").hide(t,"linear");
			//$('#menu').removeClass('menu-fixed');
		}
	});


// Mostrar modal después de 5 segundo
setTimeout(function () {
   const modal = document.getElementById("modal-presupuesto");
   if (modal) modal.style.display = "flex";
}, 3000);

// Cierra al hacer clic en la X
document.getElementById("cerrar-modal").addEventListener("click", function () {
  document.getElementById("modal-presupuesto").style.display = "none";
});

// Cierra automáticamente a los 10 segundos
setTimeout(function () {
  const modal = document.getElementById("modal-presupuesto");
  if (modal) modal.style.display = "none";
}, 18000);

// Cierra al hacer clic fuera del contenido del modal
document.getElementById("modal-presupuesto").addEventListener("click", function (e) {
  if (e.target === this) {
    this.style.display = "none";
  }
});

});




// Cierra al hacer clic fuera del contenido del modal
//document.getElementById("modal-presupuesto").addEventListener("click", function (e) {
//  if (e.target === this) {
//    this.style.display = "none";
//  }
//});
