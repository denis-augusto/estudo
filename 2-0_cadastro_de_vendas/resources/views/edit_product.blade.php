<x-mainlayout>
    <x-slot:title>
        Adicionar Produtos
    </x-slot>
    <div >
        @if ($errors->any())
            <div class="text-red-500">
                {{-- ESTE BLOCO MOSTRARÁ POR QUE A VALIDAÇÃO FALHOU --}}
                <strong>Ops!</strong> Houve alguns problemas com sua entrada.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1>Atualizar produtos</h1>
        <form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="descricao" id="descricao" class="border" value="{{ $product->descricao }}">
            <input type="text" name="preco" id="preco" class="border" value="{{ $product->preco }}">
            <input type="submit" value="Atualizar registro" class="border cursor-pointer">
        </form>
    </div>
</x-mainlayout>