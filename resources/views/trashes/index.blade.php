<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Dashboard Arandu</title>
</head>

<body class="bg-[#F6F6F6] font-montserrat">

    <!-- TOPO -->
    <header class="flex items-center justify-between px-8 py-4 bg-white shadow">
        <div class="flex items-center space-x-2">
          <img src="{{ asset('images/logoAranduVermelha.svg') }}" alt="Logo Arandu vermelha" class="h-10">
        </div>
        
        <nav class="flex items-center space-x-6 text-sm font-medium text-[#6C0D0E]">
          <a href="#" class="hover:text-[#983132]">GALERIA</a>
          <a href="#" class="hover:text-[#983132]">LOGOUT</a>
          <a href="#" class="hover:text-[#983132]">DASHBOARD</a>
          <a href="#" class="hover:text-[#983132]">SOBRE</a>
          <div class="w-10 h-10 rounded-full bg-gray-300"></div>
        </nav>

      </header>

    <div class="flex">

        <!-- MENU LATERAL -->
        <aside class="w-200 px-6 py-8 min-h-screen">

            <!-- Ícone voltar -->
            <button class="flex items-center gap-2 text-[#F5F2EC] bg-[#6C0D0E] rounded-full font-semibold mb-6 p-2">
                <img class="flex items-center" src="{{ asset('images/iconeSeta.svg') }}" alt="Icone de seta">
            </button>

            <!-- Botão incidências -->
            <button class="w-full bg-[#6C0D0E] text-white py-3 rounded-md shadow font-bold flex justify-start pl-5">
                INCIDÊNCIAS
            </button>

            <!-- Filtro -->
            <div class="mt-4">
                <button class="w-full bg-[#A45006] text-white rounded-md font-bold flex items-center justify-center gap-2">
                    <img class="w-12 h-12" src="{{ asset('images/iconeFiltrar.svg') }}" alt="Icone de filtrar"> FILTRAR
                </button>
            </div>

            <!-- Cards -->
            <div class="mt-6 space-y-4">

                <div class="bg-white rounded shadow p-4">
                    <p class="font-extrabold text-[#6C0D0E]">TOTAL DE DENÚNCIAS</p>
                    <p class="text-[#A45006] font-extrabold text-xl mt-2">10.657</p>
                </div>

                <div class="bg-white rounded shadow p-4">
                    <p class="font-extrabold text-[#6C0D0E]">MÊS COM MAIS DENÚNCIAS</p>
                    <p class="text-[#A45006] font-extrabold text-xl mt-2">DEZEMBRO - 2025</p>
                </div>

                <div class="bg-white rounded shadow p-4">
                    <p class="font-extrabold text-[#6C0D0E]">MÊS COM MENOS DENÚNCIAS</p>
                    <p class="text-[#A45006] font-extrabold text-xl mt-2">JANEIRO - 2025</p>
                </div>

                <div class="bg-white rounded shadow p-4">
                    <p class="font-extrabold text-[#6C0D0E]">NÍVEL DE QUEIMADAS</p>
                    <p class="text-[#A45006] font-extrabold text-xl mt-2">[Aqui tem um gráfico]</p>
                </div>

            </div>

        </aside>

        <!-- CONTEÚDO PRINCIPAL -->
        <main class="flex-1 p-10">

            <!-- Título -->
            <h2 class="bg-[#A45006] text-white font-bold text-xl text-center py-3 rounded shadow mb-6">
                RELATÓRIOS DE DENÚNCIAS
            </h2>

            <!-- Tabela -->
            <div class="overflow-x-auto">
                <table class="w-full bg-white shadow rounded-lg border border-black border-1">
                    <thead class="bg-white">
                        <tr class="border-b">
                            <th class="p-3 border-r-2 text-left font-semibold text-[#6C0D0E]">ENDEREÇO</th>
                            <th class="p-3 border-r-2 text-left font-semibold text-[#6C0D0E]">DESCRIÇÃO</th>
                            <th class="p-3 border-r-2 text-left font-semibold text-[#6C0D0E]">NÍVEL</th>
                            <th class="p-3 border-r-2 text-left font-semibold text-[#6C0D0E]">DATA</th>
                            <th class="p-3 border-r-2 text-left font-semibold text-[#6C0D0E]">HORA</th>
                            <th class="p-3 text-left font-semibold text-[#6C0D0E]">FOTO</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- trocar pelos nomes que tiverem no banco de dados -->
                        @foreach($trashes as $trash)
                        <tr class="border-b hover:bg-gray-50 text-[#41413F] font-normal">
                            <td class="p-3 border-r-2">{{ $trash->address }}</td>
                            <td class="p-3 border-r-2">{{ $trash->description }}</td>
                            <td class="p-3 border-r-2">{{ $trash->level }}</td>
                            <td class="p-3 border-r-2">{{ $trash->date }}</td>
                            <td class="p-3 border-r-2">{{ $trash->hour }}</td>
                            <td class="p-3 text-black underline cursor-pointer">
                                <button class="flex flex-col items-center">
                                    <img class="w-6 h-6" src="{{ asset('images/iconeImagens.svg') }}" alt="icone de imagens">
                                    <a href="">Ver imagem</a>
                                </button>
                            </td>
                        </tr>
                            @endforeach
                    </tbody>

                </table>
            </div>
        </main>

    </div>
</body>
</html>
