@extends('frontend.layouts.inner-master')
@section('content')
    <div class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                    <div id="smartwizard">
                        <ul class="nav">
                            <li>
                                <a class="nav-link" href="#step-1">
                                    <strong>Step 1</strong>
                                    <br>
                                    Personal Details
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="#step-2">
                                    <strong>Step 1</strong>
                                    <br>
                                    Family details
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="#step-3">
                                    <strong>Step 1</strong>
                                    <br>
                                    Legal bits
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="#step-4">
                                    <strong>Step 1</strong>
                                    <br>
                                    Instructions
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <form action="" method="POST">
                                <div id="step-1" class="tab-pane" role="tabpanel">
                                    <div class="form-group">
                                        <label class="control-label">First Name</label>
                                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name">
                                    </div>
                                </div>
                                <div id="step-2" class="tab-pane" role="tabpanel">
                                    Step content
                                </div>
                                <div id="step-3" class="tab-pane" role="tabpanel">
                                    Step content
                                </div>
                                <div id="step-4" class="tab-pane" role="tabpanel">
                                    Step content
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />

@endpush
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function (){
            $('#smartwizard').smartWizard({
                theme:'arrows',
                selected: 0,
                justified: true,
                darkMode:false,
                autoAdjustHeight: true,
                cycleSteps: false,
                backButtonSupport: true,
                enableURLhash: true,
                transition: {
                    animation: 'slide-horizontal',
                },
            });
        });
    </script>
@endpush
