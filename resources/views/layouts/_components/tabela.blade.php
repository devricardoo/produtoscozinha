<table>
    <thead>
        <tr>
            <th>Data</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th class="table-descri">Descrição</th>
            <th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @foreach ($produtos as $produto)
            <tr class="item">
                <td>{{ $produto->data ? date('d/m/Y', strtotime($produto->data)) : '' }}</td>
                <td>{{ $produto->produto }}</td>
                <td>{{ $produto->quantidade }}</td>
                <td>{{ $produto->descricao }}</td>
                <td>
                    <a href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
                </td>
                <td>
                    <a href="#">Excluir</a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>

@if ($produtos->hasPages())
    <nav id="paginacao">
        <ul>
            @if ($produtos->onFirstPage())
                <li class="disabled"><span>Anterior</span></li>
            @else
                <li class="{{ $produtos->currentPage() == 1 ? 'active' : '' }}">
                    <a href="{{ $produtos->previousPageUrl() }}" rel="prev">Anterior</a>
                </li>
            @endif

            @if ($produtos->hasMorePages())
                <li class="{{ $produtos->currentPage() == $produtos->lastPage() ? 'active' : '' }}">
                    <a href="{{ $produtos->nextPageUrl() }}" rel="next">Próximo</a>
                </li>
            @else
                <li class="disabled"><span>Próximo</span></li>
            @endif

            @if ($produtos->onFirstPage() && request()->has('page'))
                <script>
                    history.replaceState(null, '', location.pathname);
                </script>
            @endif
        </ul>


    </nav>

    <nav id="paginacao2">
        <ul class="pages2">
            <li><a>Exibindo {{ $produtos->count() }} produtos de {{ $produtos->total() }} (de
                    {{ $produtos->firstItem() }} a {{ $produtos->lastPage() }})</a></li>
        </ul>
    </nav>
@endif
