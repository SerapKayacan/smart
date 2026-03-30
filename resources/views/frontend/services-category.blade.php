@extends('frontend.layouts.master')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid py-5 mb-5" style="background: linear-gradient(135deg, #0B2154, #1a3a7a);">
        <div class="container py-3">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-white text-uppercase mb-3">// Hizmetlerimiz //</h6>
                <h1 class="text-white mb-2">Güvenlik & Temizlik Hizmetleri</h1>
                <p class="text-white-50 mb-0">Profesyonel ekibimizle sunduğumuz tüm hizmetleri keşfedin</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    @php
        $securityCategories = $serviceCategories->filter(fn($c) => str_contains(strtolower($c->title), 'güvenlik'));
        $cleaningCategories  = $serviceCategories->filter(fn($c) => str_contains(strtolower($c->title), 'temizlik'));
        $otherCategories     = $serviceCategories->filter(fn($c) =>
            !str_contains(strtolower($c->title), 'güvenlik') &&
            !str_contains(strtolower($c->title), 'temizlik')
        );
    @endphp

    {{-- Security --}}
    @if($securityCategories->count() > 0)
    <div class="container-xxl py-5">
        <div class="container">
            <div class="d-flex align-items-center gap-3 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div style="width:5px;height:50px;background:#0B2154;border-radius:3px;"></div>
                <div>
                    <h6 class="text-uppercase mb-1" style="color:#0B2154;letter-spacing:2px;font-size:0.8rem;">// Güvenlik //</h6>
                    <h2 class="mb-0">Güvenlik Hizmetleri</h2>
                </div>
            </div>
            <div class="row g-4">
                @foreach($securityCategories as $i => $cat)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ ($i % 3) * 0.15 }}s">
                    <div class="h-100 overflow-hidden" style="border-radius:16px;box-shadow:0 4px 24px rgba(11,33,84,0.1);border:3px solid #0B2154;">
                        <!-- Icon area -->
                        <div class="d-flex align-items-center justify-content-center" style="height:120px;background:rgba(11,33,84,0.06);border-radius:14px 14px 0 0;">
                            <div style="font-size:3rem;">{!! $cat->icon !!}</div>
                        </div>
                        <!-- Body -->
                        <div class="p-4 bg-white" style="border-radius:0 0 14px 14px;">
                            <h5 class="fw-bold mb-2" style="color:#0B2154;">{{ $cat->title }}</h5>
                            <p class="text-muted mb-3" style="font-size:0.88rem;line-height:1.7;">{{ strip_tags($cat->description) }}</p>
                            @if($cat->services->where('is_active', true)->count() > 0)
                            <ul class="list-unstyled mb-3">
                                @foreach($cat->services->where('is_active', true)->take(3) as $service)
                                <li class="mb-1">
                                    <a href="{{ route('services-detail.show', ['slug' => $service->slug]) }}"
                                       class="text-decoration-none d-flex align-items-center gap-2"
                                       style="color:#555;font-size:0.85rem;">
                                        <i class="fa fa-chevron-right" style="color:#0B2154;font-size:0.7rem;"></i>
                                        {{ $service->title }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                            <a href="{{ route('services.byCategory', ['slug' => $cat->slug]) }}"
                               class="btn text-white py-2 px-4" style="background:#0B2154;border-radius:8px;font-size:0.85rem;">
                                Tümünü Gör <i class="fa fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    @if($securityCategories->count() > 0 && $cleaningCategories->count() > 0)
    <div style="height:4px;background:linear-gradient(90deg,#0B2154,#D81324);"></div>
    @endif

    {{-- Cleaning --}}
    @if($cleaningCategories->count() > 0)
    <div class="container-xxl py-5">
        <div class="container">
            <div class="d-flex align-items-center gap-3 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div style="width:5px;height:50px;background:#D81324;border-radius:3px;"></div>
                <div>
                    <h6 class="text-uppercase mb-1" style="color:#D81324;letter-spacing:2px;font-size:0.8rem;">// Temizlik //</h6>
                    <h2 class="mb-0">Temizlik Hizmetleri</h2>
                </div>
            </div>
            <div class="row g-4">
                @foreach($cleaningCategories as $i => $cat)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ ($i % 3) * 0.15 }}s">
                    <div class="h-100 overflow-hidden" style="border-radius:16px;box-shadow:0 4px 24px rgba(216,19,36,0.1);border:3px solid #D81324;">
                        <div class="d-flex align-items-center justify-content-center" style="height:120px;background:rgba(216,19,36,0.06);border-radius:14px 14px 0 0;">
                            <div style="font-size:3rem;">{!! $cat->icon !!}</div>
                        </div>
                        <div class="p-4 bg-white" style="border-radius:0 0 14px 14px;">
                            <h5 class="fw-bold mb-2" style="color:#D81324;">{{ $cat->title }}</h5>
                            <p class="text-muted mb-3" style="font-size:0.88rem;line-height:1.7;">{{ strip_tags($cat->description) }}</p>
                            @if($cat->services->where('is_active', true)->count() > 0)
                            <ul class="list-unstyled mb-3">
                                @foreach($cat->services->where('is_active', true)->take(3) as $service)
                                <li class="mb-1">
                                    <a href="{{ route('services-detail.show', ['slug' => $service->slug]) }}"
                                       class="text-decoration-none d-flex align-items-center gap-2"
                                       style="color:#555;font-size:0.85rem;">
                                        <i class="fa fa-chevron-right" style="color:#D81324;font-size:0.7rem;"></i>
                                        {{ $service->title }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                            <a href="{{ route('services.byCategory', ['slug' => $cat->slug]) }}"
                               class="btn text-white py-2 px-4" style="background:#D81324;border-radius:8px;font-size:0.85rem;">
                                Tümünü Gör <i class="fa fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    {{-- Other categories --}}
    @if($otherCategories->count() > 0)
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                @foreach($otherCategories as $i => $cat)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ ($i % 3) * 0.15 }}s">
                    <div class="h-100 overflow-hidden" style="border-radius:16px;box-shadow:0 4px 24px rgba(0,0,0,0.08);border:3px solid #0B2154;">
                        <div class="d-flex align-items-center justify-content-center" style="height:120px;background:#f8f9fa;border-radius:14px 14px 0 0;">
                            <div style="font-size:3rem;">{!! $cat->icon !!}</div>
                        </div>
                        <div class="p-4 bg-white" style="border-radius:0 0 14px 14px;">
                            <h5 class="fw-bold mb-2" style="color:#0B2154;">{{ $cat->title }}</h5>
                            <p class="text-muted mb-3" style="font-size:0.88rem;line-height:1.7;">{{ strip_tags($cat->description) }}</p>
                            <a href="{{ route('services.byCategory', ['slug' => $cat->slug]) }}"
                               class="btn text-white py-2 px-4" style="background:#0B2154;border-radius:8px;font-size:0.85rem;">
                                Tümünü Gör <i class="fa fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <!-- CTA Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background:#0B2154;">
        <div class="container">
            <div class="row align-items-center gx-5">
                <div class="col-lg-8 py-3">
                    <h2 class="text-white mb-2">Hizmetlerimiz Hakkında Bilgi Alın</h2>
                    <p class="mb-0" style="color:rgba(255,255,255,0.7);">Size özel teklif ve detaylı bilgi için bizimle iletişime geçin.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('contact.index') }}" class="btn btn-primary py-3 px-5">
                        Bize Ulaşın <i class="fa fa-arrow-right ms-3"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA End -->

@endsection
