@extends('layouts.app')

@section('content')
<!--BEGIN CONTAINER-->
<div class="container">
<!-- ERRORS -->
@if($errors->first())
<div class="row">
  <div class="col-sm-12">
    <div class="alert alert-success alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error! </strong>{{$errors->first('title_project')}} {{$errors->first('budget_project')}} {{$errors->first('content_project')}} {{$errors->first('img_project')}}</a>
    </div>
  </div>
</div>
@endif
<!-- END ERRORS -->
<!--FLASH MESSAGE-->
@if(session('data'))
<div class="row">
  <div class="col-sm-12">
    <div class="alert alert-success alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{session('data')}}
    </div>
  </div> 
</div>
@endif
<!--END FLASH MESSAGE-->

<div class="row">
  <div class="col-sm-12">
    {!! Form::open ( array ('route' => 'new-project', 'files' => true, 'method' => 'post')) !!}
    <div class ="panel panel-default">
      <div class="panel-heading"><h3>New Project</h3>
      </div>
      <div class="panel-body">
      
      <!--BEGIN ROW-->
        <div class="row">
          <div class="col-lg-12 col-xs-12">
          <h4>Description</h4>
          </div>
        </div>
        <!--END ROW-->
        
        <!--BEGIN ROW-->
        <div class="row">
          <div class="col-lg-3 col-xs-12">
              <div class="form-group">
                <label for="img-project">Cover image</label>
                <input type="file" id="img-project" name="img_project" class="form-control" accept="image/*" aria-describedby="fileHelp"></input>
                
                <small id="fileHelp" class="form-text text-muted">Upload JPGs or PNGs files</small>
                <div style="height:10px;"></div>
                <input type="hidden" name="MAX_UPLOAD_SIZE" value="5000000">
                <img id="uploadedimage" class="img-responsive"/>
                <span id="imageerror" style="font-weight: bold; color: red"></span>
              </div>
              
          </div>
        
        
          <div class="col-lg-9 col-xs-12">
            <div class="form-group">
              <label for="title-project">Project title</label>
              <input type="text" id="title-project" name="title_project" class="form-control"></input>
            </div>
            <div class="form-group">
              <label for="content-project">Presentation</label>
              <textarea rows="10" maxlength="1000" id="content-project" name="content_project" class="form-control"></textarea>
            </div>
          </div>
        </div>
        <!--END ROW-->
        
        

      
      
      <!--BEGIN ROW-->
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <h4>Location</h4>
        </div>
      </div>
      <!--END ROW-->
      
      <!--BEGIN ROW-->
      <div class="row">
      
        <!--LOCATION-->
        <div class=" col-lg-3 col-xs-12">
        <div class="form-group" id="world">
          <div class="row">
          <div class="col-lg-10">
          <label for="world-select">Select area</label>
          <select id="world-select" class="form-control">
            <option name="world" value="{{$world->id_project}}">{{$world->title_project}}</option>
          </select>
          </div>
          <div class="col-lg-2">
          <div style="height:30px;"></div>
          <a id="button-continent" class="btn btn-default btn-xs">>></a>
          </div>
          </div>
        </div>
        </div>
        
        
        <div id="continent-group">
        <div class=" col-lg-3 col-xs-12">
            <div class="row">
              <div class="form-group" id="continent">
              <div class="col-lg-10">
                <label for="continent-select">Continent</label>
                <select id="continent-select" class="form-control">
                  @foreach($continents as $continent)
                  <option value="{{$continent->id_project}}">{{$continent->title_project}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-lg-2">
              <div style="height:30px;"></div>
                <a id="button-state" class="btn btn-default btn-xs">>></a>
              </div>
              </div>
            </div>
          </div>
          
          <div id="state-group">
          <div class=" col-lg-3 col-xs-12">
            <div class="row">
              
              <div class="form-group" id="state">
              <div class="col-lg-10">
                <label for="state-select">State</label>
                <select id="state-select" class="form-control">
                @foreach($states as $state)
                  <option value="{{$state->id_project}}">{{$state->title_project}}</option>
                @endforeach
                </select>
              </div>
              <div class="col-lg-2">
                <div style="height:30px;"></div>
                <a id="button-city" class="btn btn-default btn-xs">>></a>
              </div>
              </div>
            </div>
          </div>
          
          <div id="city-group">
          <div class=" col-lg-3 col-xs-12">
          <div class="form-group" id="city">
            <label for="city-select">City</label>
            <select id="city-select" class="form-control">
            @if(!$cities->isEmpty())
              <option value="new-city">Choose a city or insert new</option>
              <option disabled>---------------</option>
              @foreach($cities as $city)
                <option value="{{$city->id_project}}">{{$city->title_project}}</option>
              @endforeach
            @else
              <option value="new-city">Insert new city</option>
            @endif
            </select>
          </div>
            <div id="new-city-form">
            <label for="new-city">New city name</label>
            <input type="text" name="new_city_name" id="new-city" class="form-control"></input>
            </div>
          </div>
          </div>
          
          
          </div>
        
        </div>
        <!--END LOCATION-->
      
        </div>
        <!--END ROW-->
        
        <!--BEGIN ROW-->
        <div class="row">
          <div class="col-lg-12 col-xs-12">
          <h4>Details</h4>
          </div>
        </div>
        <!--END ROW-->
        
        <!--BEGIN ROW-->
        <div class="row">
        
          <div class="col-lg-4 col-xs-12">
            <div class="form-group">
              <label for="category-project">Category</label>
              <select class="form-control" id="category-project" name="category_project">
              @foreach($categories as $category)
              <option value="{{$category->id_category}}">{{$category->category_name}}</option>
              @endforeach
              </select>
              </select>
            </div>
          </div>
          
          <div class="col-lg-2 col-xs-6">
            <div class="form-group">
              <label for="budget-project">Budget ( &euro; )</label>
              <input type="number" min="1000" id="budget-project" name="budget_temp" class="form-control"></input>
            </div>
            <div class="form-group">
              <input type="checkbox" id="zero-budget-project"></input>&nbsp;
              <label for="zero-budget-project">Zero budget</label>
            </div>
          </div>
          
          <div class="col-lg-2 col-xs-6">
            <div class="form-group">
              <label for="budget-project">Hudget</label>
              <input type="number" id="hudget-project" name="hudget_project" class="form-control" value="1"></input>
            </div>
          </div>
          
          <div class="col-lg-4 col-xs-12">
            <div class="form-group">
              <label for="parent-project">Parent project</label>
              <select id="parent-project" name="parent_project" class="form-control">
                <option value="272" selected="selected">Cooperacy</option>
                @if(!$projects->isEmpty())
                <option disabled>---------------</option>
                @foreach ($projects as $project)
                <option value="{{$project->id_project}}">{{$project->title_project}} (ID: {{$project->id_project}})</option>
                @endforeach
                @endif
              </select>
            </div>
          </div>
          
        </div>
        <!--END ROW-->
        
        <!--EXPERIMENTAL (HIDDEN)--><div style="display:none">
        <!--BEGIN ROW-->
        <div class="row">
          <div class="col-lg-12 col-xs-12">
          <h4>Tags</h4>
          </div>
        </div>
        <!--END ROW-->
        
        <!--BEGIN ROW-->
        <div class="row">
          <div class="col-lg-12 col-xs-12">
            <div class="form-group">
                <label for="content-project">Tags</label>
                <input type="text" disabled id="tags-project" name="tags_project" class="form-control"></input>
            </div>
          </div>
        </div>
        <!--END ROW-->
        </div><!--END (HIDDEN)-->
        
        <!--BEGIN ROW-->
        <div class="row">
          <div class="col-lg-12 col-xs-12">
          <h4>People</h4>
          </div>
        </div>
        <!--END ROW-->
        
        <!--BEGIN ROW-->
        <div class="row">
        
          <!--COORDINATORS-->
          <div class="col-lg-4 col-xs-12">
            <div class="row">
                <div class="form-group">
                  <div class="col-lg-10 col-xs-10">
                    <label for="coordinator-project">Coordinators (max. 2)</label>
                    <input id="coordinator-project" class="form-control" title="type &quot;a&quot;">
                    <ul class="list-group" id="coordinator-list"></ul>
                  </div>
                  <div class="col-lg-2 col-xs-2">
                    <div style="height:30px;"></div>
                    <a id="add-coordinator" class="btn btn-default btn-sm" disabled>Add</a>
                  </div>
                </div>
            </div>
          </div>
          <!--END COORDINATORS-->
          
          <!--EXPERTS-->
          <div class="col-lg-4 col-xs-12">
            <div class="row">
                <div class="form-group">
                  <div class="col-lg-10 col-xs-10">
                    <label for="expert-project">Experts</label>
                    <input id="expert-project" class="form-control" title="type &quot;a&quot;">
                    <ul class="list-group" id="expert-list"></ul>
                  </div>
                  <div class="col-lg-2 col-xs-2">
                    <div style="height:30px;"></div>
                    <a id="add-expert" class="btn btn-default btn-sm" disabled>Add</a>
                  </div>
                </div>
            </div>
          </div>
          <!--END EXPERTS-->
          
          <!--REPORTERS-->
          <div class="col-lg-4 col-xs-12">
            <div class="row">
                <div class="form-group">
                  <div class="col-lg-10 col-xs-10">
                    <label for="reporter-project">Reporters</label>
                    <input id="reporter-project" class="form-control" title="type &quot;a&quot;">
                    <ul class="list-group" id="reporter-list"></ul>
                  </div>
                  <div class="col-lg-2 col-xs-2">
                    <div style="height:30px;"></div>
                    <a id="add-reporter" class="btn btn-default btn-sm" disabled>Add</a>
                  </div>
                </div>
            </div>
          </div>
          <!--END REPORTERS-->
          
        </div>
        <!--END ROW-->
        
      </div>
      
      <div class="panel-footer text-right">
        <button id="submit-button" class="btn btn-success">Submit</button>
      </div>
      <div id="array-coordinators"></div>
      <div id="array-experts"></div>
      <div id="array-reporters"></div>
      <input id="temp-reporter" type="hidden" value="">
      <input id="temp-expert" type="hidden" value="">
      <input id="temp-coordinator" type="hidden" value="">
      <input id="no-budget" name="zero_budget_project" type="hidden" value="0">
      <input id="project-budget" name="budget_project" type="hidden" value="">
      <input id="project-type" name="type_project" type="hidden" value="2">
      <input id="owner-id" name="id_project_owner" type="hidden" value="{{Auth::user()->id}}">
      <input id="parent-location-value" name="ParentLocationID" type="hidden" value="">
      <input id="location-value" name="LocationID" type="hidden" value="1">
      <input id="temporary-project-budget" name="temporary-budget_project" type="hidden" value="">
    </div>
    {!! Form::close() !!}
  </div>
</div>



</div>
<!--END CONTAINER-->
@endsection