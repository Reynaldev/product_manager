@extends('index')

@section('page_title', 'About')

@section('title')

    <h3 class="text-center">About This Website</h3>

@endsection

@section('content')

    <div class="container w-75">
        <p class="text-center">
            English : <br/>
            This is my portfolio website about product management website by accessing provided database to create, read, update, or delete the data. <br/> <br/>

            Indonesian : <br/>
            Ini adalah website portofolio saya tentang website manajemen produk, dengan mengakses database yang disediakan untuk membuat, mengambil, menambah, atau menghapus data.
        </p>

        <br/>
        <br/>

        <p>Social Media</p>
        <hr style="width: 200px">
        <span class="fab fa-github"><a href="https://github.com/ReynaldyNC" style="text-decoration: none"> @ReynaldyNC</a></span> <br/>
        <span class="fab fa-instagram"></span><a href="https://www.instagram.com/reyn.crs" style="text-decoration: none"> @reyn.crs</a>
    </div>

@endsection
