@extends('layouts.main', ['activePage' => 'centros', 'titlePage' => 'Editar C.T.'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('centros.update', $centro->id) }}" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="card">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Editar Centro de Trabajo</h4>
              <p class="card-category">Editar elementos del C.T.</p>
            </div>
            <!--End header-->
            <!--Body-->
            <div class="card-body">
              <div class="row">
                <label for="id_centro" class="col-sm-2 col-form-label">Id de C.T. </label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="id_centro" placeholder="Ingrese el C.T."
                    value="{{ old('id_centro', $centro->id_centro) }}" autocomplete="off" autofocus>
                    @if ($errors->has('id_centro'))
                                <span class="error text-danger" for="input-id_centro">{{ $errors->first('id_centro') }}</span>
                    @endif
                </div>
              </div>

               <div class="row">
                <label for="nombre_centro" class="col-sm-2 col-form-label">Nombre de C.T. </label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="nombre_centro" placeholder="Ingrese el Nombre de C.T."
                    value="{{ old('nombre_centro', $centro->nombre_centro) }}" autocomplete="off" >
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
          </div>
          <!--End footer-->
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
