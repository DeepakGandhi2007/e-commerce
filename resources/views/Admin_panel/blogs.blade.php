@extends('Admin_panel/app')
@section('admin')
<style>.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
  }

  .switch input {
    opacity: 0;
    width: 0;
    height: 0;
  }

  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
  }

  .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
  }

  input:checked + .slider {
    background-color:green;
  }

  input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
  }

  input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
  }

  /* Rounded sliders */
  .slider.round {
    border-radius: 34px;
  }

  .slider.round:before {
    border-radius: 50%;
  }</style>

 <section class="dashboard-wrap mtb-40">
        <div class="container">
            <div class="body-content">
                <div class="row">
                    <div class="col-md-3">
                        @include('Admin_panel/layouts/sidebar')

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
                        <h6 class="mb-4">Blogs</h6>
                        <a href="{{ url('/admin_panel/add_blogs') }}" type="button" class="btn btn-info add-new"
                            style="color:black;float:right">Add Blogs</a>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Blog Title</th>
                                        <th scope="col">Actions</th>
                                        {{-- <th scope="col">Status</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0 ?>
                                    @foreach ($blog_data as $data)
                                    <?php $i++ ?>
                                        <tr>
                                            <th scope="row">{{ $i }}</th>
                                            <td>{{ $data->title }}</td>
                                            <td>
                                                <ul style="display:inline;">
                                                    <li style="list-style:none;display:inline;"><a
                                                            href="{{ url('/admin_panel/edit_blogs/' . $data->id) }}"><i
                                                                class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                    <li style="list-style:none;display:inline;margin-left:8px"><a
                                                            href="{{ url('/admin_panel/destroy/' . $data->id) }}"><i
                                                                class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </td>
                                             {{-- <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="showstatus" data-id="{{$data->id}}" class="toggleeeeeeeeee-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $data->status ? 'checked' : '' }}>
                                                    <span class="slider round"></span>
                                                  </label>
                                             </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endSection()
