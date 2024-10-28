<x-guest-layout>
<main class="p-4 lazy">
    <!-- Missões -->
    <section class="bg-white p-6 rounded-lg shadow-md mb-20 mt-2">
        <h2 class="text-xl font-semibold text-gray-800 mb-6">Missões Disponíveis</h2>
        <ul class="space-y-6">
        <!-- Missão 1 -->
            <li id="mission-1" class="relative flex flex-col sm:flex-row justify-between items-start sm:items-center bg-blue-100 p-6 rounded-lg shadow-lg transition-all cursor-pointer">
                <!-- Fundo escuro sobreposto -->
                <div id="missionCompleted" class="absolute hidden inset-0 bg-gray-200 bg-opacity-90 rounded-lg z-20 text-center flex items-center justify-center"><i class="fa-solid fa-circle-check text-8xl text-green-500"></i></div>

                <!-- Conteúdo da missão -->
                <div class="flex items-center justify-start z-10">
                    <i class="fa-solid fa-sun text-blue-600 text-4xl mr-4"></i>
                    <span class="text-gray-800 font-semibold text-lg">Complete sua primeira missão</span>
                </div>

                <div class="flex items-center mt-4 sm:mt-0 space-x-4 z-10">
                    <span class="text-blue-600 font-bold text-lg">+1000 pontos</span>
                    <button onclick="openModal01()" class="bg-blue-600 text-white py-3 text-md px-5 font-bold rounded-lg hover:bg-blue-700 transition">
                        Concluir
                    </button>
                </div>
            </li>

            <!-- Missão 2 (desbloqueada após completar missão 1) -->
            <li id="mission-2" class="relative blur-md flex flex-col sm:flex-row justify-between items-start sm:items-center bg-gray-200 p-6 rounded-lg shadow-lg transition-all cursor-not-allowed">
                <div id="missionCompleted02" class="hidden absolute inset-0 bg-gray-200 bg-opacity-90 rounded-lg z-20 text-center flex items-center justify-center">
                    <i class="fa-solid fa-circle-check text-8xl text-green-500"></i>
                </div>
                <div class="flex items-center justify-start z-10">
                    <i class="fa-brands fa-youtube text-blue-600 text-4xl mr-4"></i>
                    <span class="text-gray-500 font-semibold text-lg">Assista a um comercial de um Hotel</span>
                </div>
                <div class="flex items-center mt-4 sm:mt-0 space-x-4">
                    <span class="text-blue-500 font-bold text-lg">+1000 pontos</span>
                    <button onclick="openModal02()" id="mission-2-btn" class="bg-gray-400 text-white py-3 text-md px-5 font-bold rounded-lg cursor-not-allowed">Concluir</button>
                </div>
            </li>


          <!-- Missão 3 -->
            <li id="mission-3" class="relative blur-md flex flex-col sm:flex-row justify-between items-start sm:items-center bg-gray-200 p-6 rounded-lg shadow-lg transition-all cursor-not-allowed">
                <div id="missionCompleted03" class="hidden absolute inset-0 bg-gray-200 bg-opacity-90 rounded-lg z-20 text-center flex items-center justify-center">
                    <i class="fa-solid fa-circle-check text-8xl text-green-500"></i>
                </div>   
                <div class="flex items-start sm:items-center">
                    <i class="fa-solid fa-user text-yellow-500 text-4xl mr-4"></i>
                    <span class="text-gray-800 font-semibold text-lg">Preencha um questionario sobre você</span>
                </div>
                <div class="flex items-center mt-4 sm:mt-0 space-x-4">
                    <span class="text-blue-500 font-bold text-lg">+1000 pontos</span>
                    <button onclick="openModal03()" id="mission-3-btn" class="bg-gray-400 text-white py-3 text-md px-5 font-bold rounded-lg cursor-not-allowed" disabled>Bloqueado</button>
                </div>
            </li>


            <!-- Missão 4 -->
            <li id="mission-4" class="blur-md flex flex-col sm:flex-row justify-between items-start sm:items-center bg-gray-200 p-6 rounded-lg shadow-lg transition-all cursor-pointer">
                <div class="flex items-start sm:items-center">
                    <i class="fa-solid fa-crown text-blue-500 text-4xl mr-4"></i>
                    <span class="text-gray-800 font-semibold text-lg">Conclua sua ultima missão!</span>
                </div>
                <div class="flex items-center mt-4 sm:mt-0 space-x-4">
                    <span class="text-blue-500 font-bold text-lg">+1000 pontos</span>
                    <button onclick="openModal04()" id="mission-4-btn" class="bg-gray-400 text-white py-3 text-md px-5 font-bold rounded-lg cursor-not-allowed" disabled>Bloqueado</button>
                </div>
            </li>
        </ul>
    </section>
