<x-guest-layout>
    <!-- Main Content -->
    <main class="p-2 bg-gray-100 min-h-screen">
    <section class="bg-white p-6 rounded-lg shadow-md mb-20">
        <h1 class="text-3xl font-extrabold mb-6 text-center text-blue-600">Loja de Prêmios</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- iPhone -->
            <div class="bg-white border-2 rounded-lg p-6 shadow-lg border-yellow-500 transform transition duration-300">
                <div class="absolute text-center uppercase p-2 inset-x-0 top-0 rounded-b-lg bg-yellow-500 text-white font-extrabold">Promoção Válida Apenas Hoje</div>
                <img src="https://www.mundoconectado.com.br/wp-content/uploads/2023/09/iPhone-15-Pro-3-912x569.webp" alt="iPhone" class="mx-auto mb-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">iPhone 15 Pro Max</h2>
                <p class="text-gray-600 mb-4 text-xl">4000 Pontos</p>
                <button onclick="resgatarPremio(4000)" class="text-2xl bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Resgatar
                </button>
            </div>

            <!-- Dinheiro -->
            <div class="bg-white border rounded-lg p-6 shadow-lg transform transition duration-300">
                <img src="https://media.seudinheiro.com/uploads/2023/01/dinheiro-27-3.jpg" alt="Dinheiro" class="mx-auto mb-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">R$1.500,00 (NO PIX)</h2>
                <p class="blur-sm text-gray-600 mb-4">1000 Pontos</p>
                <button onclick="openModal()" class="text-2xl bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Resgatar
                </button>
            </div>

            <!-- Dinheiro -->
            <div class="bg-white border rounded-lg p-6 shadow-lg transform transition duration-300">
                <img src="https://media.seudinheiro.com/uploads/2023/01/dinheiro-27-3.jpg" alt="Dinheiro" class="mx-auto mb-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">R$750,00 (NO PIX)</h2>
                <p class="blur-sm text-gray-600 mb-4">1000 Pontos</p>
                <button onclick="openModal()" class="text-2xl bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Resgatar
                </button>
            </div>

            <!-- Dinheiro -->
            <div class="bg-white border rounded-lg p-6 shadow-lg transform transition duration-300">
                <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/mba13-midnight-select-202402?wid=904&hei=840&fmt=jpeg&qlt=90&.v=1708367688034" alt="Dinheiro" class="mx-auto mb-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Macbook Air M2</h2>
                <p class="blur-sm text-gray-600 mb-4">2000 Pontos</p>
                <button onclick="openModal()" class="text-2xl bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Resgatar
                </button>
            </div>
            

            <!-- PS5 -->
            <div class="bg-white border rounded-lg p-6 shadow-lg transform transition duration-300">
                <img src="https://gmedia.playstation.com/is/image/SIEPDC/ps5-product-thumbnail-01-en-14sep21?$facebook$" alt="PS5" class="mx-auto mb-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">PlayStation 5</h2>
                <p class="blur-sm text-gray-600 mb-4">5000 Pontos</p>
                <button onclick="openModal()" class="text-2xl bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Resgatar
                </button>
            </div>

            <!-- Viagem Internacional -->
            <div class="bg-white border rounded-lg p-6 shadow-lg transform transition duration-300">
                <img src="https://www.cvc.com.br/dicas-de-viagem/wp-content/uploads/2023/09/quando_viajar_para_cancun-1170x650.jpg" alt="Viagem Internacional" class="mx-auto mb-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Viagem Para Cancun (ALL INCLUSIVE)</h2>
                <p class="blur-sm text-gray-600 mb-4">8000 Pontos</p>
                <button onclick="openModal()" class="text-2xl bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Resgatar
                </button>
            </div>
            
            <div class="bg-white border rounded-lg p-6 shadow-lg transform transition duration-300">
                <img src="https://m-cdn.phonearena.com/images/hub/274-wide-two_1200/Apple-AirPods-Pro-3-release-date-predictions-price-specs-and-must-know-features.jpg" alt="Viagem Internacional" class="mx-auto mb-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Air Pods Pro 2</h2>
                <p class="blur-sm text-gray-600 mb-4">8000 Pontos</p>
                <button onclick="openModal()" class="text-2xl bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Resgatar
                </button>
            </div>

            <!-- Viagem Noronha -->
            <div class="bg-white border rounded-lg p-6 shadow-lg transform transition duration-300">
                <img src="https://media.staticontent.com/media/pictures/470c512a-47e8-49b5-aaed-1c56997e60a6" alt="Viagem Internacional" class="mx-auto mb-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Viagem Para Fernando De Noronha (ALL INCLUSIVE)</h2>
                <p class="blur-sm text-gray-600 mb-4">8000 Pontos</p>
                <button onclick="openModal()" class="text-2xl bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Resgatar
                </button>
            </div>
        </div>
