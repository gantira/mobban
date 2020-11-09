<div wire:ignore.self class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form wire:submit.prevent='submit'>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <!--begin::Form-->
                    <div class="">
                        <div class="form-group mb-8">
                            <div class="alert alert-custom alert-default" role="alert">
                                <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                                <div class="alert-text">
                                    The example form below demonstrates common HTML form elements that receive
                                    updated styles from Bootstrap with additional classes.
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase text-muted">name</label>
                            <input wire:model.defer="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" placeholder="" />
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase text-muted">email</label>
                            <input wire:model.defer="email" type="text"
                                class="form-control @error('email') is-invalid @enderror" placeholder="" />
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase text-muted">password</label>
                            <input wire:model.defer="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" placeholder="" />
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            @if ($this->editMode)
                                <span class="text-danger">note: abaikan kolom password apabila tidak berubah</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase text-muted">password confirmation</label>
                            <input wire:model.defer="password_confirmation" type="password"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                placeholder="" />
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group" wire:ignore>
                            <label class="text-uppercase text-muted">role</label>
                            <select wire:model.defer="role" id="kt_dual_listbox_1"
                                class="dual-listbox @error('role') is-invalid @enderror" multiple>
                                @foreach ($selectRoles as $item)
                                    <option value="{{ $item->name }}" {{ $this->isSelected($item->name) }}>
                                        {{ $item->name }} {{ $this->isSelected($item->name) }}
                                    </option>
                                @endforeach
                            </select>
                            @error('role')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold"
                        data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
</div>

@push('scripts')
    <script>
        // Class definition
        var KTDualListbox = function() {
            // Private functions
            var demo1 = function() {
                // Dual Listbox
                var listBox = $('#kt_dual_listbox_1');

                var $this = listBox;

                // get options
                var options = [];
                $this.children('option').each(function() {
                    var value = $(this).val();
                    var label = $(this).text();
                    options.push({
                        text: label,
                        value: value
                    });
                });

                // init dual listbox
                var dualListBox = new DualListbox($this.get(0), {
                    addEvent: function(value) {
                        console.log(value);
                        @this.set('roles', $('#kt_dual_listbox_1').val());
                    },
                    removeEvent: function(value) {
                        console.log(value);
                        @this.set('roles', $('#kt_dual_listbox_1').val());
                    },
                    availableTitle: 'Available options',
                    selectedTitle: 'Selected options',
                    addButtonText: 'Add',
                    removeButtonText: 'Remove',
                    addAllButtonText: 'Add All',
                    removeAllButtonText: 'Remove All',
                    // options: options,
                });
            };

            return {
                // public functions
                init: function() {
                    demo1();
                },
            };
        }();

        jQuery(document).ready(function() {
            KTDualListbox.init();
        });

    </script>
@endpush
