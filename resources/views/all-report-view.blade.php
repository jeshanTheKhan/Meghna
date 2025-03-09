<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meghna Engineering Cylinder Re-Test Center</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
   
    padding: 20px;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    position: relative;
}

.container::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
   
    background-repeat: no-repeat;
    background-position: center;
    background-size: 60%;
    opacity: 0.1;
    pointer-events: none;
    z-index: 1;
}

header {
    background-color: #0088dd;
    color: white;
    padding: 15px;
    text-align: center;
}

.header-content {
    display: flex;
    align-items: center;
    justify-content: center;
}

.logo-container {
    margin-right: 15px;
}

.logo {
    width: 50px;
    height: auto;
}

.header-text h1 {
    font-size: 24px;
    margin-bottom: 5px;
    font-weight: bold;
}

.header-text p {
    font-size: 14px;
    margin: 2px 0;
}

.report-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 15px;
    
}

.serial-number, .date {
    font-size: 14px;
    font-style: italic;
}

.report-title h2 {
    font-size: 18px;
    text-align: center;
    font-weight: bold;
}

.test-date {
    padding: 0px 15px;
   
}

.test-date p {
    font-weight: bold;
}

section {
    padding: 10px 15px;
    
}

h3 {
    font-size: 16px;
    font-weight: bold;
}

.info-row {
    display: flex;
    margin-bottom: 5px;
}

.info-label {
    width: 40%;
    font-weight: bold;
}

.info-value {
    width: 60%;
}

.test-tables {
    display: flex;
    flex-wrap: wrap;
}

table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        tr{
            font-size:12px;
        }
        th {
            background-color: #f2f2f2;
        }
        .pass {
            font-weight: bold;
            text-align: center;
        }