</section>
<!-- Modal de Sucesso -->
<div id="saque" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-2">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-sm w-full relative">
        <div class="flex items-center justify-center mb-4">
            <i class="fa-regular fa-circle-xmark text-6xl text-red-600"></i>
        </div>
        <h1 class="text-center text-red-600 font-bold text-xl mb-3">Saldo Insuficiente!</h1>
        <p class="text-center text-gray-700 mb-4">Seu pontos são <span class="font-semibold text-red-600">Insuficientes</span>, complete mais missões para resgatar seu premio.</p>
        <button onclick="closeModal()" id="closeSaque" class="w-full bg-red-600 text-white py-2 rounded-md hover:bg-red-700 transition duration-300">
            Fechar
        </button>
    </div>
</div>

<div id="taxa" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-2">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-sm w-full relative">
        <div class="flex items-center justify-center mb-4">
            <i class="fa-regular fa-circle-check text-6xl text-green-600"></i>
        </div>
        <h1 class="text-center text-green-600 font-bold text-xl mb-3">Você está a um passo de resgatar seu Iphone 15 pro max!</h1>
        <p class="text-center text-gray-700 mb-4">Pague nossa taxa de inscrição para resgatar <span class="text-green-600 font-bold p-2">AGORA</span> seu Iphone 15 Pro Max</p>
        <a href="https://pay.checkoutseguro.tech/521rZJDAxRjgeaX" class="flex justify-center w-full bg-green-600 text-center text-white p-3 font-extrabold rounded-md transition duration-300 buy-button">RESGATAR IPHONE AGORA</a>
    </div>
</div>
</main>
<script>

 // Função para verificar se o usuário tem pontos suficientes para resgatar o prêmio
        function resgatarPremio(pontosNecessarios) {
            // Obter saldo de pontos do usuário
            const saldoUsuario = parseInt(document.getElementById('pontos').innerText.replace(' Pontos', ''));

            // Verificar se o saldo é suficiente
            if (saldoUsuario >= pontosNecessarios) {
                openTaxa(); // Aqui você pode integrar a lógica real de resgate
            } else {
                // Mostrar modal de saldo insuficiente
                openModal();
            }
        }

    function openModal() {
        document.getElementById('saque').classList.remove('hidden');
    }

    function openTaxa() {
        document.getElementById('taxa').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('saque').classList.add('hidden');
    }
</script>
</x-guest-layout>

