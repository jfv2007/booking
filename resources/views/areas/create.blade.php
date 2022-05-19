@extends('layouts.main', ['activePage' => 'areas', 'titlePage' => 'Nuevo Area o Sector'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('areas.store') }}" class="form-horizontal">
          @csrf
          <div class="card ">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Area de C.T.</h4>
              <p class="card-category">Ingresar la Nuevo Area </p>

            </div>
            <!--End header-->
            <!--Body-->
            <div class="card-body">
                <div class="row">
                    <label for="id_centro" class="col-sm-2 col-form-label">Nombre del Area:</label>
                    <div class="col-sm-7">
                      <input type="text"  class="form-control" name="nombre_area" placeholder="Ingrese Nombre de Area"   autofocus>
                       @if ($errors->has('nombre_area'))
                        <span style="text-transform:uppercase;"  class="error text-danger" for="input-nombre_area">{{ $errors->first('nombre_area') }}</span>
                      @endif
                    </div>
                  </div>


              <div class="row">
                <label for="nombre_centro" class="col-sm-2 col-form-label">ID de C.T.:</label>
                <div class="col-sm-7">
                  <input type="text"  class="form-control" name="id_centro" placeholder="ID del  C.T." value="{{ old('id_centro') }}">
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
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
