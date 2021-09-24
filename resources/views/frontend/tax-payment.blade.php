@extends('frontend.layouts.inner-master')
@section('content')
    <div
        class="sale-breadcumb-area"
        style="background: url('{{asset('frontend/assets/images/bg/sale.png')}}') repeat-x center center / contain"
    >
        <div class="container">
            <h2 class="sale-breadcumb-title" style="font-size: 50px;">Payment</h2>
        </div>
    </div>

    <div class="container mb-75">
        <div class="row mt-5">
            <div class="col-md-8 col-lg-8 col-12">
                <div class="secure-title d-flex mb-3">
                    <img style="max-height: 40px" src="{{asset('frontend/assets/images/lock-icon.png')}}" alt="">
                    <h2 class="ml-2 mt-1" style="color: #c0b298">Secure Payment Form</h2>
                </div>
                <div class="card p-3">
                    <div class="card-body">
                        <form action="{{route('tax.fee.payment')}}" method="post" id="payment-form">
                            @csrf
                            <div class="form-group">
                                <label style="font-weight: bold;font-size: 22px;margin-bottom: 20px;font-family: Arial" for="card-element">
                                    Credit or debit card
                                </label>
                                <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>
                                <!-- Used to display Element errors. -->
                                <div id="card-errors" role="alert"></div>
                            </div>
                            <div class="payer mt-5">
                                <h4>Payer Details</h4>
                                <div class="info">
                                    <input type="hidden" value="{{$info->id}}" name="id">
                                    <div class="form-group">
                                        <label for="telephone">Telephone number for contact person:</label>
                                        <input required id="telephone" type="number" name="telephone" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail address for contact person:</label>
                                        <input required id="email" type="email" name="email" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <button style="background: #c0b298;border-color: #c0b298;" class="btn btn-success mt-3">Submit Payment</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card " style="margin-top: 65px;">
                    <div class="card-body">
                        <div>
                            <h4 style="border-bottom: 2px solid #ededed;padding-bottom: 10px;">Order Information</h4>
                        </div>
                        <table class="table table-bordered order-info mt-3">
                            <tr>
                                <td>Sub Total</td>
                                <td>{{'€'.($info->sub_total / $info->total_owner).' * '.$info->total_owner.' = €'.$info->sub_total}}</td>
                            </tr>
                            <tr>
                                <td>Tax(21%)</td>
                                <td>{{'= €'.$info->vat}}</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>{{'= €'.$info->total_amount}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <img style="max-height: 100px" src="{{asset('frontend/assets/images/logo-stripe.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <style>
        .order-info tr td:last-child{
            text-align: right;
        }
        .order-info tr td:first-child{
            font-weight: bold;
        }
        #card-errors{
            color: red;
            margin-top: 10px;
        }
        .form-group{
            margin-bottom: 0!important;
        }
        .payer .info p{
            padding: 0;
            margin: 0;
        }
        .card{
            border-color: #c0b298;
        }
        .StripeElement {
            border: 1px solid #c0b298;
            padding: 10px;
        }
    </style>
    <script src="{{asset('frontend/assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="https://js.stripe.com/v3/"></script>
@endpush
@push('js')
    <script>
        var stripe = Stripe('{{getenv('STRIPE_PUBLIC_KEY')}}');
        var elements = stripe.elements();

        var style = {
            base: {
                color: "#32325d",
                fontFamily: 'Arial, sans-serif',
                fontSmoothing: "antialiased",
                fontSize: "16px",
                "::placeholder": {
                    color: "#32325d"
                }
            },
            invalid: {
                fontFamily: 'Arial, sans-serif',
                color: "#fa755a",
                iconColor: "#fa755a"
            }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {hidePostalCode:true,style: style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');
        card.on("change", function (event) {
            // Disable the Pay button if there are no card details in the Element
            document.querySelector("button").disabled = event.empty;
            document.querySelector("#card-error").textContent = event.error ? event.error.message : "";
        });

        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the customer that there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);
            form.submit();
        }
    </script>
@endpush