@media (max-width: 768px) {
    table {
        font-size: 10px ;
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            font-size: 10px ;
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        tr{
            font-size: 12px;
        }
        th {
            font-size: 10px ;
            background-color: #f2f2f2;
        }
        .pass {
            font-size: 10px ;
            font-weight: bold;
            text-align: center;
        }
}


.result {
    text-align: center;
    font-weight: bold;
}

.next-test {
    padding: 10px;
    text-align: center;
    font-weight: bold;
    border-bottom: 1px solid #ddd;
}

.conclusion {
    padding: 10px;
    line-height: 1.5;
    border-bottom: 1px solid #ddd;
}

.certification {
    margin-top: 10px;
    font-style: italic;
}

.signatures {
    display: flex;
    justify-content: space-between;
    padding: 20px 15px;
    border-bottom: 1px solid #ddd;
}

.signature {
    text-align: center;
    width: 45%;
}

.signature p {
    margin-bottom: 3px;
}

.signature .title, 
.signature .company, 
.signature .department, 
.signature .address {
    font-size: 12px;
}

footer {
    padding: 15px;
    text-align: center;
    background-color: #0088dd;
    color: white;
}

/* Watermark styling */
.watermark {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(-45deg);
    font-size: 80px;
    color: rgba(0, 0, 0, 0.05);
    pointer-events: none;
    z-index: 1;
    white-space: nowrap;
}
    </style>
</head>
<body>
    <div class="container">
        {{-- <header>
            <div class="header-content">
                <div class="logo-container">
                </div>
                <div class="header-text">
                    <h1>MEGHNA ENGINEERING CYLINDER RE-TEST CENTER</h1>
                    <p>Explosives Licence No. B : P : 2(593)/0043-15428</p>
                    <p>Kadomtali, Bus Terminal, Mominkhola, Sylhet-(3100)</p>
                    <p>Mobile No: 01746-829341, 01711-484500</p>
                </div>
            </div>
        </header> --}}

        <div class="report-header" style="margin-top:120px">
            <div class="serial-number">
                <p style="font-weight: bold">S/N: {{ $report->serial_number }} <span style="font-size:15px;font-weight:bold;"><u style="margin-left: 120px;margin-top-5px;">CNG CYLINDER TEST REPORT</u></span></p>
            </div>
        </div>

        <div class="test-date">
            <p>Date Of Test: <span style="margin-left: 250px;">{{ $report->test_date }}</span></p>
            <h3><u>01. OWNER INFORMATION:</u></h3>
                <p>Customer Name: <span style="margin-left: 200px;">{{ $report->name }}</span></p>
                <p>Customer User-Name: <span style="margin-left: 160px;">{{ $report->user_name }}</span></p>
                <p>Vehicle Reg. No: <span style="margin-left: 200px;">{{ $report->vehicle_number }}</span></p>
                <h3> <u>02. CNG CYLINDER DETAILS:</u> </h3>
                <p>Cylinder Manufacturer : <span style="margin-left: 155px;">{{ $report->cylinder_manu }}</span></p>
                <p>Cylinder No : <span style="margin-left: 232px;">{{ $report->cylinder_number }}</span></p>
                <p>Country Of Origin : <span style="margin-left: 188px;">{{ $report->cylinder_origin }}</span></p>
                <p>Manufacturing Date : <span style="margin-left: 173px;">{{ $report->manufacture_date }}</span></p>
                <p>Water Capacity : <span style="margin-left: 207px;">{{ $report->water_capacity }} L</span></p>
                <p>Marked Weight : <span style="margin-left: 208px;">{{ $report->marked_weight }} KG</span></p>
                <p><span class="info-label">Cylinder Installation / Use Date:</span> <span style="margin-left: 85px;">APROXIMATELY <span style="font-size: 10px;margin-top:2px;">(No information Is Known About This Vehicle Owner) </span></p>
                <p><span class="info-label">Cylinder Type / Standard:</span> <span style="margin-left: 133px;">{{ $report->cylinder_type }}</span></p>
            </div>
        </section>

        <section class="">
            <h3><u>03. TEST REPORT:</u></h3>
            <div class="test-tables">
                <table class="physical-properties">
                    <thead>
                        <tr>
                            <th colspan="2">(A) PHYSICAL PROPERTIES</th>
                            <th colspan="2">(B) HYDROSTATIC STRESS TEST</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Marking Defects</td>
                            <td>{{ $report->marking_defects }}</td>
                            <td>Test Pressure</td>
                            <td>{{ $report->test_pressure }} (PSI)</td>
                        </tr>
                        <tr>
                            <td>Crack</td>
                            <td>{{ $report->crack }}</td>
                            <td>Water Hiter Temperature</td>
                            <td>{{ $report->water_hiter }} Celcius</td>
                        </tr>
                        <tr>
                            <td>Dents</td>
                            <td>{{ $report->dents }}</td>
                            <td>Total Expansion</td>
                            <td>{{ $report->total_expension }} gm</td>
                        </tr>
                        <tr>
                            <td>Thred Condition</td>
                            <td>{{ $report->thred_condition }}</td>
                            <td>Permanent Expansion</td>
                            <td>{{ $report->permanent_expension }} gm</td>
                        </tr>
                        <tr>
                            <td>Inside Condition</td>
                            <td>{{ $report->inside_condition }}</td>
                            <td>Percentage Of (TE / PE)</td>
                            <td>{{ $report->percentage }} (%)</td>
                        </tr>
                        <tr>
                            <td>Actual Weight</td>
                            <td>{{ $report->actual_weight }} KG</td>
                            <td>Test Holding Time</td>
                            <td>30 s</td>
                        </tr>
                        <tr>
                            <td>Test Step</td>
                            <td>{{ $report->test_step }}</td>
                            <td>Air Dry Pressure</td>
                            <td>{{ $report->air_dry }} Mpa</td>
                        </tr>
                        <tr>
                            <td>PHYSICAL PROPERTIES RESULT</td>
                            <td class="result pass">{{ $report->physical_test }}</td>
                            <td>HYDROSTATIC STRESS RESULT</td>
                            <td class="result pass">{{ $report->hydrostatic_test }}</td>
                        </tr>
                    </tbody>
                </table>
                <h3 style="margin-left: 220px;font-size:18px; "><u>Next Re-Test : {{ $report->next_retest }}</u></h3>
            </div>
            <p><strong><u>Conclusion:</u></strong> As The Permanent Volume Expansion Of The CNG Cylinder Is With In Normal Range / Limit. It Is Ready To Use Until Next Re-Test Date.</p>
            <p class="certification"><em><u>It is here by certified that above mentioned CNG Cylinder has been inspected and re-tested in accordance with Rule 51 of the CNG Rule 2005.</u></em></p>
        </section>
{{-- 
        <footer>
            <p>E-mail: meghna.engineering.crc@gmail.com</p>
        </footer> --}}
    </div>

</body>

</html>