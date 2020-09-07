<?php
require 'Router.php'
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

    <main class="survey-main">
        <!-- Start Section One -->
        <section id="sectionOne" class="section_1 secttion-parent">
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
            
            <div class="form-content">
               <h1>SCIENTIFIC AREAS OF INTEREST </h1>
               <hr class="fr-hr">
                <form action="" class="form-inline">
                    <div class="form-row first-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="area">Therapeutic Area(s):</label>
                                <select class="form-control" id="area">
                                <option selected>Therapeutic Area(s):</option>
                              </select>
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="area">Disease(s):</label>
                                <select class="form-control" id="area">
                                <option selected>Disease(s):</option>
                              </select>
                              </div>
                        </div>
                    </div>
                    
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
                                        <select class="form-control" id="area">
                                        <option selected>Target Audiance</option>
                                      </select>
                                      </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Topic" class="form-control">
                                      </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                         <input class="form-control" id="datepicker" type="text" placeholder="Recommended Date"/>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
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
                                        <select class="form-control" id="area">
                                        <option selected>Target Audiance</option>
                                      </select>
                                      </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Topic" class="form-control">
                                      </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                         <input class="form-control" id="datepicker1" type="text" placeholder="Recommended Date"/>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
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
                                        <select class="form-control" id="area">
                                        <option selected>Target Audiance</option>
                                      </select>
                                      </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Topic" class="form-control">
                                      </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
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
                                        <textarea name="text" class="form-control" placeholder="text" id="" ></textarea>
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
                                        <input type="text" placeholder="Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 last-input-last">
                                    <div class="form-group">
                                        <label for="phone">Phone Number:</label>
                                        <input type="text" placeholder="Phone Number:" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 email-row">
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="text" placeholder="Email:" class="form-control">
                                    </div>
                                </div>
                                <div class="radio-check">
                                     <span>Contact me via</span>
                                      <div class="custom-control custom-radio">
                                          <input type="radio" class="custom-control-input" id="customRadio1" name="example1" value="customEx">
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
                        <button type="button" class="btn-submit">Submit</button>
                    </div>
                </form>
            </div>
            
            <div class="footer-page">
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
            </div>
        </section>
    </main>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="assets/js/vendors/jquery.min.js"></script>
    <script src="assets/js/vendors/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script>
        $("#datepicker").datepicker({ 
            autoclose: true, 
            todayHighlight: true
      });
        $("#datepicker1").datepicker({ 
            autoclose: true, 
            todayHighlight: true
      });
         $("#datepicker2").datepicker({ 
            autoclose: true, 
            todayHighlight: true
      });
    </script>
</body>

</html>