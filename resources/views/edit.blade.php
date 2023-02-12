@extends('layouts.appdash')

@section('content')
<!-- <div class="modal fade" id="modal-meal"> -->
        <!-- <div class="modal-dialog"> -->
            <!-- <div class="modal-content"> -->
                 <div  class="bg-light container" >
                <form action="{{route('Updatemeal',$meal->id)}}" method="POST" id="form" enctype="multipart/form-data">
                @csrf
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold">Edit Meal</h5>
                        <!-- <a href="#" class="btn-close" data-bs-dismiss="modal"></a> -->
                    </div>
                    <div class="modal-body">
                            <input type="hidden" name="id" >
                            <div class="mb-3">
                                
                                <img   src="{{asset('images/'.$meal->image)}}"  class="rounded" height="180" width="250" required/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" value="{{$meal->name}}" class="form-control rounded" required/>
                            </div>

                <div class="mb-3">
                  <label for="image" class="col-form-label" id="image">Image</label>
                  <input type="file" class="form-control border rounded"  id="images" name="image" >
                </div>
                            <div class="mb-0">
                                <label class="form-label">Description</label>
                                <textarea class="form-control border rounded" value="" name="description" rows="7">{{$meal->description}}</textarea>
                            </div>

              <div class="mb-3">
                                <label class="form-label">Date</label>
                                <input type="date" name="date" value="{{$meal->date}}" class=" form-control rounded" required/>
                            </div>
</div>
                    <div class="modal-footer">
                        <a href="/dash" class="btn btn-white border mx-3" >Cancel</a>
                        <button type="submit" class="btn btn-primary text-light my-3 bg-primary">Update Meal</button>
                    </div>
                </form>
                
            </div>
        </div>
@endsection