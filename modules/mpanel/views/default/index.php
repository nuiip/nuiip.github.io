<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\bootstrap5\Html;
$this->title = 'My Admin Panel';
?>

            <!-- BEGIN : Main Content-->
            <div class="main-content">
                <div class="content-overlay"></div>
                <div class="content-wrapper">
                    <!--Statistics cards Starts-->
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <div class="card gradient-purple-love">
                                <div class="card-content">
                                    <div class="card-body py-0">
                                        <div class="media pb-1">
                                            <div class="media-body white text-left">
                                                <h3 class="font-large-1 white mb-0">$2,156</h3>
                                                <span>Total Tax</span>
                                            </div>
                                            <div class="media-right white text-right">
                                                <i class="ft-activity font-large-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <div class="card gradient-ibiza-sunset">
                                <div class="card-content">
                                    <div class="card-body py-0">
                                        <div class="media pb-1">
                                            <div class="media-body white text-left">
                                                <h3 class="font-large-1 white mb-0">$15,678</h3>
                                                <span>Total Cost</span>
                                            </div>
                                            <div class="media-right white text-right">
                                                <i class="ft-percent font-large-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Widget-line-chart1" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <div class="card gradient-mint">
                                <div class="card-content">
                                    <div class="card-body py-0">
                                        <div class="media pb-1">
                                            <div class="media-body white text-left">
                                                <h3 class="font-large-1 white mb-0">$45,668</h3>
                                                <span>Total Sales</span>
                                            </div>
                                            <div class="media-right white text-right">
                                                <i class="ft-trending-up font-large-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <div class="card gradient-king-yna">
                                <div class="card-content">
                                    <div class="card-body py-0">
                                        <div class="media pb-1">
                                            <div class="media-body white text-left">
                                                <h3 class="font-large-1 white mb-0">$32,454</h3>
                                                <span>Total Earning</span>
                                            </div>
                                            <div class="media-right white text-right">
                                                <i class="ft-credit-card font-large-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Statistics cards Ends-->

                    <!--Line with Area Chart 1 Starts-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">PRODUCTS SALES</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="chart-info mb-3 ml-3">
                                            <span class="gradient-purple-bliss d-inline-block rounded-circle mr-1" style="width:15px; height:15px;"></span>
                                            Sales
                                            <span class="gradient-mint d-inline-block rounded-circle mr-1 ml-2" style="width:15px; height:15px;"></span>
                                            Visits
                                        </div>
                                        <div id="line-area" class="height-350 lineArea">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Line with Area Chart 1 Ends-->

                    <div class="row match-height">
                        <div class="col-xl-4 col-lg-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Statistics</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="font-medium-2 text-center my-2">Last 6 Months Sales</p>
                                        <div id="Stack-bar-chart" class="height-300 Stackbarchart mb-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-12 col-12">
                            <div class="card shopping-cart">
                                <div class="card-header pb-2">
                                    <h4 class="card-title mb-1">Shopping Cart</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table text-center m-0">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Product</th>
                                                        <th>Quantity</th>
                                                        <th>Status</th>
                                                        <th>Amount</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><img class="height-50" src="../../../app-assets/img/elements/01.png" alt="Generic placeholder image" /></td>
                                                        <td>Espresso</td>
                                                        <td>1</td>
                                                        <td>
                                                            <span class="badge badge-pill bg-light-primary cursor-pointer">Active</span>
                                                        </td>
                                                        <td>$19.94</td>
                                                        <td>
                                                            <i class="ft-trash-2"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="height-50" src="../../../app-assets/img/elements/15.png" alt="Generic placeholder image" /></td>
                                                        <td>iPhone</td>
                                                        <td>2</td>
                                                        <td>
                                                            <span class="badge badge-pill bg-light-danger cursor-pointer">Disabled</span>
                                                        </td>
                                                        <td>$99.00</td>
                                                        <td>
                                                            <i class="ft-trash-2"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="height-50" src="../../../app-assets/img/elements/11.png" alt="Generic placeholder image" /></td>
                                                        <td>iMac</td>
                                                        <td>1</td>
                                                        <td>
                                                            <span class="badge badge-pill bg-light-info cursor-pointer">Paused</span>
                                                        </td>
                                                        <td>$299.00</td>
                                                        <td>
                                                            <i class="ft-trash-2"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="height-50" src="../../../app-assets/img/elements/14.png" alt="Generic placeholder image" /></td>
                                                        <td>iWatch</td>
                                                        <td>2</td>
                                                        <td>
                                                            <span class="badge badge-pill bg-light-success cursor-pointer">Active</span>
                                                        </td>
                                                        <td>$24.51</td>
                                                        <td>
                                                            <i class="ft-trash-2"></i>
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

                    <div class="row match-height">
                        <div class="col-xl-8 col-lg-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Visit & Sales Statistics</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="chart-info mb-2">
                                            <span class="text-uppercase mr-3"><i class="fa fa-circle success font-small-2 mr-1"></i> Sales</span>
                                            <span class="text-uppercase"><i class="fa fa-circle info font-small-2 mr-1"></i> Visits</span>
                                        </div>
                                        <div id="line-area2" class="height-400 lineAreaDashboard">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12 col-12">
                            <div class="card gradient-purple-bliss">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title white">Statistics</h4>
                                        <div class="p-2 text-center">
                                            <a class="white font-medium-1">Month</a>
                                            <a class="btn round bg-light-info mx-3 px-3">Week</a>
                                            <a class="white font-medium-1">Day</a>
                                        </div>
                                        <div class="my-3 text-center white">
                                            <div class="font-large-2 d-block mb-1">
                                                <span>$78.89</span>
                                                <i class="ft-arrow-up font-large-2"></i>
                                            </div>
                                            <span class="font-medium-1">Week2 +15.44</span>
                                        </div>
                                    </div>
                                    <div id="lineChart" class="height-250 lineChart lineChartShadow"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row match-height">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Statistics</h4>
                                </div>
                                <div class="card-content">

                                    <p class="font-medium-2 text-center mb-0 mt-2">Hobbies</p>
                                    <div id="bar-chart" class="height-250 BarChartShadow BarChart">
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col text-center">
                                                <span class="gradient-starfall d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                                <span class="font-medium-4 d-block mb-2">48</span>
                                                <span class="font-small-3">Sport</span>
                                            </div>
                                            <div class="col text-center">
                                                <span class="gradient-mint d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                                <span class="font-medium-4 d-block mb-2">9</span>
                                                <span class="font-small-3">Music</span>
                                            </div>
                                            <div class="col text-center">
                                                <span class="gradient-purple-bliss d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                                <span class="font-medium-4 d-block mb-2">26</span>
                                                <span class="font-small-3">Travel</span>
                                            </div>
                                            <div class="col text-center">
                                                <span class="gradient-ibiza-sunset d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                                <span class="font-medium-4 d-block mb-2">17</span>
                                                <span class="font-small-3">News</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">User List</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media pt-0 pb-2">
                                            <img class="mr-3 avatar" src="../../../app-assets/img/portrait/small/avatar-s-12.png" alt="Avatar" width="35">
                                            <div class="media-body">
                                                <h4 class="font-medium-1 mb-0">Jessica Rice</h4>
                                                <p class="text-muted font-small-3 m-0">UX Designer</p>
                                            </div>
                                            <div class="mt-1">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="dash-checkbox1" checked="">
                                                    <label for="dash-checkbox1"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media py-2">
                                            <img class="mr-3 avatar" src="../../../app-assets/img/portrait/small/avatar-s-11.png" alt="Avatar" width="35">
                                            <div class="media-body">
                                                <h4 class="font-medium-1 mb-0">Jacob Rios</h4>
                                                <p class="text-muted font-small-3 m-0">HTML Developer</p>
                                            </div>
                                            <div class="mt-1">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="dash-checkbox2">
                                                    <label for="dash-checkbox2"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media py-2">
                                            <img class="mr-3 avatar" src="../../../app-assets/img/portrait/small/avatar-s-3.png" alt="Avatar" width="35">
                                            <div class="media-body">
                                                <h4 class="font-medium-1 mb-0">Russell Delgado</h4>
                                                <p class="text-muted font-small-3 m-0">Database Designer</p>
                                            </div>
                                            <div class="mt-1">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="dash-checkbox3">
                                                    <label for="dash-checkbox3"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media py-2">
                                            <img class="mr-3 avatar" src="../../../app-assets/img/portrait/small/avatar-s-22.png" alt="Avatar" width="35">
                                            <div class="media-body">
                                                <h4 class="font-medium-1 mb-0">Sara McDonald</h4>
                                                <p class="text-muted font-small-3 m-0">Team Leader</p>
                                            </div>
                                            <div class="mt-1">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="dash-checkbox4" checked="">
                                                    <label for="dash-checkbox4"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media py-2">
                                            <img class="mr-3 avatar" src="../../../app-assets/img/portrait/small/avatar-s-18.png" alt="Avatar" width="35">
                                            <div class="media-body">
                                                <h4 class="font-medium-1 mb-0">Janet Lucas</h4>
                                                <p class="text-muted font-small-3 m-0">Project Manger</p>
                                            </div>
                                            <div class="mt-1">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="dash-checkbox5">
                                                    <label for="dash-checkbox5"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media py-2">
                                            <img class="mr-3 avatar" src="../../../app-assets/img/portrait/small/avatar-s-21.png" alt="Avatar" width="35">
                                            <div class="media-body">
                                                <h4 class="font-medium-1 mb-0">Mark Carter</h4>
                                                <p class="text-muted font-small-3 m-0">HTML Developer</p>
                                            </div>
                                            <div class="mt-1">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="dash-checkbox6" checked>
                                                    <label for="dash-checkbox6"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-2">
                                            <button type="button" class="btn bg-light-primary">Add New</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Project Stats</h4>
                                </div>
                                <div class="card-content">

                                    <p class="font-medium-2 text-center mb-0 mt-2">Project Tasks</p>
                                    <div id="donut-dashboard-chart" class="height-250 donut">
                                    </div>

                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <span class="mb-1 text-muted d-block">23% - Started</span>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 23%;" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <span class="mb-1 text-muted d-block">28% - Done</span>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col">
                                                <span class="mb-1 text-muted d-block">35% - Remaining</span>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <span class="mb-1 text-muted d-block">14% - In Progress</span>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 14%;" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END : End Main Content-->
