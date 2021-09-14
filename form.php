<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Personal labrary</title>
    
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
    crossorigin="anonymous">
 

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">  

    <style>
      body{
        background-color: #FE0;
      }
      </style>
</head>
<body>


   <div class="container my-4">
    <h2>Add Personal labrary Notes</h2>
    <form action="Main.php" method="POST">
      <div class="form-group">
        <label for="title">Note for labrary</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
      </div>

      <div class="form-group">
        <label for="desc">Personal labrary Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
      </div>

      <!-- <input type=button class="btn btn-primary" "
> -->
      
      <!--  
      -->
      <!-- <script>
 document.getElementById("submitBtn").addEventListener("click", myFunction);
function myFunction() {
  window.location.href="http://programminghead.com";
}

  </script>  -->
  <button type="submit"  class="btn btn-primary"> Add labrary</button>


      
    </form>
  </div>

</body>
</html>