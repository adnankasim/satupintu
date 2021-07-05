<div>
  @section('title', 'Edit ' . __('app.citizen'))
  @section('citizen', 'active')
  @include('layouts.page-title', ['page_title' => __('app.citizen')])

        <div class="page-body">
          <div class="container-xl">
            <div class="row row-deck row-cards">
              <div class="col-12">
                <div class="card" style="border-radius: 10px;">
                  <div class="card-header d-flex justify-content-between">
                    <h2>Edit {{ __('app.citizen') }}</h2>
                    <a class="d-block btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Kembali"
                        @if(url()->previous() === url()->current()) href="{{ url('citizen') }}"
                        @else href="{{ url()->previous() }}" @endif
                    ><span class="fa fa-arrow-left"></span></a>
                  </div>

                  <div class="card-body border-bottom py-3">

                    <form wire:submit.prevent="update" enctype="multipart/form-data">
                        @include('livewire.citizen.form')
                        <div class="form-footer w-100">
                        <button type="submit" class="btn btn-primary btn-block w-100">
                            <span class="fa fa-paper-plane"></span>
                            &nbsp; {{ __('app.update') }}</button>
                        </div>
                    </form>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

</div>
