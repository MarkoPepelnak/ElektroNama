<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"><link rel="stylesheet" href="style.css">
<style>
</style>
</head>

  <body>
  <div style="text-align: center; background-color: white;">
                <img src="https://www.nama.si/wp-content/uploads/2021/02/logo-nama.png" class="rounded" alt="..." width="400" height="100">
                <hr style="width:80%;text-align:center;">
    </div>
    <div style="margin-top:60px"  style="text-align: center;" class="col-md-12 text-center">
        <h3>PODATKI</h3>
    </div>
    <form id="dobPodatki" action="{{ route('Dpodatki') }}" method="post" name="dobPodatki" role="form">
    {{csrf_field()}}
    <div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
            <label for="zeton"></label> <span class="required"></span>
            <input type="text" class="form-control" id="zeton" name="zeton" placeholder="Žeton*" required>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="maticna"></label> <span class="required"></span>
            <input type="text" class="form-control" id="maticna" name="maticna" placeholder="Matična številka dobavitelja*" required>
        </div>
        </div>
        </div>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
            <label for="davcna"></label> <span class="required"></span>
            <input type="text" class="form-control" id="davcna" name="davcna" placeholder="Davčna številka dobavitelja*" required>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="naziv"></label> <span class="required"></span>
            <input type="text" class="form-control" id="naziv" name="naziv" placeholder="Naziv*" required>
        </div>
        </div>
        </div>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
            <label for="leto"></label> <span class="required"></span>
            <input type="text" class="form-control" id="leto" name="leto" placeholder="Leto*" required>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="mesec"></label> <span class="required"></span>
            <input type="text" class="form-control" id="mesec" name="mesec" placeholder="Mesec*" required>
        </div>
        </div>
        </div>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
            <label for="energent"></label>
            <input type="text" class="form-control" id="energent" name="energent" placeholder="Energent">
        </div>
        </div>
        </div>
    <div class="row">
        <div class="col-xs-12" style="display: none" id="userCardErrors"></div>
        <div class="col-sm-12 text-right">
            <input type="submit" class="btn btn-outline-secondary full-width mb-2" id="cmdAddContact" value="Naprej">
            <a href="/dobLog">
                <input type="button" form="" class="btn btn-outline-secondary full-width mb-2" id="cmdCancelAddCardContact" value="Prekliči">
            </a>
        </div>
        </div>
        </div>
    </form>
    <footer style="">
        <div style="background: black; padding: 10px;text-align: center; margin-top: 250px; margin-bottom: 0px;">
                <img src="https://www.bilumina.com/assets/images/logo.png" class="rounded" alt="..." width="200" height="40"><br />
                <a href="/" style="color: white;">Domov</a>
                <span style="color: white;"> · </span>
                <a href="/dobLog" style="color: white;">Dobavitelj</a>
                <span style="color: white;"> · </span>
                <a href="/oprLog" style="color: white;">Operater</a>
        </div>
        </footer>
</body>
</html>