<div class="mt-10">
    <div class="bg-cover p-10 shadow-lg" style="background-image: url('{{ asset('imgs/background/projeto.png') }}')">
        <div class="flex flex-col justify-between gap-10 items-center lg:flex-row lg:gap-0">
            <div data-aos="fade-up" data-aos-duration="400" data-aos-delay="200" class="flex flex-col text-5xl text-center">
                <h5 class="orbitron lg:text-7xl lg:text-left text-white text-shadow-lg leading-20">Conheça os <br class="hidden lg:block"> projetos da
                    <br class="hidden lg:block"> Fabtec</h5>

                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" class="flex justify-center lg:justify-start mt-5 text-lg">
                    <button type="button" class="bg-[#FBDD6F] px-4 py-1.5 rounded-sm shadow-lg border font-extrabold">Conheça os devs</button>
                </div>
            </div>

            {{-- Projeto 1 --}}
            <div data-aos="fade-left" data-aos-duration="600" data-aos-delay="400" class="flex flex-col gap-1 px-5 py-5 bg-white shadow-lg rounded-2xl border-2 border-[#FBDD6F] text-left">
                <img src="{{ asset('imgs/projeto1.jpg') }}" alt="Projeto" class="h-40 object-cover rounded-lg shadow-lg">

                <div class="flex flex-col leading-none">
                     {{-- Nome--}}
                    <span class="text-3xl font-extrabold">Litterae</span>
                     {{-- Descrição --}}
                <span>Concurso literário do IFC</span>
                </div>
            </div>

             {{-- Projeto 2 --}}
            <div data-aos="fade-left" data-aos-duration="700" data-aos-delay="500" class="flex flex-col gap-1 px-5 py-5 bg-white shadow-lg rounded-2xl border-2 border-[#FBDD6F] text-left">
                <img src="{{ asset('imgs/projeto2.png') }}" alt="Projeto" class="h-40 object-cover rounded-lg shadow-lg">

                <div class="flex flex-col leading-none">
                     {{-- Nome--}}
                    <span class="text-3xl font-extrabold">Biometria</span>
                     {{-- Descrição --}}
                <span>Controle de acesso do IFC</span>
                </div>
            </div>
        </div>
    </div>
</div>
