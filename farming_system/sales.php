<?php include 'header.php' ?>
<?php include 'navbar.php' ?>
<head>
  <title>Sales</title>
</head>
<br />
<br />
<br />
<br />
<br />
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb mt-5">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Sales</li>
    </ol>
  </nav>
  <button class="btn btn-primary" id="add" style="margin-bottom: 10px; float: right;">Add Sales</button>
  <script>
    document.getElementById("add").onclick = function () {
      location.href = "add-Sales.php";
    };
  </script>
  <table id="table_id" class="display">
    <thead>
      <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Description</th>
        <th>Status</th>
        <th>Date</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Row 1 Data 1</td>
        <td>Row 1 Data 2</td>
        <td>Row 1 Data 1</td>
        <td>Row 1 Data 2</td>
        <td>Row 1 Data 1</td>
        <td>Row 1 Data 2</td>
        <td>
          <button class="btn btn-danger" name="delete">Delete</button>
          <button class="btn btn-primary" name="edit">Edit</button>
        </td>
      </tr>
      <tr>
        <td>Row 1 Data 1</td>
        <td>Row 1 Data 2</td>
        <td>Row 1 Data 1</td>
        <td>Row 1 Data 2</td>
        <td>Row 1 Data 1</td>
        <td>Row 1 Data 2</td>
        <td>
          <button class="btn btn-danger" name="delete">Delete</button>
          <button class="btn btn-primary" name="edit">Edit</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<script>
  $(document).ready(function () {
    $("#table_id").DataTable();
  });
</script>
<?php include 'footer.php' ?>
