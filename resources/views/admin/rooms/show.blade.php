@extends('admin.layout')

@section('dash')
    <div class="container ">


        <div class="d-flex justify-content-end">
            <a href="{{url('admin/room')}}" type="submit" class="btn btn-success text-end">Back</a>

        </div>



        <div class="card-body bg-gradient-success mt-3">



                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white font-weight-bold">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$roomsAll->title}}"  aria-describedby="emailHelp" readonly>
                </div>




        </div>
    </div>
@endsection


