  <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">İletişim</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Ataköy 7-8-9-10 Kısım Mahallesi Bakırköy/İstanbul</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0212 474 20 35</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>bilgi@smartozelguvenlik.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Güvenlik Hizmetleri</h4>
                    <a class="btn btn-link" href="">Site Özel Güvenlik Hizmetleri</a>
                    <a class="btn btn-link" href="">AVM Güvenliği</a>
                    <a class="btn btn-link" href="">Fabrika Güvenliği</a>
                    <a class="btn btn-link" href="">Şantiye Güvenliği</a>
                    <a class="btn btn-link" href="">Eğitim Kurumları ve Okul Güvenliği</a>
                    <a class="btn btn-link" href="">Otel ve Turistik İşletme Güvenliği</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Temizlik Hizmetleri</h4>
                    <a class="btn btn-link" href="">AVM Temizlik Hizmetleri</a>
                    <a class="btn btn-link" href="">Kat Hizmetleri (Housekeeping)</a>
                    <a class="btn btn-link" href="">Steward Hizmetleri</a>
                    <a class="btn btn-link" href="">Garson/Servis Personeli</a>
                    <a class="btn btn-link" href="">Bulaşıkhane Hizmetleri</a>
                    <a class="btn btn-link" href="">Otel Temizlik & Operasyon Hizmetleri</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Hızlı Bağlantılar</h4>
                    <a class="btn btn-link" href="{{ route('home') }}">Ana Sayfa</a>
                    <a class="btn btn-link" href="{{ route('about-us.index') }}">Hakkımızda</a>
                    <a class="btn btn-link" href="{{ route('services-category.index') }}">Hizmetlerimiz</a>
                    <a class="btn btn-link" href="{{ route('contact.index') }}">İletişim</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; {{ date('Y') }} <a class="border-bottom" href="{{ route('home') }}">Smart Özel Güvenlik</a>, Tüm Hakları Saklıdır.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="{{ route('home') }}">Ana Sayfa</a>
                            <a href="{{ route('about-us.index') }}">Hakkımızda</a>
                            <a href="{{ route('contact.index') }}">İletişim</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
</body>
</html>
