@extends('website.layouts.master')
@section('titel','job')

@section('content')
<div class="container" style="padding-bottom: 50px; padding-top: 50px;">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="main-title text-center">
          <h2>To offer you the job</h2>
          <p>Please fill in all data correctly!</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">


        <div class="appointment-form" style=" border: solid 2px rgba(0,0,0,0.05); padding: 20px;">

          <div class="form">

            <section class="bgcolor-a">
              <p class="error" id="error" style="display:none;"></p>
              <p class="success" id="success" style="display:none;"></p>

              <form name="appointment_form" id="appointment_form" method="post" action="#" onSubmit="return false">
                <span class="input input--kohana" style="width: 100%;">
                  <input class="input__field input__field--kohana" type="text" id="input-29" name="input-29" />
                  <label class="input__label input__label--kohana" for="input-29">
                    <i class="icon-user6 icon icon--kohana"></i>
                    <span class="input__label-content input__label-content--kohana">your name
                    </span>
                  </label>
                </span>
                <span class="input input--kohana " style="width: 100%;">
                  <input class="input__field input__field--kohana" type="text" id="input-30" name="input-30" />
                  <label class="input__label input__label--kohana" for="input-30">
                    <i class="icon-dollar icon icon--kohana"></i>
                    <span class="input__label-content input__label-content--kohana">E-mail</span>
                  </label>
                </span>

                <span class="input input--kohana last" style="width: 100%;">
                  <input class="input__field input__field--kohana" type="text" id="input-31" name="input-31" />
                  <label class="input__label input__label--kohana" for="input-31">
                    <i class="icon-phone5 icon icon--kohana"></i>
                    <span class="input__label-content input__label-content--kohana">Phone</span>
                  </label>
                </span>
                <span class="input input--kohana last" style="width: 100%;">
                  <input class="input__field input__field--kohana" type="text" id="input-31" name="input-31" />
                  <label class="input__label input__label--kohana" for="input-31">
                    <i class="icon-location icon icon--kohana"></i>
                    <span class="input__label-content input__label-content--kohana">address
                    </span>
                  </label>
                </span>
                <span class="input input--kohana last" style="width: 100%;">
                  <select class='input__field input__field--kohana' id="input-333" name="input-333" name='genderroma'
                    style="color: black;">

                    <option> Tripoli </option>
                    <option> Misurata </option>
                    <option> Benghazi </option>
                  </select>


                  <label class="input__label input__label--kohana" for="input-333">
                    <i class="icon-location icon icon--kohana"></i>
                    <span class="input__label-content input__label-content--kohana">city
                    </span>
                  </label>
                </span>
                <br>
                <span class="input input--kohana" style="width: 100%;">
                  <input class="input__field input__field--kohana" type="text" id="datepicker" id="input-85"
                    name="input-85" placeholder="تاريخ الميلاد " onClick="removeChecks();" name="datepicker" />
                  <label class="input__label input__label--kohana" for="input-85">
                    <i class="icon icon icon--kohana"></i>
                    <span class="input__label-content input__label-content--kohana">beard date
                    </span>
                  </label>
                </span>


                <span class="input input--kohana"
                  style=" border: solid 2px rgba(0,0,0,0.05); height: 80px;width: 100%;">
                  <div class="file-upload-wrapper">

                    <input type="file" id="input-file-now-custom-2" class="file-upload" placeholder="CV "
                      data-height="2500" />
                      
                  </div>
                </span>
                <input name="submit_appointment" type="submit" value="send" onClick="validateAppointment();">


              </form>

            </section>






          </div>

        </div>

      </div>
      <div class="col-md-2"></div>
    </div>


  </div>



</div>
@endsection
