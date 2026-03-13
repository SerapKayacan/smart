@extends('frontend.layouts.master')
@section('content')
    <div class="container-fluid px-0 mx-0">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($carousels as $index => $carousel)
                    <div class="carousel-item @if ($index == 0) active @endif">
                        <img src="{{ $carousel->getFirstMediaUrl('banner', 'large') }}" class="d-block w-100"
                             alt="Carousel Image">
                        <div class="carousel-caption d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                <h5>{!! $carousel->title !!}</h5>
                                <p>{!! $carousel->description !!}</p>
                                <a href="{{ $carousel->button_link }}" title="Hizmeti Görüntüleyin" class="btn p-3"
                                   style="color: {{ $carousel->text_color }}; background-color: {{ $carousel->background_color }}; border: 1px solid {{ $carousel->border_color }}; border-radius: 23px; font-weight: bold;">
                                    {{ $carousel->button_text }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container" style="margin-top:30px;">
        <div class="row align-items-stretch justify-content-center service-category-cards mx-0">
            @foreach ($serviceCategories as $serviceCategory)
                <div class=" @if(  $serviceCategory->home_page_colspan==2 ) col-lg-6 col-md-6 col-sm-12 col-xs-12
                @elseif(  $serviceCategory->home_page_colspan==3)col-lg-12 col-md-12 col-sm-12 col-xs-12
                        @else col-lg-3 col-md-6 col-sm-12 col-xs-12
                        @endif" style="margin-bottom:20px;">
                    <a href="{{ route('services.byCategory', ['slug' => $serviceCategory->slug]) }}"
                       title="Hizmeti Görüntüleyin" style=" text-decoration: none;">
                        @php
                            $colors = ['card-turquoise', 'card-yellow', 'card-purple', 'card-blue', 'card-pink','card-green'];
                        @endphp
                        <div class="card px-3
                    @if(  $serviceCategory->sort_order==0 ) card-1
                        @else {{ $colors[($serviceCategory->sort_order -1 ) % count($colors)] }}
                    @endif">
                            <div class="card-head">
                                <div style="flex:2">
                                    <div class=" icon-box"> {!! $serviceCategory->icon !!}</div>
                                </div>
                                <div class="right-box" style="flex:9">
                                    <div>  {{ $types[$serviceCategory->type] }} </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class=" @if(  $serviceCategory->sort_order==0 ) middle-p-big @else middle-p-small @endif">
                                    {{ $serviceCategory->title }}
                                </p>
                                <p class=" @if(  $serviceCategory->sort_order==0 ) bottom-p-big @else bottom-p-small @endif">
                                    {!!  $serviceCategory->home_page_detail !!}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


    <div class="services-carousel-header px-1 my-4 py-4">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mb-0">
                <h2 class="services-carousel-slider-header">
                    SultanPark Evde Sağlık Hizmetleri: Detaylı Bilgi İçin Bize Ulaşın
                </h2>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-0">
                <!-- Add buttons here -->
                <div class="button-wrapper">
                    <button class="prev-btn">
                        <i class="bi bi-arrow-left-circle-fill">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                            </svg>
                        </i>
                    </button>
                    <button class="next-btn">
                        <i class="bi bi-arrow-right-circle-fill">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                            </svg>
                        </i>
                    </button>

                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 position-relative">
                <div class="services-carousel-wrapper" style="overflow: hidden; position: relative;">
                    <!-- Carousel -->
                    <div class="services-carousel" style="display: flex; transition: transform 0.5s ease;">
                        @foreach ($services as $service)
                            <div class="services-carousel-item" style="min-width: 300px;">
                                <div class="card services-carousel-card">
                                    <img src="{{ $service->getFirstMediaUrl('banner', 'large') }}" alt="Service image"
                                         class="services-carousel-image">
                                    <div class="card-image-text-box">
                                        {{ $types[$service->getCategory->type] ?? 'Unknown Type' }}
                                    </div>
                                    <div class="card-body carousel-widget-body">
                                        <div class="services-carousel-body align-items-center">
                                            <p class="card-service-carousel-detail-header mt-0">{{ $service->title }}</p>
                                            <p class="card-service-detail-carousel-middle-text px-0 text-start w-auto">
                                                {{ $service->category_page_detail }}
                                            </p>
                                            <button class="card-service-carousel-detail-button"
                                                    onclick="window.location.href='{{ route('services-detail.show', ['slug' => $service->slug]) }}'">
                                                Devamını Gör
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="container  navbar-bottom ">
        <div class="row">
            <div class="col-lg-12">
                <!-- Navigation Tabs -->
                <ul class="nav nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
                    @foreach ($tabPanels as $index => $tabPanel)
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-button nav-link  {{ $index === 0 ? 'active' : '' }}"
                                id="pills-tab-{{ $index }}"
                                data-bs-toggle="pill"
                                data-bs-target="#pills-content-{{ $index }}"
                                type="button"
                                role="tab"
                                aria-controls="pills-content-{{ $index }}"
                                aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                                <div class="box nav-button-icon">
                                    {!! $tabPanel->icon !!}
                                </div>
                                <div class="nav-button-text">
                                    <p>{{ $tabPanel->nav_button_text }}</p>
                                </div>
                            </button>
                        </li>
                    @endforeach
                </ul>
                <!-- Tab Content -->
                <div class="tab-content" id="pills-tabContent">
                    @foreach ($tabPanels as $index => $tabPanel)
                        <div
                            class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}"
                            id="pills-content-{{ $index }}"
                            role="tabpanel"
                            aria-labelledby="pills-tab-{{ $index }}"
                            tabindex="0">
                            <div class="row">
                                <div class="col-sm-12 col-md-7">
                                    <img
                                        src="{{ $tabPanel->getFirstMediaUrl('banner', 'large') }}"
                                        alt="Tab panel image"
                                        class="img-fluid rounded-4">
                                </div>
                                <div class="col-md-5">
                                    <p class="title " style="line-height:1;"> {!! $tabPanel->title !!}</p>
                                    <p class="description">{!! $tabPanel->description !!}</p>
                                    <div style="position: relative; height: 100px;"> <!-- Parent container -->
                                        <button class="navbar-bottom-button" title="Hizmeti Görüntüleyin"
                                                style="display: flex;"
                                                onclick="location.href='{{ $tabPanel->button_link }}';">
                                            <div class="navbar-bottom-button-text">
                                                <p>{{ $tabPanel->button_text }}</p>
                                            </div>
                                            <div class="navbar-button-bottom-icon">
                                                <i class="bi bi-arrow-right navbar-button-bottom-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                         viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                         focusable="false" class="">
                                                        <path
                                                            d="M24.35 18h-24.35v-4h24.35l-11.2-11.2 2.85-2.8 16 16-16 16-2.85-2.8 11.2-11.2z"></path>
                                                    </svg>
                                                </i>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const carousel = document.querySelector('.services-carousel');
            const items = document.querySelectorAll('.services-carousel-item');
            const prevBtn = document.querySelector('.prev-btn');
            const nextBtn = document.querySelector('.next-btn');

            let currentIndex = 0;
            const totalItems = items.length;

            // Function to get the slide width, considering responsive layout
            const getSlideWidth = () => {
                return items[0].offsetWidth; // Always return the width of one item
            };

            let slideWidth = getSlideWidth(); // Set initial slide width
            const slideInterval = 3000; // 3 seconds for auto-slide

            // Update the slideWidth when the window resizes
            window.addEventListener('resize', () => {
                slideWidth = getSlideWidth();
                carousel.style.transform = `translateX(-${currentIndex * slideWidth}px)`; // Reposition carousel after resize
            });

            // Slide to next
            const slideNext = () => {
                if (currentIndex < totalItems - 1) {
                    currentIndex++;
                } else {
                    currentIndex = 0; // Loop back to the first item
                }
                carousel.style.transition = 'transform 0.5s ease'; // Apply smooth transition
                carousel.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
            };

            // Slide to previous
            const slidePrev = () => {
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = totalItems - 1; // Loop back to the last item
                }
                carousel.style.transition = 'transform 0.5s ease'; // Apply smooth transition
                carousel.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
            };

            // Auto-slide
            let autoSlide = setInterval(slideNext, slideInterval);

            // Manual controls
            prevBtn.addEventListener('click', () => {
                clearInterval(autoSlide);
                slidePrev();
                restartAutoSlide();
            });

            nextBtn.addEventListener('click', () => {
                clearInterval(autoSlide);
                slideNext();
                restartAutoSlide();
            });

            // Restart auto-slide after manual interaction
            const restartAutoSlide = () => {
                clearInterval(autoSlide);
                autoSlide = setInterval(slideNext, slideInterval);
            };
        });


    </script>




    {{--    <script>--}}
    {{--        document.addEventListener('DOMContentLoaded', function () {--}}
    {{--            const carousel = document.querySelector('.services-carousel');--}}
    {{--            const items = document.querySelectorAll('.services-carousel-item');--}}
    {{--            const visibleItems = 3; // Number of items visible at once--}}
    {{--            const itemWidth = items[0].offsetWidth + 16; // Include margin between items--}}
    {{--            const totalWidth = items.length * itemWidth; // Total width of all items--}}

    {{--            let position = 0;--}}

    {{--            function slideCarousel() {--}}
    {{--                position -= itemWidth * visibleItems; // Move the position--}}
    {{--                if (Math.abs(position) >= totalWidth) {--}}
    {{--                    position = 0; // Reset to the beginning--}}
    {{--                }--}}
    {{--                carousel.style.transform = `translateX(${position}px)`;--}}
    {{--            }--}}

    {{--            // Set up smooth sliding--}}
    {{--            carousel.style.transition = 'transform 1s ease-in-out';--}}

    {{--            // Auto-slide every 4 seconds--}}
    {{--            setInterval(slideCarousel, 4000);--}}
    {{--        });--}}
    {{--    </script>--}}



    {{--    <script>--}}
    {{--        document.addEventListener("DOMContentLoaded", function () {--}}
    {{--            const carousel = document.querySelector(".services-carousel");--}}
    {{--            const prevButton = document.querySelector(".services-carousel-prev");--}}
    {{--            const nextButton = document.querySelector(".services-carousel-next");--}}
    {{--            const scrollAmount = 300; // Adjust as needed--}}
    {{--            let autoScrollInterval;--}}

    {{--            // Scroll Left--}}
    {{--            prevButton.addEventListener("click", () => {--}}
    {{--                carousel.scrollBy({left: -scrollAmount, behavior: "smooth"});--}}
    {{--            });--}}

    {{--            // Scroll Right--}}
    {{--            nextButton.addEventListener("click", () => {--}}
    {{--                carousel.scrollBy({left: scrollAmount, behavior: "smooth"});--}}
    {{--            });--}}

    {{--            // Automatic Scrolling--}}
    {{--            function startAutoScroll() {--}}
    {{--                autoScrollInterval = setInterval(() => {--}}
    {{--                    carousel.scrollBy({left: scrollAmount, behavior: "smooth"});--}}

    {{--                    // Reset to the start if the carousel reaches the end--}}
    {{--                    if (carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth) {--}}
    {{--                        carousel.scrollTo({left: 0, behavior: "smooth"});--}}
    {{--                    }--}}
    {{--                }, 3000); // Adjust interval as needed--}}
    {{--            }--}}

    {{--            function stopAutoScroll() {--}}
    {{--                clearInterval(autoScrollInterval);--}}
    {{--            }--}}

    {{--            // Start auto-scroll on load--}}
    {{--            startAutoScroll();--}}

    {{--            // Pause auto-scroll on hover--}}
    {{--            carousel.addEventListener("mouseenter", stopAutoScroll);--}}
    {{--            carousel.addEventListener("mouseleave", startAutoScroll);--}}
    {{--        });--}}
    {{--    </script>--}}
@endsection
