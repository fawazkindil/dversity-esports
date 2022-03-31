<div class="flex flex-col items-stretch" id="wrapper">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form">
            <span class="contact100-form-title">
                Member Subscription
            </span>

            <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
                <span class="label-input100">First Name *</span>
                <input class="input100" type="text" name="firstname" placeholder="Enter Your First Name">
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
                <span class="label-input100">Last Name *</span>
                <input class="input100" type="text" name="lastname" placeholder="Enter Your Last Name">
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate="Enter Your Ingame Name">
                <span class="label-input100">Ingame Name *</span>
                <input class="input100" type="text" name="igname" placeholder="Enter Your Ingame Name">
            </div>

            <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Enter Your Email (e@a.x)">
                <span class="label-input100">Email *</span>
                <input class="input100" type="text" name="email" placeholder="Enter Your Email ">
            </div>

            <div class="wrap-input100 bg1 rs1-wrap-input100">
                <span class="label-input100">Phone *</span>
                <input class="input100" type="text" name="phone" placeholder="Enter Number Phone">
            </div>

            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Current Rank *</span>
                <div>
                    <select class="js-select2" name="service">
                        <option>Please choose</option>
                        <option>Iron</option>
                        <option>Bronze</option>
                        <option>Silver</option>
                        <option>Gold</option>
                        <option>Platinum</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>

            <div class="w-full dis-none js-show-service">
                <div class="wrap-contact100-form-radio">
                    <span class="label-input100">What kind of training do you expect?</span>

                    <div class="contact100-form-radio m-t-15" style="margin-top: 15px;">
                        <input class="input-radio100" id="radio1" type="checkbox" name="type-product" value="physical">
                        <label class="label-radio100" for="radio1">
                            Aiming and Crosshair Placement
                        </label>
                    </div>

                    <div class="contact100-form-radio">
                        <input class="input-radio100" id="radio2" type="checkbox" name="type-product" value="digital">
                        <label class="label-radio100" for="radio2">
                            Map Awareness
                        </label>
                    </div>

                    <div class="contact100-form-radio">
                        <input class="input-radio100" id="radio3" type="checkbox" name="type-product" value="service">
                        <label class="label-radio100" for="radio3">
                            Agent Abilities
                        </label>
                    </div>

                    <div class="contact100-form-radio">
                        <input class="input-radio100" id="radio4" type="checkbox" name="type-product" value="service">
                        <label class="label-radio100" for="radio4">
                            Planning and Strategies
                        </label>
                    </div>
                </div>

                <div class="wrap-contact100-form-range">
                    <span class="label-input100">Choose your class *</span>

                    <div class="contact100-form-range-value">
                        <div id="value-lower">Class A = RM 100 per session (Iron to Silver only)</div>
                        <div id="value-upper" style="margin-top: 5px;">Class B = RM 150 per session (Gold and Platinum
                            only)</div>
                        <input type="text" name="from-value">
                        <input type="text" name="to-value">
                    </div>
                    <div>
                        <input class="input-radio100" id="radio5" type="radio" name="type-product" value="service">
                        <label class="label-radio100" for="radio5">
                            Class A
                        </label>
                    </div>
                    <div>
                        <input class="input-radio100" id="radio6" type="radio" name="type-product" value="service">
                        <label class="label-radio100" style="margin-top: 5px;" for="radio6">
                            Class B
                        </label>
                    </div>
                </div>
            </div>

            <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate="Please Type Your Message">
                <span class="label-input100" style="">payment *</span>
                <hr>
                <img src="/images/Slide1.PNG" alt="" style="margin-top: 10px;">
                {{-- <textarea class="input100" name="message" placeholder="Your message here..."></textarea> --}}
                <div id="value-upper" style="margin-top: 5px;">Please upload your receipt as proof of payment here:
                </div>
                <input class="input100" style="margin-top: 15px;" type="file" name="" id="">
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
                    <span>
                        Submit
                        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
        </form>

    </div>
    <x-footer />
</div>

