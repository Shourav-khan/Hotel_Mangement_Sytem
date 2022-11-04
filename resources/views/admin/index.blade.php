@extends('admin.layout')
@section('dash')

    <div class="container">

        <div class="mb-2 d-flex justify-content-end">

            <a href="{{url('admin/roomtype/create')}}" class=" btn btn-primary">Add Room</a>

        </div>

        <div class="mt-2">
            @if(session()->has('delete'))
                <div class="alert alert-danger">
                    {{ session()->get('delete') }}
                </div>
            @endif
        </div>

        <div class="">

        <table class=" table table-striped  table-warning shadow-lg p-3 mb-5 bg-body rounded text-center">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>

            @if($roomstype)

                @foreach($roomstype as $r)

            <tr>
                <th scope="row">{{$r->id}}</th>
                <td>{{$r->title}}</td>
                <td>{{$r->description}}</td>
                <td>
                    <a href="{{url('admin/roomtype/'.$r->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                    <a href="{{url('admin/roomtype/'.$r->id).'/edit'}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="{{url('admin/roomtype/'.$r->id).'/delete'}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>

                </td>
            </tr>

                @endforeach

            @endif

            </tbody>
        </table>
        </div>
    </div>

@endsection
