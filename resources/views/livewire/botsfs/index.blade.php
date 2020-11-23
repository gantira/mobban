@section('title', 'Bot SF')

@section('info')
    <div class="d-flex align-items-center flex-wrap mr-1">
        <!--begin::Heading-->
        <div class="d-flex flex-column">
            <!--begin::Title-->
            <h2 class="text-white font-weight-bold my-2 mr-5">Bot SF</h2>
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
                <a href="{{ url('/') }}" class="text-white text-hover-white opacity-75 hover-opacity-100">Home</a>
                <!--end::Item-->
                <!--begin::Item-->
                <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                <a href="#" class="text-white text-hover-white opacity-75 hover-opacity-100" disabled>Bot SF</a>
                <!--end::Item-->
            </div>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Heading-->
    </div>
@endsection

<div class="container">
    <!--begin::Card-->
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-outline-primary" wire:ignore>
                        <i class="flaticon2-pie-chart"></i>
                        <input type="radio" name="options" id="option2" checked
                            wire:click="$set('kategori', 'WAITING')" />
                        WAITING
                    </label>
                    <label class="btn btn-outline-primary" wire:ignore>
                        <i class="flaticon2-pie-chart"></i>
                        <input type="radio" name="options" id="option1" wire:click="$set('kategori', 'ASSIGNED')" />
                        ASSIGNED
                    </label>
                    <label class="btn btn-outline-primary" wire:ignore>
                        <i class="flaticon2-pie-chart"></i>
                        <input type="radio" name="options" id="option3" wire:click="$set('kategori', '')" />
                        INFO PROGRESS
                    </label>
                </div>
            </div>

            <div class="input-icon input-icon-right" wire:ignore>
                <input wire:model='search' type="search" class="form-control w-450px" placeholder="Search Track ID/SC ID/NCX ID/ND INTERNET/ND TELP/NAMA" />
                <span>
                    <i class="flaticon2-search-1 icon-md"></i>
                </span>
            </div>


            <div class="card-toolbar">
                <div class="d-flex justify-content-between">
                    <div class='input-group mr-2' id='kt_daterangepicker_1' wire:ignore.self>
                        <input wire:model="date" id="date" type='text' class="form-control"
                            placeholder="Select date range" autocomplete="off" readonly />
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="la la-calendar-check-o"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div wire:ignore class="mr-2">
                    <select wire:model="datel" class="form-control selectpicker" multiple="multiple"
                        placeholder="Datel">
                        @foreach ($selectDatels as $item)
                            <option value="{{ $item->datel }}">{{ $item->datel }}</option>
                        @endforeach
                    </select>
                </div>

                <div wire:ignore class="mr-2">
                    <select wire:model="sto" class="form-control selectpicker" multiple="multiple" placeholder="Datel">
                        @foreach ($selectStos as $item)
                            <option value="{{ $item->sto }}">{{ $item->sto }}</option>
                        @endforeach
                    </select>
                </div>

                <div wire:ignore class="mr-2">
                    <select wire:model="kategori" class="form-control selectpicker" multiple="multiple" placeholder="Datel">
                        @foreach ($selectCategories as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
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
                    <thead class="thead-light text-nowrap text-uppercase">
                        <tr>
                            <th>created at</th>
                            <th>last updated</th>
                            <th>datel</th>
                            <th>sto</th>
                            <th>track id</th>
                            <th>sc id</th>
                            <th>ncx id</th>
                            <th>nd internet</th>
                            <th>nd telp</th>
                            <th>nama</th>
                            <th>no hp 1</th>
                            <th>no hp 2</th>
                            <th>alamat</th>
                            <th>kode sales</th>
                            <th>layanan</th>
                            <th>paket</th>
                            <th>wo id</th>
                            <th>odp</th>
                            <th>crew</th>
                            <th>user name telegram</th>
                            <th>teknisi assigned</th>
                            <th>teknisi update</th>
                            <th>kategori</th>
                            <th>info progress</th>
                            @if ($kategori != 'ASSIGNED')
                                <th>actions</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($botsfs as $item)
                            <tr>
                                <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                <td>{{ $item->updated_at->format('d/m/Y') }}</td>
                                <td>{{ $item->datel }}</td>
                                <td>{{ $item->sto }}</td>
                                <td>{{ $item->track_id }}</td>
                                <td>{{ $item->sc_id }}</td>
                                <td>{{ $item->ncx_id }}</td>
                                <td>{{ $item->nd_internet }}</td>
                                <td>{{ $item->nd_telp }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->no_hp1 }}</td>
                                <td>{{ $item->no_hp2 }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->kode_sales }}</td>
                                <td>{{ $item->layanan }}</td>
                                <td>{{ $item->paket }}</td>
                                <td>{{ $item->wo_id }}</td>
                                <td>{{ $item->odp }}</td>
                                <td>{{ $item->crew }}</td>
                                <td>{{ $item->user_name_telegram }}</td>
                                <td>{{ $item->teknisi }}</td>
                                <td>{{ $item->user_name_telegram_teknisi }}</td>
                                <td>{!! $item->kategori_label !!}</td>
                                <td>{{ $item->info_progress }}</td>


                                <td class="text-nowrap">
                                    @if ($kategori == 'WAITING')
                                        <a wire:click="$emit('edit', {{ $item }})"
                                            class="btn btn-icon btn-light-success pulse pulse-success">
                                            <i class="flaticon-paper-plane"></i>
                                            <span class="pulse-ring"></span>
                                        </a>
                                    @elseif ($kategori == 'ASSIGNED')

                                    @else
                                        <a wire:click="$emit('edit', {{ $item }})"
                                            class="btn btn-icon btn-light-info pulse pulse-info">
                                            <i class="flaticon-edit"></i>
                                            <span class="pulse-ring"></span>
                                        </a>

                                        <a wire:click="showConfirmation({{ $item->id }})"
                                            class="btn btn-icon btn-light-danger pulse pulse-danger">
                                            <i class="flaticon2-trash"></i>
                                            <span class="pulse-ring"></span>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="23">Tidak ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!--end: Datatable-->
            <div class="d-flex justify-content-between align-content-center my-3">
                <div>
                    {{ $botsfs->links() }}
                </div>
                <div class="d-flex text-nowrap align-items-center">
                    <span class="mr-3">Show Page</span>
                    <select wire:model='paginate' class="form-control form-control-sm">
                        <option value="5">5</option>
                        <option value="10">10</option>
                    </select>
                </div>
            </div>
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card-->


    <!-- Modal-->
    <livewire:botsfs.modal />
