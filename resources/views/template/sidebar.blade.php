<?php
    // $sidebar_query="(";
    //     $sidebar_query.=implode(",", array_fill(0, count($_SESSION[WEBAPP]['user']['user_access']),"?"));
    // $sidebar_query.=")";
    // $page_stmt=$con->myQuery("SELECT page FROM module_functions WHERE id IN ".$sidebar_query,$_SESSION[WEBAPP]['user']['user_access']);
    // $page_links=$page_stmt->fetchAll(PDO::FETCH_COLUMN,0);
    
    // unset($sidebar_query);

    $inventory_menu=array(
                "stock_monitoring.php",
                "stock_adjustment.php",
                "price_list.php",
                "bom_released_items_report.php",
                "defective_items.php", 
                "inventory_cost.php","minmax.php","item_stocks_report.php","defective_items.php",
                "cost_analysis_report.php",
                "cost_analysis_detail_report.php",
                "stock_replacement.php"
                );

    $report_links=array(
            "price_list.php",
            "bom_released_items_report.php",
            "defective_items.php", 
            "inventory_cost.php","minmax.php","item_stocks_report.php","defective_items.php",
            "cost_analysis_report.php",
            "cost_analysis_detail_report.php",
            "non_production_summary.php"
            );
    $admin_links=array(
            "audit_log.php",
            "measurements.php",
            "user.php",
            "categories.php",
            "settings.php",
            "user_types.php",
            "withdrawal_reasons.php"
            );
    $page_links=array();
?>

