<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body class="row -3">
    <div class="col -8">

<form>
  <div class="form-group row">
    <label class="col-4">Radio buttons</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="rabbit"> 
        <label for="radio_0" class="custom-control-label">Rabbit</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="duck"> 
        <label for="radio_1" class="custom-control-label">Duck</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="fish"> 
        <label for="radio_2" class="custom-control-label">Fish</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="costumer" class="col-4 col-form-label">customer</label> 
    <div class="col-8">
      <input id="costumer" name="costumer" placeholder="masukan nama costumer" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">pilih produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required="required"> 
        <label for="produk_0" class="custom-control-label">tv</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required="required"> 
        <label for="produk_1" class="custom-control-label">kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci" required="required"> 
        <label for="produk_2" class="custom-control-label">mesin cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">jumlah pembelian</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="masukan jumlah pembelian" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </div>
    <div class= col->
        <ul class="list-group">
            <li class="list-group-item active">Daftar Harga</li>
            <li class="list-group-item">TV: 4.200.000</li>
            <li class="list-group-item">Kulkas: 3.100.000</li>
            <li class="list-group-item">Mesin Cuci: 3.800.000</li>
            <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
        </ul>
    </div>
    
    <hr class="col-12">
    
</body>
</html>