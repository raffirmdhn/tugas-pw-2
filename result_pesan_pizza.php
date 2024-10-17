<?php
$name = isset($_POST['name']) ? $_POST['name'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$telp = isset($_POST['telp']) ? $_POST['telp'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$delivery_instructions = isset($_POST['delivery_instructions']) ? $_POST['delivery_instructions'] : '';
$crust = isset($_POST['crust']) ? $_POST['crust'] : '';
$toppings = join(", ", isset($_POST['toppings']) ? $_POST['toppings'] : []);
$pcs = isset($_POST['pcs']) ? $_POST['pcs'] : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Pemesanan Pizza</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div style="width: 100%; display: grid; place-items: center; margin-block: 20px;">
    <main style="width: 50%; max-width: 800px; border: 1px solid #000; padding: 15px;">
      <div class="row" style="border-bottom: 1px solid #412bbe; text-align: center;">
        <h3>THANK YOU</h3>
      </div>

      <div class="row" style="margin-top: 10px;">
        <span>Thank you for ordering from Black Goose Bistro. We have received the following information about your order:</span>
      </div>

      <div class="row" style="margin-top: 15px;">
        <span style="color: red;">Your Information</span>

        <div class="col">
          <table class="table-info">
            <tr>
              <td>Name</td>
              <td>:</td>
              <td><?= $name; ?></td>
            </tr>
            <tr>
              <td>Address</td>
              <td>:</td>
              <td><?= $address ?></td>
            </tr>
            <tr>
              <td>Telephone Number</td>
              <td>:</td>
              <td><?= $telp ?></td>
            </tr>
            <tr>
              <td>Email</td>
              <td>:</td>
              <td><?= $email ?></td>
            </tr>
          </table>

          <div class="row" style="margin-block: 15px;">
            <span>
              <b>Delivery Instructions</b>
            </span>
            <p>
              <?= $delivery_instructions ?>
            </p>
          </div>

          <div class="row">
            <span style="color: red;">Your pizza</span>

            <table class="table-info">
              <tr>
                <td>Crust</td>
                <td>:</td>
                <td><?= $crust; ?></td>
              </tr>
              <tr>
                <td>Toppings</td>
                <td>:</td>
                <td><?= $toppings ?></td>
              </tr>
              <tr>
                <td>Qty</td>
                <td>:</td>
                <td><?= $pcs ?> piece</td>
              </tr>
            </table>
          </div>

        </div>

        <div class="row" style="border-top: 1px solid #ff0000;">
          <small style="display:block;margin-top: 10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, enim.</small>
        </div>
      </div>
    </main>
  </div>
</body>

</html>