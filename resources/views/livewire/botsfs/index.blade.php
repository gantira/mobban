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
                        <input type="radio" name="options" id="option2" checked wire:click="$set('kategori', 'WAITING')" />
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
            <div class="card-toolbar">
                <div class="input-icon input-icon-right">
                    <input wire:model='search' type="search" class="form-control w-250px" placeholder="Search..." />
                    <span>
                        <i class="flaticon2-search-1 icon-md"></i>
                    </span>
                </div>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body">
            <!--begin: Datatable-->
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-sm">
                    <thead class="thead-light text-nowrap text-uppercase">
                        <tr>
                            <th>created at</th>
                            <th>last updated</th>
                            <th>sto</th>
                            <th>datel</th>
                            <th>nama</th>
                            <th>track id</th>
                            <th>no hp 1</th>
                            <th>no hp 2</th>
                            <th>alamat</th>
                            <th>odp</th>
                            <th>kode sales</th>
                            <th>user name telegram</th>
                            <th>user name telegram teknisi</th>
                            <th>info progress</th>
                            <th>kategori</th>
                            <th>paket</th>
                            <th>sc id</th>
                            <th>nd internet</th>
                            <th>nd telp</th>
                            <th>teknisi</th>
                            <th>layanan</th>
                            <th>wo id</th>
                            @if ($kategori <> 'ASSIGNED')
                                <th>actions</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($botsfs as $item)
                            <tr>
                                <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                <td>{{ $item->updated_at->format('d/m/Y') }}</td>
                                <td>{{ $item->sto }}</td>
                                <td>{{ $item->datel }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->track_id }}</td>
                                <td>{{ $item->no_hp1 }}</td>
                                <td>{{ $item->no_hp2 }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->odp }}</td>
                                <td>{{ $item->kode_sales }}</td>
                                <td>{{ $item->user_name_telegram }}</td>
                                <td>{{ $item->user_name_telegram_teknisi }}</td>
                                <td>{{ $item->info_progress }}</td>
                                <td>{!! $item->kategori_label !!}</td>
                                <td>{{ $item->paket }}</td>
                                <td>{{ $item->sc_id }}</td>
                                <td>{{ $item->nd_internet }}</td>
                                <td>{{ $item->nd_telp }}</td>
                                <td>{{ $item->teknisi }}</td>
                                <td>{{ $item->layanan }}</td>
                                <td>{{ $item->wo_id }}</td>

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
                    <span class="mr-3">Show Page </span>
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

        $('.select2').select2();

    </script>
    <!--end::Page Scripts-->
@endpush
