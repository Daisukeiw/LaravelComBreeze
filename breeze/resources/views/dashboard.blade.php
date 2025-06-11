<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
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
                        <form action="/cadastrar-cliente" method="POST" class="space-y-4 max-w-lg mx-auto">
                            @csrf

                            <div>
                                <label for="nome" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Nome</label>
                                <input type="text" id="nome" name="nome" placeholder="Digite seu nome"
                                    class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email</label>
                                <input type="email" id="email" name="email" placeholder="Digite seu email"
                                    class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                            </div>

                            <div>
                                <label for="endereco" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Endereço</label>
                                <input type="text" id="endereco" name="endereco" placeholder="Digite seu endereço"
                                    class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                            </div>

                            <div>
                                <label for="telefone" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Telefone</label>
                                <input type="number" id="telefone" name="telefone" placeholder="Digite seu telefone"
                                    class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                            </div>

                            <div>
                                <label for="bairro" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Bairro</label>
                                <input type="text" id="bairro" name="bairro" placeholder="Digite seu bairro"
                                    class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                            </div>

                            <div>
                                <label for="cidade" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Cidade</label>
                                <input type="text" id="cidade" name="cidade" placeholder="Digite sua cidade"
                                    class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                            </div>

                            <div class="flex gap-4">
                                <div class="w-1/2">
                                    <label for="cep" class="block text-sm font-medium text-gray-700 dark:text-gray-200">CEP</label>
                                    <input type="number" id="cep" name="cep" placeholder="Digite seu CEP" required
                                        class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                                </div>
                                <div class="w-1/2">
                                    <label for="complemento" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Complemento</label>
                                    <input type="text" id="complemento" name="complemento" placeholder="Digite o complemento"
                                        class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                                </div>
                            </div>

                            <div>
                                <label for="uf" class="block text-sm font-medium text-gray-700 dark:text-gray-200">UF</label>
                                <select id="uf" name="uf" required
                                    class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <option value="">Selecione</option>
                                    <option value="SP">SP</option>
                                    <option value="RJ">RJ</option>
                                    <option value="MG">MG</option>
                                    <option value="RS">RS</option>
                                </select>
                            </div>

                            <div>
                                <label for="observacao" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Observação</label>
                                <textarea id="observacao" name="observacao" rows="3" placeholder="Digite a observação"
                                    class="mb-2 block w-full rounded-md border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                            </div>

                            <button type="submit"
                                class="w-full mt-4 px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-md border border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-400 transition-colors">
                                Cadastrar
                            </button>
                        </form>
                    </div>
                    {{-- Seu formulário termina aqui --}}
                </div>
            </div>
        </div>
    </div>



</x-app-layout>