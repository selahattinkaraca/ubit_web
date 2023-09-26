@extends('admin.layouts.master')

@section('title')
Basında Biz
@endsection

@section('content')

@component('admin.components.breadcrumb')
@slot('li_1')
Anasayfa
@endslot
@slot('title')
Haberler
@endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('contacts.update', $contact->id) }}" enctype="multipart/form-data" method="post">

                    <div class="row mb-4">
                        <label for="title-input" class="col-sm-3 col-form-label">Başlık</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="title" id="title-input" required value="{{$contact->title}}">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="title-input" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="mail" id="title-input" required value="{{$contact->mail}}">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="title-input" class="col-sm-3 col-form-label">Telefon Numarası</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="phone_number" id="title-input" required value="{{$contact->phone_number}}">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="title-input" class="col-sm-3 col-form-label">Harita Embed Link</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="embed" id="title-input" required value="{{$contact->embed}}">
                        </div>
                    </div>

                    <div class="row  mb-4">
                        <label for="image-input" class="col-sm-3 col-form-label">Adres</label>

                        <div class="col-sm-9">
                            <div class="card">
                                <div class="card-body">

                                        <textarea id="elm1" name="address">{{$contact->address}}</textarea>

                                </div>
                            </div>
                        </div> <!-- end col -->
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
<!--tinymce js-->
<script src="{{ asset('/assets/libs/tinymce/tinymce.min.js')}}"></script>

<!-- init js -->
<script src="{{ asset('/assets/js/pages/form-editor.init.js')}}"></script>
@endsection
