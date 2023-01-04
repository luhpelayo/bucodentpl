@extends('layouts.master')
@section('content')
<div class="container">
    <div class="page-header">
        <h1 style="text-align:center; color: red; font-weight: bolder;">BIENVENIDO AL PORTAL DE BUCODENT
        </h1>
    </div>
    <div class="container">
        <div class="row style_featured">
            @can('std.index')
            <div class="col-md-4">
                <div>
                    <a href="{{ route ('std.index')}}">
                        <img src="{{URL::asset('icons/student.png')}}" alt="" class="img-rounded img-thumbnail" />
                        <h2 style="color: maroon;">Estudiantes</h2>
                        <p style="color: #00BFFF; text-align: left;" >
                            <span class="fa fa-info-circle" ></span>
                            Usted podra registrar toda la informacion necesaria de un estudiante, dicha informacion sera
                            utilizada en otros procesos.
                        </p>
                        <a href="{{ route ('std.index')}}" class="btn btn-success" title="Ir" >Ingresar</a>
                    </a>
                </div>
            </div>
            @endcan
            @can('grad.index')
            <div class="col-md-4">
                <div>
                    <a href="{{ route ('grad.index')}}">
                        <img src="{{URL::asset('icons/egresados.png')}}" alt="imagen"
                            class="img-rounded img-thumbnail" />
                        <h2 style="color: maroon;">Titulados</h2>
                        <p style="text-align: left;">
                            <span class="fa fa-info-circle"></span>
                            Aqui se respalda toda la informacion referente a estudiantes egresados como ser Acta,
                            Trabajo final, Modalidades & más.
                        </p>
                        <a href="{{ route ('grad.index')}}" class="btn btn-success" title="Ir">Ingresar</a>
                    </a>
                </div>
            </div>
            @endcan
            @can('prac.index')
            <div class="col-md-4">
                <div>
                    <a href="{{ route ('prac.index')}}">
                        <img src="{{URL::asset('icons/practice.png')}}" alt="" class="img-rounded img-thumbnail" />
                        <h2 style="color: maroon;">Prácticas Industriales</h2>
                        <p style="text-align: left;">
                            <span class="fa fa-info-circle"></span>
                            Es una actividad curricular del estudiante, consiste en una actividad supervisada con un rol
                            profesional en ambiente laboral.
                        </p>
                        <a href="{{ route ('prac.index')}}" class="btn btn-success" title="More">Ingresar</a>
                    </a>
                </div>
            </div>
            @endcan
            @can('lab.index')
            <div class="col-md-4">
                <div>
                    <a href="{{ route ('lab.index')}}">
                        <img src="{{URL::asset('icons/labs.png')}}" alt="imagen" class="img-rounded img-thumbnail" />
                        <h2 style="color: maroon;">Laboratorios</h2>
                        <p style="text-align: left;">
                            <span class="fa fa-info-circle"></span>
                            Es posible resguardar la informacion de los trabajos de investigacion de los estudiantes
                            tales como guias, trabajos.
                        </p>
                        <a href="{{ route ('lab.index')}}" class="btn btn-success" title="More">Ingresar</a>
                    </a>
                </div>
            </div>
            @endcan
            @can('visit.index')
            <div class="col-md-4">
                <div>
                    <a href="{{ route ('visit.index')}}">
                        <img src="{{URL::asset('icons/visita.png')}}" alt="" class="img-rounded img-thumbnail" />
                        <h2 style="color: maroon;">Visitas Técnicas</h2>
                        <p style="color: #00BFFF; text-align: left;">
                            <span class="fa fa-info-circle"></span>
                            Aqui se puede almacenar los documentos de respaldo (fotos e informes) de las visitas de los
                            estudiantes.
                        </p>
                        <a href="{{ route ('visit.index')}}" class="btn btn-success" title="More">Ingresar</a>
                    </a>
                </div>
            </div>
            @endcan
            @can('doc.index')
            <div class="col-md-4">
                <div>
                    <a href="{{ route ('doc.index')}}">
                        <img src="{{URL::asset('icons/doc.png')}}" alt="" class="img-rounded img-thumbnail" />
                        <h2 style="color: maroon;">Documentos</h2>
                        <p style="color: #00BFFF; text-align: left;">
                            <span class="fa fa-info-circle"></span>
                            En este modulo se registran documentos administrativos tales como modelos de cartas,
                            programas analíticos, estructuras, etc.
                        </p>
                        <a href="{{ route ('doc.index')}}" class="btn btn-success" title="More">Ingresar</a>
                    </a>
                </div>
            </div>
            @endcan
            @can('agre.index')
            <div class="col-md-4">
                <div>
                    <a href="{{ route ('agre.index')}}">
                        <img src="{{URL::asset('icons/convenio.png')}}" alt="" class="img-rounded img-thumbnail" />
                        <h2 style="color: maroon;">Convenios</h2>
                        <p style="text-align: left;">
                            <span class="fa fa-info-circle"></span>
                            Ing Industrial realiza convenios con diferentes empresas para el bien del estudiante dichos
                            convenios son nacionales e internacionales.
                        </p>
                        <a href="{{ route ('agre.index')}}" class="btn btn-success" title="More">Ingresar</a>
                    </a>
                </div>
            </div>
            @endcan
            @can('track.index')
            <div class="col-md-4">
                <div>
                    <a href="{{ route ('track.index')}}">
                        <img src="{{URL::asset('icons/trace.png')}}" alt="" class="img-rounded img-thumbnail" />
                        <h2 style="color: maroon;">Seguimiento Titulados</h2>
                        <p style="text-align: left;">
                            <span class="fa fa-info-circle"></span>
                            Aqui se realiza seguimientos de tipo Acádemico, Laboral y Cultural, se realizara a
                            estudiantes graduados.
                        </p>
                        <a href="{{ route('track.index') }}" class="btn btn-success" title="More">Ingresar</a>
                    </a>
                </div>
            </div>
            @endcan
            @can('tra.index')
            <div class="col-md-4">
                <div>
                    <a href="{{ route ('tra.index')}}">
                        <img src="{{URL::asset('icons/training.png')}}" alt="" class="img-rounded img-thumbnail" />
                        <h2 style="color: maroon;">Cursos de Capacitación</h2>
                        <p style="text-align: left;">
                            <span class="fa fa-info-circle"></span>
                            Se registran todos los cursos ofertados para dar apoyo extracurricular de las materias a los
                            estudiantes.
                        </p>
                        <a href="{{ route('tra.index') }}" class="btn btn-success" title="More">Ingresar</a>
                    </a>
                </div>
            </div>
            @endcan
            <div class="col-md-4">
                <div>
                    <a href="{{ route ('report.index')}}">
                        <img src="{{URL::asset('icons/report.png')}}" alt="" class="img-rounded img-thumbnail" />
                        <h2 style="color: maroon;">Reportes y Gráficos</h2>
                        <p style="color: #00BFFF; text-align: left;">
                            <span class="fa fa-info-circle"></span>
                            Se generan informes estadisticos y Dinamicos sobre cualquier modulo en base a la informacion
                            que usted desee.
                        </p>
                        <a href="{{ route('report.index') }}" class="btn btn-success" title="More">Ingresar</a>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