{{-- <!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script> --}}
@push('after-styles')
    <style>
        /*//////////////////////////////////////////////////////////////////
            [ FONT ]*/

        /* @font-face {
              font-family: Montserrat-Regular;
              src: url('../fonts/montserrat/Montserrat-Regular.ttf');
            }

            @font-face {
              font-family: Montserrat-Bold;
              src: url('../fonts/montserrat/Montserrat-Bold.ttf');
            }

            @font-face {
              font-family: Montserrat-Black;
              src: url('../fonts/montserrat/Montserrat-Black.ttf');
            }

            @font-face {
              font-family: Montserrat-SemiBold;
              src: url('../fonts/montserrat/Montserrat-SemiBold.ttf');
            }

            @font-face {
              font-family: Montserrat-Medium;
              src: url('../fonts/montserrat/Montserrat-Medium.ttf');
            } */



        /*//////////////////////////////////////////////////////////////////
            [ RESTYLE TAG ]*/

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body,
        html {
            height: 100%;

            /* font-family: Poppins-Regular, sans-serif; */
        }

        /*---------------------------------------------*/
        a {
            /* font-family: Poppins-Regular; */
            font-size: 14px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
            transition: all 0.4s;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
        }

        a:focus {
            outline: none !important;
        }

        a:hover {
            text-decoration: none;
        }

        /*---------------------------------------------*/
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0px;
        }

        p {
            /* font-family: Poppins-Regular; */
            font-size: 14px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
        }

        ul,
        li {
            margin: 0px;
            list-style-type: none;
        }


        /*---------------------------------------------*/
        input {
            outline: none;
            border: none;
        }

        input[type="number"] {
            -moz-appearance: textfield;
            appearance: none;
            -webkit-appearance: none;
        }

        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }

        textarea {
            outline: none;
            border: none;
        }

        textarea:focus,
        input:focus {
            border-color: transparent !important;
        }

        input:focus::-webkit-input-placeholder {
            color: transparent;
        }

        input:focus:-moz-placeholder {
            color: transparent;
        }

        input:focus::-moz-placeholder {
            color: transparent;
        }

        input:focus:-ms-input-placeholder {
            color: transparent;
        }

        textarea:focus::-webkit-input-placeholder {
            color: transparent;
        }

        textarea:focus:-moz-placeholder {
            color: transparent;
        }

        textarea:focus::-moz-placeholder {
            color: transparent;
        }

        textarea:focus:-ms-input-placeholder {
            color: transparent;
        }

        input::-webkit-input-placeholder {
            color: #adadad;
        }

        input:-moz-placeholder {
            color: #adadad;
        }

        input::-moz-placeholder {
            color: #adadad;
        }

        input:-ms-input-placeholder {
            color: #adadad;
        }

        textarea::-webkit-input-placeholder {
            color: #adadad;
        }

        textarea:-moz-placeholder {
            color: #adadad;
        }

        textarea::-moz-placeholder {
            color: #adadad;
        }

        textarea:-ms-input-placeholder {
            color: #adadad;
        }

        /*---------------------------------------------*/
        button {
            outline: none !important;
            border: none;
            background: transparent;
        }

        button:hover {
            cursor: pointer;
        }

        iframe {
            border: none !important;
        }


        /*---------------------------------------------*/
        .container {
            max-width: 1200px;
        }


        /*//////////////////////////////////////////////////////////////////
            [ Utility ]*/

        .bg0 {
            background-color: #fff;
        }

        .bg1 {
            background-color: #f7f7f7;
        }


        /*//////////////////////////////////////////////////////////////////
            [ Contact ]*/

        .container-contact100 {
            width: 100%;
            min-height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: stretch;
            /* align-items: center; */
            /* padding: 15px; */
            /* background: #e6e6e6; */
            background-image: url('/images/memberbg2.png');
            background-size: cover;
            background-repeat: no-repeat;
            color: white;

        }

        .wrap-contact100 {
            width: 920px;
            background-image: url('/images/graybg.jpg');
            /* background: #fff; */
            border-radius: 10px;
            overflow: hidden;
            padding: 62px 55px 90px 55px;
            margin: 30px auto;
        }


        /*------------------------------------------------------------------
            [  ]*/

        .contact100-form {
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .contact100-form-title {
            display: block;
            width: 100%;
            /* font-family: Montserrat-Black; */
            font-size: 39px;
            color: #f1eded;
            line-height: 1.2;
            text-align: center;
            padding-bottom: 59px;
        }



        /*------------------------------------------------------------------
            [  ]*/

        .wrap-input100 {
            width: 100%;
            position: relative;
            border: 1px solid #e6e6e6;
            border-radius: 13px;
            padding: 10px 30px 9px 22px;
            margin-bottom: 20px;
        }

        .rs1-wrap-input100 {
            width: calc((100% - 30px) / 2);
        }

        .label-input100 {
            /* font-family: Montserrat-SemiBold; */
            font-size: 10px;
            color: #070707;
            line-height: 1.5;
            text-transform: uppercase;
        }

        .input100 {
            display: block;
            width: 100%;
            background: transparent;
            /* font-family: Montserrat-SemiBold; */
            font-size: 18px;
            color: #555555;
            line-height: 1.2;
            padding-right: 15px;
        }


        /*---------------------------------------------*/
        input.input100 {
            height: 40px;
        }


        textarea.input100 {
            min-height: 120px;
            padding-top: 9px;
            padding-bottom: 13px;
        }


        .input100:focus+.focus-input100::before {
            width: 100%;
        }

        .has-val.input100+.focus-input100::before {
            width: 100%;
        }


        /*------------------------------------------------------------------
            [ Button ]*/
        .container-contact100-form-btn {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding-top: 20px;
            width: 100%;
        }

        .contact100-form-btn {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            width: 100%;
            height: 50px;
            background-color: #333333;
            border-radius: 25px;

            /* font-family: Montserrat-Medium; */
            font-size: 16px;
            color: #fff;
            line-height: 1.2;

            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        .contact100-form-btn i {
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        .contact100-form-btn:hover {
            background-color: #00ad5f;
        }

        .contact100-form-btn:hover i {
            -webkit-transform: translateX(10px);
            -moz-transform: translateX(10px);
            -ms-transform: translateX(10px);
            -o-transform: translateX(10px);
            transform: translateX(10px);
        }

        /*------------------------------------------------------------------
            [ Responsive ]*/

        @media (max-width: 768px) {
            .rs1-wrap-input100 {
                width: 100%;
            }

        }

        @media (max-width: 576px) {
            .wrap-contact100 {
                padding: 62px 15px 90px 15px;
            }

            .wrap-input100 {
                padding: 10px 10px 9px 10px;
            }
        }



        /*------------------------------------------------------------------
            [ Alert validate ]*/

        .validate-input {
            position: relative;
        }

        .alert-validate::before {
            content: attr(data-validate);
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            position: absolute;
            width: 100%;
            min-height: 40px;
            background-color: #f7f7f7;
            top: 35px;
            left: 0px;
            padding: 0 45px 0 22px;
            pointer-events: none;

            font-family: Montserrat-SemiBold;
            font-size: 18px;
            color: #fa4251;
            line-height: 1.2;
        }

        .btn-hide-validate {
            /* font-family: Material-Design-Iconic-Font; */
            font-size: 18px;
            color: #fa4251;
            cursor: pointer;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            width: 40px;
            height: 40px;
            top: 35px;
            right: 12px;
        }

        .rs1-alert-validate.alert-validate::before {
            background-color: #fff;
        }

        .true-validate::after {
            content: "\f26b";
            /* font-family: Material-Design-Iconic-Font; */
            font-size: 18px;
            color: #00ad5f;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            width: 40px;
            height: 40px;
            top: 35px;
            right: 10px;
        }

        /*---------------------------------------------*/
        @media (max-width: 576px) {
            .alert-validate::before {
                padding: 0 10px 0 10px;
            }

            .true-validate::after,
            .btn-hide-validate {
                right: 0px;
                width: 30px;
            }
        }


        /*==================================================================
            [ Restyle Select2 ]*/

        .select2-container {
            display: block;
            max-width: 100% !important;
            width: auto !important;
        }

        .select2-container .select2-selection--single {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            background-color: transparent;
            border: none;
            height: 40px;
            outline: none;
            position: relative;
        }

        /*------------------------------------------------------------------
            [ in select ]*/
        .select2-container .select2-selection--single .select2-selection__rendered {
            /* font-family: Montserrat-SemiBold; */
            font-size: 18px;
            color: #555555;
            line-height: 1.2;
            padding-left: 0px;
            background-color: transparent;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 100%;
            top: 50%;
            transform: translateY(-50%);
            right: 0px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .select2-selection__arrow b {
            display: none;
        }

        .select2-selection__arrow::before {
            content: '\f312';
            /* font-family: Material-Design-Iconic-Font; */
            font-size: 18px;
            color: #555555;
        }


        /*------------------------------------------------------------------
            [ Dropdown option ]*/
        .select2-container--open .select2-dropdown {
            z-index: 1251;
            width: calc(100% + 2px);
            border: 0px solid transparent;
            border-radius: 10px;
            overflow: hidden;
            background-color: white;
            left: -24px;

            box-shadow: 0 3px 10px 0px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0 3px 10px 0px rgba(0, 0, 0, 0.2);
            -webkit-box-shadow: 0 3px 10px 0px rgba(0, 0, 0, 0.2);
            -o-box-shadow: 0 3px 10px 0px rgba(0, 0, 0, 0.2);
            -ms-box-shadow: 0 3px 10px 0px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 576px) {
            .select2-container--open .select2-dropdown {
                left: -12px;
            }
        }

        .select2-dropdown--above {
            top: -38px;
        }

        .select2-dropdown--below {
            top: 10px;
        }

        .select2-container .select2-results__option[aria-selected] {
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 24px;
        }

        @media (max-width: 576px) {
            .select2-container .select2-results__option[aria-selected] {
                padding-left: 12px;
            }
        }

        .select2-container .select2-results__option[aria-selected="true"] {
            background: #00ad5f;
            color: white;
        }

        .select2-container .select2-results__option--highlighted[aria-selected] {
            background: #00ad5f;
            color: white;
        }

        .select2-results__options {
            /* font-family: Montserrat-SemiBold; */
            font-size: 14px;
            color: #555555;
            line-height: 1.2;
        }

        .select2-search--dropdown .select2-search__field {
            border: 1px solid #aaa;
            outline: none;
            /* font-family: Poppins-Regular; */
            font-size: 15px;
            color: #333333;
            line-height: 1.2;
        }

        .wrap-input100 .dropDownSelect2 .select2-container--open {
            width: 100% !important;
        }

        .wrap-input100 .dropDownSelect2 .select2-dropdown {
            width: calc(100% + 2px) !important;
        }

        /*==================================================================
            [ Restyle Radio ]*/
        .wrap-contact100-form-radio {
            width: 100%;
            padding: 15px 25px 0 25px;
        }

        .contact100-form-radio {
            padding-bottom: 5px;
        }

        .input-radio100 {
            display: none;
        }

        .label-radio100 {
            display: block;
            position: relative;
            padding-left: 28px;
            cursor: pointer;
            /* font-family: Montserrat-SemiBold; */
            font-size: 18px;
            color: #e4e0e0;
            line-height: 1.2;
        }

        .label-radio100::before {
            content: "";
            display: block;
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 1px solid #cdcdcd;
            background: #fff;
            left: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .label-radio100::after {
            content: "";
            display: block;
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 6px solid transparent;
            background: #00ad5f;
            -moz-background-clip: padding;
            -webkit-background-clip: padding;
            background-clip: padding-box;
            left: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            display: none;

        }

        .input-radio100:checked+.label-radio100::after {
            display: block;
        }


        /*==================================================================
            [ rs NoUI ]*/
        .wrap-contact100-form-range {
            width: 100%;
            padding: 20px 25px 57px 25px;
        }

        .contact100-form-range-value {
            /* font-family: Montserrat-SemiBold; */
            font-size: 18px;
            color: #f0e9e9;
            line-height: 1.2;
            padding-top: 10px;
            padding-bottom: 30px;
        }

        .contact100-form-range-value input {
            display: none;
        }

        #filter-bar {
            height: 20px;
            border: 1px solid #e6e6e6;
            border-radius: 9px;
            background-color: #f7f7f7;
        }

        #filter-bar .noUi-connect {
            border: 1px solid #e6e6e6;
            border-radius: 9px;
            background-color: #00ad5f;
            box-shadow: none;
        }

        #filter-bar .noUi-handle {
            width: 40px;
            height: 36px;
            border: 1px solid #cccccc;
            border-radius: 9px;
            background: #f5f5f5;
            cursor: pointer;
            box-shadow: none;
            outline: none;
            top: -8px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #filter-bar .noUi-handle.noUi-handle-lower {
            left: -1px;
        }

        #filter-bar .noUi-handle.noUi-handle-upper {
            left: -39px;
        }

        #filter-bar .noUi-handle:before {
            content: "";
            display: block;
            position: unset;
            height: 12px;
            width: 9px;
            background-color: transparent;
            border-left: 2px solid #cccccc;
            border-right: 2px solid #cccccc;
        }

        #filter-bar .noUi-handle:after {
            display: none;
        }

        @media (max-width: 576px) {
            .wrap-contact100-form-range {
                padding: 20px 0px 57px 0px;
            }

            .wrap-contact100-form-radio {
                padding: 15px 0px 0 0px;
            }
        }

        #wrapper {
            background-image: url('/images/memberbg2.png');
            background-size: cover;
            background-repeat: no-repeat;
            color: white;
        }

    </style>
@endpush