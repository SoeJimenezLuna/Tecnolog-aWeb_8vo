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
                <h2 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>¿Qué es el desarrollo web?</h2>
            </div>
            <div class='relative w-1/2 p-2'>
                <img src="/img/imagen2.jpg" alt="" class="relative w-full rounded">
            </div>
            <div class='relative w-1/2 p-2 flex flex-col justify-center'>
                <p class='text-xl font-Lato text-justify'>El desarrollo web involucra a todas las disciplinas que se encargan de crear sitios web o aplicaciones, y aunque creamos que tiene que ver con un ámbito en específico, la realidad es que el desarrollo web involucra una cantidad de términos
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>
                También se puede decir que el desarrollo web involucra a todas las disciplinas que se encargan de crear sitios web o aplicaciones, y aunque creamos que tiene que ver con un ámbito en específico, la realidad es que el desarrollo web involucra una cantidad de términos y herramientas que hace necesario dividir las áreas del desarrollo web para una mejor comprensión.
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>El diseño web tiene que ver con la apariencia y lo que transmite un sitio web, es decir, que tiene que ver con el diseño gráfico, la gama de colores, logo y todo lo que comprenda la percepción visual de un sitio web.</p>
            </div>
        </article>
        <article class='relative w-full min-h-screen flex flex-row flex-wrap p-2 bg-gray-100'>
            <div class='relative w-full p-6 text-center'>
                <h2 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>¿Qué es el desarrollo web?</h2>
            </div>
            <div class='relative w-1/2 p-2 flex flex-col justify-center'>
                <p class='text-xl font-Lato text-justify'>El desarrollo web involucra a todas las disciplinas que se encargan de crear sitios web o aplicaciones, y aunque creamos que tiene que ver con un ámbito en específico, la realidad es que el desarrollo web involucra una cantidad de términos
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>
                También se puede decir que el desarrollo web involucra a todas las disciplinas que se encargan de crear sitios web o aplicaciones, y aunque creamos que tiene que ver con un ámbito en específico, la realidad es que el desarrollo web involucra una cantidad de términos y herramientas que hace necesario dividir las áreas del desarrollo web para una mejor comprensión.
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>El diseño web tiene que ver con la apariencia y lo que transmite un sitio web, es decir, que tiene que ver con el diseño gráfico, la gama de colores, logo y todo lo que comprenda la percepción visual de un sitio web.</p>
            </div>
            <div class='relative w-1/2 p-2'>
                <img src="/img/imagen2.jpg" alt="" class="relative w-full rounded">
            </div>
        </article>
        <article class='relative w-full min-h-screen flex flex-row flex-wrap p-2'>
            <div class='relative w-full p-6 text-center'>
                <h2 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>¿Qué es el desarrollo web?</h2>
            </div>
            <div class='relative w-1/2 p-2'>
                <img src="/img/imagen2.jpg" alt="" class="relative w-full rounded">
            </div>
            <div class='relative w-1/2 p-2 flex flex-col justify-center'>
                <p class='text-xl font-Lato text-justify'>El desarrollo web involucra a todas las disciplinas que se encargan de crear sitios web o aplicaciones, y aunque creamos que tiene que ver con un ámbito en específico, la realidad es que el desarrollo web involucra una cantidad de términos
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>
                También se puede decir que el desarrollo web involucra a todas las disciplinas que se encargan de crear sitios web o aplicaciones, y aunque creamos que tiene que ver con un ámbito en específico, la realidad es que el desarrollo web involucra una cantidad de términos y herramientas que hace necesario dividir las áreas del desarrollo web para una mejor comprensión.
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>El diseño web tiene que ver con la apariencia y lo que transmite un sitio web, es decir, que tiene que ver con el diseño gráfico, la gama de colores, logo y todo lo que comprenda la percepción visual de un sitio web.</p>
            </div>
        </article>
        <footer class='bg-azulFuerte relative w-full p-4 flex flex-col flex justify-center items-center'>
            <h5 class='text-white'>Tecnologías Web</h5>
            <h4 class='text-white'>UPEM</h4>
            <h3 class='text-white'>Ingenería en Sistemas</h3>
            <h3 class='text-white'>8vo Semestre</h3>
        </footer>

</body>
</html>
