@extends('admin.layouts.master')

@section('title')
   Sponsorlar

@endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1')
            Anasayfa
        @endslot
        @slot('title')
           Sponsorlar
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Sponsorlar</h4>
                    <p class="card-title-desc">Sponsorları buradan görüntüleyebilirsiniz.</p>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Başlık</th>
                            <th>Resim</th>
                            <th>Oluşturma Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sponsors as $sponsor)
                            <tr>
                                <td>{{ $sponsor->slug }}</td>
                                <td>{{ $sponsor->title }}</td>
                                <td>
                                    <img src="{{ asset($sponsor->getFirstMediaUrl()) }}" alt=""
                                         class="avatar-sm">
                                </td>
                                <td>{{ $sponsor->created_at }}</td>
                                <td>
                                    <ul class="list-inline font-size-20 contact-links mb-0">
                                        <li class="list-inline-item px-2">
                                            <a href="{{ route('sponsors.edit', $sponsor->id) }}"
                                               class="text-warning"><i
                                                    class="bx bx-edit"></i></a>
                                        </li>

                                            <li class="list-inline-item px-2">
                                                <form action="{{ route('sponsors.delete', $sponsor->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" style="border: 0;background-color: transparent" class=""><i class=" text-danger bx bx-trash"></i></button>
                                                </form>
                                            </li>


                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
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

