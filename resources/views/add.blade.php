@extends('index')

@section('page_title', 'Adding Page')

@section('title')

    <h3 class="text-center">Add Product Data</h3>

@endsection

@section('content')

    <div class="container w-75">
        <form action="/add/store" method="POST">

            <!-- Add token -->
            @csrf

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Product Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" placeholder="Product name..." required>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Quatity</label>
                <div class="col-sm-10">
                    <input type="text" name="qty" class="form-control" placeholder="Product quantity..." required>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Price per Unit</label>
                <div class="col-sm-10">
                    <input type="text" name="price" class="form-control" placeholder="Product price..." required>
                </div>
            </div>
            <div class="mb-3 float-end">
                <a href="/"><button type="button" class="btn btn-outline-danger">Cancel</button></a>
                |
                <input type="submit" value="Add" class="btn btn-primary">
            </div>
        </form>
    </div>

@endsection
