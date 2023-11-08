@extends('layouts.admin')
@section('content')
<div class="col-lg-12 grid-margin stretch-card my-3">
    <div class="card">
        <div class="card-body">
        @if(Session::get('success'))
          <div class="text text-success"> {{Session::get('success')}} </div> <br/>
        @endif

        @if(Session::get('message'))
          <div class="text text-danger"> {{Session::get('message')}} </div> <br/>
        @endif
        <h4 class="card-title">Class</h4>
        <p class="card-description"> List Classes </p>
        <div class="table-responsive pt-3">
        <table class="table table-striped text-center">
            <thead>
            <tr class="bg-primary text-white">
            <th> # </th>
            <th> Class Title </th>
            <th> Category Title </th>
            <th> Status </th>
            <th> Action </th>
            </tr>
            </thead>
            <tbody>
                @if(isset($classes) && $classes->count()>0 && !empty($classes))
                @php
                $i = 1;
                @endphp
                @foreach($classes as $class)
                <tr>
                    <td> {{$i}} </td>
                    <td> {{$class->class_title}} </td>
                    
                    <td>@foreach($categories as $category) @if($class->category_id == $category->id) {{$category->category_title}} @endif @endforeach</td>
                
                    <td> {{$class->class_status == 1 ? "Active" : "Inactive"}} </td>
                    <td>

                    <a href="{{route('classes.edit',$class->id)}}" class="btn btn-secondary btn-icon-text">
                    Edit
                    <i class="mdi mdi-file-check btn-icon-append"></i>
                    </a>
                    <button data-bs-toggle="modal" data-bs-target="#deleteModal{{$class->id}}" class="btn btn-danger btn-icon-text">
                        Delete
                        <i class="mdi mdi-delete btn-icon-append"></i>
                    </button>
                    </td>
                    <!-- Modal -->
                    <div class="modal fade" id="deleteModal{{$class->id}}" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirm to delete class permanent...</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('classes.destroy',$class->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                                        <button style="float:right;" type="submit" class="btn btn-danger">Yes</button>
                                    </form>
                                </div>   
                            </div>
                        </div>
                    </div>
                    <!-- Modal End -->
                </tr>
                @php
                $i++;
                @endphp
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
@endsection