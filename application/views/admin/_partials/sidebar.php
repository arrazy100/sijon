<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'users' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-user"></i>
            <span>Users</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/users/add') ?>">New User</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/users') ?>">List User</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'blogs' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-blog"></i>
            <span>Blogs</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="blogDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/blogs/add') ?>">New Article</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/blogs') ?>">List Article</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'explorasi' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="explorasiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-graduation-cap"></i>
            <span>Explorasi</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="explorasiDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/explorasi/add') ?>">New Jurusan</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/explorasi') ?>">List Jurusan</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('chat') ?>">
            <i class="fas fa-fw fa-comments"></i>
            <span>Chats</span></a>
    </li>
</ul>