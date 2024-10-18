<x-guest-layout>

<div class="p-2">

<div class="flex justify-center w-full">
    <iframe id="panda-c5d695fc-d374-4469-bd1f-276864a58fa2" src="https://player-vz-dc82a23f-d0b.tv.pandavideo.com.br/embed/?v=c5d695fc-d374-4469-bd1f-276864a58fa2" style="border:none;" allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture" allowfullscreen=true width="720" height="360" fetchpriority="high"></iframe>
</div>

<div class="flex justify-center items-center p-4">
    <span class="mr-2 text-xl text-gray-700">Ainda possuímos</span>
    <span id="vaga-count" class="text-2xl font-bold text-red-600">50</span>
    <span class="ml-2 text-xl text-gray-700">vagas restantes</span>
</div>


<div class="flex w-full justify-center p-4">
        <!-- Botão escondido inicialmente -->
        <a id="inscricao-btn" class="hidden bg-red-600 font-extrabold text-3xl p-4 rounded-lg text-white text-center animate-pulse" href="#">FAZER INSCRIÇÃO AGORA</a>
    </div>

    <script>
        // Função para exibir o botão após 6 minutos (360000 milissegundos)
        setTimeout(function() {
            document.getElementById('inscricao-btn').classList.remove('hidden');
        }, 240000); // 240000 ms = 4 minutos
    </script>

<style>
    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }
    
    .animate-pulse {
        animation: pulse 1.5s infinite;
    }
</style>


<script>
    // Definir número inicial de vagas
    let vagas = 50;

    // Função para diminuir o número de vagas
    function diminuirVagas() {
        if (vagas > 0) {
            vagas -= 5;
            document.getElementById('vaga-count').textContent = vagas;

            // Caso as vagas acabem, exibe uma mensagem
            if (vagas <= 5) {
                document.getElementById('vaga-count').textContent = '1';
            }
        }
    }

    // Executar a função a cada 1 minuto (60.000 milissegundos)
    setInterval(diminuirVagas, 60000);
</script>



</div>

</x-guest-layout>
