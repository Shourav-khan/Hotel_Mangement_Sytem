@extends('admin.layout')

@section('dash')
    <div class="container ">


        <div class="d-flex justify-content-end">
            <a href="{{url('admin/roomtype')}}" type="submit" class="btn btn-success text-end">Back</a>

        </div>



        <div class="card-body bg-gradient-success mt-3">



                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white font-weight-bold">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$roomTypes->title}}"  aria-describedby="emailHelp" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-white font-weight-bold">Description</label>
                    <input  name="des" class="form-control"  value="{{$roomTypes->description}}" readonly>
                </div>



        </div>
    </div>
@endsection


