@extends('layouts.main', ['activePage' => 'areas', 'titlePage' => 'Editar Area de C.T.'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('areas.update', $area->id) }}" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="card">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Editar Area de C.T. </h4>
              <p class="card-category">Editar elementos del Area.</p>
            </div>
            <!--End header-->
            <!--Body-->
            <div class="card-body">
              <div class="row">
                <label for="nombre_area" class="col-sm-2 col-form-label">Id de C.T. </label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="nombre_area" placeholder="Ingrese el Nombre C.T."
                    value="{{ old('nombre_area', $area->nombre_area) }}" autocomplete="off" autofocus>
                    @if ($errors->has('nombre_area'))
                        <span class="error text-danger" for="input-nombre_area">{{ $errors->first('nombre_area') }}</span>
                    @endif
                </div>
              </div>

               <div class="row">
                <label for="id_centro" class="col-sm-2 col-form-label">ID de C.T. </label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="id_centro" placeholder="ID de C.T."
                    value="{{ old('id_centro', $area->id_centro) }}" autocomplete="off" >
                    @if ($errors->has('id_centro'))
                    <span class="error text-danger" for="input-id_centro">{{ $errors->first('id_centro') }}</span>
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
