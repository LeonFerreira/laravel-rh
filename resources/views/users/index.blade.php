@extends('layout')

@section('titulo', 'Usuários')

@section('conteudo')
    <a href="{{route('users.create')}}">Novo Usuário</a>
@endsection


{{-- @foreach ($collection as $item)
    
@endforeach --}}