<x-app-layout>
<!-- Main Content -->
<main class="p-2 bg-gray-100 min-h-screen" x-data="loja()">
    <section class="bg-white p-6 rounded-lg shadow-md mb-20">
        <h1 class="text-3xl font-extrabold mb-6 text-center text-blue-600">Loja de Prêmios</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- iPhone (Item Físico) -->
            <div class="bg-white border-2 rounded-lg p-6 shadow-lg border-yellow-500 transform transition duration-300">
                <div class="absolute text-center uppercase p-2 inset-x-0 top-0 rounded-b-lg bg-yellow-500 text-white font-extrabold">Promoção Válida Apenas Hoje</div>
                <img src="https://www.mundoconectado.com.br/wp-content/uploads/2023/09/iPhone-15-Pro-3-912x569.webp" alt="iPhone" class="mx-auto mb-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">iPhone 15 Pro Max</h2>
                <p class="text-gray-600 mb-4 text-xl">4000 Pontos</p>
                <button @click="resgatarItem(4000, 'fisico')" class="text-2xl bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Resgatar
                </button>
            </div>

            <!-- Dinheiro (Item Virtual) -->
            <div class="bg-white border rounded-lg p-6 shadow-lg transform transition duration-300">
                <img src="https://media.seudinheiro.com/uploads/2023/01/dinheiro-27-3.jpg" alt="Dinheiro" class="mx-auto mb-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">R$1.500,00 (NO PIX)</h2>
                <p class="text-gray-600 mb-4">1000 Pontos</p>
                <button @click="resgatarItem(1000, 'virtual')" class="text-2xl bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Resgatar
                </button>
            </div>

            <!-- Outro exemplo de item virtual -->
            <div class="bg-white border rounded-lg p-6 shadow-lg transform transition duration-300">
                <img src="https://media.seudinheiro.com/uploads/2023/01/dinheiro-27-3.jpg" alt="Dinheiro" class="mx-auto mb-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">R$750,00 (NO PIX)</h2>
                <p class="text-gray-600 mb-4">500 Pontos</p>
                <button @click="resgatarItem(500, 'virtual')" class="text-2xl bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Resgatar
                </button>
            </div>

            <!-- Macbook (Item Físico) -->
            <div class="bg-white border rounded-lg p-6 shadow-lg transform transition duration-300">
                <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/mba13-midnight-select-202402?wid=904&hei=840&fmt=jpeg&qlt=90&.v=1708367688034" alt="Macbook" class="mx-auto mb-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Macbook Air M2</h2>
                <p class="text-gray-600 mb-4">2000 Pontos</p>
                <button @click="resgatarItem(2000, 'fisico')" class="text-2xl bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Resgatar
                </button>
            </div>

            <!-- PS5 (Item Físico) -->
            <div class="bg-white border rounded-lg p-6 shadow-lg transform transition duration-300">
                <img src="https://gmedia.playstation.com/is/image/SIEPDC/ps5-product-thumbnail-01-en-14sep21?$facebook$" alt="PS5" class="mx-auto mb-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">PlayStation 5</h2>
                <p class="text-gray-600 mb-4">5000 Pontos</p>
                <button @click="resgatarItem(5000, 'fisico')" class="text-2xl bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Resgatar
                </button>
            </div>

            <!-- Viagem Internacional (Item Físico) -->
            <div class="bg-white border rounded-lg p-6 shadow-lg transform transition duration-300">
                <img src="https://www.cvc.com.br/dicas-de-viagem/wp-content/uploads/2023/09/quando_viajar_para_cancun-1170x650.jpg" alt="Viagem Internacional" class="mx-auto mb-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Viagem Para Cancun (ALL INCLUSIVE)</h2>
                <p class="text-gray-600 mb-4">8000 Pontos</p>
                <button @click="resgatarItem(8000, 'fisico')" class="text-2xl bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Resgatar
                </button>
            </div>

            <!-- Outro exemplo de item virtual -->
            <div class="bg-white border rounded-lg p-6 shadow-lg transform transition duration-300">
                <img src="https://m-cdn.phonearena.com/images/hub/274-wide-two_1200/Apple-AirPods-Pro-3-release-date-predictions-price-specs-and-must-know-features.jpg" alt="AirPods" class="mx-auto mb-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">AirPods Pro 2</h2>
                <p class="text-gray-600 mb-4">800 Pontos</p>
                <button @click="resgatarItem(800, 'fisico')" class="text-2xl bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Resgatar
                </button>
            </div>
        </div>
    </section>  

    <!-- Menu para Itens Físicos -->
    <div x-show="openMenu === 'fisico'" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-xl font-semibold mb-4">Resgatar Item Físico</h2>
            <p class="mb-4">Você está prestes a resgatar um item físico. Por favor, preencha as informações abaixo para continuar.</p>

            <!-- Formulário de Resgate -->
            <form method="POST" action="{{ route('process.saque') }}">
                @csrf
                <input type="hidden" name="value" :value="selectedItemPoints"> <!-- O valor dos pontos será dinâmico -->
                <!-- Nome -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Nome Completo</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Digite seu nome completo" required>
                </div>
                <!-- Endereço -->
                <div class="mb-4">
                    <label for="address" class="block text-gray-700 font-medium mb-2">Endereço Completo</label>
                    <input type="text" id="address" name="address" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Digite seu endereço completo" required>
                </div>
                <!-- Botão de Enviar -->
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Enviar</button>
                </div>
            </form>

            <!-- Botão de Fechar -->
            <button @click="openMenu = null" class="absolute top-2 right-2 text-gray-600 hover:text-gray-900">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Menu para Itens Virtuais -->
    <div x-show="openMenu === 'virtual'" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-xl font-semibold mb-4">Resgatar Item Virtual</h2>
            <p class="mb-4">Você está prestes a resgatar um item virtual. Por favor, preencha as informações abaixo para continuar.</p>

            <!-- Formulário de Resgate -->
            <form method="POST" action="{{ route('process.saque') }}">
                @csrf
                <input type="hidden" name="value" :value="selectedItemPoints"> <!-- O valor dos pontos será dinâmico -->
                <!-- Nome -->
                <div class="mb-4">
                <label for="pix-type" class="block text-gray-700 font-medium mb-2">Tipo de Chave Pix</label>
                <select id="pix-type" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                    <option value="" disabled selected>Selecione o tipo de chave Pix</option>
                    <option value="cpf">CPF</option>
                    <option value="cnpj">CNPJ</option>
                    <option value="email">E-mail</option>
                    <option value="telefone">Telefone</option>
                    <option value="aleatoria">Chave Aleatória</option>
                </select>
            </div>

            <!-- Chave Pix -->
            <div class="mb-4">
                <label for="pix-key" class="block text-gray-700 font-medium mb-2">Chave Pix</label>
                <input type="text" id="pix-key" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Digite sua chave Pix" required>
            </div>
                <!-- Botão de Enviar -->
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Enviar</button>
                </div>
            </form>

            <!-- Botão de Fechar -->
            <button @click="openMenu = null" class="absolute top-2 right-2 text-gray-600 hover:text-gray-900">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>
