<li class="c-sidebar-nav-item {{ request()->routeIs('home') ? 'c-active' : '' }}">
    <a class="c-sidebar-nav-link" href="{{ route('home') }}">
        <i class="c-sidebar-nav-icon bi bi-house" style="line-height: 1;"></i> Trang chủ
    </a>
</li>

@can('access_products')
<li class="c-sidebar-nav-item c-sidebar-nav-dropdown {{ request()->routeIs('products.*') || request()->routeIs('product-categories.*') ? 'c-show' : '' }}">
    <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
        <i class="c-sidebar-nav-icon bi bi-journal-bookmark" style="line-height: 1;"></i> Sản phẩm
    </a>
    <ul class="c-sidebar-nav-dropdown-items">
        @can('access_product_categories')
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->routeIs('product-categories.*') ? 'c-active' : '' }}" href="{{ route('product-categories.index') }}">
                <i class="c-sidebar-nav-icon bi bi-collection" style="line-height: 1;"></i> Loại sản phẩm
            </a>
        </li>
        @endcan
        @can('create_products')
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->routeIs('products.create') ? 'c-active' : '' }}" href="{{ route('products.create') }}">
                <i class="c-sidebar-nav-icon bi bi-journal-plus" style="line-height: 1;"></i> Thêm sản phẩm
            </a>
        </li>
        @endcan
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->routeIs('products.index') ? 'c-active' : '' }}" href="{{ route('products.index') }}">
                <i class="c-sidebar-nav-icon bi bi-journals" style="line-height: 1;"></i> Danh sách sản phẩm
            </a>
        </li>
        @can('print_barcodes')
           <li class="c-sidebar-nav-item">
               <a class="c-sidebar-nav-link {{ request()->routeIs('barcode.print') ? 'c-active' : '' }}" href="{{ route('barcode.print') }}">
                   <i class="c-sidebar-nav-icon bi bi-printer" style="line-height: 1;"></i> In Barcode
               </a>
           </li>
        @endcan
    </ul>
</li>
@endcan


@can('access_quotations')
    <li class="c-sidebar-nav-item c-sidebar-nav-dropdown {{ request()->routeIs('quotations.*') ? 'c-show' : '' }}">
        <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <i class="c-sidebar-nav-icon bi bi-cart-check" style="line-height: 1;"></i> Đơn hàng
        </a>
        <ul class="c-sidebar-nav-dropdown-items">
            @can('create_adjustments')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->routeIs('quotations.create') ? 'c-active' : '' }}" href="{{ route('quotations.create') }}">
                        <i class="c-sidebar-nav-icon bi bi-journal-plus" style="line-height: 1;"></i> Tạo đơn hàng
                    </a>
                </li>
            @endcan
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->routeIs('quotations.index') ? 'c-active' : '' }}" href="{{ route('quotations.index') }}">
                    <i class="c-sidebar-nav-icon bi bi-journals" style="line-height: 1;"></i> Tất cả đơn hàng
                </a>
            </li>
        </ul>
    </li>
@endcan

@can('access_purchases')
    <li class="c-sidebar-nav-item c-sidebar-nav-dropdown {{ request()->routeIs('purchases.*') || request()->routeIs('purchase-payments*') ? 'c-show' : '' }}">
        <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <i class="c-sidebar-nav-icon bi bi-bag" style="line-height: 1;"></i> Doanh số
        </a>
        @can('create_purchase')
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->routeIs('purchases.create') ? 'c-active' : '' }}" href="{{ route('purchases.create') }}">
                        <i class="c-sidebar-nav-icon bi bi-journal-plus" style="line-height: 1;"></i> Tạo doanh số
                    </a>
                </li>
            </ul>
        @endcan
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->routeIs('purchases.index') ? 'c-active' : '' }}" href="{{ route('purchases.index') }}">
                    <i class="c-sidebar-nav-icon bi bi-journals" style="line-height: 1;"></i> Tất cả doanh số
                </a>
            </li>
        </ul>
    </li>
@endcan

