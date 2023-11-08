@extends('layouts.admin')
@section('content')
<div class="col-md-12 grid-margin stretch-card my-3">
    <div class="card"> <div class="card-body"> <h4 class="card-title">Class</h4>
    <p class="card-description"> Update Class</p>
        <form class="forms-sample" method="post" action="{{route('classes.update',$class->id)}}">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="categoryName" class="col-sm-3">Select Category</label>
            <div class="col-sm-9">
                <select class="form-control" id="categoryName" name="category_id">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" @if($category->id == $class->category_id) selected @endif>{{$category->category_title}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="classTitle" class="col-sm-3 col-form-label">Title</label>
            <div class="col-sm-9">
                <input type="text" value="{{$class->class_title}}" class="form-control" id="classTitle" name="class_title">
                @error('class_title')
                    <div class="text text-danger">{{$message}}</div><br/>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="classStatus" class="col-sm-3">Status</label>
            <div class="col-sm-9">
                <select class="form-control" id="classStatus" name="class_status">
                    <option value="active" @if($class->class_status == 1) selected @endif>Active</option>
                    <option value="inactive" @if($class->class_status == 0) selected @endif>Inactive</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-icon-text">
            <i class="mdi mdi-file-check btn-icon-prepend"></i>
            Update
        </button>
        <button type="reset" class="btn btn-warning btn-icon-text">
            <i class="mdi mdi-reload btn-icon-prepend"></i>
            Reset
        </button>
        </form>
    </div>
</div>
</div>
@endsection