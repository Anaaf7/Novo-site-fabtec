<div class="mt-16">
   <div class="text-4xl text-center">
     <div data-aos="fade-up" data-aos-duration="400" data-aos-delay="200"  class="space-x-4 lg:pl-24 orbitron lg:text-7xl lg:text-left text-shadow-lg leading-snug">
        <h6>Nossos <br class="hidden lg:block">
            <span class="bg-[#6A50A9] py-1 lg:px-6 text-white relative">desenvolvedores

                <img src="{{ asset('imgs/estrela.png') }}" alt="Estrela" class="hidden lg:block absolute top-0 right-0">
            </span>
        </h6>
    </div>
   </div>


    <div class="flex flex-col justify-center items-center gap-10 lg:mt-10 m-5 lg:flex-row lg:m-0">
        {{-- Professores --}}
        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300"  class="flex flex-col gap-3 py-7 px-7 border rounded-lg shadow-lg bg-gray-300 transition duration-500 hover:scale-105 hover:border-[#2B155E]">
            <img src="{{ asset('imgs/professor.png') }}" alt="Professor" class="w-54">

            <span class="text-[#2B155E] text-3xl font-extrabold">Professores</span>

           <div>
             <button type="button" class="px-5 py-1 bg-[#2B155E] text-gray-300 font-bold text-lg rounded-lg shadow-lg transition duration-500 group-hover:bg-black">Conheça</button>
           </div>
        </div>

        {{-- Mentores --}}
        <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="400"  class="flex flex-col gap-3 py-7 px-7 border rounded-lg shadow-lg bg-gray-300 transition duration-500 hover:scale-105 hover:border-[#2B155E]">
            <img src="{{ asset('imgs/mentor.png') }}" alt="Professor" class="w-54">

            <span class="text-[#2B155E] text-3xl font-extrabold">Mentores</span>

           <div>
             <button type="button" class="px-5 py-1 bg-[#2B155E] text-gray-300 font-bold text-lg rounded-lg shadow-lg transition duration-500 group-hover:bg-black">Conheça</button>
           </div>
        </div>

        {{-- Alunos voluntários --}}
        <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="500"  class="flex flex-col gap-3 py-7 px-7 border rounded-lg shadow-lg bg-gray-300 group transition duration-500 hover:scale-105 hover:border-[#2B155E]">
            <img src="{{ asset('imgs/voluntario.png') }}" alt="Professor" class="w-54">

            <span class="text-[#2B155E] text-3xl font-extrabold">Voluntários</span>

           <div>
             <button type="button" class="px-5 py-1 bg-[#2B155E] text-gray-300 font-bold text-lg rounded-lg shadow-lg transition duration-500 group-hover:bg-black">Conheça</button>
           </div>
        </div>
    </div>
</div>
