@extends('layouts.app')

@section('content')
<section class="banner-section home-banner-slider wow fadeIn">
    <div style="background-image: url({{ asset('assets/images/bg1.png') }})" class="banner-section-inner">
        <div class="banner-layer">
            <div class="container-medium">
                <div class="banner-content">
                    <h1 class="banner-title">TEST SLIDER</h1>
                    <div class="banner-description">
                        <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-image: url({{ asset('assets/images/bg2.jpg') }})" class="banner-section-inner">
        <div class="banner-layer">
            <div class="container-medium">
                <div class="banner-content">
                    <h1 class="banner-title">TEST SLIDER</h1>
                    <div class="banner-description">
                        <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-image: url({{ asset('assets/images/bg3.jpg') }})" class="banner-section-inner">
        <div class="banner-layer">
            <div class="container-medium">
                <div class="banner-content">
                    <h1 class="banner-title">TEST SLIDER</h1>
                    <div class="banner-description">
                        <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-image: url({{ asset('assets/images/bg2.jpg') }})" class="banner-section-inner">
        <div class="banner-layer">
            <div class="container-medium">
                <div class="banner-content">
                    <h1 class="banner-title">TEST SLIDER</h1>
                    <div class="banner-description">
                        <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
