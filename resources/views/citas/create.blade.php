<!-- resources/views/citas/create.blade.php -->
@include('layouts/navbar')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <!-- Imagen a la izquierda -->
            <img src="{{ asset('assets/1.jpg') }}" alt="Imagen" class="img-fluid mb-4">
        </div>
        <div class="col-md-6">
            <!-- Formulario a la derecha -->
            <h1 class="text-center">Crear cita</h1>
            <form action="{{ route('citas.store') }}" method="post" class="container d-flex align-items-center flex-column">
                @csrf

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <label class="form-label" for="carrera">Carrera:</label>
                <input class="form-control" type="text" id="carrera" name="carrera" required>
                <br>

                <label class="form-label" for="numero_control">Número de control:</label>
                <input class="form-control" type="text" id="numero_control" name="numero_control" required>
                <br>

                <label class="form-label" for="fecha">Fecha:</label>
                <input class="form-control" type="date" id="fecha" name="fecha" required>
                <br>

                <label class="form-label" for="asunto">Asunto:</label>
                <input class="form-control" type="text" id="asunto" name="asunto" required>
                <br>

                <button type="submit" class="btn btn-primary m-3">Enviar</button>
            </form>
        </div>
    </div>
</div>
