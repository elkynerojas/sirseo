@extends('layouts.template')
@section('content')
<section class="tiles">
        <article class="style1">
            <span class="image">
                <img src="{{ asset('images/pic01.jpg') }}" alt="" />
            </span>
            <a href="generic.html">
                <h2>Registro de Vistantes</h2>
                <div class="content">
                    <p>Registro y consulta de datos de personas visitantes</p>
                </div>
            </a>
        </article>
        <article class="style2">
            <span class="image">
                <img src="{{ asset('images/pic02.jpg') }}" alt="" />
            </span>
            <a href="generic.html">
                <h2>Registro de Funcionarios</h2>
                <div class="content">
                    <p>Registro y consulta de ingreso y salida de funcionarios de la entidad</p>
                </div>
            </a>
        </article>
        <article class="style3">
            <span class="image">
                <img src="{{ asset('images/pic03.jpg') }}" alt="" />
            </span>
            <a href="generic.html">
                <h2>Registro de Elementos</h2>
                <div class="content">
                    <p>Registro y consulta de entrada y salida de elementos propios y ajenos a la entidad</p>
                </div>
            </a>
        </article>
        <article class="style4">
            <span class="image">
                <img src="{{ asset('images/pic04.jpg') }}" alt="" />
            </span>
            <a href="generic.html">
                <h2>Bitácora</h2>
                <div class="content">
                    <p>Registro y consulta de información relevante relacionada con la seguridad 
                    en la entidad organizada en ordén cronológico </p>
                </div>
            </a>
        </article>
        <article class="style5">
            <span class="image">
                <img src="{{ asset('images/pic05.jpg') }}" alt="" />
            </span>
            <a href="generic.html">
                <h2>Registro de Expedientes</h2>
                <div class="content">
                    <p>Registro y consulta de entrada y salida de documentos y expedientes de la entidad</p>
                </div>
            </a>
        </article>
        <article class="style6">
            <span class="image">
                <img src="{{ asset('images/pic06.jpg') }}" alt="" />
            </span>
            <a href="generic.html">
                <h2>Informes de Novedades</h2>
                <div class="content">
                    <p>Registro y consulta de Informes oficiales realizados por el personal de seguridad</p>
                </div>
            </a>
        </article>
    </section>
@endsection

