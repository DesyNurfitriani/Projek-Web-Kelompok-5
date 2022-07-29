<?php $url=base_url(). "Assets/"?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
              <img src="<?=base_url() ?>assets/assets/images/assu.png" alt="..." class="avatar-img" style="height: 80px;">
            </a>
          </div>
<!--   <a href="<?php echo site_url('') ?>" class="brand-link text-center">
    <t class="brand-text font-weight-light"><?php echo $this->session->userdata('toko')->nama ?></t>
  </a>
  <?php $uri = $this->uri->segment(1) ?>
  <?php $role = $this->session->userdata('role'); ?> -->



  <!-- Sidebar -->
  <div class="sidebar">
  <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
            <a class="nav-link" href="<?=base_url()?>dashboard" class="nav-link <?=$url == 'dashboard' || $url == '' ? 'active' : 'no' ?>">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-5 item-text">Dashboard</span>
            </a>
            </li>

            <li class="nav-item w-100">
            <a class="nav-link" href="<?=base_url()?>Supplier" class="nav-link <?=$url == 'supplier' || $url == '' ? 'active' : 'no' ?>">
                <i class="fe fe-layers fe-16"></i>
                <span class="ml-5 item-text">Supplier</span>
              </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="<?=base_url()?>pengguna" class="nav-link <?=$url == 'pengguna' || $url == '' ? 'active' : 'no' ?>">
                <i class="fe fe-users fe-16"></i>
                  <span class="ml-5 item-text">Pengguna</span>
                </a>
            </li>
            <li class="nav-item w-100">
            <a class="nav-link" href="<?=base_url()?>Pelanggan" class="nav-link <?=$url == 'pelanggan' || $url == '' ? 'active' : 'no' ?>">
            <i class="fe fe-book fe-16"></i>
                <span class="ml-5 item-text">Pelanggan</span>
              </a>
            </li>

            <li class="nav-item dropdown <?=$url == 'produk' || $url == 'kategori_produk' || $url == 'satuan_produk' ? 'menu_open' : 'no'?>">
              <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link" <?=$url == 'produk' || $url == 'kategori_produk' || $url == 'satuan_produk' ? 'active' : 'no'?>>
                <i class="fe fe-box fe-16"></i>
                <span class="ml-5 item-text">Produk</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                <li class="nav-item">
                  <a href="<?php echo site_url('kategori_produk') ?>" class="nav-link pl-3 <?= $url == 'kategori_produk' ? 'active' : 'no'?>">
                    <span class="ml-3 item-text">Kategori Produk</span>
                  </a>
                </li>
                <li class="nav-item">
                <a href="<?php echo site_url('satuan_produk') ?>" class="nav-link pl-3 <?= $url == 'satuan_produk' ? 'active' : 'no'?>">
                    <span class="ml-3 item-text">Satuan Produk</span></a>
                </li>
                <li class="nav-item">
                <a href="<?php echo site_url('produk') ?>" class="nav-link pl-3 <?= $url == 'produk' ? 'active' : 'no'?>">
                    <span class="ml-3 item-text">Produk</span></a>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown <?=$url == 'stok_masuk' || $url == 'stok_keluar' ? 'menu-open' : 'no'?> ">
              <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link  <?=$url == 'stok_masuk' || $url == 'stok_keluar' ? 'menu-open' : 'no'?> ">
                <i class="fe fe-credit-card fe-16"></i>
                <span class="ml-5 item-text">Stock</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="forms">
                <li class="nav-item">
                <a href="<?php echo site_url('stok_masuk') ?>" class="nav-link pl-3 <?= $url == 'stok_masuk' ? 'active' : 'no'?>">
                    <span class="ml-3 item-text">Stok Masuk</span></a>
                </li>
                <li class="nav-item">
                <a href="<?php echo site_url('stok_keluar') ?>" class="nav-link pl-3 <?= $url == 'stok_keluar' ? 'active' : 'no'?>">
                    <span class="ml-3 item-text">Stok Keluar</span></a>
                </li>
              </ul>
            </li>
            <li class="nav-item w-100">
            <a class="nav-link" href="<?=base_url()?>transaksi" class="nav-link <?=$url == 'transaksi' || $url == '' ? 'active' : 'no' ?>">
                <i class="fe fe-layers fe-16"></i>
                <span class="ml-5 item-text">Transaksi</span>
              </a>
            </li>
            <li class="nav-item dropdown <?= $url == 'Laporan_penjualan' || $url == 'laporan_stok_masuk' || $url == 'laporan_stok_keluar' ? 'menu-open' : 'no' ?> ">
              <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link <?= $url == 'Laporan_penjualan' || $url == 'laporan_stok_masuk' || $url == 'laporan_stok_keluar' ? 'active' : 'no' ?>">
                <i class="fe fe-grid fe-16"></i>
                <span class="ml-5 item-text">Laporan</span>
              </a>

              <ul class="collapse list-unstyled pl-4 w-100" id="tables">
                <li class="nav-item">
                  <a href="<?php echo site_url('laporan_penjualan') ?>" class="nav-link pl-3 <?= $url == 'Laporan_penjualan' ? 'active' : 'no' ?> " >
                    <span class="ml-3 item-text">Laporan Penjualan</span></a>
                </li>
                <li class="nav-item">
                <a href="<?php echo site_url('laporan_stok_masuk') ?>" class="nav-link pl-3 <?= $url == 'laporan_stok_masuk' ? 'active' : 'no' ?> " >
                    <span class="ml-3 item-text">Laporan Stok Masuk</span></a>
                </li>
                <li class="nav-item">
                <a href="<?php echo site_url('laporan_stok_keluar') ?>" class="nav-link pl-3 <?= $url == 'laporan_stok_keluar' ? 'active' : 'no' ?> " >
                    <span class="ml-3 item-text">Laporan Stok Keluar </span></a>
                </li>
              </ul>
            </li>
       
            </ul>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                <li>
                  <?php if ($role === 'admin'): ?>
                  <?php endif ?>
</aside>