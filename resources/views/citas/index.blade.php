<!-- resources/views/citas/index.blade.php -->

@include('layouts/navbar')

<div class="container mt-4">
    <div class="row">
        @if($citas && count($citas) > 0)
            @foreach($citas as $cita)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="assets/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cita</h5>
                            <p class="card-text">Carrera: {{ $cita->carrera }}</p>
                            <p class="card-text">Número de control: {{ $cita->numero_control }}</p>
                            <p class="card-text">Fecha: {{ $cita->fecha }}</p>
                            <p class="card-text">Asunto: {{ $cita->asunto }}</p>
                            <p class="card-text">Nombre: {{ $cita->user->name }}</p>
                            <p class="card-text">Correo: {{ $cita->user->email }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-12">
                <p>No hay citas disponibles.</p>
            </div>
        @endif
    </div>
</div>
