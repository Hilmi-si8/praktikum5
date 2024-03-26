<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user1-128x128.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="nav-link">Muhammad Hilmi</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="latihan.php" class="nav-link">
                        <i class="bi bi-house-door-fill"></i>
                        <p>Menu Utama</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="latihan2.php" class="nav-link">
                        <i class="bi bi-bar-chart-line"></i>
                        <p>Data</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">
                        <i class="bi bi-person-fill-check"></i>
                        <p>Masuk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="register.php" class="nav-link">
                        <i class="bi bi-person-plus-fill"></i>
                        <p>DAFTAR</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navLinks = document.querySelectorAll('.nav-pills .nav-link');

        navLinks.forEach(function (navLink) {
            navLink.addEventListener('click', function () {
                navLinks.forEach(function (link) {
                    link.classList.remove('active');
                });
                this.classList.add('active');
            });
        });

        // Tambahkan kelas 'active' ke tautan pertama secara default
        if (navLinks.length > 0) {
            navLinks[0].classList.add('active');
        }
    });
</script>
