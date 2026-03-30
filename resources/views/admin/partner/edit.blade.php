@section('title', 'Kurum Düzenle')
@extends('admin.layouts.master')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Kurum Düzenle</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Gösterge Paneli</a>
                        </li>
                        <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('partner.index') }}" class="text-muted text-hover-primary">Kurum Listesi</a>
                        </li>
                        <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
                        <li class="breadcrumb-item text-muted">Kurum Düzenle</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <form class="form" action="{{ route('partner.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <div class="card card-flush pt-5">
                            <div class="card-body pt-5">

                                <div class="mb-10 row">
                                    <div class="col-sm-6">
                                        <label class="form-label">Logo Görsel</label>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <a class="uploadImage btn btn-primary text-white btn-sm">
                                                        <i class="far fa-file-image"></i> Seç
                                                    </a>
                                                    <input type="file" accept="image/jpeg,image/png,image/jpg" name="image" class="d-none">
                                                    <a class="removeImage btn btn-danger text-white btn-sm">
                                                        <i class="fa fa-trash"></i> Kaldır
                                                    </a>
                                                    <div class="row col-md-12 thumb-output p-2">
                                                        <img class="thumb img-thumbnail" src="{{ $partner->getFirstMediaUrl('image', 'thumb') }}">
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-10 row">
                                    <div class="col-sm-6">
                                        <label class="required form-label">Kurum Adı</label>
                                        <input class="form-control" name="name" value="{{ $partner->name }}" required>
                                    </div>
                                </div>

                                <div class="mb-10 row">
                                    <div class="col-sm-3">
                                        <label class="form-label">Sıra</label>
                                        <input class="form-control" name="sort_order" type="number" value="{{ $partner->sort_order }}" min="0">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-label">Durum</label>
                                        <select name="is_active" class="form-control">
                                            <option value="1" {{ $partner->is_active ? 'selected' : '' }}>Aktif</option>
                                            <option value="0" {{ !$partner->is_active ? 'selected' : '' }}>Pasif</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('partner.index') }}" class="btn btn-light me-5">Vazgeç</a>
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('') }}assets/js/admin/media.js"></script>
@endsection
