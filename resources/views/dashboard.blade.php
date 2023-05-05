@extends('home')

@section('css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Crush On The most popular Admin Dashboard template and ui kit">
    <meta name="author" content="PuffinTheme the theme designer">

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>

    <title>SPPD - Dashboard</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

    <!-- Plugins css -->
    <link rel="stylesheet" href="assets/plugins/charts-c3/c3.min.css"/>
    <link rel="stylesheet" href="assets/plugins/jvectormap/jvectormap-2.0.3.css" />

    <!-- Core css -->
    <link rel="stylesheet" href="assets/css/main.css"/>
    <link rel="stylesheet" href="assets/css/default.css"/>
@endsection

@section('page_title')
    Dashboard
@endsection

@section('content')
    <div class="section-body mt-4">
        <div class="container-fluid">
            <div class="row clearfix row-deck">
                <div class="col-xl-9 col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Account Retention</h3>
                        </div>
                        <div class="card-body">
                            <div class="d-md-flex">
                                <div class="card mr-1">
                                    <div class="card-body">
                                        <div class="text">Jumlah Pegawai</div>
                                        <h5 class="counter">0</h5>
                                    </div>
                                </div>
                                <div class="card mr-1">
                                    <div class="card-body">
                                        <div class="text">Pegawai Laki Laki</div>
                                        <h5 class="counter">0</h5>
                                    </div>
                                </div>
                                <div class="card mr-1">
                                    <div class="card-body">
                                        <div class="text">Pegawai Perempuan</div>
                                        <h5 class="counter">0</h5>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text">Pegawai Perjalanan Dinas</div>
                                        <h5><span class="counter">0</span></h5>
                                    </div>
                                </div>
                            </div>
                            {{-- <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</span>
                            <div id="theme-default-bar"></div> --}}
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-3 col-lg-4 col-md-12">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                <h6>Customers</h6>
                                <h3 class="pt-3 counter">36,254</h3>
                                <span><span class="text-danger mr-2"><i class="fa fa-long-arrow-up"></i> 5.27%</span> Since last month</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                <h6>Revenue</h6>
                                <h3 class="pt-3">$<span class="counter">8,751</span></h3>
                                <span><span class="text-success mr-2"><i class="fa fa-long-arrow-up"></i> 11.38%</span> Since last month</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                <h6>Growth</h6>
                                <h3 class="pt-3">+<span class="counter">27.27</span>%</h3>
                                <span><span class="text-success mr-2"><i class="fa fa-long-arrow-up"></i> 9.61%</span> Since last month</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                <h6>Orders</h6>
                                <h3 class="pt-3 counter">3,204</h3>
                                <span><span class="text-danger mr-2"><i class="fa fa-long-arrow-down"></i> 2.27%</span> Since last month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            {{-- <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Overview of Sales Summary</h3>
                            <div class="card-options ">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-md-12">
                                    <div class="box-icon md rounded bg-blue mb-4"><i class="fa fa-bank"></i> </div>
                                    <p class=" mb-0 "> Total Revenue</p>
                                    <h2 class="mb-2">$38925<span class="font-14 text-muted ml-1">weekly profit</span></h2>
                                    <div class="progress progress-xs mb-0">
                                        <div class="progress-bar bg-primary" style="width: 78%"></div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-12">
                                    <div class="box-icon md rounded bg-info mb-4"><i class="fa fa-credit-card"></i> </div>
                                    <p class=" mb-0 "> Total Tax</p>
                                    <h2 class="mb-2">$3926<span class="font-14 text-muted ml-1">weekly profit</span></h2>
                                    <div class="progress progress-xs mb-0">
                                        <div class="progress-bar bg-info" style="width: 58%"></div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-12">
                                    <div class="box-icon md rounded bg-orange mb-4"><i class="fa fa-briefcase"></i> </div>
                                    <p class=" mb-0 "> Total Income</p>
                                    <h2 class="mb-2">73%<span class="font-14 text-muted ml-1">weekly profit</span></h2>
                                    <div class="progress progress-xs mb-0">
                                        <div class="progress-bar bg-orange" style="width: 73%"></div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-12">
                                    <div class="box-icon md rounded bg-green mb-4"><i class="fa fa-circle-o"></i> </div>
                                    <p class=" mb-0 "> Total Loss</p>
                                    <h2 class="mb-2">45%<span class="font-14 text-muted ml-1">weekly loss</span></h2>
                                    <div class="progress progress-xs mb-0">
                                        <div class="progress-bar bg-green" style="width: 45%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="row clearfix row-deck">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Performance</h3>
                        </div>
                        <div class="card-body">
                            <div id="apex-radar-multiple-series"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">ToDo List <small>This Month task list</small></h3>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>                                
                                <div class="item-action dropdown ml-2">
                                    <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>                                            
                                                        <div class="dropdown-divider"></div>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" id="days7-tab" data-toggle="tab" href="#days7">7 Days</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="days15-tab" data-toggle="tab" href="#days15">15 Days</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="month-tab" data-toggle="tab" href="#month">Month</a>
                                </li>
                            </ul>
                            <div class="tab-content todo_list mt-3">
                                <div class="tab-pane fade show active" id="days7">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                                <span class="custom-control-label">Report Panel Usag</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">Report Panel Usag</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                                <span class="custom-control-label">New logo design for Angular Admin</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">Design PSD files for Angular Admin</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                                <span class="custom-control-label">New logo design for Angular Admin</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="days15">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">Design PSD files for Angular Admin</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">Report Panel Usag</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                                <span class="custom-control-label">Report Panel Usag</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">Report Panel Usag</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                                <span class="custom-control-label">New logo design for Angular Admin</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="month">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                                <span class="custom-control-label">Report Panel Usag</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">Report Panel Usag</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">Design PSD files for Angular Admin</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">Report Panel Usag</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                                <span class="custom-control-label">New logo design for Angular Admin</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Sales Performance</h4>
                            <small>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<a href="#">Read More</a></small>
                        </div>
                        <table class="table card-table">
                            <tbody>
                                <tr>
                                    <td><i class="flag flag-us"></i></td>
                                    <td>
                                        USA
                                        <div class="progress progress-xs mt-2">
                                            <div class="progress-bar" style="width: 78%"></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><span class="text-muted">$6425</span></td>
                                </tr>
                                <tr>
                                    <td><i class="flag flag-pl"></i></td>
                                    <td>
                                        Poland
                                        <div class="progress progress-xs mt-2">
                                            <div class="progress-bar" style="width: 62%"></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><span class="text-muted">$5582</span></td>
                                </tr>
                                <tr>
                                    <td><i class="flag flag-de"></i></td>
                                    <td>
                                        Germany
                                        <div class="progress progress-xs mt-2">
                                            <div class="progress-bar" style="width: 48%"></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><span class="text-muted">$4587</span></td>
                                </tr>
                                <tr>
                                    <td><i class="flag flag-ru"></i></td>
                                    <td>
                                        Russia
                                        <div class="progress progress-xs mt-2">
                                            <div class="progress-bar" style="width: 35%"></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><span class="text-muted">$2520</span></td>
                                </tr>
                                <tr>
                                    <td><i class="flag flag-au"></i></td>
                                    <td>
                                        Australia
                                        <div class="progress progress-xs mt-2">
                                            <div class="progress-bar" style="width: 30%"></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><span class="text-muted">$1899</span></td>
                                </tr>
                                <tr>
                                    <td><i class="flag flag-gb"></i></td>
                                    <td>
                                        Great Britain
                                        <div class="progress progress-xs mt-2">
                                            <div class="progress-bar" style="width: 22%"></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><span class="text-muted">$1056</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="row clearfix row-deck">
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Sales Stats</h3>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>                                
                                <div class="item-action dropdown ml-2">
                                    <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>                                            
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table">
                                <tbody>
                                    <tr>
                                        <th>Order NO.</th>
                                        <th>Scheduled</th>
                                        <th>Count</th>
                                        <th class="text-right">Amount</th>
                                    </tr>
                                    <tr>
                                        <td>SD1</td>
                                        <td class="text-muted">13.06.2018</td>
                                        <td>67</td>
                                        <td class="text-right">$14,740</td>
                                    </tr>
                                    <tr>
                                        <td>SD2</td>
                                        <td class="text-muted">28.02.2018</td>
                                        <td>120</td>
                                        <td class="text-right">$11,002</td>
                                    </tr>
                                    <tr>
                                        <td>SD3</td>
                                        <td class="text-muted">06.03.2018</td>
                                        <td>32</td>
                                        <td class="text-right">$10,900</td>
                                    </tr>
                                    <tr>
                                        <td>SD4</td>
                                        <td class="text-muted">21.10.2018</td>
                                        <td>130</td>
                                        <td class="text-right">$14,740</td>
                                    </tr>
                                    <tr>
                                        <td>SD5</td>
                                        <td class="text-muted">02.01.2018</td>
                                        <td>5</td>
                                        <td class="text-right">$18,540</td>
                                    </tr>
                                    <tr>
                                        <td>SD5</td>
                                        <td class="text-muted">06.03.2018</td>
                                        <td>32</td>
                                        <td class="text-right">$10,900</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <button type="button" class="btn btn-primary"><i class="mdi mdi-export mr-2"></i>Export data</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Twitter Feed</h3>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                <div class="item-action dropdown ml-2">
                                    <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>                                            
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <textarea rows="3" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                </div>
                                <button class="btn btn-primary">Tweet</button>
                                <a href="javascript:void(0);" class="float-right">13K users active</a>
                            </form>
                            <hr>
                            <ul class="right_chat list-unstyled">
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">@Matt Rosales <small class="float-right">1 hours ago</small></span>
                                                <span class="message">Contrary to popular belief, Lorem Ipsum is not simply random text</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">@Nancy Flanary <small class="float-right">45 hours ago</small></span>
                                                <span class="message">There are many variations of passages of Lorem Ipsum available, but the majority</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">@Phillip Smith <small class="float-right">1 day ago</small></span>
                                                <span class="message">It is a long established fact that a reader will be distracted</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>                        
                            </ul>                            
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
@section('js')
    <script src="assets/bundles/lib.vendor.bundle.js"></script>

    <script src="assets/bundles/counterup.bundle.js"></script>
    <script src="assets/bundles/apexcharts.bundle.js"></script>
    <script src="assets/bundles/jvectormap2.bundle.js"></script>

    <script src="assets/js/core.js"></script>
    <script src="assets/js/page/index.js"></script>
@endsection