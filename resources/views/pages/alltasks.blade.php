@extends('layouts.master')
@section('content')
<div class="content-body">
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body px-0">
                        <h4 class="card-title px-4 mb-3">All Tasks</h4>
                        <div class="todo-list">
                            <div class="tdl-holder">
                                <div class="tdl-content">
                                    <ul id="todo_list">
                                        <li><label><input type="checkbox"><i></i><span>Get up</span><a href='#'
                                                    class="ti-trash"></a></label></li>
                                        <li><label><input type="checkbox" checked><i></i><span>Stand up</span><a
                                                    href='#' class="ti-trash"></a></label></li>
                                        <li><label><input type="checkbox"><i></i><span>Don't give up the fight.</span><a
                                                    href='#' class="ti-trash"></a></label></li>
                                        <li><label><input type="checkbox" checked><i></i><span>Do something
                                                    else</span><a href='#' class="ti-trash"></a></label></li>
                                    </ul>
                                </div>
                                <div class="px-4">
                                    <input type="text" class="tdl-new form-control"
                                        placeholder="Write new item and hit 'Enter'...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="active-member">
                            <div class="table-responsive">
                                <table class="table table-xs mb-0">
                                    <thead>
                                        <tr>
                                            <th>Customers</th>
                                            <th>Product</th>
                                            <th>Country</th>
                                            <th>Status</th>
                                            <th>Payment Method</th>
                                            <th>Activity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="{{asset('assets/images')}}/avatar/1.jpg"
                                                    class=" rounded-circle mr-3" alt="">Sarah Smith</td>
                                            <td>iPhone X</td>
                                            <td>
                                                <span>United States</span>
                                            </td>
                                            <td>
                                                <div>
                                                    <div class="progress" style="height: 6px">
                                                        <div class="progress-bar bg-success" style="width: 50%"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
                                            <td>
                                                <span>Last Login</span>
                                                <span class="m-0 pl-3">10 sec ago</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="{{asset('assets/images')}}/avatar/2.jpg"
                                                    class=" rounded-circle mr-3" alt="">Walter R.</td>
                                            <td>Pixel 2</td>
                                            <td><span>Canada</span></td>
                                            <td>
                                                <div>
                                                    <div class="progress" style="height: 6px">
                                                        <div class="progress-bar bg-success" style="width: 50%"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
                                            <td>
                                                <span>Last Login</span>
                                                <span class="m-0 pl-3">50 sec ago</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="{{asset('assets/images')}}/avatar/3.jpg"
                                                    class=" rounded-circle mr-3" alt="">Andrew D.</td>
                                            <td>OnePlus</td>
                                            <td><span>Germany</span></td>
                                            <td>
                                                <div>
                                                    <div class="progress" style="height: 6px">
                                                        <div class="progress-bar bg-warning" style="width: 50%"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><i class="fa fa-circle-o text-warning  mr-2"></i> Pending</td>
                                            <td>
                                                <span>Last Login</span>
                                                <span class="m-0 pl-3">10 sec ago</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="{{asset('assets/images')}}/avatar/6.jpg"
                                                    class=" rounded-circle mr-3" alt=""> Megan S.</td>
                                            <td>Galaxy</td>
                                            <td><span>Japan</span></td>
                                            <td>
                                                <div>
                                                    <div class="progress" style="height: 6px">
                                                        <div class="progress-bar bg-success" style="width: 50%"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
                                            <td>
                                                <span>Last Login</span>
                                                <span class="m-0 pl-3">10 sec ago</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="{{asset('assets/images')}}/avatar/4.jpg"
                                                    class=" rounded-circle mr-3" alt=""> Doris R.</td>
                                            <td>Moto Z2</td>
                                            <td><span>England</span></td>
                                            <td>
                                                <div>
                                                    <div class="progress" style="height: 6px">
                                                        <div class="progress-bar bg-success" style="width: 50%"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
                                            <td>
                                                <span>Last Login</span>
                                                <span class="m-0 pl-3">10 sec ago</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="{{asset('assets/images')}}/avatar/5.jpg"
                                                    class=" rounded-circle mr-3" alt="">Elizabeth W.</td>
                                            <td>Notebook Asus</td>
                                            <td><span>China</span></td>
                                            <td>
                                                <div>
                                                    <div class="progress" style="height: 6px">
                                                        <div class="progress-bar bg-warning" style="width: 50%"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><i class="fa fa-circle-o text-warning  mr-2"></i> Pending</td>
                                            <td>
                                                <span>Last Login</span>
                                                <span class="m-0 pl-3">10 sec ago</span>
                                            </td>
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
    {{-- CONTAINER ENDS --}}
</div>
@endsection