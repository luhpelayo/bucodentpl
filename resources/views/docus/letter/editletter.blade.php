@extends('layouts.master')
@section('content')
<div class="container bootstrap snippets bootdey">
    <h1 class="text-primary">EDITAR MODELO DE CARTA</h1>
    <hr>
    <div class="row">
        <!-- left column -->
        <div class="col-md-3">
            <div class="text-center">
                <img src="{{ asset('/images/industrial.png') }}"  alt="LOGO">
            </div>
        </div>
        <!-- edit form column -->
        <div class="col-md-9 personal-info">
            <h3 style="text-align: center">Editar Información de la Carta</h3>
            <form enctype="multipart/form-data" class="form-horizontal" action="{{ route('letter.update', $letter->id) }}"
                method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label class="col-lg-3 control-label">Código:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="letter_code" id="letter_code" type="text" value="{{ $letter->letter_code }}">
                        @error('letter_code')
                        <small class="text-danger">¡Campo Vacio o Codigo Repetido!</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Nombre de Carta:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="letter_name" id="letter_name" type="text" value="{{ $letter->letter_name }}">
                            @error('letter_name')
                        <small class="text-danger">¡Introduzca el Título!</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Fecha:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="letter_date" id="letter_date" type="date" value="{{ $letter->letter_date }}">
                            @error('letter_date')
                        <small class="text-danger">¡Introduzca la fecha!</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Área:</label>
                    <div class="col-lg-8">
                        <select class="js-example-basic-single" id="area_id" name="area_id" style="width: 100%;">
                            <option value="{{ $letter->area->id }}">{{ $letter->area->area_name }}</option>
                            @foreach($areas as $area)
                            <option value="{{ $area->id }}" >{{ $area->area_name }}</option>
                            @endforeach
                          </select>
                          @error('area_id')
                        <small class="text-danger">¡Seleccione un Área!</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Documento PDF:</label>
                    <div class="col-lg-8">
                        <input type="file" name="letter_document" id="letter_document" accept="application/pdf">
                    @error('letter_document')
                        <small class="text-danger">Formato Incorrecto!, Intente de Nuevo</small>
                    @enderror
                    </div>
                </div>
                <div class="form-group" style="text-align: center">
                    <span style="color: red">
                        Nota: Si desea cargar un nuevo PDF simplemente suba su nuevo documento el anterior se sobre escribe.
                    </span>
                </div>
                <hr>
                <input type="submit" value="Editar Carta" class="btn btn-success">
                <a href="{{ route('lett.index') }}">
                    <input value="Cancelar" class="btn btn-danger">
                </a>
            </form>
        </div>
    </div>
</div>
@endsection