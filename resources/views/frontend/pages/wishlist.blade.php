@extends('frontend.master')

@section('content')
<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>wishlist</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">wishlist</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!--section start-->
<section class="wishlist-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 table-responsive-xs">
                <table class="table cart-table">
                    <thead>
                        <tr class="table-head">
                            <th scope="col">image</th>
                            <th scope="col">product name</th>
                            <th scope="col">price</th>
                            <th scope="col">availability</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="#"><img src="../assets/images/pro3/1.jpg" alt=""></a>
                            </td>
                            <td><a href="#">cotton shirt</a>
                                <div class="mobile-cart-content row">
                                    <div class="col">
                                        <p>in stock</p>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color">$63.00</h2>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color"><a href="#" class="icon me-1"><i class="ti-close"></i>
                                            </a><a href="#" class="cart"><i class="ti-shopping-cart"></i></a></h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>$63.00</h2>
                            </td>
                            <td>
                                <p>in stock</p>
                            </td>
                            <td><a href="#" class="icon me-3"><i class="ti-close"></i> </a><a href="#"
                                    class="cart"><i class="ti-shopping-cart"></i></a></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>
                                <a href="#"><img src="../assets/images/pro3/27.jpg" alt=""></a>
                            </td>
                            <td><a href="#">cotton shirt</a>
                                <div class="mobile-cart-content row">
                                    <div class="col">
                                        <p>in stock</p>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color">$63.00</h2>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color"><a href="#" class="icon me-1"><i class="ti-close"></i>
                                            </a><a href="#" class="cart"><i class="ti-shopping-cart"></i></a></h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>$63.00</h2>
                            </td>
                            <td>
                                <p>in stock</p>
                            </td>
                            <td><a href="#" class="icon me-3"><i class="ti-close"></i> </a><a href="#"
                                    class="cart"><i class="ti-shopping-cart"></i></a></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>
                                <a href="#"><img src="../assets/images/pro3/35.jpg" alt=""></a>
                            </td>
                            <td><a href="#">cotton shirt</a>
                                <div class="mobile-cart-content row">
                                    <div class="col">
                                        <p>in stock</p>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color">$63.00</h2>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color"><a href="#" class="icon me-1"><i class="ti-close"></i>
                                            </a><a href="#" class="cart"><i class="ti-shopping-cart"></i></a></h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>$63.00</h2>
                            </td>
                            <td>
                                <p>in stock</p>
                            </td>
                            <td><a href="#" class="icon me-3"><i class="ti-close"></i> </a><a href="#"
                                    class="cart"><i class="ti-shopping-cart"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row wishlist-buttons">
            <div class="col-12"><a href="#" class="btn btn-solid">continue shopping</a> <a href="#"
                    class="btn btn-solid">check out</a></div>
        </div>
    </div>
</section>
<!--section end-->

@endsection
