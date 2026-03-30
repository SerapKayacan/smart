@section('title', 'Gösterge Paneli')
@section('css')
@endsection
@extends('admin.layouts.master')
@section('content')

<div class="d-flex flex-column flex-column-fluid">

    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    Anasayfa
                </h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Gösterge Paneli</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">
                        Gösterge Paneli
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!-- Bugün Ziyaretçi -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-flush shadow-sm h-100 border-0" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                        <div class="card-body d-flex flex-column justify-content-between mt-b-5">
                            <div class="d-flex flex-column mb-5">
                                <span class="text-white opacity-75 fw-semibold fs-6 pb-2">Bugünkü Ziyaretçi</span>
                                <span class="text-white fw-bold fs-2qx lh-1 ls-n2">{{ $todayVisitors }}</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-auto">
                                <span class="badge bg-white text-dark fw-bold px-3 py-2 opacity-75">Tekil</span>
                                <div class="symbol symbol-45px">
                                    <span class="symbol-label bg-transparent">
                                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" class="text-white opacity-50" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor"/>
                                            <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Bugün Görüntüleme -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-flush shadow-sm h-100 border-0" style="background: linear-gradient(135deg, #ff0844 0%, #ffb199 100%);">
                        <div class="card-body d-flex flex-column justify-content-between mt-b-5">
                            <div class="d-flex flex-column mb-5">
                                <span class="text-white opacity-75 fw-semibold fs-6 pb-2">Bugünkü Görüntüleme</span>
                                <span class="text-white fw-bold fs-2qx lh-1 ls-n2">{{ $todayHits }}</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-auto">
                                <span class="badge bg-white text-dark fw-bold px-3 py-2 opacity-75">Sayfa Gösterimi</span>
                                <div class="symbol symbol-45px">
                                    <span class="symbol-label bg-transparent">
                                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" class="text-white opacity-50" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"/>
                                            <path d="M12 16.5C14.4853 16.5 16.5 14.4853 16.5 12C16.5 9.51472 14.4853 7.5 12 7.5C9.51472 7.5 7.5 9.51472 7.5 12C7.5 14.4853 9.51472 16.5 12 16.5Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Toplam Ziyaretçi -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-flush shadow-sm h-100 border-0" style="background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);">
                        <div class="card-body d-flex flex-column justify-content-between mt-b-5">
                            <div class="d-flex flex-column mb-5">
                                <span class="text-white opacity-75 fw-semibold fs-6 pb-2">Toplam Ziyaretçi</span>
                                <span class="text-white fw-bold fs-2qx lh-1 ls-n2">{{ $totalVisitors }}</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-auto">
                                <span class="badge bg-white text-dark fw-bold px-3 py-2 opacity-75">Tüm Zamanlar</span>
                                <div class="symbol symbol-45px">
                                    <span class="symbol-label bg-transparent">
                                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" class="text-white opacity-50" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"/>
                                            <rect opacity="0.3" x="2" y="3" width="20" height="2" rx="1" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Toplam Görüntüleme -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-flush shadow-sm h-100 border-0" style="background: linear-gradient(135deg, #09203f 0%, #537895 100%);">
                        <div class="card-body d-flex flex-column justify-content-between mt-b-5">
                            <div class="d-flex flex-column mb-5">
                                <span class="text-white opacity-75 fw-semibold fs-6 pb-2">Toplam Görüntüleme</span>
                                <span class="text-white fw-bold fs-2qx lh-1 ls-n2">{{ $totalHits }}</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-auto">
                                <span class="badge bg-white text-dark fw-bold px-3 py-2 opacity-75">Tüm Zamanlar</span>
                                <div class="symbol symbol-45px">
                                    <span class="symbol-label bg-transparent">
                                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" class="text-white opacity-50" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M14 3V20H2V3C2 2.44772 2.44772 2 3 2H13C13.5523 2 14 2.44772 14 3ZM11 13V11C11 9.75736 10.4639 8.64835 9.58579 7.89322V15.1068C10.4639 14.3517 11 13.2426 11 12V13Z" fill="currentColor"/>
                                            <path d="M21 21H3C2.44772 21 2 20.5523 2 20V19C2 18.4477 2.44772 18 3 18H21C21.5523 18 22 18.4477 22 19V20C22 20.5523 21.5523 21 21 21Z" fill="currentColor"/>
                                            <path d="M14 13V11C14 9.75736 14.5361 8.64835 15.4142 7.89322V15.1068C14.5361 14.3517 14 13.2426 14 12V13Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
@endsection
