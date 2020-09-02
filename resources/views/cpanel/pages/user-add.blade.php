@extends('cpanel/layouts/contentLayoutMaster') 

@section('title', 'إضافة مستخدم جديد') 


@section('content')
<!-- users edit start -->
<section class="users-edit">
  <div class="card">
    <div class="card-content">
      <div class="card-body">
        <ul class="nav nav-tabs mb-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account"
              aria-controls="account" role="tab" aria-selected="true">
              <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">المعلومات الاساسية </span>
            </a>
          </li>
          
 
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
            <!-- users edit media object start -->
            
            <!-- users edit media object ends -->
            <!-- users edit account form start -->
            <form novalidate>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <div class="controls">
                      <label>اسم المستخد </label>
                      <input type="text" class="form-control" placeholder="Username" value="adoptionism744" required
                        data-validation-required-message="This username field is required">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <label>الاسم </label>
                      <input type="text" class="form-control" placeholder="Name" value="Angelo Sashington" required
                        data-validation-required-message="This name field is required">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <label>البريد الالكتروني </label>
                      <input type="email" class="form-control" placeholder="Email" value="angelo@sashington.com"
                        required data-validation-required-message="This email field is required">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <label>كلمة السر</label>
                      <input type="email" class="form-control" placeholder="password" value="********"
                        required data-validation-required-message="This email field is required">
                    </div>
                  </div>
             

                </div>
                <div class="col-12 col-sm-6">

                  <div class="form-group">
                    <label>الحالة </label>
                    <select class="form-control">
                      <option>نشيط</option>
                      <option>ممنوع</option>
                      <option>معطل</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>وظيفة</label>
                    <select class="form-control">
                      <option>مشرف</option>
                      <option>محرر</option>
                      <option>مدير</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>الجنس</label>
                    <ul class="list-unstyled mb-0">
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="vueradio" checked value="false">
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                           ذكر
                          </div>
                        </fieldset>
                      </li>
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="vueradio" value="false">
                            <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span>
                            انتى
                          </div>
                        </fieldset>
                      </li>
                  

                    </ul>
                  </div>
                  
                  <div class="form-group" style="padding-top: 10px;">
                    <div class="controls">
                      <label>تاكيد كلمة السر</label>
                      <input type="email" class="form-control" placeholder="password" value="*******"
                        required data-validation-required-message="التاكد  من كلمة السر ">
                    </div>
                  </div>
               
                </div>
             <!-- permissions start -->
    <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>الصلاحيات 
              </h6>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th>الشاشات </th>
                    <th>قراءة</th>
                    <th>كتابة</th>
                    <th>اضافة </th>
                    <th>حذف</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>المستخدم </td>
                    <td>
                      <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox1"
                          class="custom-control-input" checked>
                        <label class="custom-control-label" for="users-checkbox1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox2"
                          class="custom-control-input"><label class="custom-control-label" for="users-checkbox2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox3"
                          class="custom-control-input"><label class="custom-control-label" for="users-checkbox3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox4"
                          class="custom-control-input" checked>
                        <label class="custom-control-label" for="users-checkbox4"></label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>المنتجات </td>
                    <td>
                      <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox5"
                          class="custom-control-input"><label class="custom-control-label" for="users-checkbox5"></label>
                      </div>
                    </td>
                    <td>
                      <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox6"
                          class="custom-control-input" checked>
                        <label class="custom-control-label" for="users-checkbox6"></label>
                      </div>
                    </td>
                    <td>
                      <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox7"
                          class="custom-control-input"><label class="custom-control-label" for="users-checkbox7"></label>
                      </div>
                    </td>
                    <td>
                      <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox8"
                          class="custom-control-input" checked>
                        <label class="custom-control-label" for="users-checkbox8"></label>
                      </div>
                    </td>
                  </tr>
                  
       
                  <tr>
                      <td>عرض الشرائح</td>
                      <td>
                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox9"
                            class="custom-control-input" checked>
                          <label class="custom-control-label" for="users-checkbox9"></label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox10"
                            class="custom-control-input" checked>
                          <label class="custom-control-label" for="users-checkbox10"></label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox11"
                            class="custom-control-input"><label class="custom-control-label" for="users-checkbox11"></label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox12"
                            class="custom-control-input"><label class="custom-control-label" for="users-checkbox12"></label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>الاخبار والاعلانات </td>
                      <td>
                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox9"
                            class="custom-control-input" checked>
                          <label class="custom-control-label" for="users-checkbox9"></label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox10"
                            class="custom-control-input" checked>
                          <label class="custom-control-label" for="users-checkbox10"></label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox11"
                            class="custom-control-input"><label class="custom-control-label" for="users-checkbox11"></label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox12"
                            class="custom-control-input"><label class="custom-control-label" for="users-checkbox12"></label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>بوابة الوظائف</td>
                      <td>
                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox9"
                            class="custom-control-input" checked>
                          <label class="custom-control-label" for="users-checkbox9"></label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox10"
                            class="custom-control-input" checked>
                          <label class="custom-control-label" for="users-checkbox10"></label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox11"
                            class="custom-control-input"><label class="custom-control-label" for="users-checkbox11"></label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox12"
                            class="custom-control-input"><label class="custom-control-label" for="users-checkbox12"></label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>الاحصائيات </td>
                      <td>
                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox9"
                            class="custom-control-input" checked>
                          <label class="custom-control-label" for="users-checkbox9"></label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox10"
                            class="custom-control-input" checked>
                          <label class="custom-control-label" for="users-checkbox10"></label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox11"
                            class="custom-control-input"><label class="custom-control-label" for="users-checkbox11"></label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox12"
                            class="custom-control-input"><label class="custom-control-label" for="users-checkbox12"></label>
                        </div>
                      </td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                  <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">حفظ </button>
                  
                </div>
              </div>
            </form>
            <!-- users edit account form ends -->
          </div>

          <div class="tab-pane" id="social" aria-labelledby="social-tab" role="tabpanel">

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- users edit ends -->
@endsection