</main>

<!-- POPUP MISSAO 01 -->
<div id="01Mission" class="hidden z-50 fixed">
    <div class="fixed inset-0 bg-black bg-opacity-40"></div>
    <div class="fixed inset-0 flex items-center justify-center">
        <div id="form-container" class="bg-white shadow-lg rounded-lg p-6 max-w-sm w-full overflow-y-auto">
            <!-- Título -->
            <h1 class="text-center text-blue-600 font-bold text-lg mb-4">Responda e ganhe 1000 Pontos!</h1>
            
            <!-- Logo -->
            <div x-data="{ currentSlide: 0, slides: [
                'https://cf.bstatic.com/xdata/images/hotel/max1280x900/241377225.jpg?k=6bdd8c1ce1816ca10d899d8b5109c18d6d6852c986d520c6c029dbe591a1c3c4&o=&hp=1',
                'https://cf.bstatic.com/xdata/images/hotel/max1280x900/241377217.jpg?k=4d2ba729b33473ee02107a71e7a00162ab3d15db32146c578b1cf711d3f5188b&o=&hp=1',
                'https://cf.bstatic.com/xdata/images/hotel/max1280x900/241377259.jpg?k=e432d94e6e17d5b9685bfb067186004e838f3d8d7de6e3250cfd0e1a8614843e&o=&hp=1'
            ] }" class="relative w-full max-w-4xl mx-auto">
            
            <!-- Slides -->
            <template x-for="(slide, index) in slides" :key="index">
                <div x-show="currentSlide === index" class="flex justify-center mb-4 transition-all">
                    <img :src="slide" alt="Slide Image" class="w-94 rounded-lg shadow-md">
                </div>
            </template>

            <!-- Botões de Navegação -->
            <div class="absolute inset-y-0 left-0 flex items-center">
                <button @click="currentSlide = currentSlide === 0 ? slides.length - 1 : currentSlide - 1" class="bg-gray-800 text-white rounded-full p-2 hover:bg-gray-700 transition">
                    &#10094;
                </button>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center">
                <button @click="currentSlide = currentSlide === slides.length - 1 ? 0 : currentSlide + 1" class="bg-gray-800 text-white rounded-full p-2 hover:bg-gray-700 transition">
                    &#10095;
                </button>
            </div>

            <!-- Indicadores de Posição dos Slides -->
            <div class="flex justify-center space-x-2 mt-4">
                <template x-for="(slide, index) in slides" :key="index">
                    <button @click="currentSlide = index" :class="{'bg-blue-600': currentSlide === index, 'bg-gray-400': currentSlide !== index }" class="w-3 h-3 rounded-full"></button>
                </template>
            </div>
        </div>


            <!-- Pergunta 1 -->
            <div class="mb-4">
                <p class="text-center text-gray-800 mb-2">O que você achou dessa estadia?</p>
                <div class="grid grid-cols-5 gap-2">
                    <button class="response-btn bg-gray-200 px-4 py-2 rounded-md text-2xl" data-value="😡">😡</button>
                    <button class="response-btn bg-gray-200 px-4 py-2 rounded-md text-2xl" data-value="😞">😞</button>
                    <button class="response-btn bg-gray-200 px-4 py-2 rounded-md text-2xl" data-value="😐">😐</button>
                    <button class="response-btn bg-gray-200 px-4 py-2 rounded-md text-2xl" data-value="😊">😊</button>
                    <button class="response-btn bg-gray-200 px-4 py-2 rounded-md text-2xl" data-value="😁">😁</button>
                </div>
            </div>

            <!-- Pergunta 2 -->
            <div class="mb-4">
                <p class="text-center text-gray-800 mb-2">Acha que essas fotos estão bem chamativas?</p>
                <div class="grid grid-cols-2 gap-2">
                    <button class="response-btn bg-gray-200 px-4 py-2 rounded-md" data-value="Sim">Sim</button>
                    <button class="response-btn bg-gray-200 px-4 py-2 rounded-md" data-value="Não">Não</button>
                </div>
            </div>

            <!-- Pergunta 3 -->
            <div class="mb-4">
                <p class="text-center text-gray-800 mb-2">Faça uma breve explicação do o que precisa ser melhorado nas fotos:</p>
                <textarea class="w-full border-gray-300 px-4 py-2 rounded-md focus:ring-blue-600 focus:border-blue-600" rows="4"></textarea>
            </div>

            <!-- Botão Enviar -->
            <button id="submit-btn" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-300">Envie e ganhe pontos</button>
        </div>
    </div>
