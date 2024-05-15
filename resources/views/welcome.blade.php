<!-- Uso de directivas. -->
<!-- Invoca el archivo patrón del diseño (layout) -->

 <!--Extends siempre apunta a rutas. -->
@extends('layouts.app')

<!-- Crear el contenido del titulo para que sea insertado en la estructura app -->

<!-- El nombre debe ser el mismo que en la directiva de app.blade.php -->
@section('titulo') 
    Página principal
@endsection

@section('contenido')
    Bienvenidos todos, esta es la sección de contenido.
@endsection