@can('access_purchase_returns')
    <li class="c-sidebar-nav-item c-sidebar-nav-dropdown {{ request()->routeIs('purchase-returns.*') || request()->routeIs('purchase-return-payments.*') ? 'c-show' : '' }}">
        <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <i class="c-sidebar-nav-icon bi bi-arrow-return-right" style="line-height: 1;"></i> Doanh số hoàn
        </a>
        @can('create_purchase_returns')
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->routeIs('purchase-returns.create') ? 'c-active' : '' }}" href="{{ route('purchase-returns.create') }}">
                        <i class="c-sidebar-nav-icon bi bi-journal-plus" style="line-height: 1;"></i> Tạo doanh số hoàn
                    </a>
                </li>
            </ul>
        @endcan
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->routeIs('purchase-returns.index') ? 'c-active' : '' }}" href="{{ route('purchase-returns.index') }}">
                    <i class="c-sidebar-nav-icon bi bi-journals" style="line-height: 1;"></i> Tất cả doanh số hoàn
                </a>
            </li>
        </ul>
    </li>
@endcan

@can('access_sales')
    <li class="c-sidebar-nav-item c-sidebar-nav-dropdown {{ request()->routeIs('sales.*') || request()->routeIs('sale-payments*') ? 'c-show' : '' }}">
        <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <i class="c-sidebar-nav-icon bi bi-receipt" style="line-height: 1;"></i> Bán hàng
        </a>
        @can('create_sales')
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->routeIs('sales.create') ? 'c-active' : '' }}" href="{{ route('sales.create') }}">
                        <i class="c-sidebar-nav-icon bi bi-journal-plus" style="line-height: 1;"></i> Tạo
                    </a>
                </li>
            </ul>
        @endcan
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->routeIs('sales.index') ? 'c-active' : '' }}" href="{{ route('sales.index') }}">
                    <i class="c-sidebar-nav-icon bi bi-journals" style="line-height: 1;"></i> Tất cả doanh số
                </a>
            </li>
        </ul>
    </li>
@endcan

@can('access_sale_returns')
    <li class="c-sidebar-nav-item c-sidebar-nav-dropdown {{ request()->routeIs('sale-returns.*') || request()->routeIs('sale-return-payments.*') ? 'c-show' : '' }}">
        <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <i class="c-sidebar-nav-icon bi bi-arrow-return-left" style="line-height: 1;"></i> Lợi nhuận
        </a>
        @can('create_sale_returns')
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->routeIs('sale-returns.create') ? 'c-active' : '' }}" href="{{ route('sale-returns.create') }}">
                        <i class="c-sidebar-nav-icon bi bi-journal-plus" style="line-height: 1;"></i> Tạo lợi nhuận
                    </a>
                </li>
            </ul>
        @endcan
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->routeIs('sale-returns.index') ? 'c-active' : '' }}" href="{{ route('sale-returns.index') }}">
                    <i class="c-sidebar-nav-icon bi bi-journals" style="line-height: 1;"></i> Tất cả lợi nhuận
                </a>
            </li>
        </ul>
    </li>
@endcan

@can('access_expenses')
    <li class="c-sidebar-nav-item c-sidebar-nav-dropdown {{ request()->routeIs('expenses.*') || request()->routeIs('expense-categories.*') ? 'c-show' : '' }}">
        <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <i class="c-sidebar-nav-icon bi bi-wallet2" style="line-height: 1;"></i> Chi phí
        </a>
        <ul class="c-sidebar-nav-dropdown-items">
            @can('access_expense_categories')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->routeIs('expense-categories.*') ? 'c-active' : '' }}" href="{{ route('expense-categories.index') }}">
                        <i class="c-sidebar-nav-icon bi bi-collection" style="line-height: 1;"></i> Phân loại
                    </a>
                </li>
            @endcan
            @can('create_expenses')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->routeIs('expenses.create') ? 'c-active' : '' }}" href="{{ route('expenses.create') }}">
                        <i class="c-sidebar-nav-icon bi bi-journal-plus" style="line-height: 1;"></i> Tạo chi phí
                    </a>
                </li>
            @endcan
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->routeIs('expenses.index') ? 'c-active' : '' }}" href="{{ route('expenses.index') }}">
                    <i class="c-sidebar-nav-icon bi bi-journals" style="line-height: 1;"></i> Mọi chi phí
                </a>
            </li>
        </ul>
    </li>
@endcan

@can('access_customers|access_suppliers')
    <li class="c-sidebar-nav-item c-sidebar-nav-dropdown {{ request()->routeIs('customers.*') || request()->routeIs('suppliers.*') ? 'c-show' : '' }}">
        <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <i class="c-sidebar-nav-icon bi bi-people" style="line-height: 1;"></i> Khách hàng & NCC
        </a>
        <ul class="c-sidebar-nav-dropdown-items">
            @can('access_customers')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->routeIs('customers.*') ? 'c-active' : '' }}" href="{{ route('customers.index') }}">
                        <i class="c-sidebar-nav-icon bi bi-people-fill" style="line-height: 1;"></i> Khách hàng
                    </a>
                </li>
            @endcan
            @can('access_suppliers')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->routeIs('suppliers.*') ? 'c-active' : '' }}" href="{{ route('suppliers.index') }}">
                        <i class="c-sidebar-nav-icon bi bi-people-fill" style="line-height: 1;"></i> Nhà cung cấp
                    </a>
                </li>
            @endcan
        </ul>
    </li>
