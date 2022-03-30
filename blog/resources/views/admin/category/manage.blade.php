@extends('master.admin.master')

@section('body')
    @extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Manage Category Form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table mb-0">

                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Category Name</th>
                                                <th>Category Description</th>
                                                <th>Category Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                @foreach($categories as $category)
                                                <th scope="row">{{$loop->iteration}}</th>
                                                <td>{{$category->name}}</td>
                                                <td>{{$category->description}}</td>
                                                <td>
                                                    <img src="{{$category->image}}" alt="" height="50" width="30"/>
                                                </td>
                                                    <td>{{$category->status}}</td>
                                                    <td>
                                                        <a href="" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                        <a href="" class="btn btn-warning"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

