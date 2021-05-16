<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    // Home Page
    public function index() {

        // Get data from database
        $product = DB::table('product')->paginate(10);

        return view('home', ['product' => $product]);
    }

    // About Page
    public function about() {
        return view('about');
    }

    // Add data page
    public function addData() {
        return view('add');
    }

    // Insert data into database
    public function add(Request $request) {

        // Calculating Total Price
        $total = $request->price * $request->qty;

        // Then Insert it into Database
        $add = DB::table('product')->insert([
            'product_name' => $request->name,
            'product_qty' => $request->qty,
            'product_price' => $request->price,
            'product_totalprice' => $total
        ]);

        if ($add) { // If Success
            ?>

            <script>
                alert('Adding Data Success!');
                document.location = "/";
            </script>

            <?php
        } else { // If Failed
            ?>

            <script>
                alert('Adding Data Failed!');
                document.location = "/";
            </script>

            <?php
        }
    }

    // Edit page
    public function edit($id) {
        $product = DB::table('product')->where('product_id', $id)->get();

        return view('edit', ['product' => $product]);
    }

    // Update the data
    public function update(Request $request) {

        // Calculating Total Price
        $total = $request->price * $request->qty;

        $update = DB::table('product')->where('product_id', $request->id)->update([
            'product_name' => $request->name,
            'product_qty' => $request->qty,
            'product_price' => $request->price,
            'product_totalprice' => $total
        ]);

        if ($update) { // If Success
            ?>

            <script>
                alert('Updating Data Success!');
                document.location = "/";
            </script>

            <?php
        } else { // If Failed
            ?>

            <script>
                alert('Updating Data Failed!');
                document.location = "/";
            </script>

            <?php
        }
    }

    // Delete the data
    public function delete($id) {
        $delete = DB::table('product')->where('product_id', $id)->delete();

        if ($delete) { // If Success
            ?>

            <script>
                alert('Deleting Data Success!');
                document.location = "/";
            </script>

            <?php
        } else { // If Failed
            ?>

            <script>
                alert('Deleting Data Failed!');
                document.location = "/";
            </script>

            <?php
        }
    }
}
