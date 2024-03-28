<!DOCTYPE html>
<html lang="en">
<head>
  <title>CERDAS CERMAT</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="main-menu d-flex fixed-top navbar navbar-expand-lg p-2 py-3 p-lg-4 py-lg-4 " style="background-color: #fff">
    <div class="container-fluid">
      <div class="main-logo d-lg-none"></div>
      {{-- NAVBAR Header --}}
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header mt-3">
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body justify-content-between">
          <div class="main-logo">
            <ul class="navbar-nav menu-list list-unstyled align-items-lg-start d-flex gap-md-3 mb-0">
              <li class="nav-item">
                <img src="{{ asset('assets/img/logo/Logo.png') }}" width="45px" height="45px" alt="logo atas">
              </li>
              <li class="nav-item">
                <img src="{{ asset('assets/img/logo/BLU.png') }}" width="45px" height="45px" alt="logo atas">
              </li>
              <li class="nav-item">
                <img src="{{ asset('assets/img/logo/POLIJE.png') }}" width="45px" height="45px" alt="logo atas">
              </li>
            </ul>
            </a>
          </div>

          <ul class="navbar-nav menu-list list-unstyled align-items-lg-center d-flex gap-md-3 mb-0">
            <li class="nav-item">
              <a href="#home" class="nav-link mx-2 active">Home</a>
            </li>
            <li class="nav-item">
              <a href="#timeline" class="nav-link mx-2">Timeline</a>
            </li>
            <li class="nav-item">
              <a href="#pengumuman" class="nav-link mx-2">Pengumuman</a>
            </li>
            <li class="nav-item">
              <a href="#peringkat" class="nav-link mx-2">peringkat</a>
            </li>
          </ul>

          <div class="d-none d-lg-flex align-items-center">
            <ul class="d-flex  align-items-center list-unstyled m-0">
              <li>
                <a href="/login" class="btn btn-success me-2">Login</a>
                <a href="/register/ketua" class="btn btn-primary">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid d-lg-none">
      <div class="d-flex  align-items-end mt-3">
        <ul class="d-flex  align-items-center list-unstyled m-0">
          <li class="">
          </li>
          <li>
            <a href="#" class="me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch"
              aria-controls="offcanvasSearch">
              <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                <use href="#search" />
              </svg> </a>
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  {{-- <section id="hero" style="background-image: url('{{ asset('assets/img/product-2.jpg') }}'); background-repeat: no-repeat;"> --}}
<section id="home"></section>
    <div class="container">
      <div class="row align-items-center " style="margin-top: 100px">
        <div class="col-md-6 pe-5 mt-8 mt-md-1 mb-5 text-center">
          <h1 class="mb-4 fs-4 text-4xl fw-bold tracking-tight lh-tight text-dark ">Cerdas Cermat</h1>
              <p id="one-value" class="fs-6 my-4 pb-1" style="background-color: rgb(59, 184, 59); border: 1px solid rgb(255, 255, 255); border-radius: 20px; text-align: center; color: white;">NEW! Cerdas Cermat is out! Register now</p>
            <p class="mb-8 fs-6 text-lg fw-normal text-muted">Tunjukkan Keunggulanmu dalam Kepintaran. <br> Bergabunglah dan Bersaing di Lomba Cerdas Cermat untuk Raih Kemenangan!</p>    
        </div> <!-- end of col-md-6 -->
        <div class="col-md-4 pe-5 mt-8 mt-md-1 mb-5 mr-4 text-center">
            <img src="{{ asset('assets/img/lomba.png') }}" alt="image" class="img-fluid float-end ">
        </div> <!-- end of col-md-6 -->
    </div>
    </div><!-- end of container -->
  </section>
  
