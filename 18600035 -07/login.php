<?php
 require_once 'init.php';
 require_once 'functions.php';

 $title = 'Đăng nhập'; ?>
<?php include 'header.php'; ?>



<form action="sum.php" method="POST">
 <div class="Value ">
  <div class="number1 ">
   <h5 class="text-info"> Enter number1:</h5>
   <input type="text" name="number1" placeholder="Number1">
  </div>
  <div class="number2 mt-3">
   <h5 class="text-info">Enter number1:</h5>
   <input type="text" name="number2" placeholder="Number2">
  </div>
  <div class="output mt-3">
   <input type="submit" name="Output">
  </div>
 </div>
</form>