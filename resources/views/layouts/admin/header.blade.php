<nav class="navbar navbar-expand-lg navbar-admin fixed-top">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <button type="button" id="sidebarCollapse" class="btn btn-link text-dark me-3 p-0 d-lg-none">
                <i class="fas fa-bars fa-lg"></i>
            </button>
            <div class="d-flex align-items-center me-4">
                <img src="{{asset('images/logo_pnc_1.png')}}" alt="Logo PNC" class="me-2" height="35">
                <h5 class="mb-0 fw-bold d-none d-sm-block">TOEFL PNC</h5>
            </div>
            <div class="border-start ps-3 d-none d-md-block">
                <span class="navbar-text text-muted" style="font-size: 14px;">Admin Panel</span>
            </div>
        </div>
        <div class="ms-auto d-flex align-items-center">
            <div class="dropdown">
                <a href="#" id="dropdownUser" class="d-flex align-items-center text-decoration-none dropdown-toggle text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="bg-light rounded-circle p-2 border me-2" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-user text-muted"></i>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow border-0" aria-labelledby="dropdownUser">
                    <li><a href="#" class="dropdown-item">Profile</a></li>
                    <li><a href="#" class="dropdown-item">Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="{{route('admin.logout')}}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>