<?php

$needed_array = array();

    if (isset($_POST['submit'])){
        echo "<div class='alert alert-primary' role='alert'>";
        echo "<h1>Logs</h1>";
        echo "form has been submitted";
        
        $sort_order_array =  array ($_POST['alpha'], $_POST['beta'], $_POST['gamma'], $_POST['tesla']);
        
        echo "<br>";
        
        print_r($sort_order_array);
        
        echo "<br>";
        
        if (array_unique($sort_order_array) != $sort_order_array){
            
            echo "all values are not unique<br>";
            
            //find out non unique values
            foreach (array_count_values($sort_order_array) as $key => $sort_value){
                if ($sort_value > 1) {
                    array_push($needed_array, $key);
                }
            }
        }
        
        print_r(array_count_values($sort_order_array));
        echo "</br>";
        
        print_r($needed_array);
        
        echo "</div>";
        
        $needed_fix = "Saab";
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sortable</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<h1>Sortable test</h1>


<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

<div class="form-group">
    <label class="">Menu Item Alpha <?php if (in_array($_POST['alpha'], $needed_array)) echo "<span class='badge badge-secondary alert-danger'>*err</span>"?></label>
    <select class="form-control" name="alpha"  value="" >
  <option value="Volvo" <?php if (isset($_POST['alpha'])){ echo $_POST['alpha'] == "Volvo" ? "selected" : ""; }?> >Volvo</option>
  <option value="Saab" <?php if (isset($_POST['alpha'])){ echo $_POST['alpha'] == "Saab" ? "selected" : ""; }?>>Saab</option>
  <option value="Mercedes" <?php if (isset($_POST['alpha'])){ echo $_POST['alpha'] == "Mercedes" ? "selected" : ""; }?>>Mercedes</option>
  <option value="Audi" <?php if (isset($_POST['alpha'])){ echo $_POST['alpha'] == "Audi" ? "selected" : ""; }?>>Audi</option>
</select>
</div>
   
   <div class="form-group">
    <label class="">Menu Item Beta  <?php if (in_array($_POST['beta'], $needed_array)) echo "<span class='badge badge-secondary alert-danger'>*err</span>"?></label>
    <select class="form-control" name="beta"  value="" >
  <option value="Volvo" <?php if (isset($_POST['beta'])){ echo $_POST['beta'] == "Volvo" ? "selected" : ""; }?> >Volvo</option>
  <option value="Saab" <?php if (isset($_POST['beta'])){ echo $_POST['beta'] == "Saab" ? "selected" : ""; }?>>Saab</option>
  <option value="Mercedes" <?php if (isset($_POST['beta'])){ echo $_POST['beta'] == "Mercedes" ? "selected" : ""; }?>>Mercedes</option>
  <option value="Audi" <?php if (isset($_POST['beta'])){ echo $_POST['beta'] == "Audi" ? "selected" : ""; }?>>Audi</option>

</select>
</div>
   <div class="form-group">
    <label class="">Menu Item Gamma  <?php if (in_array($_POST['gamma'], $needed_array)) echo "<span class='badge badge-secondary alert-danger'>*err</span>"?></label>
    <select class="form-control" name="gamma"  value="" >
  <option value="Volvo" <?php if (isset($_POST['gamma'])){ echo $_POST['gamma'] == "Volvo" ? "selected" : ""; }?> >Volvo</option>
  <option value="Saab" <?php if (isset($_POST['gamma'])){ echo $_POST['gamma'] == "Saab" ? "selected" : ""; }?>>Saab</option>
  <option value="Mercedes" <?php if (isset($_POST['gamma'])){ echo $_POST['gamma'] == "Mercedes" ? "selected" : ""; }?>>Mercedes</option>
  <option value="Audi" <?php if (isset($_POST['gamma'])){ echo $_POST['gamma'] == "Audi" ? "selected" : ""; }?>>Audi</option>

</select>
</div>
   <div class="form-group">
    <label class="">Menu Item Tesla  <?php if (in_array($_POST['tesla'], $needed_array)) echo "<span class='badge badge-secondary alert-danger'>*err</span>"?></label>
    <select class="form-control" name="tesla"  value="" >
  <option value="Volvo" <?php if (isset($_POST['tesla'])){ echo $_POST['tesla'] == "Volvo" ? "selected" : ""; }?> >Volvo</option>
  <option value="Saab" <?php if (isset($_POST['tesla'])){ echo $_POST['tesla'] == "Saab" ? "selected" : ""; }?>>Saab</option>
  <option value="Mercedes" <?php if (isset($_POST['tesla'])){ echo $_POST['tesla'] == "Mercedes" ? "selected" : ""; }?>>Mercedes</option>
  <option value="Audi" <?php if (isset($_POST['tesla'])){ echo $_POST['tesla'] == "Audi" ? "selected" : ""; }?>>Audi</option>

</select>
</div>

<input type="submit" name="submit" class="btn btn-default" value="Update">

</form>
        </div>
    </div>
</div>



<a href="sortable_php.php">PHP Sort</a>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
<script src="js/sortable.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>