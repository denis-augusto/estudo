<x-mainlayout>
    <x-slot:title>
        Home
    </x-slot>
    <div class="flex flex-col text-center gap-8 text-2xl font-bold text-gray-800">
        <a href="{{ route('costomers.index') }}" class="border py-4 rounded-lg hover:bg-gray-800 hover:text-white hover:border-gray-800">Clientes</a>
        <a href="{{ route('products.index') }}" class="border py-4 rounded-lg hover:bg-gray-800 hover:text-white hover:border-gray-800">Produtos</a>
        <a href="{{ route('sales.index') }}" class="border py-4 rounded-lg hover:bg-gray-800 hover:text-white hover:border-gray-800">Vendas</a>
    </div>
</x-mainlayout>