<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    @vite('resources/css/app.css')
    @vite('resources/js/projeto/script.js')
    <style>
        .step {
            display: none;
        }

        .step.active {
            display: block;
        }
    </style>
</head>

<body class="bg-gray-100 lg:min-h-screen flex flex-col lg:items-center lg:justify-center">

    <div class="flex justify-between w-full ">
        <div class="hidden lg:flex justify-between w-full p-4">
            <img src="{{ asset('imgs/iconeFabtec.png') }}" alt="Logo da Fabtec" class="h-14">
            <a href="/landingPage/"><i class="fas fa-home text-[#662ECD] text-3xl"></i></a>
        </div>
    </div>

    <form action="" id="multiStepForm" method="post"
        class="w-full max-w-7xl lg:w-3/4 grid grid-cols-1 lg:grid-cols-2 shadow-lg rounded-lg overflow-hidden">
        <!-- HEADER + PROGRESS -->
        <div
            class="col-span-1 lg:col-span-2 bg-[#662ECD] lg:bg-gradient-to-r lg:from-[#662ECD] lg:from-50% lg:to-white lg:to-50% p-6">
            <div class="flex justify-between w-full p-4 lg:hidden block">

                <!--Precisa colocar a logo branca aqui-->
                <img src="{{ asset('imgs/iconeFabtecBranca.png') }}" alt="Logo da Fabtec" class="h-14 text-white">

                <a href="/landingPage/"><i class="fas fa-home text-white text-3xl"></i></a>
            </div>
            <div class="flex justify-center gap-4 lg:ml-14">
                <h1 class="text-white text-4xl font-extrabold">NOVO</h1>
                <h1 class="text-[#662ECD] text-4xl font-extrabold hidden lg:block">
                    PROJETO
                </h1>
                <h1 class="text-white text-4xl font-extrabold lg:hidden block">
                    PROJETO
                </h1>
            </div>

            <div
                class="w-full lg:bg-gradient-to-r lg:from-[#662ECD] lg:from-50% lg:to-white lg:to-50% rounded-full h-5 mt-8">
                <div id="progressBar" class="bg-[#F8DD6F] h-5 rounded-full w-0 transition-all duration-300"></div>
            </div>
        </div>

        <!-- COLUNA ESQUERDA -->
        <div class="bg-[#662ECD] max-h-screen p-6 flex flex-col justify-center">
            <div class="step active" id="step1">
                <div class="flex flex-col gap-8">
                    <div>
                        <label for="nome" class="font-bold text-white lg:text-2xl">NOME DO PROJETO</label>
                        <input type="text" id="nome" required placeholder="Digite o nome do projeto"
                            class="border border-gray-300 bg-white p-3 lg:p-4 rounded-md w-full focus:outline-none focus:ring-0 hover:bg-gray-100" />
                    </div>
                    <div>
                        <label for="descricao" class="font-bold text-white lg:text-2xl">DESCRIÇÃO</label>
                        <input type="text" id="descricao" required placeholder="Digite a descrição do projeto"
                            class="border border-gray-300 bg-white p-3 lg:p-4 rounded-md w-full focus:outline-none focus:ring-0 hover:bg-gray-100" />
                    </div>
                    <div>
                        <label for="categoria" class="font-bold text-white lg:text-2xl">CATEGORIA</label>
                        <input type="text" id="categoria" required placeholder="Digite a categoria do projeto"
                            class="border border-gray-300 bg-white p-3 lg:p-4 rounded-md w-full focus:outline-none focus:ring-0 hover:bg-gray-100" />
                    </div>
                    <div>
                        <label for="status" class="font-bold text-white lg:text-2xl">STATUS</label>
                        <input type="text" id="status" required placeholder="Digite o status do projeto"
                            class="border border-gray-300 bg-white p-3 lg:p-4 rounded-md w-full focus:outline-none focus:ring-0 hover:bg-gray-100" />
                    </div>
                    <div>
                        <label for="file" class="font-bold text-white lg:text-2xl">IMAGEM DA CAPA</label>
                        <input type="file" id="file" required
                            class="border border-gray-300 bg-white p-3 lg:p-4 rounded-md w-full focus:outline-none focus:ring-0 hover:bg-gray-100" />
                    </div>
                    <button type="submit" onclick="nextStep()"
                        class="bg-[#FBDD6F] mt-2 font-bold text-[#662ECD] text-[18px] p-3 lg:p-4 rounded-md transition-transform duration-200 hover:scale-90">
                        PRÓXIMO
                    </button>
                </div>
            </div>

            <!-- SEGUNDA ETAPA -->
            <div class="step" id="step2">
                <div class="flex flex-col gap-8">
                    <div>
                        <label for="tecnologias" class="font-bold text-[#662ECD] lg:text-white lg:text-2xl">TECNOLOGIAS
                            USADAS</label>
                        <input type="text" id="tecnologias" required placeholder="Digite as tecnologias usadas"
                            class="border border-gray-300 bg-white p-3 lg:p-4 rounded-md w-full focus:outline-none focus:ring-0 hover:bg-gray-100" />
                    </div>
                    <div>
                        <label for="data" class="font-bold text-[#662ECD] lg:text-white lg:text-2xl">DATA DE
                            INÍCIO/TÉRMINO</label>
                        <input type="text" id="data" required placeholder="Digite a data de início/término"
                            class="border border-gray-300 bg-white p-3 lg:p-4 rounded-md w-full focus:outline-none focus:ring-0 hover:bg-gray-100" />
                    </div>
                    <div>
                        <label for="equipe" class="font-bold text-[#662ECD] lg:text-white lg:text-2xl">EQUIPE</label>
                        <input type="text" id="equipe" required placeholder="Digite a equipe do projeto"
                            class="border border-gray-300 bg-white p-3 lg:p-4 rounded-md w-full focus:outline-none focus:ring-0 hover:bg-gray-100" />
                    </div>
                    <div>
                        <label for="repositorio"
                            class="font-bold text-[#662ECD] lg:text-white lg:text-2xl">REPOSITÓRIO</label>
                        <input type="text" id="repositorio" required placeholder="Digite o repositório do projeto"
                            class="border border-gray-300 bg-white p-3 lg:p-4 rounded-md w-full focus:outline-none focus:ring-0 hover:bg-gray-100" />
                    </div>
                    <button type="button" onclick="prevStep()"
                        class="bg-[#FBDD6F] font-bold text-[#662ECD] text-[20px] p-3 lg:p-4 rounded-md transition-transform duration-200 hover:scale-90">Voltar</button>
                    <button type="submit"
                        class="bg-[#FBDD6F] font-bold text-[#662ECD] text-[18px] p-3 lg:p-4 rounded-md transition-transform duration-200 hover:scale-90">
                        ADCIONAR PROJETO
                    </button>
                </div>
            </div>
        </div>

        <!-- COLUNA DIREITA -->
        <div class="bg-white p-6 hidden lg:flex flex-col items-center justify-center">
            <figure class="flex items-center justify-center h-full">
                <img src="{{ asset('imgs/background/img-projeto-fabtec.png') }}" alt="Imagem ilustrativa do projeto"
                    class="w-full h-auto mx-auto" />
            </figure>
        </div>
    </form>
  
</body>

</html>
