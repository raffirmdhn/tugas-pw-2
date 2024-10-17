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
        <h3>Black Goose Bistro | Pizza-on-Demand</h3>
      </div>

      <div class="row" style="margin-top: 10px;">
        <div class="col">
          <span>Welcome to Black Goose Bistro! Customize your perfect pizza and we'll deliver it right to your door, fresh and delicious.</span>
        </div>
      </div>

      <div class="row" style="margin-top: 15px;">
        <div class="col">
          <span style="color:#f00">Your Information</span>
        </div>

        <div class="col">
          <form action="./result_pesan_pizza.php" method="POST">
            <table style="border-spacing: 0 10px;">
              <tr>
                <td><label for="name">Name</label></td>
                <td>:</td>
                <td><input type="text" name="name" id="name" placeholder="your name" required></td>
              </tr>
              <tr>
                <td><label for="address">Address</label></td>
                <td>:</td>
                <td><input type="text" name="address" id="address" placeholder="your address" required></td>
              </tr>
              <tr>
                <td><label for="telp">Telephone Number</label></td>
                <td>:</td>
                <td><input type="tel" name="telp" id="telp" placeholder="your phone number" required></td>
              </tr>
              <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" name="email" id="email" placeholder="your active email" required></td>
              </tr>
              <tr>
                <td><label for="delivery_instructions">Delivery Instructions</label></td>
                <td>:</td>
                <td><textarea name="delivery_instructions" id="delivery_instructions" rows="4" maxlength="400" placeholder="instructions" required></textarea></td>
              </tr>
            </table>

            <div class="row" style="margin-bottom: 10px;">
              <h4 style="color:#f00;">Design Your Dream Pizza:</h4>
              <span>Pizza specs</span>
            </div>

            <div class="row" style="margin-right: 10%;">
              <span style="display:block; margin-bottom: 5px; font-weight: 600;">Crust (Choose one):</span>
              <table class="table-input">
                <tr>
                  <td>
                    <input type="radio" name="crust" value="Classic White" required id="crust-1">
                  </td>
                  <td><label for="crust-1">Classic White</label></td>
                </tr>
                <tr>
                  <td>
                    <input type="radio" name="crust" value="Multigrain" id="crust-2">
                  </td>
                  <td><label for="crust-2">Multigrain</label></td>
                </tr>
                <tr>
                  <td>
                    <input type="radio" name="crust" value="Cheese-stuffed crust" id="crust-3">
                  </td>
                  <td><label for="crust-3">Cheese-stuffed crust</label></td>
                </tr>
                <tr>
                  <td>
                    <input type="radio" name="crust" value="Gluten-free" id="crust-4">
                  </td>
                  <td><label for="crust-4">Gluten-free</label></td>
                </tr>
              </table>
            </div>

            <div class="row">
              <span style="display:block; margin-bottom: 5px; font-weight: 600;">Toppings (Choose as many as you want):</span>
              <table class="table-input">
                <tr>
                  <td>
                    <input type="checkbox" name="toppings[]" id="toppings-Red" value="Red Sauce" checked required>
                  </td>
                  <td><label for="toppings-Red">Red Sauce</label></td>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="toppings[]" id="toppings-White" value="White Sauce">
                  </td>
                  <td><label for="toppings-White">White Sauce</label></td>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="toppings[]" id="toppings-Mozzarella" value="Mozzarella Cheese">
                  </td>
                  <td><label for="toppings-Mozzarella">Mozzarella Cheese</label></td>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="toppings[]" id="toppings-Pepperoni" value="Pepperoni">
                  </td>
                  <td><label for="toppings-Pepperoni">Pepperoni</label></td>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="toppings[]" id="toppings-Mushrooms" value="Mushrooms">
                  </td>
                  <td><label for="toppings-Mushrooms">Mushrooms</label></td>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="toppings[]" id="toppings-Peppers" value="Peppers">
                  </td>
                  <td><label for="toppings-Peppers">Peppers</label></td>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="toppings[]" id="toppings-Anchovies" value="Anchovies">
                  </td>
                  <td><label for="toppings-Anchovies">Anchovies</label></td>
                </tr>
              </table>
            </div>

            <div class="row" style="margin-top: 15px;">
              <span>How many pizzas:</span>
              <input type="number" name="pcs" id="pcs" style="width: 40px;" value="1">
            </div>

            <div class="row" style="margin-top: 10px;">
              <button style="padding: 5px;" type="submit">Bring me a pizza!</button>
              <button style="padding: 5px;" type="reset">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </main>
  </div>
</body>

</html>