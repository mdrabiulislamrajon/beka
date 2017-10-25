<div class="sidebar" data-color="purple" data-image="{{ asset('img/sidebar-5.jpg') }}">
	<div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ route('auth.dashboard') }}" class="simple-text">
                {{ config('app.name') }}
            </a>
        </div>

        <ul class="nav">
            <li class="{{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('auth.dashboard') }}">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::segment(1) == 'employees' ? 'active' : '' }}">
                <a href="{{ route('employees.index') }}">
                    <i class="pe-7s-user"></i>
                    <p>Employee Management</p>
                </a>
            </li>
            <li>
                <a href="table.html">
                    <i class="pe-7s-note2"></i>
                    <p>Table List</p>
                </a>
            </li>
            <li>
                <a href="typography.html">
                    <i class="pe-7s-news-paper"></i>
                    <p>Typography</p>
                </a>
            </li>
            <li>
                <a href="icons.html">
                    <i class="pe-7s-science"></i>
                    <p>Icons</p>
                </a>
            </li>
            <li>
                <a href="maps.html">
                    <i class="pe-7s-map-marker"></i>
                    <p>Maps</p>
                </a>
            </li>
            <li>
                <a href="notifications.html">
                    <i class="pe-7s-bell"></i>
                    <p>Notifications</p>
                </a>
            </li>
        </ul>
	</div>
</div>