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
                        <h6 class="mb-4">Banner</h6>
                        <a href="{{ url('/admin_panel/add_banner') }}" type="button" class="btn btn-info add-new"
                            style="color:black;float:right">Add Banner</a>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Banner Title</th>
                                        <th scope="col">Banner Image</th>
                                        <th scope="col">Actions</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($banner_data as $data)
                                    @csrf
                                         <tr>
                                             <th scope="row">{{$data->id}}</th>
                                            <td>{{$data->banner_title}}</td>
                                            <td><img src="{{ asset('/banner/' . $data->banner_img) }}" alt=""
                                                style=height:70px;width:70px;margin-left:10px></td>
                                           <td>
                                                <ul style="display:inline;">
                                                    <li style="list-style:none;display:inline;"><a
                                                            href="{{url('/admin_panel/edit_banner/'.$data->id)}}"><i
                                                                class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                    <li style="list-style:none;display:inline;margin-left:8px"><a
                                                            href="{{url('/admin_panel/deleteeee/'.$data->id)}}"><i
                                                                class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="changeeeeStatus" data-id="{{$data->id}}" class="toggleeee-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $data->status ? 'checked' : '' }}>
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
