@extends('layouts.main', ['activePage' => 'centros', 'titlePage' => 'Nuevo Centro de Trabajo'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('centros.store') }}" class="form-horizontal">
          @csrf
          <div class="card ">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Centro de Trabajo</h4>
              <p class="card-category">Ingresar el Nuevo C. T.</p>

            </div>
            <!--End header-->
            <!--Body-->
            <div class="card-body">
                <div class="row">
                    <label for="id_centro" class="col-sm-2 col-form-label">ID Centro:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="id_centro" placeholder="Ingrese ID del C. T."   autofocus>
                       @if ($errors->has('id_centro'))
                        <span class="error text-danger" for="input-id_centro">{{ $errors->first('id_centro') }}</span>
                      @endif
                    </div>
                  </div>


              <div class="row">
                <label for="nombre_centro" class="col-sm-2 col-form-label">Nombre de C.T.:</label>
                <div class="col-sm-7">
                  <input type="text" style="text-transform: uppercase" class="form-control" name="nombre_centro" placeholder="Ingrese Nombre de C.T." value="{{ old('nombre_centro') }}">
                   @if ($errors->has('nombre_centro'))
                    <span class="error text-danger" for="input-nombre_centro">{{ $errors->first('nombre_centro') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <!--End body-->

            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
