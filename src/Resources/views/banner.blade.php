<div id="gdpr-cookie-banner" class="gdpr-cookie-banner {{ config('gdprcookie.banner.theme') }} {{ config('gdprcookie.banner.position') }}">
    <h2>{{ __("gdprcookie::messages.banner_title") }}</h2>
    <p>{{ __("gdprcookie::messages.banner_message") }}</p>
    <button>{{ __("gdprcookie::messages.accept_all") }}</button>
    <button>{{ __("gdprcookie::messages.reject_all") }}</button>
    @if(config('gdprcookie.banner.show_customize'))
        <button>{{ __("gdprcookie::messages.customize") }}</button>
    @endif
    <!-- Add category toggles dynamically from config('gdprcookie.cookie_categories') if needed -->
    <!-- Example usage for auto-blocking: -->
    <!--
    <script type="text/plain" data-cookie-category="analytics" src="https://www.googletagmanager.com/gtag/js?id=UA-XXXX"></script>
    <script type="text/plain" data-cookie-category="analytics">
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-XXXX');
    </script>
    -->
</div>
