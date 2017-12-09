<?php
session_start();

include "templates/header-main.php";
include "lib/koneksi.php";
include "lib/config_web.php";
if(isset($_SESSION['nama'])){
  $nama = $_SESSION['nama'];
  $users = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan WHERE nama_pelanggan='$nama'");
  $user = mysqli_fetch_array($users);

  $pelanggan_id = $user['id'];

};

// $orders = mysqli_query($koneksi, "SELECT * FROM tbl_order INNER JOIN tbl_pelanggan ON tbl_order.id_pelanggan = tbl_pelanggan.id INNER JOIN tbl_produk ON tbl_order.id_produk = tbl_produk.id_produk WHERE id_pelanggan='$pelanggan_id'");
$invoice_id = $_GET['id'];
$orders = mysqli_query($koneksi, "SELECT * FROM tbl_invoice_produk INNER JOIN tbl_invoice ON tbl_invoice_produk.invoice_id = tbl_invoice.id INNER JOIN tbl_produk ON tbl_invoice_produk.produk_id = tbl_produk.id_produk WHERE invoice_id='$invoice_id'");
$invoices = mysqli_query($koneksi, "SELECT * FROM tbl_invoice WHERE id='$invoice_id'");
$invoice = mysqli_fetch_array($invoices);
 ?>
 <script language="javascript" type="text/javascript">
   function printDiv(divID) {
       //Get the HTML of div
       var divElements = document.getElementById(divID).innerHTML;
       //Get the HTML of whole page
       var oldPage = document.body.innerHTML;

       //Reset the page's HTML with div's HTML only
       document.body.innerHTML =
         "<html><head><title></title></head><body>" +
         divElements + "</body>";

       //Print Page
       window.print();

       //Restore orignal HTML
       document.body.innerHTML = oldPage;
   }
</script>

<main id="main">
<div id="printableArea">
  <div class="row">
    <div class="col-md-4">
      <div class="head-text-type1">
          <h1>Invoice</h1>
          <p>Invoice Number : <?php echo $invoice['id']; ?></p>
          <p>Tanggal : <?php echo $invoice['tanggal']; ?></p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="">
        <h3>Invoiced To :</h3>
        <p>Nama : <?php echo $user['nama_pelanggan']; ?></p>
        <p>Alamat : <?php echo $user['alamat']; ?></p>
        <p>No. Telepon : <?php echo $user['telepon']; ?></p>
        <p>E-mail : <?php echo $user['email']; ?></p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="">
        <h3>Status : <?php echo $invoice['status']; ?></h3>
        <p>Batas tanggal pembayaran : <?php echo $invoice['batas_tanggal']; ?></p>
        <p>Bank : Bank Mandiri</p>
        <p>No. Rekening : 88812138014824</p>
        <p>Atas Nama : Saya Yaa He Be De</p>
        <p>Nomor Refrensi : <?php echo $invoice['id']+23143; ?></p>
      </div>
    </div>
  </div>
  <div class="container-fluid">
      <div class="boxed">
        <div class="row">
          <h2>DETAIL PEMBELIAN</h2>
        </div>
      </div>
      <div class="boxed">
          <div class="shopping-cart">
              <div class="row">
                  <div class="col-md-4 col-sm-4 hidden-xs">
                      <span class="col-name">product</span>
                  </div>
                  <div class="col-md-3 col-sm-3 hidden-xs">
                      <span class="col-name">price</span>
                  </div>
                  <div class="col-md-1 col-sm-1 hidden-xs">
                      <span class="col-name">qty</span>
                  </div>
                  <div class="col-md-2 col-sm-2 hidden-xs">
                      <span class="col-name">total</span>
                  </div>
              </div>

      <?php
      foreach ($orders as $order) {
        # code...
      ?>
              <div class="row">
                  <div class="shopping-product">
                      <div class="col-md-4 col-sm-4 col-xs-12">
                          <div class="block-1">
                              <div class="row">
                                  <div class="col-md-5 col-sm-5 col-xs-5">
                                      <a href="#" class="image">
                                          <img src="<?php echo $web_url; ?>file/produk/<?php echo $order['gambar']; ?>" alt="photo"/>
                                      </a>
                                  </div>
                                  <div class="col-md-7 col-sm-7 col-xs-7">
                                      <div class="info">
                                          <a href="#" class="text-1"><?php echo $order['nama_produk']; ?></a>
                                          <div class="color">
                                              <span style="background-color: #d9829a;"></span>
                                          </div>
                                          <div class="size">
                                              <span>xs</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-3 col-xs-4">
                          <div class="tt-price">
                              <div class="full-price">Rp <?php echo $order['harga']; ?></div>
                              <!-- <div hidden class="discount-price">
                                  <div class="first-price">$199.95</div>
                                  <div class="last-price">$185.22</div>
                              </div> -->
                          </div>
                      </div>
                      <div class="col-md-1 col-sm-1 col-xs-3">
                          <div class="tt-price">
                              <div class="full-price" style="text-align:center;"><?php echo $order['jumlah_produk']; ?></div>
                          </div>
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-3">
                          <div class="tt-price">
                              <div class="full-price">Rp <?php echo $order['harga']*$order['jumlah_produk']; ?></div>
                          </div>
                      </div>
                  </div>
              </div>
        <?php } ?>

              <div class="row btns-row">
              </div>
              <div class="row">


                  <div class="col-md-4 col-sm-4 invoice-summary" id="printableArea">
                      <div class="curtain">
                          <div class="row">
                              <div class="col-md-7 col-sm-4 col-sm-offset-1 col-md-offset-0 col-xs-6">
                                  <span class="h3">Total</span>
                                  <span class="h3">Pengiriman</span>
                                  <span class="h1">Jumlah Total</span>
                              </div>
                              <div class="col-md-5 col-sm-7 col-xs-6">
                                  <span class="h3">Rp <?php echo $invoice['total'] ?></span>
                                  <span class="h3">Rp 0</span>
                                  <span class="h1">Rp <?php echo $invoice['total'] ?></span>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</main>

<div class="col-md-12 col-sm-12 col-xs-12">
    <a href="javascript:printDiv('printableArea');" class="tt-btn-type1">Cetak Invoice</a>
    <input type="button" onclick="printDiv('printableArea')" value="print a div!" />
</div>
        <!-- FOOTER -->
<?php
include "templates/footer-main.php" ?>
