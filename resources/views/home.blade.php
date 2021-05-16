@extends('index')

@section('page_title', 'Home')

@section('title')

    <h3 class="text-center">Product Data</h3>

@endsection

@section('content')

    <div class="container w-75">
        <a class="float-end" href="/add"><button type="button" class="btn btn-outline-primary">+ Add Data</button></a>

        <br/>
        <br/>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $p)

                <tr>
                    <th scope="row">{{ $p->product_id }}</th>
                    <td>{{ $p->product_name }}</td>
                    <td>{{ $p->product_qty }}</td>
                    <td>{{ $p->product_price }}</td>
                    <td>{{ $p->product_totalprice }}</td>
                    <td>
                        <a href="/edit/{{ $p->product_id }}"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                        |
                        <a href="/delete/{{ $p->product_id }}"><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>

        <!-- Page -->
        {{ $product->links() }}

    </div>

@endsection
