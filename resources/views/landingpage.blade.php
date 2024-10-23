<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SVT MART</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Custom Styles -->
  <style>
    /* Warna untuk tema Rose Quartz dan Serenity */
    :root {
      --rose-quartz: #f7cac9;
      --serenity: #92a8d1;
      --white: #ffffff;
      --gray: #f7f7f7;
      --dark-gray: #333;
      --dark-blue: #2b3a42;
    }

    body {
      font-family: 'Source Sans Pro', sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, var(--rose-quartz), var(--serenity));
      color: var(--dark-gray);
    }

    header {
      background-color: var(--serenity);
      color: var(--white);
      padding: 40px;
      text-align: center;
      position: relative;
    }

    header h1 {
      margin: 0;
      font-size: 3rem;
      font-weight: 700;
    }

    header p {
      font-size: 1.2rem;
      font-weight: 300;
    }

    .btn-primary {
      background-color: var(--rose-quartz);
      border: none;
      color: var(--dark-blue);
      padding: 15px 30px;
      border-radius: 50px;
      font-size: 1.2rem;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .btn-primary:hover {
      background-color: var(--dark-blue);
      color: var(--white);
    }

    section {
      padding: 60px 20px;
      text-align: center;
    }

    section h2 {
      font-size: 2.5rem;
      margin-bottom: 20px;
      color: var(--dark-blue);
    }

    section p {
      font-size: 1.1rem;
      margin-bottom: 40px;
      color: var(--dark-gray);
    }

    .features {
      display: flex;
      justify-content: center;
      gap: 30px;
    }

    .feature-item {
      background-color: var(--white);
      padding: 20px;
      border-radius: 15px;
      width: 300px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .feature-item h3 {
      font-size: 1.6rem;
      margin-bottom: 15px;
      color: var(--dark-blue);
    }

    .feature-item p {
      color: var(--dark-gray);
      font-size: 1rem;
    }

    footer {
      background-color: var(--serenity);
      color: var(--white);
      padding: 40px 20px;
      text-align: center;
    }

    footer p {
      margin: 0;
      font-size: 1rem;
    }

  </style>
</head>
<body>

  <!-- Bagian Header -->
  <header>
    <img src="{{ asset('adminlte/dist/img/SVTMart.jpg') }}" alt="Logo SVT Mart" style="height: 100px; margin-bottom: 20px;">
    <h1>Selamat Datang di SVT Mart!</h1>
    <p>Toko terpercaya untuk memenuhi kebutuhan harian Anda</p>
    <a href="{{ route('login') }}" class="btn-primary">Mulai Belanja</a>
  </header>

  <!-- Bagian Fitur -->
  <section>
    <h2>Layanan Kami</h2>
    <p>Temukan alasan mengapa berbelanja di SVT Mart adalah pengalaman yang nyaman dan memuaskan bagi semua orang.</p>
    <div class="features">
      <div class="feature-item">
        <h3>Pilihan Produk Lengkap</h3>
        <p>Dari kebutuhan pokok hingga produk rumah tangga, kami menyediakan berbagai macam produk yang lengkap.</p>
      </div>
      <div class="feature-item">
        <h3>Pengiriman Cepat & Terpercaya</h3>
        <p>Dapatkan produk Anda dengan cepat langsung di depan pintu dengan layanan pengiriman kami yang andal.</p>
      </div>
      <div class="feature-item">
        <h3>Harga Terjangkau</h3>
        <p>Nikmati harga yang bersaing dan penawaran terbaik untuk berbagai produk berkualitas tinggi.</p>
      </div>
    </div>
  </section>

  <!-- Bagian Footer -->
  <footer>
    <p>Copyright &copy; 2024 <a href="https://www.instagram.com/saythename_17">SVT Mart @saythename_17</a></p>
  </footer>

</body>
</html>