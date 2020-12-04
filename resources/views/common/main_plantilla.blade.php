<!DOCTYPE html>
<html>
<head>
	@yield('title')
	@include('common.head_plantilla')
</head>
<body>
	 <!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M3P8D4N"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->


		<!--Div where the WhatsApp will be rendered-->
		<div id="WAButton" style="border-radius: 50%; z-index:1000"></div>
		<script type="text/javascript">  
			$(function() {
			$('#WAButton').floatingWhatsApp({
			phone: '584143446225', //WhatsApp Business phone number International format-
			//Get it with Toky at https://toky.co/en/features/whatsapp.
			headerTitle: '¡Escribenos por WhatsApp!', //Popup Title
			popupMessage: 'Hola, ¿Como podemos ayudarte?', //Popup Message
			showPopup: true, //Enables popup display
			//    buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
			headerColor: '#8ED825', //Custom header color
			// backgroundColor: 'crimson', //Custom background button color
			position: "right"    
			});
			});
		</script>  
	 
		{{-- menu	 --}}
		@include('common.menu')
		{{-- contenido --}}
		@yield('content')
		
	 
	 	{{-- footer --}}
		 @include('common.plantilla_footer')
</body>
</html>