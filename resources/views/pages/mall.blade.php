@extends('pages.template')


@section('main')
<div class="row"> 
    
    <!-- Delivery Page-->
    <div class="span12"> 
      
      <!-- Breadcrumb -->
      <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">/</span></li>
        <li><a href="#">Pages</a> <span class="divider">/</span></li>
        <li class="active">Mall</li>
      </ul>
      <h1 class="margin-bottom">Add <span>Mall</span></h1>
    </div>

  </div>
 <div class="row"> 
     <div class="span5"></div>
      <div class="span3">
<!--      <h4 class="margin-bottom"></h4>-->
     
      {!!Form::open (array('url'=>'mall/store','method'=>'post','files'=>'true') ) !!}
        <div class="control-group">
          <label class="control-label">Details</label>
          <div class="controls">
      {!! Form::text('mallname',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Mall name')) !!}
      {!! Form::text('location',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Location')) !!}
          </div>
        </div>
        <div class="control-group">
            <label class="control-label">Status</label>
            <div class="controls">
                <div class="col-xs-8">
                    <select class="form-control" name="category">
                        <option value="1">active</option>
                        <option value="2">inactive</option>
                    </select>
                    <label></label>

                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Banner Image</label>
            <div class="controls">
             {!! Form::file('image',null,array('class'=>'form-control','required')) !!}

            </div>
        </div>
        <div class="control-group no-margin">
          <div class="controls">
            <button type="submit" class="btn ">Submit</button>
          </div>
        </div>
      {!!Form::close()!!}
    </div>
</div>


@stop