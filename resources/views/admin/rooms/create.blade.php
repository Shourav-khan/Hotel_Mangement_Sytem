@extends('admin.layout')

@section('dash')
    <div class="container ">


            <div class="d-flex justify-content-end">
                 <a href="{{url('admin/room')}}" type="submit" class="btn btn-info text-end">View All</a>
            </div>


            <div class="mt-2">
                  @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
            </div>
                     @endif
            </div>

        <div class="card-body bg-gradient-info">

        <form action="{{url('admin/room')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white font-weight-bold">Title</label>
                <input type="text" name="title" class="form-control"  aria-describedby="emailHelp">
            </div>

            <button type="submit" class="btn btn-light">Submit</button>
        </form>

        </div>
    </div>
@endsection


