<!DOCTYPE html>
<html>
<head>
  <title>D-I-Y Cake</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">  
    <h1>D-I-Y Cake</h1>

    <table>
      <tr>
        <th>Cake Shape</th>
        <th>Cake Flavor</th>
        <th>Cake Toppings</th>
      </tr>
      <tr>
        <td>
          <?php
          $cakeShapes = ["Heart", "Rectangle", "Square", "Round"];
          foreach ($cakeShapes as $shape) {
            echo "<input type='radio' name='shape' value='$shape' id='shape-$shape'> <label for='shape-$shape'>$shape</label><br>";
          }
          ?>
        </td>
        <td>
          <?php
          $cakeFlavors = ["Chocolate", "Vanilla", "Lemon", "Cheesecake"];
          foreach ($cakeFlavors as $flavor) {
            echo "<input type='radio' name='flavor' value='$flavor' id='flavor-$flavor'> <label for='flavor-$flavor'>$flavor</label><br>";
          }
          ?>
        </td>
        <td>
          <?php
          $cakeToppings = ["Cookies", "Spun-sugar Flowers", "Mini Chocolate Candies", "Marshmallows"];
          foreach ($cakeToppings as $topping) {
            echo "<input type='radio' name='topping' value='$topping' id='topping-$topping'> <label for='topping-$topping'>$topping</label><br>";
          }
          ?>
        </td>
      </tr>
    </table>
  </div> 
</body>
</html>