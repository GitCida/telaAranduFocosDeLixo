<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Arandu</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F6F6F6] text-gray-800 font-montserrat">

  <!-- ===== HEADER ===== -->
  <header class="flex items-center justify-between px-8 py-4 bg-white shadow">
    <div class="flex items-center space-x-2">
      <img src="{{ asset('images/logoAranduVermelha.svg') }}" alt="Logo Arandu" class="h-10">
    </div>

    <nav class="flex items-center space-x-6 text-sm font-medium text-[#6C0D0E]">
      <a href="#" class="hover:text-[#983132]">GALERIA</a>
      <a href="#" class="hover:text-[#983132]">LOGOUT</a>
      <a href="#" class="hover:text-[#983132]">DASHBOARD</a>
      <a href="#" class="hover:text-[#983132]">SOBRE</a>
      <div class="w-10 h-10 rounded-full bg-gray-300"></div>
    </nav>
  </header>


  <!-- ===== MAIN CONTAINER ===== -->
  <main class="flex px-6 py-6 gap-6">

    <a href="#"
      class="w-9 h-9 bg-[#A45006] hover:bg-[#7B3900] text-white rounded-full flex items-center justify-center mb-4 transition">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M10 19l-7-7 7-7M3 12h18" />
        </svg>
    </a>


<!-- ===== SIDEBAR ===== -->
<aside class="w-1/4 bg-white rounded-lg shadow p-6">

  <!-- TÍTULO -->
  <h2 class="text-lg font-bold text-white bg-[#6C0D0E] px-4 py-2 rounded-lg uppercase text-start mb-6">
    Incidências
  </h2>

  <!-- BOTÃO -->
  <button id="btnFiltro"
    class="w-full bg-[#A45006] hover:bg-[#7B3900] text-white font-semibold py-2 rounded-lg flex items-center justify-center gap-2 text-[25px]">
    
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M3 4h18M6 10h12M10 16h4" />
    </svg>

    Filtrar

    <!-- Setinha -->
    <svg id="setaFiltro" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 hover:bg-white transition-transform"
        fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M19 9l-7 7-7-7" />
    </svg>

  </button>

  <!-- CONTEÚDO OCULTO -->
  <div id="conteudoFiltro" class="hidden transition-all duration-300 mt-2">

    <div class="rounded-lg p-4 bg-white shadow">
      
      <label class="font-semibold">Selecionar ano</label>
      <select id="selectAno" 
              class="w-full border rounded-lg px-4 py-2 mb-3">
          <option value="">Selecionar ano</option>
          <option value="2025">2025</option>
          <option value="2024">2024</option>
      </select>

      <!-- SELECT DO MÊS -->
      <label class="font-semibold">Selecionar mês</label>
      <select id="selectMes" 
            class="w-full border rounded-lg px-4 py-2 mb-3">
          <option value="">Selecionar mês</option>
      </select>

      <button class="w-full bg-[#A45006] text-white font-bold py-2 rounded-lg">
        SALVAR
      </button>

    </div>

  </div>


 <!-- LISTA DE INFORMAÇÕES -->
<!-- LISTA DE INFORMAÇÕES -->
<div class="mt-6 space-y-4">

  <!-- CARD GENÉRICO -->
  <div class="card group bg-gray-50 rounded-lg p-4 shadow-sm relative overflow-hidden">
    
    <!-- Barrinha lateral -->
    <div class="absolute left-0 top-0 h-full w-2 bg-[#6C0D0E]"></div>

    <!-- Título + botão -->
    <div class="flex items-center justify-between pl-3">
      <p class="text-sm font-bold text-[#6C0D0E]">TOTAL DE DENÚNCIAS</p>

      <button 
        class="btnInfo w-6 h-6 bg-[#6C0D0E] text-white rounded-full flex items-center justify-center"
        data-texto="ESTE DADO REPRESENTA O APURAMENTO TOTAL DE DENÚNCIAS DE FOCOS DE LIXO REGISTRADAS NO MUNICÍPIO."
      >?</button>
    </div>

    <!-- Valor (some quando info abre) -->
    <p class="valor text-lg font-bold text-[#6C0D0E] mt-10 pl-3">
      <!-- dado -->
    </p>

    <!-- Texto de informação (oculto inicialmente) -->
    <div class="info hidden pl-3 pr-2 py-4 text-[#2F4D35] text-sm leading-tight">
    </div>
  </div>

  <!-- ===== CARD 2 ===== -->
  <div class="card group bg-gray-50 rounded-lg p-4 shadow-sm relative overflow-hidden">
    
    <div class="absolute left-0 top-0 h-full w-2 bg-[#6C0D0E]"></div>

    <div class="flex items-center justify-between pl-3">
      <p class="text-sm font-bold text-[#6C0D0E]">MÊS COM MAIS DENÚNCIAS</p>

      <button 
        class="btnInfo w-6 h-6 bg-[#6C0D0E] text-white rounded-full flex items-center justify-center"
        data-texto="ESTE DADO INDICA O MÊS QUE APRESENTOU O MAIOR NÚMERO DE DENÚNCIAS DE FOCOS DE LIXO."
      >?</button>
    </div>

    <p class="valor text-lg font-bold text-[#6C0D0E] mt-10 pl-3 uppercase">
      <!-- dado -->
    </p>

    <div class="info hidden pl-3 pr-2 py-4 text-[#2F4D35] text-sm leading-tight"></div>
  </div>

  <!-- ===== CARD 3 ===== -->
  <div class="card group bg-gray-50 rounded-lg p-4 shadow-sm relative overflow-hidden">
    
    <div class="absolute left-0 top-0 h-full w-2 bg-[#6C0D0E]"></div>

    <div class="flex items-center justify-between pl-3">
      <p class="text-sm font-bold text-[#6C0D0E]">MÊS COM MENOS DENÚNCIAS</p>

      <button 
        class="btnInfo w-6 h-6 bg-[#6C0D0E] text-white rounded-full flex items-center justify-center"
        data-texto="ESTE DADO INDICA O MÊS QUE REGISTROU O MENOR NÚMERO DE DENÚNCIAS NO PERÍODO ANALISADO."
      >?</button>
    </div>

    <p class="valor text-lg font-bold text-[#6C0D0E] mt-10 pl-3 uppercase">
      <!-- dado -->
    </p>

    <div class="info hidden pl-3 pr-2 py-4 text-[#2F4D35] text-sm leading-tight"></div>
  </div>

  <!-- ===== CARD 4 ===== -->
  <div class="card group bg-gray-50 rounded-lg p-4 shadow-sm relative overflow-hidden">
    
    <div class="absolute left-0 top-0 h-full w-2 bg-[#6C0D0E]"></div>

    <div class="flex items-center justify-between pl-3">
      <p class="text-sm font-bold text-[#6C0D0E]">NÍVEL DE QUEIMADAS</p>

      <button 
        class="btnInfo w-6 h-6 bg-[#6C0D0E] text-white rounded-full flex items-center justify-center"
        data-texto="ESTE DADO INDICA O NÍVEL DAS QUEIMADAS."
      >?</button>
    </div>

    <p class="valor text-lg font-bold text-[#6C0D0E] mt-10 pl-3 uppercase">
      <!-- dado -->
    </p>

    <div class="info hidden pl-3 pr-2 py-4 text-[#2F4D35] text-sm leading-tight"></div>
  </div>

