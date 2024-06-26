<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Light Bootstrap Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('assets/css/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap4.css" />
    <link href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.bootstrap4.css" />
    <style>
        .dt-info,
        .dt-length {
            display: none;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="{{ asset('assets/img/sidebar-5.jpg') }}">

            <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="{{ route('admin.dashboard') }}" class="simple-text">
                        <img src="{{ asset('images/logosneaker.png') }}" alt=""> </a>
                </div>
                <ul class="nav">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="/admin/userList">
                            <i class="pe-7s-user"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/order-list">
                            <i class="pe-7s-note2"></i>
                            <p>Order List</p>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/product">
                            <i class="pe-7s-shopbag"></i>
                            <p>Products</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Dashboard</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="/admin/dashboard" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- <i class="fa fa-dashboard"></i> -->
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
                                    <p class="hidden-lg hidden-md">
                                        5 Notifications
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Notification 1</a></li>
                                    <li><a href="#">Notification 2</a></li>
                                    <li><a href="#">Notification 3</a></li>
                                    <li><a href="#">Notification 4</a></li>
                                    <li><a href="#">Another notification</a></li>
                                </ul>
                            </li> -->
                            <!-- <li>
                                <a href="">
                                    <i class="fa fa-search"></i>
                                    <p class="hidden-lg hidden-md">Search</p>
                                </a>
                            </li> -->
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="/admin/userList">
                                    <p>{{ $user->name }} ( {{$user->role}} )</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Action
                                        <b class="caret"></b>
                                    </p>

                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="/admin/product/add-product">ADD PRODUCT</a></li>
                                    <!-- <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li> -->
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <p>Log out</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg"></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="content">
                <div class="container">
                    <!-- <div class="row">
                        <div class="col-md-12">
                            <div class="card"> -->
                    <div class="header">
                        <h4 class="title">List User</h4>
                        <p class="category">ADMIN - SELLER</p>
                    </div>
                    <!-- <div class="content table-responsive table-full-width"> -->
                    <table id="example" class="table table-striped table-bordered nowrap" style="width:100%; margin-top: 15px">
                        <thead>
                            <th>Username: </th>
                            <th>Email: </th>
                            <th>Address: </th>
                            <th>Phone Number (+84): </th>
                            <th>Role: </th>
                            <th>Status: </th>
                            <th>Edit: </th>
                            <th>Delete: </th>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td class="dtr-control sorting_1">{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->phone_number }}</td>
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->is_active ? 'Activated' : 'Not Activated' }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a href="{{ route('admin.editUserForm', ['user' => $user->id]) }}" class="btn btn-primary search">{{ __('Edit User') }}</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <form action="{{ route('admin.deleteUser', ['user' => $user->id]) }}" method="POST" style="display: inline;" onsubmit="return confirm('Bạn có chắc chắn muốn xoá người dùng không?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">{{ __('Delete User') }}</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @if($users->isEmpty())
                            <tr>
                                <td colspan="8">No users found.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>

                    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
                    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
                    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap4.js"></script>
                    <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
                    <script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.bootstrap4.js"></script>
                    <script>
                        $('#example').DataTable({
                            responsive: true,
                            searching: true,
                            paging: true,
                            ordering: true,
                            info: true,
                            lengthChange: true,
                            autoWidth: false,
                            columnDefs: [{
                                    targets: [0],
                                    searchable: true
                                },
                                {
                                    targets: '_all',
                                    searchable: false
                                }
                            ]
                        });
                    </script>
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy; <script>
                            document.write(new Date().getFullYear())
                        </script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                    </p>
                </div>
            </footer>


        </div>
    </div>


</body>

<!--   Core JS Files   -->
<script src="{{ asset('assets/js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="{{ asset('assets/js/chartist.min.js') }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('assets/js/bootstrap-notify.js') }}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{ asset('assets/js/light-bootstrap-dashboard.js?v=1.4.0') }}"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/js/demo.js') }}"></script>


</html>