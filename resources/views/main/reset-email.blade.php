@extends('layouts.app')

@section('content')
    <section class="banner-section wow fadeIn">
        <div style="background-image: url({{ asset('assets/images/bg1.png') }})" class="banner-section-inner">
            <div class="banner-layer">
                <div class="container-medium">
                    <div class="banner-content">
                        <h1 class="banner-title">RESET EMAIL</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-widget-section">
        <div class="container-medium">
            <div class="form-box mt-5 pt-3">
                <form action="{{ route('post-reset-email') }}" method="post">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label>Email</label>
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="email">
                                <label for="email"></label>
                                @if ($errors->has('email')) <p class="input-field-error">{{ $errors->first('email') }}</p> @endif
                            </div>
                        </div>
                        <div>
                            <button class="icc-btn icc-btn-sky" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
