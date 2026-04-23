@extends('frontend.layouts.master')
@section('content')

    <!-- Page Header Start -->
      <div class="container-fluid py-5 mb-5" style="background: linear-gradient(135deg, #0B2154, #1a3a7a);">
        <div class="position-relative h-100 d-flex align-items-center justify-content-center">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="h6 text-white text-uppercase mb-3" style="letter-spacing:2px;">// Hizmetlerimiz //</div>
                <h1 class="text-white mb-2">{{ $serviceCategory->title }}</h1>
                <p class="text-white-50 mb-0">{{ strip_tags($serviceCategory->description) }}</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Services Grid Start -->
    <div class="container-xxl py-5">
        <div class="container">
            @php
                $catColor = str_contains(strtolower($serviceCategory->title), 'temizlik') ? '#D81324' : '#0B2154';
                $catShadow = str_contains(strtolower($serviceCategory->title), 'temizlik') ? 'rgba(216,19,36,0.1)' : 'rgba(11,33,84,0.1)';
            @endphp
            @if($services->where('is_active', true)->count() > 0)
            <div class="row g-4">
                @foreach($services->where('is_active', true) as $i => $service)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ ($i % 3) * 0.15 }}s">
                    <div class="h-100 overflow-hidden" style="border-radius:16px;box-shadow:0 4px 24px {{ $catShadow }};border:3px solid {{ $catColor }};">
                        <!-- Image -->
                        <div style="height:200px;overflow:hidden;border-radius:14px 14px 0 0;position:relative;">
                            @if($service->hasMedia('banner'))
                                <img src="{{ $service->getFirstMediaUrl('banner','large') }}"
                                     class="w-100 h-100" style="object-fit:cover;" alt="{{ $service->title }}">
                            @else
                                <div class="w-100 h-100 d-flex align-items-center justify-content-center"
                                     style="background:rgba(11,33,84,0.08);">
                                    <i class="fa fa-shield-alt fa-4x" style="color:#0B2154;opacity:0.2;"></i>
                                </div>
                            @endif
                        </div>
                        <!-- Body -->
                        <div class="p-4 bg-white" style="border-radius:0 0 14px 14px;">
                            <h5 class="fw-bold mb-3" style="color:{{ $catColor }};">{{ $service->title }}</h5>
                            <p class="text-muted mb-4" style="font-size:0.88rem;line-height:1.7;">{{ Str::limit(strip_tags($service->category_page_detail), 110) }}</p>
                            <a href="{{ route('services-detail.show', ['slug' => $service->slug]) }}"
                               class="btn text-white py-2 px-4" style="background:{{ $catColor }};border-radius:8px;font-size:0.85rem;">
                                Detayları Gör <i class="fa fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
                <div class="text-center py-5">
                    <i class="fa fa-info-circle fa-3x text-muted mb-3 d-block"></i>
                    <p class="text-muted">Bu kategoride henüz hizmet bulunmamaktadır.</p>
                </div>
            @endif
        </div>
    </div>
    <!-- Services Grid End -->

   

@endsection
