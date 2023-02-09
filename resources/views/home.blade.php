@extends('layouts.appdash')

@section('content')


<div class="row items-center">
        <h1 class="col fw-bold ms-5 mt-5">All Meals</h1>
        <button class="col-4 me-5 mt-5 btn btn-primary w-auto" href="#modal-meal" data-bs-toggle="modal"><b>+ </b> Add a Meal</button>
        </div>
    <div class="container pt-5 table-responsive">
  <table class="table  table-responsive bg-white rounded ">
                    <thead>
                      <tr class="table-secondary ">
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                    
                        @foreach( $meal as $meals)
                      <tr>
                          <td ><img class="rounded" src="{{asset('images/'.$meals->image)}}" height="180" width="250" ></td>
                          <td class="fs-5" >{{$meals->name}}</td>
                        <td class="fs-5">{{$meals->description}}</td>
                        <td class="fs-5">{{$meals->date}}</td>
                        <td> <a href="edit/{{$meals->id}} " class="text-decoration-none text-primary fs-5 fw-bold">edit</a></td>
                        <td><a href="" class="text-decoration-none text-danger fs-5 fw-bold">delete</a></td>
                        
                      </tr>
                      
                      @endforeach;  
                    </tbody>

                 </table> 
                
           </div>

           <div class="modal fade" id="modal-meal">
        <div class="modal-dialog">
            <div class="modal-content"> 
                <form action="{{route('Savemeal')}}" method="POST" id="form" enctype="multipart/form-data">
                @csrf
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold">New Meal</h5>
                        <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                    </div>
                    <div class="modal-body">
            
                            <input type="hidden" name="id" >
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control rounded" required/>
                            </div>

                <div class="mb-3">
                  <label for="image" class="col-form-label" id="image">Image</label>
                  <input type="file" class="form-control border rounded"  id="images" name="image" required>
                </div>
                            <div class="mb-0">
                                <label class="form-label">Description</label>
                                <textarea class="form-control border rounded" name="description" rows="7"></textarea>
                            </div>

              <div class="mb-3">
                                <label class="form-label">Date</label>
                                <input type="date" name="date" class="form-control rounded" required/>
                            </div>
</div>
                    <div class="modal-footer">
                        <a href="/dashboard" class="btn btn-white border" >Cancel</a>
                        <button type="submit" class="btn btn-primary text-light bg-primary">Add Meal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
