<div class="d-flex align-items-center">
    <!--begin::Button-->
    <a href="#" class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2" wire:click="$emit('add')">New Record</a>
    <!--end::Button-->
    <!--begin::Dropdown-->
    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Export Excel" data-placement="top">
        <a href="#" class="btn btn-white font-weight-bold py-3 px-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</a>
        <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
            <!--begin::Navigation-->
            <ul class="navi navi-hover py-5">
                <li class="navi-item">
                    <a wire:click="$emit('export')" class="navi-link cursor-pointer">
                        <span class="navi-icon">
                            <i class="flaticon2-drop"></i>
                        </span>
                        <span class="navi-text">Excel</span>
                    </a>
                </li>
            </ul>
            <!--end::Navigation-->
        </div>
    </div>
    <!--end::Dropdown-->
</div>