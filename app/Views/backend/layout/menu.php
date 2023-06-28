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
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="feather icon-edit"></i></span>
            <span class="pcoded-mtext">Articles</span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="<?php echo site_url('backend/article/news'); ?>">
                    <span class="pcoded-mtext">News</span>
                </a>
            </li>
            <li class="">
                <a href="<?php echo site_url('backend/article/event'); ?>">
                    <span class="pcoded-mtext">Event</span>
                </a>
            </li>
            <li class=" ">
                <a href="<?php echo site_url('backend/article/promo'); ?>">
                    <span class="pcoded-mtext">Promo</span>
                </a>
            </li>
            <li class=" ">
                <a href="<?php echo site_url('backend/article/career'); ?>">
                    <span class="pcoded-mtext">Career</span>
                </a>
            </li>
        </ul>
    </li>
</ul>
<div class="pcoded-navigatio-lavel">Settings</div>
<ul class="pcoded-item pcoded-left-item">
    <li class="">
        <a href="<?= base_url('logout'); ?>">
            <span class="pcoded-micon"><i><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M17 8l-1.41 1.41L17.17 11H9v2h8.17l-1.58 1.58L17 16l4-4-4-4zM5 5h7V3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h7v-2H5V5z"></path></svg></i></span>
            <span class="pcoded-mtext">Logout</span>
        </a>
    </li>
   

    <?php if (in_groups('super-admin')) : ?>

        <li class="">
            <a href="<?php echo site_url('manageuser'); ?>">
                <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
                <span class="pcoded-mtext">Manage User</span>
            </a>
        </li>

    <?php endif; ?>

</ul>

<?= $this->endSection(' ')  ?>  