<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Calculator !</title>
</head>
<body>
    
  
    <form name="calc" class="calculator">
      <div class="container">
      <div class="row">
      <div class="col-sm-3">
      <div class="mt-4 ml-4">           
      <input class="value" type="text" name="txt" readonly>
      </div>
      <div class="row text-center my-4 flex-wrap">
      <span class="col-3 py-1 border btn btn-warning" onclick="document.calc.txt.value +='7'">7</span>
      <span class="col-3 py-1 border btn btn-warning" onclick="document.calc.txt.value +='8'">8</span>
      <span class="col-3 py-1 border btn btn-warning" onclick="document.calc.txt.value +='9'">9</span>
      <span class="col-3 py-1 border btn btn-secondary" onclick="document.calc.txt.value +='/'">/</span>
      <span class="w-100"></span>
      <span class="col-3 py-1 border btn btn-warning" onclick="document.calc.txt.value +='4'">4</span>
      <span class="col-3 py-1 border btn btn-warning" onclick="document.calc.txt.value +='5'">5</span>
      <span class="col-3 py-1 border btn btn-warning" onclick="document.calc.txt.value +='6'">6</span>
      <span class="col-3 py-1 border btn btn-secondary" onclick="document.calc.txt.value +='*'">*</span>
      <span class="w-100"></span>
      <span class="col-3 py-1 border btn btn-warning" onclick="document.calc.txt.value +='1'">1</span>
      <span class="col-3 py-1 border btn btn-warning" onclick="document.calc.txt.value +='2'">2</span>
      <span class="col-3 py-1 border btn btn-warning" onclick="document.calc.txt.value +='3'">3</span>
      <span class="col-3 py-1 border btn btn-secondary" onclick="document.calc.txt.value +='-'">-</span>
      <span class="w-100"></span>
      <span class="col-3 py-1 border btn btn-warning" onclick="document.calc.txt.value +='0'">0</span>
      <span class="col-3 py-1 border btn btn-warning" onclick="document.calc.txt.value +='.'">.</span>
      <span class="col-3 py-1 border btn btn-warning" onclick="document.calc.txt.value = eval(calc.txt.value)">=</span>
      <span class="col-3 py-1 border btn btn-secondary" onclick="document.calc.txt.value +='+'">+</span>
        </div>
      </div>
      </div>
    </form>
    <div class="col-1 pl-3 ml-5 border btn btn-info " onclick="document.calc.txt.value =''">
      <span>clear</span>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>