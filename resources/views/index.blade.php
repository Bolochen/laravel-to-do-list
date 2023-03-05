@extends('layouts.main')

@section('container')

    <div class="container-lg text-center mx-auto d-flex align-items-center justify-content-center p-5">
        <div class="row shadow border border-warning rounded-2 bg-light">
            <div class="col-md-4 p-5">
                <div class="row m-auto">
                <img src="img/night.png" class="rounded mx-auto d-block p-3 img-fluid" class="max-height: 100px;" alt="...">
                </div>
                <div class="row">
                <h2>Good Evening</h2>
                </div>
            </div>
            <div class="col-sm-8 border p-3 mx-auto">
                <div class="row">
                    <form>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
                <div class="row">
                <h2>Your undone tasks</h2>
                <h3>Tidur</h3>
                <h3>Mandi</h3>
                </div>
            </div>
        </div>
</div>
  
    
@endsection