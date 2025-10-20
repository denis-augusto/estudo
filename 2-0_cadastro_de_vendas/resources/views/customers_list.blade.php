<x-mainlayout>
    <x-slot:title>
        Listagem de Clientes
    </x-slot>
    <div >
        <div class="flex flex-col text-center gap-8 text-2xl font-bold text-gray-800 mb-4">
            <a href="{{ route('customers.create') }}" class="border py-4 rounded-lg hover:bg-gray-800 hover:text-white hover:border-gray-800">Adicionar Clientes</a>
        </div>
        <h1 class="text-2xl font-bold mb-4">Lista de clientes</h1>
        <table class="border">
            <thead class="border">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Data de nascimento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->nome }}</td>
                    <td>{{ $customer->telefone }}</td>
                    <td>{{ $customer->data_nascimento?->format('d/m/Y') }}</td>
                    <td class="flex flex-row"><a href="{{ route('customers.edit', [$customer]) }}">Editar</a> | 
                        <form action="{{ route('customers.destroy', ['customer' => $customer->id]) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="cursor-pointer">Deletar</button>
                        </form>
                    </td> 
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-mainlayout>