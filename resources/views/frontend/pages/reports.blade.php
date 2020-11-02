@extends('frontend.layout.master')

@section('content')


    <!-- START REPORT SECTION -->
    <section id="doctor" class="section-padding">
        <div class="auto-container">
            <div class="patient-info">
                <div class="row mb-5">
                    <div class="col-lg-9 col-md-8 col-sm-12 col-12">
                        <p>Patient Nam : <span>Mr. Stephen Watson</span></p>
                        <p>Registration : <span>ABC-12345</span></p>
                        <p>Referred By : <span>Dr. Jone Doe</span></p>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                        <p>Patient Age:  : <span>24</span></p>
                        <p>Patient Sex : <span>Male</span></p>
                        <p>Report No: <span>123456</span></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
                        <div class="section-title">
                            <h3>Biochemistry Examination</h3>
                            <span class="line"></span>
                        </div>
                    </div>
                    <!-- end section title -->
                    <div class="table-responsive col-lg-12">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Parameter</th>
                                <th scope="col">Result</th>
                                <th scope="col">Unit</th>
                                <th scope="col">Reference Range(s)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>Serum Creatinine</th>
                                <td>0.9</td>
                                <td>mg/dl</td>
                                <td>Male: 0.4-1.4 <br> Female: 0.4-1.4</td>
                            </tr>
                            <tr>
                                <th>WBC Count (TC)</th>
                                <td>5710</td>
                                <td>mg/dl</td>
                                <td>4400-11000</td>
                            </tr>
                            <tr>
                                <th>RBC Count</th>
                                <th>3.2 #</th>
                                <td>mg/dl</td>
                                <td>4.5-6.5</td>
                            </tr>
                            <tr>
                                <th>Haemoglobin</th>
                                <td>15.0</td>
                                <td>mg/dl</td>
                                <td>14.0-18.0</td>
                            </tr>
                            <tr>
                                <th>Haematocrit</th>
                                <th>27.2 #</th>
                                <td>mg/dl</td>
                                <td>42.0-54.0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mt-5 wow fadeInDown">
                    <div class="col-lg-5 mx-auto">
                        <div class="reports-btn-warp">
                            <a class="reports-btn-1"><i class="icofont icofont-file-pdf"></i> Download Pdf</a>
                            <a class="reports-btn-2"><i class="icofont icofont-printer"></i> Print</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END REPORT SECTION -->


@endsection
