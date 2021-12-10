
<div class="row">
<div class="col-lg-3">
    <div class="card">
        <div class="stat-widget-one">
            <div class="stat-icon dib"><i class="ti-money color-success border-success"></i>
            </div>
            <div class="stat-content dib">
                <div class="stat-text">Total Sales</div>
                <div class="stat-digit"><?php echo $sales["sales"]; ?></div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3">
    <div class="card">
        <div class="stat-widget-one">
            <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
            </div>
            <div class="stat-content dib">
            

                <div class="stat-text">Total Customers</div>
                <div class="stat-digit"><?php echo $customers["payers"]; ?></div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3">
    <div class="card">
        <div class="stat-widget-one">
            <div class="stat-icon dib"><i class="ti-layout-grid2 color-pink border-pink"></i>
            </div>
            <div class="stat-content dib">
                <div class="stat-text">Available Products</div>
                <div class="stat-digit"><?php echo $products["total"]; ?></div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3">
    <div class="card">
        <div class="stat-widget-one">
            <div class="stat-icon dib"><i class="ti-link color-danger border-danger"></i></div>
            <div class="stat-content dib">
                <div class="stat-text">Pending Orders</div>
                <div class="stat-digit"><?php echo $pendings["pending"]; ?></div>
            </div>
        </div>
    </div>
</div>
</div>


