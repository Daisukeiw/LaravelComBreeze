<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Consulta de Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <nav class="mb-8">
                        <ul class="flex flex-row space-x-8 border-b border-gray-300 dark:border-gray-700 pb-4">
                            <li>
                                <a href="/dashboard"
                                    class="font-semibold px-2 pb-2 border-b-2 {{ request()->is('dashboard') ? 'border-indigo-500 text-white' : 'border-transparent text-gray-400 hover:text-white' }}">
                                    Cadastro
                                </a>
                            </li>
                            <li>
                                <a href="/consultar-cliente"
                                    class="font-semibold px-2 pb-2 border-b-2 {{ request()->is('consultar-cliente') ? 'border-indigo-500 text-white' : 'border-transparent text-gray-400 hover:text-white' }}">
                                    Consulta
                                </a>
                            </li>
                        </ul>
                    </nav>
                    @if(session('success'))
                    <div class="mb-4 p-4 rounded bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if(session('error'))
                    <div class="mb-4 p-4 rounded bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200">
                        {{ session('error') }}
                    </div>
                    @endif

                    @if($clientes->isEmpty())
                    <div class="mb-4 p-4 rounded bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200">
                        Nenhum cliente cadastrado.
                    </div>
                    @else
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($clientes as $cliente)
                        <div class="mb-2 mt-2 bg-white dark:bg-gray-900 rounded-xl shadow-lg border border-gray-200 dark:border-gray-700 p-6 flex flex-col gap-3 transition-transform hover:scale-105 hover:shadow-2xl">
                            <h3 class="text-xl font-bold text-white mb-2">{{ $cliente->nome ?? 'Nome não informado' }}</h3>
                            <ul class="text-sm text-gray-700 dark:text-gray-200 space-y-1">
                                <li><span class="font-semibold">Email:</span> {{ $cliente->email ?? 'Não informado' }}</li>
                                <li><span class="font-semibold">Telefone:</span> {{ $cliente->telefone ?? 'Não informado' }}</li>
                                <li><span class="font-semibold">UF:</span> {{ $cliente->uf ?? 'Não informado' }}</li>
                                <li><span class="font-semibold">Observações:</span> {{ $cliente->observacao ?? 'Sem observações' }}</li>
                            </ul>
                            <div class="flex gap-3 mt-4">
                                <a href="{{ url('/editar-cliente/' . $cliente->id) }}"
                                    class="px-4 py-2 border border-indigo-600 text-white-600 hover:bg-indigo-600 hover:text-white rounded-md text-xs font-semibold transition-colors bg-transparent">
                                    Editar
                                </a>
                                <a href="{{ url('/excluir-cliente/' . $cliente->id) }}"
                                    class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md text-xs font-semibold transition-colors">
                                    Excluir
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>