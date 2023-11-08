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
            <label for="categoryName" class="col-sm-3">Select Classe</label>
            <div class="col-sm-9">
                <select class="form-control" id="classes" name="classes_id">
                </select>
               
            </div>
        </div>

        <div class="form-group row">
            <label for="subject" class="col-sm-3">Select Subject</label>
            <div class="col-sm-9">
                <select class="form-control" id="subject" name="subject_id">
                </select>

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
@php
  $i=1;
  $op1=1;
  $op2=2;
  $op3=3;
  $op4=4;
@endphp
<div class="question-class">
        <div class="form-group row">
            <label for="classStatus" class="col-sm-3">Questions {{$i}}</label>
            <div class="col-sm-9">
             <input type="text" class="form-control question"  name="class_title[]" placeholder="Enter question no {{$i}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="classStatus" class="col-sm-4">Answer {{$i}}</label>
            <div class="col-sm-2">
             <input type="text" class="form-control question"  name="class_title[]" placeholder="Enter Option question no {{$op1}}">
            </div>
            <div class="col-sm-2">
             <input type="text" class="form-control question"  name="class_title[]" placeholder="Enter Option {{$op2}}">
            </div>
            <div class="col-sm-2">
             <input type="text" class="form-control question"  name="class_title[]" placeholder="Enter Option question no {{$op3}}">
            </div>
            <div class="col-sm-2">
             <input type="text" class="form-control question"  name="class_title[]" placeholder="Enter Option question no {{$op4}}">
            </div>
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

<script>
    var i={{$i}};
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    
     $("#categoryName").on("change",function() {
        var catID=$(this).val();
        $.ajax({
        type: 'GET',
        url: "{{ route('get-classes') }}",
        data: {category_id:catID},
        success: function (result) {
           $("#classes").html(result.data)
           }
        });
      });

      $("#classes").on("change",function() {
        var classID=$(this).val();
        $.ajax({
        type: 'GET',
        url: "{{ route('get-subjects') }}",
        data: {class_id:classID},
        success: function (result) {
           $("#subject").html(result.data)
           }
        });
      });
</script>
@endsection