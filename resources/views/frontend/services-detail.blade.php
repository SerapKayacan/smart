@extends('frontend.layouts.master')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid mb-5 position-relative overflow-hidden" style="height:320px;">
        <img src="{{ $service->hasMedia('banner') ? $service->getFirstMediaUrl('banner','large') : asset('assets/frontend/img/carousel-bg-1.jpg') }}"
             class="position-absolute top-0 start-0 w-100 h-100" style="object-fit:cover;">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:linear-gradient(135deg,rgba(11,33,84,0.9),rgba(26,58,122,0.8));"></div>
        <div class="position-relative h-100 d-flex align-items-center justify-content-center">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-white text-uppercase mb-3 fw-bold" style="letter-spacing:2px;">// Hizmet Detayı //</h6>
                <h1 class="text-white mb-0 fw-bolder" style="font-size: 3.5rem;">{{ $service->title }}</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Detail Content Start -->
    <div class="container-xxl py-5">
        <div class="container">

            <div class="row g-5 mb-5 pe-lg-4">
                <!-- Image & Description -->
                <div class="col-lg-8 wow fadeInLeft" data-wow-delay="0.1s">
                    @if($service->hasMedia('banner'))
                    <div class="position-relative overflow-hidden mb-5" 
                         style="border: 8px solid #ffffff; border-radius: 24px; box-shadow: 0 15px 40px rgba(11,33,84, 0.15);">
                        <img src="{{ $service->getFirstMediaUrl('banner','large') }}"
                             class="img-fluid w-100" style="object-fit:cover;" alt="{{ $service->title }}">
                    </div>
                    @endif

                    <!-- Title with vertical bar -->
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div style="width:6px;height:45px;background:#0B2154;border-radius:3px;"></div>
                        <h2 class="mb-0 fw-bold" style="color:#0B2154;">{{ $service->title }}</h2>
                    </div>

                    @if($service->sort_detail)
                    <div class="mb-5 text-secondary fs-5" style="line-height: 1.8;">
                        {!! $service->sort_detail !!}
                    </div>
                    @endif

                    <!-- Full width detail html text -->
                    @if($service->detail)
                    <div class="service-detail-content bg-light p-4 p-md-5 rounded-4 shadow-sm" style="line-height:1.9; color:#444; border-left: 4px solid #D81324;">
                        {!! $service->detail !!}
                    </div>
                    @endif
                </div>

                <!-- Ad Sidebar -->
                <div class="col-lg-4 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="p-4 p-lg-5 mb-4 bg-white" style="border-radius:24px; border:none; box-shadow:0 15px 40px rgba(11,33,84,0.06);">
                        <h4 class="fw-bold mb-5" style="color:#0B2154;">Hizmet Hakkında Bilgi Alın</h4>

                        <a href="tel:+902124742035" class="d-flex align-items-center gap-4 text-dark text-decoration-none mb-4 border-bottom border-light pb-4 hover-primary transition">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 shadow-sm"
                                 style="width:54px;height:54px;background:#0B2154;border-radius:14px;">
                                <i class="fa fa-phone-alt text-white fs-5"></i>
                            </div>
                            <div>
                                <small class="text-secondary d-block fw-semibold mb-1" style="font-size:0.85rem;">Bizi Arayın</small>
                                <span class="fw-bolder fs-5" style="color:#0B2154;">0212 474 20 35</span>
                            </div>
                        </a>

                        <a href="https://wa.me/905496165080?text={{ urlencode($service->title . ' hizmeti hakkında bilgi almak istiyorum.') }}"
                           target="_blank"
                           class="d-flex align-items-center gap-4 text-dark text-decoration-none mb-5 hover-primary transition">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 shadow-sm"
                                 style="width:54px;height:54px;background:#25D366;border-radius:14px;">
                                <i class="fab fa-whatsapp text-white fs-4"></i>
                            </div>
                            <div>
                                <small class="text-secondary d-block fw-semibold mb-1" style="font-size:0.85rem;">WhatsApp</small>
                                <span class="fw-bolder fs-5" style="color:#128C7E;">Hızlı Mesaj Gönderin</span>
                            </div>
                        </a>

                        <a href="{{ route('contact.index') }}"
                           class="btn btn-danger text-white w-100 py-3 mt-2 rounded-pill shadow-sm fw-bold fs-6">
                            Teklif Talep Et <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </div>

                    <!-- Return button -->
                    <div class="mt-4 text-center">
                        <a href="{{ route('services.byCategory', ['slug' => $service->getCategory->slug]) }}"
                           class="d-inline-flex align-items-center gap-3 text-decoration-none text-secondary fw-semibold hover-primary transition py-2 px-4 bg-white rounded-pill shadow-sm">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded-circle" style="width: 32px; height: 32px;">
                                <i class="fa fa-arrow-left text-primary small"></i>
                            </div>
                            {{ $service->getCategory->title }} Adımına Dön
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Detail Content End -->

@endsection
