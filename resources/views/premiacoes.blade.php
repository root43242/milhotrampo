<x-guest-layout>
    <!-- Main Content -->
    <main class="p-2 bg-gray-100 min-h-screen">
        <section class="bg-white p-2 rounded-lg shadow-md mb-20">
            <h1 class="text-2xl font-bold mb-6 text-center">Ranking dos Usuários</h1>
            
            <!-- Top Users Section -->
            <div class="mb-10">
                <h2 class="text-xl font-semibold mb-4">Top 3 Usuários com Mais Pontos</h2>
                <div class="bg-gray-50 p-4 rounded-lg border border-gray-300">
                    <ol class="list-decimal pl-5 space-y-4">
                        <!-- User 1 -->
                        <li class="flex justify-between items-center bg-white p-3 rounded-lg shadow-sm">
                            <span class="font-semibold">Andre Castelo</span>
                            <span class="text-gray-600">15000 Pontos</span>
                            <i class="fas fa-trophy text-yellow-500 ml-2"></i>
                        </li>
                        <!-- User 2 -->
                        <li class="flex justify-between items-center bg-white p-3 rounded-lg shadow-sm">
                            <span class="font-semibold">Mariana Tomáz</span>
                            <span class="text-gray-600">12000 Pontos</span>
                            <i class="fas fa-trophy text-yellow-500 ml-2"></i>
                        </li>
                        <!-- User 3 -->
                        <li class="flex justify-between items-center bg-white p-3 rounded-lg shadow-sm">
                            <span class="font-semibold">Beatriz Nunes</span>
                            <span class="text-gray-600">10000 Pontos</span>
                            <i class="fas fa-trophy text-yellow-500 ml-2"></i>
                        </li>
                    </ol>
                </div>
            </div>
            
            <!-- Live Redeem Section -->
            <div>
                <h2 class="text-xl font-semibold mb-4">Resgates Recentes ao Vivo</h2>
                <div id="live-redeems" class="bg-gray-50 p-4 rounded-lg border border-gray-300">
                    <ul class="space-y-4" id="redeem-list">
                        <!-- Dynamic content will be inserted here -->
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <style>
        .fade-enter-active, .fade-leave-active {
            transition: opacity 0.5s;
        }
        .fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
            opacity: 0;
        }
    </style>

    <script>
       const liveRedeems = [
    { user: 'Andre', prize: 'iPhone 15 Pro Max', image: 'https://www.mundoconectado.com.br/wp-content/uploads/2023/09/iPhone-15-Pro-3-912x569.webp' },
    { user: 'Maria', prize: 'Macbook Air M2', image: 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/mba13-midnight-select-202402?wid=904&hei=840&fmt=jpeg&qlt=90&.v=1708367688034' },
    { user: 'Luis', prize: 'PlayStation 5', image: 'https://gmedia.playstation.com/is/image/SIEPDC/ps5-product-thumbnail-01-en-14sep21?$facebook$' },
    { user: 'Walter', prize: 'Viagem Para Cancun', image: 'https://www.cvc.com.br/dicas-de-viagem/wp-content/uploads/2023/09/quando_viajar_para_cancun-1170x650.jpg' },
    { user: 'Will', prize: 'Fone de Ouvido', image: 'https://m-cdn.phonearena.com/images/hub/274-wide-two_1200/Apple-AirPods-Pro-3-release-date-predictions-price-specs-and-must-know-features.jpg' },
    { user: 'Lucas', prize: 'iPhone 15 Pro Max', image: 'https://www.mundoconectado.com.br/wp-content/uploads/2023/09/iPhone-15-Pro-3-912x569.webp' },
    { user: 'Ana', prize: 'Macbook Air M2', image: 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/mba13-midnight-select-202402?wid=904&hei=840&fmt=jpeg&qlt=90&.v=1708367688034' },
    { user: 'Carlos', prize: 'PlayStation 5', image: 'https://gmedia.playstation.com/is/image/SIEPDC/ps5-product-thumbnail-01-en-14sep21?$facebook$' },
    { user: 'Mariana', prize: 'Viagem Para Cancun', image: 'https://www.cvc.com.br/dicas-de-viagem/wp-content/uploads/2023/09/quando_viajar_para_cancun-1170x650.jpg' },
    { user: 'Roberto', prize: 'Fone de Ouvido', image: 'https://m-cdn.phonearena.com/images/hub/274-wide-two_1200/Apple-AirPods-Pro-3-release-date-predictions-price-specs-and-must-know-features.jpg' },
    { user: 'Julia', prize: 'iPhone 15 Pro Max', image: 'https://www.mundoconectado.com.br/wp-content/uploads/2023/09/iPhone-15-Pro-3-912x569.webp' },
    { user: 'Fernando', prize: 'Macbook Air M2', image: 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/mba13-midnight-select-202402?wid=904&hei=840&fmt=jpeg&qlt=90&.v=1708367688034' },
    { user: 'Beatriz', prize: 'PlayStation 5', image: 'https://gmedia.playstation.com/is/image/SIEPDC/ps5-product-thumbnail-01-en-14sep21?$facebook$' },
    { user: 'Juliano', prize: 'Viagem Para Cancun', image: 'https://www.cvc.com.br/dicas-de-viagem/wp-content/uploads/2023/09/quando_viajar_para_cancun-1170x650.jpg' },
    { user: 'Sofia', prize: 'Fone de Ouvido', image: 'https://m-cdn.phonearena.com/images/hub/274-wide-two_1200/Apple-AirPods-Pro-3-release-date-predictions-price-specs-and-must-know-features.jpg' },
    { user: 'Pedro', prize: 'Viagem Para Fernando De Noronha', image: 'https://media.staticontent.com/media/pictures/470c512a-47e8-49b5-aaed-1c56997e60a6' }
];



    function generateLiveRedeems() {
        const redeemList = document.getElementById('redeem-list');
        let displayedIndexes = [];

        function getRandomIndexes() {
            const indexes = [];
            while (indexes.length < 5) {
                const index = Math.floor(Math.random() * liveRedeems.length);
                if (!indexes.includes(index)) indexes.push(index);
            }
            return indexes;
        }

        function updateRedeems() {
            displayedIndexes = getRandomIndexes();
            redeemList.innerHTML = '';

            displayedIndexes.forEach(index => {
                const redeem = liveRedeems[index];
                const listItem = document.createElement('li');
                listItem.className = 'flex items-center space-x-4 bg-white p-4 rounded-lg shadow-sm hover:bg-gray-100 transition duration-300 relative';
                listItem.innerHTML = `
                    <img src="${redeem.image}" alt="${redeem.prize}" class="w-16 h-16 rounded-lg object-cover">
                    <div class="flex-1">
                        <span class="font-semibold text-gray-800 text-sm md:text-base">${redeem.user}</span>
                        <span class="text-gray-600 text-sm md:text-base">Resgatou um <span class="font-bold">${redeem.prize}</span></span>
                        <span class="text-gray-400 text-xs md:text-sm">agora</span>
                    </div>
                    <i class="fas fa-gift text-green-500 text-base md:text-xl ml-2"></i>
                `;
                redeemList.appendChild(listItem);
            });
        }

        updateRedeems();
        setInterval(updateRedeems, 10000); // Atualiza a cada 10 segundos
    }

    // Gera os resgates ao vivo ao carregar a página
    document.addEventListener('DOMContentLoaded', generateLiveRedeems);
    </script>
</x-guest-layout>








<x-app-layout>
    <!-- Main Content -->
    <main class="p-2 bg-gray-100 min-h-screen">
        <section class="bg-white p-2 rounded-lg shadow-md mb-20">
            <h1 class="text-2xl font-bold mb-6 text-center">Ranking dos Usuários</h1>
            
            <!-- Top Users Section -->
            <div class="mb-10">
                <h2 class="text-xl font-semibold mb-4">Top 3 Usuários com Mais Pontos</h2>
                <div class="bg-gray-50 p-4 rounded-lg border border-gray-300">
                    <ol class="list-decimal pl-5 space-y-4">
                        <!-- User 1 -->
                        <li class="flex justify-between items-center bg-white p-3 rounded-lg shadow-sm">
                            <span class="font-semibold">Andre Castelo</span>
                            <span class="text-gray-600">15000 Pontos</span>
                            <i class="fas fa-trophy text-yellow-500 ml-2"></i>
                        </li>
                        <!-- User 2 -->
                        <li class="flex justify-between items-center bg-white p-3 rounded-lg shadow-sm">
                            <span class="font-semibold">Mariana Tomáz</span>
                            <span class="text-gray-600">12000 Pontos</span>
                            <i class="fas fa-trophy text-yellow-500 ml-2"></i>
                        </li>
                        <!-- User 3 -->
                        <li class="flex justify-between items-center bg-white p-3 rounded-lg shadow-sm">
                            <span class="font-semibold">Beatriz Nunes</span>
                            <span class="text-gray-600">10000 Pontos</span>
                            <i class="fas fa-trophy text-yellow-500 ml-2"></i>
                        </li>
                    </ol>
                </div>
            </div>
            
            <!-- Live Redeem Section -->
            <div>
                <h2 class="text-xl font-semibold mb-4">Resgates Recentes ao Vivo</h2>
                <div id="live-redeems" class="bg-gray-50 p-4 rounded-lg border border-gray-300">
                    <ul class="space-y-4" id="redeem-list">
                        <!-- Dynamic content will be inserted here -->
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <style>
        .fade-enter-active, .fade-leave-active {
            transition: opacity 0.5s;
        }
        .fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
            opacity: 0;
        }
    </style>

    <script>
       const liveRedeems = [
    { user: 'Andre', prize: 'iPhone 15 Pro Max', image: 'https://www.mundoconectado.com.br/wp-content/uploads/2023/09/iPhone-15-Pro-3-912x569.webp' },
    { user: 'Maria', prize: 'Macbook Air M2', image: 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/mba13-midnight-select-202402?wid=904&hei=840&fmt=jpeg&qlt=90&.v=1708367688034' },
    { user: 'Luis', prize: 'PlayStation 5', image: 'https://gmedia.playstation.com/is/image/SIEPDC/ps5-product-thumbnail-01-en-14sep21?$facebook$' },
    { user: 'Walter', prize: 'Viagem Para Cancun', image: 'https://www.cvc.com.br/dicas-de-viagem/wp-content/uploads/2023/09/quando_viajar_para_cancun-1170x650.jpg' },
    { user: 'Will', prize: 'Fone de Ouvido', image: 'https://m-cdn.phonearena.com/images/hub/274-wide-two_1200/Apple-AirPods-Pro-3-release-date-predictions-price-specs-and-must-know-features.jpg' },
    { user: 'Lucas', prize: 'iPhone 15 Pro Max', image: 'https://www.mundoconectado.com.br/wp-content/uploads/2023/09/iPhone-15-Pro-3-912x569.webp' },
    { user: 'Ana', prize: 'Macbook Air M2', image: 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/mba13-midnight-select-202402?wid=904&hei=840&fmt=jpeg&qlt=90&.v=1708367688034' },
    { user: 'Carlos', prize: 'PlayStation 5', image: 'https://gmedia.playstation.com/is/image/SIEPDC/ps5-product-thumbnail-01-en-14sep21?$facebook$' },
    { user: 'Mariana', prize: 'Viagem Para Cancun', image: 'https://www.cvc.com.br/dicas-de-viagem/wp-content/uploads/2023/09/quando_viajar_para_cancun-1170x650.jpg' },
    { user: 'Roberto', prize: 'Fone de Ouvido', image: 'https://m-cdn.phonearena.com/images/hub/274-wide-two_1200/Apple-AirPods-Pro-3-release-date-predictions-price-specs-and-must-know-features.jpg' },
    { user: 'Julia', prize: 'iPhone 15 Pro Max', image: 'https://www.mundoconectado.com.br/wp-content/uploads/2023/09/iPhone-15-Pro-3-912x569.webp' },
    { user: 'Fernando', prize: 'Macbook Air M2', image: 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/mba13-midnight-select-202402?wid=904&hei=840&fmt=jpeg&qlt=90&.v=1708367688034' },
    { user: 'Beatriz', prize: 'PlayStation 5', image: 'https://gmedia.playstation.com/is/image/SIEPDC/ps5-product-thumbnail-01-en-14sep21?$facebook$' },
    { user: 'Juliano', prize: 'Viagem Para Cancun', image: 'https://www.cvc.com.br/dicas-de-viagem/wp-content/uploads/2023/09/quando_viajar_para_cancun-1170x650.jpg' },
    { user: 'Sofia', prize: 'Fone de Ouvido', image: 'https://m-cdn.phonearena.com/images/hub/274-wide-two_1200/Apple-AirPods-Pro-3-release-date-predictions-price-specs-and-must-know-features.jpg' },
    { user: 'Pedro', prize: 'Viagem Para Fernando De Noronha', image: 'https://media.staticontent.com/media/pictures/470c512a-47e8-49b5-aaed-1c56997e60a6' }
];



    function generateLiveRedeems() {
        const redeemList = document.getElementById('redeem-list');
        let displayedIndexes = [];

        function getRandomIndexes() {
            const indexes = [];
            while (indexes.length < 5) {
                const index = Math.floor(Math.random() * liveRedeems.length);
                if (!indexes.includes(index)) indexes.push(index);
            }
            return indexes;
        }

        function updateRedeems() {
            displayedIndexes = getRandomIndexes();
            redeemList.innerHTML = '';

            displayedIndexes.forEach(index => {
                const redeem = liveRedeems[index];
                const listItem = document.createElement('li');
                listItem.className = 'flex items-center space-x-4 bg-white p-4 rounded-lg shadow-sm hover:bg-gray-100 transition duration-300 relative';
                listItem.innerHTML = `
                    <img src="${redeem.image}" alt="${redeem.prize}" class="w-16 h-16 rounded-lg object-cover">
                    <div class="flex-1">
                        <span class="font-semibold text-gray-800 text-sm md:text-base">${redeem.user}</span>
                        <span class="text-gray-600 text-sm md:text-base">Resgatou um <span class="font-bold">${redeem.prize}</span></span>
                        <span class="text-gray-400 text-xs md:text-sm">agora</span>
                    </div>
                    <i class="fas fa-gift text-green-500 text-base md:text-xl ml-2"></i>
                `;
                redeemList.appendChild(listItem);
            });
        }

        updateRedeems();
        setInterval(updateRedeems, 10000); // Atualiza a cada 10 segundos
    }

    // Gera os resgates ao vivo ao carregar a página
    document.addEventListener('DOMContentLoaded', generateLiveRedeems);
    </script>
</x-app-layout>
