@extends('frontend.master')

@section('content')
<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>look book</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">look book</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!-- section start -->
<section class="lookbook section-b-space ratio_square">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="lookbook-block">
                    <div>
                        <img src="../assets/images/lookbook.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                    </div>
                    <div class="lookbook-dot"><span>1</span>
                        <a href="#">
                            <div class="dot-showbox"><img src="../assets/images/pro3/2.jpg"
                                    class="img-fluid blur-up lazyload" alt="">
                                <div class="dot-info">
                                    <h5 class="title">tee</h5>
                                    <h5>200$</h5>
                                    <h6>details</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="lookbook-dot dot2"><span>2</span>
                        <a href="#">
                            <div class="dot-showbox"><img src="../assets/images/pro3/1.jpg"
                                    class="img-fluid blur-up lazyload " alt="">
                                <div class="dot-info">
                                    <h5 class="title">tee</h5>
                                    <h5>200$</h5>
                                    <h6>details</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="lookbook-block">
                    <div>
                        <img src="../assets/images/lookbook2.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                    </div>
                    <div class="lookbook-dot dot3"><span>1</span>
                        <a href="#">
                            <div class="dot-showbox"><img src="../assets/images/pro3/27.jpg"
                                    class="img-fluid blur-up lazyload" alt="">
                                <div class="dot-info">
                                    <h5 class="title">tee</h5>
                                    <h5>200$</h5>
                                    <h6>details</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="lookbook-dot dot4"><span>2</span>
                        <a href="#">
                            <div class="dot-showbox"><img src="../assets/images/pro3/28.jpg"
                                    class="img-fluid blur-up lazyload" alt="">
                                <div class="dot-info">
                                    <h5 class="title">tee</h5>
                                    <h5>200$</h5>
                                    <h6>details</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->


@endsection
