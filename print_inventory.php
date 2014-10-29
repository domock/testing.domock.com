<!-- 
Description     : This is a view file for Print Inventory which displays the whole details in one single page
Author          : Manish Sunthwal
Updated Date    : 29-Oct-2014
Version         : 1.0.0
 -->

 <style>

.roundButton {
    background: none repeat scroll 0 0 #2c81c1;
    border: 1px solid #13496f;
    border-radius:5px;
    color:#fff;
    font-family:OpenSans-Regular;
    font-size: 14px;
    height: auto;
    padding: 4px 8px;
    position: relative;
    right: 0;   
}

</style>


<!-- Right Content Wrapper Start -->
            <div class="rightContentWrapper clearfix">
                <!-- Right Content Container Start -->
                <div class="rightContentContainer">
                    <!-- Right Running Content Start -->
                    <div class="rightRunningContent">
                        <!-- Table Sub Heading Start -->
                        <!--<h1>Heading Text Content</h1>--><!-- Table Sub Heading End -->
                        <!-- Table Data Start -->
                        <div class="table_container">
                            <!-- Table Main Heading Start  -->
                            <div class="table_headding">Approve Inventory<a href="#" class="table_back_button" onclick="window.history.go(-1); return false;">Back to Previous</a></div><!-- Table Main Heading End  -->
                           
                            <!-- Table Running Data-1 Start -->
                            <div class="table clearfix">
                              


                              
                                <!-- Table Body Start -->
                                <div class="table_body">
                                    <!-- Table Row Content Start -->
<form id="formID" class="formular" enctype="multipart/form-data" method="post" action="<?php echo base_url();?>admin/insert_inventory"> 
                                    <div class="form_row clearfix">
                                        

<table class="table" id="the_table">
<thead>
<tr>
    <!-- <th>Select</th> -->
    <th>Serial No.</th>
    <th>Verticle</th>
    <th>Identification</th>
    <th>Course</th>
    <th>Sales Person</th>
    <th>Username</th>
    <th>Password</th>
</tr>
</thead>
<tbody>
<?php //foreach($usernames as $value){ ?>
<?php
    if($inventoryDetails)
    {
        $i=1; foreach($inventoryDetails as $inventory) {
            
?>

<tr class="even">

<!-- <td align="center"><input type="checkbox" name="sel_checkBox[]" class="sel_checkBox" id="sel_checkBox" value="<?php echo $data->el_tutor_id; ?>" /></td> -->

<td>
    <?php echo $inventory['el_inventory_serial_no']; ?> 
    <input type="text" hidden="hidden" name="serialNo[]" value="<?php echo $inventory['el_inventory_serial_no']; ?>"> 
</td>

<td>
    <?php echo $inventory['el_inventory_verticle']; ?>
    <input type="text" hidden="hidden" name="verticle_name[]" value="<?php echo $inventory['el_inventory_verticle']; ?>"> 
</td>


<td clas>
    <?php echo $inventory['el_inventory_identification']; ?>
    <input type="text" hidden="hidden" name="identification_name[]" value="<?php echo $inventory['el_inventory_identification']; ?>"> 
</td>

<td clas>
    <?php echo $inventory['el_inventory_course']; ?>
    <input type="text" hidden="hidden" name="course_name[]" value="<?php echo $inventory['el_inventory_course']; ?>">
</td>

<td clas>
    <?php echo $inventory['el_inventory_sales_person']; ?>
    <input type="text" hidden="hidden" name="sales_person_name[]" value="<?php echo $inventory['el_inventory_sales_person']; ?>">
</td>

<td clas>
    <?php echo $inventory['el_inventory_username']; ?>
    <input type="text" hidden="hidden" name="username[]" value="<?php echo $inventory['el_inventory_username']; ?>">
</td>

<td clas>
    <?php echo $inventory['el_inventory_password']; ?>
    <input type="text" hidden="hidden" name="password[]" value="<?php echo $inventory['el_inventory_password']; ?>">
</td>


</tr>

<?php } ?>
<?php } ?>
<?php //} ?>
</tbody>
</table>
<br>
<input type="submit" id="submit" class="sButton" value="Submit" />

                               <!-- Table Row Content End -->
                                </div>

</form>
                                </div><!-- Table Body End -->

                              
     
                            </div><!-- Table Running Data-1 End -->
                      
                            
                        </div><!-- Table Data End -->
                    </div><!-- Right Running Content End -->
                </div><!-- Right Content Container End -->
            </div><!-- Right Content Wrapper End -->
            


        
























