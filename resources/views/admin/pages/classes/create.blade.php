@extends('layouts.admin')
@section('content')
<div class="col-md-12 grid-margin stretch-card my-3">
    <div class="card"> <div class="card-body"> <h4 class="card-title">Class</h4>
    <p class="card-description"> Add Class</p>
        <form class="forms-sample" method="post" action="{{route('classes.store')}}">
        @csrf
        <div class="form-group row">
            <label for="categoryName" class="col-sm-3">Select Category</label>
            <div class="col-sm-9">
                <select class="form-control" id="categoryName" name="category_id">
                    <option value="">----Select----</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_title}}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="text text-danger">{{$message}}</div><br/>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="classTitle" class="col-sm-3 col-form-label">Title</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="classTitle" name="class_title" placeholder="Title">
                @error('class_title')
                    <div class="text text-danger">{{$message}}</div><br/>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="classStatus" class="col-sm-3">Status</label>
            <div class="col-sm-9">
                <select class="form-control" id="classStatus" name="class_status">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-icon-text">
            <i class="mdi mdi-file-check btn-icon-prepend"></i>
            Submit
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