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
        <h1>Adicionar produtos</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <input type="text" name="descricao" id="descricao" class="border" value="{{ old('descricao') }}" placeholder="Descrição do produto">
            <input type="text" name="preco" id="preco" class="border" value="{{ old('preco') }}" placeholder="informe o preço">
            <input type="submit" value="Salvar" class="border cursor-pointer">
        </form>
    </div>
</x-mainlayout>