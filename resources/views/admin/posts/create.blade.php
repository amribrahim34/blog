@extends('admin.partials.main')
@section('content')
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
    <div class="" style="min-height: 38.5em;">
        <div class="card">
            <div class="card-header">
              <h1 class="text-uppercase">
                  <b>create post</b>
              </h1>
            </div>
            <form action="{{route('admin.posts.store')}}" method="post">
                @csrf
                <div class="card-body py-5">
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mb-3 row">
                        <label class="col-sm-2 control-label form-label">title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" value="{{old('title')}}" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 control-label form-label">keywords</label>
                        <div class="col-sm-10">
                            {{-- <input type="text" name="title"  class="form-control" id="inputPassword"> --}}
                            <select name="keywords[]" id="select2" multiple class="form-control">
                                <option value="" disabled selected> select keyword</option>
                                @if (isset($keywords) & $keywords->count()>0)
                                    @foreach ($keywords as $keyword)
                                        <option value="{{$keyword->id}}">{{$keyword->body}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 control-label form-label">category</label>
                        <div class="col-sm-10">
                            {{-- <input type="text" name="title"  class="form-control" id="inputPassword"> --}}
                            <select name="category_id" id="select2"  class="form-control">
                                <option value="" disabled selected>select category</option>
                                @if (isset($categories) & $categories->count()>0)
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->body}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div> 
                    <div class="mb-3 row">
                        <label class="col-sm-2 control-label form-label">body</label>
                        <div class="col-sm-10">
                            <textarea id="summernote" name="body">{{old('body')}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>  
@endsection
@section('js')
<!-- Datatable -->
    <script src="{{ url('assets/vendors/dataTable/datatables.min.js') }}"></script>
    <script src="{{ url('assets/vendors/dataTable/Buttons-1.6.1/js/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/admin/js/summernote/summernote.min.js')}}"></script>
    <script src="{{ url('assets/vendors/select2/js/select2.full.min.js') }}"></script>


    {{-- <script src="{{ url('assets/js/examples/pages/user-list.js') }}"></script> --}}
    <script>
        $('#myTable').DataTable();
        $('#summernote').summernote();
        $('#select2').select2();
    </script>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ url('assets/vendors/select2/css/select2.min.css') }}">
@endsection