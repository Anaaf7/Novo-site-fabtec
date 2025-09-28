
    <div class="mt-16">
    <div data-aos="fade-up" data-aos-duration="400" data-aos-delay="200" class="text-5xl text-center">
        <div class="orbitron lg:text-7xl lg:text-left text-shadow-lg leading-snug">
            <h3 class="lg:pl-24">O que há de novo </h3>
            <div class="lg:pl-24 py-1.5 bg-roxo-claro shadow-sm">
                <h4 class="text-white">por aqui?</h4>
            </div>
        </div>
    </div>

    <div class="flex justify-center mt-5">
        <div class="flex flex-col gap-10 mt-10 lg:flex-row">
            <div class="flex flex-col gap-10">
                {{-- Notícia 1 --}}
                <div data-aos="fade-right" data-aos-duration="500" data-aos-delay="300" class="flex flex-col gap-2 m-5">
                    <div class="lg:w-98 h-44">
                        <img src="{{ asset('imgs/noticia2.png') }}" alt="Noticia"
                            class="h-full w-full object-cover shadow-lg border" style="box-shadow: 7px 7px 0px #FBDD6F">
                    </div>

                    <div class="flex flex-col ml-2 leading-none text-left">
                        {{-- Descrição --}}
                        <span class="text-xl font-bold">Equipe uniformizada</span>
                        {{-- Data --}}
                        <span class="text-sm text-[#606060]">21/09/2025</span>
                    </div>
                </div>


                {{-- Notícia 2 --}}
                <div data-aos="fade-right" data-aos-duration="600" data-aos-delay="400" class="flex flex-col gap-2 m-5">
                    <div class="lg:w-98 h-44">
                        <img src="{{ asset('imgs/noticia3.png') }}" alt="Noticia"
                            class="h-full w-full object-cover shadow-lg border"
                            style="box-shadow: -7px 7px 0px #8854D1">
                    </div>

                    <div class="flex flex-col ml-2 leading-none text-left">
                        {{-- Descrição --}}
                        <span class="text-xl font-bold">Visita técnica</span>
                        {{-- Data --}}
                        <span class="text-sm text-[#606060]">10/06/2025</span>
                    </div>
                </div>

            </div>

            {{-- Notícia 3 --}}
            <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="500" class="flex flex-col gap-2 çh-11/12 lg:w-98">
                <img src="{{ asset('imgs/noticia1.png') }}" alt="Noticia" class="h-full w-full object-cover border"
                    style="box-shadow: 7px 7px 0px #2B155E">

                <div class="flex flex-col ml-2 leading-none text-left w-98">
                    {{-- Descrição --}}
                    <span class="text-xl font-bold">Noite de jogos</span>
                    {{-- Data --}}
                    <span class="text-sm text-[#606060]">20/05/2025</span>
                </div>
            </div>
        </div>
    </div>
</div>
