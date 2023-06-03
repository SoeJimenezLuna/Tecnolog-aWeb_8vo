<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos</title>
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
            <img src="/img/base.jpg" alt="" class="relative w-full h-screen">
            <span class='text-white absolute font-Lato font-semibold text-4xl'>Base de datos</span>
        </aside>
        <article class='relative w-full min-h-screen flex flex-row flex-wrap p-2'>
            <div class='relative w-full p-6 text-center'>
                <h2 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>¿Qué son las Bases de Datos?</h2>
            </div>
            <div class='relative w-1/2 p-2'>
                <img src="/img/base2.jpg" alt="" class="relative w-full rounded">
            </div>
            <div class='relative w-1/2 p-2 flex flex-col justify-center'>
                <p class='text-xl font-Lato text-justify'>Una base de datos es una recopilación organizada de información o datos estructurados, que normalmente se almacena de forma electrónica en un sistema informático. 
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>
                    Normalmente, una base de datos está controlada por un sistema de gestión de bases de datos (DBMS). En conjunto, los datos y el DBMS, junto con las aplicaciones asociadas a ellos, reciben el nombre de sistema de bases de datos, abreviado normalmente a simplemente base de datos.
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>Los datos de los tipos más comunes de bases de datos en funcionamiento actualmente se suelen utilizar como estructuras de filas y columnas en una serie de tablas para aumentar la eficacia del procesamiento y la consulta de datos. Así, se puede acceder, gestionar, modificar, actualizar, controlar y organizar fácilmente los datos.</p>
            </div>
        </article>
        <article class='relative w-full min-h-screen flex flex-row flex-wrap p-2 bg-gray-100'>
            <div class='relative w-full p-6 text-center'>
                <h2 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>El lenguaje de consulta estructurada (SQL)</h2>
            </div>
            <div class='relative w-1/2 p-2 flex flex-col justify-center'>
                <p class='text-xl font-Lato text-justify'>El SQL es un lenguaje de programación que utilizan casi todas las bases de datos relacionales para consultar, manipular y definir los datos, además de para proporcionar control de acceso. 
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>El SQL se desarrolló por primera vez en IBM en la década de 1970 con Oracle como uno de los principales contribuyentes, lo que dio lugar a la implementación del estándar ANSI SQL.</p>
                <p class='text-xl font-Lato text-justify mt-4'>El SQL ha propiciado muchas ampliaciones de empresas como IBM, Oracle y Microsoft. Aunque el SQL se sigue utilizando mucho hoy en día, están empezando a aparecer nuevos lenguajes de programación.</p>
            </div>
            <div class='relative w-1/2 p-2'>
                <img src="/img/base1.png" alt="" class="relative w-full rounded">
            </div>
        </article>
        <article class='relative w-full min-h-screen flex flex-row flex-wrap p-2'>
            <div class='relative w-full p-6 text-center'>
                <h2 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>PostgreSQL</h2>
            </div>
            <div class='relative w-1/2 p-2'>
                <img src="/img/base3.png" alt="" class="relative w-full rounded">
            </div>
            <div class='relative w-1/2 p-2 flex flex-col justify-center'>
                <p class='text-xl font-Lato text-justify'>PostgreSQL es un sistema de gestión de base de datos relacional open source de muy alta disponibilidad, gratuito y libre. Este sistema, fruto de las investigaciones realizadas por Michael Stonebraker, profesor de la Universidad de California en Berkeley, se optimiza de forma constante gracias a su activa comunidad de expertos.</p>
                <p class='text-xl font-Lato text-justify mt-4'>
                    PostgreSQL, gracias a sus funcionalidades avanzadas, permite procesar gratis bases de datos de diferentes tipos y complejidades, ofreciendo un rendimiento optimizado.
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>PostgreSQL es un sistema o motor de bases de datos compatible con los servicios de OVHcloud y la mayoría de las herramientas más populares del mercado. Es compatible con diversos modelos de datos para crear aplicaciones orientadas a objetos, potentes y escalables.</p>
            </div>
        </article>
        <footer class='bg-azulClaro relative w-full p-4 flex flex-col flex justify-center items-center'>
            <h5 class='text-white'>Base de Datos</h5>
            <h4 class='text-white'>UPEM</h4>
            <h3 class='text-white'>Ingenería en Sistemas</h3>
            <h3 class='text-white'>8vo Semestre</h3>
        </footer>

</body>
</html>
