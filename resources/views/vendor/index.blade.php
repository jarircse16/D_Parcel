@extends('vendor.app')

@section('content')
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->


                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">

                            <!-- Vendor Food Orders row -->
                            <hr class="vendor-seperate">
                            <div class="row">
                                <h4 class="vendor-title">Vendor Dashboard</h4>

                                <div class="col-lg-3 col-md-6 col-6 mb-4">
                                    <a href="{{ route('delivery.create') }}" style="color: black">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <i class='vendor-icon bx bx-car'></i>
                                                    </div>
                                                </div>

                                                <span class="fw-semibold d-block mb-1">Add New Delivery</span>

                                                
                                                <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> -->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                
                                <div class="col-lg-3 col-md-6 col-6 mb-4">
                                    <a href="{{ route('delivery.index') }}" style="color: black">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <i class='vendor-icon bx bx-notepad'></i>
                                                </div>
                                            </div>
                                            
                                                <span class="fw-semibold d-block mb-1">Pending Deliveries</span>
                                            
                                            <h3 class="card-title mb-2">{{ $p_deliveries->count() }}</h3>

                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6 mb-4">
                                    <a href="{{ route('delivery.index') }}" style="color: black">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <i class='vendor-icon bx bx-cube-alt'></i>
                                                </div>
                                            </div>
                                            
                                                <span class="fw-semibold d-block mb-1">Pending Pickup</span>
                                           
                                            <h3 class="card-title mb-2">{{ $pickup->count() }}</h3>

                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6 mb-4">
                                    <a href="{{ route('delivery.index') }}" style="color: black">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <i class='vendor-icon bx bx-check'></i>
                                                </div>
                                            </div>
                                           
                                                <span class="fw-semibold d-block mb-1">Processing Deliveries</span>
                                           
                                            <h3 class="card-title text-nowrap mb-1">{{ $processing->count() }}</h3>

                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6 mb-4">
                                    <a href="{{ route('delivery.index') }}" style="color: black">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <i class='vendor-icon bx bx-car'></i>
                                                    </div>
                                                </div>

                                                <span class="fw-semibold d-block mb-1">Completed Deliveries</span>

                                                <h3 class="card-title text-nowrap mb-1">
                                                    {{ $c_delivery->count() }}
                                                </h3>
                                                <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> -->
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            

                            </div>
                            <hr class="vendor-seperate">


                            <div class="content-backdrop fade"></div>
                        </div>
                        <!-- Content wrapper -->
                    </div>
                    <!-- / Layout page -->
                </div>

                <!-- Overlay -->
                <div class="layout-overlay layout-menu-toggle"></div>
            </div>
            <!-- / Layout wrapper -->
        </div>
    </div>
@endsection
