<x-mainlayout>
    <x-slot:title>
        Editar cliente
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
        <h1>Editar cliente</h1>
        <form action="{{ route('customers.update', ['customer' => $customer->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <input type="text" name="nome" id="nome" class="border" value="{{ $customer->nome }}">
            <input type="text" name="telefone" id="telefone" class="border" value="{{ $customer->telefone}}">
            <input type="date" name="data_nascimento" id="data_nascimento" class="border" value="{{ optional($customer->data_nascimento)->format('Y-m-d') }}">
            <input type="submit" value="Atualizar" class="border cursor-pointer">
        </form>
    </div>
</x-mainlayout>