</div>
</aside>


    <!-- ===== TABLE SECTION ===== -->
    <section class="w-3/4">
    <h2 class="text-[25px] font-bold text-white bg-[#A45006] px-4 py-2 rounded-lg uppercase text-center mb-6">
        Relatórios de denúncias
    </h2>

    <div class="overflow-hidden rounded-lg shadow bg-white">
        <table class="w-full text-sm border border-gray-200">

        <!-- CABEÇALHO -->
        <thead class="bg-[#EFEFEF] text-gray-600 uppercase text-x">
            <tr class="divide-x divide-gray-300">
            <th class="py-3 px-4 text-left">Endereço</th>
            <th class="py-3 px-4 text-left">Descrição</th>
            <th class="py-3 px-4 text-left">Nível</th>
            <th class="py-3 px-4 text-left">Data</th>
            <th class="py-3 px-4 text-left">Hora</th>
            <th class="py-3 px-4 text-left">Foto</th>
            </tr>
        </thead>

        <!-- CORPO -->
        <tbody class="divide-y divide-gray-200">
            @foreach(range(1, 8) as $i)
            <tr class="divide-x divide-gray-300 hover:bg-gray-50 transition">
            <td class="py-3 px-4"></td>
            <td class="py-3 px-4"></td>
            <td class="py-3 px-4"></td>
            <td class="py-3 px-4"></td>
            <td class="py-3 px-4"></td>
            <td class="py-3 px-4 text-end">
                <button class="text-[#6C0D0E] font-bold w-8 h-8 rounded-full flex items-center justify-center hover:bg-gray-100 transition"
                title="Ver imagem">
                    IMG
                </button>
            </td>
            </tr>
            @endforeach
        </tbody>

        </table>
    </div>
    </section>


<script>

// ABRIR / FECHAR FILTRO
const btnFiltro = document.getElementById("btnFiltro");
const conteudoFiltro = document.getElementById("conteudoFiltro");
const setaFiltro = document.getElementById("setaFiltro");

btnFiltro.addEventListener("click", () => {
    conteudoFiltro.classList.toggle("hidden");
    setaFiltro.classList.toggle("rotate-180");
});

// Pega os selects
const selectAno = document.getElementById("selectAno");
const selectMes = document.getElementById("selectMes");

// Lista completa de meses
const mesesCompletos = [
    "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
    "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
];

// Meses válidos apenas em 2025
const meses2025 = ["Agosto", "Setembro", "Outubro", "Novembro"];

// Quando o ano mudar...
selectAno.addEventListener("change", () => {
    
    // Limpa o select de mês
    selectMes.innerHTML = `<option value="">Selecionar mês</option>`;

    if (selectAno.value === "2025") {
        // Adiciona somente meses de 2025
        meses2025.forEach(mes => {
            selectMes.innerHTML += `<option value="${mes}">${mes}</option>`;
        });

    } else if (selectAno.value === "2024") {
        // Adiciona todos os meses
        mesesCompletos.forEach(mes => {
            selectMes.innerHTML += `<option value="${mes}">${mes}</option>`;
        });
    }
});


document.querySelectorAll(".btnInfo").forEach(botao => {
  botao.addEventListener("click", () => {
    
    const card = botao.closest(".card");
    const valor = card.querySelector(".valor");
    const info = card.querySelector(".info");

    // Alterna visibilidade
    valor.classList.toggle("hidden");
    info.classList.toggle("hidden");

    // Preenche o texto da info
    if (!info.classList.contains("hidden")) {
      info.textContent = botao.dataset.texto;
    }
  });
});
</script>


  </main>

</body>

</html>