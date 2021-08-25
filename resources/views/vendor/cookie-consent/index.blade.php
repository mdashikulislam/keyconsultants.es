@php
    $locale = $app->getLocale();
@endphp

<div  role="dialog" aria-labelledby="lcc-modal-alert-label" aria-describedby="lcc-modal-alert-desc" aria-modal="true" class="lcc-modal lcc-modal--alert js-lcc-modal js-lcc-modal-alert" style="display: none;background: #f1f1f1;box-shadow: 0 0 30px 0 rgb(35 35 35 / 10%);border-radius: 5px"
     data-cookie-key="{{ config('cookie-consent.cookie_key') }}"
     data-cookie-value-analytics="{{ config('cookie-consent.cookie_value_analytics') }}"
     data-cookie-value-marketing="{{ config('cookie-consent.cookie_value_marketing') }}"
     data-cookie-value-both="{{ config('cookie-consent.cookie_value_both') }}"
     data-cookie-value-none="{{ config('cookie-consent.cookie_value_none') }}"
     data-cookie-expiration-days="{{ config('cookie-consent.cookie_expiration_days') }}"
     data-gtm-event="{{ config('cookie-consent.gtm_event') }}"
     data-ignored-paths="{{ implode(',', config('cookie-consent.ignored_paths', [])) }}"
>
    <div class="lcc-modal__content">
        <h2 id="lcc-modal-alert-label" class="lcc-modal__title">
            Privacy Overview
        </h2>
        <p id="lcc-modal-alert-desc" class="lcc-text">
            This website uses cookies so that we can provide you with the best user experience possible. Cookie information is stored in your browser and performs functions such as recognising you when you return to our website and helping our team to understand which sections of the website you find most interesting and useful.
        </p>
        <p>You can adjust all of your cookie settings by navigating the tabs on the left hand side.</p>
    </div>
    <div class="lcc-modal__actions">
        <a class="btn btn-success btn-sm" style="background: #c0b298!important;border-color: #c0b298!important;border-radius: 0;padding: .40rem .5rem;" href="https://qwertydemo.tk/eugeneraldatapro/en/module/eugeneraldatapro/informations" target="_blank">
            EU: GDPR
        </a>
        <button type="button" class="lcc-button lcc-button--link js-lcc-settings-toggle">
            @lang('cookie-consent::texts.alert_settings')
        </button>
        <button type="button" class="lcc-button js-lcc-accept">
            Accept
        </button>
        <button type="button" class="lcc-button js-lcc-accept">
            Allow All
        </button>
    </div>
</div>

<div role="dialog" aria-labelledby="lcc-modal-settings-label" aria-describedby="lcc-modal-settings-desc" aria-modal="true" class="lcc-modal lcc-modal--settings js-lcc-modal js-lcc-modal-settings" style="display: none;">
    <button class="lcc-modal__close js-lcc-settings-toggle" type="button">
        <span class="lcc-u-sr-only">
            @lang('cookie-consent::texts.settings_close')
        </span>
        &times;
    </button>
    <div class="lcc-modal__content">
        <div class="lcc-modal__content">
            <h2 id="lcc-modal-settings-label" class="lcc-modal__title">
                @lang('cookie-consent::texts.settings_title')
            </h2>
            <p id="lcc-modal-settings-desc" class="lcc-text">
                @lang('cookie-consent::texts.settings_text', [ 'policyUrl' => config("cookie-consent.policy_url_$locale")])
            </p>
            <div class="lcc-modal__section lcc-u-text-center">
                <button type="button" class="lcc-button js-lcc-accept">
                    @lang('cookie-consent::texts.settings_accept_all')
                </button>
            </div>
            <div class="lcc-modal__section">
                <label for="lcc-checkbox-essential" class="lcc-label">
                    <input type="checkbox" id="lcc-checkbox-essential" disabled="disabled" checked="checked">
                    <span>@lang('cookie-consent::texts.setting_essential')</span>
                </label>
                <p class="lcc-text">
                    @lang('cookie-consent::texts.setting_essential_text')
                </p>
            </div>
            <div class="lcc-modal__section">
                <label for="lcc-checkbox-analytics" class="lcc-label">
                    <input type="checkbox" id="lcc-checkbox-analytics">
                    <span>@lang('cookie-consent::texts.setting_analytics')</span>
                </label>
                <p class="lcc-text">
                    @lang('cookie-consent::texts.setting_analytics_text')
                </p>
            </div>
            <div class="lcc-modal__section">
                <label for="lcc-checkbox-marketing" class="lcc-label">
                    <input type="checkbox" id="lcc-checkbox-marketing">
                    <span>@lang('cookie-consent::texts.setting_marketing')</span>
                </label>
                <p class="lcc-text">
                    @lang('cookie-consent::texts.setting_marketing_text')
                </p>
            </div>
        </div>
    </div>
    <div class="lcc-modal__actions">
        <button type="button" class="lcc-button lcc-button--link js-lcc-settings-toggle">
            @lang('cookie-consent::texts.settings_cancel')
        </button>
        <button type="button" class="lcc-button js-lcc-settings-save">
            @lang('cookie-consent::texts.settings_save')
        </button>
    </div>
</div>

<div class="lcc-backdrop js-lcc-backdrop" style="display: none;"></div>
<script type="text/javascript" src="{{ asset("vendor/cookie-consent/js/cookie-consent.js") }}"></script>
