<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Manage Users</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <link href="{{ url('assets/css/style.css') }}" rel="stylesheet" />
        <script src="{{ url('assets/js/chart.js') }}"></script>
        <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
        <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
        <link rel="stylesheet" href="{{url('fontawesome/css/all.min.css')}}" />
    </head>
    <body>
        <div class="container">
            <div class="container">
                <div class="container mb-4">
                    <div class="row">
                        <div class="col-lg-2 mt-5">
                            <button id="backButton" class="back-button"><i class="fas fa-arrow-left"></i></button>
                        </div>
                        <div class="col-lg-8 d-flex justify-content-center mt-5">
                            <h3 style="color: #fff;">Your Businesses</h3>
                        </div>
                        <div class="col-lg-2 d-flex justify-content-end mt-5">
                            <a href="{{url('admin/businesses/edit')}}">
                                <button id="editBusiness" class="editBusiness"><i class="fa-regular fa-pen-to-square"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-4 000">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <div class="container businessesCard ps-3 pb-3 pt-1">
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-lg-7 d-flex align-items-center">
                                                <p style="color: #000; margin: 0; font-weight: bold;">UdDesign</p>
                                            </div>
                                            <div class="col-lg-5 d-flex justify-content-center align-items-center">
                                                <img src="/images/uddesign.png" alt="kuwago" class="uddesignLogo" />
                                            </div>
                                            <hr style="width: 100%; height: 2px; background-color: #000; border: none;" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-10 d-flex justify-content-center">
                                            <img src="/images/kuwago1.jpg" alt="kuwago" class="businessKuwago" />
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 mt-3">
                                            <p style="color: #000; font-weight: bold; font-size: 15px;">Year Established: <span style="font-size: 15px; font-weight:200;">2000</span></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="color: #000; font-weight: bold; font-size: 15px;">Business Type:<span style="font-size: 15px; font-weight:200; padding-left:5px">Merchant Company</span></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="color: #000; font-weight: bold; font-size: 15px;">Location:</p>
                                            <p style="color: #000; font-size: 15px; font-size: 13px;">2F LCA Bldg., Universidad de Dagupan, Arellano St., Dagupan, Pangasinan</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="color: #000; font-weight: bold; font-size: 15px;">Description</p>
                                        </div>
                                    </div>

                                    <div class="row businessIndexDesc">
                                        <div class="col-lg-12">
                                            {{-- SAMPLE TEXT --}}
                                            <p style="color: #000; font-size: 13px;">
                                                Download the perfect office background pictures. Find over 100+ of the best free office background images. Free for commercial use ✓ No attribution required ...
                                            </p>
                                            <p style="color: #000; font-size: 13px;">
                                                Download the perfect office background pictures. Find over 100+ of the best free office background images. Free for commercial use ✓ No attribution required ...
                                            </p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                    </div>

                    <div class="col-lg-4 000">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <div class="container businessesCard ps-3 pb-3 pt-1">
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-lg-7 d-flex align-items-center">
                                                <p style="color: #000; margin: 0; font-weight: bold;">UdDesign</p>
                                            </div>
                                            <div class="col-lg-5 d-flex justify-content-center align-items-center">
                                                <img src="/images/uddesign.png" alt="kuwago" class="uddesignLogo" />
                                            </div>
                                            <hr style="width: 100%; height: 2px; background-color: #000; border: none;" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-10 d-flex justify-content-center">
                                            <img src="/images/kuwago1.jpg" alt="kuwago" class="businessKuwago" />
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 mt-3">
                                            <p style="color: #000; font-weight: bold; font-size: 15px;">Year Established: <span style="font-size: 15px; font-weight:200;">2000</span></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="color: #000; font-weight: bold; font-size: 15px;">Business Type:<span style="font-size: 15px; font-weight:200; padding-left:5px">Merchant Company</span></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="color: #000; font-weight: bold; font-size: 15px;">Location:</p>
                                            <p style="color: #000; font-size: 15px; font-size: 13px;">2F LCA Bldg., Universidad de Dagupan, Arellano St., Dagupan, Pangasinan</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="color: #000; font-weight: bold; font-size: 15px;">Description</p>
                                        </div>
                                    </div>

                                    <div class="row businessIndexDesc">
                                        <div class="col-lg-12">
                                            {{-- SAMPLE TEXT --}}
                                            <p style="color: #000; font-size: 13px;">
                                                Download the perfect office background pictures. Find over 100+ of the best free office background images. Free for commercial use ✓ No attribution required ...
                                            </p>
                                            <p style="color: #000; font-size: 13px;">
                                                Download the perfect office background pictures. Find over 100+ of the best free office background images. Free for commercial use ✓ No attribution required ...
                                            </p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                    </div>

                    <div class="col-lg-4 000">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <div class="container businessesCard ps-3 pb-3 pt-1">
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-lg-7 d-flex align-items-center">
                                                <p style="color: #000; margin: 0; font-weight: bold;">UdDesign</p>
                                            </div>
                                            <div class="col-lg-5 d-flex justify-content-center align-items-center">
                                                <img src="/images/uddesign.png" alt="kuwago" class="uddesignLogo" />
                                            </div>
                                            <hr style="width: 100%; height: 2px; background-color: #000; border: none;" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-10 d-flex justify-content-center">
                                            <img src="/images/kuwago1.jpg" alt="kuwago" class="businessKuwago" />
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 mt-3">
                                            <p style="color: #000; font-weight: bold; font-size: 15px;">Year Established: <span style="font-size: 15px; font-weight:200;">2000</span></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="color: #000; font-weight: bold; font-size: 15px;">Business Type:<span style="font-size: 15px; font-weight:200; padding-left:5px">Merchant Company</span></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="color: #000; font-weight: bold; font-size: 15px;">Location:</p>
                                            <p style="color: #000; font-size: 15px; font-size: 13px;">2F LCA Bldg., Universidad de Dagupan, Arellano St., Dagupan, Pangasinan</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="color: #000; font-weight: bold; font-size: 15px;">Description</p>
                                        </div>
                                    </div>

                                    <div class="row businessIndexDesc">
                                        <div class="col-lg-12">
                                            {{-- SAMPLE TEXT --}}
                                            <p style="color: #000; font-size: 13px;">
                                                Download the perfect office background pictures. Find over 100+ of the best free office background images. Free for commercial use ✓ No attribution required ...
                                            </p>
                                            <p style="color: #000; font-size: 13px;">
                                                Download the perfect office background pictures. Find over 100+ of the best free office background images. Free for commercial use ✓ No attribution required ...
                                            </p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
