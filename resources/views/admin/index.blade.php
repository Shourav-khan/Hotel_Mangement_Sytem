@extends('admin.layout')
@section('dash')

    <div class="container">

        <div class="mb-2 d-flex justify-content-end">

            <a href="{{url('admin/roomtype/create')}}" class=" btn btn-primary">Add Room</a>

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

            <tr>
                <th scope="row">1</th>
                <td>Title</td>
                <td>Description</td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                    <a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>

                </td>
            </tr>

            </tbody>
        </table>
        </div>
    </div>

@endsection
