@extends('layouts.app')

@section('content')
<div id="create-container" class="container-sm">
    <form class="form" action="/galaxy/create/ {{ Auth::user()->id }}" method="POST">
        @csrf
        <h1>Sistema Solar</h1>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" id="name" name="name" value="{{old('name')}}">
                @if($errors->has('name'))
                <div id="invalid-feedback" class="invalid-feedback">
                    @foreach($errors->get('name') as $error)
                    {{$error}}
                    @endforeach
                </div>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="dimension">Dimensão</label>
                <input type="text" class="form-control @if($errors->has('dimension')) is-invalid @endif" id="dimension" name="dimension">
                @if($errors->has('dimension'))
                <div id="invalid-feedback" class="invalid-feedback">
                    @foreach($errors->get('dimension') as $error)
                    {{$error}}
                    @endforeach
                </div>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="number_of_solar_systems">Número de Sistemas Solares</label>
                <input type="text" class="form-control @if($errors->has('number_of_solar_systems')) is-invalid @endif" id="number_of_solar_systems" name="number_of_solar_systems">
                @if($errors->has('number_of_solar_systems'))
                <div id="invalid-feedback" class="invalid-feedback">
                    @foreach($errors->get('number_of_solar_systems') as $error)
                    {{$error}}
                    @endforeach
                </div>
                @endif
            </div>
        </div>
        <button type="submit" class="btn btn-secondary">Salvar</button>
    </form>
    <div class="form-row">
        <div class="form-group col-md-6">
            @if($flag == 1)
            <a href="{{ route('solarsystem.index') }}">+ Iserir novo Sistema Solar</a>
            @endif
        </div>
    </div>
</div>


@endsection