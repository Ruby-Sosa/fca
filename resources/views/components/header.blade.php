<header class="site-header">

    <!-- 🔵 LOGO FLOTANTE IZQUIERDA -->
    <div class="logo-float-left">
        <img src="{{ asset('img/logo.jpg') }}" alt="Logo FCA">
    </div>

    <div class="container-fluid py-1">
        <div class="row align-items-center">
            <div class="col-md-12 text-center text-md-start ps-5">
                <div class="brand-title">Facultad de Contaduría y Administración</div>
                <p class="brand-subtitle">“Luz, Ciencia y Verdad”</p>
            </div>
        </div>
    </div>
    @include('components.navbar')
    @include('components.subnavbar')

</header>