<?php include('layout/header.php') ?>


<div class="container-fluid px-lg-5">
    <div class="row">
        <div class="col-lg-4 col-md-6 mr-auto">
            <div class="banner-heading">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="javascript:void(0);" class="active">Get Involved</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<main class="container-in">
    <div class="inner-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow bounceIn text-center">
                    <div class="title text-center">
                        <h1>Member Registration</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="Pledge-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5">
                        <form id="member-form" method="post">
                            <fieldset id="member-form-id">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="fname">First Name <span class="text-danger">*</span></label>
                                        <input type="text" title="First Name" class="form-control inputTextBox mandatoryvalue" id="fname" name="fname" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lname">Last Name</label>
                                        <input type="text" title="Last Name" class="form-control inputTextBox mandatoryvalue" id="lname" name="lname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" title="Email Address" class="form-control mandatoryvalue emailid" id="email" name="email" placeholder="Email Address">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phone">Phone Number <span class="text-danger">*</span></label>
                                        <input type="number" title="Phone Number" class="form-control numbervalue mandatoryvalue" maxlength="10" id="phone" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message <span style="color:red;">*</span></label>
                                    <textarea class="form-control mandatoryvalue" title="Message" rows="5" id="message_member" name="message_member" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="button" id="member_submit" onclick="memberSubmit()" class="btn rounded-0 btn-secondary px-5">Submit</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

















<?php include('layout/footer.php') ?>