@extends('app')

@section('content')

    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>


    <!-- Categories -->
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <h1 class="my-4">Categories</h1>
         <div class="list-group">
             @foreach ($categories as $category)
            <div class="col">
                <a href="/?category_id={{$category->id}}" class="list-group-item">{{ $category->name }}</a>
            </div>
            @endforeach 
        
</div>
        </div>
    </div>
</div>
    <!-- Section-->

    @foreach($products as $product)
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-4">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{$product->name}}</h5>
                                <!-- Product price-->
                                <h5>{{$product->price}}</h5>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
              
        </div>
    </section>

@endsection