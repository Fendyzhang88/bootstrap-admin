<a class="nav-link" href="/dashboard">
    <div class="sb-nav-link-icon"><i class="bi bi-house"></i></div>
    Dashboard
</a>

@can('admin')
<div class="sb-sidenav-menu-heading">Admin</div>

<a class="nav-link" href="/admin/utama">
    <div class="sb-nav-link-icon"><i class="bi bi-list-task"></i></div>
    Data Utama
</a>

<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#dataMasterAdmin" aria-expanded="false"
    aria-controls="collapseLayouts">
    <div class="sb-nav-link-icon"><i class="bi bi-clipboard-data"></i></div>
    Data Master
    <div class="sb-sidenav-collapse-arrow"><i class="bi bi-caret-down-fill"></i></div>
</a>
<div class="collapse" id="dataMasterAdmin" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">
        <a class="nav-link" href="/admin/kategori">Kategori Barang</a>
        <a class="nav-link" href="/admin/barang">Barang</a>
        <a class="nav-link" href="/admin/pembayaran">Jenis Pembayaran</a>
    </nav>
</div>
@endcan