"use strict";

// Class definition
var KTWizard3 = function () {
    // Base elements
    var _wizardEl;
    var _formEl;
    var _wizardObj;
    var _validations = [];

    // Private functions
    var _initWizard = function () {
        // Initialize form wizard
        let knob1 = document.getElementById('step1')
        let cssKnob1Before = window.getComputedStyle(knob1, "::before");
        let cssKnob1After = window.getComputedStyle(knob1, "::after");

        let knob2 = document.getElementById('step2')
        let cssKnob2Before = window.getComputedStyle(knob2, "::before");
        let cssKnob2After = window.getComputedStyle(knob2, "::after");

        let knob3 = document.getElementById('step3')
        let cssKnob3Before = window.getComputedStyle(knob3, "::before");
        let cssKnob3After = window.getComputedStyle(knob3, "::after");

        let knob4 = document.getElementById('step4')
        let cssKnob4Before = window.getComputedStyle(knob4, "::before");
        let cssKnob4After = window.getComputedStyle(knob4, "::after");

        // knob1.style.setProperty('--myVar','none');
        $('#back-btn').addClass('btn-display-none');
        knob2.style.setProperty('--border-clr', '#EBF2E4');
        knob3.style.setProperty('--border-clr', '#EBF2E4');
        knob4.style.setProperty('--border-clr', '#EBF2E4');
        // knob2.style.setProperty('--myVar', 'none');
        // knob3.style.setProperty('--myVar', 'none');
        // knob4.style.setProperty('--myVar', 'none');
        // $('#step2-title').addClass('custom-display-none')
        // $('#step3-title').addClass('custom-display-none')
        // $('#step4-title').addClass('custom-display-none')

        _wizardObj = new KTWizard(_wizardEl, {
            startStep: 1, // initial active step number
            // clickableSteps: true  // allow step clicking
        });

        // Validation before going to next page
        _wizardObj.on('change', function (wizard) {
            if (wizard.getStep() > wizard.getNewStep()) {
                
                if (wizard.getStep() == 2) {
                    console.log('step2')
                    $('#back-btn').removeClass('btn-display-inline');
                    $('#back-btn').addClass('btn-display-none');
                    // knob2.style.setProperty('--myVar', 'inline');
                    knob2.style.setProperty('--bg-color', '#EBEDF3');
                    knob2.style.setProperty('--border-clr', '#EBF2E4');
                    // $('#step2-title').removeClass('custom-display-inline')
                    // $('#step2-title').addClass('custom-display-none')
                }
                if (wizard.getStep() == 3) {
                    console.log('step3')
                    // knob3.style.setProperty('--myVar', 'inline');
                    knob3.style.setProperty('--bg-color', '#EBEDF3');
                    knob3.style.setProperty('--border-clr', '#EBF2E4');
                    // $('#step3-title').removeClass('custom-display-inline')
                    // $('#step3-title').addClass('custom-display-none')
                }
                if (wizard.getStep() == 4) {
                    console.log('step4')
                    // knob4.style.setProperty('--myVar', 'inline');
                    knob4.style.setProperty('--bg-color', '#EBEDF3');
                    knob4.style.setProperty('--border-clr', '#EBF2E4');
                    // $('#step4-title').removeClass('custom-display-inline')
                    // $('#step4-title').addClass('custom-display-none')
                    $('#next-btn').addClass('btn-display-inline');
                }
                return; // Skip if stepped back
            }

            // Validate form before change wizard step
            var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step

            if (validator) {
                validator.validate().then(function (status) {
                    if (status == 'Valid') {
                        wizard.goTo(wizard.getNewStep());
                        if (wizard.getStep() == 2) {
                            // knob2.style.setProperty('--myVar', 'inline');
                            knob1.style.setProperty('--bg-color', '#074A37');
                            knob2.style.setProperty('--border-clr', '#074A37');
                            $('#back-btn').removeClass('btn-display-none');
                            $('#back-btn').addClass('btn-display-inline');
                            // document.getElementById('step2-title').classList.add("custom-display-inline");
                        }
                        if (wizard.getStep() == 3) {
                            // knob3.style.setProperty('--myVar', 'inline');
                            knob2.style.setProperty('--bg-color', '#074A37');
                            knob3.style.setProperty('--border-clr', '#074A37');
                            // document.getElementById('step3-title').classList.add("custom-display-inline");
                        }
                        if (wizard.getStep() == 4) {
                            // knob4.style.setProperty('--myVar', 'inline');
                            knob3.style.setProperty('--bg-color', '#074A37');
                            knob4.style.setProperty('--border-clr', '#074A37');
                            // document.getElementById('step4-title').classList.add("custom-display-inline");
                            $('#back-btn').addClass('btn-display-none');
                            $('#next-btn').addClass('btn-display-none');
                            $('#save-btn').addClass('btn-display-inline');
                        }

                        KTUtil.scrollTop();
                    } else {
                        Swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light"
                            }
                        }).then(function () {
                            KTUtil.scrollTop();
                        });
                    }
                });
            }

            return false;  // Do not change wizard step, further action will be handled by he validator
        });

        // Changed event
        _wizardObj.on('changed', function (wizard) {
            KTUtil.scrollTop();
        });

        // Submit event
        _wizardObj.on('submit', function (wizard) {
            // Validate form before submit
            var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step

            if (validator) {
                validator.validate().then(function (status) {
                    if (status == 'Valid') {
                        _formEl.submit(); // submit form
                    } else {
                        Swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light"
                            }
                        }).then(function () {
                            KTUtil.scrollTop();
                        });
                    }
                });
            }
        });
    }

    var _initValidation = function () {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        // Step 1
        _validations.push(FormValidation.formValidation(
            _formEl,
            {
                fields: {
                    address1: {
                        validators: {
                            notEmpty: {
                                message: 'Address is required'
                            }
                        }
                    },
                    postcode: {
                        validators: {
                            notEmpty: {
                                message: 'Postcode is required'
                            }
                        }
                    },
                    city: {
                        validators: {
                            notEmpty: {
                                message: 'City is required'
                            }
                        }
                    },
                    state: {
                        validators: {
                            notEmpty: {
                                message: 'State is required'
                            }
                        }
                    },
                    country: {
                        validators: {
                            notEmpty: {
                                message: 'Country is required'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        //eleInvalidClass: '',
                        eleValidClass: '',
                    })
                }
            }
        ));

        // Step 2
        _validations.push(FormValidation.formValidation(
            _formEl,
            {
                fields: {
                    package: {
                        validators: {
                            notEmpty: {
                                message: 'Package details is required'
                            }
                        }
                    },
                    weight: {
                        validators: {
                            notEmpty: {
                                message: 'Package weight is required'
                            },
                            digits: {
                                message: 'The value added is not valid'
                            }
                        }
                    },
                    width: {
                        validators: {
                            notEmpty: {
                                message: 'Package width is required'
                            },
                            digits: {
                                message: 'The value added is not valid'
                            }
                        }
                    },
                    height: {
                        validators: {
                            notEmpty: {
                                message: 'Package height is required'
                            },
                            digits: {
                                message: 'The value added is not valid'
                            }
                        }
                    },
                    packagelength: {
                        validators: {
                            notEmpty: {
                                message: 'Package length is required'
                            },
                            digits: {
                                message: 'The value added is not valid'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        //eleInvalidClass: '',
                        eleValidClass: '',
                    })
                }
            }
        ));

        // Step 3
        _validations.push(FormValidation.formValidation(
            _formEl,
            {
                fields: {
                    delivery: {
                        validators: {
                            notEmpty: {
                                message: 'Delivery type is required'
                            }
                        }
                    },
                    packaging: {
                        validators: {
                            notEmpty: {
                                message: 'Packaging type is required'
                            }
                        }
                    },
                    preferreddelivery: {
                        validators: {
                            notEmpty: {
                                message: 'Preferred delivery window is required'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        //eleInvalidClass: '',
                        eleValidClass: '',
                    })
                }
            }
        ));

        // Step 4
        _validations.push(FormValidation.formValidation(
            _formEl,
            {
                fields: {
                    locaddress1: {
                        validators: {
                            notEmpty: {
                                message: 'Address is required'
                            }
                        }
                    },
                    locpostcode: {
                        validators: {
                            notEmpty: {
                                message: 'Postcode is required'
                            }
                        }
                    },
                    loccity: {
                        validators: {
                            notEmpty: {
                                message: 'City is required'
                            }
                        }
                    },
                    locstate: {
                        validators: {
                            notEmpty: {
                                message: 'State is required'
                            }
                        }
                    },
                    loccountry: {
                        validators: {
                            notEmpty: {
                                message: 'Country is required'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    // Validate fields when clicking the Submit button
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        //eleInvalidClass: '',
                        eleValidClass: '',
                    })
                }
            }
        ));
    }

    return {
        // public functions
        init: function () {
            _wizardEl = KTUtil.getById('kt_wizard_v3');
            _formEl = KTUtil.getById('kt_form');

            _initWizard();
            _initValidation();
        }
    };
}();

jQuery(document).ready(function () {
    KTWizard3.init();
});