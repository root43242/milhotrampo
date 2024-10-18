@if(!auth()->user())
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Styles -->
        @livewireStyles
    </head>
    <body>

    <!-- Header -->
<div class="flex flex-col"> 
    <header class="bg-white relative w-full border-b border-gray-300 text-blue-600 p-4 flex justify-between items-center z-50">
        <div class="flex items-center space-x-2">
            <!-- Logo -->
            <img src="/images/logo.png" alt="Logo" class="h-14">
        </div>
        <!-- Saldo -->
        <div class="text-right">
            <span id="pontos" class="block text-xl font-bold p-2 bg-yellow-500 text-white rounded-lg">0 Pontos</span>
        </div>
    </header>

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

          <!-- Footer Menu -->
        <footer class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-300 p-4 lazy">
        <div class="flex justify-around items-center">
            <!-- Loja Icon -->
            <div class="text-center">
                <a href="/loja" onclick="navigateTo('lojas')">
                    <i class="fas fa-store text-blue-600 text-2xl"></i>
                    <span class="block text-sm text-gray-600">Lojas</span>
                </a>
            </div>
            <!-- Missões Icon -->
            <div class="text-center">
                <a href="#" onclick="navigateTo('missoes')">
                    <i class="fas fa-trophy text-blue-600 text-2xl"></i>
                    <span class="block text-sm text-gray-600">Missões</span>
                </a>
            </div>
            <!-- Transferências Icon -->
            <div class="text-center">
                <a href="#" onclick="navigateTo('premiacoes')">
                    <i class="fa-solid fa-users text-blue-600 text-2xl"></i>
                    <span class="block text-sm text-gray-600">Premiações</span>
                </a>
            </div>
            <!-- Perfil Icon -->
            <div class="text-center">
                <a href="#" onclick="navigateTo('faq')">
                    <i class="fas fa-question text-blue-600 text-2xl"></i>
                    <span class="block text-sm text-gray-600">Faq</span>
                </a>
            </div>
        </div>
    </footer>
</div>
            <script>
            function navigateTo(section) {
                // Redireciona para a página correspondente com base na seção
                switch(section) {
                    case 'loja':
                        window.location.href = '/loja';
                        break;
                    case 'missoes':
                        window.location.href = '/';
                        break;
                    case 'premiacoes':
                        window.location.href = '/premiacoes';
                        break;
                    case 'faq':
                        window.location.href = '/faq';
                        break;
                    default:
                        console.log('Seção desconhecida:', section);
                }
            }
        </script>

<script>
    // Função para definir um cookie
    function setCookie(name, value, days) {
        const d = new Date();
        d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = "expires=" + d.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    // Função para obter um cookie pelo nome
    function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    let totalPontos = parseInt(getCookie("pontos")) || 0; // Recupera pontos dos cookies, ou inicia com 0

    // Exibe o valor inicial de pontos ao carregar a página
    document.getElementById('pontos').innerText = totalPontos + ' Pontos';

    // Função para adicionar 1000 pontos
    function adicionarPontos() {
        totalPontos += 1000; // Adiciona 1000 pontos
        document.getElementById('pontos').innerText = totalPontos + ' Pontos'; // Atualiza a exibição dos pontos
        setCookie("pontos", totalPontos, 30); // Salva os pontos nos cookies por 30 dias
    }
</script>

        @livewireScripts
    </body>
</html>
@endif