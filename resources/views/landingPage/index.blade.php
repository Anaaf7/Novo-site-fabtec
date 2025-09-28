@include('landingPage.header')

<div class="flex flex-col justify-center mt-18 text-center">

    <div class="flex justify-center">
        <img src="{{ asset('imgs/logo.png') }}" alt="Logo da Fabtec" class="w-4xl">
    </div>
    <h1 class="raveo text-[#662ECD] text-3xl">Fábrica de Soluções Tecnológicas</h1>

    {{-- Seção de conquistas --}}
    @include('landingPage.conquista')

    {{-- Seção do sobre nós --}}
    @include('landingPage.sobre')

    {{-- Seção de notícia --}}
    @include('landingPage.noticias')

    {{-- Seção de projeto --}}
    @include('landingPage.projeto')

    {{-- Seção de membro --}}
    @include('landingPage.membro')
</div>

@include('landingPage.footer')
