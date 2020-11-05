<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form wire:submit.prevent='submit'>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Bot SF</h5>
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
                            <label class="text-uppercase text-muted">datel</label>
                            <input wire:model="datel" type="text"
                                class="form-control @error('datel') is_invalid @enderror" placeholder="" />
                            @error('datel')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase text-muted">sto</label>
                            <input wire:model="sto" type="text" class="form-control @error('sto') is_invalid @enderror"
                                placeholder="" />
                            @error('sto')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase text-muted">track_id</label>
                            <input wire:model="track_id" type="text"
                                class="form-control @error('track_id') is_invalid @enderror" placeholder="" />
                            @error('track_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase text-muted">info_progress</label>
                            <input wire:model="info_progress" type="text"
                                class="form-control @error('sto')info_progress @enderror" placeholder="" />
                            @error('info_progress')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase text-muted">date</label>
                            <input wire:model="date" type="text"
                                class="form-control @error('date') is_invalid @enderror" placeholder="" />
                            @error('date')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase text-muted">kategori</label>
                            <input wire:model="kategori" type="text"
                                class="form-control @error('kategori') is_invalid @enderror" placeholder="" />
                            @error('kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase text-muted">evidence</label>
                            <input wire:model="evidence" type="text"
                                class="form-control @error('evidence') is_invalid @enderror" placeholder="" />
                            @error('evidence')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase text-muted">user_name_telegram</label>
                            <input wire:model="user_name_telegram" type="text"
                                class="form-control @error('sto') is_invalid @enderror" placeholder="" />
                            @error('user_name_telegram')
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
