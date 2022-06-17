<?php session_start();?>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100" >


        <div class="user-sidebar text-center">
            <div class="dropdown">
                <div class="user-img">
                    <img src="assets/images/users/vit.jpg" alt="" class="rounded-circle">
                    <span class="avatar-online bg-success"></span>
                </div>
                <div class="user-info">
                    <h5 class="mt-3 font-size-16 text-white">
                        <?
                        if(isset($_POST["Login_manager"]))
                            {
                                $name = $_POST["Login_manager"];
                                echo 'asdasdAS',$name;
                            } 
                                                echo '<pre>';
                        print_r( $_POST["Login_manager"] );        
                        echo '</pre>';
                        ?></h5>
                    <span class="font-size-13 text-white-50">Administrator</span>
                </div>
            </div>
        </div>



        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="main.php" class="waves-effect">
                        <i class="dripicons-home"></i><span class="badge rounded-pill bg-info float-end">3</span>
                        <span>Заказы</span>
                    </a>
                </li>

                <li>
                    <a href="" class="waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span>Calendar</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-cart"></i>
                        <span>Справочники</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="1_users.php">Пользователи</a></li>
                        <li><a href="ecommerce-product-detail.php">Техпроцессы</a></li>
                        <li><a href="3_papers.php">Бумага</a></li>
                        <li><a href="4_zakaz.php">Работники</a></li>
                        <li><a href="ecommerce-cart.html">Cart</a></li>
                        <li><a href="ecommerce-checkout.html">Checkout</a></li>
                        <li><a href="ecommerce-shops.html">Shops</a></li>
                        <li><a href="ecommerce-add-product.html">Add Product</a></li>
                    </ul>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->