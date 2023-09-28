@extends('admin.layouts.master')

@section('title')
    Sponsor
@endsection

@section('css')
    <link href="{{ asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/assets/libs/datepicker/datepicker.min.css') }}">
@endsection

@section('content')
    @component('admin.components.breadcrumb')
        @slot('li_1')
            Anasayfa
        @endslot
        @slot('title')
            Sponsor
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Yeni</h4>

                    <form action="{{ route('sponsors.store') }}" enctype="multipart/form-data" method="post">

                        <div class="row mb-4">
                            <label for="slug" class="col-sm-3 col-form-label">Sıra</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug"
                                       autocomplete="slug" autofocus required>
                                @error('slug')
                                <span class="invalid-feedback" role="alert">{!! $message !!}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="row mb-4">
                            <label for="title-input" class="col-sm-3 col-form-label">Başlık</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" id="title-input" required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="image-input" class="col-sm-3 col-form-label">Resim</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="image-input" name="image" autofocus
                                           required>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    @csrf
                                    <button type="submit" class="btn btn-primary w-md">Kaydet</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

        </div> <!-- end col -->

    </div> <!-- end row -->

@endsection

@section('script')
    <!-- Required datatable js -->
    <script src="{{ asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ asset('/assets/js/pages/news/datatables.init.js') }}"></script>
    <script src="{{ asset('/assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>

    <!-- form advanced init -->
    <script src="{{ asset('/assets/js/pages/form-advanced.init.js') }}"></script>
@endsection
