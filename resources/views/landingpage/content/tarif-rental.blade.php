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
                @foreach ($mobil as $item)
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="course-box d-flex aos" data-aos="fade-up">
                            <div class="product">
                                <div class="product-img">
                                    <a href="{{ url ('/checkout') }}">
                                        <img class="img-fluid" alt="" src="{{ url ('storage/'.$item->gambar) }}">
                                    </a>
                                    <div class="price combo">
                                        <h3>Rp. {{ number_format($item->harga_sewa,2,",","."); }}</h3>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="course-group d-flex">
                                        <div class="course-group-img d-flex">
                                            <div class="course-name justify-content-center">
                                                <h4><a href="{{ url ('checkout/'.$item->id) }}">{{ $item->merk }}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="title instructor-text"><a href="course-details.html">{!! $item->deskripsi !!}</a></h3>
                                    {{-- <div class="course-info d-flex align-items-center">
                                        <div class="rating-img d-flex align-items-center">
                                            <img src="{{ url ('frontend/assets/img/icon/icon-01.svg') }}" alt="">
                                            <p>Tersedia</p>
                                        </div>
                                    </div> --}}
                                    <div class="all-btn all-category d-flex align-items-center">
                                        <a href="{{ url ('checkout/'.$item->id) }}" class="btn btn-primary">BOOKING SEKARANG</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- /Feature Course -->
