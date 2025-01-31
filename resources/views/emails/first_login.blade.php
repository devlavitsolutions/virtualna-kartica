@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
        <img src="{{ getLogoUrl() }}" class="logo" alt="{{ getAppName() }}">
        @endcomponent
    @endslot 

    {{-- Body --}}
    <div>
        <h2>{{ __('messages.mail.hello') }} <b>{{ $user->first_name . ' ' . $user->last_name }}</b></h2>
        <p> {{ __('Welcome to Virtualna Kartica. First thing you need to do is to set your password.') }}</p>
        @component('mail::button', ['url' => $url])
            {{ __('Set Password') }}
        @endcomponent
        <p>{{ __('This password set link will expire in 48 hours.') }}</p>
        <p>{{ getAppName() }}</p>
        <hr>
        <p>{{ __('If you\'re having trouble clicking the "Set Password" button, copy and paste the URL below into your web browser:') }}: <a href="{{ $url }}">{!! $url !!}</a></p>
    </div>

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            <h6>© {{ date('Y') }} {{ getAppName() }}.</h6>
        @endcomponent
    @endslot
@endcomponent
