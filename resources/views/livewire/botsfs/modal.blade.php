<div wire:ignore.self class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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

                    <div class="form-group mb-8">
                        <div class="alert alert-custom alert-default" role="alert">
                            <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                            <div class="alert-text">
                                The example form below demonstrates common HTML form elements that receive
                                updated styles from Bootstrap with additional classes.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">

                                <label class="text-uppercase text-muted">sto</label>
                                <input wire:model.defer="sto" type="text" @if ($editMode)
                                readonly @endif
                                class="form-control @error('sto') is-invalid @enderror" placeholder="" />
                                @error('sto')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase text-muted">datel</label>
                                <input wire:model.defer="datel" type="text" @if ($editMode)
                                readonly @endif
                                class="form-control @error('datel') is-invalid @enderror " placeholder="" />
                                @error('datel')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase text-muted">nama</label>
                                <input wire:model.defer="nama" type="text" @if ($editMode)
                                readonly @endif
                                class="form-control @error('nama') is-invalid @enderror " placeholder="" />
                                @error('nama')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase text-muted">track id</label>
                                <input wire:model.defer="track_id" type="text" @if ($editMode) readonly @endif
                                class="form-control @error('track_id') is-invalid @enderror " placeholder="" />
                                @error('track_id')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase text-muted">no hp 1</label>
                                <input wire:model.defer="no_hp_1" type="text" @if ($editMode) readonly @endif
                                class="form-control @error('no_hp_1') is-invalid @enderror " placeholder="" />
                                @error('no_hp_1')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase text-muted">no hp 2</label>
                                <input wire:model.defer="no_hp_2" type="text" @if ($editMode) readonly @endif
                                class="form-control @error('no_hp_2') is-invalid @enderror " placeholder="" />
                                @error('no_hp_2')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase text-muted">alamat</label>
                                <input wire:model.defer="alamat" type="text"
                                    class="form-control @error('alamat') is-invalid @enderror " placeholder="" />
                                @error('alamat')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase text-muted">odp</label>
                                <input wire:model.defer="odp" type="text"
                                    class="form-control @error('odp') is-invalid @enderror " placeholder="" />
                                @error('odp')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase text-muted">kode sales</label>
                                <input wire:model.defer="kode_sales" type="text" @if ($editMode) readonly @endif
                                class="form-control @error('kode_sales') is-invalid @enderror " placeholder="" />
                                @error('kode_sales')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase text-muted">user name telegram</label>
                                <input wire:model.defer="user_name_telegram" type="text" @if ($editMode) readonly @endif
                                class="form-control @error('user_name_telegram') is-invalid @enderror "
                                placeholder="" />
                                @error('user_name_telegram')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="text-uppercase text-muted">info progress</label>
                                <input wire:model.defer="info_progress" type="text" @if ($editMode) readonly @endif
                                class="form-control @error('info_progress') is-invalid @enderror " placeholder="" />
                                @error('info_progress')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase text-muted">kategori</label>
                                <select class="form-control" wire:model="kategori" name="param">
                                    <option value=""></option>
                                    @foreach ($selectCategories as $item)
                                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('kategori')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase text-muted">paket</label>
                                <input wire:model.defer="paket" type="text" @if ($editMode)
                                readonly @endif
                                class="form-control @error('paket') is-invalid @enderror " placeholder="" />
                                @error('paket')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase text-muted">sc id</label>
                                <input wire:model.defer="sc_id" type="text"
                                    class="form-control @error('sc_id') is-invalid @enderror " placeholder="" />
                                @error('sc_id')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase text-muted">nd internet</label>
                                <input wire:model.defer="nd_internet" type="text" @if ($editMode) readonly @endif
                                class="form-control @error('nd_internet') is-invalid @enderror " placeholder="" />
                                @error('nd_internet')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase text-muted">nd telp</label>
                                <input wire:model.defer="nd_telp" type="text"
                                    class="form-control @error('nd_telp') is-invalid @enderror " placeholder="" />
                                @error('nd_telp')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase text-muted">teknisi</label>
                                <select class="form-control" wire:model="teknisi" name="param">
                                    <option value=""></option>
                                    @foreach ($selectUserBots as $item)
                                        <option value="{{ $item->user_name_telegram }}">{{ $item->user_name_telegram }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('teknisi')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase text-muted">user name telegram teknisi</label>
                                <input wire:model.defer="user_name_telegram_teknisi" type="text"
                                    class="form-control @error('user_name_telegram_teknisi') is-invalid @enderror "
                                    placeholder="" />
                                @error('user_name_telegram_teknisi')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase text-muted">layanan</label>
                                <input wire:model.defer="layanan" type="text"
                                    class="form-control @error('layanan') is-invalid @enderror " placeholder="" />
                                @error('layanan')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase text-muted">wo id</label>
                                <input wire:model.defer="wo_id" type="text"
                                    class="form-control @error('wo_id') is-invalid @enderror " placeholder="" />
                                @error('wo_id')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
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
