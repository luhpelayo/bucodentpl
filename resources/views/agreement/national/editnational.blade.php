@extends('layouts.master')
@section('content')
<div class="container bootstrap snippets bootdey">
    <h1 class="text-primary">EDITAR CONVENIO NACIONAL</h1>
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
            <h3 style="text-align: center">Editar Información del Convenio</h3>
            <form enctype="multipart/form-data" class="form-horizontal" action="{{ route('national.update', $national->id) }}"
                method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label class="col-lg-3 control-label">Fecha:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="national_date" id="national_date" type="date" value="{{ $national->national_date }}">
                            @error('national_date')
                        <small class="text-danger">¡Introduzca la fecha!</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Nombre de Organización:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="national_organization" id="national_organization" type="text" value="{{ $national->national_organization }}">
                            @error('national_organization')
                        <small class="text-danger">¡Introduzca el Nombre!</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Firma UAGRM:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="national_uagrm" id="national_uagrm" type="text" value="{{ $national->national_uagrm }}">
                            @error('national_uagrm')
                        <small class="text-danger">¡Introduzca la firma UAGRM!</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Firma Empresa:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="national_company" id="national_company" type="text" value="{{ $national->national_company }}">
                            @error('national_company')
                        <small class="text-danger">¡Introduzca la firma de Empresa!</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Documento PDF:</label>
                    <div class="col-lg-8">
                        <input type="file" name="national_document" id="national_document" accept="application/pdf">
                    @error('national_document')
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
                <input type="submit" value="Editar Convenio" class="btn btn-success">
                <a href="{{ route('nat.index') }}">
                    <input value="Cancelar" class="btn btn-danger">
                </a>
            </form>
        </div>
    </div>
</div>
@endsection