<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="index.php"?"active":"";?>">
                <a href="{{url('/')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <?php
                if(in_array("bom.php", $page_links)):
            ?>
                <li class="<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="bom.php"?"active":"";?>">
                    <a href="bom.php">
                        <i class="fa fa-files-o"></i> <span>BOM</span>
                    </a>
                </li>
            <?php
                endif;
               
                if(!empty(array_intersect($page_links, $inventory_menu))):
                    #INVENTORY MENU
            ?>
                <li class='header'>INVENTORY</li>
                <?php if(in_array("stock_monitoring.php", $page_links)): ?>
                    <li class='<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="stock_monitoring.php"?"active":"";?>'>
                        <a href="stock_monitoring.php"><i class="fa fa-cubes"></i><span>Stock Monitoring</span></a>
                    </li>
                <?php endif; ?>

                <?php if(in_array("stock_adjustment.php", $page_links)): ?>
                    <li class='<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="stock_adjustment.php"?"active":"";?>'>
                        <a href="stock_adjustment.php"><i class="fa fa-cubes"></i><span>Stock Adjustments</span></a>
                    </li>
                <?php endif; ?>
                <?php if(in_array("stock_replacement.php", $page_links)): ?>
                    <li class='<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="stock_replacement.php"?"active":"";?>'>
                        <a href="stock_replacement.php"><i class="fa fa-cubes"></i><span>Stock Replacement</span></a>
                    </li>
                <?php endif; ?>
                <?php
                 
                    if(!empty(array_intersect($page_links, $report_links))):
                    #REPORTS MENU
                ?>
                <li class='treeview <?php echo (in_array(substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1), $report_links))?"active":"";?>'>
                    <a href="#">
                        <i class="fa fa-file-text"></i>
                        <span>Reports</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class='treeview-menu'>
                            <?php if(in_array("defective_items.php", $page_links)): ?>
                                <li class="<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="defective_items.php"?"active":"";?>">
                                    <a href="defective_items.php"><i class="fa fa-file-text-o"></i><span>Item for Replacements</span></a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array("item_stocks_report.php", $page_links)): ?>
                                <li class="<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="item_stocks_report.php"?"active":"";?>">
                                    <a href="item_stocks_report.php"><i class="fa fa-list-alt"></i><span>Inventory Quantity Report </span></a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array("inventory_cost.php", $page_links)): ?>
                                <li class="<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="inventory_cost.php"?"active":"";?>">
                                    <a href="inventory_cost.php"><i class="fa fa-list-alt"></i><span>Inventory Cost Report </span></a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array("minmax.php", $page_links)): ?>
                                <li class="<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="minmax.php"?"active":"";?>">
                                    <a href="minmax.php"><i class="fa fa-file-text-o"></i><span>Min-Max Report</span></a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array("price_list.php", $page_links)): ?>
                                <li class="<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="price_list.php"?"active":"";?>">
                                    <a href="price_list.php"><i class="fa fa-file-text-o"></i><span>Price List</span></a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array("cost_analysis_report.php", $page_links)): ?>
                                <li class="<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="cost_analysis_report.php"?"active":"";?>">
                                    <a href="cost_analysis_report.php"><i class="fa fa-industry"></i><span>Cost Analysis Summary</span></a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array("cost_analysis_detail_report.php", $page_links)): ?>
                                <li class="<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="cost_analysis_detail_report.php"?"active":"";?>">
                                    <a href="cost_analysis_detail_report.php"><i class="fa fa-industry"></i><span>Cost Analysis Detail</span></a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array("bom_released_items_report.php", $page_links)): ?>
                                <li class="<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="bom_released_items_report.php"?"active":"";?>">
                                    <a href="bom_released_items_report.php"><i class="fa fa-file-text-o"></i><span>Released Items per BOM</span></a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array("non_production_summary.php", $page_links)): ?>
                                <li class="<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="non_production_summary.php"?"active":"";?>">
                                    <a data-toggle="modal" data-target="#prod_summary_modal" style="cursor: pointer;"><i class="fa fa-file-text-o"></i><span>Non-production Withdrawal<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Summary</span></a>
                                </li>
                                
                            <?php endif; ?>
                    </ul>
                </li>
                
                <?php
                    #END REPORTS MENU
                    endif;
                ?>
            <?php
                #END INVENTORY MENU
                endif;
            ?>
            <?php
                
                if(!empty(array_intersect($page_links, $admin_links))):
                    #ADMIN MENU
            ?>
            <li class='header'>ADMINISTRATOR MENU</li>
            <li class='treeview <?php echo (in_array(substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1),$admin_links 
                ))?"active":"";?>'>
                <a href=''><i class="fa fa-lock"></i><span>Administrator</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class='treeview-menu'>
                    <?php if(in_array("user.php", $page_links)): ?>
                        <li class="<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="user.php"?"active":"";?>">
                            <a href="user.php">
                                <i class="fa fa-users"></i> <span>Users</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(in_array("user_types.php", $page_links)): ?>
                        <li class="<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="user_types.php"?"active":"";?>">
                            <a href="user_types.php">
                                <i class="fa fa-users"></i> <span>User Types</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(in_array("categories.php", $page_links)): ?>
                        <li class="<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="categories.php"?"active":"";?>">
                            <a href="categories.php">
                                <i class="fa fa-file-text-o"></i> <span>Categories</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(in_array("measurements.php", $page_links)): ?>
                        <li class="<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="measurements.php"?"active":"";?>">
                            <a href="measurements.php">
                                <i class="fa fa-balance-scale"></i> <span>Measurements</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(in_array("withdrawal_reasons.php", $page_links)): ?>
                        <li class="<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="withdrawal_reasons.php"?"active":"";?>">
                            <a href="withdrawal_reasons.php">
                                <i class="fa fa-balance-scale"></i> <span>Withdrawal Reasons</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(in_array("settings.php", $page_links)): ?>
                    <li class="<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="settings.php"?"active":"";?>">
                        <a href="settings.php">
                            <i class="fa fa-gear"></i> <span>Settings</span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(in_array("audit_log.php", $page_links)): ?>
                    <li class="<?php echo (substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1))=="audit_log.php"?"active":"";?>">
                        <a href="audit_log.php">
                            <i class="fa fa-list"></i> <span>Audit Logs</span>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </li>
            <?php
                #END ADMIN MENU
                endif;
            ?>
            
        </ul>
    </section>
</aside>
<?php if(in_array("non_production_summary.php", $page_links)): ?>
<div class="modal" id="prod_summary_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Non-production Summary Report</h4>
            </div>
            <div class="modal-body"> 
                <div class='' id='' style=''>
                    <form class="form-horizontal" method='GET' action="non_production_summary.php" onsubmit="return validate_year()"> <!-- ="return confirm('Confirm number of quantity to be replaced?')"> -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Year: </label>
                            <div class="col-md-6">
                                <input type='text' id='nw_summary_year' name='year' class='form-control numeric'  value='' minlength='4' maxlength='4' min="2001">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class='col-md-7 col-md-offset-5'>
                                <button class="btn btn-flat btn-success" type="submit" >Save</button>
                                <button type="button" class="btn btn-flat btn-default" data-dismiss="modal"> Cancel </button>
                            </div>
                        </div>
                    </form>
                    <script type="text/javascript">
                        function validate_year() {
                            year_entered=$("#nw_summary_year").val();
                            if(year_entered!=""){
                                year_entered=parseInt(year_entered);
                                if(year_entered==0){
                                    alert("Invalid year entered.");
                                    return false;
                                }
                            }else{
                                alert("Invalid year entered.");
                                return false;
                            }

                            return true;
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php
    // unset($page_links);
    unset($admin_links);
    unset($report_links);
    unset($inventory_menu);
?>