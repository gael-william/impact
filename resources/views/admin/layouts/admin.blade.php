<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>IMPACT Plus Admin - Dashboard</title>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('assets/admin/vendors/typicons/typicons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/vendors/css/vendor.bundle.base.css') }}">
  
  <!-- Main CSS -->
  <link rel="stylesheet" href="{{ asset('assets/admin/css/vertical-layout-light/style.css') }}">
  
  <link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.png') }}" />
  
  <style>
    * {
      font-family: 'Inter', sans-serif;
    }
    
    body {
      margin: 0;
      padding: 0;
      background: #f8fafc;
      overflow-x: hidden;
    }
    
    /* Hide default sidebar */
    .sidebar {
      display: none !important;
    }
  </style>
</head>
<body>
  <div class="container-scroller">
    @include('admin.layouts.navbar')
    
    @yield('content')
    
    @include('admin.layouts.footer')
  </div>

  <!-- Scripts -->
  <script src="{{ asset('assets/admin/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('assets/admin/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/admin/js/off-canvas.js') }}"></script>
  <script src="{{ asset('assets/admin/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('assets/admin/js/template.js') }}"></script>
  <script src="{{ asset('assets/admin/js/settings.js') }}"></script>
  <script src="{{ asset('assets/admin/js/todolist.js') }}"></script>
  <script src="{{ asset('assets/admin/js/dashboard.js') }}"></script>
</body>
</html>