<div wire:ignore.self class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form wire:submit.prevent='submit'>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Categories</h5>
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
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase text-muted">order</label>
                            <input wire:model.defer="order" type="number"
                                class="form-control @error('order') is-invalid @enderror" placeholder="" />
                            @error('order')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase text-muted">color</label>
                            <input wire:model.defer="color" type="color"
                                class="form-control @error('color') is-invalid @enderror" placeholder="" />
                            @error('color')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase text-muted">visible</label>
                            <select wire:model="visible" class="form-control @error('visible') is-invalid @enderror">
                                <option value="0">False</option>
                                <option value="1">True</option>
                            </select>
                            @error('visible')
                                <div class="text-danger">
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
