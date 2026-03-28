@extends('frontend.layouts.master')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid mb-5 position-relative overflow-hidden" style="height:320px;">
        <img src="{{ $service->hasMedia('banner') ? $service->getFirstMediaUrl('banner','large') : asset('assets/frontend/img/carousel-bg-1.jpg') }}"
             class="position-absolute top-0 start-0 w-100 h-100" style="object-fit:cover;">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:linear-gradient(135deg,rgba(11,33,84,0.88),rgba(26,58,122,0.75));"></div>
        <div class="position-relative h-100 d-flex align-items-center justify-content-center">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-white text-uppercase mb-3" style="letter-spacing:2px;">// Hizmet Detayı //</h6>
                <h1 class="text-white mb-0">{{ $service->title }}</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Detail Content Start -->
    <div class="container-xxl py-5">
        <div class="container">

            <!-- Top row: image + sidebar -->
            <div class="row g-5 mb-5">
                <!-- Image -->
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    @if($service->hasMedia('banner'))
                    <img src="{{ $service->getFirstMediaUrl('banner','large') }}"
                         class="img-fluid w-100" style="border-radius:16px;" alt="{{ $service->title }}">
                    @endif

                    @if($service->sort_detail)
                    <div class="p-4 mt-4" style="background:#f4f6fb;border-radius:12px;border-left:4px solid #0B2154;min-height:150px;">
                        <p class="mb-0" style="color:#333;line-height:1.8;">{!! $service->sort_detail !!}</p>
                    </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.2s">
                    <div class="p-4 mb-4" style="border-radius:16px;border:3px solid #0B2154;background:#fff;box-shadow:0 4px 24px rgba(11,33,84,0.08);">
                        <h5 class="fw-bold mb-4" style="color:#0B2154;">Hizmet Hakkında Bilgi Alın</h5>

                        <a href="tel:+902124742035" class="d-flex align-items-center gap-3 text-decoration-none p-3 mb-3"
                           style="background:rgba(11,33,84,0.06);border-radius:10px;color:#0B2154;">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0"
                                 style="width:44px;height:44px;background:#0B2154;border-radius:10px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block" style="font-size:0.75rem;">Bizi Arayın</small>
                                <span class="fw-semibold">0212 474 20 35</span>
                            </div>
                        </a>

                        <a href="https://wa.me/902124742035?text={{ urlencode($service->title . ' hizmeti hakkında bilgi almak istiyorum.') }}"
                           target="_blank"
                           class="d-flex align-items-center gap-3 text-decoration-none p-3 mb-3"
                           style="background:rgba(37,211,102,0.08);border-radius:10px;color:#128C7E;">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0"
                                 style="width:44px;height:44px;background:#25D366;border-radius:10px;">
                                <i class="fab fa-whatsapp text-white fa-lg"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block" style="font-size:0.75rem;">WhatsApp</small>
                                <span class="fw-semibold">Mesaj Gönderin</span>
                            </div>
                        </a>

                        <a href="{{ route('contact.index') }}"
                           class="btn text-white w-100 py-3" style="background:#D81324;border-radius:10px;">
                            Teklif Talep Et <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </div>

                    <a href="{{ route('services.byCategory', ['slug' => $service->getCategory->slug]) }}"
                       class="d-flex align-items-center gap-2 text-decoration-none p-3"
                       style="background:#f4f6fb;border-radius:10px;color:#0B2154;font-weight:600;font-size:0.9rem;">
                        <i class="fa fa-arrow-left"></i>
                        {{ $service->getCategory->title }} Hizmetlerine Dön
                    </a>
                </div>
            </div>

            <!-- Full width detail text -->
            @if($service->detail)
            <div class="row wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-12">
                    <div class="service-detail-content" style="line-height:1.9;color:#444;">
                        {!! $service->detail !!}
                    </div>
                </div>
            </div>
            @endif

        </div>
    </div>
    <!-- Detail Content End -->


@endsection
