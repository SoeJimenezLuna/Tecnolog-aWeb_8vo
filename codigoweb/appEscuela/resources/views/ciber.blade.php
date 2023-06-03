<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciberseguridad</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header class='relative w-full bg-azulClaro flex flex-row justify-between items-center p-4'>
            <img src="/img/logo.png" alt="" class="relative w-14">

            @if (Route::has('login'))
                <div class="relative ">
                    <a href="{{ url('/') }}" class=" font-Lato text-white hover:text-azulMedio  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mr-2">Inicio</a>
                    <a href="{{ url('/desarrolloweb') }}" class=" font-Lato text-white hover:text-azulMedio  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mr-2">Web</a>
                    <a href="{{ url('/basededatos') }}" class=" font-Lato text-white hover:text-azulMedio  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mr-2">Base de Datos</a>
                    <a href="{{ url('/ciberseguridad') }}" class=" font-Lato text-white hover:text-azulMedio  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mr-2">Ciberseguridad</a>
                    @auth
                        <a href="{{ url('/dashboard') }}" class=" font-Lato text-white hover:text-azulMedio  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class=" font-Lato text-white hover:text-azulMedio  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login</a>

                        @if (Route::has('register'))
                             <a href="{{ route('register') }}" class="ml-4  font-Lato text-white hover:text-azulMedio  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registro</a>
                        @endif
                    @endauth
                </div>
            @endif
        </header>
        <aside class='relative flex flex-row justify-center items-center'>
            <img src="/img/hacking.jpg" alt="" class="relative w-full h-screen">
            <span class='text-white absolute font-Lato font-semibold text-4xl'>Ciberseguridad</span>
        </aside>
        <article class='relative w-full min-h-screen flex flex-row flex-wrap p-2'>
            <div class='relative w-full p-6 text-center'>
                <h2 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>¿Qué es la Ciberseguridad?</h2>
            </div>
            <div class='relative w-1/2 p-2'>
                <img src="/img/cibe1.jpg" alt="" class="relative w-full rounded">
            </div>
            <div class='relative w-1/2 p-2 flex flex-col justify-center'>
                <p class='text-xl font-Lato text-justify'>La ciberseguridad es la práctica de proteger equipos, redes, aplicaciones de software, sistemas críticos y datos de posibles amenazas digitales. Las organizaciones tienen la responsabilidad de proteger los datos para mantener la confianza del cliente y cumplir la normativa.
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>
                    Utilizan medidas y herramientas de ciberseguridad para proteger los datos confidenciales del acceso no autorizado, así como para evitar interrupciones en las operaciones empresariales debido a una actividad de red no deseada.
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>Las organizaciones implementan la ciberseguridad al optimizar la defensa digital entre las personas, los procesos y las tecnologías. </p>
            </div>
        </article>
        <article class='relative w-full min-h-screen flex flex-row flex-wrap p-2 bg-gray-100'>
            <div class='relative w-full p-6 text-center'>
                <h2 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>Importancia de la Ciberseguridad</h2>
            </div>
            <div class='relative w-1/2 p-2 flex flex-col justify-center'>
                <p class='text-xl font-Lato text-justify'>En los negocios de varios sectores, como la energía, el transporte, el comercio al detalle y la fabricación, use sistemas digitales y conectividad de alta velocidad para proporcionar un servicio eficiente al cliente y ejecutar operaciones empresariales rentables. Igual que protegen los recursos físicos, deben proteger también los recursos digitales y los sistemas frente al acceso no intencionado. 
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>
                    El evento no intencionado de incumplimiento y acceso no autorizado a un sistema informático, una red o recursos conectados se denomina ciberataque. 
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>El éxito de un ciberataque produce la exposición, sustracción, eliminación o alteración de datos confidenciales. </p>
            </div>
            <div class='relative w-1/2 p-2'>
                <img src="/img/cibe2.jpg" alt="" class="relative w-full rounded">
            </div>
        </article>
        <article class='relative w-full min-h-screen flex flex-row flex-wrap p-2'>
            <div class='relative w-full p-6 text-center'>
                <h2 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>Tipos de ataque contra los que intenta defender la ciberseguridad</h2>
            </div>
            <div class='relative w-1/2 p-2'>
                <img src="/img/cibe3.jpg" alt="" class="relative w-full rounded">
                <br><br>
                <img src="/img/cibe4.jpg" alt="" class="relative w-full rounded">
                <br><br>
                <img src="/img/cibe5.jpg" alt="" class="relative w-full rounded">
            
            </div>
            <div class='relative w-1/2 p-2 flex flex-col justify-center'>
                <p class='text-xl font-Lato text-justify'>Los profesionales de ciberseguridad se esfuerzan por contener y mitigar las amenazas, tanto nuevas como existentes, que se infiltran en los sistemas informáticos de distintas maneras. A continuación, se ofrecen algunos ejemplos de ciberamenazas comunes.
                    <h4 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>Malware</h4>
                </p>

                <p class='text-xl font-Lato text-justify mt-4'>
                    Malware significa software malintencionado. Incluye una variedad de programas de software creados para permitir que terceras partes accedan de manera no autorizada a información confidencial o interrumpan el funcionamiento normal de una infraestructura crítica. Entre los ejemplos más comunes de malware se incluyen los troyanos, spyware y virus.
                    <h4 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>Ransomware</h4>
                </p>

                <p class='text-xl font-Lato text-justify mt-4'>
                    Ransomware hace referencia a un modelo empresarial y a un amplio rango de tecnologías asociadas que los delincuentes pueden usar para extorsionar dinero a entidades. Independientemente de si acaba de empezar o está construyendo sobre AWS, tenemos recursos dedicados que le ayudarán a proteger los sistemas críticos y los datos confidenciales frente al ransomware.
                    <h4 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>Ataque de intermediario</h4>
                </p>

                <p class='text-xl font-Lato text-justify mt-4'>
                    Un ataque de intermediario implica que una parte externa intenta acceder de forma no autorizada por una red durante un intercambio de datos. Dichos ataques aumentan los riesgos de seguridad de la información confidencial, como los datos financieros. 
                    <h4 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>Phishing</h4>
                </p>

                <p class='text-xl font-Lato text-justify mt-4'>
                    Pishing es una ciberamenaza que usa técnicas de ingeniería social para engañar a los usuarios a fin de que revelen información de identificación personal. Por ejemplo, los atacantes cibernéticos envían correos electrónicos que inducen a los usuarios a hacer clic e introducir los datos de la tarjeta de crédito en una página web de pagos ficticia.  
                </p>
                
            </div>
        </article>
        <footer class='bg-green-950 relative w-full p-4 flex flex-col flex justify-center items-center'>
            <h5 class='text-white'>Tecnologías Web</h5>
            <h4 class='text-white'>UPEM</h4>
            <h3 class='text-white'>Ingenería en Sistemas</h3>
            <h3 class='text-white'>8vo Semestre</h3>
        </footer>

</body>
</html>
