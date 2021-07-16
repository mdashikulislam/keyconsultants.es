@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 style="font-weight:bold;" class="card-title">Property List</h3>
                    <a href="{{route('admin.property.create')}}" style="float: right" class="btn btn-info"><i class="fa fa-plus fa-fw"></i>Add Property</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('admin.property.index')}}" method="GET">
{{--                        <div class="input-group mb-3">--}}
{{--                            <input value="{{request()->input('keyword') ? :''}}" type="text" class="form-control" name="keyword" placeholder="Search by Title, Owner Name, Reference Number, Bedrooms, Bathrooms, Price, City, Region, Land Area, Living Space">--}}
{{--                            <button type="submit" class="btn btn-success" style="border-radius: 0"><i class="fa fa-search-plus fa-fw"></i>Search</button>--}}
{{--                            <a href="{{route('admin.property.index')}}" class="btn btn-info" style="border-radius: 0;color: #fff;"><i class="fa fa-recycle fa-fw"></i>Reset</a>--}}
{{--                        </div>--}}
                       <div class="row">
                           <div class="form-group col-4">
                               <input value="{{request()->input('keyword') ? :''}}" type="text" name="keyword" class="form-control" placeholder="Title,Owner,Bedrooms,Bathrooms,Price,Land Area,Living Space">
                           </div>
                           <div class="form-group col-2">
                               <select name="reference_number"  class="select2 form-control">
                                   <option value="" selected disabled>Select Reference</option>
                                   @forelse($referenceNumbers as $referenceNumber)
                                       <option {{$referenceNumber == request()->input('reference_number') ? 'selected':''}} value="{{$referenceNumber}}">{{$referenceNumber}}</option>
                                   @empty
                                   @endforelse
                               </select>
                           </div>
                           <div class="form-group col-2">
                               <select name="city"  class="select2 form-control">
                                   <option value="" selected disabled>Select City</option>
                                   <option {{request()->input('city') == 'Alcudia' ? 'selected':''}} value="Alcudia">Alcudia</option>
                                   <option {{request()->input('city') == 'Binssalem' ? 'selected':''}} value="Binssalem">Binssalem</option>
                                   <option {{request()->input('city') == 'Cala Ratjada' ? 'selected':''}} value="Cala Ratjada">Cala Ratjada</option>
                                   <option {{request()->input('city') == "Cala d'Or" ? 'selected':''}} value="Cala d'Or">Cala d'Or</option>
                                   <option {{request()->input('city') == 'Cala Moraia' ? 'selected':''}} value="Cala Moraia">Cala Moraia</option>
                                   <option {{request()->input('city') == 'Cala Millor' ? 'selected':''}} value="Cala Millor">Cala Millor</option>
                                   <option {{request()->input('city') == 'Calvià Pueblo' ? 'selected':''}} value="Calvià Pueblo">Calvià Pueblo</option>
                                   <option {{request()->input('city') == 'Costa de la Calma' ? 'selected':''}} value="Costa de la Calma">Costa de la Calma</option>
                                   <option {{request()->input('city') == 'Deià' ? 'selected':''}} value="Deià">Deià</option>
                                   <option {{request()->input('city') == 'Esporles' ? 'selected':''}} value="Esporles">Esporles</option>
                                   <option {{request()->input('city') == 'Fornalutx' ? 'selected':''}} value="Fornalutx">Fornalutx</option>
                                   <option {{request()->input('city') == 'Inca' ? 'selected':''}} value="Inca">Inca</option>
                                   <option {{request()->input('city') == 'Manacor' ? 'selected':''}} value="Manacor">Manacor</option>
                                   <option {{request()->input('city') == 'Palma de Mallorca' ? 'selected':''}} value="Palma de Mallorca">Palma de Mallorca</option>
                                   <option {{request()->input('city') == 'Pollença' ? 'selected':''}} value="Pollença">Pollença</option>
                                   <option {{request()->input('city') == 'Puerto Pollensa' ? 'selected':''}} value="Puerto Pollensa">Puerto Pollensa</option>
                                   <option {{request()->input('city') == 'Sa Pobla' ? 'selected':''}} value="Sa Pobla">Sa Pobla</option>
                                   <option {{request()->input('city') == 'Santa Ponça' ? 'selected':''}} value="Santa Ponça">Santa Ponsa</option>
                                   <option {{request()->input('city') == 'S´Arraco' ? 'selected':''}} value="S´Arraco">S'Arraco</option>
                                   <option {{request()->input('city') == 'Sineu' ? 'selected':''}} value="Sineu">Sineu</option>
                                   <option {{request()->input('city') == 'Sóller' ? 'selected':''}} value="Sóller">Sóller</option>
                                   <option {{request()->input('city') == 'Valldemossa' ? 'selected':''}} value="Valldemossa">Valldemossa</option>
                                   <option {{request()->input('city') == 'Port Andratx' ? 'selected':''}} value="Port Andratx">Port Andratx </option>
                                   <option {{request()->input('city') == 'El Toro' ? 'selected':''}} value="El Toro">El Toro</option>
                                   <option {{request()->input('city') == 'Son Ferrer' ? 'selected':''}} value="Son Ferrer">Son Ferrer</option>
                                   <option {{request()->input('city') == 'Paguera' ? 'selected':''}} value="Paguera">Paguera</option>
                               </select>
                           </div>
                           <div class="form-group col-2">
                               <select name="region"  class="select2 form-control">
                                   <option value="" selected disabled>Select Region</option>
                                   @forelse($regions as $region)
                                       <option {{$region->id ==request()->input('region') ? 'selected':''}} value="{{$region->id}}">{{$region->name}}</option>
                                   @empty
                                   @endforelse
                               </select>
                           </div>
                           <div class="form-group col-2 text-right">
                               <button type="submit" class="btn btn-success" style="border-radius: 0;padding: .375rem 0.4rem;"><i class="fa fa-search-plus fa-fw"></i>Search</button>
                               <a href="{{route('admin.property.index')}}" class="btn btn-info" style="border-radius: 0;color: #fff;padding: .375rem 0.4rem;"><i class="fa fa-recycle fa-fw"></i>Reset</a>
                           </div>
                       </div>
                    </form>
                    <table class="table table-bordered">
                        <thead>
                        <tr style="text-align: center">
                            <th style="width: 5%">#</th>
                            <th style="width: 25%;">Image</th>
                            <th>Title</th>
                            <th style="width: 15%">Type</th>
                            <th style="width: 12%">Date</th>
                            <th style="width: 12%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($properties as $property)
                                <tr>
                                    <td>@if($loop->index + 1 <10){{'0'.($loop->index+1)}}@endif @if($loop->index + 1 > 9){{($loop->index+1)}}@endif</td>
                                    <td>
                                        <img style="width: 100%;max-height:180px;" src="{{asset('storage/'.$property->feature_image)}}" alt="">
                                    </td>
                                    <td>
                                        <a class="d-block" target="_blank" href="{{route('properties.details',['id'=>$property->id,'slug'=>$property->slug])}}">{{$property->title}}</a>
                                        <span class="d-block">Reference Number: {{$property->reference_number}}</span>
                                        <span class="d-block">Number of bedrooms: {{$property->room}}</span>
                                        <span class="d-block">Number of bathrooms: {{$property->bathroom}}</span>
                                        <span class="d-block">Price : {{$property->symbol.number_format($property->price)}}</span>
                                        <span class="d-block">Area : {{$property->land_area}}</span>
                                        <span class="d-block">Owner Name : {{$property->owner_name ? :''}}</span>
                                    </td>
                                    <td>
                                        @php
                                            $types = explode(',',$property->property_type);
                                        @endphp
                                        @foreach($types as $type)
                                            {!! \App\Helper\Helper::getPropertyTypeNameById($type) !!}
                                        @endforeach
                                    </td>
                                    <td>{{\Carbon\Carbon::parse($property->created_at)->isoFormat('Do, MM YYYY')}}</td>
                                    <td>
                                        @if($property->post_status == 'Active')
                                            <form id="change-{{$property->id}}" action="{{route('admin.property.status.change')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="post_id" value="{{$property->id}}">
                                                <input type="hidden" name="status" value="Inactive">
                                            </form>
                                            <a href="" onclick="changeStatusInactive({{$property->id}})" class="btn btn-success mb-1"><i class="fa fa-eye-slash"></i></a>
                                        @else
                                            <form id="change-{{$property->id}}" action="{{route('admin.property.status.change')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="status" value="Active">
                                                <input type="hidden" name="post_id" value="{{$property->id}}">
                                            </form>
                                            <a href="" onclick="changeStatusActive({{$property->id}})" class="btn btn-success mb-1"><i class="fa fa-eye"></i></a>
                                        @endif
                                        <a href="{{route('admin.property.note',['id'=>$property->id])}}" class="mb-1 btn btn-info"><i class="fa fa-list"></i></a>
                                        <a href="{{route('admin.property.edit',['id'=>$property->id,'slug'=>$property->slug])}}" class="btn btn-primary mb-1"><i class="fa fa-edit"></i></a>
                                        <form class="d-none" id="delete-{{$property->id}}" action="{{route('admin.property.delete')}}" method="POST">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <input type="hidden" name="id" value="{{$property->id}}">
                                        </form>
                                        <a href="" onclick="deleteProperty({{$property->id}})" class="btn btn-danger mb-1"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td style="text-align: center" colspan="6">No Result Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div style="display: flex;flex-direction: row-reverse;margin-right: 20px;">
                    {{$properties->appends(\request()->input())->links('vendor.pagination.bootstrap-4')}}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="{{asset('backend/plugins/select2/css/select2.min.css')}}">
    <style>
        table tbody tr td{
            vertical-align: middle!important;
        }
        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #aaa;
            border-radius: 4px;
            height: 40px;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice{
            background-color: #007bff;
            border-color: #006fe6;
            color: #fff;
            padding: 0 10px;
            margin-top: .31rem;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove{
            color: rgba(255,255,255,.7);
            float: right;
            margin-left: 5px;
            margin-right: -2px;
        }
    </style>
@endpush
@push('js')
    <script src="{{asset('backend/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        $('.select2').select2();

        function deleteProperty(id){
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You you want to delete your property!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#delete-'+id).submit();
                }
            })
        }
        function changeStatusActive(id){
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You you want to Publish your property!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Publish it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#change-'+id).submit();
                }
            })
        }
        function changeStatusInactive(id){
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You you want to Draft your property!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Draft it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#change-'+id).submit();
                }
            })
        }
    </script>
@endpush
