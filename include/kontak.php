<div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Hubungi Kami</h2>
                    </div>
                </div>
            </div>
        </div>
</div>

    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <?php if(!empty($_GET['notif'])){?>
                  <?php if($_GET['notif']=="berhasildikirim"){?>
                  <div class="alert alert-success" role="alert">
                  Data Berhasil Dikirim</div>
                <?php }?>
                <?php }?>


                    <form class="main_form" enctype="multipart/form-data" method="post" action="index.php?include=konfirmasi-hubungi">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Your name" type="text" name="nama" minlength="1" required />
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Email" type="text" name="email" minlength="1" required />
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Phone" type="text" name="telepon" minlength="1" required />
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message" name="pesan" minlength="1" required></textarea>
                            </div>
                            <div class=" col-md-12">
                                <button class="send" type="submit" name="kirim">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
