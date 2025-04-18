@extends('layouts.main', ['activePage' => 'areas', 'titlePage' => 'Areas'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Areas</h4>
            <p class="card-category">Lista de Areas o Sectores</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">
             {{--   @can('post_create') --}}
                 <a href="{{ route('areas.create') }}" class="btn btn-sm btn-facebook">Añadir Area</a>
               {{-- @endcan --}}
              </div>
            </div>
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary">
                  <th> ID </th>
                  <th> Nombre </th>
                  <th> ID Centro </th>
                  <th> Fecha de creación </th>
                  <th class="text-right"> Acciones </th>
                </thead>
                 <tbody>
                   @foreach ($areas as $area)
                  <tr>
                    <td>{{ $area->id }}</td>
                    <td>{{ $area->nombre_area }}</td>
                    <td>{{ $area->id_centro }}</td>
                     <td class="text-primary">{{ $area->created_at->toFormattedDateString() }}</td>
                    <td class="td-actions text-right">
                     {{-- @can('post_show') --}}
                      <a href="{{ route('areas.show', $area->id) }}" class="btn btn-info"> <i
                          class="material-icons">person</i> </a>
                    {{-- @endcan
                    @can('post_edit') --}}
                      <a href="{{ route('areas.edit', $area->id) }}" class="btn btn-success"> <i
                          class="material-icons">edit</i> </a>
                   {{-- @endcan
                    @can('post_destroy') --}}
                       <form action="{{ route('areas.destroy', $area->id) }}" method="post"
                        onsubmit="return confirm('areYouSure')" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </form>
                     {{--  @endcan --}}
                     </td>
                  </tr>
                 {{--    @empty
                   <tr>
                    <td colspan="2">Sin registros.</td>
                  </tr>--}}
                  @endforeach
                 {{--  @endforelse --}}
                </tbody>
              </table>
              {{-- {{ $users->links() }} --}}
            </div>
          </div>
          <!--Footer-->
           {{-- <div class="card-footer mr-auto">
            {{ $posts->links() }}
          </div> --}}
          <!--End footer-->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
