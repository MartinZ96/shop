@extends('app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Category edit</h1>

        
        <br>

<form action="{{route('categories.update', $category->id)}}" method="POST">
@method('PUT')
@csrf
            Name:
            
            <input type="text" name="name" value="{{$category->name}}" class="form-control">
            <br><br>
            <input type="submit" class="btn btn-primary" value="Update">
            <br><br>
            </form>
    </div>
    <!-- /.col-lg-12 -->
@endsection

