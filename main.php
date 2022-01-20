<!doctype html>
<html lang="ru">

<head>
    <?php include "partials/title-meta.php" ?>
    <!-- @@include("partials/title-meta.html", {"title": "Dashboard"}) -->

    <?php include "partials/head-css.php" ?>
</head>


<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include "partials/topbar.php" ?>
        <?php include "partials/sidebar.php" ?>


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                <?php include "partials/page-title.php" ?>
                <!-- @@include("partials/page-title.html", {"pagetitle": "Morvin", "subtitle":"Dashboard" ,"title":"Dashboard"}) -->


                <div class="container-fluid">

                    <div class="page-content-wrapper">

                        <div class="row">

         <!-- ============================================================== -->
        <!-- Тело страницы -->
        <!-- ============================================================== -->                           


                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="header-title">Default Datatable</h4>
                                            <p class="card-title-desc">DataTables has most features enabled by
                                                default, so all you need to do to use it with your own tables is to call
                                                the construction function: <code>$().DataTable();</code>.
                                            </p>
            
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>

                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->



                         


                        </div>

                    </div>

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php include "partials/footer.php" ?>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <?php include "partials/vendor-scripts.php" ?>
</body>

</html>