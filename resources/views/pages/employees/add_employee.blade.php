@extends('pages.layouts.tsf')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Employee
            <small>Human Resource</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add Employee</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">



                 @if ($message = Session::get('success'))
             <div class="alert alert-success">
            <p id="msg">{{ $message }}</p>
              </div>
               @endif




                <form action="{{ route('employee.store') }}" method="post" enctype="multipart/form-data">
                    <div class="box">
                        <div class="box-header with-border">
                            <div class="box-title"><i class="fa fa-user-plus"></i> Add New Employee</div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="col-md-12">
                                <div class="box box-info">
                                    <div class="box-header">
                                        <div class="box-title"><i class="fa fa-user-plus"></i> Personal Details</div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <?php
                                       // $query = $db->query("SELECT * FROM employees") or die(mysqli_error($db));
                                        //$counted = mysqli_num_rows($query);

                                        //if($counted>0){
                                          //  $get = $db->query("SELECT empno FROM employees ORDER BY empID DESC LIMIT 1") or die(mysqli_error($db));
                                            //$row = mysqli_fetch_assoc($get);
                                            //$adm = $row['empno'];
                                            //$x = $adm + 1;
                                        //}else{
                                           // $x = '1001';
                                       // }

                                        ?>
                                        <div class="col-md-4" style="margin-top:20px">
                                            <label>Employee ID</label><br />
                                            <input type="text" class="form-control" name="empno" value="{{ $emp_no }}" required/>
                                        </div>

                                        <div class="col-md-4" style="margin-top:20px">
                                            <label>Employee Name</label><br />
                                            <input type="text" class="form-control" name="fname" placeholder="FirstName  MiddleName  LastName" required/>
                                        </div>

                                        <div class="col-md-4" style="margin-top:20px">
                                            <label>Passport/ID Number</label><br />
                                            <input type="text" class="form-control" name="idno" required/>
                                        </div>

                                        <div class="col-md-4" style="margin-top:20px">
                                            <label>Gender</label><br />
                                            <select class="form-control select2" name="gender"  required>
                                                <option value="">-- Select Gender --</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4" style="margin-top:20px">
                                            <label>Marital Status</label><br />
                                            <select class="form-control select2" name="marital" required>
                                                <option value="">-- Select Status --</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Divorced">Divorced</option>
                                                <option value="Complicated">Complicated</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4" style="margin-top:20px">
                                            <label>Date Of Birth</label><br />
                                            <input type="date" name="dob" class="form-control" value="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d'); ?>" />
                                        </div>

                                        <div class="col-md-4" style="margin-top:20px">
                                            <label>Primary Phone Number</label><br />
                                            <input type="text" class="form-control" name="phoneno1" placeholder="07XXXXXXXX" required/>
                                        </div>

                                        <div class="col-md-4" style="margin-top:20px">
                                            <label>Secondary Phone Number</label><br />
                                            <input type="text" class="form-control" name="phoneno2" placeholder="07XXXXXXX" />
                                        </div>

                                        <div class="col-md-4" style="margin-top:20px">
                                            <label>Email Address</label><br />
                                            <input type="email" name="email" class="form-control" placeholder="myemail@email.com" required="" />
                                        </div>

                                        <div class="col-md-4" style="margin-top:20px">
                                            <label>Nationality</label><br />
                                            <select name="nationality" class="form-control select2" data-size="10" required="">
                                                <option value="">--Select An Option--</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bonaire">Bonaire</option>
                                                <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Canary Islands">Canary Islands</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Channel Islands">Channel Islands</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos Island">Cocos Island</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote DIvoire">Cote D'Ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curaco">Curacao</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="East Timor">East Timor</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands">Falkland Islands</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Ter">French Southern Ter</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Great Britain">Great Britain</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Hawaii">Hawaii</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea North">Korea North</option>
                                                <option value="Korea Sout">Korea South</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Laos">Laos</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libya">Libya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macau">Macau</option>
                                                <option value="Macedonia">Macedonia</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Midway Islands">Midway Islands</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Nambia">Nambia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherland Antilles">Netherland Antilles</option>
                                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                <option value="Nevis">Nevis</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau Island">Palau Island</option>
                                                <option value="Palestine">Palestine</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Phillipines">Philippines</option>
                                                <option value="Pitcairn Island">Pitcairn Island</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                <option value="Republic of Serbia">Republic of Serbia</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="St Barthelemy">St Barthelemy</option>
                                                <option value="St Eustatius">St Eustatius</option>
                                                <option value="St Helena">St Helena</option>
                                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                <option value="St Lucia">St Lucia</option>
                                                <option value="St Maarten">St Maarten</option>
                                                <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                                <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                                <option value="Saipan">Saipan</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="Samoa American">Samoa American</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syria">Syria</option>
                                                <option value="Tahiti">Tahiti</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Erimates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States of America">United States of America</option>
                                                <option value="Uraguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican City State">Vatican City State</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                <option value="Wake Island">Wake Island</option>
                                                <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zaire">Zaire</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>

                                            </select>

                                        </div>

                                        <div class="col-md-4" style="margin-top:20px">
                                            <label>Employee Photo</label><br />
                                            <input type="file" name="image" />
                                        </div>
                                    </div><!-- /.inner box-body -->
                                </div><!-- /.inner box -->
                            </div>

                            <div class="col-md-12">
                                <div class="box box-success">
                                    <div class="box-header">
                                        <div class="box-title"><i class="fa fa-file-archive-o"></i> Employment Details</div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="col-md-3" style="margin-top:20px">
                                            <label>Department</label><br />
                                            <select class="form-control select2" name="department" id="department" required>
                                                <option selected="false">-- Select Department --</option>

                                                @foreach($depts as $dept)
                                                <option value="{{ $dept->id }}">{{ $dept->department}} </option>
                                                @endforeach
                                                <?php // } ?>
                                            </select>
                                        </div>

                                        <div class="col-md-3" style="margin-top:20px">
                                            <label>Designation</label><br />
                                            <select name="designation" id="designation" class="form-control" required>
                                                <option>--Select Department First--</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3" style="margin-top:20px">
                                            <label>Employment Type</label><br />
                                            <select class="form-control select2" name="emp_type" required>
                                                <option selected="false">-- Select Employment Type --</option>
                                                @foreach($type as $types)
                                                <option value="{{ $types->id }}">{{ $types->id }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-3" style="margin-top:20px">
                                            <label>Employment Date</label><br />
                                            <input type="date" name="edate" class="form-control" value="<?php echo date('Y-m-d'); ?>"  />
                                        </div>

                                        <div class="col-md-3" style="margin-top:20px">
                                            <label>Starting Salary</label><br />
                                            <input type="text" name="salary" class="form-control" />
                                        </div>

                                        <div class="col-md-3" style="margin-top:20px">
                                            <label>KRA PIN</label><br />
                                            <input type="text" name="pin" class="form-control" placeholder="AXXXXXXXXXXXX"  />
                                        </div>


                                        <div class="col-md-3" style="margin-top:20px">
                                            <label>NSSF Number</label><br />
                                            <input type="text" name="nssf" class="form-control"  />
                                        </div>

                                        <div class="col-md-3" style="margin-top:20px">
                                            <label>NHIF Number</label><br />
                                            <input type="text" name="nhif" class="form-control" />
                                        </div>

                                    </div><!-- /.inner box-body -->
                                </div><!-- /.inner box -->
                            </div>

                            <div class="col-md-12">
                                <div class="box box-success">
                                    <div class="box-header">
                                        <div class="box-title"><i class="fa fa-file-archive-o"></i> Bank Account Details</div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">

                                        <div class="col-md-4" style="margin-top:20px">
                                            <label>Bank Name</label><br />
                                            <input type="text" name="bank_name" class="form-control" />
                                        </div>

                                        <div class="col-md-4" style="margin-top:20px">
                                            <label>Account Name</label><br />
                                            <input type="text" name="acc_name" class="form-control" />
                                        </div>

                                        <div class="col-md-4" style="margin-top:20px">
                                            <label>Account Number</label><br />
                                            <input type="text" name="acc_no" class="form-control"  />
                                        </div>

                                    </div><!-- /.inner box-body -->
                                </div><!-- /.inner box -->
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" name="addEmployee" class="btn btn-primary"><i class="fa fa-save"></i> Save Employee</button>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box- -->
            </div>
            @csrf
            </form>
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Script -->

<script type='text/javascript'>

    $(document).ready(function(){

        // Department Change
        $('#department').change(function(){

            // Department id
            var id = $(this).val();

            // Empty the dropdown
            $('#designation').find('option').not(':first').remove();

            // AJAX request
            $.ajax({
                url: +id,
                type: 'get',
                dataType: 'json',
                success: function(response){

                    var len = 0;
                    if(response['data'] != null){
                        len = response['data'].length;
                    }

                    if(len > 0){
                        // Read data and create <option >
                        for(var i=0; i<len; i++){

                            var id = response['data'][i].desi_id;
                            var name = response['data'][i].designation;

                            var option = "<option value='"+id+"'>"+name+"</option>";

                            $("#designation").append(option);
                        }
                    }

                }
            });
        });

    });

</script>

    @endsection