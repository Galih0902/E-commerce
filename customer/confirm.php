<?php

session_start();

if (!isset($_SESSION['customer_email'])) {

    echo "<script>window.open('../checkout.php','_self')</script>";
} else

    include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

if (isset($_GET['order_id'])) {

    $order_id = $_GET['order_id'];
}

?>


<div id="content"><!-- content Starts -->
    <div class="container"><!-- container Starts -->


        <div class="col-md-3"><!-- col-md-3 Starts -->

            <?php include("includes/sidebar.php"); ?>

        </div><!-- col-md-3 Ends -->

        <div class="col-md-9"><!-- col-md-9 Starts -->

            <div class="box"><!-- box Starts -->

                <h1 align="center"> Tolong Konfirmasi Pembayaranmu </h1>


                <form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data"><!--- form Starts -->

                    <div class="form-group"><!-- form-group Starts -->

                        <label>Nomor Invoice:</label>

                        <input type="text" class="form-control" name="invoice_no" required>

                    </div><!-- form-group Ends -->


                    <div class="form-group"><!-- form-group Starts -->

                        <label>Jumlah Bayar:</label>

                        <input type="text" class="form-control" name="amount_sent" required>

                    </div><!-- form-group Ends -->

                    <div class="form-group"><!-- form-group Starts -->

                        <label>Pilih Pembayaran:</label>

                        <select name="payment_mode" class="form-control"><!-- select Starts -->

                            <option>Select Payment Mode</option>
                            <option>Transfer Bank</option>
                            <option>M-banking</option>
                            <option>Bayar Langsung</option>

                        </select><!-- select Ends -->

                    </div><!-- form-group Ends -->

                    <div class="form-group"><!-- form-group Starts -->

                        <label>Transaks Id:</label>

                        <input type="text" class="form-control" name="ref_no" required>

                    </div><!-- form-group Ends -->


                    <div class="form-group"><!-- form-group Starts -->

                        <label>Kode Unik:</label>

                        <input type="text" class="form-control" name="code" required>

                    </div><!-- form-group Ends -->


                    <div class="form-group"><!-- form-group Starts -->

                        <label>Tanggal Pembayaran:</label>

                        <input type="text" class="form-control" name="date" required>

                    </div><!-- form-group Ends -->

                    <div class="form-group"><!-- form-group Starts -->

                        <label>Foto Pembayaran:</label>

                        <input type="file" class="form-control" name="payment_image" required>

                    </div><!-- form-group Ends -->

                    <div class="text-center"><!-- text-center Starts -->

                        <button type="submit" name="confirm_payment" class="btn btn-primary btn-lg">

                            <i class="fa fa-user-md"></i> Konfirmasi Pembayaran

                        </button>

                    </div><!-- text-center Ends -->

                </form><!--- form