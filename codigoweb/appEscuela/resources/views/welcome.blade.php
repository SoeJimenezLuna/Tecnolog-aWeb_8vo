<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aplicacion WEB</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body >
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
            <img src="/img/inicio.jpg" alt="" class="relative w-full h-screen">
            <span class='text-white absolute font-Lato font-semibold text-4xl'>Tecnologías Web</span>
        </aside>
        <article class='relative w-full min-h-screen flex flex-row flex-wrap p-2'>
            <div class='relative w-full p-6 text-center'>
                <h2 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>¿Qué son las Tecnologías Web?</h2>
            </div>
            <div class='relative w-1/2 p-2'>
                <img src="/img/imagen2.jpg" alt="" class="relative w-full rounded">
            </div>
            <div class='relative w-1/2 p-2 flex flex-col justify-center'>
                <p class='text-xl font-Lato text-justify'>Las tecnologías web avanzan rápidamente y es necesario estar al día de las tecnologías más actuales. Las diferentes tecnologías permiten crear interfaces de usuario y establecer las comunicaciones con el servidor, además de implementar comportamientos de la web en el servidor.  
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>Hay que distinguir entre tecnologías backend (que trabajan del lado del servidor) y tecnologías frontend (que trabajan del lado del cliente).</p>
            </div>
        </article>
        <article class='relative w-full min-h-screen flex flex-row flex-wrap p-2 bg-gray-100'>
            <div class='relative w-full p-6 text-center'>
                <h2 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>Tecnologías FrontEnd o del lado del Cliente</h2>
            </div>
            <div class='relative w-1/2 p-2 flex flex-col justify-center'>
                <p class='text-xl font-Lato text-justify'>Son las que se ocupan de la creación de interfaces de usuario y de establecer comunicaciones con el servidor. Entre ellas podemos encontrar las siguientes: 
                    <h4 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>JavaScript</h4>
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>
                    Al usar este lenguaje de programación multiplataforma es posible dar una mayor interactividad y dinamismo a los sitios web. Y esto es así porque permite crear tanto animaciones como objetos, localizar errores en formularios, cambiar elementos web de manera intuitiva y crear cookies, etc. Además, también permite desarrollar aplicaciones tan potentes como Facebook o Twitter. Por esto, JavaScript es una de las tecnologías web más usadas en la actualidad.
                    <h4 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>HTML</h4>
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>
                    Este es un lenguaje de programación usado para la creación de sitios web. Como las tecnologías evolucionan a pasos agigantados, HTML está en constante renovación, la versión actual es HTML5. Consiste en un conjunto de códigos cortos, que se clasifican como archivos de textos en las etiquetas. Es decir, el texto se guarda en un archivo llamado HTML que se puede encontrar a través de los buscadores. Cada una de las etiquetas generadas tiene diferentes funciones. 
                    <h4 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>CSS</h4>
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>
                    Es una de las tecnologías web a la que más recurren los programadores gráficos a la hora de desarrollar sus proyectos. Es un lenguaje de diseño gráfico que sirve, entre otras muchas funciones, para indicar la representación visual de las estructuras HTML, así como las estructuras HTML definidas anteriormente deben representarse visualmente. De esta manera, el lenguaje CSS sirve para acotar y trazar el aspecto visual de las etiquetas generadas por el HTML. 
                </p>
                </div>
            <div class='relative w-1/2 p-2'>
                <img src="/img/pro.png" alt="" class="relative w-full rounded">
                <BR><br>
                <img src="/img/imagen1.jpg" alt="" class="relative w-full rounded">
            </div>
        </article>
        <article class='relative w-full min-h-screen flex flex-row flex-wrap p-2'>
            <div class='relative w-full p-6 text-center'>
                <h2 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>Tecnologías BackEnd o del lado del Servidor</h2>
            </div>
            <div class='relative w-1/2 p-2'>
                <img src="/img/pantalla.png" alt="" class="relative w-full rounded">
                <br><br>
                <img src="/img/cueva.jpg" alt="" class="relative w-full rounded">
                <br><br>
                <img src="/img/code.jpg" alt="" class="relative w-full rounded">
            </div>
            <div class='relative w-1/2 p-2 flex flex-col justify-center'>
                <p class='text-xl font-Lato text-justify'>Son las que se ocupan de la implementación de comportamientos de la web en el servidor. Entre ellas, podemos distinguir las siguientes: 
                </p>

                <h4 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>PHP</h4>
                <p class='text-xl font-Lato text-justify mt-4'>
                    La característica principal de PHP es que se usa para la comunicación de tu sitio web con un servidor de datos. Y gracias a esta comunicación es posible crear un contenido dinámico que permite trabajar con bases de datos como MySQL y con HTML. Así, gracias a este lenguaje de programación de propósito general, es posible proceder a la recopilación de datos de formularios, la modificación de base de datos o la administración de archivos en el servidor, entre muchos otros.
                </p>
                
                <h4 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>PYTHON</h4>
                <p class='text-xl font-Lato text-justify mt-4'>
                    Se trata de un lenguaje de programación cuya popularidad está creciendo. Y eso es porque, además de tener un número alto de librerías, es totalmente gratis. Sin embargo, y a pesar de su sencillez, es bastante potente, ya que usa menos líneas de código que cualquier otro lenguaje de programación para cualquier aplicación que se ejecute. Y eso supone una gran ventaja respecto a otros tipos de lenguajes de programación.
                </p>

                <h4 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>JAVA EE</h4>
                <p class='text-xl font-Lato text-justify mt-4'>
                    El Java Enterprise Edition, también conocido como Jakarta EE, es un grupo de tecnologías que se dedica al desarrollo de Java del lado del servidor. Se orienta, en concreto, a objetos de alto nivel, es decir, al desarrollo de aplicaciones empresariales, pero a gran escala. Por tanto, el Java EE suele ser utilizado en tipos de proyectos que necesiten abarcar una mayor cantidad de recursos.
                </p>

                <h4 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>MYSQL</h4>
                <p class='text-xl font-Lato text-justify mt-4'>
                    MySQL es una base de datos relacional y es el sistema gestor de bases de datos que más utilizan los programadores en la actualidad. Y esto es por varias razones, entre ellas, que está basada en un código abierto GPL, que es multiplataforma y que está desarrollado en C. 
                </p>

                <h4 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>MONGO DB</h4>
                <p class='text-xl font-Lato text-justify mt-4'>
                    Por la potencia que ofrece a sus usuarios, Mongo DB es una de las bases de datos más utilizadas en la actualidad y es una base de datos NoSQL. Es un sistema de código abierto que permite un desarrollo rápido e iterativo que asegura nuevos niveles de escalabilidad y disponibilidad. 
                </p>
            </div>
        </article>
        <footer class='bg-black relative w-full p-4 flex flex-col flex justify-center items-center'>
            <h5 class='text-white'>Tecnologías Web</h5>
            <h4 class='text-white'>UPEM</h4>
            <h3 class='text-white'>Ingenería en Sistemas</h3>
            <h3 class='text-white'>8vo Semestre</h3>
        </footer>



    </body>
</html>
