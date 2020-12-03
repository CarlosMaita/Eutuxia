@extends('common.main_plantilla')

@section('title')
<!-- Primary Meta Tags -->
<title>Politicas de privacidad de Oxas</title>
<meta name="title" content="Políticas de privacidad de Oxas">
<meta name="description" content="Encuentra las politicas de privacidad de OXAS, y descubre como protegemos tus datos, como  los usamos y para que los recolectamos.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://oxas.tech/politicas-de-privacidad">
<meta property="og:title" content="Políticas de privacidad de Oxas">
<meta property="og:description" content="Encuentra las Políticas de privacidad de OXAS, y descubre como protegemos tus datos, como  los usamos y para que los recolectamos.">
<meta property="og:image" content="{{asset('imagen/oxas/team.jpg')}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://oxas.tech/politicas-de-privacidad/">
<meta property="twitter:title" content="Políticas de privacidad de Oxas">
<meta property="twitter:description" content="Encuentra las Políticas de privacidad de OXAS, y descubre como protegemos tus datos, como  los usamos y para que los recolectamos.">
<meta property="twitter:image" content="{{asset('imagen/oxas/team.jpg')}}">
{{-- url canonical --}}
<link rel="canonical" href="https://oxas.tech/politicas-de-privacidad" />


@php
// importante para el color de las letras del header dark o light
    $color_header='light';
@endphp
@endsection


@section('content')

    <!-- hero -->
    <section class="hero hero-with-header">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <h1 class="text-decorated"><b>Políticas de Privacidad</b></h1>
              <p>
              El presente Política de Privacidad establece los términos en que <b>Eutuxia Group C.A.</b> usa y protege la información que es proporcionada por sus usuarios al momento de utilizar el sitio web <a href="https://oxas.tech">Oxas.tech</a>. Esta compañía está comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento. Sin embargo esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.
              </p> 
              <h3>
                Información que es recogida
              </h3>
              <p>
              Nuestro sitio web podrá recoger información personal por ejemplo: Nombre,  información de contacto como  su dirección de correo electrónica e información demográfica. Así mismo cuando sea necesario podrá ser requerida información específica para procesar algún pedido o realizar una entrega o facturación.
              Uso de la información recogida
              Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros productos y servicios.  Es posible que sean enviados correos electrónicos periódicamente a través de nuestro sitio con ofertas especiales, nuevos productos y otra información publicitaria que consideremos relevante para usted o que pueda brindarle algún beneficio, estos correos electrónicos serán enviados a la dirección que usted proporcione y podrán ser cancelados en cualquier momento.
              <b>Eutuxia Group C.A.</b> está altamente comprometido para cumplir con el compromiso de mantener su información segura. Usamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no autorizado.
            </p>
            <h3>
              Cookies
            </h3>
              <p>
              Una cookie se refiere a un fichero que es enviado con la finalidad de solicitar permiso para almacenarse en su ordenador, al aceptar dicho fichero se crea y la cookie sirve entonces para tener información respecto al tráfico web, y también facilita las futuras visitas a una web recurrente. Otra función que tienen las cookies es que con ellas las web pueden reconocerte individualmente y por tanto brindarte el mejor servicio personalizado de su web.
              Nuestro sitio web emplea las cookies para poder identificar las páginas que son visitadas y su frecuencia. Esta información es empleada únicamente para análisis estadístico y después la información se elimina de forma permanente. Usted puede eliminar las cookies en cualquier momento desde su ordenador. Sin embargo las cookies ayudan a proporcionar un mejor servicio de los sitios web, estás no dan acceso a información de su ordenador ni de usted, a menos de que usted así lo quiera y la proporcione directamente, Usted puede aceptar o negar el uso de cookies, sin embargo la mayoría de navegadores aceptan cookies automáticamente pues sirve para tener un mejor servicio web. También usted puede cambiar la configuración de su ordenador para declinar las cookies. Si se declinan es posible que no pueda utilizar algunos de nuestros servicios.
            </p>
            <h3>
              Enlaces a Terceros
            </h3>
              <p>
              Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés. Una vez que usted de clic en estos enlaces y abandone nuestra página, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los términos o privacidad ni de la protección de sus datos en esos otros sitios terceros. Dichos sitios están sujetos a sus propias políticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo con estas.
              Control de su información personal
              En cualquier momento usted puede restringir la recopilación o el uso de la información personal que es proporcionada a nuestro sitio web.  Cada vez que se le solicite rellenar un formulario, como el de alta de usuario, puede marcar o desmarcar la opción de recibir información por correo electrónico.  En caso de que haya marcado la opción de recibir nuestro boletín o publicidad usted puede cancelarla en cualquier momento.
              Esta compañía no venderá, cederá ni distribuirá la información personal que es recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden judicial.
            </p>
            <p>
              <b>Eutuxia Group C.A.</b> Se reserva el derecho de cambiar los términos de la presente Política de Privacidad en cualquier momento.
              </p>
            </div>
          </div>
        
        </div>    
      </section>
      <!-- / hero -->
  
      
      <section class="bg-white">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <span class="eyebrow mb-1 text-primary">Para más información, Escribenos...</span>
            </div>
          </div>
          <div class="row">
            <div class="col" id="contacted" >
              @if(session('message'))
              <div class="alert alert-success" role="alert">
                {{session('message')}}
              </div>
              @else
                <div class="alert alert-danger" id="error_container" style="display: none;"></div>
                <form action="{{route('contacto.send')}}" id="form" method="POST">
                  @csrf
                  <div class="form-row mb-1">
                    <div class="col">
                      <input type="text" class="form-control form-control-minimal" id="name" name="name"  placeholder="Nombre">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control form-control-minimal" id="email" name="email" placeholder="Correo">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control form-control-minimal" id="phone" name="phone" placeholder="Telefono">
                    </div>
                  </div>
                  <div class="form-row mb-1">
                    <div class="col">
                      <textarea class="form-control form-control-minimal" name="message" id="message" id="exampleFormControlTextarea1" rows="3" placeholder="Cuentanos de tu proyecto."></textarea>
                    </div>
                  </div>
                  <div class="form-row mt-3">
                    <div class="col">
                      <button class="btn btn-primary px-5" id="button_submit">Enviar</button>
                    </div>
                  </div>
                </form>
              @endif
            </div>
          </div>
        </div>
      </section>
      <script type="text/javascript">
        let submitButton = document.getElementById('button_submit'),
            form = document.getElementById('form'),
            error_container = document.getElementById('error_container'),
            input_name = document.getElementById('name'),
            input_email = document.getElementById('email'),
            input_phone = document.getElementById('phone'),
            input_message = document.getElementById('message');
      
      
          submitButton.addEventListener('click', e => {
            e.preventDefault()
            let errors = [];
      
            error_container.innerHTML = ''
            error_container.style.display = 'none'
      
            if(input_name.value == '')
            {
              errors.push('Debes colocar un nombre')
            }if(input_email.value == '')
            {
              errors.push('Debes colocar un email')
            } if(input_phone.value == '')
            {
              errors.push('Debes colocar un número telefonico')
            } if(input_message.value == '')
            {
              errors.push('Debes colocar un mensaje')
            }
      
            if(errors.length > 0)
            {
              let main = document.createElement('ul')
              errors.forEach(error =>{
                main.innerHTML +=
                `
                  <li>${error}</li>
                `
              })
      
              error_container.appendChild(main)
              error_container.style.display = 'block'
            }else {
              form.submit();
            }
      
          }); 
      </script>

      
@endsection