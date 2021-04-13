<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">HARSA</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">HS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ request()->segment(2) == '' ? 'active' : '' }}">
                <a class="nav-link" href="/">
                    <i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-header">Pesan</li>
            <li class="{{ request()->segment(2) == 'Posts' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Posts') }}">
                    <i class="fas fa-inbox"></i>
                    <span>Pesan Masuk</span>
                </a>
            </li>
            <li class="menu-header">Informasi</li>
            <li class="{{ request()->segment(2) == 'Posts' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Posts') }}">
                    <i class="fas fa-newspaper"></i>
                    <span>Posts</span>
                </a>
            </li>
            <li class="{{ request()->segment(2) == 'Project' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Project') }}">
                    <i class="fas fa-project-diagram    "></i>
                    <span>Project</span>
                </a>
            </li>
            <li class="{{ request()->segment(1) == 'Gallery' ? 'active' : '' }}">
                <a class="nav-link" href="/Gallery">
                    <i class="fas fa-images"></i>
                    <span>Gallery</span>
                </a>
            </li>
            <li class="{{ request()->segment(2) == 'Service' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Service') }}">
                    <i class="fas fa-wrench"></i>
                    <span>Services</span>
                </a>
            </li>
            <li class="menu-header">Company</li>
            <li class="{{ request()->segment(2) == 'Employee' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Employee') }}">
                    <i class="fas  fa-user-tie    "></i>
                    <span>Employee</span>
                </a>
            </li>
            <li class="{{ request()->segment(1) == 'about' ? 'active' : '' }}">
                <a class="nav-link" href="/about">
                    <i class="fas fa-low-vision"></i>
                    <span>About</span>
                </a>
            </li>
            <li class="{{ request()->segment(2) == 'Partner' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Partner') }}">
                    <i class="fas fa-handshake    "></i>
                    <span>Partners</span>
                </a>
            </li>
            <li class="menu-header">Display</li>
            <li class="{{ request()->segment(2) == 'Slider' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Slider') }}">
                    <i class="fas fa-sliders-h    "></i>
                    <span>Slider</span>
                </a>
            </li>
            <li class="{{ request()->segment(1) == 'general' ? 'active' : '' }}">
                <a class="nav-link" href="/general">
                    <i class="fas fa-info-circle    "></i>
                    <span>General</span>
                </a>
            </li>
            <li class="menu-header">Website</li>
            <li class="{{ request()->segment(1) == 'account' ? 'active' : '' }}">
                <a class="nav-link" href="/account">
                    <i class="fas fa-users    "></i>
                    <span>User Account</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
