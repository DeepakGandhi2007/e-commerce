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
                    <h6 class="mb-4">Stocks</h6>
                    <a href="{{ url('/admin_panel/add_stock') }}" type="button" class="btn btn-info add-new"
                        style="color:black;float:right">Add Stock</a>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">product name</th>
                                    <th scope="col">total stock</th>
                                    <th scope="col">used stock</th>
                                    <th scope="col">Availabel stock</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                           
                                <?php $i = 0 ?>
                                @foreach ($stock_data as $data)
                                <?php $i++ ;
                                ?>
                              
                                <tr>
                                    <th scope="row">{{ $i }}</th>
                                    <td>{{ $data->product_name }}</td>
                                    <td>{{ $data->product_stock }}</td>
                                    <td><?php print_r($qty[0][$i]->item_qty); ?></td>

                                    <!-- <td>
                                        <ul style="display:inline;">
                                            <li style="list-style:none;display:inline;"><a
                                                    href="{{ url('/admin_panel/edit_stock/' . $data->id) }}"><i
                                                        class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            <li style="list-style:none;display:inline;margin-left:8px"><a
                                                    href="{{ url('/admin_panel/destroy_stock/' . $data->id) }}"><i
                                                        class="fa fa-trash" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </td> -->
                                </tr>
                                
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endSection()