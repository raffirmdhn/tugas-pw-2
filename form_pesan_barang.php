<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Pemesanan Barang</title>
  <link rel="stylesheet" href="./barang.css">
  <script>
    function previewImage(event) {
      const reader = new FileReader();
      reader.onload = function() {
        // Display the image in the preview
        const output = document.getElementById('photo-preview');
        output.src = reader.result;
        // output.style.display = 'block';

        // Store the base64 encoded image in a hidden input field
        document.getElementById('photo64').value = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>
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

    <form action="./result_pesan_barang.php" method="POST">
      <main style="margin-top: 30px; display: flex;">
        <div class="left" style="margin-right: 20px;">
          <img src="./assets/x-placeholder.png" style="width: 310px; aspect-ratio: 1;" class="border" id="photo-preview" />
          <div style="display: flex; gap: 10px;">
            <img src="./assets/x-placeholder.png" style="width: 70px; aspect-ratio: 1;" class="border" />
            <img src="./assets/x-placeholder.png" style="width: 70px; aspect-ratio: 1;" class="border" />
            <img src="./assets/x-placeholder.png" style="width: 70px; aspect-ratio: 1;" class="border" />
            <img src="./assets/x-placeholder.png" style="width: 70px; aspect-ratio: 1;" class="border" />
          </div>

          <div style="margin-top: 15px;">
            <span>Upload Picture</span>
            <input type="hidden" name="photo64" id="photo64">
            <input type="file" name="photo" accept="image/*" onchange="previewImage(event)" required>
          </div>
        </div>

        <div class="right" style="flex-grow: 2;">
          <table>
            <tr>
              <td>Title Here</td>
              <td>:</td>
              <td>
                <input type="text" name="title" placeholder="thinkpad x270" required>
              </td>
            </tr>
            <tr>
              <td>Description</td>
              <td>:</td>
              <td>
                <textarea name="description" rows="4" placeholder="Year: 2009, Model: New, Condition: Good"></textarea>
              </td>
            </tr>
            <tr>
              <td>Account Number</td>
              <td>:</td>
              <td>
                <input type="text" name="account_number" placeholder="123-456-789" required>
              </td>
            </tr>
            <tr>
              <td>Bank</td>
              <td>:</td>
              <td>
                <select name="bank">
                  <option value="">Bank</option>
                  <option value="bri">BRI</option>
                  <option value="bca">BCA</option>
                  <option value="bsi">BSI</option>
                  <option value="bni">BNI</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Price</td>
              <td>:</td>
              <td>
                <input type="number" name="price" placeholder="100000" required>
              </td>
            </tr>
            <tr>
              <td>Account Holder</td>
              <td>:</td>
              <td>
                <input type="text" name="account_holder" placeholder="name here" required>
              </td>
            </tr>
            <tr>
              <td>Transaction</td>
              <td>:</td>
              <td>
                <input type="number" name="transaction" value="1" required min="1">
              </td>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td>
                <span>* if the transaction is for 3 person, choose 3</span>
              </td>
            </tr>
            <tr></tr>

            <tr>
              <td></td>
              <td></td>
              <td style="color: #3dbb23;">
                <div>
                  <input type="checkbox" name="send_to_mobile" style="width: 15px;" value="1" checked required>
                  <span>Send to Mobile Phone</span>
                </div>
                <div>
                  <input type="checkbox" name="send_to_email" style="width: 15px;" value="1" checked required>
                  <span>Send to Email</span>
                </div>
              </td>
            </tr>
            <tr>
              <td>Send to Mobile Phone</td>
              <td>:</td>
              <td>
                <input type="text" name="mobile" placeholder="123123123, 134134134" required>
              </td>
            </tr>
            <tr>
              <td>Send to Email</td>
              <td>:</td>
              <td>
                <input type="text" name="email" placeholder="lorem@gmail.com, asdw@gmail.com" required>
              </td>
            </tr>
            <tr>
              <td colspan="3" align="center">
                <button type="submit" style="padding: 7px 15px; background-color: #3dbb23; color: #fff;">Generate Link</button>
              </td>
            </tr>
          </table>
        </div>
      </main>
    </form>
  </div>
</body>

</html>