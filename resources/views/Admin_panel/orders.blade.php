@extends('admin_panel/app')
@section('admin')
    <?php
    $adminlogin = session()->get('login');
    if (!isset($adminlogin)) {
        header('Location: http://127.0.0.1:8000/admin_panel');
        // header("Location:admin_panel/auth/login");
    }
    ?>
    <style>
        .mb-2 {
            color: red
        }
    </style>
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
            <h6 class="mb-4" style="padding-top: 35px">Orders</h6>
            <div class="table-wrapper">
                <div class="col-12">
                    <div class="bg-light rounded h-100 p-4">
                        <div class="table-responsive">
                            <table class="table">
                                @foreach ($user_data as $data)
                                    <?php $username = $data->name; ?>
                                    <?php $email = $data->email; ?>
                                @endforeach
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Order Id</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Customer email</th>
                                        <th scope="col">Customer Address</th>
                                        <th scope="col">Order Status</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Order Detail</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($order_data as $data)
                                        <?php $test = $data->shipping_address;
                                        $address = explode('`', $test);
                                        ?>
                                        @csrf
                                        <tr>
                                            <th scope="row"></th>
                                            <td>{{ $data->order_id }}</td>
                                            <td>{{ $username }}</td>
                                            <td>{{ $email }} </td>
                                            <td>{{ $address[0] }},{{ $address[1] }},{{ $address[2] }},{{ $address[3] }}
                                            </td>
                                           <td><select name="orderstatus" class="orderstatus" data-id="{{$data->order_id }}">
                                                @if($data->status==0)
                                                <option selected>select status</option>
                                              <option value="1" >Appproved</option>
                                              <option value="4" >Delivered</option>
                                                <option value="3" >Cancel</option>
                                                 @endif
                                                 @if($data->status==1)    <option selected>select status</option>  <option value="4" >Delivered</option> @endif
                                            </select></td>
                                        </form>
                                            <td> @if($data->status==1) <p style="background-color: lightgreen"> Approved </p> @elseif ($data->status==0)<p style="background-color: orange">Pending </p> @elseif ($data->status==4)<p style="background-color: green">delivered </p> @else ($data->status==3)<p style="background-color: red">cancel </p>   @endif  </td>
                                            <td>
                                                <button class="openitemmodal"
                                                    style="background-color: #348de0;height: 33px;padding-left:5px;width:95px"
                                                    type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                    value="{{ $data->id }}" data-productname=>check</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{-- <p id="tstststst" style="display: none"></p> --}}
                                </tbody>
                            </table>
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Order Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" id="tstststst">
                                            {{-- {{$items->item_name}} --}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Understood</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endSection()
            {{-- <tr>
       <th scope="row"></th>
       <td>{{ $data->order_id }}</td>
       <td>{{$username}}</td>
       <td>{{$email}} </td> --}}
            {{-- <td>{{$data->shipping_address}}</td> --}}
            {{-- <td><button class="openitemmodal" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" value="{{ $data->order_id }}" data-productname=>Launch modal</button></td> --}}

            {{-- <td>
           <label class="switch">
               <input type="checkbox" name="changeeeStatus"
                   data-id="{{ $data->product_id }}" class="toggleee-class"
                   type="checkbox" data-onstyle="success" data-offstyle="danger"
                   data-toggle="toggle" data-on="Active" data-off="InActive"
                   {{ $data->status ? 'checked' : '' }}>
               <span class="slider round"></span>
           </label>
       </td> --}}
            {{-- </tr> --}}
