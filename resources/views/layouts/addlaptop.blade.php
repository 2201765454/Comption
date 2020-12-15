@extends('layouts.app')
@section('title', 'Addlaptop')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="card mt-5 mb-5" style="width: 40rem;">

                <h3 class="smallpad"><strong>ADD LAPTOP</strong></h3>

                <form method="POST" action="/addlaptoptopage" enctype="multipart/form-data">
                    @csrf
                    <label for="Name" class="col-sm-3 col-form-label">Laptop Name:</label>

                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="inputName" name="laptopname" required>
                    </div>

                    <label for="Price" class="col-sm-3 col-form-label">Laptop Price:</label>

                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="inputPrice" name="laptopprice" required>
                    </div>

                    <label for="Ram" class="col-sm-3 col-form-label">Laptop RAM:</label>

                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="inputRam" name="laptopram" required>
                    </div>

                    <label for="SSD" class="col-sm-3 col-form-label">Laptop SSD:</label>

                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="inputSSD" name="laptopssd" required>
                    </div>

                    <label for="LaptopImage" class="col-sm-3 col-form-label">Laptop Image:</label>

                    <div class="col-sm-12">

                        <div class="form-group">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="laptopimage"
                                required>
                        </div>

                    </div>
                    <center>
                        <button type="submit" class="btn btn-dark">Add Laptop</button>
                    </center>
                    <br>
                </form>


            </div>
        </div>
    </div>


@endsection
