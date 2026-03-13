<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! SEO::generate() !!}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TC692324');
        </script>
        
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KFH76B8S');</script>

    <!-- End Google Tag Manager -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/frontend/css/home-card.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/frontend/css/home.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/frontend/css/services-category.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/frontend/css/online-doctor.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/frontend/css/footer.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/frontend/css/chaty-front.min.css">
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TC692324"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>


<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KFH76B8S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> 

<!-- End Google Tag Manager (noscript) -->
<header style="position: sticky; top: 0; z-index:1020; background-color: white;">
    <div class="row justify-content-center ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center  p-0 m-0">
            <nav class="navbar navbar-expand-lg navbar-expand-md navbar-light position-relative  p-3 m-0">
                <a href="{{ route('home') }}" class="navbar-brand p-0 mt-1">
                    <img src="{{ asset('') }}assets/frontend/images/sultanparkkk%20(1).png"
                         alt="Sultan Park Logo" width="80" height="65">
                </a>
                <button class="navbar-toggler justify-content-end px-0 mx-5" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation"
                        style="width: 80px; height:60px; font-size: 30px;">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mt-5" id="navbarNav">
                    <ul class="navbar-nav ms-auto" style="font-size:17px; font-family:Roboto;">
                        <li class="nav-item mx-4">
                            <a class="nav-link" title="Ana Sayfayı görüntülemek için tıklayın"
                               href="{{ route('home') }}" style="font-weight: 700; color:#56b2b8;">ANA SAYFA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" title="Online Doktor Görüşmesi için tıklayın"
                               href="{{ route('onlineDoctor.byCategory') }}" style="font-weight: 700; color:#56b2b8;">ONLİNE
                                DOKTOR GÖRÜŞMESİ</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" title="Hizmetlerimiz için tıklayın"
                               href="{{ route('services-category.index') }}" style="font-weight: 700; color:#56b2b8;">HİZMETLERİMİZ</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" title="Hakkımızda için tıklayın" href="{{ route('about-us.index') }}"
                               style="font-weight: 700; color:#56b2b8;">HAKKIMIZDA</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" title="Hakkımızda için tıklayın" href="{{ route('contact.index') }}"
                               style="font-weight: 700;color:#56b2b8;">İLETİŞİM</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center px-0"
             style="background-color:#56b2b8;">
            <ul class="nav justify-content-center align-items-center my-2 py-2"
                style="font-size:16px;">
                <li class="nav-item mt-0 ms-4 me-2"
                    style="margin-right:8px;color:white; display:flex;align-items: center;margin-top:-4px;font-family:Roboto; ">
                    CANLI DESTEĞE, İSTEDİĞİN ZAMAN HIZLI ULAŞABİLİRSİN
                </li>
                <li class="nav-item me-2">
                    <a style="text-decoration: none;" title="Bizi hemen arayın!" href="tel:02125910911" target="_blank">
                        <button
                            style="background-color:#ec4949; ;border-radius:15px;border:none;height:25px;width:120px;display:flex;align-items:center;justify-content:center">
                            <div style="color:white; flex:1 ;margin-bottom:2px;">
                                <i class="bi bi-whatsapp" style="margin-left:-14px;"></i>
                                <svg viewBox="0 0 24 24" fill="none" width="16" height="16"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.3545 22.2324C15.3344 21.7262 11.1989 20.2994 7.44979 16.5503C3.70068 12.8012 2.27383 8.66565 1.76771 6.64556C1.47684 5.48465 2.00061 4.3644 2.88872 3.73003L5.21698 2.067C6.57925 1.09394 8.47435 1.42413 9.42727 2.80057L10.8931 4.91783C11.5153 5.81657 11.3006 7.04836 10.4112 7.68371L9.24237 8.51856C9.41926 9.19516 9.96942 10.5846 11.6924 12.3076C13.4154 14.0306 14.8049 14.5808 15.4815 14.7577L16.3164 13.5889C16.9517 12.6994 18.1835 12.4848 19.0822 13.107L21.1995 14.5728C22.5759 15.5257 22.9061 17.4208 21.9331 18.7831L20.27 21.1113C19.6357 21.9995 18.5154 22.5232 17.3545 22.2324ZM8.864 15.1361C12.2734 18.5454 16.0358 19.8401 17.8406 20.2923C18.1044 20.3584 18.4233 20.2559 18.6426 19.9489L20.3056 17.6206C20.63 17.1665 20.5199 16.5348 20.0611 16.2172L17.9438
                                        14.7514L17.0479 16.0056C16.6818 16.5182 16.0047 16.9203 15.2163 16.7502C14.2323 16.5378 12.4133 15.8569 10.2782 13.7218C8.14313 11.5868 7.46222 9.76776 7.24991 8.78376C7.0798 7.99537 7.48184 7.31827 7.99442 6.95215L9.24868 6.05625L7.78288 3.93899C7.46524 3.48017 6.83354 3.37011
                                        6.37945 3.69446L4.0512 5.3575C3.74416 5.57681 3.64165 5.89571 3.70774 6.15949C4.15992 7.96424 5.45462 11.7267 8.864 15.1361Z"
                                              fill="white">
                                        </path>
                                        <path
                                            d="M23 7C23 7.55228 22.5523 8 22 8C21.4477 8 21 7.55228 21 7V4.41421L16.7216 8.69265C16.331 9.08318 15.6979 9.08317 15.3073 8.69265C14.9168 8.30213 14.9168 7.66896 15.3073 7.27844L19.5858 3L17 3C16.4477 3 16 2.55228 16 2C16 1.44772 16.4477 1 17 1L21 1C22.1046 1 23 1.89543 23 3V7Z"
                                            fill="white">
                                        </path>
                                    </g>
                                </svg>
                                </i>
                            </div>
                            <div style="color:white;font-size:14px;flex:4;margin-top:17px;margin-left:-10px;">
                                <p>7/24 Arayın</p>
                            </div>
                        </button>
                    </a>
                </li>
                <li class="nav-item" style="">
                    <a style="text-decoration: none;" title="WhatsApp'tan bizimle iletişime geçin!"
                       href="https://wa.me/9005354694234" target="_blank">
                        <button
                            style="background-color:#42b842;border-radius:15px;border:none;height:25px;width:120px;display:flex;align-items:center;justify-content:center">
                            <div style="color:white; flex:1 ;margin-bottom:2px;">
                                <i class="bi bi-whatsapp"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                     class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                </svg>
                                </i>
                            </div>
                            <div style="color:white;font-size:14px;flex:4;margin-top:17px;">
                                <p>7/24 Yazın</p>
                            </div>
                        </button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