@endcan

@can('access_reports')
    <li class="c-sidebar-nav-item c-sidebar-nav-dropdown {{ request()->routeIs('*-report.index') ? 'c-show' : '' }}">
        <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <i class="c-sidebar-nav-icon bi bi-graph-up" style="line-height: 1;"></i> Báo cáo
        </a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->routeIs('profit-loss-report.index') ? 'c-active' : '' }}" href="{{ route('profit-loss-report.index') }}">
                    <i class="c-sidebar-nav-icon bi bi-clipboard-data" style="line-height: 1;"></i> Báo cáo doanh thu
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->routeIs('payments-report.index') ? 'c-active' : '' }}" href="{{ route('payments-report.index') }}">
                    <i class="c-sidebar-nav-icon bi bi-clipboard-data" style="line-height: 1;"></i> Báo cáo thanh toán
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->routeIs('sales-report.index') ? 'c-active' : '' }}" href="{{ route('sales-report.index') }}">
                    <i class="c-sidebar-nav-icon bi bi-clipboard-data" style="line-height: 1;"></i> Báo cáo bán hàng
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->routeIs('purchases-report.index') ? 'c-active' : '' }}" href="{{ route('purchases-report.index') }}">
                    <i class="c-sidebar-nav-icon bi bi-clipboard-data" style="line-height: 1;"></i> Báo cáo mua hàng
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->routeIs('sales-return-report.index') ? 'c-active' : '' }}" href="{{ route('sales-return-report.index') }}">
                    <i class="c-sidebar-nav-icon bi bi-clipboard-data" style="line-height: 1;"></i> Báo cáo doanh số hoàn
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->routeIs('purchases-return-report.index') ? 'c-active' : '' }}" href="{{ route('purchases-return-report.index') }}">
                    <i class="c-sidebar-nav-icon bi bi-clipboard-data" style="line-height: 1;"></i> Báo cáo đơn mua hàng
                </a>
            </li>
        </ul>
    </li>
@endcan

@can('access_user_management')
    <li class="c-sidebar-nav-item c-sidebar-nav-dropdown {{ request()->routeIs('roles*') ? 'c-show' : '' }}">
        <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <i class="c-sidebar-nav-icon bi bi-people" style="line-height: 1;"></i> Quản lý người dùng
        </a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->routeIs('users.create') ? 'c-active' : '' }}" href="{{ route('users.create') }}">
                    <i class="c-sidebar-nav-icon bi bi-person-plus" style="line-height: 1;"></i> Thêm người dùng
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->routeIs('users*') ? 'c-active' : '' }}" href="{{ route('users.index') }}">
                    <i class="c-sidebar-nav-icon bi bi-person-lines-fill" style="line-height: 1;"></i> Tất cả người dùng
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->routeIs('roles*') ? 'c-active' : '' }}" href="{{ route('roles.index') }}">
                    <i class="c-sidebar-nav-icon bi bi-key" style="line-height: 1;"></i> Vai trò & Quyền
                </a>
            </li>
        </ul>
    </li>
@endcan

@can('access_currencies|access_settings')
    <li class="c-sidebar-nav-item c-sidebar-nav-dropdown {{ request()->routeIs('currencies*') ? 'c-show' : '' }}">
        <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <i class="c-sidebar-nav-icon bi bi-gear" style="line-height: 1;"></i> Cài đặt
        </a>
        @can('access_currencies')
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->routeIs('currencies*') ? 'c-active' : '' }}" href="{{ route('currencies.index') }}">
                    <i class="c-sidebar-nav-icon bi bi-cash-stack" style="line-height: 1;"></i> Tiền tệ
                </a>
            </li>
        </ul>
        @endcan
        @can('access_settings')
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->routeIs('settings*') ? 'c-active' : '' }}" href="{{ route('settings.index') }}">
                    <i class="c-sidebar-nav-icon bi bi-sliders" style="line-height: 1;"></i> Cài đặt hệ thống
                </a>
            </li>
        </ul>
        @endcan
    </li>
@endcan
