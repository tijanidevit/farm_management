<?php include 'header.php' ?>
<?php include 'navbar.php' ?>

<div class="container">
  <br /><br /><br /><br />
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb mt-5">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Add Equipment</li>
    </ol>
  </nav>
  <div class="row">
      <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
      <div class="card ">
        <div class="card-body">
          <form action="" method="post" class="form-horizontal">
            <div class="form-group">
              <label for="name">Name</label>
              <input
                type="text"
                class="form-control"
                id="name"
                placeholder="Enter name"
                name="name"
              />
            </div>
            <div class="form-group">
              <label for="Quantity">Quantity</label>
              <input
                type="text"
                class="form-control"
                id="Quantity"
                placeholder="Enter Quantity"
                name="quantity"
              />
            </div>
            <div class="form-group">
              <label for="Price">Price</label>
              <input
                type="text"
                class="form-control"
                id="Price"
                placeholder="Enter Price"
                name="price"
              />
            </div>
            <div class="form-group">
              <label for="Status">Status</label>
              <input
                type="text"
                class="form-control"
                id="status"
                placeholder="Enter Status"
                name="status"
              />
            </div>
            <div class="form-group">
                <label for="date">Upload</label>
                <input type="file" name="upload" id="" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <br><br>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php' ?>
