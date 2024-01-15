@extends('website.layouts.app')
@section('content')
    <article id="post-56" class="post-56 page type-page status-publish has-post-thumbnail hentry">
        <div class="entry-content">
            <div class="wp-block-dbec-core-layout-grid  layout-grid layout-grid--outer-margin-none layout-grid--expanded">
                <div class="grid grid--child-margin-large">
                    <div class="wp-block-dbec-core-layout-column  column is-6-small is-6-medium full-width column--expanded">
                        <div class="layout-column">
                            <div class="wp-block-dbec-core-header-gallery  undefined--expanded">
                                <div class="gallery gallery--bullets-outside gallery--static">
                                    <div class="glide">
                                        <div class="glide__track" data-glide-el="track">
                                            <ul class="glide__slides">
                                                <li class="wp-block-dbec-core-slide-header  glide__slide">
                                                    <div class="slide-header slide-header--full-height">
                                                        <div id="home">
                                                            <img decoding="async" class="slide-header__image"
                                                                src="{{ $heroSection->image }}"
                                                                alt="{{ $heroSection->img_alt }}" width="7952"
                                                                height="5304">
                                                            <div class="slide-header__cover"></div>
                                                        </div>
                                                        <div class="label-reference-container">
                                                            <div class="label-reference label-reference--static"
                                                                data-image-reference="<p>Nikada via GettyImages</p>">
                                                            </div>
                                                        </div>
                                                        <div class="slide-header__inner">
                                                            <div class="slide-header__center">
                                                                <div class="slide-header__container-headlines">
                                                                    <div class="row" style="height: "></div>
                                                                    <h1 class="slide-header__headline">
                                                                        {{ $heroSection->title }} <p>
                                                                            {{ $heroSection->second_title }}</p>
                                                                        <div class="slide-header__pulse-wrapper">
                                                                            <div class="slide-header__pulse-line"></div>
                                                                        </div>
                                                                    </h1>
                                                                    <div class="slide-header__sub-headline"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="glide__bullets" data-glide-el="controls[nav]">
                                            <button class="glide__bullet" aria-label="Go to slide 1" data-glide-dir="=0">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section id="about-us">
                <div
                    class="wp-block-dbec-core-layout-grid  layout-grid layout-grid--outer-margin-large layout-grid--expanded">
                    <div class="grid grid--child-margin-large">
                        <div class="wp-block-dbec-core-layout-column  column is-6-small is-6-medium column--expanded">
                            <div class="layout-column">
                                <div class="wp-block-dbec-core-text-image-teaser  text-image-teaser--align-image-right">
                                    <div class="text-image-teaser text-image-teaser--align-image-right text-image-teaser">

                                        <div class="grid" style="justify-content: center;">
                                            <div class="column is-6-small is-4-medium text-image-teaser__column-text">
                                                <h2 class="text-image-teaser__headline">{{ $aboutSection->title }}</h2>
                                                <div class="text-image-teaser__container-text">
                                                    <p class="text-image-teaser__copy">
                                                        &nbsp;&nbsp;{{ $aboutSection->content }}
                                                    </p>
                                                    <a class="base-button base-button--ghost"
                                                        href="{{ $aboutSection->profile }}" rel="noopener noreferrer"
                                                        download=""><span class="base-button__label">Profile</span><svg
                                                            class="base-button__icon">
                                                            <use xlink:href="#icon-download"></use>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="vision-mission">
                <div
                    class="wp-block-dbec-core-layout-grid  layout-grid layout-grid--outer-margin-large layout-grid--expanded">
                    <div class="grid grid--child-margin-large">
                        <div class="wp-block-dbec-core-layout-column  column is-6-small is-6-medium column--expanded">
                            <div class="layout-column">
                                <div class="wp-block-dbec-core-text-image-teaser  text-image-teaser--align-image-left">
                                    <div class="text-image-teaser text-image-teaser--align-image-left text-image-teaser">
                                        <div class="grid" style="justify-content: center;">
                                            <div class="column is-6-small is-4-medium text-image-teaser__column-text">
                                                <div class="text-image-teaser__container-text">
                                                    <h2 class="text-image-teaser__headline">
                                                        {{ $visionSection->vision_title }}
                                                    </h2>
                                                    <p class="text-image-teaser__copy" style="width: 75%;">
                                                        &nbsp;&nbsp;{{ $visionSection->vision_content }}
                                                    </p>
                                                    <h2 class="text-image-teaser__headline">
                                                        {{ $visionSection->mission_title }}
                                                    </h2>
                                                    <p class="text-image-teaser__copy" style="width: 75%;">
                                                        &nbsp;&nbsp;{{ $visionSection->mission_content }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="our-services">
                <div
                    class="wp-block-dbec-core-layout-grid  layout-grid layout-grid--outer-margin-large layout-grid--expanded">
                    <div class="grid grid--child-margin-large">
                        <div class="wp-block-dbec-core-layout-column  column is-6-small is-6-medium column--expanded">
                            <div class="layout-column">
                                <div class="wp-block-dbec-core-text-image-teaser  text-image-teaser--align-image-left">
                                    <div class="text-image-teaser text-image-teaser--align-image-left text-image-teaser">
                                        <div class="grid" style="justify-content: center;">
                                            <div class="column is-6-small is-4-medium text-image-teaser__column-text">
                                                <div class="text-image-teaser__container-text">
                                                    <h2
                                                        class="text-image-teaser__headline text-image-teaser__headline_services">
                                                        We offer a comprehensive range
                                                        of engineering consultancy
                                                        services that include:</h2>
                                                    <p class="text-image-teaser__copy" style="width: 75%;">
                                                        &nbsp;&nbsp;{{ $visionSection->services_content }}
                                                    </p>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" class="align-middle custom-header"
                                                                    style="width: 70%">CONSULTING
                                                                    SERVICES</th>
                                                                <th scope="col" class="align-middle custom-header"
                                                                    style="width: 30%">
                                                                    Price<br>
                                                                    <p class="customer-header-mini-text">(A percentage of
                                                                        the
                                                                        estimated project
                                                                        cost)</p>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($services as $service)
                                                                <tr style="margin: 10px 0px;">
                                                                    <td class="table-td"
                                                                        style="background-color: #e8e8e8;">
                                                                        {{ $service->title }}</td>
                                                                    <td class="table-td"
                                                                        style="background-color: #e8e8e8;">
                                                                        {{ $service->price }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact-us">
                <div
                    class="wp-block-dbec-core-layout-grid  layout-grid layout-grid--outer-margin-large layout-grid--expanded">
                    <div class="grid grid--child-margin-large">
                        <div class="wp-block-dbec-core-layout-column  column is-6-small is-6-medium column--expanded">
                            <div class="layout-column">
                                <div class="wp-block-dbec-core-text-image-teaser  text-image-teaser--align-image-left">
                                    <div class="text-image-teaser text-image-teaser--align-image-left text-image-teaser">
                                        <div class="grid" style="justify-content: center;">
                                            <div class="column is-6-small is-4-medium text-image-teaser__column-text">
                                                <div class="text-image-teaser__container-text">
                                                    <h2 class="text-image-teaser__headline">
                                                        Contact us
                                                    </h2>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12" style="padding: 0px;">
                                                            <div class="wp-block-dbec-core-layout-grid  layout-grid layout-grid--outer-margin-small layout-grid--expanded"
                                                                style="margin-top: 0px;">
                                                                <iframe
                                                                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d28975.3505283297!2d46.596996138132056!3d24.79823329882881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sAlomrah%20Street%2C%20Riyadh%20%2C%2013521%2C%20SA!5e0!3m2!1sen!2snl!4v1703592518488!5m2!1sen!2snl"
                                                                    width="100%" height="400"
                                                                    style="border:0; border-radius: 5px;"
                                                                    allowfullscreen="" loading="lazy"
                                                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12" style="padding: 0px;">
                                                            <div
                                                                class="wp-block-dbec-core-layout-grid  layout-grid layout-grid--outer-margin-small layout-grid--expanded">
                                                                <div class="contact-form-box">
                                                                    @if (session('message'))
                                                                        <div class="alert alert-{{ session('message_type', 'info') }}"
                                                                            role="alert" style="margin: 0px 70px;">
                                                                            {{ session('message') }}
                                                                        </div>
                                                                    @endif
                                                                    <form class="contact_us-form"
                                                                        action="{{ route('contact.send') }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <input name="name" type="text"
                                                                                class="form-control" id="name-input"
                                                                                placeholder="{{ __('Name') }}"
                                                                                required>
                                                                            @error('name')
                                                                                <div class="alert alert-danger">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="email" type="email"
                                                                                class="form-control" id="email-input"
                                                                                placeholder="{{ __('Email') }}"
                                                                                required>
                                                                            @error('email')
                                                                                <div class="alert alert-danger">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="phone_number" type="text"
                                                                                class="form-control" id="phone-input"
                                                                                placeholder="{{ __('Phone') }}">
                                                                            @error('phone_number')
                                                                                <div class="alert alert-danger">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <textarea name="message" class="form-control" id="input-message" rows="3" placeholder="{{ __('Message') }}"
                                                                                required></textarea>
                                                                            @error('message')
                                                                                <div class="alert alert-danger">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="g-recaptcha"
                                                                                data-sitekey="{{ CRUDBooster::getSetting('website_site_key') }}">
                                                                            </div>
                                                                            @if ($errors->has('g-recaptcha-response'))
                                                                                <span
                                                                                    class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <button class="contact-submit-button"
                                                                            type="submit"
                                                                            class="btn btn-primary">{{ __('Send') }}</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </article>
@endsection
