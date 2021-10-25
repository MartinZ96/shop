@extends('app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">New Category</h1>

        
        <br>

<form action="{{route('categories.store')}}" method="POST">
@csrf
            Name:
            
            <input type="text" name="name" value="" class="form-control">
            <br><br>
            <input type="submit" class="btn btn-primary" value="Save">
            <br><br>
            </form>
    </div>
    <!-- /.col-lg-12 -->
@endsection

