<?php include "../include/header.php";?>
<?php 
    back("index.php");
    options();
?>

    <div class="container size" style="margin-top:7rem;">
        <div class="col-sm-6" style="margin:auto;">
            <h1 class="text-center">Personal Information</h1>


            <div class="opt_page">
                    <table>
                        <tr>
                            <td>Data Entry For Pay And Allowances</td>
                            <td><a name="data_entry" class="btn btn-primary per_buttons" onclick="showDiv('data_div','reports_div')">Data Entry</a></td>
                        </tr>
                        <tr>
                            <td>To View And Taking Printouts Of Report</td>
                            <td><a name="reports" class="btn btn-primary per_buttons" onclick="showDiv('reports_div','data_div')">Reports</a></td>
                        </tr>
                        
                    </table>

                </div>


            <div class="form-group dis_none" id="data_div">
                    <label class="control-label">DATA ENTRY</label>
                    <form action="options.php" method="post">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="data_entry" value="per_info" checked>PERSONAL INFORMATION</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="data_entry" value="loan_data">LOAN DATA</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="data_entry" value="pay_data">PAY DATA</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="data_entry" value="local_rec">LOCAL RECOVERY</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="data_entry" value="coop_rec">COOPERATIVE RECOVERY</label>
                        </div>
                        <input type="submit" class="btn btn-primary" name="d_submit" value="OK">
           
                    </form>
                </div>

                <div class="form-group dis_none" id="reports_div">
                    <label class="control-label">REPORTS</label>
                    <form action="options.php" method="post">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="reports" value="pay_slip" checked>PAY SLIP</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="reports" value="schedule">SCHEDULE</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="reports" value="pay_roll">PAY ROLL</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="reports" value="dear_allow">DEARNESS ALLOWANCE</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="reports" value="rep_without_rec">REPORT WITHOUT RECOVERY</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="reports" value="rep_with_rec">REPORT WITH RECOVERY</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="reports" value="rep_for_bank">REPORT FOR BANK</label>
                        </div>
                        <input type="submit" class="btn btn-primary" name="r_submit" value="OK">
                    </form>
                </div>
                
    </div>
    </div>
    <?php include "../include/footer.php";?>