<x-app-layout>  
  <div class="row">
    
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Country</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-wrench"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" role="menu">
                    <a href="#" class="dropdown-item">Action</a>
                    <a class="dropdown-divider"></a>
                    <a href="#" class="dropdown-item">Separated link</a>
                  </div>
                </div>
                <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button> -->
              </div>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          {!! Form::open(['route'=>['admin.country.update',$country->id ], 'method' => 'put']) !!}
            <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <div class="form-group">
                    <label>Region</label>
                    {{ Form::select('region', $region, $country->region->id, ['class'=>'form-control','placeholder' => 'Pick a region...']) }}
                </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                {{ Form::text('name', $country->name, ['class'=>'form-control','placeholder'=>'Enter Name'] ) }}
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Code</label>
                {{ Form::text('code', $country->code, ['class'=>'form-control','placeholder'=>'Enter CODE'] ) }}
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Locale Code</label>
                {{ Form::text('locale_code', $country->locale_code, ['class'=>'form-control','placeholder'=>'Enter Locale CODE'] ) }}
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Slug</label>
                {{ Form::text('slug', $country->slug, ['class'=>'form-control','placeholder'=>'Enter Slug'] ) }}
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                
                {{ Form::submit('Submit',['class'=>"btn btn-primary"]); }}
                <a href="{{ route('admin.country.index') }}" class="btn btn-warning">Cancel</a>
              
            </div>
            {!! Form::close() !!}
        </div>
        <!-- /.card -->
        
      </div>
    </div>
  <!-- /.row -->
  @push('scripts')
    <script type="text/javascript">
        $( function() {  });
      </script>
  @endpush
</x-app-layout>