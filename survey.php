<?php
require 'bootstrap.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Medical Cl - Survey</title>

    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/vendors/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />

    <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>
   <!-- Start Main Content -->
    <main class="survey-main">
        <!-- Start Section One -->
        <section id="sectionOne" class="section_1 secttion-parent">
           <!-- Start Header Section -->
            <div class="header-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <img src="assets/img/logo1.png" alt="logo">
                        </div>
                        <div class="col-6 text-right">
                            <img src="assets/img/logo2.png" alt="logo">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Intro Section -->
            <div class="text-content">
                <div class="container-fluid h-100">
                    <div class="row h-100">
                        <div class="col-xl-6 offset-xl-6 col-md-8 offset-md-4 col-12 inro-survey">
                            <div class="text-top">
                                <div class="left-text">
                                    <strong>PROFSSIONAL<br>
                                        INSIGHT FORM</strong>
                                    <small>MEDICAL EDUCATION<br>
                                        QUADRANT MODEL</small>
                                </div>
                                <div class="text-right-content">
                                    In support of your professional scope of interest and scientific requirements, you are requested to fill the provided survey and share your scope of interest in the field of medical education. <br><br>

                                    Your professional input is highly appreciated.

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Start Survey Content -->
            <div class="form-content">
                <h1>SCIENTIFIC AREAS OF INTEREST </h1>
                <hr class="fr-hr">
                <form action="" class="form-inline" id="survey_form">
                   <!-- Start First Row -->
                    <div class="form-row first-row">
                        <div class="col-md-6 area_field">
                            <div class="form-group">
                                <label for="area">Therapeutic Area(s):</label>
                                <select class="form-control" id="area">
                                    <option value="0" selected>Therapeutic Area(s):</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 disease_field">
                            <div class="form-group">
                                <label for="disease">Disease(s):</label>
                                <select class="form-control" id="disease">
                                    <option value="0" selected>Disease(s):</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Start Medical Event 1 -->
                    <div class="form-row sec-row">
                        <div class="col-12">
                            <h2>
                                Medical Event 1
                            </h2>
                        </div>
                        <div class="col-12 padding-l">
                            <div class="label-bg row">
                                <div class="col-4 text-center">
                                    Target Audiance
                                </div>
                                <div class="col-4 text-center line-center">
                                    Topic
                                </div>
                                <div class="col-4 text-center">
                                    Recommended Date
                                </div>
                            </div>
                            <div class="group-row row">
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="target"  class="sr-only">Target Audiance:</label>
                                        <select class="form-control audiences-list" data-topic="topic1" id="target">
                                            <option value="0" selected>Target Audiance</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="topic1" class="sr-only">Topic:</label>
                                        <select class="form-control" id="topic1">
                                            <option value="0" selected>Topic</option>
                                            <option value="1" >option</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="datepicker" class="sr-only">Recommended Date:</label>
                                        <input class="form-control" id="datepicker" value="" type="text" placeholder="Recommended Date" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Start Medical Event 2 -->
                    <div class="form-row sec-row">
                        <div class="col-12">
                            <h2>
                                Medical Event 2
                            </h2>
                        </div>
                        <div class="col-12 padding-l">
                            <div class="label-bg row">
                                <div class="col-4 text-center">
                                    Target Audiance
                                </div>
                                <div class="col-4 text-center line-center">
                                    Topic
                                </div>
                                <div class="col-4 text-center">
                                    Recommended Date
                                </div>
                            </div>
                            <div class="group-row row">
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="target2" class="sr-only">Target Audiance:</label>
                                        <select class="form-control audiences-list" data-topic="topic2" id="target2">
                                            <option value="0" selected>Target Audiance</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="topic2" class="sr-only">Topic:</label>
                                        <select class="form-control " id="topic2">
                                            <option value="0" selected>Topic</option>
                                            <option value="1" >option</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="datepicker1" class="sr-only">Recommended Date:</label>
                                        <input class="form-control" id="datepicker1" type="text" placeholder="Recommended Date" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Start Other Topics -->
                    <div class="form-row sec-row">
                        <div class="col-12">
                            <h2>
                                Other Topics
                            </h2>
                        </div>
                        <div class="col-12 padding-l">
                            <div class="label-bg row">
                                <div class="col-4 text-center">
                                    Target Audiance
                                </div>
                                <div class="col-4 text-center line-center">
                                    Topic
                                </div>
                                <div class="col-4 text-center">
                                    Recommended Date
                                </div>
                            </div>
                            <div class="group-row row">
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="target3" class="sr-only">Target Audiance:</label>
                                        <select class="form-control audiences-list" id="target3">
                                            <option value="0" selected>Target Audiance</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="topic3" class="sr-only">Topic:</label>
                                        <input type="text" placeholder="Topic3" id="topic3" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="datepicker2" class="sr-only">Recommended Date:</label>
                                        <input class="form-control" id="datepicker2" type="text" placeholder="Recommended Date" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-row sec-row">
                        <div class="col-12">
                            <h2>
                                General Remarks
                            </h2>
                        </div>
                        <div class="col-12 padding-l">
                            <div class="group-row row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="text" class="form-control" placeholder="text" id="text"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="form-row sec-row">
                        <div class="col-12">
                            <h2>
                                <img src="assets/img/icon.png" alt="icon"> Personal Info
                            </h2>
                        </div>
                        <div class="col-12 padding-l">
                            <div class="form-row row-last">
                                <div class="col-md-6 first-input-last">
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" placeholder="Name" onkeypress="validateName(event)" id="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 last-input-last">
                                    <div class="form-group">
                                        <label for="phone">Phone Number:</label>
                                        <input type="text" onkeypress="validatePhone(event)" name="phone" id="phone" placeholder="Phone Number:" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 email-row">
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="text" placeholder="Email:"  aria-describedby="emailHelp" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="radio-check">
                                    <span>Contact me via</span>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customRadio1" name="example1" value="customEx" checked>
                                        <label class="custom-control-label" for="customRadio1">Email</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customRadio2" name="example1" value="customEx">
                                        <label class="custom-control-label" for="customRadio2">Phone</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="form-action">
                        <button type="button" class="btn-submit" onclick="submit_survey()">Submit</button>
                    </div>
                </form>
            </div>
            
            <!-- Start Footer Section -->
            <div class="footer-page">
                <div class="top-img"><img src="assets/img/arrow-img.png" alt="img"></div>
                <p>
                    Caduceus Lane MENA is eager for an extended professional partnership with associated stakeholders, a partnership found on the support of the evolving medical education requirements that best serve your professional scope of interest.
                </p>
                <p class="last-p">
                    Your invaluable collaboration is highly appreciated.
                </p>
                <div class="row">
                    <div class="col-6 left-footer-img">
                        <img src="assets/img/cad-text.png" alt="image">
                    </div>
                    <div class="col-6 text-right">
                        <img src="assets/img/footer-logo.png" alt="image">
                    </div>
                </div>
                <img class="image-aps" src="assets/img/shape2.png" alt="image">
            </div>
        </section>
    </main>
    <!-- End Main Content -->
    
    <!-- Start Thank You Modal -->
    <div class="thanky-modal">
        <div class="modal-content-thank">
            <div class="modal-data">
                <h2>Thank You</h2>
                <hr>
                <p>The Form was Submitted Successfully</p>
                <img src="assets/img/shape3.png" class="shape3" alt="image">
                <img src="assets/img/cirlce.png" class="circle-img" alt="image">
            </div>
        </div>
    </div>
    
    <!-- Start Loading Section -->
    <div class="loading-overlay overlay-hidden" id="loading">
        <div class="reverse-spinner"></div>
    </div>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="assets/js/vendors/jquery.min.js"></script>
    <script src="assets/js/vendors/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script>

        let disease =0 ;
       $(document).ready(function(){
           getTherapists()
           getAudiences()

           $('#area').on('change', function (e) {
               // console.log(this.value)
               getDiseases(this.value);
           });

           $('#disease').on('change', function (e) {
              disease = this.value;
              console.log(disease);
           });

           $('.audiences-list').on('change', function (e) {
               value = this.value ;
               topicList = this.getAttribute('data-topic');
               // console.log(this.getAttribute('data-topic'));
               getTobics(value,topicList);
           });

       });


       function getTherapists()
       {
           route = "<?php echo myUrl('router/therapies') ?>"
           $.ajax({
               type: "GET",
               url: route,
           })
               .done(function(response) {
                   console.log(JSON.parse(response));
                    response = JSON.parse(response);
                   response.data.forEach(appendTherapy);
                   // response.forEach(appendTherapy)

               })
               .fail(function (error) {
               })
       }

       function appendTherapy(data)
       {
            $("#area").append(` <option value=${data.therapy_id} >${data.therapy_name}</option>`)
       }

       function getAudiences()
       {
           route = "<?php echo myUrl('router/audiences') ?>"
           $.ajax({
               type: "GET",
               url: route,
           })
               .done(function(response) {
                   console.log(JSON.parse(response));
                   response = JSON.parse(response);
                   response.data.forEach(appendAudience);
               })
               .fail(function (error) {
               })
       }

       function appendAudience(data)
       {
           $(".audiences-list").append(` <option value=${data.audiance_id} >${data.audiance_name}</option>`)

       }

       function getDiseases(therapyId)
       {
           route = "<?php echo myUrl('router/diseases') ?>"
           $.ajax({
               type: "GET",
               url: route,
               data : {
                   'therapy_id' : therapyId
               }
           })
               .done(function(response) {
                   console.log(JSON.parse(response));
                   $("#disease").empty();
                   $("#disease").append(` <option value="0" selected>Disease(s):</option>`)
                   response = JSON.parse(response);
                   response.data.forEach(appendDisease);
               })
               .fail(function (error) {
               })
       }

        function appendDisease(data)
        {
            $("#disease").append(` <option value=${data.disease_id} >${data.disease_name}</option>`)
        }

        function getTobics(audi,tobicList)
        {
            route = "<?php echo myUrl('router/topics') ?>"
             $.ajax({
                type: "GET",
                url: route,
                data : {
                    'audiance_id' : audi ,
                    'disease_id' : disease,
                }
            })
                .done(function(response){
                    console.log(JSON.parse(response));
                    console.log(tobicList);
                    $("#"+tobicList).empty();
                    $("#"+tobicList).append(` <option value="0" selected>Topic</option>`)
                    response = JSON.parse(response);
                    response.data.forEach(appendTobic);
                })
                .fail(function (error) {
                })
        }



        function appendTobic(data,tobicList="topic1")
        {
            $("#"+tobicList).append(` <option value=${data.topic_id} >${data.topic_name}</option>`)

        }

    </script>
</body>

</html>
