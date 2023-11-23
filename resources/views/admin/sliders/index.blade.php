@extends('admin.layouts.master')

@section('title')
    Sliderlar
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
            Sliderlar
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Sliderlar</h4>
                    <p class="card-title-desc">Sliderları buradan görüntüleyebilirsiniz.</p>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>İsim</th>
                            <th>Resim</th>
                            <th>Dil</th>
                            <th>Durum</th>
                            <th>Oluşturma Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sliders as $slider)
                            <tr>
                                <td>{{ $slider->id }}</td>
                                <td>{{ $slider->name }}</td>
                                <td><img style="width: 80px;height:80px"  width="200" height="150"src="{{ asset($slider->getMedia()[0]->getFullUrl()) }}"
                                         class="rounded avatar-lg"></td>
                                <td>{{$slider->type}}</td>
                                <td>
                                    <span class="badge badge-soft-{{ $slider->status == 1 ? 'success' : 'danger' }}
                                     font-size-12 m-1">{{ $slider->status == 1 ? 'Aktif' : 'Pasif'  }}</span>
                                </td>
                                <td>{{ $slider->created_at }}</td>
                                <td>
                                    <ul class="list-inline font-size-20 contact-links mb-0">
                                        <li class="list-inline-item px-2">
                                            <a href="{{ route('sliders.edit', $slider->id) }}"
                                               class="text-warning"><i
                                                    class="bx bx-edit"></i></a>
                                        </li>
                                        <li class="list-inline-item px-2">
                                            <form action="{{ route('sliders.delete', $slider->id) }}" method="POST">
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
    <script src="{{ asset('/assets/js/pages/sliders/datatables.init.js') }}"></script>
@endsection

