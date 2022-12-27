@extends('layouts.master')
@section('content')
<div class="container bootstrap snippets bootdey">
    <h1 class="text-primary">EDITAR CONVENIO INTERNACIONAL</h1>
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
            <form enctype="multipart/form-data" class="form-horizontal" action="{{ route('inter.update', $international->id) }}"
                method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label class="col-lg-3 control-label">Fecha:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="international_date" id="international_date" type="date" value="{{ $international->international_date }}">
                            @error('international_date')
                        <small class="text-danger">¡Introduzca la fecha!</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Nombre de Organización:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="international_organization" id="international_organization" type="text" value="{{ $international->international_organization }}">
                            @error('international_organization')
                        <small class="text-danger">¡Introduzca el Nombre!</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Firma UAGRM:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="international_uagrm" id="international_uagrm" type="text" value="{{ $international->international_uagrm }}">
                            @error('international_uagrm')
                        <small class="text-danger">¡Introduzca la firma UAGRM!</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Firma Empresa:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="international_company" id="international_company" type="text" value="{{ $international->international_company }}">
                            @error('international_company')
                        <small class="text-danger">¡Introduzca la firma de Empresa!</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Documento PDF:</label>
                    <div class="col-lg-8">
                        <input type="file" name="international_document" id="international_document" accept="application/pdf">
                    @error('international_document')
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
                <a href="{{ route('inter.index') }}">
                    <input value="Cancelar" class="btn btn-danger">
                </a>
            </form>
        </div>
    </div>
</div>
@endsection