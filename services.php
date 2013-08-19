<?php include("_includes/header.php"); ?>

    <link type="text/css" rel="stylesheet" href="css/easy-responsive-tabs.css" />
    <script src="js/jquery-1.6.3.min.js"></script>
    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
  </head>
<body>
        <!--Horizontal Tab-->
        <div id="horizontalTab">
            <ul class="resp-tabs-list">
                <li><img src="_images/billingMenu.png"/></li>
                <li><img src="_images/patientMenu.png"/></li>
                <li><img src="_images/cashFlowMenu.png"/></li>
                <li><img src="_images/docMntMenu.png"/></li>
                <li><img src="_images/emrMenu.png"/></li>
                <li><img src="_images/auditingMenu.png"/></li>
                <li><img src="_images/credentialingMenu.png"/></li>
            </ul>
            <div class="resp-tabs-container">
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.</p>
                </div>
                <div>
                    <p>This tab has icon in consectetur adipiscing eliconse consectetur adipiscing elit. Vestibulum nibh urna, ctetur adipiscing elit. Vestibulum nibh urna, t.consectetur adipiscing elit. Vestibulum nibh urna,  Vestibulum nibh urna,it.</p>
                </div>
                <div >
                    <p>Suspendisse blandit velit Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravid urna gravid eget erat suscipit in malesuada odio venenatis.</p>
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.</p>
                </div>
                <div>
                    <p>
                      <h1> EMR / EHR</h1>
                      <h2>We solve your Medical Records Workflow Trauma.</h2>
                    <p>Organizing and keeping track of Medical Records can be a daunting task.  Converting your records to the MediTouch EHR® System, tailored to your office’s existing workflow, will allow you to find records and track them through the entire process from patient visit through insurance payout.
                    </p>
                    <p >
                      Benefits of choosing our Medical Records System:
                    <ul class="tabContent">
                    <li>Designed by Physicians</li>
                    <li>Custom Reporting, Office Workflow and Patient Account Information</li>
                    <li>HL7, HIPPA & CCHIT Certified</li>
                    <li>Low Licensing and Reoccurring Costs</li>
                    <li>Web Access for Personal Computers and Mobile Platforms</li>
                    <li>Quality Customer Support</li>
                    <li>Increased Data Security</li>
                    <li>e-Prescribing, Labs and other common features</li>
                  </ul>
                  </p>
                </div>
                <div>
                    <h1> Auditing Services</h1>
                    <h2> We Code Claims for Success </h2>
                    <p>Deploying Certified Coders on the Front End of the Billing Process Results in fewer Denials by Medicare and Private Insurance Companies. Our Coders are certified in AAPC and HIPAA and have the experience to decrease denials and speedup payouts from the insurance companies.
                    </p>
                    <p>Benefits of choosing our Medical Coding Professionals
                    <ul class="tabContent">
<li>AAPC and HIPAA Certified</li>
<li>Keep up to date with ICD-9 and CPT codes</li>
<li>Assign the correct code the first time, helping to recover the maximum revenue in the shortest period of time</li>
<li>This is Accomplished by not Under or Miscoding the Insurance Submissions</li>
<li>98% Accuracy and Compliance with all Government Regulations</li>
<li>Experience-Certified Coders for over 200 Specialties and knowledge to Easily Transition to ICD-10</li>
<li>With RAC Audits becoming more Frequent it is Important to keep Compliant and use our RAC Certified / Experienced Professionals</li>
</ul></p>
                </div>
                <div>
                    <h1>Credentialing Services</h1>
                    <h2>Benefits of choosing our Credentialing Services</h2>
                    <p>Our credentialing experts have over thirteen years of experience and provide a range of services from completing, maintaining and monitoring your licenses, registrations and certificates.
                   <ul class="tabContent">
                    <li>Confidentiality and Security of personal data</li>
                    <li>Cost savings when compared to staffing, wages and benefits</li>
                    <li>Completion and maintenance of credentialing applications</li>
                    <li>Liaison and advocate acting on your behalf to Insurance Carriers, Managed Care Organization and Hospitals for Credentialing and Re-Credentialing.</li>
                    <li>Maintain your credentials in CAQH</li>
                    <li>Credentialing for Medicare and Medicaid</li>
                    <li>Document tracking of State License, Federal DEA, State CDS Registration, Board Certification, CEU's, CLIA, Bureau of Radiation Control etc.</li>
                    <li>Renewal of Licenses, Registrations, and Certificates.</li>
                    <li>Hospital Privileging</li>
                    <li>Choice of one time fees or annual services.</li>
                  </ul>
                </div>
            </div>
        </div>
      

</body>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            defaultTab : <?php echo $_GET["tabindex"] != "" ? $_GET["tabindex"] : "0"  ?>,
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);

                $name.text($tab.text());

                $info.show();
            }
        });

        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<?php include("_includes/footer.php"); ?>
