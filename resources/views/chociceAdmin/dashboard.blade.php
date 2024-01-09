
@extends('masteradminlte.layout')

@section('judul','Dashboard')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <!--li class="breadcrumb-item active"></li -->
@endsection

@section('content')
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Dashboard</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          Selamat datang di choice barber
        </div>
        <!-- /.card-body -->
        <!--div class="card-footer">
          Footer
        </div -->
        <!-- /.card-footer-->
      </div>

@endsection