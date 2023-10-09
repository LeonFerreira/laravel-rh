@extends('layout')

@section('conteudo')
    @include('global.errors')

    <form action="">
        <div>
            <label for="nome">ITEM</label>
            <input id="nome" type="text">
        </div>
        <div>
            <label for="teste">Teste</label>
            <input id="teste" type="text">
        </div>
        <button>Criar</button>
    </form>
@endsection