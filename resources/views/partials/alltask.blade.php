<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To Do List</title>
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="{{ asset('css/bang.css') }}">
</head>
<body>

  <div class="container my-4">
    <h2 class="text-center mb-4">My List</h2>

    <a href="{{ route('home') }}" class="btn btn-sm fw-bold fs-4">
      <i class="bi bi-arrow-left-short"></i>
      kembali
  </a>

    <!-- Task Grid -->
    <div class="row g-4">
      <div class="col-md-3">
        <div class="card shadow-sm">
          <div class="card-header">
            <h6 class="fw-bold m-0">Villa</h6>
          </div>
          <div class="card-body">
            <p class="card-text text-truncate">Libuan ke Villa bersama teman</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="card shadow-sm">
          <div class="card-header">
            <h6 class="fw-bold m-0">Belajar Laravel</h6>
          </div>
          <div class="card-body">
            <p class="card-text text-truncate">Belajar Laravel  di santri koding</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="card shadow-sm">
          <div class="card-header">
            <h6 class="fw-bold m-0">Belajar React</h6>
          </div>
          <div class="card-body">
            <p class="card-text text-truncate">Belajar React di WPU</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="card shadow-sm">
          <div class="card-header">
            <h6 class="fw-bold m-0">Matematika</h6>
          </div>
          <div class="card-body">
            <p class="card-text text-truncate">Tugas Matematika bu Nina</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="card shadow-sm">
          <div class="card-header">
            <h6 class="fw-bold m-0">PAIBP</h6>
          </div>
          <div class="card-body">
            <p class="card-text text-truncate">Tugas Presentasi pa budi</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="card shadow-sm">
          <div class="card-header">
            <h6 class="fw-bold m-0">Project Ujikom</h6>
          </div>
          <div class="card-body">
            <p class="card-text text-truncate">Membuat Project TO DO APP</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="card shadow-sm">
          <div class="card-header">
            <h6 class="fw-bold m-0">Gerymang</h6>
          </div>
          <div class="card-body">
            <p class="card-text text-truncate">Sukamelang-Subang</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="card shadow-sm">
          <div class="card-header">
            <h6 class="fw-bold m-0">Sentul</h6>
          </div>
          <div class="card-body">
            <p class="card-text text-truncate">Sentul-Bogor</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>