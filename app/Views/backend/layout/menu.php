<?= $this->extend('backend/layout/main')  ?>

<?= $this->section('menu')  ?>

<div class="pcoded-navigatio-lavel">Navigation</div>
<ul class="pcoded-item pcoded-left-item">
    <li class="active">
        <a href="<?php echo site_url('layout'); ?>">
            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
            <span class="pcoded-mtext">Dashboard</span>
        </a>
    </li>
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
            <span class="pcoded-mtext">Master</span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="<?= site_url('carstype'); ?>">
                    <span class="pcoded-mtext">Cars Type</span>
                </a>
            </li>
            <li class="">
                <a href="<?= site_url('carsbrand'); ?>">
                    <span class="pcoded-mtext">Cars Brand</span>
                </a>
            </li>
            <li class=" ">
                <a href="<?= site_url('carsdetail'); ?>">
                    <span class="pcoded-mtext">Cars Detail</span>
                </a>
            </li>
            <!-- <li class=" ">
                                            <a href="<?php echo site_url('backend/product/product-feature'); ?>">
                                                <span class="pcoded-mtext">Product Feature</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="<?php echo site_url('backend/product/product-specification'); ?>">
                                                <span class="pcoded-mtext">Product Specifications</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="<?php echo site_url('backend/product/product-gallery'); ?>">
                                                <span class="pcoded-mtext">Product Gallery</span>
                                            </a>
                                        </li> -->
        </ul>
    </li>
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="feather icon-cpu"></i></span>
            <span class="pcoded-mtext">Person</span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="<?= site_url('customer'); ?>">
                    <span class="pcoded-mtext">Customer</span>
                </a>
            </li>
            <li class="">
                <a href="<?= site_url('driver'); ?>">
                    <span class="pcoded-mtext">Driver</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="<?= site_url('rental'); ?>">
            <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
            <span class="pcoded-mtext">Rental</span>
        </a>
    </li>
<div class="pcoded-navigatio-lavel">Settings</div>
<ul class="pcoded-item pcoded-left-item">
<li class="">
        <a href="<?php echo site_url(''); ?>">
            <span class="pcoded-micon"><i></i></span>
            <span class="pcoded-mtext">Profil</span>
        </a>
    </li>
    <li class="">
        <a href="<?php echo site_url('logout'); ?>">
            <span class="pcoded-micon"><i><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="20px"
                                        padding="0" width="20px" xmlns="http://www.w3.org/2000/svg"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path><path d="M9 12h12l-3 -3"></path><path d="M18 15l3 -3"></path></svg></i></span>
            <span class="pcoded-mtext">Logout</span>
        </a>
    </li>

 <?php if (in_groups('admin', true)) : ?>

    <li class="">
        <a href="<?php echo site_url('Layout'); ?>">
            <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
            <span class="pcoded-mtext">Manage User</span>
        </a>
    </li>

<?php endif; ?>


</ul>

<?= $this->endSection(' ')  ?>