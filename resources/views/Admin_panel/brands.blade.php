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
                        <h6 class="mb-4">Brands</h6>
                        <a href="{{ url('/admin_panel/add_brand') }}" type="button" class="btn btn-info add-new"
                            style="color:black;float:right">Add Brands</a>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Brand Name</th>
                                        <th scope="col">Actions</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brand_data as $data)
                                    @csrf
                                        <tr>
                                             <th scope="row">{{$data->id}}</th>
                                            <td>{{$data->brand_name}}</td>
                                            <td>
                                                <ul style="display:inline;">
                                                    <li style="list-style:none;display:inline;"><a
                                                            href="{{url('/admin_panel/edit_brand/'.$data->id)}}"><i
                                                                class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                    <li style="list-style:none;display:inline;margin-left:8px"><a
                                                            href="{{url('/admin_panel/deletee/'.$data->id)}}"><i
                                                                class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="changeeStatus" data-id="{{$data->id}}" class="togglee-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $data->status ? 'checked' : '' }}>
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
