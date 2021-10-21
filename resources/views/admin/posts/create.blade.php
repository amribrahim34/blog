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
            <form action="" method="post">
                <div class="card-body py-5">
                    <div class="mb-3 row">
                        <label class="col-sm-2 control-label form-label">title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title"  class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 control-label form-label">keywords</label>
                        <div class="col-sm-10">
                            <input type="text" name="title"  class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 control-label form-label">body</label>
                        <div class="col-sm-10">
                            <textarea id="summernote" name="body"></textarea>
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


    {{-- <script src="{{ url('assets/js/examples/pages/user-list.js') }}"></script> --}}
    <script>
        $('#myTable').DataTable();
        $('#summernote').summernote();
    </script>
@endsection