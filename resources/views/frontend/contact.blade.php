@extends('frontend.layouts.master')
@section('content')
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="h6 text-primary text-uppercase">// İletişim //</div>
                <h1 class="mb-5">Her Konuda Bize Ulaşın</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Adres //</h5>
                                <p class="m-0"><i class="fa fa-map-marker-alt text-primary me-2"></i>Ataköy 7-8-9-10 Kısım Mahallesi, Bakırköy/İstanbul</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Telefon //</h5>
                                <p class="m-0"><i class="fa fa-phone-alt text-primary me-2"></i><a href="tel:+902124742035" class="text-dark">0212 474 20 35</a></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// E-Posta //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i><a href="mailto:bilgi@smartozelguvenlik.com" class="text-dark">bilgi@smartozelguvenlik.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.443!2d28.8720!3d40.9823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa4a3c3c3c3c3%3A0x0!2sAtaköy%2C%20Bakırköy%2Fİstanbul!5e0!3m2!1str!2str"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        @if(session('success'))
                            <div class="alert alert-success mb-4">{{ session('success') }}</div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger mb-4">{{ session('error') }}</div>
                        @endif
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Adınız" value="{{ old('name') }}">
                                        <label for="name">Adınız</label>
                                        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="E-Posta" value="{{ old('email') }}">
                                        <label for="email">E-Posta</label>
                                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" placeholder="Konu" value="{{ old('subject') }}">
                                        <label for="subject">Konu</label>
                                        @error('subject')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control @error('message') is-invalid @enderror" placeholder="Mesajınız" id="message" name="message" style="height: 100px">{{ old('message') }}</textarea>
                                        <label for="message">Mesajınız</label>
                                        @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Mesaj Gönder</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <!-- Career Start -->
    <div class="container-xxl py-5 mt-5 bg-light" style="border-radius: 20px;">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="h6 text-primary text-uppercase">// Kariyer //</div>
                <h1 class="mb-5">İnsan Kaynakları Başvurusu</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-8">
                    <div class="wow fadeInUp bg-white p-5 rounded shadow-sm border border-primary border-opacity-10" data-wow-delay="0.2s">
                        <p class="text-center mb-4">Aramıza katılmak isterseniz, aşağıdaki formu doldurarak CV'nizi (Özgeçmiş) bize iletebilirsiniz.</p>
                        <form action="{{ route('contact.submitCv') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="hr_name" name="name" placeholder="Adınız Soyadınız" value="{{ old('name') }}" required>
                                        <label for="hr_name">Adınız Soyadınız</label>
                                        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="hr_email" name="email" placeholder="E-Posta Adresiniz" value="{{ old('email') }}" required>
                                        <label for="hr_email">E-Posta Adresiniz</label>
                                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="hr_phone" name="phone" placeholder="Telefon Numaranız" value="{{ old('phone') }}" required>
                                        <label for="hr_phone">Telefon Numaranız</label>
                                        @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select @error('position') is-invalid @enderror" id="hr_position" name="position" style="height: 58px;" required>
                                            <option value="" selected disabled>Pozisyon Seçiniz</option>
                                            <option value="Güvenlik Görevlisi" {{ old('position') == 'Güvenlik Görevlisi' ? 'selected' : '' }}>Güvenlik Görevlisi</option>
                                            <option value="Temizlik Personeli" {{ old('position') == 'Temizlik Personeli' ? 'selected' : '' }}>Temizlik Personeli</option>
                                            <option value="Yönetici Adayı" {{ old('position') == 'Yönetici Adayı' ? 'selected' : '' }}>Yönetici Adayı</option>
                                            <option value="Merkez Ofis" {{ old('position') == 'Merkez Ofis' ? 'selected' : '' }}>Merkez Ofis Personeli</option>
                                            <option value="Diğer" {{ old('position') == 'Diğer' ? 'selected' : '' }}>Diğer</option>
                                        </select>
                                        <label for="hr_position">Başvurduğunuz Pozisyon</label>
                                        @error('position')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label text-muted ms-2 mt-2">CV / Özgeçmiş Yükle (.pdf, .doc, .docx - Max 5MB)</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control p-3 @error('cv_file') is-invalid @enderror" id="cv_file" name="cv_file" accept=".pdf,.doc,.docx" required style="border-radius: 10px;">
                                        @error('cv_file')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mt-3">
                                        <textarea class="form-control @error('message') is-invalid @enderror" placeholder="Ön Yazı / Mesajınız (İsteğe Bağlı)" id="hr_message" name="message" style="height: 120px">{{ old('message') }}</textarea>
                                        <label for="hr_message">Ön Yazı / Mesajınız (İsteğe Bağlı)</label>
                                        @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="col-12 mt-4 text-center">
                                    <button class="btn btn-primary w-50 py-3" type="submit" style="border-radius: 30px; font-weight: bold; letter-spacing: 1px;">Başvuruyu Gönder <i class="fa fa-paper-plane ms-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Career End -->
@endsection