{{-- Timeline --}}
<section id="timeline"></section>
<div class="container py-5"> <style>.timeline-1 { border-left: 3px solid #1abe14; border-bottom-right-radius: 4px; border-top-right-radius: 4px; background: rgba(26, 255, 76, 0.09); margin: 0 auto; position: relative; padding: 50px; list-style: none; text-align: left; max-width: 40%; } @media (max-width: 767px) { .timeline-1 { max-width: 98%; padding: 25px; } } .timeline-1 .event { border-bottom: 1px dashed #000; padding-bottom: 25px; margin-bottom: 25px; position: relative; } @media (max-width: 767px) { .timeline-1 .event { padding-top: 30px; } } .timeline-1 .event:last-of-type { padding-bottom: 0; margin-bottom: 0; border: none; } .timeline-1 .event:before, .timeline-1 .event:after { position: absolute; display: block; top: 0; } .timeline-1 .event:before { left: -207px; content: attr(data-date); text-align: right; font-weight: 100; font-size: 0.9em; min-width: 120px; } @media (max-width: 767px) { .timeline-1 .event:before { left: 0px; text-align: left; } } .timeline-1 .event:after { -webkit-box-shadow: 0 0 0 3px #128b18; box-shadow: 0 0 0 3px #30e918; left: -55.8px; background: #fff; border-radius: 50%; height: 9px; width: 9px; content: ""; top: 5px; } @media (max-width: 767px) { .timeline-1 .event:after { left: -31.8px; } }</style>
  <div class="row">
    <div class="col-md-12">
      <div id="content">
        <ul class="timeline-1 text-black">
          <li class="event" data-date="12:30 - 1:00pm">
            <h4 class="mb-3">Registration</h4>
            <p>Get here on time, it's first come first serve. Be late, get turned away.</p>
          </li>
          <li class="event" data-date="2:30 - 4:00pm">
            <h4 class="mb-3 pt-3">Opening Ceremony</h4>
            <p>Get ready for an exciting event, this will kick off in amazing fashion with MOP &amp; Busta
              Rhymes as an opening show.</p>
          </li>
          <li class="event" data-date="5:00 - 8:00pm">
            <h4 class="mb-3 pt-3">Main Event</h4>
            <p>This is where it all goes down. You will compete head to head with your friends and rivals. Get
              ready!</p>
          </li>
          <li class="event" data-date="8:30 - 9:30pm">
            <h4 class="mb-3 pt-3">Closing Ceremony</h4>
            <p class="mb-0">See how is the victor and who are the losers. The big stage is where the winners
              bask in their
              own glory.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  {{-- Pengumuman --}}
  <section id="pengumuman"></section>
  <div class="m-5" style="margin-top: 50px; overflow-x-auto;">
    <table class="table table-bordered">
      <!-- Tambahkan baris dan kolom sesuai kebutuhan -->
      <thead class="bg-light text-center" style="text-align: center">
        <tr>
          <th scope="col" class="px-6 py-3 text-start">Pengumuman</th>
          <th scope="col" class="px-6 py-3 text-start">Status</th>
          <th scope="col" class="px-6 py-3 text-start">Download</th>
        </tr>
      </thead>
      <tbody class="bg-white" style="text-align: start">
        <tr>
          <td class="px-6 py-4 whitespace-nowrap">
            Rumusan masalah yang sesuai dengan topik <br>
            "Kebersihan lingkungan Madrasah dan kenyamanan siswa-siswi Madrasah Madani <br>
            adalah:c. Bagaimanakah pengaruh kebersihan lingkungan Madrasah terhadap <br>
            kenyamanan belajar siswa?
          </td>
          <td class="px-6 py-4 text-center">Data 2</td>
          <td class="px-6 py-4 text-center">
            <button
              type="button"
              class="btn btn-primary rounded-md"
              onclick="window.location.href='https://drive.usercontent.google.com/download?id=1VXYhdWpGQmY62OC5bH0_wfqm7M674CUR&export=download&authuser=0&confirm=t&uuid=30158d1e-2101-4959-8412-573059a64589&at=APZUnTV70Tr5QcUv_kKs-Of8KM3y:1711381080339'"
            >
              <svg class="bi bi-download m-1" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M.5 9a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 1.5 9h11a.5.5 0 0 1 0 1H.5zm0 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
              </svg>
              Download
            </button>
          </td>
        </tr>
        <!-- Tambahkan baris-baris lainnya sesuai kebutuhan -->
      </tbody>
    </table>
  </div>
  {{-- peringkat --}}
  <section id="peringkat"></section>
  <div class="container max-width-md mt-6">
    <h1 class="text-2xl font-bold mb-4">Tangga Peringkat Juara</h1>
    <div class="border rounded-lg overflow-hidden">
      <div class="bg-light px-4 py-2 d-flex justify-content-between align-items-center">
        <span class="font-semibold">Peringkat 4</span>
        <span class="text-muted">#4</span>
      </div>
      <div class="bg-white px-4 py-2 d-flex justify-content-between align-items-center">
        <span class="font-semibold">Peringkat 5</span>
        <span class="text-muted">#5</span>
      </div>
      <div class="bg-light px-4 py-2 d-flex justify-content-between align-items-center">
        <span class="font-semibold">Peringkat 6</span>
        <span class="text-muted">#6</span>
      </div>
    </div>
  </div>
</div>
</body>

  <!-- ======= Footer ======= -->
<div class="blockcode">
  <div class="header"></div>
  <footer class="page-footer shadow">
    <div class="d-flex flex-column mx-auto py-2" style="width: 80%">
      <div class="d-flex flex-wrap justify-content-between">
        <div>
          <a href="/" class="d-flex align-items-center  text-dark text-decoration-none">
            <img alt="logo" src="{{ asset('assets/img/logo/Logo.png') }}" width="30px" />
            <span class="ms-3 mt-2 h5 font-weight-bold">CERDAS CERMAT</span>
          </a><br>
          <p>
              Jl. Mastrip PO BOX 164 <br>
              Jember - Jawa Timur<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 331 333533<br>
              <strong>Email:</strong> politeknik@polije.ac.id<br>
          </p>

          
        </div>
        <div>
          <p class="h5 mb-4" style="font-weight: 600">Devwares</p>
          <ul class="p-0" style="list-style: none; cursor: pointer">
            <li class="my-2">
              <a class="text-dark" href="#home">Home</a>
            </li>
            <li class="my-2">
              <a class="text-dark" href="#timeline">Timeline</a>
            </li>
            <li class="my-2">
              <a class="text-dark" href="#pengumuman">Pengumuman</a>
            </li>
            <li class="my-2">
              <a class="text-dark" href="#peringkat">Peringkat</a>
            </li>
          </ul>
        </div>
        <div>
          
        </div>
        <div>
          <p class="h5 mb-4" style="font-weight: 600"><h4>Politeknik Negeri Jember</h4></p>
          
            </li>
          </ul>
        </div>
      </div>
      <small class="text-center mt-5">&copy; Devwares, 2020. All rights reserved.</small>
    </div>
  </footer>
</div>
</html>