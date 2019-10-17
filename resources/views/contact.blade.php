@extends('layouts.head')
@section('contacts')
<script type="text/javascript">
    $(document).ready(function () {
        $('#contactForm').bootstrapValidator({
            container: '#messages',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                fullName: {
                    validators: {
                        notEmpty: {
                            message: 'The full name is required and cannot be empty'
                        }
                    }
                },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The email address is not valid'
                    }
                }
            },
            title: {
                validators: {
                    notEmpty: {
                        message: 'The title is required and cannot be empty'
                    },
                    stringLength: {
                        max: 100,
                        message: 'The title must be less than 100 characters long'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'The phone no. is required and cannot be empty'
                    },
                    stringLength: {
                        max: 10,
                        min: 10,
                        message: 'The phone no. must be of exact 10 numbers'
                    }
                }
            },
            content: {
                validators: {
                    notEmpty: {
                        message: 'The content is required and cannot be empty'
                    },
                    stringLength: {
                        max: 500,
                        message: 'The content must be less than 500 characters long'
                    }
                }
            }
        }
        });
    });
</script>
    <div class="container">
        <div><legend class="text-center header">Contact us</legend></div>
        <div class="row">
            <div class="col-sm-6">
                <div id="maps">
                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="95%" height="200" src="https://maps.google.com/maps?hl=en&q=27,Community Center,Naraina Industrial Area,New Delhi-110028&ie=UTF8&t=roadmap&z=15&iwloc=B&output=embed"></iframe>
                    <br><br>
                </div>
                <p><span class="glyphicon glyphicon-home"></span><b> &nbsp;27,Community Center,Naraina Industrial Area,New Delhi-110028</b></p><br>
                <p><span class="glyphicon glyphicon-earphone"></span><b> &nbsp;011-64549945</b></p><br>
                <p><span class="glyphicon glyphicon-envelope"></span><b> &nbsp;contact@memorableshaadi.com</b></p><br>
                <p><span class="glyphicon glyphicon-heart"></span><b> &nbsp;www.memorableshaadi.com</b></p>
            </div>
            <div class="col-sm-6">
                <h2> We Would Love To Hear From You.</h2>
                <form id="contactForm" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control required" name="fullName" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text">
                    </div>
                    <div class="form-group">
                        <label>Message</label><textarea class="form-control" name="content" placeholder="Your message here.." data-placement="top" data-trigger="manual"></textarea>
                    </div>
                    <div class="form-group">
                        <label>E-Mail</label>
                        <input class="form-control email" name="email" placeholder="email@you.com (so that we can contact you)" data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)" type="text">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input class="form-control phone" name="phone" placeholder="999-999-9999" data-placement="top" data-trigger="manual" data-content="Must be a valid phone number (999-999-9999)" type="text">
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3" id="messages"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success pull-right">Submit<span class="glyphicon glyphicon-thumbs-up"></span></button>
                        <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Google Code for Lead Generation form filling Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 925163042;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "6D3ACLLek2UQoryTuQM";
var google_conversion_value = 10.00;
var google_conversion_currency = "USD";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
@stop