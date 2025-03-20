@extends('layouts.basico')

@section('content')
    <div class="header">
        <div class="body">
            <div class="form">
                <div class="title">
                    <h2>Produtos utilizados</h2>
                </div>
                <div class="input-b">
                    @component('layouts._components.form')
                    @endcomponent
                </div>
            </div>
        </div>

        <div class="table">
            <div class="table-header">
                <div class="titulo-cad">
                    <h2>Produtos cadastrados</h2>
                </div>
                <div class="table-cad">
                    @component('layouts._components.tabela', ['produtos' => $produtos])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
@endsection