</div>



@section('styles')
@endsection

@push('scripts')
    <!--begin::Page Vendors(used by this page)-->
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script>
        const SwalConfirm = (icon, title, html, confirmButtonText, method, params, callback) => {
            Swal.fire({
                icon,
                title,
                html,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText,
                reverseButtons: true,
            }).then(result => {
                if (result.value) {
                    return livewire.emit(method, params)
                }

                if (callback) {
                    return livewire.emit(callback)
                }
            })
        }

        document.addEventListener('DOMContentLoaded', () => {
            this.livewire.on('swal:confirm', data => {
                SwalConfirm(data.icon, data.title, data.text, data.confirmText, data.method, data.params,
                    data.callback)
            })
        })

        Livewire.on('modal', () => {
            $('#modal').modal('toggle')
        })

        Livewire.on('swal', () => {
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Your work has been saved",
                showConfirmButton: false,
                timer: 1500
            });
        })

        // predefined ranges
        var start = moment().subtract(29, 'days');
        var end = moment();

        $('#kt_daterangepicker_1').daterangepicker({
            buttonClasses: ' btn',
            applyClass: 'btn-primary',
            cancelClass: 'btn-secondary',
            locale: {
                cancelLabel: 'Clear'
            },

            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
                    'month')]
            }
        }, function(start, end, label) {
            $('#kt_daterangepicker_1 .form-control').val(start.format('MM/DD/YYYY') + ' - ' + end.format(
                'MM/DD/YYYY'));
            $('#kt_daterangepicker_1').on('apply.daterangepicker', function(e) {
                // console.log(start.format('MM/DD/YYYY') + ' - ' + end.format(
                //     'MM/DD/YYYY'))
                @this.set('date', start.format('MM/DD/YYYY') + ' - ' + end.format(
                    'MM/DD/YYYY'));
            });

            $('#kt_daterangepicker_1').on('cancel.daterangepicker', function(ev, picker) {
                //do something, like clearing an input
                @this.set('date', '');
            });
        });

    </script>
    <!--end::Page Scripts-->
@endpush
