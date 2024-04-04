@extends('frontend.master')
@section('content')
<div class="bg-page">
    <!-- Page Header Start -->
    <header class="page-banner-header gradient-bg position-relative">
        <div class="section-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="page-banner-content text-center">
                            <h3 class="page-banner-heading text-white pb-15">Validate Certificate</h3>

                            <!-- Breadcrumb Start-->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item font-14"><a class="text-decoration-none" href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item font-14 active" aria-current="page">Validate
                                        Certificate</li>
                                </ol>
                            </nav>
                            <!-- Breadcrumb End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Header End -->

    <!-- Certificate Verification Page Area Start -->
    <section class="certificate-verification-page-area section-t-space">
        <div class="container">
            <div class="certificate-verification-wrap bg-white p-30 radius-4">

                <div class="certificate-verify-top">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="certificate-verify-top-left">
                                <img src="./css/img/verify-certificate-img.jpg"
                                    alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="certificate-check-form">
                                <div class="form-vertical__item bg-style">
                                    <div class="item-top mb-3">
                                        <h3 class="font-24">Certificate Varification</h3>
                                        <p class="pt-3">To validate certificates please enter the certificate id in
                                            this input field
                                            and click on validate button.</p>
                                    </div>
                                    <form id="certificate-form">
                                        <input type="hidden" name="_token"
                                            value="iQXC3IF3GimfSI20ANWnvy8fUD6fVbgDXdPf6DUf">
                                        <div class="input__group mb-25">
                                            <label class="label-text-title color-heading" for="certificate_number">
                                                Certificate ID </label>
                                            <input type="text" name="certificate_number"
                                                class="form-control flat-input"
                                                placeholder=" Enter certificate ID ">
                                        </div>
                                        <div class="input__group mb-25">
                                            <button type="submit" id="check-certificate"
                                                class="theme-btn default-hover-btn theme-button1">Verify
                                                Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="certificate-verify-result-box" id="verified-data">
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Main Content End-->
@endsection
