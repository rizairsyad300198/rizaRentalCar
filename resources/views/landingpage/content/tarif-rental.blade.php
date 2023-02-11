<!-- Feature Course -->
<section class="section new-course" id="tarifRental">
    <div class="container">
        <div class="section-header aos" data-aos="fade-up">
            <div class="section-sub-head">
                <h2>Tarif Harga Sewa</h2>
            </div>
        </div>
        <div class="section-text aos" data-aos="fade-up">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
        </div>
        <div class="course-feature">
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="course-box d-flex aos" data-aos="fade-up">
                        <div class="product">
                            <div class="product-img">
                                <a href="{{ url ('/checkout') }}">
                                    <img class="img-fluid" alt="" src="{{ url ('frontend/assets/img/course/course-01.jpg') }}">
                                </a>
                                <div class="price combo">
                                    <h3>Rp. 300.000</h3>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="course-group d-flex">
                                    <div class="course-group-img d-flex">
                                        <div class="course-name justify-content-center">
                                            <h4><a href="{{ url ('/checkout') }}">Nama Mobil</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="title instructor-text"><a href="course-details.html">Deskripsi</a></h3>
                                <div class="course-info d-flex align-items-center">
                                    <div class="rating-img d-flex align-items-center">
                                        <img src="{{ url ('frontend/assets/img/icon/icon-01.svg') }}" alt="">
                                        <p>Tersedia</p>
                                    </div>
                                </div>
                                <div class="all-btn all-category d-flex align-items-center">
                                    <a href="{{ url ('/checkout') }}" class="btn btn-primary">BOOKING SEKARANG</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 d-flex">
                    <div class="course-box d-flex aos" data-aos="fade-up">
                        <div class="product">
                            <div class="product-img">
                                <a href="course-details.html">
                                    <img class="img-fluid" alt="" src="{{ url ('frontend/assets/img/course/course-02.jpg') }}">
                                </a>
                                <div class="price">
                                    <h3>$400</h3>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="course-group d-flex">
                                    <div class="course-group-img d-flex">
                                        <a href="instructor-profile.html"><img src="{{ url ('frontend/assets/img/user/user2.jpg') }}" alt="" class="img-fluid"></a>
                                        <div class="course-name">
                                            <h4><a href="instructor-profile.html">Jenis R.</a></h4>
                                            <p>Instructor</p>
                                        </div>
                                    </div>
                                    <div class="course-share d-flex align-items-center justify-content-center">
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <h3 class="title instructor-text"><a href="course-details.html">Wordpress for Beginners - Master Wordpress Quickly</a></h3>
                                <div class="course-info d-flex align-items-center">
                                    <div class="rating-img d-flex align-items-center">
                                        <img src="{{ url ('frontend/assets/img/icon/icon-01.svg') }}" alt="">
                                        <p>11+ Lesson</p>
                                    </div>
                                    <div class="course-view d-flex align-items-center">
                                        <img src="{{ url ('frontend/assets/img/icon/icon-02.svg') }}" alt="">
                                        <p>6hr 30min</p>
                                    </div>
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating"><span>4.3</span> (15)</span>
                                </div>
                                <div class="all-btn all-category d-flex align-items-center">
                                    <a href="checkout.html" class="btn btn-primary">BOOKING SEKARANG</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="course-box d-flex aos" data-aos="fade-up">
                        <div class="product">
                            <div class="product-img">
                                <a href="course-details.html">
                                    <img class="img-fluid" alt="" src="{{ url ('frontend/assets/img/course/course-03.jpg') }}">
                                </a>
                                <div class="price combo">
                                    <h3>FREE</h3>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="course-group d-flex">
                                    <div class="course-group-img d-flex">
                                        <a href="instructor-profile.html"><img src="{{ url ('frontend/assets/img/user/user5.jpg') }}" alt="" class="img-fluid"></a>
                                        <div class="course-name">
                                            <h4><a href="instructor-profile.html">Jesse Stevens</a></h4>
                                            <p>Instructor</p>
                                        </div>
                                    </div>
                                    <div class="course-share d-flex align-items-center justify-content-center">
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <h3 class="title instructor-text"><a href="course-details.html">Sketch from A to Z (2022): Become an app designer</a></h3>
                                <div class="course-info d-flex align-items-center">
                                    <div class="rating-img d-flex align-items-center">
                                        <img src="{{ url ('frontend/assets/img/icon/icon-01.svg') }}" alt="">
                                        <p>16+ Lesson</p>
                                    </div>
                                    <div class="course-view d-flex align-items-center">
                                        <img src="{{ url ('frontend/assets/img/icon/icon-02.svg') }}" alt="">
                                        <p>12hr 30min</p>
                                    </div>
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating"><span>4.5</span> (15)</span>
                                </div>
                                <div class="all-btn all-category d-flex align-items-center">
                                    <a href="checkout.html" class="btn btn-primary">BOOKING SEKARANG</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="course-box d-flex aos" data-aos="fade-up">
                        <div class="product">
                            <div class="product-img">
                                <a href="course-details.html">
                                    <img class="img-fluid" alt="" src="{{ url ('frontend/assets/img/course/course-04.jpg') }}">
                                </a>
                                <div class="price">
                                    <h3>$500 <span>$99.00</span></h3>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="course-group d-flex">
                                    <div class="course-group-img d-flex">
                                        <a href="instructor-profile.html"><img src="{{ url ('frontend/assets/img/user/user4.jpg') }}" alt="" class="img-fluid"></a>
                                        <div class="course-name">
                                            <h4><a href="instructor-profile.html">Nicole Brown</a></h4>
                                            <p>Instructor</p>
                                        </div>
                                    </div>
                                    <div class="course-share d-flex align-items-center justify-content-center">
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <h3 class="title instructor-text"><a href="course-details.html">Learn Angular Fundamentals From beginning to advance lavel</a></h3>
                                <div class="course-info d-flex align-items-center">
                                    <div class="rating-img d-flex align-items-center">
                                        <img src="{{ url ('frontend/assets/img/icon/icon-01.svg') }}" alt="">
                                        <p>10+ Lesson</p>
                                    </div>
                                    <div class="course-view d-flex align-items-center">
                                        <img src="{{ url ('frontend/assets/img/icon/icon-02.svg') }}" alt="">
                                        <p>8hr 30min</p>
                                    </div>
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating"><span>4.2</span> (15)</span>
                                </div>
                                <div class="all-btn all-category d-flex align-items-center">
                                    <a href="checkout.html" class="btn btn-primary">BOOKING SEKARANG</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="course-box d-flex aos" data-aos="fade-up">
                        <div class="product">
                            <div class="product-img">
                                <a href="course-details.html">
                                    <img class="img-fluid" alt="" src="{{ url ('frontend/assets/img/course/course-05.jpg') }}">
                                </a>
                                <div class="price">
                                    <h3>$300 <span>$99.00</span></h3>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="course-group d-flex">
                                    <div class="course-group-img d-flex">
                                        <a href="instructor-profile.html"><img src="{{ url ('frontend/assets/img/user/user3.jpg') }}" alt="" class="img-fluid"></a>
                                        <div class="course-name">
                                            <h4><a href="instructor-profile.html">John Smith</a></h4>
                                            <p>Instructor</p>
                                        </div>
                                    </div>
                                    <div class="course-share d-flex align-items-center justify-content-center">
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <h3 class="title instructor-text"><a href="course-details.html">Build Responsive Real World Websites with HTML5 and CSS3</a></h3>
                                <div class="course-info d-flex align-items-center">
                                    <div class="rating-img d-flex align-items-center">
                                        <img src="{{ url ('frontend/assets/img/icon/icon-01.svg') }}" alt="">
                                        <p>13+ Lesson</p>
                                    </div>
                                    <div class="course-view d-flex align-items-center">
                                        <img src="{{ url ('frontend/assets/img/icon/icon-02.svg') }}" alt="">
                                        <p>10hr 30min</p>
                                    </div>
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                </div>
                                <div class="all-btn all-category d-flex align-items-center">
                                    <a href="checkout.html" class="btn btn-primary">BOOKING SEKARANG</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="course-box d-flex aos" data-aos="fade-up">
                        <div class="product">
                            <div class="product-img">
                                <a href="course-details.html">
                                    <img class="img-fluid" alt="" src="{{ url ('frontend/assets/img/course/course-06.jpg') }}">
                                </a>
                                <div class="price combo">
                                    <h3>FREE</h3>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="course-group d-flex">
                                    <div class="course-group-img d-flex">
                                        <a href="instructor-profile.html"><img src="{{ url ('frontend/assets/img/user/user6.jpg') }}" alt="" class="img-fluid"></a>
                                        <div class="course-name">
                                            <h4><a href="instructor-profile.html">Stella Johnson</a></h4>
                                            <p>Instructor</p>
                                        </div>
                                    </div>
                                    <div class="course-share d-flex align-items-center justify-content-center">
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <h3 class="title instructor-text"><a href="course-details.html">C# Developers Double Your Coding Speed with Visual Studio</a></h3>
                                <div class="course-info d-flex align-items-center">
                                    <div class="rating-img d-flex align-items-center">
                                        <img src="{{ url ('frontend/assets/img/icon/icon-01.svg') }}" alt="">
                                        <p>7+ Lesson</p>
                                    </div>
                                    <div class="course-view d-flex align-items-center">
                                        <img src="{{ url ('frontend/assets/img/icon/icon-02.svg') }}" alt="">
                                        <p>7hr 30min</p>
                                    </div>
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating"><span>4.6</span> (15)</span>
                                </div>
                                <div class="all-btn all-category d-flex align-items-center">
                                    <a href="checkout.html" class="btn btn-primary">BOOKING SEKARANG</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- /Feature Course -->
