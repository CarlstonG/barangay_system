<h3>Welcome to Barangay Management System</h3>
<hr>
<div class="col-12">
    <div class="row gx-3 row-cols-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="w-100 d-flex align-items-center">
                        <div class="col-auto pe-1">
                            <span class="fa fa-th-list fs-3 text-success"></span>
                        </div>
                        <div class="col-auto flex-grow-1">
                            <div class="fs-5"><b>Households</b></div>
                            <div class="fs-6 text-end fw-bold">
                                <?php 
                                $household = $conn->query("SELECT count(household_id) as `count` FROM `household_list` ")->fetchArray()['count'];
                                echo $household > 0 ? number_format($household) : 0 ;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="w-100 d-flex align-items-center">
                        <div class="col-auto pe-1">
                            <span class="fa fa-user fs-3 text-primary"></span>
                        </div>
                        <div class="col-auto flex-grow-1">
                            <div class="fs-5"><b>Individual Clearance</b></div>
                            <div class="fs-6 text-end fw-bold">
                                <?php 
                                $clearance = $conn->query("SELECT count(clearance_id) as `count` FROM `clearance_list`")->fetchArray()['count'];
                                echo $clearance > 0 ? number_format($clearance) : 0 ;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="w-100 d-flex align-items-center">
                        <div class="col-auto pe-1">
                            <span class="fa fa-file-alt fs-3 text-warning"></span>
                        </div>
                        <div class="col-auto flex-grow-1">
                            <div class="fs-5"><b>Business Permits</b></div>
                            <div class="fs-6 text-end fw-bold">
                                <?php 
                                $business_clearance = $conn->query("SELECT count(business_clearance_id) as `count` FROM `business_clearance_list` ")->fetchArray()['count'];
                                echo $business_clearance > 0 ? number_format($business_clearance) : 0 ;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="w-100 d-flex align-items-center">
                        <div class="col-auto pe-1">
                            <span class="fa fa-list fs-3 text-primary"></span>
                        </div>
                        <div class="col-auto flex-grow-1">
                            <div class="fs-5"><b>Complaints</b></div>
                            <div class="fs-6 text-end fw-bold">
                                <?php 
                                $complaint = $conn->query("SELECT count(complaint_id) as `count` FROM `complaint_list`")->fetchArray()['count'];
                                echo $complaint > 0 ? number_format($complaint) : 0 ;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        $('.restock').click(function(){
            uni_modal('Add New Stock for <span class="text-primary">'+$(this).attr('data-name')+"</span>","manage_stock.php?pid="+$(this).attr('data-pid'))
        })
        $('table#inventory').dataTable()
    })
</script>