<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css"
        integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
<div id="initial-text" class="companyLogo">
        <img src="img/logo5.svg" class="" alt="logo">
    </div>
    <div class="form_wrapper" id="form" style="display: none;">
        <div class="form_container">
            <div class="title_container">
                <h2>Generate Service Ticket Raise</h2>
            </div>
            <div class="row clearfix">
                <div class="">
                    <form id="Service-form" action="{{ route('customerComplaints.store') }}" method="POST">
                        @csrf
                        <div class="input_field">
                            <span><i aria-hidden="true" class="fa fa-user"></i></span>
                            <input type="text" name="customer_name" placeholder="Name" id="name" required />
                        </div>
                        <p style="font-size: 13px; margin-top: -15px;">*please enter your name</p>

                        <div class="input_field">
                            <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <input type="text" name="customer_phone" placeholder="Phone Number" id="phoneNumber" required />
                        </div>
                        <p style="font-size: 13px; margin-top: -15px;">*please input valid phone number</p>

                        <div class="input_field">
                            <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                            <input type="email" name="customer_email" placeholder="Email" id="email" required />
                        </div>
                        <p style="font-size: 13px; margin-top: -15px;">*Your service ID will be sent to this email.</p>

                        <div class="input_field">
                            <span><i class="fa fa-address-book" aria-hidden="true"></i></span>
                            <input type="text" name="address" placeholder="Address" id="address" required />
                        </div>
                        <p style="font-size: 13px; margin-top: -15px;">*please enter address where need servics</p>

                        <div class="input_field">
                            <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            <input type="date" name="purchase_date" required id="date" max="">
                        </div>
                        <p style="font-size: 13px; margin-top: -15px;">*Put Purchase Date / Installation Date</p>

                        <div id="product-dropdown">
                            <div class="input_field select_option">
                                <select id="product-select" name="device">
                                    <option value="Pump Controller">Pump Controller</option>
                                    <option value="CCTV">CCTV</option>
                                </select>
                                
                                <div class="select_arrow"></div>
                            </div>
                            <p style="font-size: 13px; margin-top: -15px;">*select your device</p>
                        </div>

                        <div id="cctv-problem-dropdown" style="display: none;">
                            <div class="input_field select_option">
                                <select name="problem">
                                    <option value="on">On</option>
                                    <option value="off">Off</option>
                                </select>
                                <div class="select_arrow"></div>
                            </div>
                            <p style="font-size: 13px; margin-top: -15px;">*select your problem</p>
                        </div>

                        <div id="pump-problem-dropdown">
                            <div class="input_field select_option">
                                <select name="problem">
                                    <option value="">select dropdown</option>
                                    <option value="Display not working">Display not working</option>
                                    <option value="Over head tank overflow">Over head tank overflow</option>
                                    <option value="Tank empty but pump not on">Tank empty but pump not on</option>
                                    <option value="Device is not working">Device is not working</option>
                                </select>
                                <div class="select_arrow"></div>
                            </div>
                            <p style="font-size: 13px; margin-top: -15px;">*select your problem</p>
                        </div>

                        <div class="input_field">
                            <textarea name="description" rows="6" cols="45"
                                placeholder="Could you please clarify the issue?"></textarea>
                        </div>
                        <p style="font-size: 13px; margin-top: -15px;">*Could you please clarify the issue? </p>

                        <input class="button" type="submit" value="Register" />
                    </form>
                </div>
            </div>
        </div>
        <p class="credit">© Copyright 2024-2025. All Rights Reserved By <a href="https://cbsiot.live/"
                target="_blank">cbsiot.live</a></p>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="form.js"></script>
</body>

</html>
