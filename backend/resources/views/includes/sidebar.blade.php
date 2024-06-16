<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Product</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('products.index') }}"> <i class="menu-icon fa fa-list"></i>Products</a>
                </li>
                <li class="">
                    <a href="{{ route('products.create') }}"> <i class="menu-icon fa fa-plus"></i>Add Product</a>
                </li>

                <li class="menu-title">Product Images</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('product-images.index') }}"> <i class="menu-icon fa fa-list"></i>Product Images</a>
                </li>
                <li class="">
                    <a href="{{ route('product-images.create') }}"> <i class="menu-icon fa fa-plus"></i>Add Product Image</a>
                </li>

                <li class="menu-title">Transaction</li><!-- /.menu-title -->
                <li class="">
                    <a href="#"> <i class="menu-icon fa fa-list"></i>Transactions</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->
