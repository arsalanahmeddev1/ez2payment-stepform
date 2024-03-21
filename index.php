<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ex2Payment</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <header class="header">
    <div class="container" style="max-width: 1470px">
      <div class="row">
        <div class="col-md-4">
          <div class="logo ">
            <img src="./assets/images/logo.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="step-form-sec">
    <div class="container" style="max-width: 1470px">
      <div class="row">
        <div class="col-md-3">
          <div class="left-content-area">
            <div class="count mb-2">
              <span class="step-text">Step:</span>
              <span>1/4</span>
            </div>
            <div class="progress progress-wrap mb-4" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar" style="width: 25%"></div>
            </div>
            <ul class="left-list-wrap">
              <li class=""><i class="fa-solid fa-check"></i> <span>Business Information</span></li>
              <li class=""><i class="fa-solid fa-check"></i> <span>Personal Information</span></li>
              <li class=""><i class="fa-solid fa-check"></i> <span>Business Bank Information</span></li>
              <li class=""><i class="fa-solid fa-check"></i> <span>Processing Information</span></li>
            </ul>
            <img src="./assets/images/trustpilot.webp" alt="">
          </div>
        </div>
        <div class="col-md-6 position-relative ">
          <div class="main-form-wrap">
            <form action="">
              <div class="tab1 step-form active" id="step1">
                <div class="row align-items-center ">
                  <div class="col-md-12">
                    <h1 class="hd-md">Business Information</h1>
                    <div class="field-wrap">
                      <select id="" class="mySelect input-field custom-select" data-placeholder="Type of Ownership">
                        <option></option>
                        <option value="1">Sole Proprietor</option>
                        <option value="2">Partnership</option>
                        <option value="3">Corporation</option>
                        <option value="4">LLC (single or multi-member)</option>
                        <option value="5">Nonprofit</option>
                        <option value="6">Publicly Traded</option>
                        <option value="7">Government</option>
                      </select>
                      <span class="error-message">please select the type of ownership</span>
                    </div>
                    <div class="field-wrap position-relative ">
                      <input type="text" class="input-field" name="legal_busniess" id="legal_busniess" placeholder="Legal Busniess Name">
                      <img src="./assets/images/info.svg" class="info-icon position-absolute " alt="">
                    </div>
                    <div class="field-wrap">
                      <input type="text" class="input-field" name="dba_name" id="dba_name" placeholder="DBA Name (if different from legal)">
                    </div>
                    <div class="field-wrap d-flex">
                      <input type="number" class="input-field number-code" name="number_code" id="number_code" placeholder="+1" value="+1" readonly>
                      <input type="number" class="input-field" name="dba_name" id="dba_name" placeholder="Business Phone Number">
                    </div>
                    <div class="field-wrap">
                      <input type="text" class="input-field" name="busniess_email_address" id="busniess_email_address" placeholder="Business Email Address">
                    </div>
                    <div class="field-wrap position-relative ">
                      <input type="text" class="input-field" name="tax_id" id="tax_id" placeholder="Tax ID / EIN">
                      <img src="./assets/images/info.svg" class="info-icon position-absolute " alt="">
                    </div>
                    <div class="field-wrap">
                      <select id="" class="mySelect input-field custom-select" data-placeholder="Premise Type">
                        <option></option>
                        <option>Commercial/Industrial</option>
                        <option value="1">Kiosk</option>
                        <option value="2">Mailbox</option>
                        <option value="3">Office Building</option>
                        <option value="4">Residential/Home Office</option>
                        <option value="5">Retail Store Front</option>
                        <option value="6">Mobile/On-the-Go</option>
                        <option value="7">Website</option>
                      </select>
                      <span class="error-message">please select the type of Premise Type</span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="field-wrap">
                      <select id="" class="mySelect input-field custom-select" data-placeholder="Business Ownership Years">
                        <option></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                        <option value="47">47</option>
                        <option value="48">48</option>
                        <option value="49">49</option>
                        <option value="50">50</option>

                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="field-wrap">
                      <select id="" class="mySelect input-field custom-select" data-placeholder="Business Ownership Months">
                        <option></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="field-wrap">
                      <input type="text" class="input-field" name="business_website" id="business_website" placeholder="Business Website Address">
                    </div>
                    <div class="field-wrap">
                      <input type="text" class="input-field" name="business_type" id="business_type" placeholder="Business Type">
                    </div>
                    <div class="field-wrap">
                      <select id="" class="mySelect input-field custom-select" data-placeholder="Select Business Type (start typing to search)">
                        <option></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                      </select>
                    </div>
                    <div class="field-wrap position-relative ">
                      <input type="text" class="input-field" name="legal_busniess_address" id="legal_busniess_address" placeholder="Legal Busniess Address">
                      <img src="./assets/images/info.svg" class="info-icon position-absolute " alt="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="field-wrap">
                      <input type="text" class="input-field" name="city" id="city" placeholder="City">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="field-wrap">
                      <select id="" class="mySelect input-field custom-select select-state" data-placeholder="State">
                        <option></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="field-wrap">
                      <input type="text" class="input-field" name="zipcode" id="zipcode" placeholder="Zip Code">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="" class="label-field">Is your DBA address the same as your Legal Business address?</label>
                    <div class="field-wrap mt-3 ">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" checked id="inlineRadio1" value="Yes">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="No">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="field-wrap mt-14">
                      <select id="" class="mySelect input-field custom-select" data-placeholder="Location Years">
                        <option></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                        <option value="47">47</option>
                        <option value="48">48</option>
                        <option value="49">49</option>
                        <option value="50">50</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="field-wrap mt-14">
                      <select id="" class="mySelect input-field custom-select" data-placeholder="Location Months">
                        <option></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="button" class="btn-primary hover-yellow w-100 border-0 " id="next1">Next Step <img src="./assets/images/leftarrow.svg" class="left-arrow-icon" alt=""></button>
                    <div class="">
                      <div class="preapp-norton d-flex  justify-content-center align-items-center gap-2 mt-3 ">
                        <img src="./assets/images/preapp-norton.webp" alt="">
                        <span class="text-sm">The information you enter will not be distributed or sold.</span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="tab2 step-form" id="step2">
                <div class="row align-items-center">
                  <div class="col-md-12">
                    <div class="backbtn">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21z"></path>
                      </svg>
                      <span class="fs-14 ms-3 text-light-blue top-back-btn">Back to business information</span>
                    </div>
                    <h1 class="hd-md">Personal Information</h1>
                  </div>
                  <div class="col-md-6">
                    <div class="field-wrap">
                      <input type="text" class="input-field" name="first_name" id="first_name" placeholder="First Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="field-wrap">
                      <input type="text" class="input-field" name="last_name" id="last_name" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="field-wrap">
                      <label for="" class="label-field f-mont">Is your Personal address the same as your Business or DBA address?</label>
                    </div>
                    <div class="field-wrap mt-3 mb-0">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" checked id="inlineRadio1" value="No">
                        <label class="form-check-label" for="inlineRadio1">No</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="No">
                        <label class="form-check-label" for="inlineRadio2">Same as Legal</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="No">
                        <label class="form-check-label" for="inlineRadio2">Same as DBA</label>
                      </div>
                    </div>
                    <div class="field-wrap mt-3">
                      <input type="text" class="input-field" name="street_address" id="street_address" placeholder="Street Address">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="field-wrap">
                      <input type="text" class="input-field" name="city" id="city" placeholder="City">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="field-wrap">
                      <select id="" class="mySelect input-field custom-select" data-placeholder="Alaska">
                        <option></option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="field-wrap">
                      <input type="text" class="input-field" name="zipcode" id="zipcode" placeholder="Zip Code">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="field-wrap">
                      <select id="" class="mySelect input-field custom-select" data-placeholder="Residence Years">
                        <option></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="field-wrap">
                      <select id="" class="mySelect input-field custom-select" data-placeholder="Residence Months">
                        <option></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="field-wrap">
                      <select id="" class="mySelect input-field custom-select" data-placeholder="Select ID Type">
                        <option></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="field-wrap">
                      <select id="" class="mySelect input-field custom-select" data-placeholder="ID Number">
                        <option></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="field-wrap position-relative ">
                      <input type="text" class="input-field" name="social_security_number" id="social_security_number" placeholder="Social Security Number">
                      <img src="./assets/images/info.svg" class="info-icon position-absolute " alt="">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="field-wrap position-relative ">
                      <input type="text" class="input-field" name="dob" id="dob" placeholder="Date of Birth (MM/DD/YYYY)">
                      <img src="./assets/images/info.svg" class="info-icon position-absolute " alt="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="field-wrap d-flex">
                      <input type="number" class="input-field number-code" name="number_code" id="number_code" placeholder="+1" value="+1" readonly>
                      <input type="number" class="input-field" name="personal_phone_number" id="personal_phone_number" placeholder="Personal Phone Number">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="field-wrap">
                      <input type="number" class="input-field" name="personal_email" id="personal_email" placeholder="Personal Email Address">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="field-wrap">
                      <input type="number" class="input-field" name="ownership" id="ownership" placeholder="% Ownership">
                    </div>
                  </div>
                  <div class="col-md-12 mt-4">
                    <div class="d-flex gap-5  align-items-center add-owner-wrap">
                      <button type="button" class="btn-primary btn-transparent justify-content-start ">Add Owner</button>
                      <img src="./assets/images/info.svg" alt="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <button type="button" class="btn-primary next-prev-wrap prev-step" id="prev1"><img src="./assets/images/rightarrow.svg" class="left-arrow-icon right-arrow" alt="">Previous Step</button>
                  </div>
                  <div class="col-md-6">
                    <button type="button" class="btn-primary next-prev-wrap next-step" id="next2">Next Step <img src="./assets/images/leftarrow.svg" class="left-arrow-icon" alt=""></button>
                  </div>
                  <div class="preapp-norton d-flex  justify-content-center align-items-center gap-2 mt-3 ">
                    <img src="./assets/images/preapp-norton.webp" alt="">
                    <span class="text-sm">The information you enter will not be distributed or sold.</span>
                  </div>
                </div>
              </div>
              <div class="tab3 step-form" id="step3">
                <div class="row">
                  <div class="col-md-12">
                    <div class="backbtn">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21z"></path>
                      </svg>
                      <span class="fs-14 ms-3 text-light-blue top-back-btn">Back to personal information</span>
                    </div>
                    <h1 class="hd-md mb-5">Business Bank Information</h1>
                    <div class="field-wrap position-relative ">
                      <input type="text" class="input-field" name="bankrouting" id="bankrouting" placeholder="Routing Number">
                      <img src="./assets/images/info.svg" class="info-icon position-absolute " alt="">
                    </div>
                    <div class="field-wrap">
                      <input type="text" class="input-field" name="bank_name" id="bank_name" placeholder="Bank Name">
                    </div>
                    <div class="field-wrap position-relative ">
                      <input type="text" class="input-field" name="bank_account" id="bank_account" placeholder="Account Number">
                      <img src="./assets/images/info.svg" class="info-icon position-absolute " alt="">
                    </div>
                    <img src="./assets/images/account.webp" alt="">
                  </div>
                  <div class="col-md-6">
                    <button type="button" class="btn-primary next-prev-wrap prev-step" id="prev2"><img src="./assets/images/rightarrow.svg" class="left-arrow-icon right-arrow" alt="">Previous Step</button>
                  </div>
                  <div class="col-md-6  ">
                    <button type="button" class="btn-primary next-prev-wrap next-step" id="next3">Next Step <img src="./assets/images/leftarrow.svg" class="left-arrow-icon" alt=""></button>
                  </div>
                  <div class="preapp-norton d-flex  justify-content-center align-items-center gap-2 mt-3 ">
                    <img src="./assets/images/preapp-norton.webp" alt="">
                    <span class="text-sm">The information you enter will not be distributed or sold.</span>
                  </div>
                </div>
              </div>
              <div class="tab4 step-form" id="step4">
                <div class="row">
                  <div class="col-md-12">
                    <div class="backbtn">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21z"></path>
                      </svg>
                      <span class="fs-14 ms-3 text-light-blue top-back-btn">Back to bank information</span>
                    </div>
                    <h1 class="hd-md mb-5">Processing Information</h1>
                    <div class="field-wrap">
                      <label for="" class="label-field f-mont">Are you currently processing credit and debit card transactions?</label>
                    </div>
                    <div class="field-wrap mt-3 ">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="Yes">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" checked id="inlineRadio2" value="No">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                      </div>
                    </div>
                    <div class="field-wrap">
                      <label for="" class="label-field f-mont">How do you want to process card transactions?</label>
                    </div>
                    <div class="field-wrap mt-3">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input custom-checkbox" type="checkbox" name="inlineRadioOptions3" checked id="inlineRadio3" value="online">
                        <label class="form-check-label" for="inlineRadio3">online</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input custom-checkbox" type="checkbox" name="inlineRadioOptions4" id="inlineRadio4" value="in person swipe">
                        <label class="form-check-label" for="inlineRadio4">in person swipe</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input custom-checkbox" type="checkbox" name="inlineRadioOptions5" id="inlineRadio5" value="">
                        <label class="form-check-label" for="inlineRadio5">over the phone</label>
                      </div>
                    </div>
                    <div class="field-wrap position-relative d-flex ">
                      <input type="number" class="input-field number-code currecy-sign" name="currency_sign" id="currency_sign" placeholder="$" value="$" readonly>
                      <input type="text" class="input-field ml-increase" name="max_monthly_credit_card" id="max_monthly_credit_card" placeholder="Max Monthly Credit Card Sales (USD)">
                      <img src="./assets/images/info.svg" class="info-icon position-absolute " alt="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="field-wrap position-relative d-flex ">
                      <input type="number" class="input-field number-code currecy-sign" name="currency_sign" id="currency_sign" placeholder="$" value="$" readonly>
                      <input type="text" class="input-field ml-increase" name="average_transaction" id="average_transaction" placeholder="Average Transaction (USD)">
                      <img src="./assets/images/info.svg" class="info-icon position-absolute " alt="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="field-wrap position-relative d-flex ">
                      <input type="number" class="input-field number-code currecy-sign" name="currency_sign" id="currency_sign" placeholder="$" value="$" readonly>
                      <input type="text" class="input-field ml-increase" name="highest_transaction" id="highest_transaction" placeholder="Highest Transaction (USD)">
                      <img src="./assets/images/info.svg" class="info-icon position-absolute " alt="">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="field-wrap">
                      <label for="" class="label-field f-mont">Interested in Fraud/Chargeback Protection?</label>
                    </div>
                    <div class="field-wrap">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions6" id="inlineRadio6" value="Yes">
                        <label class="form-check-label" for="inlineRadio6">Yes</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions6" checked id="inlineRadio7" value="No">
                        <label class="form-check-label" for="inlineRadio7">No</label>
                      </div>
                    </div>
                    <div class="field-wrap">
                      <label for="" class="label-field f-mont">Do you want to accept ACH/eCheck payments?</label>
                    </div>
                    <div class="field-wrap">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions7" id="inlineRadio8" value="Yes">
                        <label class="form-check-label" for="inlineRadio8">Yes</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions7" checked id="inlineRadio9" value="No">
                        <label class="form-check-label" for="inlineRadio9">No</label>
                      </div>
                    </div>
                    <div class="field-wrap">
                      <label for="" class="label-field f-mont">Are you interested in business funding options?*</label>
                    </div>
                    <div class="field-wrap mb-0">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions8" id="inlineRadio10" value="Yes">
                        <label class="form-check-label" for="inlineRadio10">Yes</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions8" checked id="inlineRadio11" value="No">
                        <label class="form-check-label" for="inlineRadio11">No</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <button type="button" class="btn-primary next-prev-wrap prev-step" id="prev3"><img src="./assets/images/rightarrow.svg" class="left-arrow-icon right-arrow" alt="">Previous Step</button>
                  </div>
                  <div class="col-md-6  ">
                    <button type="button" class="btn-primary next-prev-wrap next-step" id="next4">Next Step <img src="./assets/images/leftarrow.svg" class="left-arrow-icon" alt=""></button>
                  </div>
                  <div class="preapp-norton d-flex  justify-content-center align-items-center gap-2 mt-3 ">
                    <img src="./assets/images/preapp-norton.webp" alt="">
                    <span class="text-sm">The information you enter will not be distributed or sold.</span>
                  </div>
                </div>
              </div>
            </form>
            <div class="tab5 step-form" id="step5">
              <h1 class="hd-md mb-1">Great Work</h1>
              <h3 class="fs-18">Your application is currently under review.</h3>
              <p class="fs-12 text-light-gray mb-1 lh-lg ">Please bookmark this page to view or download your submission and securely upload any additional documentation requested by underwriting.</p>
              <p class="fs-12 text-light-gray">Thank you for choosing PaymentCloud for your processing needs. We'll be in touch shortly.</p>
              <div class="accordion custom-accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseone" aria-expanded="false" aria-controls="collapseone">
                      Business Information
                    </button>
                  </h2>
                  <div id="collapseone" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="acc-seprator"></div>
                    <div class="accordion-body">
                      <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group"><label class="">Type of Ownership</label>
                            <p class="form-control-static">Partnership</p>
                          </div>
                          <div class="form-group"><label class="">Business Name</label>
                            <p class="form-control-static">Brent Young</p>
                          </div>
                          <div class="form-group"><label class="">DBA</label>
                            <p class="form-control-static">Nisi voluptate imped</p>
                          </div>
                          <div class="form-group"><label class="">Business Phone Number</label>
                            <p class="form-control-static">317-279-4253</p>
                          </div>
                          <div class="form-group"><label class="">Business Email Address</label>
                            <p class="form-control-static">hice@mailinator.com</p>
                          </div>
                          <div class="form-group"><label class="">TAX ID / EIN</label>
                            <p class="form-control-static">XXXXX2222</p>
                          </div>
                          <div class="form-group"><label class="">Legal Address Street</label>
                            <p class="form-control-static">Consequat Eum ullam</p>
                          </div>
                          <div class="form-group"><label class="">City</label>
                            <p class="form-control-static">Necessitatibus iste</p>
                          </div>
                          <div class="form-group"><label class="">State</label>
                            <p class="form-control-static">Alaska</p>
                          </div>
                          <div class="form-group"><label class="">Zip Code</label>
                            <p class="form-control-static">90457</p>
                          </div>
                          <div class="form-group"><label class="">Length of Business Ownership(years)</label>
                            <p class="form-control-static">1</p>
                          </div>
                          <div class="form-group"><label class="">Length of Business Ownership(months)</label>
                            <p class="form-control-static">1</p>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group"><label class="">Business Website Address</label>
                            <p class="form-control-static">https://www.fip.org.uk</p>
                          </div>
                          <div class="form-group"><label class="">Industry Type</label>
                            <p class="form-control-static">9 Airlines (For MCC See On-Line Charge Type Description or Manual</p>
                          </div>
                          <div class="form-group"><label class="">Premise Type</label>
                            <p class="form-control-static">Kiosk</p>
                          </div>
                          <div class="form-group"><label class="">Is your DBA address the same as your Legal Business address?</label>
                            <p class="form-control-static">yes</p>
                          </div>
                          <div class="form-group"><label class="">DBA Phone</label>
                            <p class="form-control-static">317-279-4253</p>
                          </div>
                          <div class="form-group"><label class="">DBA Address Street</label>
                            <p class="form-control-static">Consequat Eum ullam</p>
                          </div>
                          <div class="form-group"><label class="">City</label>
                            <p class="form-control-static">Necessitatibus iste</p>
                          </div>
                          <div class="form-group"><label class="">State</label>
                            <p class="form-control-static">Alaska</p>
                          </div>
                          <div class="form-group"><label class="">Zip Code</label>
                            <p class="form-control-static">90457</p>
                          </div>
                          <div class="form-group"><label class="">Length at Location (Years)</label>
                            <p class="form-control-static">1</p>
                          </div>
                          <div class="form-group"><label class="">Length at Location (Months)</label>
                            <p class="form-control-static">1</p>
                          </div>
                          <div class="form-group"><label class="">Business Type</label>
                            <p class="form-control-static">Sapiente id facere d</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Personal Information
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="acc-seprator"></div>
                    <div class="accordion-body">
                      <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group"><label class="">First Name</label>
                            <p class="form-control-static">Ina</p>
                          </div>
                          <div class="form-group"><label class="">Last Name</label>
                            <p class="form-control-static">Stanley</p>
                          </div>
                          <div class="form-group"><label class="">Document Type</label>
                            <p class="form-control-static">Driving License</p>
                          </div>
                          <div class="form-group"><label class="">ID Number</label>
                            <p class="form-control-static">—</p>
                          </div>
                          <div class="form-group"><label class="">State</label>
                            <p class="form-control-static">Alaska</p>
                          </div>
                          <div class="form-group"><label class="">Social Security Number</label>
                            <p class="form-control-static">XXXXX2222</p>
                          </div>
                          <div class="form-group"><label class="">Date of Birth</label>
                            <p class="form-control-static">XX-XX-1997</p>
                          </div>
                          <div class="form-group"><label class="">Personal Phone Number</label>
                            <p class="form-control-static">031-727-9422</p>
                          </div>
                          <div class="form-group"><label class="">Personal Email Address</label>
                            <p class="form-control-static">hehef@mailinator.com</p>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group"><label class="">Is your Personal address the same as your Business or DBA address?</label>
                            <p class="form-control-static text-capitalize">no</p>
                          </div>
                          <div class="form-group"><label class="">Home Address Street</label>
                            <p class="form-control-static">Ex tempore vitae im</p>
                          </div>
                          <div class="form-group"><label class="">City</label>
                            <p class="form-control-static">Ea eos reiciendis ab</p>
                          </div>
                          <div class="form-group"><label class="">State</label>
                            <p class="form-control-static">Alaska</p>
                          </div>
                          <div class="form-group"><label class="">ZIP code</label>
                            <p class="form-control-static">49772</p>
                          </div>
                          <div class="form-group"><label class="">Length at Residence (Years)</label>
                            <p class="form-control-static">1</p>
                          </div>
                          <div class="form-group field-website-thk"><label class="">Length at Residence (Months)</label>
                            <p class="form-control-static">1</p>
                          </div>
                          <div class="form-group field-website-thk"><label class="">Ownership %</label>
                            <p class="form-control-static">100</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Business Bank Information
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="acc-seprator"></div>
                    <div class="accordion-body">
                      <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group"><label class="">Bank Name</label>
                            <p class="form-control-static">Griffith Mcleod</p>
                          </div>
                          <div class="form-group"><label class="">Routing Number</label>
                            <p class="form-control-static">XXXXX2222</p>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group"><label class="">Account Number</label>
                            <p class="form-control-static">XXXXXXXXXX2222</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                      Processing Information
                    </button>
                  </h2>
                  <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="acc-seprator"></div>
                    <div class="accordion-body">
                      <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group"><label class="">Are you currently processing credit and debit card transactions?</label>
                            <p class="form-control-static">NO</p>
                          </div>
                          <div class="form-group"><label class="">How do you want to process card transactions?</label>
                            <p class="form-control-static"><span class="text-capitalize">in person, </span></p>
                          </div>
                          <div class="form-group"><label class="">Max Monthly Credit Card Sales (USD)</label>
                            <p class="form-control-static">333333333</p>
                          </div>
                          <div class="form-group"><label class="">Average Transaction (USD)</label>
                            <p class="form-control-static">233333333</p>
                          </div>
                          <div class="form-group"><label class="">Highest Transaction (USD)</label>
                            <p class="form-control-static">22222222</p>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group"><label class="">Will you need to accept Checks?</label>
                            <p class="form-control-static">NO</p>
                          </div>
                          <div class="form-group"><label class="">Are you interested in Business Funding and Loan options?</label>
                            <p class="form-control-static">NO</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="doc-not-uploaded align-items-center justify-content-center   d-flex gap-3 mb-4 ">
                <div>
                  <img src="./assets/images/alert-icon.png" alt="">
                </div>
                <div>
                  <p class="fs-12 text-center alert-text mb-0">You have not uploaded any required documents for approval yet.</p>
                </div>
              </div>
              <button type="button" class="bg-transparent  border-0 submition-btn text-black d-flex align-items-center  m-auto ">Download Your Submission <img src="./assets/images/downloadicon.svg"></button>
            </div>
            <div class="downArrow bounce" id="scrollIndicator"><img id="arrowImage" width="30" height="30" alt="" src="./assets/images/arrow-bottom.webp"></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="right-bar ps-3 pe-3">
            <h2 class="fs-14 fw-medium text-black text-center">Upload Supporting Documents</h2>
            <p class="fs-12 text-center text-gray ">
              Securely upload documents to speed up the underwriting and approval process.
            </p>
            <div class="inner-box" id="fileUploadBox">
              <img src="./assets/images/upload.svg" class="d-flex uploder" alt="">
              <p class="text-black fs-14 text-center">
                Drag and drop the file <br>
                or <span class="browse">browse</span> to choose a file
              </p>
              <div class="border-bottom-light mb-3"></div>
              <div class="encryption-icon d-flex gap-1 align-items-start ">
                <img src="./assets/images/encrypt.svg" alt="">
                <p class="text-light-gray fs-12">Your files are uploaded with 256 bit encryption.</p>
              </div>

            </div>
            <input type="file" id="fileInput" style="display: none;">
          </div>
          <div class="grey_right_box">
            <ul>
              <p>Required Docs:</p>
              <li>Voided check</li>
              <li>Color copy of photo ID</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>



  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="./assets/js/main.js"></script>
</body>

</html>