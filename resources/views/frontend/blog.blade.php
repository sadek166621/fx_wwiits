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
                <h3 class="page-banner-heading text-white pb-15">Blogs</h3>

                <!-- Breadcrumb Start-->
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item font-14"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item font-14 active" aria-current="page">Blog</li>
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

    <!-- Course Single Details Area Start -->
    <section class="blog-page-area section-t-space">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-7 col-lg-8">

            <div class="blog-page-left-content">

              <div class="no-course-found text-center">
                <img src="{{ asset('frontend') }}/css/img/empty-data-img.png" alt="img" class="img-fluid">
                <h5 class="mt-3">Blog Not Found</h5>
              </div>
              <div class="col-12">
                <!-- Pagination Start -->
                <!-- Pagination End -->
              </div>

            </div>

          </div>
          <div class="col-12 col-md-5 col-lg-4">
            <div class="blog-page-right-content bg-white">

              <div class="blog-sidebar-box">
                <form class="blog-sidebar-search-box position-relative">
                  <div class="input-group">
                    <input class="form-control border-0 searchBlog" type="search" placeholder="Search...">
                    <button class="bg-transparent border-0"><span class="iconify"
                        data-icon="akar-icons:search"></span></button>
                  </div>

                  <!-- Search Bar Suggestion Box Start -->
                  <div class="search-bar-suggestion-box searchBlogBox d-none custom-scrollbar">
                    <ul class="appendBlogSearchList">

                    </ul>
                  </div>
                  <!-- Search Bar Suggestion Box End -->

                </form>
              </div>

              <div class="blog-sidebar-box">
                <h6 class="blog-sidebar-box-title">Recent Blogs</h6>
                <ul class="popular-posts">
                </ul>
              </div>

              <div class="blog-sidebar-box">
                <h6 class="blog-sidebar-box-title">Categories</h6>
                <ul class="blog-sidebar-categories">
                  <li><a href="#" class="font-15">Development (0)</a></li>
                  <li><a href="#" class="font-15">Soft Skills (0)</a></li>
                  <li><a href="#" class="font-15">Business (0)</a></li>
                  <li><a href="#" class="font-15">Marketing (0)</a></li>
                  <li><a href="#" class="font-15">Lead Generation (0)</a></li>
                </ul>
              </div>

              <div class="blog-sidebar-box">
                <h6 class="blog-sidebar-box-title">Tags</h6>
                <ul class="blog-sidebar-tags">
                  <li><a href="#">Photo Editing</a></li>
                  <li><a href="#">Video Editing</a></li>
                  <li><a href="#">Social Marketing</a></li>
                  <li><a href="#">Data Entry</a></li>
                  <li><a href="#">Graphic Design</a></li>
                  <li><a href="#">Learn Al Quran</a></li>
                </ul>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Course Single Details Area End -->

  </div>
@endsection
