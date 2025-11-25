<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Dashboard Arandu</title>
</head>

<body class="bg-gray-100 font-sans">

    <!-- TOPO -->
    <header class="flex items-center justify-between px-8 py-4 bg-white shadow">
        <div class="flex items-center space-x-2">
          <img src="{{ asset('images/logoAranduVerde.png') }}" alt="Logo Arandu vermelha" class="h-10">
        </div>
        
        <nav class="flex items-center space-x-6 text-sm font-medium text-[#386641]">
          <a href="#" class="hover:text-[#569D64]">GALERIA</a>
          <a href="#" class="hover:text-[#569D64]">LOGOUT</a>
          <a href="#" class="hover:text-[#569D64]">DASHBOARD</a>
          <a href="#" class="hover:text-[#569D64]">SOBRE</a>
          <div class="w-10 h-10 rounded-full bg-gray-300"></div>
        </nav>

      </header>

    <div class="flex">

        <!-- MENU LATERAL -->
        <aside class="w-72 bg-gray-200 px-6 py-8 min-h-screen">

            <!-- Ícone voltar -->
            <button class="flex items-center gap-2 text-green-700 font-semibold mb-6">
                <span class="text-3xl">&larr;</span>
            </button>

            <!-- Botão incidências -->
            <button class="w-full bg-[#414D39] text-white py-3 rounded shadow font-bold">
                INCIDÊNCIAS
            </button>

            <!-- Filtro -->
            <div class="mt-4">
                <button class="w-full bg-[#5E8845] text-white py-2 rounded font-semibold flex items-center justify-center gap-2">
                    <span class="text-lg">⚙️</span> FILTRAR
                </button>
            </div>

            <!-- Cards -->
            <div class="mt-6 space-y-4">

                <div class="bg-white rounded shadow p-4">
                    <p class="font-bold text-gray-700">TOTAL DE DENÚNCIAS</p>
                    <p class="text-[#629956] font-extrabold text-xl mt-2">10.657</p>
                </div>

                <div class="bg-white rounded shadow p-4">
                    <p class="font-bold text-gray-700">MÊS COM MAIS DENÚNCIAS</p>
                    <p class="text-[#629956] font-extrabold text-xl mt-2">DEZEMBRO - 2025</p>
                </div>

                <div class="bg-white rounded shadow p-4">
                    <p class="font-bold text-gray-700">MÊS COM MENOS DENÚNCIAS</p>
                    <p class="text-[#629956] font-extrabold text-xl mt-2">JANEIRO - 2025</p>
                </div>

            </div>

        </aside>

        <!-- CONTEÚDO PRINCIPAL -->
        <main class="flex-1 p-10">

            <!-- Título -->
            <h2 class="bg-[#6A994E] text-white font-bold text-xl text-center py-3 rounded shadow mb-6">
                RELATÓRIOS DE DENÚNCIAS
            </h2>

            <!-- Tabela -->
            <div class="overflow-x-auto">
                <table class="w-full bg-white shadow rounded-lg border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr class="border-b">
                            <th class="p-3 text-left font-semibold text-gray-700">ENDEREÇO</th>
                            <th class="p-3 text-left font-semibold text-gray-700">DESCRIÇÃO</th>
                            <th class="p-3 text-left font-semibold text-gray-700">DATA</th>
                            <th class="p-3 text-left font-semibold text-gray-700">HORA</th>
                            <th class="p-3 text-left font-semibold text-gray-700">FOTO</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($trashes as $trash)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-3">{{ $trash->address }}</td>
                            <td class="p-3">{{ $trash->description }}</td>
                            <td class="p-3">{{ $trash->date }}</td>
                            <td class="p-3">{{ $trash->hour }}</td>
                            <td class="p-3 text-green-700 underline cursor-pointer">
                                <a href="{{ asset('storage/' . $trash->image) }}">Ver imagem 📷</a>
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
