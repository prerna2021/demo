<?php include "../include/header.php";?>
<?php 
    back("options.php");
    options();
?>

    <div class="container" style="margin-top:3rem; margin-bottom:3rem;">
        <div class="col-sm-6" style="margin:auto;">

            <div class="form-group">
                <label class="control-label">Month</label>
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
            </div>

            <h1 class="text-center">Personal Information</h1>
            <div>
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
                            <input type="number" name="sno" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Designation</td>
                        <td>
                            <input type="text" name="designation" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Account No.</td>
                        <td>
                            <input type="text" name="acc_no" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>
                            <input type="text" name="name" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Date Of Birth</td>
                        <td>
                            <input type="date" name="birth_date" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Co-operative A/C</td>
                        <td>
                            <input type="text" name="cooperative" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>
                            <input type="text" name="total" class="form-control" />
                        </td>
                    </tr>
                </table>
            </div>

            <h1 class="text-center">Local Recovery</h1>
            <div>
                <table>

                    <tr>
                        <td>Officer Club</td>
                        <td>
                            <input type="text" name="officer_club" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Party</td>
                        <td>
                            <input type="text" name="party" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>LIC</td>
                        <td>
                            <input type="text" name="lic" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Miscellaneous</td>
                        <td>
                            <input type="text" name="misc" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>CA</td>
                        <td>
                            <input type="text" name="ca" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>SA</td>
                        <td>
                            <input type="text" name="sa" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>W_L</td>
                        <td>
                            <input type="text" name="wl" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>W_S</td>
                        <td>
                            <input type="text" name="ws" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>NSS</td>
                        <td>
                            <input type="text" name="nss" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Net Amount</td>
                        <td>
                            <input type="text" name="net_amount" class="form-control" />
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="form-group per_buttons_div">
        <button name="update" type="submit" class="btn btn-primary per_buttons">Update</button>
        <br>
        <button name="personal_info" type="submit" class="btn btn-secondary per_buttons">Data Entry For Personal Info</button>
        <br>
        <button name="loan_data" type="submit" class="btn btn-secondary per_buttons">Data Entry For Loan Data</button>
        <br>
        <button name="pay_data" type="submit" class="btn btn-secondary per_buttons">Data Entry For Pay Data</button>
        <br>
        <button name="cooperative_recovery" type="submit" class="btn btn-secondary per_buttons">Data Entry For Co-operative Recovery</button>

    </div>
    <?php include "../include/footer.php";?>