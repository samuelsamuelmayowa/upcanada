<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand">
    
    <div class="sidebar-brand-text  font-extrabold ">Upcanada Admin</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Banner
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <!-- Nav Item - Charts -->


  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-image"></i>
      <span>Events</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Events Options:</h6>

        <a class="collapse-item" href="{{route('admin.events.index')}}">Events</a>
        <a class="collapse-item" href="{{route('admin.events.create')}}">Add Events</a>
           <a class="collapse-item" href="{{route('admin.events.create')}}"> Events infomation </a>
      </div>
    </div>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Heading -->
  <div class="sidebar-heading">
    Shop
  </div>

  <!-- Categories -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categoryCollapse" aria-expanded="true" aria-controls="categoryCollapse">
      <i class="fas fa-sitemap"></i>
      <span>Blog</span>
    </a>
    <div id="categoryCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Blogs</h6>
        <a class="collapse-item">All Blogs</a>
        <a class="collapse-item">Add Blog</a>
      </div>
    </div>
  </li>
  {{-- Products --}}
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productCollapse" aria-expanded="true" aria-controls="productCollapse">
      <i class="fas fa-cubes"></i>
      <span>Products</span>
    </a>
    <div id="productCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Product Options:</h6>
        <a class="collapse-item" href="{{route('admin.product.index')}}">Market Place</a>
        <a class="collapse-item" href="{{route('admin.product.create')}}">Add Products</a>

      </div>
    </div>
  </li>

   {{-- CATEGORY --}}
 

  {{-- Brands --}}
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#brandCollapse" aria-expanded="true" aria-controls="brandCollapse">
      <i class="fas fa-table"></i>
      <span>Categories</span>
    </a>
    <div id="brandCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Category</h6>
     
        
        <a class="collapse-item" href="{{ route('admin.category.index') }}">Add Categories</a>

      </div>
    </div>
  </li>

  {{-- Shipping --}}

  <!--Orders -->


  <!-- Reviews -->



  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->


  <!-- Posts -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postCollapse" aria-expanded="true" aria-controls="postCollapse">
      <i class="fas fa-fw fa-folder"></i>
      <span>User</span>
    </a>
    <div id="postCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Users Options:</h6>
        <a class="collapse-item">View all Users</a>
      
      </div>
    </div>
  </li>
  <!-- Category -->
  <!-- Tags -->

  <!-- Comments -->
  <li class="nav-item">
    <a class="nav-link">
      <i class="fas fa-comments fa-chart-area"></i>
      <span>Comments</span>
    </a>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <!-- Heading -->
  <div class="sidebar-heading">
    General Settings
  </div>
  <!-- <li class="nav-item">
    <a class="nav-link">
      <i class="fas fa-table"></i>
      <span>Coupon</span></a>
  </li> -->
  <!-- Users -->

  <!-- General settings -->
 

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>