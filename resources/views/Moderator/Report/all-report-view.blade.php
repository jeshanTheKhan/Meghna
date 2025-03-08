<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Tailwind CSS and DaisyUI CDN -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>All Cylinder Report Details | </title>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                'report-blue': '#0099ff',
              }
            }
          },
          daisyui: {
            themes: ["light"],
          }
        }
      </script>
 <style>
  @media print {
    /* Hide elements outside the main content */
    title, 
    .no-print, 
    .btn, 
    body::before, 
    body::after {
        display: none !important;
    }

    /* Adjust the printed page */
    body {
        width: 1cm;
        height: 29.7cm;
        margin-top: 100px;
        padding: 10mm;
        font-size: 12px;
    }

    .text-center {
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    td, th {
        border: 1px solid black;
        padding: 5px;
        text-align: center;
    }
}

</style>

    @extends('layouts.Moderator.backend')
    @section('context')
    <div class="right_col mt-[5px] text-black" role="main">
        <div class="">
            <div class="relative border shadow-lg p-4 max-w-4xl mx-auto h[3508px] w-[2480px] ">
 
        
                <!-- Report Header -->
                <div class="flex justify-between px-6 py-2 border-t border-b border-gray-300">
                    <div>
                        <p><strong>S/N:</strong> 11610</p>
                    </div>
                    <div class="text-center">
                        <h2 class="text-xl font-bold underline">CNG CYLINDER TEST REPORT</h2>
                    </div>
                    <div class="italic">
                        <p><strong>Date:</strong> ........................</p>
                    </div>
                </div>
                
                <!-- Test Date -->
                <div class="px-6 py-2">
                    <p><strong>Date Of Test</strong> : {{ $report->test_date }}</p>
                </div>
                
                <!-- Owner Information -->
                <div class="px-6 py-2">
                    <p class="font-bold underline">01.OWNER INFORMATION :</p>
                    <div class="grid grid-cols-2 ml-4">
                        <p><strong>Customer Name</strong></p>
                        <p>: {{ $report->name }}</p>
                        <p><strong>Customer Username</strong></p>
                        <p>: {{ $report->user_name }}</p>
                        <p><strong>Vehicle Reg. No</strong></p>
                        <p>: {{ $report->vehicle }}</p>
                    </div>
                </div>
                
                <!-- Cylinder Details -->
                <div class="px-6 py-2">
                    <p class="font-bold underline">02.CNG CYLINDER DETAILS :</p>
                    <div class="grid grid-cols-2 ml-4">
                        <p><strong>Cylinder Manufacturer</strong></p>
                        <p>: FJM</p>
                        <p><strong>Cylinder No</strong></p>
                        <p>: 97955</p>
                        <p><strong>Country Of Origin</strong></p>
                        <p>: INDIA</p>
                        <p><strong>Manufacturing Date</strong></p>
                        <p>: 09-2018</p>
                        <p><strong>Water Capacity</strong></p>
                        <p>: 30 LITER</p>
                        <p><strong>Marked Weight</strong></p>
                        <p>: 36.0 KG</p>
                        <p><strong>Cylinder Installation / Use Date</strong></p>
                        <p>: APROXIMATELY ( No Information Is Known About This Vehicle Owner )</p>
                        <p><strong>Cylinder Type / Standard</strong></p>
                        <p>: IS-15490</p>
                    </div>
                </div>
                
                <!-- Test Report -->
                <div class="px-6 py-2">
                    <p class="font-bold underline">03.TEST REPORT :</p>
                    <div class="grid grid-cols-2 gap-1">
                        <!-- Physical Properties Table -->
                        <div class="border border-gray-400">
                            <div class="bg-gray-200 text-center p-1 border-b border-gray-400">
                                <p class="font-bold">( A ) PHYSICAL PROPERTIES</p>
                            </div>
                            <table class="w-full">
                                <tr class="border-b border-gray-300">
                                    <td class="p-2 border-r border-gray-300">Marking Defects</td>
                                    <td class="p-2 text-center">No</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <td class="p-2 border-r border-gray-300">Crack</td>
                                    <td class="p-2 text-center">No</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <td class="p-2 border-r border-gray-300">Dents</td>
                                    <td class="p-2 text-center">No</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <td class="p-2 border-r border-gray-300">Thred Condition</td>
                                    <td class="p-2 text-center">Good</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <td class="p-2 border-r border-gray-300">Inside Condition</td>
                                    <td class="p-2 text-center">Good</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <td class="p-2 border-r border-gray-300">Actual Weight</td>
                                    <td class="p-2 text-center">: 09-2018</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <td class="p-2 border-r border-gray-300">Test Step</td>
                                    <td class="p-2 text-center">2<sup>ND</sup></td>
                                </tr>
                                <tr>
                                    <td class="p-2 border-r border-gray-300">PHYSICAL PROPERTIES RESULT</td>
                                    <td class="p-2 text-center">
                                        <div class="border-2 border-black inline-block px-4 py-1 font-bold">PASS</div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        
                        <!-- Hydrostatic Stress Test Table -->
                        <div class="border border-gray-400">
                            <div class="bg-gray-200 text-center p-1 border-b border-gray-400">
                                <p class="font-bold">( B ) HYDROSTATIC STRESS TEST</p>
                            </div>
                            <table class="w-full">
                                <tr class="border-b border-gray-300">
                                    <td class="p-2 border-r border-gray-300">Test Pressure</td>
                                    <td class="p-2 text-center">4500 ( PSI )</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <td class="p-2 border-r border-gray-300">Water Hiter Temperature</td>
                                    <td class="p-2 text-center">30 ℃</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <td class="p-2 border-r border-gray-300">Total Expansion</td>
                                    <td class="p-2 text-center">152.2 gm</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <td class="p-2 border-r border-gray-300">Permanent Expansion</td>
                                    <td class="p-2 text-center">3.0 gm</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <td class="p-2 border-r border-gray-300">Percentage Of ( TE / PE )</td>
                                    <td class="p-2 text-center">1.97 ( % )</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <td class="p-2 border-r border-gray-300">Thickness Test</td>
                                    <td class="p-2 text-center">6.0 mm</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <td class="p-2 border-r border-gray-300">Air Dry Pressure</td>
                                    <td class="p-2 text-center">0.8 Mpa</td>
                                </tr>
                                <tr>
                                    <td class="p-2 border-r border-gray-300">HYDROSTATIC STRESS RESULT</td>
                                    <td class="p-2 text-center">
                                        <div class="border-2 border-black inline-block px-4 py-1 font-bold">PASS</div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- Next Re-Test Time -->
                <div class="px-6 py-4 text-center">
                    <p class="font-bold text-lg">NEXT RE – TEST TIME : 03 MAR 2026</p>
                </div>
                
                <!-- Conclusion -->
                <div class="px-6 py-2">
                    <p><strong>Conclusion :</strong> As The Permanent Volume Expansion Of The CNG Cylinder Is With In Normal Range / Limit. It Is Ready To Use Until Next Re-Test Date.</p>
                    <p class="underline">It is here by certified that above mentioned CNG Cylinder has been inspected and re-tested in accordance with Rule 51 of the CNG Rule 2005.</p>
                </div>
            </div>
            <div class="row no-print">
                <div class="">
                    <button class="btn btn-default print-btn" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                </div>
            </div>
        </div>
    
    </div>
    <script>
        document.getElementById("print-btn").addEventListener("click", function () {
    document.getElementById("print-btn").disabled = true;
    document.getElementById("print-btn").style.display = "none";

})
    </script>

    @endsection