<x-app-layout>
<form action="{{ route('complete.mission', ['id' => $mission->id]) }}" method="post">
    @csrf
    <!-- POPUP MISSAO 02 -->
<div id="02Mission" class="flex items-center justify-center p-2 mb-20">
    <div class="bg-white shadow-lg rounded-lg flex flex-col items-center p-6 max-w-sm w-full overflow-y-auto relative">
        <!-- Título -->
        <h1 class="text-center text-blue-600 font-bold text-lg mb-4">Responda e ganhe {{ $mission->points }} Pontos!</h1>
        
        <!-- Carrossel de Imagens -->
        <div class="relative w-full max-w-2xl mx-auto mb-4">
        <img class="w-94" src="{{ $mission->description }}" alt="">
         </div>

        <!-- Pergunta 1 -->
        <div class="mb-4">
            <p class="text-center text-gray-800 mb-2">O que você achou dessa estadia?</p>
            <div class="grid grid-cols-5 gap-2">
                <div class="response-btn cursor-pointer bg-gray-200 px-4 py-2 rounded-md text-2xl" data-value="😡">😡</div>
                <div class="response-btn cursor-pointer bg-gray-200 px-4 py-2 rounded-md text-2xl" data-value="😞">😞</div>
                <div class="response-btn cursor-pointer bg-gray-200 px-4 py-2 rounded-md text-2xl" data-value="😐">😐</div>
                <div class="response-btn cursor-pointer bg-gray-200 px-4 py-2 rounded-md text-2xl" data-value="😊">😊</div>
                <div class="response-btn cursor-pointer bg-gray-200 px-4 py-2 rounded-md text-2xl" data-value="😁">😁</div>
            </div>
        </div>

        <!-- Pergunta 2 -->
        <div class="mb-4">
            <p class="text-center text-gray-800 mb-2">Acha que essa imagem está bem chamativa?</p>
            <div class="grid grid-cols-2 gap-2">
                <div class="response-btn bg-gray-200 cursor-pointer px-4 py-2 rounded-md" data-value="Sim">Sim</div>
                <div class="response-btn bg-gray-200 cursor-pointer px-4 py-2 rounded-md" data-value="Não">Não</div>
            </div>
        </div>

        <!-- Pergunta 3 -->
        <div class="mb-4">
            <p class="text-center text-gray-800 mb-2">Faça uma breve explicação do que precisa ser melhorado nas fotos:</p>
            <textarea class="w-full border-gray-300 px-4 py-2 rounded-md focus:ring-blue-600 focus:border-blue-600" rows="4"></textarea>
        </div>

        <!-- Botão Enviar -->
        <button id="submit-btn02" class="w-full cursor-pointer bg-blue-600 text-xl text-center text-white py-3 px-4 font-extrabold uppercase rounded-md hover:bg-blue-700 transition duration-300">Envie e ganhe pontos</button>
    </div>
</div>

    </form>
<script>
// Captura de resposta das perguntas
document.querySelectorAll('.grid-cols-5 .response-btn').forEach(btn => {
    btn.addEventListener('click', function () {
        response1 = this.getAttribute('data-value');
        document.querySelectorAll('.grid-cols-5 .response-btn').forEach(b => b.classList.remove('bg-blue-500', 'text-white'));
        this.classList.add('bg-blue-500', 'text-white');
    });
});

document.querySelectorAll('.grid-cols-2 .response-btn').forEach(btn => {
    btn.addEventListener('click', function () {
        response2 = this.getAttribute('data-value');
        document.querySelectorAll('.grid-cols-2 .response-btn').forEach(b => b.classList.remove('bg-blue-500', 'text-white'));
        this.classList.add('bg-blue-500', 'text-white');
    });
});

document.querySelectorAll('.grid-cols-3 .response-btn').forEach(btn => {
    btn.addEventListener('click', function () {
        response1 = this.getAttribute('data-value');
        document.querySelectorAll('.grid-cols-5 .response-btn').forEach(b => b.classList.remove('bg-blue-500', 'text-white'));
        this.classList.add('bg-blue-500', 'text-white');
    });
});
</script>
</x-app-layout>