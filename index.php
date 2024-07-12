<!DOCTYPE html>
<html>
<head>
<meta name ="viewport" content="width=device-width, initial-scele=1">
<link rel="stylesheet" href="assets/app.css">
<link rel="stylesheet" href="assets/login.css">
</head>
<body>

<div class="topnav">
    <a class="active" href="home.php">Home</a>
    <a href="eksportir.php">Eksportir</a>
    <a href="komoditi.php">Komoditi</a>
    <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">login</a>
</div>

<div style="padding-left:16px">
   <h2>Dashboard App</h2>
   <p>Aplikasi Eksportir</p>
   <table id="customers">
    <tr>
        <th>No</th>
        <th>Tahun</th>
        <th>Komoditi</th>
        <th>Negara Yujuan</th>
        <th>Eksportir</th>
        <th>Importir</th>
    </tr>
</table>
</div>
</body>
</html>

<div id="id01" class="modal">

  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <h4>Isikan Username dan password</h4>
    </div>

    <div class="container">
        <laber for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Usernama" name="uname" required>

        <label for="psw'><b>Password</b></label>
        <input type="password placeholder="Enter Password" name="psw" required>

        <button type="submit">login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
         <button type="button" onclick="document.getElementById('id01').style.display'none'" class="cancelbtn">Cancel</button>
    </div>
  </from>
</div>

<script>
// Get the modal
var modal = document.getElemenById('id01');

// When the user clicks anywhere outside of the modal,close it 
window.onclick = function(even) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>