@extends('layouts.backend.master')

@section('content')
<div class="row">
    <div class="col-xl-3 col-sm-6">
        <div class="card overflow-hidden">
            <div class="card-header align-items-start border-0 pb-0">
                <div class="mr-auto">
                    <p class="mb-2 fs-13"><i class="fa fa-caret-up scale5 mr-2 text-success" aria-hidden="true"></i>4%(30 days)</p>
                    <h2 class="text-black mb-0 font-w600">$65,123</h2>
                </div>
                <svg width="42" height="42" viewbox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M28.5 16.5002C28.4986 14.844 27.156 13.5018 25.5003 13.5H16.5002V19.4999H25.5003C27.156 19.4985 28.4986 18.1559 28.5 16.5002Z" fill="#FFAB2D"></path>
                    <path d="M16.5002 28.5H25.5003C27.1569 28.5 28.5 27.157 28.5 25.5003C28.5 23.8432 27.1569 22.5001 25.5003 22.5001H16.5002V28.5Z" fill="#FFAB2D"></path>
                    <path d="M21 0.00012207C9.4021 0.00012207 9.15527e-05 9.40213 9.15527e-05 21C9.15527e-05 32.5979 9.4021 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9866 9.40762 32.5924 0.0133972 21 0.00012207ZM31.5002 25.4998C31.4961 28.8122 28.8122 31.4961 25.5003 31.4998V32.9998C25.5003 33.8284 24.8283 34.4999 24.0002 34.4999C23.1716 34.4999 22.5001 33.8284 22.5001 32.9998V31.4998H19.5004V32.9998C19.5004 33.8284 18.8284 34.4999 18.0003 34.4999C17.1717 34.4999 16.5002 33.8284 16.5002 32.9998V31.4998H12.0004C11.1718 31.4998 10.5003 30.8282 10.5003 30.0001C10.5003 29.1716 11.1718 28.5 12.0004 28.5H13.5V13.5H12.0004C11.1718 13.5 10.5003 12.8285 10.5003 11.9999C10.5003 11.1714 11.1718 10.4998 12.0004 10.4998H16.5002V9.00021C16.5002 8.17166 17.1717 7.50012 18.0003 7.50012C18.8288 7.50012 19.5004 8.17166 19.5004 9.00021V10.4998H22.5001V9.00021C22.5001 8.17166 23.1716 7.50012 24.0002 7.50012C24.8287 7.50012 25.5003 8.17166 25.5003 9.00021V10.4998C28.7998 10.4861 31.486 13.1494 31.5002 16.4489C31.5075 18.1962 30.7499 19.8593 29.4265 21C30.7375 22.128 31.4942 23.77 31.5002 25.4998Z" fill="#FFAB2D"></path>
                </svg>
            </div>
            <div class="card-body p-0">
                <canvas id="widgetChart" class="max-h80 mt-auto"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card overflow-hidden">
            <div class="card-header align-items-start border-0 pb-0">
                <div class="mr-auto">
                    <p class="mb-2 fs-13"><i class="fa fa-caret-down scale5 mr-2 text-danger" aria-hidden="true"></i>4%(30 days)</p>
                    <h2 class="text-black mb-0 font-w600">$65,123</h2>
                </div>
                <svg width="42" height="42" viewbox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 0.00012207C9.4021 0.00012207 9.15527e-05 9.40213 9.15527e-05 21C9.15527e-05 32.5979 9.4021 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9871 9.40762 32.5924 0.0129395 21 0.00012207ZM12.3281 19.4999H18.328C19.1566 19.4999 19.8281 20.1715 19.8281 21C19.8281 21.8286 19.1566 22.5001 18.328 22.5001H12.3281C11.4996 22.5001 10.828 21.8286 10.828 21C10.828 20.1715 11.5 19.4999 12.3281 19.4999ZM31.0841 17.3658L29.28 26.392C28.8552 28.4872 27.0155 29.9951 24.8777 30.0001H12.3281C11.4996 30.0001 10.828 29.3286 10.828 28.5C10.828 27.6715 11.5 26.9999 12.3281 26.9999H24.8777C25.5868 26.9981 26.197 26.4982 26.338 25.8033L28.1425 16.7772C28.3027 15.9715 27.7799 15.1887 26.9747 15.0285C26.8791 15.0097 26.782 15.0001 26.685 15.0001H15.3283C14.4998 15.0001 13.8282 14.3286 13.8282 13.5C13.8282 12.6715 14.4998 11.9999 15.3283 11.9999H26.685C29.1633 12.0009 31.1715 14.01 31.1711 16.4883C31.1711 16.7827 31.1418 17.0765 31.0841 17.3658Z" fill="#3693FF"></path>
                </svg>
            </div>
            <div class="card-body p-0">
                <canvas id="widgetChart2" class="max-h80 mt-auto"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card overflow-hidden">
            <div class="card-header align-items-start border-0 pb-0">
                <div class="mr-auto">
                    <p class="mb-2 fs-13"><i class="fa fa-caret-down scale5 mr-2 text-danger" aria-hidden="true"></i>4%(30 days)</p>
                    <h2 class="text-black mb-0 font-w600">$65,123</h2>
                </div>
                <svg width="42" height="42" viewbox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 0.00012207C9.4021 0.00012207 9.15527e-05 9.40213 9.15527e-05 21C9.15527e-05 32.5979 9.4021 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9871 9.40762 32.5924 0.0129395 21 0.00012207ZM26.9999 30.0001H22.5001V34.4999C22.5001 35.3285 21.8286 36 21 36C20.1714 36 19.4999 35.3285 19.4999 34.4999V30.0001H15.0001C14.1715 30.0006 13.4995 29.3295 13.4991 28.5009C13.4991 28.1599 13.6149 27.8289 13.8282 27.5625L23.8784 15.0001H15.0001C14.1715 15.0001 13.5 14.3286 13.5 13.5C13.5 12.6715 14.1715 11.9999 15.0001 11.9999H19.4999V7.50012C19.4999 6.67157 20.1714 6.00003 21 6.00003C21.8286 6.00003 22.5001 6.67203 22.5001 7.50012V11.9999H26.9999C27.8294 12.0013 28.5005 12.6747 28.4995 13.5037C28.4991 13.8429 28.3833 14.1725 28.1718 14.4375L18.1216 26.9999H26.9999C27.8285 26.9999 28.5 27.6719 28.5 28.5C28.5 29.3286 27.8285 30.0001 26.9999 30.0001Z" fill="#5B5D81"></path>
                </svg>
            </div>
            <div class="card-body p-0">
                <canvas id="widgetChart3" class="max-h80 mt-auto"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card overflow-hidden">
            <div class="card-header align-items-start border-0 pb-0">
                <div class="mr-auto">
                    <p class="mb-2 fs-13"><i class="fa fa-caret-up scale5 mr-2 text-success" aria-hidden="true"></i>4%(30 days)</p>
                    <h2 class="text-black mb-0 font-w600">$65,123</h2>
                </div>
                <svg width="42" height="42" viewbox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.5566 23.893C21.1991 24.0359 20.8009 24.0359 20.4434 23.893L16.6064 22.3582L21 31.1454L25.3936 22.3582L21.5566 23.893Z" fill="#AC4CBC"></path>
                    <path d="M21 20.8846L26.2771 18.7739L21 10.3304L15.7229 18.7739L21 20.8846Z" fill="#AC4CBC"></path>
                    <path d="M21 0.00012207C9.40213 0.00012207 0.00012207 9.40213 0.00012207 21C0.00012207 32.5979 9.40213 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9871 9.40762 32.5924 0.0129395 21 0.00012207ZM29.8417 20.171L22.3417 35.171C21.9714 35.9121 21.0701 36.2124 20.3294 35.8421C20.0387 35.697 19.8034 35.4617 19.6583 35.171L12.1583 20.171C11.9253 19.7032 11.9519 19.1479 12.2284 18.7043L19.7284 6.70453C20.2269 6.00232 21.1996 5.83661 21.9018 6.33511C22.0451 6.43674 22.1701 6.56125 22.2717 6.70453L29.7712 18.7043C30.0482 19.1479 30.0747 19.7032 29.8417 20.171Z" fill="#AC4CBC"></path>
                </svg>
            </div>
            <div class="card-body p-0">
                <canvas id="widgetChart4" class="max-h80 mt-auto"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-xxl-12">
        <div class="card">
            <div class="card-header d-block d-sm-flex border-0">
                <div>
                    <h4 class="fs-20 text-black">Market Overview</h4>
                    <p class="mb-0 fs-12">Lorem ipsum dolor sit amet, consectetur</p>
                </div>
                <div class="card-action card-tabs mt-3 mt-sm-0">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#Week" role="tab">
                                Week
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#Month" role="tab">
                                Month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#Year" role="tab">
                                Year
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body pb-0 pt-sm-3 pt-0 tab-content">
                <div class="tab-pane fade active show" id="Month">
                    <div class="row">
                        <div class="d-flex col-6 align-items-center">
                            <div class="fs-18 font-w600 mr-3">
                                <span class="text-success pr-3">BUY</span>
                                <span class="text-black pr-3">$5,673</span>
                            </div>
                            <div class="fs-18 font-w600 ml-auto">
                                <span class="text-danger pr-3">SELL</span>
                                <span class="text-black pr-3">$5,982</span>
                            </div>
                        </div>
                        <div class="col-6 text-right">
                            <a href="javascript:void(0);" class="btn btn-primary light btn-rounded"><i class="las la-download scale5 mr-2"></i>Get Report</a>
                        </div>
                    </div>
                    <div id="chartBarRunning" class="bar-chart"></div>
                </div>
                <div class="tab-pane fade" id="Week">
                    <div class="row">
                        <div class="d-flex col-6 align-items-center">
                            <div class="fs-18 font-w600 mr-3">
                                <span class="text-success pr-3">BUY</span>
                                <span class="text-black pr-3">$3,472</span>
                            </div>
                            <div class="fs-18 font-w600 ml-auto">
                                <span class="text-danger pr-3">SELL</span>
                                <span class="text-black pr-3">$6,542</span>
                            </div>
                        </div>
                        <div class="col-6 text-right">
                            <a href="javascript:void(0);" class="btn btn-primary light btn-rounded"><i class="las la-download scale5 mr-2"></i>Get Report</a>
                        </div>
                    </div>
                    <div id="chartBarRunning2" class="bar-chart"></div>
                </div>
                <div class="tab-pane fade" id="Year">
                    <div class="row">
                        <div class="d-flex col-6 align-items-center">
                            <div class="fs-18 font-w600 mr-3">
                                <span class="text-success pr-3">BUY</span>
                                <span class="text-black pr-3">$1,343</span>
                            </div>
                            <div class="fs-18 font-w600 ml-auto">
                                <span class="text-danger pr-3">SELL</span>
                                <span class="text-black pr-3">$3,482</span>
                            </div>
                        </div>
                        <div class="col-6 text-right">
                            <a href="javascript:void(0);" class="btn btn-primary light btn-rounded"><i class="las la-download scale5 mr-2"></i>Get Report</a>
                        </div>
                    </div>
                    <div id="chartBarRunning3" class="bar-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-xxl-12">
        <div class="card">
            <div class="card-header d-sm-flex d-block pb-0 border-0">
                <div>
                    <h4 class="fs-20 text-black">Crypto Statistics</h4>
                    <p class="mb-0 fs-12">Lorem ipsum dolor sit amet, consectetur</p>
                </div>
                <div class="d-flex mt-sm-0 mt-3">
                    <div class="custom-control custom-switch toggle-switch text-right mr-4 mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch11">
                        <label class="custom-control-label fs-14 text-black pr-2" for="customSwitch11">Date</label>
                    </div>
                    <div class="custom-control custom-switch toggle-switch text-right mr-4 mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch12">
                        <label class="custom-control-label fs-14 text-black pr-2" for="customSwitch12">Value</label>
                    </div>
                </div>
            </div>
            <div class="card-body pb-0">
                <div class="d-flex flex-wrap">
                    <div class="custom-control check-switch custom-checkbox mr-4 mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck9">
                        <label class="custom-control-label" for="customCheck9">
                            <span class="d-block text-black font-w500">Bitcoin</span>
                            <span class="fs-12">BTC</span>
                        </label>
                    </div>
                    <div class="custom-control check-switch custom-checkbox mr-4 mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck91">
                        <label class="custom-control-label" for="customCheck91">
                            <span class="d-block text-black font-w500">Ripple</span>
                            <span class="fs-12">XRP</span>
                        </label>
                    </div>
                    <div class="custom-control check-switch custom-checkbox mr-4 mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck92">
                        <label class="custom-control-label" for="customCheck92">
                            <span class="d-block text-black font-w500">Ethereum</span>
                            <span class="fs-12">ETH</span>
                        </label>
                    </div>
                    <div class="custom-control check-switch custom-checkbox mr-4 mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck93">
                        <label class="custom-control-label" for="customCheck93">
                            <span class="d-block text-black font-w500">Zcash</span>
                            <span class="fs-12">ZEC</span>
                        </label>
                    </div>
                    <div class="custom-control check-switch custom-checkbox mr-4 mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck94">
                        <label class="custom-control-label" for="customCheck94">
                            <span class="d-block text-black font-w500">LiteCoin</span>
                            <span class="fs-12">LTC</span>
                        </label>
                    </div>
                </div>
                <div id="lineChart"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-xxl-12">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-sm-flex d-block pb-0 border-0">
                        <div>
                            <h4 class="fs-20 text-black">Quick Transfer</h4>
                            <p class="mb-0 fs-12">Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                        <div class="dropdown custom-dropdown d-block mt-3 mt-sm-0 mb-0">
                            <div class="btn btn-rounded border border-secondary btn-sm d-flex svg-btn align-items-center" role="button" data-toggle="dropdown" aria-expanded="false">
                                <svg width="42" height="42" viewbox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.5566 23.8931C21.1991 24.0359 20.8009 24.0359 20.4434 23.8931L16.6064 22.3582L21 31.1454L25.3936 22.3582L21.5566 23.8931Z" fill="#AC4CBC"></path>
                                    <path d="M21 20.8846L26.2771 18.7739L21 10.3304L15.7229 18.7739L21 20.8846Z" fill="#AC4CBC"></path>
                                    <path d="M21 9.15527e-05C9.4021 9.15527e-05 9.15527e-05 9.4021 9.15527e-05 21C9.15527e-05 32.5979 9.4021 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9871 9.40759 32.5924 0.0129089 21 9.15527e-05ZM29.8417 20.171L22.3417 35.171C21.9714 35.9121 21.07 36.2124 20.3294 35.8421C20.0387 35.697 19.8034 35.4617 19.6583 35.171L12.1583 20.171C11.9253 19.7032 11.9518 19.1479 12.2283 18.7043L19.7283 6.7045C20.2268 6.00229 21.1996 5.83658 21.9018 6.33508C22.0451 6.43671 22.17 6.56122 22.2717 6.7045L29.7712 18.7043C30.0482 19.1479 30.0747 19.7032 29.8417 20.171Z" fill="#AC4CBC"></path>
                                </svg>
                                <div class="text-left mr-3 ml-3">
                                    <span class="d-block fs-16 text-black">23,511 ETH</span>
                                </div>
                                <i class="fa fa-angle-down scale5 mr-3 ml-3"></i>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0);">345,455 ETH</a>
                                <a class="dropdown-item" href="javascript:void(0);">789,123 ETH</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex mb-3 justify-content-between align-items-center">
                            <h4 class="text-black fs-20 mb-0">Recent Contacts</h4>
                            <a href="javascript:void(0);" class="btn-link">View more</a>
                        </div>
                        <div class="testimonial-one px-4 owl-right-nav owl-carousel owl-loaded owl-drag">
                            <div class="items">
                                <div class="text-center">
                                    <img class="mb-3 rounded" src="images/contacts/1.jpg" alt="">
                                    <h5 class="text-black mb-0">Samuel</h5>
                                    <span class="fs-12">@sam224</span>
                                </div>
                            </div>
                            <div class="items">
                                <div class="text-center">
                                    <img class="mb-3 rounded" src="images/contacts/2.jpg" alt="">
                                    <h5 class="text-black mb-0">Cindy</h5>
                                    <span class="fs-12">@cindyss</span>
                                </div>
                            </div>
                            <div class="items">
                                <div class="text-center">
                                    <img class="mb-3 rounded" src="images/contacts/3.jpg" alt="">
                                    <h5 class="text-black mb-0">David</h5>
                                    <span class="fs-12">@davidxc</span>
                                </div>
                            </div>
                            <div class="items">
                                <div class="text-center">
                                    <img class="mb-3 rounded" src="images/contacts/4.jpg" alt="">
                                    <h5 class="text-black mb-0">Martha</h5>
                                    <span class="fs-12">@marthaa</span>
                                </div>
                            </div>
                            <div class="items">
                                <div class="text-center">
                                    <img class="mb-3 rounded" src="images/contacts/5.jpg" alt="">
                                    <h5 class="text-black mb-0">Olivia</h5>
                                    <span class="fs-12">@oliv62</span>
                                </div>
                            </div>
                        </div>
                        <div class="amount-bx">
                            <label>Amount ETH</label>
                            <input type="number" class="form-control" placeholder="8,621.22">
                        </div>
                        <a href="javascript:(0);" class="btn btn-primary d-block btn-lg text-uppercase">Send Money</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-xxl-12">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h4 class="mb-0 text-black fs-20">Sell Order</h4>
                        <div class="dropdown ml-auto">
                            <div class="btn-link" data-toggle="dropdown">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="dropdown custom-dropdown d-block">
                            <div class="btn  d-flex align-items-center border-0 order-bg rounded " data-toggle="dropdown">
                                <svg width="42" height="42" viewbox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 9.15527e-05C9.4021 9.15527e-05 9.15527e-05 9.4021 9.15527e-05 21C9.15527e-05 32.5979 9.4021 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9871 9.40759 32.5924 0.0129089 21 9.15527e-05ZM12.3281 19.4999H18.328C19.1566 19.4999 19.8281 20.1714 19.8281 21C19.8281 21.8286 19.1566 22.5001 18.328 22.5001H12.3281C11.4996 22.5001 10.828 21.8286 10.828 21C10.828 20.1714 11.5 19.4999 12.3281 19.4999ZM31.0841 17.3658L29.28 26.392C28.8552 28.4872 27.0155 29.9951 24.8777 30.0001H12.3281C11.4996 30.0001 10.828 29.3286 10.828 28.5C10.828 27.6714 11.5 26.9999 12.3281 26.9999H24.8777C25.5868 26.9981 26.197 26.4982 26.338 25.8033L28.1425 16.7771C28.3027 15.9715 27.7799 15.1887 26.9747 15.0285C26.8791 15.0097 26.782 15.0001 26.685 15.0001H15.3283C14.4998 15.0001 13.8282 14.3286 13.8282 13.5C13.8282 12.6714 14.4998 11.9999 15.3283 11.9999H26.685C29.1633 12.0008 31.1715 14.0099 31.1711 16.4883C31.1711 16.7826 31.1418 17.0765 31.0841 17.3658Z" fill="#3693FF"></path>
                                </svg>
                                <div class="text-left ml-3">
                                    <span class="d-block fs-16 text-black">Dash Coin</span>
                                </div>
                                <i class="fa fa-angle-down scale5 ml-auto"></i>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0);">Bitcoin</a>
                                <a class="dropdown-item" href="javascript:void(0);">ETH coin</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-center bg-info-hover tr-rounded">
                                <thead>
                                    <tr>
                                        <th class="text-left">Price</th>
                                        <th class="text-center">Amount</th>
                                        <th class="text-right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left">82.3</td>
                                        <td>0.15</td>
                                        <td class="text-right">$134,12</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">83.9</td>
                                        <td>0.18</td>
                                        <td class="text-right">$237,31</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">84.2</td>
                                        <td>0.25</td>
                                        <td class="text-right">$252,58</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">86.2</td>
                                        <td>0.35</td>
                                        <td class="text-right">$126,26</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">91.6</td>
                                        <td>0.75</td>
                                        <td class="text-right">$46,92</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">92.6</td>
                                        <td>0.21</td>
                                        <td class="text-right">$123,27</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">93.9</td>
                                        <td>0.55</td>
                                        <td class="text-right">$212,56</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">94.2</td>
                                        <td>0.18</td>
                                        <td class="text-right">$129,26</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer border-0 pt-0 text-center">
                        <a href="coin-details.html" class="btn-link">Show more <i class="fa fa-caret-right ml-2 scale-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h4 class="mb-0 text-black fs-20">Buy Order</h4>
                        <div class="dropdown ml-auto">
                            <div class="btn-link" data-toggle="dropdown">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="dropdown custom-dropdown d-block">
                            <div class="btn  d-flex align-items-center order-bg border-0 rounded" data-toggle="dropdown">
                                <svg width="42" height="42" viewbox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M28.5 16.5002C28.4986 14.844 27.156 13.5018 25.5003 13.5H16.5002V19.4999H25.5003C27.156 19.4985 28.4986 18.1559 28.5 16.5002Z" fill="#FFAB2D"></path>
                                    <path d="M16.5002 28.5H25.5003C27.1569 28.5 28.5 27.1569 28.5 25.5003C28.5 23.8432 27.1569 22.5001 25.5003 22.5001H16.5002V28.5Z" fill="#FFAB2D"></path>
                                    <path d="M21 9.15527e-05C9.40213 9.15527e-05 0.00012207 9.4021 0.00012207 21C0.00012207 32.5979 9.40213 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9867 9.40759 32.5924 0.0133667 21 9.15527e-05ZM31.5002 25.4998C31.4961 28.8122 28.8122 31.4961 25.5003 31.4997V32.9998C25.5003 33.8284 24.8283 34.4999 24.0002 34.4999C23.1717 34.4999 22.5001 33.8284 22.5001 32.9998V31.4997H19.5004V32.9998C19.5004 33.8284 18.8284 34.4999 18.0003 34.4999C17.1718 34.4999 16.5002 33.8284 16.5002 32.9998V31.4997H12.0004C11.1718 31.4997 10.5003 30.8282 10.5003 30.0001C10.5003 29.1715 11.1718 28.5 12.0004 28.5H13.5V13.5H12.0004C11.1718 13.5 10.5003 12.8285 10.5003 11.9999C10.5003 11.1714 11.1718 10.4998 12.0004 10.4998H16.5002V9.00018C16.5002 8.17163 17.1718 7.50009 18.0003 7.50009C18.8289 7.50009 19.5004 8.17163 19.5004 9.00018V10.4998H22.5001V9.00018C22.5001 8.17163 23.1717 7.50009 24.0002 7.50009C24.8288 7.50009 25.5003 8.17163 25.5003 9.00018V10.4998C28.7999 10.4861 31.486 13.1494 31.5002 16.4489C31.5075 18.1962 30.7499 19.8593 29.4265 21C30.7376 22.1279 31.4943 23.7699 31.5002 25.4998Z" fill="#FFAB2D"></path>
                                </svg>
                                <div class="text-left ml-3">
                                    <span class="d-block fs-16 text-black">Bitcoin</span>
                                </div>
                                <i class="fa fa-angle-down scale5 ml-auto"></i>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0);">Dash coin</a>
                                <a class="dropdown-item" href="javascript:void(0);">ETH coin</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-center bg-warning-hover tr-rounded">
                                <thead>
                                    <tr>
                                        <th class="text-left">Price</th>
                                        <th class="text-center">Amount</th>
                                        <th class="text-right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left">82.3</td>
                                        <td>0.15</td>
                                        <td class="text-right">$134,12</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">83.9</td>
                                        <td>0.18</td>
                                        <td class="text-right">$237,31</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">84.2</td>
                                        <td>0.25</td>
                                        <td class="text-right">$252,58</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">86.2</td>
                                        <td>0.35</td>
                                        <td class="text-right">$126,26</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">91.6</td>
                                        <td>0.75</td>
                                        <td class="text-right">$46,92</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">92.6</td>
                                        <td>0.21</td>
                                        <td class="text-right">$123,27</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">93.9</td>
                                        <td>0.55</td>
                                        <td class="text-right">$212,56</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">94.2</td>
                                        <td>0.18</td>
                                        <td class="text-right">$129,26</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer border-0 pt-0 text-center">
                        <a href="coin-details.html" class="btn-link">Show more <i class="fa fa-caret-right ml-2 scale-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
