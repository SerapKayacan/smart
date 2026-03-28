@section('title', 'Referans Listesi')
@extends('admin.layouts.master')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Referans Listesi</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Gösterge Paneli</a>
                        </li>
                        <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
                        <li class="breadcrumb-item text-muted">Referans Listesi</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                @if(session('success'))
                    <div class="alert alert-success mb-4">{{ session('success') }}</div>
                @endif
                <div class="card card-flush">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <div class="card-title">
                            <input type="text" data-find="search" class="form-control form-control-solid w-250px ps-14" placeholder="Arama" />
                        </div>
                        <div class="card-toolbar">
                            <a href="{{ route('reference.create') }}" class="btn btn-primary">Yeni Referans</a>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="dataTable">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th>No</th>
                                    <th>Görsel</th>
                                    <th>Ad</th>
                                    <th>Kategori</th>
                                    <th>Konum</th>
                                    <th>Durum</th>
                                    <th class="text-end">İşlemler</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @foreach($references as $reference)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if($reference->hasMedia('image'))
                                            <img src="{{ $reference->getFirstMediaUrl('image','thumb') }}" style="width:60px;height:45px;object-fit:cover;border-radius:4px;">
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('reference.edit', $reference->id) }}" class="text-gray-800 text-hover-primary fw-bold">{{ $reference->name }}</a>
                                    </td>
                                    <td>
                                        <span class="badge {{ $reference->category === 'security' ? 'badge-light-primary' : 'badge-light-danger' }}">
                                            {{ $reference->category === 'security' ? 'Güvenlik' : 'Temizlik' }}
                                        </span>
                                    </td>
                                    <td>{{ $reference->location ?? '-' }}</td>
                                    <td>
                                        @if($reference->is_active)
                                            <div class="badge badge-light-success">Aktif</div>
                                        @else
                                            <div class="badge badge-light-danger">Pasif</div>
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        <a href="{{ route('reference.edit', $reference->id) }}" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                            <i class="far fa-edit text-warning icon-lg"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm"
                                           data-url="{{ route('reference.destroy', $reference->id) }}"
                                           data-method="delete"
                                           data-id="{{ $reference->id }}"
                                           data-count="0">
                                            <i class="fas fa-trash-alt text-danger icon-lg"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('') }}assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="{{ asset('') }}assets/js/admin/datatable.js"></script>
    <script src="{{ asset('') }}assets/js/admin/delete.js"></script>
@endsection
