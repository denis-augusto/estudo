<x-mainlayout>
    <x-slot:title>
        Listagem de Produtos
    </x-slot>
    <div >
        <div class="flex flex-col text-center gap-8 text-2xl font-bold text-gray-800 mb-4">
            <a href="{{ route('products.create') }}" class="border py-4 rounded-lg hover:bg-gray-800 hover:text-white hover:border-gray-800">Adicionar Produtos</a>
        </div>
        <h1 class="text-2xl font-bold mb-4">Lista de produtos</h1>
        <table class="border">
            <thead class="border">
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->descricao }}</td>
                    <td>{{ $product->preco }}</td>
                    <td class="flex flex-row"><a href="{{ route('products.edit', [$product]) }}">Editar</a> | 
                        <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="POST">
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