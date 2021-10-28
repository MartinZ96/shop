@extends('app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Product edit</h1>
        <br>

<form action="{{route('products.update', $product->id)}}" method="POST">
@method('PUT')
@csrf
            Name:
            <input type="text" name="name" value="{{ $product->name }}" class="form-control">
            <br>

            Price ($):
            <input type="text" name="price" value="{{ $product->price }}" class="form-control">
            <br>

            Description:
            <br />
            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
            <br />

            Category:
            <br>
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id == $product->category_id) selected @endif>{{ $category->name }}</option>
                @endforeach
            </select>
            <br>

            Photo:
            
            <input type="file" name="photo">
            <br><br>
            
            <input type="submit" class="btn btn-primary" value="Save">
            <br><br>
            </form>
    </div>
    <!-- /.col-lg-12 -->
@endsection

