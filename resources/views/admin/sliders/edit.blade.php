@extends('admin.layouts.master')

@section('title')
    Sliderlar
@endsection

@section('css')
    <link href="{{asset('/assets/libs/magnific-popup/magnific-popup.min.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('/assets/libs/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet"/>
@endsection
@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1')
            Anasayfa
        @endslot
        @slot('title')
            Sliderlar
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">{{ $slider->name }}</h4>

                    <form action="{{ route('sliders.update', $slider->id) }}" enctype="multipart/form-data"
                          method="post">
                        <div class="row mb-4">
                            <label for="name-input" class="col-sm-3 col-form-label">Ad</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="name-input"
                                       value="{{ $slider->name }}" required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="url" class="col-sm-3 col-form-label">URL</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="url" id="url" value="{{$slider->url}}">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="status-input" class="col-sm-3 col-form-label">Resim</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" id="image" accept="image/jpeg, image/png" />
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="status-input" class="col-sm-3 col-form-label">Dil</label>
                            <div class="col-sm-9">
                                <select class="form-select" name="type" id="status-input" required>
                                    <option value="tr" {{ $slider->type == 'tr' ? 'selected' : '' }}>Türkçe</option>
                                    <option value="en" {{ $slider->type == 'en' ? 'selected' : '' }}>İngilizce</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="status-input" class="col-sm-3 col-form-label">Durum</label>
                            <div class="col-sm-9">
                                <select class="form-select" name="status" id="status-input" required>
                                    <option value="1" {{ $slider->status == 1 ? 'selected' : '' }}>Aktif</option>
                                    <option value="0" {{ $slider->status == 0 ? 'selected' : '' }}>Pasif</option>
                                </select>
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    @csrf
                                    <button type="submit" class="btn btn-primary w-md" id="submitBtn">Kaydet</button>
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

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Resimler</h4>

                    <div class="row mb-2">
                        <div class="zoom-gallery d-flex flex-wrap">
                            @foreach($slider->getMedia() as $index => $media)
                                <div class="row">
                                    <div class="col-md-8">
                                        <a href="{{asset($media->getUrl())}}" title="{{$media->file_name}}">
                                            <img class="avatar-lg" style="width: auto;"
                                                 src="{{asset($media->getUrl())}}" alt="{{$media->file_name}}"
                                                 >
                                        </a>
                                    </div>{{--
                                    <div class="col md-2">
                                        <button class="btn btn-danger img-delete-btn" data-id="{{$index}}">
                                            <i class='bx bx-trash'></i>
                                        </button>
                                    </div>--}}
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

        </div> <!-- end col -->

    </div> <!-- end row -->

@endsection
@section('script')
   {{-- <script src="{{asset('/assets/libs/fancyuploder/jquery.ui.widget.js')}}"></script>
    <script src="{{asset('/assets/libs/fancyuploder/jquery.fileupload.js')}}"></script>
    <script src="{{asset('/assets/libs/fancyuploder/jquery.iframe-transport.js')}}"></script>
    <script src="{{asset('/assets/libs/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
    <script src="{{asset('/assets/libs/fancyuploder/fancy-uploader.js')}}"></script>--}}

    <!-- Magnific Popup-->
    <script src="{{asset('/assets/libs/magnific-popup/magnific-popup.min.js')}}"></script>

    <!-- lightbox init js-->
    <script src="{{asset('/assets/js/pages/lightbox.init.js')}}"></script>

    <!-- form advanced init -->
    <script src="{{ asset('/assets/js/pages/sliders/form.init.js') }}"></script>
@endsection

