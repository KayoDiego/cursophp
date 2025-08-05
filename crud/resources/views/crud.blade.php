<!-- resources/views/produtos/index.blade.php -->
<x-layout>
    <x-slot:cabecalho>
    Lista de Produtos
</x-slot:cabecalho>



@if (session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<a href="{{ route('produtos.create') }}">Criar Novo Produto</a>

<ul>
    @foreach ($produtos as $produto)
        <li>
            {{ $produto->nome }} - R$ {{ number_format($produto->preco, 2, ',', '.') }}
            <a href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </li>
    @endforeach
</ul>

</x-layout>