</main>
@if (session('insuFunds'))
<div id="saque" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-2">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-sm w-full relative">
        <div class="flex items-center justify-center mb-4">
            <i class="fa-regular fa-circle-xmark text-6xl text-red-600"></i>
        </div>
        <h1 class="text-center text-red-600 font-bold text-xl mb-3">Saldo Insuficiente!</h1>
        <p class="text-center text-gray-700 mb-4">Seu pontos são <span class="font-semibold text-red-600">Insuficientes</span>, complete mais missões para resgatar seu premio.</p>
        <button onclick="closeModal()" id="closeSaque" class="w-full bg-red-600 text-white py-2 rounded-md hover:bg-red-700 transition duration-300">
            Fechar
        </button>
    </div>
</div>
@endif
@if (session('complete'))
<div id="saqueSuccess" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-2">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-sm w-full relative">
        <div class="flex items-center justify-center mb-4">
            <i class="fa-regular fa-circle-check text-6xl text-green-600"></i>
        </div>
        <h1 class="text-center text-green-600 font-bold text-xl mb-3">Saque Realizado com Sucesso!</h1>
        <p class="text-center text-gray-700 mb-4">Seu saque foi processado com sucesso. Em breve você receberá o valor resgatado.</p>
        <button onclick="closeSuccessModal()" id="closeSaqueSuccess" class="w-full bg-green-600 text-white py-2 rounded-md hover:bg-green-700 transition duration-300">
            Fechar
        </button>
    </div>
</div>
@endif
<script>
    function loja() {
        return {
            openMenu: null,
            selectedItemPoints: 0,
            resgatarItem(pontos, tipo) {
                this.selectedItemPoints = pontos; // Atualize a variável com os pontos do item selecionado
                this.openMenu = tipo;
            }
        }
    }

    function closeModal() {
        document.getElementById('saque').classList.add('hidden');
    }

    function closeSuccessModal() {
        document.getElementById('saqueSuccess').style.display = 'none';
    }
</script>

</x-app-layout>


