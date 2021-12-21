@extends('admin.partials.main')
@section('content')
    <div class="" style="min-height: 39em">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-title">
                    <div class="d-flex justify-content-between  ">
                        <h1>
                            <b>comments </b>
                        </h1>
                        {{-- <div class=" d-flex align-items-center">
                            <a href="{{route('admin.comments.create')}}" class="btn btn-primary  ">create comment</a>
                        </div> --}}
                    </div>                
                </div>
                <div class="panel-body ">
                {{-- <p>here you can control comments.</p> --}}
                <table id="myTable" class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>user</th>
                            <th>status</th>
                            <th>body</th>
                            <th>manage</th>
                            {{-- <th class="text-right"> {{__('app.tables.control')}}</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @if($comments->count() > 0)
                            @foreach($comments as $comment )
                            <tr>
                                <td>{{ $comment->id }}</td>
                                <td>{{ $comment->user->name }}</td>                                
                                <td>
                                    @if ($comment->active == true )
                                        <label for="" class="badge bg-success text-white">active</label>
                                    @else
                                        <span for="" class="badge bg-danger text-white">inactive</span>
                                            
                                    @endif
                                </td>                                
                                <td>{{ $comment->body }}</td>                                
                                
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti-more-alt"></i>
                                        </a>
                                      
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                @if ($comment->active == false )
                                                    <form method="POST" action="{{route('admin.comments.activate',$comment->id)}}"  >
                                                        @csrf
                                                        <button class="dropdown-item text-success" >
                                                            activate
                                                        </button>
                                                    </form>
                                                @else
                                                    <form method="POST" action="{{route('admin.comments.deactivate',$comment->id)}}"  >
                                                        @csrf
                                                        <button class="dropdown-item text-secondary" >
                                                            deactivate
                                                        </button>
                                                    </form>                                                        
                                                @endif
                                            </li>
                                            <li>
                                                <form method="POST" action="{{route('admin.comments.destroy',$comment->id)}}"  >
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