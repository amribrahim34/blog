@extends('admin.partials.main')
@section('content')
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-title">
              Line Style
            </div>
            <div class="panel-body">
                <form>
                    <div class="form-group">
                        <label for="example3" class="form-label">Name</label>
                        <input type="text" class="form-control form-control-line" id="example3">
                    </div>
                    <div class="form-group">
                        <label for="example4" class="form-label">Surname</label>
                        <input type="text" class="form-control form-control-line" id="example4">
                    </div>
                    <div class="form-group">
                        <label for="example5" class="form-label">Password</label>
                        <input type="password" class="form-control form-control-line" id="example5">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Message</label>
                        <textarea class="form-control form-control-line" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection