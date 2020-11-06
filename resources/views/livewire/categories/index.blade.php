@section('title', 'Kategori')

@section('info')
    <div class="d-flex align-items-center flex-wrap mr-1">
        <!--begin::Heading-->
        <div class="d-flex flex-column">
            <!--begin::Title-->
            <h2 class="text-white font-weight-bold my-2 mr-5">Kategori</h2>
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
                <a href="#" class="text-white text-hover-white opacity-75 hover-opacity-100" disabled>Kategori</a>
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
                <h3 class="card-label">Data Table
                    <span class="d-block text-muted pt-2 font-size-sm">Categories management made easy</span>
                </h3>
            </div>
            <div class="card-toolbar">
                <div class="input-icon input-icon-right">
                    <input wire:model='search' type="text" class="form-control w-250px" placeholder="Search..." />
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
                            <th>kategori</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td class="text-nowrap">
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
            <div class="my-3">
                {{ $categories->links() }}
            </div>
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card-->


    <!-- Modal-->
    <livewire:categories.modal />
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
