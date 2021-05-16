@extends('index')

@section('page_title', 'Editing Page')

@section('title')

    <h3 class="text-center">Data Editing</h3>

@endsection

@section('content')

    <div class="container w-75">

        <!-- Get data based on id and fill it into the form -->
        @foreach ($product as $p)

            <form action="/update" method="POST">

                <!-- Add token -->
                @csrf

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="text" name="id" class="form-control" value="{{ $p->product_id }}" readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Product Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="{{ $p->product_name }}" placeholder="Product name..." required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Quatity</label>
                    <div class="col-sm-10">
                        <input type="text" name="qty" class="form-control" value="{{ $p->product_qty }}" placeholder="Product quantity..." required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Price per Unit</label>
                    <div class="col-sm-10">
                        <input type="text" name="price" class="form-control" value="{{ $p->product_price }}" placeholder="Product price..." required>
                    </div>
                </div>
                <div class="mb-3 float-end">
                    <a href="/"><button type="button" class="btn btn-outline-danger">Cancel</button></a>
                    |
                    <input type="submit" value="Save" class="btn btn-primary">
                </div>
            </form>

        @endforeach

    </div>

@endsection
