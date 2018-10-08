<div kb-inject="UserController">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-4 mb-sm-0">
            <?php if (isset($title)) : ?>
                <span class="text-uppercase page-subtitle"><?php echo $title ?></span>
            <?php endif; ?>
            <?php if (isset($heading)) : ?>
                <h3 class="page-title"><?php echo $heading ?></h3>
            <?php endif; ?>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- List user -->
    <div class="row">
        <div class="col-12">
            <div class="card card-small lo-stats h-100">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Latest Orders</h6>
                    <div class="block-handle"></div>
                </div>
                <div class="card-body p-0">
                    <div class="container-fluid px-0">
                        <table class="table mb-0">
                            <thead class="py-2 bg-light text-semibold border-bottom">
                            <tr>
                                <th>Details</th>
                                <th></th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Items</th>
                                <th class="text-center">Total</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="lo-stats__image">
                                    <img class="border rounded" src="images/sales-overview/product-order-1.jpg">
                                </td>
                                <td class="lo-stats__order-details">
                                    <span>#19280</span>
                                    <span>21 February 2018 20:32</span>
                                </td>
                                <td class="lo-stats__status">
                                    <div class="d-table mx-auto">
                                        <span class="badge badge-pill badge-success">Complete</span>
                                    </div>
                                </td>
                                <td class="lo-stats__items text-center">12</td>
                                <td class="lo-stats__total text-center text-success">$199</td>
                                <td class="lo-stats__actions">
                                    <div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-sm btn-white">Cancel</button>
                                        <button type="button" class="btn btn-sm btn-white">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="lo-stats__image">
                                    <img class="border rounded" src="images/sales-overview/product-order-2.jpg">
                                </td>
                                <td class="lo-stats__order-details">
                                    <span>#19279</span>
                                    <span>21 February 2018 20:32</span>
                                </td>
                                <td class="lo-stats__status">
                                    <div class="d-table mx-auto">
                                        <span class="badge badge-pill badge-warning">Pending</span>
                                    </div>
                                </td>
                                <td class="lo-stats__items text-center">7</td>
                                <td class="lo-stats__total text-center text-success">$612</td>
                                <td class="lo-stats__actions">
                                    <div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-sm btn-white">Cancel</button>
                                        <button type="button" class="btn btn-sm btn-white">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="lo-stats__image">
                                    <img class="border rounded" src="images/sales-overview/product-order-3.jpg">
                                </td>
                                <td class="lo-stats__order-details">
                                    <span>#19278</span>
                                    <span>21 February 2018 20:32</span>
                                </td>
                                <td class="lo-stats__status">
                                    <div class="d-table mx-auto">
                                        <span class="badge badge-pill badge-danger">Canceled</span>
                                    </div>
                                </td>
                                <td class="lo-stats__items text-center">18</td>
                                <td class="lo-stats__total text-center text-success">$1211</td>
                                <td class="lo-stats__actions">
                                    <div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-sm btn-white">Cancel</button>
                                        <button type="button" class="btn btn-sm btn-white">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="lo-stats__image">
                                    <img class="border rounded" src="images/sales-overview/product-sweaters.jpg">
                                </td>
                                <td class="lo-stats__order-details">
                                    <span>#19277</span>
                                    <span>21 February 2018 20:32</span>
                                </td>
                                <td class="lo-stats__status">
                                    <div class="d-table mx-auto">
                                        <span class="badge badge-pill badge-success">Complete</span>
                                    </div>
                                </td>
                                <td class="lo-stats__items text-center">12</td>
                                <td class="lo-stats__total text-center text-success">$199</td>
                                <td class="lo-stats__actions">
                                    <div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-sm btn-white">Cancel</button>
                                        <button type="button" class="btn btn-sm btn-white">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer border-top">
                    <div class="row">
                        <div class="col">
                            <select class="custom-select custom-select-sm" style="max-width: 130px;">
                                <option selected="">Last Week</option>
                                <option value="1">Today</option>
                                <option value="2">Last Month</option>
                                <option value="3">Last Year</option>
                            </select>
                        </div>
                        <div class="col text-right view-report">
                            <a href="#">View full report →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //List user -->
</div>
