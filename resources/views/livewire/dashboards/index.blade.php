@section('title', 'Dashboard')

@section('info')
    <div class="d-flex align-items-center flex-wrap mr-1">
        <!--begin::Heading-->
        <div class="d-flex flex-column">
            <!--begin::Title-->
            <h2 class="text-white font-weight-bold my-2 mr-5">Dashboard</h2>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <div class="d-flex align-items-center font-weight-bold my-2">
                <!--begin::Item-->
                <a href="#" class="opacity-75 hover-opacity-100">
                    <i class="flaticon2-shelter text-white icon-1x"></i>
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                <a href="{{ url('/') }}" class="text-white text-hover-white opacity-75 hover-opacity-100">Dashboard</a>
                <!--end::Item-->
            </div>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Heading-->
    </div>
@endsection

<div class="container">
    <!--begin::Dashboard-->
    <!--begin::Row-->
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-toolbar">
                <div class="mr-2">
                    <select wire:model="datel" class="form-control" placeholder="Datel">
                        <option value="">DATEL</option>
                        @foreach ($selectDatels as $item)
                            <option value="{{ $item->datel }}">{{ $item->datel }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <select wire:model="sto" class="form-control"  placeholder="Datel">
                        <option value="">STO</option>
                        @foreach ($selectStos as $item)
                            <option value="{{ $item->sto }}">{{ $item->sto }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body">
            <!--begin: Datatable-->
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-light text-nowrap text-uppercase text-center">
                        <tr>
                            <th>DATEL</th>
                            @foreach ($selectCategories as $category)
                                <th style="background-color: {{ $category->color }}">{{ $category->name }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($datels as $key => $value)
                            <tr>
                                <td>{{ $key }}</td>
                                @foreach ($value as $item)
                                    <td>{{ $item }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--end: Datatable-->

            <div class="row">
                <div class="col-lg-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b" wire:ignore>
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Column Chart</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Chart-->
                            <div id="chart_3"></div>
                            <!--end::Chart-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                <div class="col-lg-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b" wire:ignore>
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Pie Chart</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Chart-->
                            <div id="chart_12" class="d-flex justify-content-center"></div>
                            <!--end::Chart-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>

        </div>
        <!--end::Body-->


    </div>



    <!--end::Row-->
</div>

@section('styles')
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
@endsection

@push('scripts')
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/pages/features/charts/apexcharts.js') }}"></script>
    <!--end::Page Vendors-->

    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/js/pages/widgets.js') }}"></script>
    <!--end::Page Scripts-->

    <script>
        $('.datel').selectpicker({noneSelectedText: 'DATEL'}); 
        $('.sto').selectpicker({noneSelectedText: 'STO'}); 
    </script>
@endpush
