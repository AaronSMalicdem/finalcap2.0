    <div id="sidebar" class="glass-sidebar collapsed">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link {{ request()->routeIs('#') ? 'active' : '' }}"> 
                    <i class="fa-solid fa-border-all"></i><span>General</span> 
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link {{ request()->routeIs('#') ? 'active' : '' }}"> 
                    <i class="fa-solid fa-chart-line"></i><span>Sales</span> 
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link {{ request()->routeIs('#') ? 'active' : '' }}"> 
                    <i class="fa-solid fa-wallet"></i><span>Expenses</span> 
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link {{ request()->routeIs('#') ? 'active' : '' }}"> 
                    <i class="fa-solid fa-tags"></i><span>Promos</span> 
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link {{ request()->routeIs('#') ? 'active' : '' }}"> 
                    <i class="fa-solid fa-star"></i><span>Feedbacks</span> 
                </a>
            </li>
        </ul>
        <button id="toggleSidebar" class="btn btn-light btn-sm mt-3">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('toggleSidebar');
    
        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('expanded');
            sidebar.classList.toggle('collapsed');
        });
    </script>
    