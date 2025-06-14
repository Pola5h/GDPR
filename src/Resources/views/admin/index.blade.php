<div>
    <h1>{{ __("gdprcookie::messages.admin_panel_title") }}</h1>
    <p>{{ __("gdprcookie::messages.admin_panel_description") }}</p>
    <!-- Example: List cookie categories from config -->
    <ul>
        @foreach(config('gdprcookie.cookie_categories') as $key => $category)
            <li>
                <strong>{{ __("gdprcookie::messages.$key") }}</strong>: {{ $category['description'] }}
            </li>
        @endforeach
    </ul>
    <!-- Add more admin features here, using lang/config as needed -->
</div>
