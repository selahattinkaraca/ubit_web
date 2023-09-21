<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li class="menu-title">Ana Menü</li>

                <li>
                    <a href="{{ route('index') }}" class="waves-effect">
                        <i class="bx bx-home"></i>
                        <span>Anasayfa</span>
                    </a>
                </li>

                <li class="menu-title">Sayfalar</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bx-images'></i>
                        <span>Galeri</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="">Listele</a></li>
                        <li><a href="">Ekle</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bx-images'></i>
                        <span>Sliderlar</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('sliders.index') }}">Listele</a></li>
                        <li><a href="{{ route('sliders.create') }}">Ekle</a></li>
                    </ul>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
