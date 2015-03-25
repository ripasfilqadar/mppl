<?php
$grand_total = 0;
// Calculate grand total.
if ($cart = $this->cart->contents()):
    foreach ($cart as $item):
        $grand_total = $grand_total + $item['subtotal'];
    endforeach;
endif;
?>
<html>
    <head>
        <title>Guest</title>
         <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/css/style.css"/>
    </head>
    <body>
        <div id="bill_info">
            
            <?php // Create form for enter user imformation and send values 'shopping/save_order' function?>
            <form name="billing" method="post" action="<?php echo base_url() . 'index.php/shopping/save_order' ?>" >
                <input type="hidden" name="command" />
                <div align="center">
                    <h1 align="center">Info Pembeli</h1>
                    <table border="0" cellpadding="2px">
                        <tr><td>Total Order:</td><td><strong>Rp <?php echo number_format($grand_total, 2); ?></strong></td></tr>
                        <tr><td>Nama    :</td><td><input type="text" name="name" required=""/></td></tr>
                        <tr><td>Alamat  :</td><td><input type="text" name="address" required="" /></td></tr> 
                        <tr><td>Nomor HP:</td><td><input type="text" name="phone"  required="" /></td></tr>
                        <tr><td><?php
                        // This button for redirect main page.
                        echo "<a class ='fg-button teal' id='back' href=" . base_url() . "index.php/shopping>Kembali Berbelanja</a>";  ?>
                            </td><td><input type="submit" class ='fg-button teal' value="Finalisasi Pembelian" /></td></tr> 
                     
                    </table>
                </div>
            </form>
        </div>
    </body>
</html>