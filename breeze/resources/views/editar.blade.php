<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Cliente') }}
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
                    {{-- Seu formulário começa aqui --}}
                    <div class="form-container mt-2">

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


                    <form action="/editar-cliente/{{ $cliente->id }}" method="POST" class="space-y-4 disabled:opacity-50">
                        @csrf

                        <div>
                            <label for="id" class="block text-sm font-medium text-gray-700 dark:text-gray-200">ID</label>
                            <input type="text" id="id" name="id" value="{{ $cliente->id }}" disabled
                                class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm" />
                        </div>

                        <div>
                            <label for="nome" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Nome</label>
                            <input type="text" id="nome" name="nome" value="{{ $cliente->nome }}"
                                class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email</label>
                            <input type="email" id="email" name="email" value="{{ $cliente->email }}"
                                class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        </div>

                        <div>
                            <label for="endereco" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Endereço</label>
                            <input type="text" id="endereco" name="endereco" value="{{ $cliente->endereco }}"
                                class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        </div>

                        <div>
                            <label for="telefone" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Telefone</label>
                            <input type="text" id="telefone" name="telefone" value="{{ $cliente->telefone }}"
                                class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        </div>

                        <div>
                            <label for="bairro" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Bairro</label>
                            <input type="text" id="bairro" name="bairro" value="{{ $cliente->bairro }}"
                                class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        </div>

                        <div>
                            <label for="cidade" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Cidade</label>
                            <input type="text" id="cidade" name="cidade" value="{{ $cliente->cidade }}"
                                class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        </div>

                        <div class="flex gap-4">
                            <div class="w-1/2">
                                <label for="cep" class="block text-sm font-medium text-gray-700 dark:text-gray-200">CEP</label>
                                <input type="text" id="cep" name="cep" value="{{ $cliente->cep }}"
                                    class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required />
                            </div>
                            <div class="w-1/2">
                                <label for="complemento" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Complemento</label>
                                <input type="text" id="complemento" name="complemento" value="{{ $cliente->complemento }}"
                                    class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                            </div>
                        </div>

                        <div>
                            <label for="uf" class="block text-sm font-medium text-gray-700 dark:text-gray-200">UF</label>
                            <select id="uf" name="uf" required
                                class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="">Selecione</option>
                                <option value="SP" {{ $cliente->uf == 'SP' ? 'selected' : '' }}>SP</option>
                                <option value="RJ" {{ $cliente->uf == 'RJ' ? 'selected' : '' }}>RJ</option>
                                <option value="MG" {{ $cliente->uf == 'MG' ? 'selected' : '' }}>MG</option>
                                <option value="RS" {{ $cliente->uf == 'RS' ? 'selected' : '' }}>RS</option>
                            </select>
                        </div>

                        <div>
                            <label for="observacao" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Observação</label>
                            <textarea id="observacao" name="observacao" rows="3"
                                class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="Digite a observação">{{ $cliente->observacao }}</textarea>
                        </div>

                        <button type="submit"
                            class="w-full mt-4 px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-md border border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-400 transition-colors">
                            Salvar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>