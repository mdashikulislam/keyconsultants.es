<div class="js-cookie-consent cookie-consent" style="background: #2d2d2a;padding: 20px 0;color: #fff">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="cookie-consent__message">
                    This website uses cookies in order to offer you the most relevant information. Please accept cookies for optimal performance.
                </span>
            </div>
            <div class="col-md-2">
                <button class="js-cookie-consent-agree cookie-consent__agree btn btn-success" style="background: #c0b298;border-color: #c0b298">
                    {{ trans('cookieConsent::texts.agree') }}
                </button>
            </div>
        </div>
    </div>
</div>
<style>
    .js-cookie-consent{
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        z-index: 99;
    }
</style>
