@extends('admin_panel/app')
@section('admin')
    <section class="dashboard-wrap mtb-40">
        <div class="container">
            <div class="body-content">
                <div class="row">
                    <div class="col-md-3">
                        @include('admin_panel/layouts/sidebar')
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content">
        <div class="container">
            <div class="table-wrapper">
                <div class="col-12">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">pages</h6>
                        <a href="{{ url('/admin_panel/add_page') }}" type="button" class="btn btn-info add-new"
                            style="color:black;float:right">Add Pages</a>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Reviews</th>
                                        <th scope="col">stars</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($review_data as $data)
                                        @csrf
                                        <tr>
                                            <th scope="row">{{ $data->id }}</th>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->review }}</td>
                                            <td>{{ $data->stars }}</td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="statuschange"
                                                        data-id="{{ $data->id }}" class="togggleeeeeeeeeeee-class"
                                                        type="checkbox" data-onstyle="success" data-offstyle="danger"
                                                        data-toggle="toggle" data-on="Active" data-off="InActive"
                                                        {{ $data->status ? 'checked' : '' }}>
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endSection()
