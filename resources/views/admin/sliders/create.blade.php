@extends('admin.layouts.master')

@section('title')
    Sliderlar
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
                    <h4 class="card-title mb-4">Yeni</h4>

                    <form action="{{ route('sliders.store') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="row mb-4">
                            <label for="name-input" class="col-sm-3 col-form-label">Ad</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="name-input" required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="url" class="col-sm-3 col-form-label">URL</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="url" id="url" >
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

                        <div class="row mb-4">
                            <label for="status-input" class="col-sm-3 col-form-label">Dil</label>
                            <div class="col-sm-9">
                                <select class="form-select" name="type" id="status-input" required>
                                    <option value="tr" selected>Türkçe</option>
                                    <option value="en">İngilizce</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="status-input" class="col-sm-3 col-form-label">Durum</label>
                            <div class="col-sm-9">
                                <select class="form-select" name="status" id="status-input" required>
                                    <option value="1" selected>Aktif</option>
                                    <option value="0">Pasif</option>
                                </select>
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

