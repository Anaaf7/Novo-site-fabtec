<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fabtec</title>

    @vite('resources/css/app.css')
</head>

<body class="inconsolata lg:bg-top lg:bg-contain" style="background-image: url('{{ asset('imgs/background/index.svg') }}')">

    <header class="flex justify-between items-center m-3">
        <img data-aos="fade-up" data-aos-duration="400" data-aos-delay="200" src="{{ asset('imgs/iconeFabtec.png') }}" alt="Logo da Fabtec" class="h-12">

        <div class="flex gap-2 text-sm lg:gap-4">
            <button data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" type="button"
                class="font-bold text-gray-700 p-1 transiiton duration-400 hover:underline underline-offset-4 decoration-[#FBDD6F] hover:text-black">Sobre</button>
            <button data-aos="fade-up" data-aos-duration="600" data-aos-delay="400" type="button"
                class="font-bold text-gray-700 p-1 transiiton duration-400 hover:underline underline-offset-4 decoration-[#FBDD6F] hover:text-black">Blog</button>
            <button data-aos="fade-up" data-aos-duration="700" data-aos-delay="500" type="button"
                class="font-bold text-gray-700 p-1 transiiton duration-400 hover:underline underline-offset-4 decoration-[#FBDD6F] hover:text-black">Membros</button>
            <button data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" type="button"
                class="font-bold text-gray-700 p-1 transiiton duration-400 hover:underline underline-offset-4 decoration-[#FBDD6F] hover:text-black">Projetos</button>
        </div>

        <button data-aos="fade-up" data-aos-duration="900" data-aos-delay="700" type="button"
            class="font-bold px-1.5 py-0.5 bg-[#FBDD6F] border rounded-lg shadow-sm transition duration-500 hover:bg-black hover:text-white hover:border-black lg:text-lg lg:px-4">
            Logar
        </button>
    </header>
