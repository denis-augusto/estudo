<x-mainlayout>
    <x-slot:title>
        Adicionar Clientes
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
        <h1>Adicionar cliente</h1>
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <input type="text" name="nome" id="nome" class="border" value="{{ old('nome') }}" placeholder="Nome Completo">
            <input type="text" name="telefone" id="telefone" class="border" value="{{ old('telfone') }}" placeholder="(11)999999999">
            <input type="date" name="data_nascimento" id="data_nascimento" class="border" value="{{ old('data_nascimento') }}">
            <input type="submit" value="Salvar" class="border cursor-pointer">
        </form>
    </div>
</x-mainlayout>