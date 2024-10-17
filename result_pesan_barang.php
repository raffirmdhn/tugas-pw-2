<?php
$photo64 = isset($_POST['photo64']) ? $_POST['photo64'] : '';
$title = isset($_POST['title']) ? $_POST['title'] : '';
$description = isset($_POST['description']) ? $_POST['description'] : '';
$account_number = isset($_POST['account_number']) ? $_POST['account_number'] : '';
$bank = isset($_POST['bank']) ? $_POST['bank'] : '';
$account_holder = isset($_POST['account_holder']) ? $_POST['account_holder'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : '';
$transaction = isset($_POST['transaction']) ? $_POST['transaction'] : '';
$send_to_mobile = isset($_POST['send_to_mobile']) ? true : false;
$send_to_email = isset($_POST['send_to_email']) ? true : false;
$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Pemesanan Barang</title>
  <link rel="stylesheet" href="./barang.css">
</head>

<body style="background-color: #f1f1f1;">
  <div style="width: 100%; margin-block: 20px; padding: 20px;">
    <nav style="width: 100%; background-color: #fff; display: flex; justify-content: space-evenly; column-gap: 5px; padding: 5px;">
      <a href="#">Home</a>
      <span class="separator">|</span>
      <a href="#">Generate Link</a>
      <span class="separator">|</span>
      <a href="#">Transaction History</a>
      <span class="separator">|</span>
      <a href="#">Policy</a>
      <span class="separator">|</span>
      <a href="#">Logout</a>
    </nav>

    <main style="margin-top: 30px; display: flex;">
      <div class="left" style="margin-right: 20px;">
        <img src="<?= $photo64 ?  htmlspecialchars($photo64) : "./assets/x-placeholder.png" ?>" style="width: 310px; aspect-ratio: 1;" class="border" />
        <div style="display: flex; gap: 10px;">
          <img src="./assets/x-placeholder.png" style="width: 70px; aspect-ratio: 1;" class="border" />
          <img src="./assets/x-placeholder.png" style="width: 70px; aspect-ratio: 1;" class="border" />
          <img src="./assets/x-placeholder.png" style="width: 70px; aspect-ratio: 1;" class="border" />
          <img src="./assets/x-placeholder.png" style="width: 70px; aspect-ratio: 1;" class="border" />
        </div>
      </div>

      <div class="right" style="flex-grow: 2;">
        <table>
          <tr>
            <td>Title Here</td>
            <td>:</td>
            <td>
              <?= $title ?>
            </td>
          </tr>
          <tr>
            <td>Description</td>
            <td>:</td>
            <td>
              <?= $description ?>
            </td>
          </tr>
          <tr>
            <td>Total Amount</td>
            <td>:</td>
            <td>
              <?= $price ?>
            </td>
          </tr>
          <tr>
            <td>Pay to</td>
            <td>:</td>
            <td>
              <?= $account_number ?>
            </td>
          </tr>
          <tr>
            <td>Payment Type</td>
            <td>:</td>
            <td>
              <?= $bank ?>
            </td>
          </tr>
          <tr>
            <td>Account Holder</td>
            <td>:</td>
            <td>
              <?= $account_holder ?>
            </td>
          </tr>
          <tr>
            <td>Account No</td>
            <td>:</td>
            <td>
              <?= $account_number ?>
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td style="color: #3dbb23;">
              <div>
                <input type="checkbox" readonly style="width: 15px;" <?= $send_to_mobile ? 'checked' : '' ?>>
                <span>Send to Mobile Phone</span>
              </div>
              <div>
                <input type="checkbox" readonly style="width: 15px;" <?= $send_to_email ? 'checked' : '' ?>>
                <span>Send to Email</span>
              </div>
            </td>
          </tr>
          <tr>
            <td>Send to Mobile Phone</td>
            <td>:</td>
            <td>
              <?= $mobile ?>
            </td>
          </tr>
          <tr>
            <td>Send to Email</td>
            <td>:</td>
            <td>
              <?= $email ?>
            </td>
          </tr>
          <tr>
            <td>
              <div style="margin-top: 20px;">

                <button type="submit" style="padding: 7px 15px; background-color: #3dbb23; color: #fff;">Pay using QuidLink</button>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </main>
  </div>
</body>

</html>