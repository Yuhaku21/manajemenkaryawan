<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Karyawan Daguku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!--Navbar-->
    @include('partial.nav')
    <!--Navbar-->
    <!--MainContent-->
    <div class="container mt-5">
        <h2><b>Data Karyawan Daguku</b></h2>
        <h5>Halaman kelola Data Karyawan Daguku</h5>
        <!--Modal-->
        <div class="ctamodal mt-4">
          @include('partial.modalDaguku')
        </div>
        <!--Modal-->
<!--TableData-->
<div class="table mt-4">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
    <!--Data Backend-->
    </tbody>
  </table>
</div>
<!--TableData-->
    </div>
    <!--MainContent-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>