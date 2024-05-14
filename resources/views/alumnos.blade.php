<!-- Uso de directivas. -->
<!-- Invoca el archivo patrón del diseño (layout) -->
@extends('layouts.app') <!--Extends siempre apunta a rutas. -->

<!-- Crear el contenido del titulo para que sea insertado en la estructura app -->

<!-- El nombre debe ser el mismo que en la directiva de app.blade.php -->
@section('titulo') 
    Alumnos
@endsection

@section('contenido')
    Contenido de la página de alumnos.
@endsection