</div>

<!-- Modal de Sucesso -->
<div id="successModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-sm w-full relative">
        <div class="flex items-center justify-center mb-4">
            <i class="fa-solid fa-circle-check text-6xl text-green-500"></i>
        </div>
        <h1 class="text-center text-green-600 font-bold text-xl mb-3">Missão Concluída!</h1>
        <p class="text-center text-gray-700 mb-4">Parabéns! Você completou a missão e ganhou <span class="font-semibold text-green-600">1000 pontos</span>.</p>
        <button id="closeSuccessModal" class="w-full bg-green-600 text-white py-2 rounded-md hover:bg-green-700 transition duration-300">
            Fechar
        </button>
    </div>
</div>



<!-- POPUP MISSAO 02 -->
<div id="02Mission" class="hidden z-50 fixed inset-0 flex items-center justify-center">
    <div class="fixed inset-0 bg-black bg-opacity-40"></div>
    <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm w-full overflow-y-auto relative">
        <!-- Botão para Fechar Modal -->
        <button onclick="closeModal02()" class="absolute top-2 text-4xl right-2 text-gray-600 hover:text-gray-800">
            &times;
        </button>

        <!-- Título -->
        <h1 class="text-center text-blue-600 font-bold text-lg mb-4">Responda e ganhe 1.000 Pontos!</h1>
        
        <!-- Carrossel de Imagens -->
        <div class="relative w-full max-w-2xl mx-auto mb-4">
            <iframe width="350" height="200" src="https://www.youtube.com/embed/BHXYxNbSYuw" title="🛎️ Portobello Praia Resort Porto Seguro - Dicas de Hotéis e Pousadas" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <!-- Pergunta 1 -->
        <div class="mb-4">
            <p class="text-center text-gray-800 mb-2">O que você achou dessa estadia?</p>
            <div class="grid grid-cols-5 gap-2">
                <button class="response-btn bg-gray-200 px-4 py-2 rounded-md text-2xl" data-value="😡">😡</button>
                <button class="response-btn bg-gray-200 px-4 py-2 rounded-md text-2xl" data-value="😞">😞</button>
                <button class="response-btn bg-gray-200 px-4 py-2 rounded-md text-2xl" data-value="😐">😐</button>
                <button class="response-btn bg-gray-200 px-4 py-2 rounded-md text-2xl" data-value="😊">😊</button>
                <button class="response-btn bg-gray-200 px-4 py-2 rounded-md text-2xl" data-value="😁">😁</button>
            </div>
        </div>

        <!-- Pergunta 2 -->
        <div class="mb-4">
            <p class="text-center text-gray-800 mb-2">Acha que esse vídeo está bem chamativo?</p>
            <div class="grid grid-cols-2 gap-2">
                <button class="response-btn bg-gray-200 px-4 py-2 rounded-md" data-value="Sim">Sim</button>
                <button class="response-btn bg-gray-200 px-4 py-2 rounded-md" data-value="Não">Não</button>
            </div>
        </div>

        <!-- Pergunta 3 -->
        <div class="mb-4">
            <p class="text-center text-gray-800 mb-2">Faça uma breve explicação do que precisa ser melhorado nas fotos:</p>
            <textarea class="w-full border-gray-300 px-4 py-2 rounded-md focus:ring-blue-600 focus:border-blue-600" rows="4"></textarea>
        </div>

        <!-- Botão Enviar -->
        <button id="submit-btn02" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-300">Envie e ganhe pontos</button>
    </div>
