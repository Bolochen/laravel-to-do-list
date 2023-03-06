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
            <div class="col-sm-8 p-5 mx-auto">
                <div class="row">
                    <form method="post" action="/">
                      @csrf
                        <div class="row mb-3">
                          <div class="col">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                            <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-title"></div>
                          </div>
                          <div class="col">
                            <label for="urgent" class="form-label">Urgent</label>
                              <select class="form-select" id="urgent" name="urgent">
                                  <option value="1" selected >Urgent</option>    
                                  <option value="0">Not urgent</option>  
                              </select>
                          </div>
                          <div class="col mt-1">
                            <button type="submit" class="d-block mt-4 py-2 btn btn-primary" id="store">Submit</button>
                          </div>
                        </div>
                      </form>
                </div>
                <div class="row mt-5">
                <h2>Your undone tasks</h2>
                <div class="p-1">
                  <table class="table table-bordered">
                    <thead>
                      <tr class="table-dark">
                        <th scope="col">#</th>
                        <th scope="col">Task Name</th>
                        <th scope="col">Option</th>
                      </tr>
                    </thead>
                    <tbody id="table-tasks">
                      @foreach ($tasks as $task)
                        @if ($task->urgent == 1)
                          <tr class="table-danger">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $task->name }}</td>
                            <form action="{{ $task->id }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf
                              <td><button class="badge text-bg-secondary  border-0"><i class="bi bi-trash"></i></button></td>
                            </form>
                          </tr> 
                        @else
                          <tr class="table-warning">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $task->name }}</td>
                            <td>
                            <form action="/{{ $task->id }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf
                              <button class="badge text-bg-secondary border-0"><i class="bi bi-trash"></i></button></td>
                            </form>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                    </tbody>
                  </table>
                </div>
                </div>
            </div>
        </div>
</div> 
@endsection