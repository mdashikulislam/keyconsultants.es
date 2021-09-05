@extends('frontend.layouts.inner-master')
@section('content')
    <div
        class="sale-breadcumb-area"
        style="background: url('{{asset('frontend/assets/images/bg/sale.png')}}') repeat-x center center / contain"
    >
        <div class="container">
            <h2 class="sale-breadcumb-title" style="font-size: 50px;">Spanish WIll Form</h2>
        </div>
    </div>
    <div class="container mb-75">
        <div class="row mt-5">
            <div class="col-md-12">
                <div id="smartwizard">
                    <ul class="nav">
                        <li>
                            <a class="nav-link" href="#step-1">
                                Step 1
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#step-2">
                                Step 2
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#step-3">
                                Step 3
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="step-1" class="tab-pane" role="tabpanel">
                            Step 1
                        </div>
                        <div id="step-2" class="tab-pane" role="tabpanel">
                            Step 2
                        </div>
                        <div id="step-3" class="tab-pane" role="tabpanel">
                            Step 3
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="{{asset('frontend/step/css/smart_wizard.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/step/css/smart_wizard_arrows.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

@push('js')
    <script src="{{asset('frontend/step/js/jquery.smartWizard.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            // Smart Wizard
            $('#smartwizard').smartWizard({
                selected: 0,
                theme: 'arrows',
                transitionEffect:'fade',
                toolbarSettings: {toolbarPosition: 'both',
                    toolbarExtraButtons: [
                        {label: 'Finish', css: 'btn-info', onClick: function(){ alert('Finish Clicked'); }},
                        {label: 'Cancel', css: 'btn-danger', onClick: function(){ $('#smartwizard').smartWizard("reset"); }}
                    ]
                }
            });


            // External Button Events
            $("#reset-btn").on("click", function() {
                // Reset wizard
                $('#smartwizard').smartWizard("reset");
                return true;
            });

            $("#prev-btn").on("click", function() {
                // Navigate previous
                $('#smartwizard').smartWizard("prev");
                return true;
            });

            $("#next-btn").on("click", function() {
                // Navigate next
                $('#smartwizard').smartWizard("next");
                return true;
            });

            $("#theme_selector").on("change", function() {
                // Change theme
                $('#smartwizard').smartWizard("theme", $(this).val());
                return true;
            });
        });
    </script>
@endpush

