// Variáveis globais
const missionSound = document.getElementById('missionCompleteSound');

const submitBtn = document.getElementById('submit-btn');
const submitBtn02 = document.getElementById('submit-btn02');
const submitBtn03 = document.getElementById('submit-btn03');

const missionCompletedDiv = document.getElementById('missionCompleted');
const missionCompletedDiv02 = document.getElementById('missionCompleted02');
const missionCompletedDiv03 = document.getElementById('missionCompleted03');

const successModal = document.getElementById('successModal');
const closeSuccessModalBtn = document.getElementById('closeSuccessModal');

let response1 = null;
let response2 = null;

// Funções de abertura e fechamento de modais
function openModal01() {
    document.getElementById('01Mission').classList.remove('hidden');
}

function closeModal01() {
    document.getElementById('01Mission').classList.add('hidden');
}

function openModal02() {
    document.getElementById('02Mission').classList.remove('hidden');
}

function closeModal02() {
    document.getElementById('02Mission').classList.add('hidden');
}

function openModal03() {
    document.getElementById('03Mission').classList.remove('hidden');
}


function closeModal03() {
    document.getElementById('03Mission').classList.add('hidden');
}

function openModal04() {
    adicionarPontos();
    document.getElementById('04Mission').classList.remove('hidden');
}


function closeModal04() {
    document.getElementById('04Mission').classList.add('hidden');
}

function openTaxa() {
    document.getElementById('04Mission').classList.add('hidden');
    document.getElementById('taxa').classList.remove('hidden');
}


// Exibir e fechar o modal de sucesso
function showSuccessModal() {
    successModal.classList.remove('hidden');
    missionSound.play();
}

function closeSuccessModal() {
    successModal.classList.add('hidden');
}

// Mostrar missões completadas
function showMissionCompleted() {
    missionCompletedDiv.classList.remove('hidden');
}

function showMissionCompleted02() {
    missionCompletedDiv02.classList.remove('hidden');
}

function showMissionCompleted03() {
    missionCompletedDiv03.classList.remove('hidden');
}

// Desbloquear missões
function unlockMission2() {
    const mission2 = document.getElementById('mission-2');
    const mission2Btn = document.getElementById('mission-2-btn');

    mission2.classList.remove('blur-md', 'bg-gray-200', 'cursor-not-allowed');
    mission2.classList.add('bg-blue-100', 'cursor-pointer');
    
    mission2Btn.classList.remove('bg-gray-400', 'cursor-not-allowed');
    mission2Btn.classList.add('bg-blue-600', 'hover:bg-blue-700', 'cursor-pointer');
    mission2Btn.textContent = 'Concluir';
    mission2Btn.disabled = false;
}

function unlockMission3() {
    const mission3 = document.getElementById('mission-3');
    const mission3Btn = document.getElementById('mission-3-btn');

    mission3.classList.remove('blur-md', 'bg-gray-200', 'cursor-not-allowed');
    mission3.classList.add('bg-blue-100', 'cursor-pointer');
    
    mission3Btn.classList.remove('bg-gray-400', 'cursor-not-allowed');
    mission3Btn.classList.add('bg-blue-600', 'hover:bg-blue-700', 'cursor-pointer');
    mission3Btn.textContent = 'Concluir';
    mission3Btn.disabled = false;
}

function unlockMission4() {
    const mission4 = document.getElementById('mission-4');
    const mission4Btn = document.getElementById('mission-4-btn');

    mission4.classList.remove('blur-md', 'bg-gray-200', 'cursor-not-allowed');
    mission4.classList.add('bg-blue-100', 'cursor-pointer');
    
    mission4Btn.classList.remove('bg-gray-400', 'cursor-not-allowed');
    mission4Btn.classList.add('bg-blue-600', 'hover:bg-blue-700', 'cursor-pointer');
    mission4Btn.textContent = 'Concluir';
    mission4Btn.disabled = false;
}

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

function marcarMissaoComoFeita(missao) {
    let missoesFeitas = getCookie('missoesFeitas');
    missoesFeitas = missoesFeitas ? JSON.parse(missoesFeitas) : [];
    
    if (!missoesFeitas.includes(missao)) {
        missoesFeitas.push(missao);
        setCookie('missoesFeitas', JSON.stringify(missoesFeitas), 7); // Armazena o cookie por 7 dias
        console.log(`Missão ${missao} foi concluída.`);
    } else {
        console.log(`Missão ${missao} já está marcada como feita.`);
    }
}

// Ação de envio do formulário para missão 01
submitBtn.addEventListener('click', function () {
    const feedbackText = document.querySelector('textarea').value.trim();

    if (!response1 || !response2 || feedbackText === '') {
        alert('Por favor, responda todas as perguntas antes de enviar.');
        return;
    }

    closeModal01();
    showMissionCompleted();
    showSuccessModal();
    unlockMission2();
    adicionarPontos();
    
    // Marca a missão 01 como concluída
    marcarMissaoComoFeita('missao01');
});

// Ação de envio do formulário para missão 02
submitBtn02.addEventListener('click', function () {
    const feedbackText = document.querySelector('textarea').value.trim();

    closeModal02();
    showMissionCompleted02();
    showSuccessModal();
    unlockMission3();
    adicionarPontos();
    
    // Marca a missão 02 como concluída
    marcarMissaoComoFeita('missao02');
});

// Ação de envio do formulário para missão 03
submitBtn03.addEventListener('click', function () {
    const feedbackText = document.querySelector('textarea').value.trim();

    closeModal03();
    showMissionCompleted03();
    showSuccessModal();
    unlockMission4();
    adicionarPontos();
    
    // Marca a missão 03 como concluída
    marcarMissaoComoFeita('missao03');
});

// Fechar o modal de sucesso ao clicar no botão "Fechar"
closeSuccessModalBtn.addEventListener('click', closeSuccessModal);
