<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>laravelwebsite</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="/">OO</a></h1>
        
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a  href="/">Home</a></li>
          <li><a class="active " href="/todos">Todo's</a></li>
        
          <li><a href="/add" ><i style="font-size: 30px; font-weight:bold;" class="bi bi-plus-circle-dotted"></i></a></li>
          
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="hero-section inner-page">
      <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>

      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay="">Tasks For The Day</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100"><?php echo e(now()->format('d-m-Y H:i')); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-12 col-xl-10">
    
            <div class="card">
              <div class="card-header p-3">
                <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>Task List</h5>
              </div>
              <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">
    
                <table class="table mb-0">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Task</th>
                      <th scope="col">Description</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php if($todo->isDone): ?>
                   
                    <tr  style="text-decoration: line-through">
                      <th>
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp"
                          class="shadow-1-strong rounded-circle" alt="avatar 1"
                          style="width: 55px; height: auto;">
                        <span class="ms-2"><?php echo e($todo->name); ?></span>
                      </th>
                      <td class="align-middle">
                        <span><?php echo e($todo->title); ?></span>
                      </td>
                      <td class="align-middle">
                        <span><?php echo e($todo->description); ?></span>
                      </td>
                      <?php else: ?>
                      <th>
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp"
                          class="shadow-1-strong rounded-circle" alt="avatar 1"
                          style="width: 55px; height: auto;">
                        <span class="ms-2"><?php echo e($todo->name); ?></span>
                      </th>
                      <td class="align-middle">
                        <span><?php echo e($todo->title); ?></span>
                      </td>
                      <td class="align-middle">
                        <span><?php echo e($todo->description); ?></span>
                      </td>
                      <?php endif; ?>
                      <td class="align-middle, d-flex flex-row  ">
                        <form method="POST" action="/<?php echo e($todo->id); ?>">
                          <?php echo csrf_field(); ?>
                         
                          <?php echo method_field('PATCH'); ?>

                    <button  class="btn btn-primary " style="margin-right: 10px"><i  class="bi bi-check2-circle"></i></button>
                        </form>
                       
                       
                        <form method="POST" action="/<?php echo e($todo->id); ?>">
                          <?php echo csrf_field(); ?>
                         
                          <?php echo method_field('DELETE'); ?>

                           <button  class="btn btn-primary "><i class="bi bi-trash2"></i></button>
                       
                        </form>
                       
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                   
                    
                     
                  </tbody>
                </table>
    
              </div>
              <div class="card-footer text-end p-3">
                <button class="me-2 btn btn-link"><a href="/" class="p-3">Cancel</a></button>
                <button class="btn btn-primary">
                  <a href="/add" class="p-3">Add Task</a></button>
              </div>
            </div>
    
          </div>
        </div>
      </div>
    </section>

    

    
    <!-- ======= CTA Section ======= -->
    <section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
            <h2>Be More Effective and Less Busy </h2>
          </div>
          <div class="col-md-5 text-center text-md-end">
            <p><a href="#" class="btn d-inline-flex align-items-center"><i class="bx bxl-apple"></i><span>App store</span></a> <a href="#" class="btn d-inline-flex align-items-center"><i class="bx bxl-play-store"></i><span>Google play</span></a></p>
          </div>
        </div>
      </div>
    </section><!-- End CTA Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <h3>OO</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam
            dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi.</p>
          <p class="social">
            <a href="#"><span class="bi bi-twitter"></span></a>
            <a href="#"><span class="bi bi-facebook"></span></a>
            <a href="#"><span class="bi bi-instagram"></span></a>
            <a href="#"><span class="bi bi-linkedin"></span></a>
          </p>
        </div>
        <div class="col-md-7 ms-auto">
          <div class="row site-section pt-0">
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Navigation</h3>
              <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">Todo's</a></li>
                
                <li><a href="#">Add task</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Services</h3>
              <ul class="list-unstyled">
                <li><a href="#">Team</a></li>
                <li><a href="#">Collaboration</a></li>
                <li><a href="#">Todos</a></li>
                <li><a href="#">Events</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Downloads</h3>
              <ul class="list-unstyled">
                <li><a href="#">Get from the App Store</a></li>
                <li><a href="#">Get from the Play Store</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      

    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html><?php /**PATH C:\Users\Dell Admin\Desktop\LARAVEL\Portfolioweb\todolist\resources\views/tasks.blade.php ENDPATH**/ ?>