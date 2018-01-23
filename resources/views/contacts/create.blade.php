@extends ('layout')

@section('content')
  <div class="container-fluid">
    <div class="row page-title-row">
      <div class="col-md-12">
        <h3>Entry <small>&raquo; Add New Entry</small></h3>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">New Post Form</h3>
          </div>
          <div class="panel-body">

            <form class="form-horizontal" role"form" method="POST" action=" route('admin.post.store') ">
                          
              <div class="col-md-8">
                <div class="form-group">
                  <div class="col-md-10 col-md-offset-2">
                    <button type="submit" class="btn btn-primary btn-lg">
                      <i class="fa fa-disk-o"></i>
                      Save New Post
                    </button>
                  </div>
                </div>
              </div>

              

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

@stop