
<?php

//require_once('../invoice/tcpdf/tcpdf.php');
// Create new PDF document
// $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
// $pdf->SetCreator(PDF_CREATOR);
// $pdf->SetAuthor('Your Company Name');
// $pdf->SetTitle('Promissory Note and Eviction Notice');
// $pdf->SetSubject('Promissory Note and Eviction Notice Agreement');
// $pdf->SetKeywords('Promissory Note, Eviction Notice, Agreement, Legal Document');

// // Remove default header/footer
// $pdf->setPrintHeader(false);
// $pdf->setPrintFooter(false);

// // Set default monospaced font
// $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// // Set margins
// $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// // Set auto page breaks
// $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// // Set image scale factor
// $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// // Add a page
// $pdf->AddPage();

// // Set font
// $pdf->SetFont('helvetica', '', 12);
// Get data from GET parameters

 $brandName=$_GET['brandName']??"";
 $customerName=$_GET['customerName']??"";
 $deanName=$_GET['deanName']??"";
 $address=$_GET['address']??"";
 $citySateZip=$_GET['citySateZip']??"";
 $monthlyCharges=$_GET['monthlyCharges']??0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container border rounded">
        <div class="row">
            <div class="col-lg-12 p-4">
                <img src="assets/images/logo.png" alt="logo">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12">
                <h4 class="heading fw-bold"><?php echo($brandName) ?></h4>
                <p class="mt-2">
                    The Undersigned (<?php echo $customerName ?>) hereby accepts the proposal of Melton Franchise System, Inc, <?php echo($brandName) ?>,
                    and the parties agree that <?php echo($brandName) ?>'S franchises and/or subcontractors will supply <?php echo($brandName) ?> System Services for
                    CUSTOMER'S permises located at:
                </p>
                <ul class="ps-3">
                    <li>Customer: <span id="customer"> <?php echo $customerName ?> </span></li>
                    <li>Street Address: <span id="customer"> <?php echo $address ?> </span></li>
                    <li>City State Zip: <span id="customer"><?php echo $citySateZip ?> </span></li>
                </ul>

                <p class="">Upon the following term</p>

                <ol class="ps-3">
                    <li>Monthly Services Charge: 
                        <p class="ms-4"> <?php echo $monthlyCharges ?>$ per month, plus taxes, if applicable; to include 3 times(s) per week services. Initial</p>
                        <div class="mb-3">
                            <label for="monthlyCharge" class="form-label d-block">  Service Days </label>
                            <div class="form-check d-inline-block ms-3">
                                <input class="form-check-input" type="checkbox" value="" id="monday">
                                <label class="form-check-label" for="monday">  Monday </label>
                            </div>
                            <div class="form-check d-inline-block ms-3">
                                <input class="form-check-input" type="checkbox" value="" id="Tuesday" checked>
                                <label class="form-check-label" for="Tuesday">  Tuesday </label>
                            </div>
                            <div class="form-check d-inline-block ms-3">
                                <input class="form-check-input" type="checkbox" value="" id="wednesday">
                                <label class="form-check-label" for="wednesday">  Wednesday </label>
                            </div>
                            <div class="form-check d-inline-block ms-3">
                                <input class="form-check-input" type="checkbox" value="" id="thursday" checked>
                                <label class="form-check-label" for="thursday">  Thursday </label>
                            </div>
                            <div class="form-check d-inline-block ms-3">
                                <input class="form-check-input" type="checkbox" value="" id="friday">
                                <label class="form-check-label" for="friday">  Friday </label>
                            </div>
                            <div class="form-check d-inline-block ms-3">
                                <input class="form-check-input" type="checkbox" value="" id="saturday" checked>
                                <label class="form-check-label" for="saturday">  Satarday </label>
                            </div>
                            <div class="form-check d-inline-block ms-3">
                                <input class="form-check-input" type="checkbox" value="" id="sunday">
                                <label class="form-check-label" for="sunday">  Sunday </label>
                            </div>
                        </div>
                        <p>
                            Axiom Corp System Services are to be performed in the evening, unless otherwise agreed to by the parties.
                        </p>
                    </li>
                    <li class="my-3">
                        CUSTOfVlER acknowledges that <?php echo($brandName) ?> wily delegate all <?php echo($brandName) ?> System Services to be performert hereunder to a <?php echo $brandName ?> franchisee and/or subcontractor and <?php echo($brandName) ?> way assign this Service Agreement In Its entirely to a <?php echo($brandName) ?> franchisee and/or subcontractor.
                    </li>

                    <li class="my-3">
                        Included iiJ the Service Charge wl!| be service, cleaning supplies, and ally equipment which will be furnished by the <?php echo($brandName) ?> franchisee. The sarvlce Charge does not include liners, paper supplles, and toiletries, which can be provided al CUSTOMER‘s expense, at competitive prices. The Service Charge also does not include any use tax, lax on sales, services or supplies, or oilier such tax, whlch taxes shall be paid by CUSTOMER. CUSTOMER agrees to reimburse <?php echo($brandName) ?> the amount of any such laxe i[ pai‹l by <?php echo($brandName) ?> on CUSTOMER's behalf.
                    </li>

                    <li class="my-3">
                        All GOVERALL Syslem Services specified in Ihe "<?php echo($brandName) ?> Service Plan’ attached Io this Service Agreement as Exhibit A will be provided to CUSTOMER in a satlsfactory manner. CUSTOMER acI‹nowledges thai only those Services and/or Addilional Services specifically identified in the <?php echo($brandName) ?> Servlce Plan will be provided under Ihis Service Agreement.
                    </li>
                    <li class="my-3">
                        All LOVERALL fronclJisaes have successfully completed <?php echo($brandName) ?>‘s comprehensive training program and are required lo carry Insurance and a janitorlal bond.
                    </li>
                    <li class="my-3">
                        Additional services, ‹Jot included in <?php echo($brandName) ?>'s Service Oharge, to be perfanred upon request, priced par occurrence, at CUSTON1EFI'S expense, Include.
                    </li>
               
                    <table class="table table-bordered rounded mt-4">
                        <thead>
                            <tr>
                                <th scope="col">Additoinal Services </th>
                                <th scope="col">Charge </th>
                                <th scope="col">Area </th>
                                <th scope="col">Square Footage </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> a. </td>
                                <td>$  </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td> b. </td>
                                <td> $ </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td> c. </td>
                                <td>$  </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td> d. </td>
                                <td>$  </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td> e. </td>
                                <td> $ </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="my-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <p for="servicesAcceptedBy" class="form-label"> Additional Services Accepted By: </p> 
                            </div>
                            <div class="col-lg-6">
                                <hr class="py-0 mb-0">
                                <p class="py-0 my-0 text-center">Signature </p>
                            </div>
                        </div>
                    </div>

                    <li class="my-3">
                        <P>
                            (a) The lerm of lhls Service AgreenJen\ is [or one (1) year. J”his one year perlod shall begin on the aate servlces are scheduled to begin. This Service Agreement shall auIoina\icaIly sxleiJd for addl tiol\aI one (1) year periods, unless at least thirty (30) days prior to each anniversary of lhe date services are sche‹IuIed to begin, either pzirty gives the olher written nolice of its intent not to relJs\v.
                        </P>
                        <P>
                            (b)	Tcrlrinetioi1/h/otice: !/ a party to thls Service ég ee nent fai!s to perforée ils obligations (lhe "non-performlng party' ), the party clai nlng non-performance shall send Itie non-performing patty wrilten nolice, upoci[ylng the t+\a‹Jner of non-performance, This notice will provide that the non-perfoiming parly shall {lave fifteen (15) days [rom ieceipt ofl the notice to cure or correct tj\e items of non-performance (the “Cr‹re Period”). If thèse il ends are not correcfad or curecl wlthin the Cuie P-enod, ttc ctaiming party may issue g tl4Ïrty (30) day writlan notice of termination nnd/or pursue otlJer nvallable remedles foi default.
                           <br>
                            If the CUSTOMER's ‹Jo[ice under IlJi6 }7(b) concei its service issues, the CUSTOMER shall pei mit Ihe <?php echo($brandName) ?> franchises or subcoiJli actor access to the Dremises during the Cure Period Io cr re the service issue; and shall also accompa Jy a <?php echo($brandName) ?> reprssentalive on an Incpeclion of the premlses drtr|lJg the fifteen (IN) day crlre periorf. Failure fo comply y'z‹ll entitle COV EFtALL to collect the frill amount due through the Tei m of lhls Service Agreement,
                        </P>
                        <p>
                            (b)	Notwllhstanding the aboye, <?php echo $brandName ?> way, but shall not be obligated to, ter niilate this Sen/ice AgreemenI imnJedialely for now-payment by CUSTQNIER of Service Charges due.
                        </p>
                    </li>
                    <li class="my-3">
                        The S+i vice Ghni'ge will remain in effect foi one year unless lheie aro changes in lha origlnal specificallons for the prelnlses, h4 the evenI of such clJangss, CUSTOMER will advise <?php echo($brandName) ?> accordingly, a»rl an adjusfiJ1enI in lhe Service Chai'ge, as agreed to fry the parties, will be made.
                    </li>
                    <li class="my-3">
                        CUSTONIEF agrees that it wlll not employ or commit with any <?php echo($brandName) ?> employee, franchi8ee, or any of the franchisee*s employees during IIJ+ tarns of this Serylce AgreemeiJl or for ol1e hundi ed and eighly (180) days alter lerminallon of lhis See/ice Agreement, without <?php echo $brandName ?> writ(en consent.
                    </li>
                    <li class="my-3">
                        <?php echo $brandName ?> will bill CUSTOhlER mnMhly, and CUSTO/yIER agrees lo pay <?php echo $brandName ?> lhe amount What is due alad owing under the terms of this Service Agiaement within 10 days of billing date. Late payments will in«ur service and finance charges, In the event of defatjlt on payn1ei\t, CUSTOU1ER a¿lrees to pay <?php echo $brandName ?>’S a(torney's fees and costs for r;oIIection,
                    </li>
                    <li class="my-3">
                        Services shall be pe formed as statad in the <?php echo $brandName ?> Sei Ice Pla‹ attached Io thls Sei nice Agreement with the exceptiol4 of tile following six (6) legal holidays: New Year‘s Day, Memorial Day, Independence Day, Labor Day, Thanksgiving Day and Christmas Day. No Service Charga credits will he issued lor these holidays. However, service can be provided on IhesB holidays at an additional cost If required. Sen/ices shall be scheduled during the hours approved or directed by manager/owi1er.
                    </li>
                    <li class="my-3">
                        If“Addillonal Special Sei'vices” are included in tile <?php echo $brandName ?> Service Plan attached to this Service Agreement, and if CUSTOMER cancels ally periocfic Speclal Services described IT›erein for w)Jich a prorated monllJly charge is included In CUSTOfvlER'S total monthly Service Charge, any amount owing by OUSTOfvlER for Sgecjal Services performed prior to the cancellation shall be payable in full no laler than five (5) days aftar lhe cancellation.
                    </li>
                    <li class="my-3">
                        The underslgned wai i am and represent that they have full authority to enter inlo lhls Service Agreement, and that it will he binding upon the parties and fheir tespeclive successors and assigns. SpecificalJy, CUSTOMER acl‹nowlerlges that thig Service AgreenJen( may be assigned In Its enlirety Io a <?php echo $brandName ?> fraiJchlsea, a subcontractor oi another Ihlrd party.
                    </li>
                    <li class="my-3">
                        This Service Agi eemenl and attached exhibits COhslit‹ite the complete agreement of the parties concerning the provision of cleanint/ services Io the CUSTOMER, and supersedes all other piior or col\tenJporaneous agreerilents between the pa tles, whether \witten or oral, on the same subject. No waiver or /rodificalloP of this Service Agreement shall be valld uiJless in writing and executed by <?php echo $brandName ?> an‹l CUSTOMER Additionally, in no evenl shall the l+lms and conditions of any purchase order or other for m subsequently submitted by CUSTOMER to CCVERALL becomes a part of this Service Agreement, and COV RALL shall nol be hound by any such terms zind conditions.
                    </li>
                </ol>
            </div>
        </div>
        <div class="row px-4">
            <div class="col-lg-6">
                <p class="mt-3 fw-bold"> Customer </p>
                <hr class="mb-0 mt-4">
                <p class="mb-4">Signature and Date</p>
                <hr class="mb-0 mt-4">
                <p class="mb-4">Print Name and Title, it's Authorized Representative </p>
                <hr class="mb-0 mt-4">
                <p class="mb-4">Email Address </p>
            </div>
            <div class="col-lg-6">
                <p class="mt-3 fw-bold"> Axiom Corp </p>
                <hr class="mb-0 mt-4">
                <p class="mb-4">Salses Consultant(Signature and Date)</p>
                <hr class="mb-0 mt-4">
                <p class="mb-4">Print Name and Title, it's Authorized Representative </p>
                <hr class="mb-0 mt-4">
                <p class="mb-4">Service Start Date</p>
            </div>
            <div class="col-lg-12">
                <p> Please email or fax signed contract to: </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 p-4 text-end">
                <img src="assets/images/logo.png" alt="logo">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h4 class="heading fw-bold"> <?php echo $brandName ?> Safety anal Security Bocumerit </h4>
                <p class="mt-2">
                    The <?php echo $brandName ?>" Sysfem places gi'eat eIJ1pIJasis on safety and secui ity. <?php echo $brandName ?> FranclJlsed Business Owners are trained and eel tified on Personal Safety, Customer Account Security, Emergency Actions, AOciJenl lnvestgahon and Reposing, anJ oter aspects of Weaing your facility in a sefe and secure manner
                </p>
                <p>
                    To help us support your safety and security measures, please answer the questions below.
                </p>
                <p>
                   <span class="d-inline-block" style="width:16%">  Customer Name: </span> <span class="border-bottom border-black d-inline-block float-left" style="width: 78%;"> Office Eevolution </span>
                </p>
                <p>
                    <span class="d-inline-block" style="width:16%">  Customer Address: </span> <span class="border-bottom border-black d-inline-block float-left" style="width: 78%;"> 504 W. 800 N. Orem, UT 84057 </span>
                </p>
            </div>
        </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <ol class="ps-3">
                        <li>
                            <p class="mb-1">
                                Is protective eqrlipiiJent required in any parts of your facillfy where the <?php echo $brandName ?> FranclJised Buainess Owner or its employees will be providing services2 This might include hard hats, eye prolscliorl, steel-toed shoes, gloves, gowns, masI‹s, oi other personal pro[ective gear.
                            </p>
                            <div class="form-check ms-3">
                                <input class="form-check-input" type="checkbox" value="" id="monday" checked>
                                <label class="form-check-label" for="monday">  Yes </label>
                            </div>
                            <div class="form-check ms-3">
                                <input class="form-check-input" type="checkbox" value="" id="Tuesday">
                                <label class="form-check-label" for="Tuesday">  No </label>
                            </div>
                            <p class="mt-3">
                                If yes, please document lhe equipment that Is reqrlired and the areas in which it should be used.
                            </p>
                        </li>
                        <li class="mt-5">
                            <p class="mb-1">
                                Will the <?php echo $brandName ?> Franchised Business Owner need to disarm and arm a bulldlng sec‹ifity system?
                            </p>
                            <div class="form-check ms-3">
                                <input class="form-check-input" type="checkbox" value="" id="monday" checked>
                                <label class="form-check-label" for="monday">  Yes </label>
                            </div>
                            <div class="form-check ms-3">
                                <input class="form-check-input" type="checkbox" value="" id="Tuesday">
                                <label class="form-check-label" for="Tuesday">  No </label>
                            </div>
                        </li>

                        <li class="mt-5">
                            <p class="mb-1">
                                Will the <?php echo $brandName ?> Franchised Business Owner be given a set of keys for your facility
                            </p>
                            <div class="form-check ms-3">
                                <input class="form-check-input" type="checkbox" value="" id="monday">
                                <label class="form-check-label" for="monday">  Yes </label>
                            </div>
                            <div class="form-check ms-3">
                                <input class="form-check-input" type="checkbox" value="" id="Tuesday" checked>
                                <label class="form-check-label" for="Tuesday">  No </label>
                            </div>
                        </li>

                        <li class="mt-5">
                            <p class="mb-1">
                                Asbestos
                            </p>
                            <div class="form-check ms-3">
                                <input class="form-check-input" type="checkbox" value="" id="monday">
                                <label class="form-check-label" for="monday">
                                    I am a'uare of Asbeslos In the facility whe e ths <?php echo $brandName ?> Franchised Business will be providing services, and if appllcabla, I will pro yide the Asbestos 0ontroJ Plali to ]ha represantBtive of the Covel all Franchised Buslness.
                                 </label>
                            </div>
                            <div class="form-check ms-3">
                                <input class="form-check-input" type="checkbox" value="" id="Tuesday" checked>
                                <label class="form-check-label" for="Tuesday">
                                    I an not aware of Asbestos in the facility where the <?php echo $brandName ?> Franchised Business will be provicling services.
                                </label>
                            </div>
                        </li>
                        <li class="mt-5">
                            <p>
                                <span class="d-inline-block"> Other </span> <span class="border-bottom border-black d-inline-block float-left" style="width: 90%;"> </span>
                                <span class="border-bottom border-black d-block float-left my-4 py-1"> </span>
                                <span class="border-bottom border-black d-block float-left my-4 py-1"> </span>
                            </p>
                        </li>
                    </ol>
                </div>
            </div> 
            
          
            <div class="row mt-5">
                <div class="col-lg-12 p-4 text-end">
                    <img src="assets/images/logo.png" alt="logo">
                </div>
                <div class="col-lg-12 text-center mt-5">
                    <h4 class="heading fw-bold"> Customized Service Plan and Proposal </h4>
                    <p class="mb-0" style="font-size: 56px; font-weight: bold; margin-top: 44px;"> Office </p>
                    <p class="mt-0" style="font-size: 56px; font-weight: bold;"> Eevolution </p>
                    
                </div>
                <div class="col-lg-12 text-center mt-5">
                    <p class="heading fw-bold">By:</p>
                    <p class="mb-0"> Jordan Ritchie <br> Executive Sales Consultant <br>
                        <?php echo $brandName ?> North America
                    </p>
                    <p class="mt-5 mb-0"> Date: </p>
                    <p> 6 / 26 /19</p>
                </div>
            </div>
       <hr>
        <div class="row my-4">
            <div class="col-lg-7 text-end"></div>
            <div class="col-lg-5 text-end">
                <img class="img-responsive pe-2" style="width: 100%; margin-top: 55px;" src="assets/images/stamp-logo.png" alt="">
            </div>
            <div class="col-lg-12 px-4">
                <p>Dear <?php echo $deanName ?>,</p>
                <p>Thank you for the opportunity to present this proposal, which we have customized to your needs and requests.</p>
                <p>
                    The <?php echo $brandName ?> Health-Based Cleaning Systems Program is the first choice for offices, schools, daycares, retail businesses, restaurants, gyms, outpatient and ambulatory surgery centers, and Fortune 500 companies across the country. With the <?php echo($brandName) ?> Program your facility will look clean and smell clean —and actually be a cleaned, healthier place for everyone.
                </p>
                <p>
                    Your <?php echo $brandName ?> Service Plan and Service Agreement are attached. Please review them to learn exactly how the <?php echo($brandName) ?> Program will meet and exceed your expectations.
                </p>
                <p>
                    Thank you again We look forward to working with you! 
                </p>
                <p>
                    Sincerely, <br>
                    Jordan Ritchie  <br>
                    <?php echo $brandName ?> North America
                </p>
            </div>
            <div class="col-lg-3"> </div>
            <div class="col-lg-9">
                <img class="img-responsive" style="width: 100%; margin-top: -80px;" src="assets/images/tap.png" alt="clean">
            </div>
        </div>
        <hr>
        <div class="row my-4">
            <div class="col-lg-5 px-0 mt-4">
                <h3 class="border-bottom border-black mt-5">
                    Your top priorities for cleaning
                </h3>
                <p>
                    In our conversations, you told me that the following are your biggest areas of concern regarding the cleaning of your facility:
                </p>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="office">
                    <label class="form-check-label" for="office">  Offices </label>
                </div>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="halway">
                    <label class="form-check-label" for="halway">  Hallways </label>
                </div>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="Kitchen">
                    <label class="form-check-label" for="Kitchen">  Kitchen </label>
                </div>
                <p class="ms-5 my-4">
                    <?php echo $brandName ?> Health-Based Cleaning System uses scientifically proven cleaning supplies, tools and techniques to ensure that these important priorities will be handled properly.
                </p>
            </div>
            <div class="col-lg-7">
                <img class="img-responsive" style="width: 100%" src="assets/images/remove germ.png" alt="clean">
            </div>
            <div class="col-lg-12">
                <h3 class="border-bottom border-black d-inline-block">
                    The <?php echo $brandName ?> Difference
                </h3>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="office">
                    <label class="form-check-label" for="office">  Get the best value for your cleaning budget </label>
                </div>
                <p>
                    A lot has changed in the way that cleaning is done today. The work can be much faster than in the past. <?php echo $brandName ?> leads the industry in finding and using the best tools, techniques and training to give you a cleaning schedule that delivers more value within your budget.
                </p>

                <div class="form-check ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="office">
                    <label class="form-check-label" for="office">
                        Cleaner work and reception areas, better air quality.
                    </label>
                </div>
                <p>
                   <?php echo $brandName ?> Franchise Owners use multi-filtration vacuums to improve indoor air quality by removing 99.97% of dust, dirt, bacteria, mold, yeast, and particles down to 0.3 microns. In contrast, traditional commercial vacuums return 40% of the dirt they pick up directly into the air.
                </p>

                <div class="form-check ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="office">
                    <label class="form-check-label" for="office">
                        Restroom that look, smell, and actually clean.
                    </label>
                </div>
                <p>
                    <?php echo $brandName ?> uses environmentally safe, hospital-grade disinfectant cleaning products, which are recommended by the Centers for Disease Control (CDC) and many medical studies to limit the spread of germs, especially in bathrooms.
                </p>

                <div class="form-check ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="office">
                    <label class="form-check-label" for="office">
                        consistent cleaning and good communication with the cleaners
                    </label>
                </div>
                <p>
                    Your <?php echo $brandName ?> Franchise Owner was trained and certified to use <?php echo $brandName ?> Health-Based Cleaning System so that you get consistent, high-quality results. The cleaning team will use a log book to communicate notes or questions lo you, and you will have direct access to them, to your local <?php echo $brandName ?> office, and to phone support 24 hours a day.
                </p>

                <div class="form-check ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="office">
                    <label class="form-check-label" for="office">
                        A healthier work place with cross-contamination
                    </label>
                </div>
                <p>
                    The <?php echo $brandName ?> Color-Coding for Healthy Program uses color-coded microfiber cleaning cloths and mop pads to prevent cross- contamination. In contrast, traditional cleaners use dirty rags and smelly string mops that merely transfer dirt and bacteria from one area to the next.
                </p>
            </div>
        </div> <hr>

        <div class="row my-4">
                <div class="col-lg-12 p-4 text-center">
                    <img class="img-responsive" src="assets/images/logo.png" alt="logo">
                </div>

                <div class="col-lg-12 my-4">
                    <h2 class="border-bottom border-black d-inline-block"> Areas to be cleaned: 3X week </h2>
                </div>

                <div class="col-lg-6">
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="entrance">
                        <label class="form-check-label" for="entrance">
                           Entrance 
                        </label>
                    </div>
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="foyers">
                        <label class="form-check-label" for="foyers">
                            Foyers 
                        </label>
                    </div>
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="waitingarea">
                        <label class="form-check-label" for="waitingarea">
                            Waiting Area
                        </label>
                    </div>
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="lobbyarea">
                        <label class="form-check-label" for="lobbyarea">
                            Lobby/Reception Area
                        </label>
                    </div>
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="generaloffice">
                        <label class="form-check-label" for="generaloffice">
                            General Office 
                        </label>
                    </div>
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="privateOffice">
                        <label class="form-check-label" for="privateOffice">
                            Private Office 
                        </label>
                    </div>
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="executiveOffice">
                        <label class="form-check-label" for="executiveOffice">
                            Executive Office 
                        </label>
                    </div>
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="conferenceRoom">
                        <label class="form-check-label" for="conferenceRoom">
                            Conference Room 
                        </label>
                    </div>
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="fileroom">
                        <label class="form-check-label" for="fileroom">
                            File Room/Area  
                        </label>
                    </div>
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="computerroom">
                        <label class="form-check-label" for="computerroom">
                            Computer Rooms 
                        </label>
                    </div>
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="restroom">
                        <label class="form-check-label" for="restroom">
                            Restrooms
                        </label>
                    </div>
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="lunchroom">
                        <label class="form-check-label" for="lunchroom">
                            Lunch Room/Kitchen
                        </label>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="kitchenete">
                        <label class="form-check-label" for="kitchenete">
                            Kitchenette/Coffee Area
                        </label>
                    </div>

                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="lockers">
                        <label class="form-check-label" for="lockers">
                            Lockers 
                        </label>
                    </div>

                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="hallways">
                        <label class="form-check-label" for="hallways">
                            Hallways
                        </label>
                    </div>

                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="landings">
                        <label class="form-check-label" for="landings">
                            Landings 
                        </label>
                    </div>

                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="stairsways">
                        <label class="form-check-label" for="stairsways">
                            Stairways
                        </label>
                    </div>

                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="elevatorcabs">
                        <label class="form-check-label" for="elevatorcabs">
                            Elevator Cabs
                        </label>
                    </div>

                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="lounges">
                        <label class="form-check-label" for="lounges">
                            Lounges
                        </label>
                    </div>

                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="windows">
                        <label class="form-check-label" for="windows">
                            Windows
                        </label>
                    </div>

                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="showroom">
                        <label class="form-check-label" for="showroom">
                        Showroom Relail Areas
                        </label>
                    </div>

                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="supplyarea">
                        <label class="form-check-label" for="supplyarea">
                        Supply/Storage Areas
                        </label>
                    </div>

                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="officeplant">
                        <label class="form-check-label" for="officeplant">
                        Office Plant/Shop/Warehouse
                        </label>
                    </div>
                 </div>

                <div class="col-lg-12 my-4 mb-2">
                    <h2 class="d-inline-block mt-2"> Other area are not listed above </h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 my-1"> <hr> </div>
                    <div class="col-lg-6 my-1"> <hr> </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 my-1"> <hr> </div>
                    <div class="col-lg-6 my-1"> <hr> </div>
                </div>

                <div class="col-lg-12 my-4 mb-2">
                    <h2 class="d-inline-block"> Exclude </h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 my-1"> <hr> </div>
                    <div class="col-lg-6 my-1"> <hr> </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 my-1"> <hr> </div>
                    <div class="col-lg-6 my-1"> <hr> </div>
                </div>
             <div class="col-lg-12 mb-3">
                <label for="monthlyCharge" class="form-label d-block fw-bold">  Service Days </label>
                <div class="form-check d-inline-block ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="monday">
                    <label class="form-check-label" for="monday">  Monday </label>
                </div>
                <div class="form-check d-inline-block ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="Tuesday">
                    <label class="form-check-label" for="Tuesday">  Tuesday </label>
                </div>
                <div class="form-check d-inline-block ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="wednesday">
                    <label class="form-check-label" for="wednesday">  Wednesday </label>
                </div>
                <div class="form-check d-inline-block ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="thursday">
                    <label class="form-check-label" for="thursday">  Thursday </label>
                </div>
                <div class="form-check d-inline-block ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="friday">
                    <label class="form-check-label" for="friday">  Friday </label>
                </div>
                <div class="form-check d-inline-block ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="saturday">
                    <label class="form-check-label" for="saturday">  Satarday </label>
                </div>
                <div class="form-check d-inline-block ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="sunday">
                    <label class="form-check-label" for="sunday">  Sunday </label>
                </div>
             </div> 
         </div> 
         <br><hr>

          <div class="row my-5 ">
            <div class="col-lg-12">
                <h3> <?php echo $brandName ?> services, and how often they will be done at your facility.</h3>
            </div>
            <div class="col-lg-12 text-start mt-4">
                <img class="img-responsive" style="width: 20%;" src="assets/images/Picture5.png" alt="">
            </div>
            <div class="col-lg-12 text-center">
                <h3> DUSTING AND DESINFICATION </h3>
                <table class="table table-bordered rounded mt-4 text-start">
                    <thead>
                        <tr>
                            <th scope="col">Service Task </th>
                            <th scope="col">Description </th>
                            <th scope="col">Frequency </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width:211px"> Counters, Sinks </td>
                            <td> Clean and disinfect counters and sinks </td>
                            <td style="width:155px">  1 times per week </td>
                        </tr>
                        <tr>
                            <td> Detail Dust and Clean </td>
                            <td> Thronoughly dust and clean accessible fixtures and office furniture including file cabinets, desks, credenzas, counter tops, display units, window sills. </td>
                            <td> 1 times per week </td>
                        </tr>
                        <tr>
                            <td> Dust Blinds, Jams, Lights </td>
                            <td> Dust blinds, jams, light fixtures and ceiling vents accessible from the floor  </td>
                            <td> 1 times per month </td>
                        </tr>
                        <tr>
                            <td>High and Low Dusting  </td>
                            <td>Dust high and low vertical and horizontal surfaces and corners not cleaned in the course of normal dusting no! to exceed 12 feet. </td>
                            <td> 1 times per month </td>
                        </tr>
                        <tr>
                            <td> High Touch Points </td>
                            <td> Clean and disinfect high”touch pointa such as light switches and door knobs. </td>
                            <td> 3 times per week  </td>
                        </tr>
                        <tr>
                            <td> Spot Clean Internal Glass </td>
                            <td> Spot clean internal partition glass to remove smudges and fingerprints</td>
                            <td> 2 times per week </td>
                        </tr>
                        <tr>
                            <td> Spot Dust and Clean </td>
                            <td> Spot dust and clean visible soils on fixtures and office furniture” including file cabinets, desks, credenzas, counter tops, display units and window sills. </td>
                            <td> 2 times per week </td>
                        </tr>
                        <tr>
                            <td> Thoroughly Clean Internal Glass </td>
                            <td> Thoroughly clean and disinfect internal partition glass. </td>
                            <td> 1 times per week</td>
                        </tr>
                        <tr>
                            <td> Vacum Furnishings or Wet Swip </td>
                            <td> Vacuum fabric-covered ivrnishings and or wet wipe other furniture to remove visible dust or soil </td>
                            <td> 1 times per month </td>
                        </tr>
                    </tbody>
                </table>
            </div>

         
            <div class="col-lg-12 text-start mt-4">
                <img class="img-responsive" style="width: 20%;" src="assets/images/vacum.png" alt="">
            </div>
            <div class="col-lg-12 text-center">
                <h3>  CARPET AND FLOOR CARE </h3>
                <table class="table table-bordered rounded mt-4 text-start">
                    <thead>
                        <tr>
                            <th scope="col">Service Task </th>
                            <th scope="col">Description </th>
                            <th scope="col">Frequency </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width:211px"> Damp Vlop Hard Surface </td>
                            <td> Damp mop hard surface floors using a no-dip protocol and changing Floors	 pad often to ensure removal of dirt. </td>
                            <td style="width:155px">  1 times per week </td>
                        </tr>
                        <tr>
                            <td> Dust mop hard service floor </td>
                            <td> Dry mop hard surface floors using a dust mop, vacuum or dry/wet mop </td>
                            <td> 2 times per week </td>
                        </tr>
                        <tr>
                            <td> Spot Vacuum High Traffic Areas </td>
                            <td> Spot vacuum high-traffic areas on days when wall-to-wall vacuuming is not needad </td>
                            <td> 2 times per month </td>
                        </tr>
                        <tr>
                            <td>Wall-to-Wall Vacuum </td>
                            <td>  Detail vacuum accessible carpeted areas with a”pproved HEPA  backpack units.</td>
                            <td> 1 times per month </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> <br> <hr>
        <div class="row my-4">
            <div class="col-lg-12 text-start mt-4">
                <img class="img-responsive" style="width: 18%;" src="assets/images/restroom.png" alt="">
            </div>
            <div class="col-lg-12 text-center">
                <h3> RESTROOM SERVICES </h3>
                <table class="table table-bordered rounded mt-4 text-start">
                    <thead>
                        <tr>
                            <th scope="col">Service Task </th>
                            <th scope="col">Description </th>
                            <th scope="col">Frequency </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width:211px; padding-top: 111px;"> Clean and Disinfecl Restrooms </td>
                            <td> 
                              <ul>
                                <li>Restroom Fixtures: Clean and polish dispensers and fixtures. Clean and disinfect wash basins, toilet bowls, urinals and counter tops. </li>
                                <li>Restroom Walls: Clean accessible walls and toilet partitions fo remove visible soil.  </li>
                                <li>Restroom Floors: Mop all floors using coded microfiber flat mopping system and disinfecting finished floor cleaner.</li>
                                <li>Restroom Mirrors: Polish all chrome and mirrors. </li>
                                <li>Restroom Supplies: Restock expendable products such as paper towels, toilet tissue, hand soap, liners and deodorant products from customer inventory. </li>
                                <li>Restroom Trash Removal: Empty trash cans, replace liners, spot clean receptacles as needed and take trash to designated area. </li>
                              </ul>
                            </td>
                            <td style="width:155px; padding-top: 111px;"> N/A times per week </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-12 text-start mt-4">
                <img class="img-responsive" style="width: 18%;" src="assets/images/trash.png" alt="">
            </div>
            <div class="col-lg-12 text-center">
                <h3> TRASH AND MISCELLANEOUS </h3>
                <table class="table table-bordered rounded mt-4 text-start">
                    <thead>
                        <tr>
                            <th scope="col">Service Task </th>
                            <th scope="col">Description </th>
                            <th scope="col">Frequency </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Clean and Disinfecl Telephones </td>
                            <td> Clean and sanitize Telephones </td>
                            <td> 1 times per week </td>
                        </tr>
                        <tr>
                            <td style="width:211px; padding-top: 66px;"> Empty Cans and Remove Trash  </td>
                            <td> 
                              <p>
                                Empty trash that is contained in trash cans, in an area designated specifically for trash, or clearly labeled as trash and transport to customer's trash removal or storage area. Replace liners, spot clean receptacles as needed and take trash to designated area on customer premises. Please note: Any ilem that is in trash cans, designated (rash areas, or clearly labeled as trash will be considered trash regardless of the content, and its loss will not be the responsibility of the <?php echo $brandName ?> Franchised Business Owner or <?php echo $brandName ?>.
                              </p>
                            </td>
                            <td style="width:155px; padding-top: 66px;"> 3 times per week </td>
                        </tr>
                        <tr>
                            <td> Sanitize Drinking Fountains/Water Coolers </td>
                            <td> Clean and sanitize drinking fountains and water coolers. </td>
                            <td> 3 times per week </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> <br> <hr>

        <div class="row my-4">
            <div class="col-lg-12 text-start mt-4">
                <img class="img-responsive" style="width: 18%;" src="assets/images/kitchen.png" alt="">
            </div>
            <div class="col-lg-12 text-center">
                <h3> KITCHEN AREAS </h3>
                <table class="table table-bordered rounded mt-4 text-start">
                    <thead>
                        <tr>
                            <th scope="col">Service Task </th>
                            <th scope="col">Description </th>
                            <th scope="col">Frequency </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width:211px;"> clean Microwave(s) </td>
                            <td> Thoroughly clean inside and outside of microwave with all-purpose disinfectant cleaner to rinse food contact surfaces. </td>
                            <td style="width:150px;"> 1 times per week </td>
                        </tr>
                        <tr>
                            <td> Kitchen Counters, Tables and Sinks </td>
                            <td> Clean and disinfect kitchen counters, tables and sinks. </td>
                            <td> 3 times per week </td>
                        </tr>
                        <tr>
                            <td> Spot Clean Refrigerator  Exterior </td>
                            <td> Uae all-purpose disinfectant cleaner to wipe smudges and fingerprints from the outside (exterior) of the refrigerator. </td>
                            <td> 3 times per week </td>
                        </tr>
                        <tr>
                            <td> Spot Cjean Counters, Tables and Sinks </td>
                            <td> Spot clean kitchen counters, tables and sinks to remove visible soil. </td>
                            <td> 3 times per week </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-12 text-center mt-4"> 
                <h3> Health - Based Cleaninq System </h3>
                <img class="img-responsive" style="width: 96%;" src="assets/images/whyKillgerm.png" alt="">
            </div>
        </div> <br> <hr>

        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" style="width:20%;" src="assets/images/closingTask.png" alt="">
            </div>
            <div class="col-lg-12 text-center">
                <h3> Closing Task: </h3>
                <table class="table table-bordered rounded mt-4 text-start">
                    <thead>
                        <tr>
                            <th scope="col">CLOSING INSTRUCTIONS </th>
                            <th scope="col"> Frequency </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Clean and organize janitor closet. </td>
                            <td> 3 times per week </td>
                        </tr>
                        <tr>
                            <td> Clean and organize janitor closet.</td>
                            <td> 3 times per week  </td>
                        </tr>
                        <tr>
                            <td> Turn off lights (as instructed).</td>
                            <td> 3 times per week  </td>
                        </tr>
                        <tr>
                            <td> Lock doors and windows (as instructed). </td>
                            <td> 3 times per week </td>
                        </tr>
                        <tr>
                            <td> Set alarms (as instructed), </td>
                            <td> 3 times per week </td>
                        </tr>
                        <tr>
                            <td> Notify customer of any observed irregularities, burnt out lights etc. </td>
                            <td> 3 times per week </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-12 text-center mt-4"> 
                <h3> Our National Accounts </h3>
                <img class="img-responsive" style="width: 96%;" src="assets/images/companies.png" alt="">
            </div>
        </div>
    </div>
</body>
</html>
<!--  
// Write the content
// $pdf->writeHTML($content, true, false, true, false, '');

// // Add footer with legal verbiage
// $pdf->SetY(-15);
// $pdf->SetFont('helvetica', '', 8);
// $pdf->MultiCell(0, 10, 'Copyright 2010-2020. This form verbiage provided by the Law Offices of Jeremy M. Shorts, LLC and may be used by landlords within the state of Utah. Use of this form shall not constitute legal representation by this firm. Visit www.utahevictionlaw.com for more landlord forms and materials. Phone: 801-610-9879. Rev 5/12/2020', 0, 'C');

// // Output the PDF
// $pdf->Output('promissory_note_and_eviction_notice.pdf', 'I');
-->