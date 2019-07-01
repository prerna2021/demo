<?php include "../include/header.php";?>
<?php 
    back("options.php");
    options();
?>

    <div class="container" style="margin-top:3rem; margin-bottom:3rem;">
        <div class="col-sm-6" style="margin:auto;">

            <div class="form-group">
                <label class="control-label">महीना<br>Month</label>
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

            <h1 class="text-center"><br>व्यक्तिगत जानकारी<br>Personal Information</h1>
            <div>
                <table>
                    <tr>
                        <td><br>प्रकार<br>Type</td>
                        <td>
                            <input type="text" name="type" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td><br>क्र. संख्या<br>S.No.</td>
                        <td>
                            <input type="number" name="sno" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                           <td><br>पद<br>Designation</td>
                        <td>
                            <input type="text" name="designation" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td><br>खाता क्रमांक<br>Account No.</td>
                        <td>
                            <input type="text" name="acc_no" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td><br>नाम<br>Name</td>
                        <td>
                            <input type="text" name="name" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td><br>जन्म की तारीख<br>Date Of Birth</td>
                        <td>
                            <input type="date" name="birth_date" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td><br>सहकारी खाता<br>Co-operative A/C</td>
                        <td>
                            <input type="text" name="cooperative" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td><br>कुल रकम<br>Total Amount</td>
                        <td>
                            <input type="text" name="total" class="form-control" />
                        </td>
                    </tr>
                </table>
            </div>
            <h1 class="text-center"><br>स्थानीय वसूली<br>Local Recovery</h1>
            <div>
                <table>
                    <tr>
                        <td><br>सोसाइटी सह खाता<br>Society Co-Operate A/C</td>
                        <td>
                            <input type="text" name="society_acc" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <tr>
                            <td><br>अधिकारी क्लब<br>Officer Club</td>
                            <td>
                                <input type="text" name="officer_club" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td><br>पार्टी<br>Party</td>
                            <td>
                                <input type="text" name="party" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td><br>एलआईसी<br>LIC</td>
                            <td>
                                <input type="text" name="lic" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td><br>कई तरह का<br>Miscellaneous</td>
                            <td>
                                <input type="text" name="misc" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td><br>सीए<br>CA</td>
                            <td>
                                <input type="text" name="ca" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td><br>एसए<br>SA</td>
                            <td>
                                <input type="text" name="sa" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td><br>डब्ल्यू एल<br>W_L</td>
                            <td>
                                <input type="text" name="wl" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td><br>डब्ल्यू एस<br>W_S</td>
                            <td>
                                <input type="text" name="ws" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td><br>एनएसएस<br>NSS</td>
                            <td>
                                <input type="text" name="nss" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td><br>शुद्ध राशि<br>Net Amount</td>
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
        <button name="local_recovery" type="submit" class="btn btn-secondary per_buttons">Data Entry For Local Recovery</button>

    </div>
    <?php include "../include/footer.php";?>
