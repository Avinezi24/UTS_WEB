<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>ADMIN</title>
  <link rel="stylesheet" href="style2.css" />
</head>
<body>
    <header>
      <div class="label">            
        <nav>
          <ul>
              <Li><a href="#">home</a></Li>
              <Li><a href="index.php">logout</a></Li>
          </ul>
        </nav>
      </div>
</header>
    <table border="2px" class="tb">
        <tr>
            <td colspan="4">CATATAN PENJUALAN</td>
        </tr>
        <tr >
            <td class="td"><input type="text" name="nama" placeholder="nama"/></td>
            <td class="td"><input type="text" name="alamat" placeholder="alamat"/></td>
            <td class="td"><input type="text" name="jumlah" placeholder="jumlah"/></td>
            <td class="td"><input type="text" name="harga" placeholder="harga"/></td>
            <td class="td"><input type="text" name="discount" placeholder="discount"/></td>
        </tr>
    </table>



      <section class="penjualan">
        <div class="penjualan-list">
          <h1>CATATAN JUMLAH PENGUNJUNG</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th>Join Time</th>
                <th>Name game</th>
                <th>Details</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>rahman</td>
                <td>08-10-22</td>
                <td>8:00AM</td>
                <td>dragon ball</td>
                <td><button>View</button></td>
              </tr>
              <tr>
                <td>02</td>
                <td>deri</td>
                <td>11-10-22</td>
                <td>01.00 PM</td>
                <td>POKEMON</td>
                <td><button>View</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

  <script>
    alert("anda login sebagai admin")
  </script>

</body>
</html>
