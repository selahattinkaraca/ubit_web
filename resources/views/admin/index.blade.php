@extends('admin.layouts.master')

@section('title')
    Anasayfa
@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1')
            Anasayfa
        @endslot
        @slot('title')
            Anasayfa
        @endslot
    @endcomponent

@endsection