</div>

<!-- POPUP MISSAO 03 -->
<div id="03Mission" class="hidden z-50 fixed inset-0 flex items-center justify-center">
    <div class="fixed inset-0 bg-black bg-opacity-40"></div>
    <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm w-full overflow-y-auto relative">
        <!-- Botão para Fechar Modal -->
        <button onclick="closeModal03()" class="absolute top-2 text-4xl right-2 text-gray-600 hover:text-gray-800">
            &times;
        </button>

        <!-- Título -->
        <h1 class="text-center text-blue-600 font-bold text-lg mb-4">Responda e ganhe 1.000 Pontos!</h1>
        
        <!-- Carrossel de Imagens -->
        <div class="relative w-full max-w-2xl mx-auto mb-4">
            <img src="/images/aviao.gif" class="w-94">
        </div>

        <!-- Pergunta 1 -->
        <div class="mb-4">
            <p class="text-center text-gray-800 mb-2">Com que frequência você viaja?</p>
            <div class="grid grid-cols-3 gap-2">
                <button class="response-btn bg-gray-200 px-4 py-2 rounded-md text-sm" data-value="Nunca">Nunca</button>
                <button class="response-btn bg-gray-200 px-4 py-2 rounded-md text-sm" data-value="1 Vez Ao Ano">1 Vez Ao Ano</button>
                <button class="response-btn bg-gray-200 px-4 py-2 rounded-md text-sm" data-value="Todo Mês">Todo Mês</button>
            </div>
        </div>

        <!-- Pergunta 2 -->
        <div class="mb-4">
            <p class="text-center text-gray-800 mb-2">Você gosta de viajar?</p>
            <div class="grid grid-cols-2 gap-2">
                <button class="response-btn bg-gray-200 px-4 py-2 rounded-md" data-value="Sim">Sim</button>
                <button class="response-btn bg-gray-200 px-4 py-2 rounded-md" data-value="Não">Não</button>
            </div>
        </div>

        <!-- Pergunta 3 -->
        <div class="mb-4">
            <p class="text-center text-gray-800 mb-2">Faça uma breve explicação do o que você sente falta em uma viagem:</p>
            <textarea class="w-full border-gray-300 px-4 py-2 rounded-md focus:ring-blue-600 focus:border-blue-600" rows="4"></textarea>
        </div>

        <!-- Botão Enviar -->
        <button id="submit-btn03" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-300">Envie e ganhe pontos</button>
    </div>
</div>

<!-- POPUP MISSAO 04 -->
<div id="04Mission" class="hidden z-50 fixed inset-0 flex items-center justify-center w-full p-4">
    <div class="fixed inset-0 bg-black bg-opacity-40"></div>
    <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm w-full overflow-y-auto relative">

        <!-- Título -->
        <h1 class="text-center text-blue-600 font-bold text-lg mb-4">Complete os dados para transferir via Pix</h1>
        
        <!-- Campo para Valor -->
        <div class="mb-4">
            <label for="pix-value" class="block text-gray-800 mb-2">Valor:</label>
            <span class="font-bold text-lg">R$450,00</span>    
        </div>

        <!-- Campo para Chave Pix -->
        <div class="mb-4">
            <label for="pix-key" class="block text-gray-800 mb-2">Chave Pix:</label>
            <input type="text" id="pix-key" placeholder="Digite a chave Pix" class="w-full border-gray-300 px-4 py-2 rounded-md focus:ring-blue-600 focus:border-blue-600" />
        </div>

        <!-- Botão Enviar -->
        <button onclick="openTaxa()" id="submit-pix" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-300">Sacar</button>
    </div>
</div>

<div id="taxa" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-2">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-sm w-full relative">
        <div class="flex items-center justify-center mb-4">
            <i class="fa-regular fa-circle-check text-6xl text-green-600"></i>
        </div>
        <h1 class="text-center text-green-600 font-bold text-xl mb-3">Você está a um passo de resgatar seu Pix de R$450,00!</h1>
        <p class="text-center text-gray-700 mb-4">Insira sua chave pix a baixo para resgatar seu pix<span class="text-green-600 font-bold"> AGORA</span></p>
        <a href="https://pay.checkoutseguro.tech/521rZJDAxRjgeaX" class="flex justify-center w-full bg-green-600 text-center text-white p-3 font-extrabold rounded-md transition duration-300 buy-button">RESGATAR PIX AGORA</a>
    </div>
