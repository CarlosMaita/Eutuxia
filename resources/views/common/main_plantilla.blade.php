<!DOCTYPE html>
<html>
<head>
	@yield('title')
	@include('common.head_plantilla')
</head>
<body>
	
		<link rel="stylesheet" type="text/css" href="{{asset('css/estilos_images_dinamicas.css')}}">
		<!--Floating WhatsApp css-->
		<link rel="stylesheet" href="{{asset('css/floating-wpp.css')}}" />
		<!-- fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

		<!--AOS-->
		<link href="{{asset('vendor/aos/aos.css')}}" type="text/css" rel="stylesheet"/>
	 
		{{-- menu	 --}}
		@include('common.menu')
		{{-- contenido --}}
		@yield('content')
		
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
	 
	 	{{-- footer --}}
		 @include('common.plantilla_footer')
	 
</body>
</html>