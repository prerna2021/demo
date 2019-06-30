<?php include "../include/header.php";?>
<?php 
    back("options.php");
    options();
?>

   <div class="container" style="margin-top:3rem;">
        <div class="col-sm-6" style="margin:auto;">

            <table>
                <tr>
                    <td>Month</td>
                    <td>
                        <select class="form-control" name="month">
                            <option value="january">January</option>
                            <option value="february">February</option>
                            <option value="march">March</option>
                            <option value="april">April</option>
                            <option value="may">May</option>
                            <option value="june">June</option>
                            <option value="july">July</option>
                            <option value="august">August</option>
                            <option value="september">September</option>
                            <option value="october">October</option>
                            <option value="november">November</option>
                            <option value="december">December</option>
                        </select>
                    </td>
                </tr>
            </table>
    

            <h1 class="text-center">Personal Information</h1>
            <div class="data_ent_pay">
                <table>

                    <tr>
                        <td>Type</td>
                        <td>
                            <input type="text" name="type" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>S.No.</td>
                        <td>
                            <input type="number" name="emp_id" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>
                            <input type="text" name="name" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Designation</td>
                        <td>
                            <select class="form-control" name="designation">
                                <option value="scientist">Scientist</option>
                                <option value="to">TO</option>
                                <option value="worker">Worker</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Sex</td>
                        <td>
                            <select class="form-control" name="sex">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Date Of Birth</td>
                        <td>
                            <input type="date" name="birth_date" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Date Of Joining</td>
                        <td>
                            <input type="date" name="joining_date" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Date Of Next Incr.</td>
                        <td>
                            <input type="date" name="next_incr_date" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>GPF A/C No.</td>
                        <td>
                            <input type="text" name="gpf_acno" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Payband</td>
                        <td>
                            <input type="text" name="payband" class="form-control" />
                        </td>
                    </tr>

                </table>
            </div>

            <h1 class="text-center">CREDITS</h1>
            <div class="data_ent_pay">
                <table>

                    <tr>
                        <td>Basic</td>
                        <td>
                            <input type="text" name="basic" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>GradePay</td>
                        <td>
                            <input type="text" name="grade_pay" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Special</td>
                        <td>
                            <input type="text" name="special" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>DA</td>
                        <td>
                            <input type="text" name="da" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>DA on TA</td>
                        <td>
                            <input type="text" name="da_on_ta" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>HRA</td>
                        <td>
                            <input type="text" name="hra" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Misc.</td>
                        <td>
                            <input type="text" name="misc_cre" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>TA</td>
                        <td>
                            <input type="text" name="ta" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Two Add. Inc</td>
                        <td>
                            <input type="text" name="two_add_inc" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Variable Inc</td>
                        <td>
                            <input type="text" name="variable_inc" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Total Credits</td>
                        <td>
                            <input type="text" name="total_credits" class="form-control" />
                        </td>
                    </tr>
                </table>
            </div>

            <h1 class="text-center">DEBITS</h1>
            <div class="data_ent_pay">
                <table>

                    <tr>
                        <td>GPF Contri.</td>
                        <td>
                            <input type="text" name="gpfcont" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Income Tax</td>
                        <td>
                            <input type="text" name="it" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Edu cess</td>
                        <td>
                            <input type="text" name="edu_cess" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>CGEIS</td>
                        <td>
                            <input type="text" name="cgeis" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>CGHS</td>
                        <td>
                            <input type="text" name="cghs" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Rent Recov.</td>
                        <td>
                            <input type="text" name="rentrec" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Misc.</td>
                        <td>
                            <input type="text" name="misc_deb" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>ADAGPF</td>
                        <td>
                            <input type="text" name="adagpf" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>HBA Loan</td>
                        <td>
                            <input type="text" name="hba" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>GPF Loan</td>
                        <td>
                            <input type="text" name="gpf_loan" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Vehicle Loan</td>
                        <td>
                            <input type="text" name="vehicle_loan" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Festival Loan</td>
                        <td>
                            <input type="text" name="festival_loan" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Computer Loan</td>
                        <td>
                            <input type="text" name="computer_loan" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Other Loan</td>
                        <td>
                            <input type="text" name="other_loan" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Total Debits</td>
                        <td>
                            <input type="text" name="total_debits" class="form-control" />
                        </td>
                    </tr>

                </table>
            </div>

            <div>
                <table>
                    <tr>
                        <td>Net Payable</td>
                        <td>
                            <input type="text" name="net_payable" class="form-control" />
                        </td>
                    </tr>
                </table>
            </div>

            <div class="form-group per_buttons_div">

                <button name="save" type="submit" class="btn btn-primary per_buttons">Save</button>
                <br>
                <button name="update" type="submit" class="btn btn-primary per_buttons">Update</button>
                <br>
                <button name="back" type="submit" class="btn btn-primary per_buttons">Back</button>
                <br>
                <button name="personal_info_data" type="submit" class="btn btn-primary per_buttons">Data Entry For Personal Info</button>
                <br>
                <button name="loan_data" type="submit" class="btn btn-primary per_buttons">Data Entry For LOAN</button>
                <br>

            </div>

        </div>
    </div>
    <?php include "../include/footer.php";?>