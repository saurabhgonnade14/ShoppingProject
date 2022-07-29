<div class="sidebar" data-background-color="white" data-active-color="danger">

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="" class="simple-text">
                JavaShop Admin
            </a>
        </div>

        <ul class="nav">
            <li>
                <a href="{{route('admin.dashboard')}}">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{route('products.create')}}">
                    <i class="bi bi-app"></i>
                    <p>Add Products</p>
                </a>
            </li>
            <li>
                <a href="{{route('products.index')}}">
                    <i class="bi bi-app"></i>
                    <p>View Products</p>
                </a>
            </li>
            <li>
                <a href="{{route('orders.index')}}">
                    <i class="bi bi-app"></i>
                    <p>Orders</p>
                </a>
            </li>
            <li>
                <a href="{{route('users.index')}}">
                    <i class="bi bi-app"></i>
                    <p>Users</p>
                </a>
            </li>
        </ul>
    </div>
</div>
