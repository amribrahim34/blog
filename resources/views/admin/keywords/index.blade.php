@extends('admin.partials.main')
@section('content')
    <div class="" style="min-height: 39em">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-title">
                    <div class="d-flex justify-content-between  ">
                        <h1>
                            <b>keywords </b>
                        </h1>
                        <div class=" d-flex align-items-center">
                            <a href="{{route('admin.keywords.create')}}" class="btn btn-primary  ">create keyword</a>
                        </div>
                    </div>                
                </div>
                <div class="panel-body ">
                {{-- <p>here you can control keywords.</p> --}}
                <table id="myTable" class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>body</th>
                            <th>manage</th>
                            {{-- <th class="text-right"> {{__('app.tables.control')}}</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @if($keywords->count() > 0)
                            @foreach($keywords as $keyword )
                            <tr>
                                <td>{{ $keyword->id }}</td>
                                <td>{{ $keyword->body }}</td>                                
                                
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti-more-alt"></i>
                                        </a>
                                      
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a href="{{route('admin.keywords.edit',$keyword->id)}}" class="dropdown-item">edit</a>
                                            </li>
                                            <li>
                                                <form method="POST" action="{{route('admin.keywords.destroy',$keyword->id)}}"  >
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE" >
                                                    <button class="dropdown-item text-danger" >
                                                        delete
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                      </div>    
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
              </div>
      
            </div>
          </div>
    </div>

@endsection
@section('js')
<!-- Datatable -->
    <script src="{{ url('assets/vendors/dataTable/datatables.min.js') }}"></script>
    <script src="{{ url('assets/vendors/dataTable/Buttons-1.6.1/js/dataTables.buttons.min.js') }}"></script>

    {{-- <script src="{{ url('assets/js/examples/pages/user-list.js') }}"></script> --}}
    <script>
        $('#myTable').DataTable();
    </script>
@endsection