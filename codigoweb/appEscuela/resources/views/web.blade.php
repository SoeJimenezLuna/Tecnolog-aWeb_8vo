<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desarrollo web</title>
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
            <img src="/img/web.jpg" alt="" class="relative w-full h-screen">
            <span class='text-white absolute font-Lato font-semibold text-4xl'>Desarrollo Web</span>
        </aside>
        <article class='relative w-full min-h-screen flex flex-row flex-wrap p-2'>
            <div class='relative w-full p-6 text-center'>
                <h2 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>¿Qué es el desarrollo web?</h2>
            </div>
            <div class='relative w-1/2 p-2'>
                <img src="/img/back1.jpg" alt="" class="relative w-full rounded">
            </div>
            <div class='relative w-1/2 p-2 flex flex-col justify-center'>
                <p class='text-xl font-Lato text-justify'>Podemos definir el Desarrollo Web como el proceso de creación de un sitio web, una aplicación o un software. Se debe hacer un estudio para determinar las necesidades del cliente y a partir de ahí poner en marcha una interfaz atractiva e incorporar funcionalidades para el usuario final.                </p>
            </div>
        </article>
        <article class='relative w-full min-h-screen flex flex-row flex-wrap p-2 bg-gray-100'>
            <div class='relative w-full p-6 text-center'>
                <h2 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>¿Qué es un Desarrollador Web?</h2>
            </div>
            <div class='relative w-1/2 p-2 flex flex-col justify-center'>
                <p class='text-xl font-Lato text-justify'>Pues el encargado de hacer efectivo todo lo dicho anteriormente. Es decir, los desarrolladores web hacen uso de varios lenguajes de programación para hacer sitios web que satisfagan completamente las necesidades de sus clientes.
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>
                    En función de la importancia del proyecto que se tenga entre manos, pueden ser varios los programadores que se encarguen de diferentes aspectos del Desarrollo Web y deban trabajar en equipo para sacarlo adelante.
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>Además de picar cientos de líneas de HTML, los Desarrolladores Web deben tener reuniones con clientes y diseñadores para conocer y entender sus objetivos, probar las funciones del sitio según se vayan haciendo avances, ver cuál es el rendimiento del sitio una vez que se pone en funcionamiento e incluso realizar un mantenimiento continuo. Para ello, saber escuchar y tener habilidades de comunicación y trabajo en equipo, es casi igual de imprescindible que manejar con los ojos cerrados los lenguajes de programación.</p>
                <p class='text-xl font-Lato text-justify mt-4'>El campo profesional del Desarrollo Web es uno de los que carece de profesionales expertos, por eso se ha convertido en uno de los trabajos más demandados y con salarios más que atractivos. Mucha demanda, muy poca oferta.</p>
                <p class='text-xl font-Lato text-justify mt-4'>Sin embargo, no todo es un camino de rosas, no se trata de hacer un curso de programación y listo. Es importante invertir mucho esfuerzo y dominar al menos un par de lenguajes de programación, incluso familiarizarse con dos de los procesos de Desarrollo Web más populares: Waterfall (desarrollo en cascada) y Agile.</p>
            </div>
            <div class='relative w-1/2 p-2'>
                <img src="/img/back2.jpg" alt="" class="relative w-full rounded">
                <br><br>
                <img src="/img/back3.jpg" alt="" class="relative w-full rounded">
            </div>
        </article>
        <article class='relative w-full min-h-screen flex flex-row flex-wrap p-2'>
            <div class='relative w-full p-6 text-center'>
                <h2 class='relative w-full p-6 text-center font-Mont font-bold text-5xl text-azulMedio'>Metodologías populares: Waterfall vs Agile</h2>
            </div>
            <div class='relative w-1/2 p-2'>
                <img src="/img/back5.jpg" alt="" class="relative w-full rounded">
            </div>
            <div class='relative w-1/2 p-2 flex flex-col justify-center'>
                <p class='text-xl font-Lato text-justify'>Tanto si el desarrollo profesional se realiza para una empresa, como si se hace de manera independiente, como freelance, el trabajo de un Desarrollador Web implica la capacidad de administrar diferentes proyectos simultáneamente.</p>
                <p class='text-xl font-Lato text-justify mt-4'>
                    Como podrás imaginar, cada nueva función o aplicación del sitio en el que se está trabajando, cuenta con una extensa lista de tareas pendientes y, para que se puedan mantener todos estos proyectos en marcha, se utilizan dos metodologías populares.
                </p>
                <p class='text-xl font-Lato text-justify mt-4'>Se trata de un proceso lineal que va guiando a los desarrolladores paso a paso, desde la planificación del sitio web hasta su implementación y su posterior mantenimiento. Si nos decantamos por este método, podemos dedicar semanas a dicha planificación y la producción y, por último, presentar el proyecto completo al cliente.</p>
            </div>
                <div class='relative p-2 flex flex-col justify-center'>
                <p class='text-xl font-Lato text-justify mt-4'>Por otro lado, con la metodología Agile se busca abordar un proyecto por “partes”. Es decir, presentando diferentes etapas y procesos al cliente a medida que se van desarrollando.</p>
                <p class='text-xl font-Lato text-justify mt-4'>De esta manera, el Desarrollador Web irá recopilando los comentarios del cliente a medida que avanza el proyecto, sin esperar a que se haya completado. Esta metodología se ha vuelto cada vez más popular, ya que la satisfacción del cliente será mayor y se podrán optimizar los tiempos por parte del equipo de desarrollo.</p>
            </div>
        </article>
        <footer class='bg-slate-600 relative w-full p-4 flex flex-col flex justify-center items-center'>
            <h5 class='text-white'>Desarrollo Web</h5>
            <h4 class='text-white'>UPEM</h4>
            <h3 class='text-white'>Ingenería en Sistemas</h3>
            <h3 class='text-white'>8vo Semestre</h3>
        </footer>

</body>
</html>
