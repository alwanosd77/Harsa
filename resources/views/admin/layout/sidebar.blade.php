<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">BLOG</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">BL</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ request()->is('/') ? 'active' : '' }}">
                <a class="nav-link" href="/">
                    <i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-header">Informasi</li>
            <li class="{{ request()->segment(1) == 'posts' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('posts') }}">
                    <i class="fas fa-newspaper"></i>
                    <span>Posts</span>
                </a>
            </li>
            <li class="{{ request()->segment(1) == 'project' ? 'active' : '' }}">
                <a class="nav-link" href="/project">
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
            <li class="{{ request()->segment(1) == 'services' ? 'active' : '' }}">
                <a class="nav-link" href="/services">
                    <i class="fas fa-wrench    "></i>
                    <span>Services</span>
                </a>
            </li>
            <li class="menu-header">Company</li>
            <li class="{{ request()->segment(1) == 'employee' ? 'active' : '' }}">
                <a class="nav-link" href="/employee">
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
            <li class="{{ request()->segment(1) == 'partners' ? 'active' : '' }}">
                <a class="nav-link" href="/partners">
                    <i class="fas fa-handshake    "></i>
                    <span>Partners</span>
                </a>
            </li>
            <li class="menu-header">Display</li>
            <li class="{{ request()->segment(1) == 'slider' ? 'active' : '' }}">
                <a class="nav-link" href="/slider">
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