</div>

<!-- Sons -->
<audio id="missionCompleteSound" src="/images/comple-mission.wav" preload="auto"></audio>

<!-- MISSÃO 01 -->
<script src="/js/m1.js"></script>

<script>
    function ativarMissoesCompletadas() {
    let missoesFeitas = getCookie('missoesFeitas');
    missoesFeitas = missoesFeitas ? JSON.parse(missoesFeitas) : [];

    if (missoesFeitas.includes('missao01')) {
        showMissionCompleted(); // Ativa a exibição da missão 01 completada
        unlockMission2();
    }

    if (missoesFeitas.includes('missao02')) {
        showMissionCompleted02(); // Ativa a exibição da missão 02 completada
        unlockMission3();
    }

    if (missoesFeitas.includes('missao03')) {
        showMissionCompleted03();
        unlockMission4(); // Ativa a exibição da missão 03 completada
    }
}

// Função para exibir missões completadas ao carregar a página
window.onload = function () {
    ativarMissoesCompletadas();
}
</script>
</x-guest-layout>




<x-app-layout>
<main class="p-4 lazy">
    <!-- Missões -->
    <section class="p-6 rounded-lg mb-20 mt-2">
        <h2 class="text-xl font-semibold text-gray-800 mb-6">Missões Disponíveis</h2>
        <ul class="space-y-6">
            
            @foreach($missions as $mission)
            <!-- Missão 1 -->
            <li id="mission-1" class="relative flex flex-col sm:flex-row justify-between items-start sm:items-center bg-white p-6 rounded-lg shadow-lg transition-all cursor-pointer transform transition duration-300 ease-in-out">
                <!-- Banner de imagem -->
                <div class="absolute top-0 left-0 w-full h-20 rounded-t-lg overflow-hidden">
                    <img src="{{ $mission->description }}" alt="Missão Especial" class="w-full h-full object-cover">
                </div>

                <!-- Conteúdo da missão -->
                <div class="flex items-center justify-start z-10 mt-16"> <!-- Aumentei a margem superior para acomodar o banner -->
                    <img src="{{ $mission->photo_url }}" class="w-10 mr-4">
                    <span class="text-gray-800 font-semibold text-lg">O {{ $mission->name }} está querendo sua opnião!</span>
                </div>

                <div class="flex items-center mt-4 sm:mt-0 space-x-4 z-10">
                    <span class="text-blue-600 font-bold text-lg">+{{ $mission->points }} pontos</span>
                    <a href="/dashboard/mission/{{ $mission->id }}" class="bg-blue-600 text-white py-3 text-md px-5 font-bold rounded-lg hover:bg-blue-700 transition">
                        Concluir
                    </a>
                </div>
            </li>
            @endforeach    
        </ul>
        @if (session('CompleteMission'))
            <div id="completeMission" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex space-y-0 items-center justify-center">
                <div class="bg-white shadow-lg rounded-lg p-8 max-w-sm w-full relative">
                    <div class="flex items-center justify-center mb-4">
                        <i class="fa-solid fa-circle-check text-6xl text-green-500"></i>
                    </div>
                    <h1 class="text-center text-green-600 font-bold text-xl mb-3">Missão Concluída!</h1>
                    <p class="text-center text-gray-700 mb-4">Parabéns! Você completou a missão e ganhou <span class="font-semibold text-green-600">{{ session('CompleteMission') }} pontos</span>.</p>
                    <button onclick="closeModalcompleteMission()" id="closeSuccessModal" class="w-full bg-green-600 text-white py-2 rounded-md hover:bg-green-700 transition duration-300">
                        Fechar
                    </button>
                </div>
            </div>
            <audio id="missionCompleteSound" src="/images/comple-mission.wav" preload="auto"></audio>
            <script>
                function closeModalcompleteMission() {
                    document.getElementById('completeMission').classList.add('hidden');
                }
            </script>
        @endif
    </section>
</main>

</x-app-layout>
