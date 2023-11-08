@extends('layouts.admin')
@section('content')
<div class="col-md-12 grid-margin stretch-card my-3">
    <div class="card"> <div class="card-body"> <h4 class="card-title">Category</h4>
    <p class="card-description"> Update Category</p>
        <form class="forms-sample" method="post" action="{{route('category.update',$category->id)}}">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="categoryTitle" class="col-sm-3 col-form-label">Title</label>
            <div class="col-sm-9">
                <input type="text" value="{{$category->category_title}}" class="form-control" id="categoryTitle" name="category_title" placeholder="Title">
                @error('category_title')
                    <div class="text text-danger">{{$message}}</div><br/>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="categoryStatus" class="col-sm-3">Status</label>
            <div class="col-sm-9">
                <select class="form-control" id="categoryStatus" name="category_status">
                    <option value="active" @if($category->category_status == 1) selected @endif>Active</option>
                    <option value="inactive" @if($category->category_status == 0) selected @endif>Inactive</option>
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