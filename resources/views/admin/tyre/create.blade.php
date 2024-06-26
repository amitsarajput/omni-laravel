<x-app-layout>  
  <div class="row">
    
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Search Tag</h3>
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
          {!! Form::open(['route'=>'admin.tyre.store']) !!}
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
                <div class="row">

                  <div class="form-group col-4">
                      <label>Country</label>

                      {{ Form::select('country', $country, '', ['class'=>'form-control','placeholder' => 'Select Country...']) }}
                  </div>
                  <div class="form-group  col-4">
                      <label>Brand</label>
                      {{ Form::select('brand', $brand, '', ['class'=>'form-control','placeholder' => 'Select Brand...']) }}
                  </div>
                  <div class="form-group col-4">
                      <label>Search tag</label>
                      {{ Form::select('searchtag', $searchtag, '', ['class'=>'form-control','placeholder' => 'Select Search Tag...']) }}
                  </div>

                </div>
              <div class="row">
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Category</label>
                    <div class="select2-purple sortable-option" data-options="{{$tyrecategory}}" data-selected-options="">
                      {{ Form::select('tyrecategory[]', $tyrecategory, '' ,['multiple' => true, 'class'=>'select2 form-control', 'data-dropdown-css-class'=>'select2-purple'] ) }}
                    </div>
                  </div>
                <div class="form-group col-6">
                    <label>Icon</label>
                    <div class="select2-purple sortable-option" data-options="{{$icon}}" data-selected-options="">
                      {{ Form::select('icon[]', $icon, '', ['multiple' => true, 'class'=>'select2 form-control', 'data-dropdown-css-class'=>'select2-purple']) }}
                    </div>
                  </div>
              </div>
                
                <div class="row">
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Name</label>
                    {{ Form::text('name', '', ['class'=>'form-control','placeholder'=>'Name'] ) }}
                    <label for="exampleInputEmail1">Preview Name</label>
                    {{ Form::text('previewname', '', ['class'=>'form-control','placeholder'=>'Preview Name'] ) }}
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Slug</label>
                    {{ Form::text('slug', '', ['class'=>'form-control','placeholder'=>'Enter Slug'] ) }}
                    <label for="exampleInputPassword1">Exernal Link (if any)</label>
                    {{ Form::text('externallink ', '', ['class'=>'form-control','placeholder'=>'External Link '] ) }}
                  </div>
                </div>
                
              <div class="row">
                <div class="form-group col-12">
                  <label for="exampleInputPassword1">Description</label>
                  {{ Form::textarea('description', '', ['class'=>'form-control','placeholder'=>'Enter Description'] ) }}
                </div>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                
                {{ Form::submit('Submit',['class'=>"btn btn-primary"]); }}
                <a href="{{ route('admin.tyre.index') }}" class="btn btn-warning">Cancel</a>
              
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