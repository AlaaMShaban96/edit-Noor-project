@extends('layouts/contentLayoutMaster') 

@section('title', 'المستخدم ') 



@section('content')
<!-- page users view start -->
<section class="page-users-view">
  <div class="row">
    <!-- account start -->
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title">ملف المستخدم </div>
          <div class="row">
           
            <div class="col-sm-4 col-12">
              <table>
                <tr>
                  <td class="font-weight-bold">اسم المستخدم </td>
                  <td>adoptionism744</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">الاسم </td>
                  <td>Angelo Sashington</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">البريد الالكتروني </td>
                  <td>angelo@sashington.com</td>
                </tr>
              </table>
            </div>
            <div class="col-md-6 col-12 ">
              <table class="ml-0 ml-sm-0 ml-lg-0">
                <tr>
                  <td class="font-weight-bold">الحالة </td>
                  <td>active</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">نوع الصلاحيات </td>
                  <td>admin</td>
                </tr>
               
              </table>
            </div>
            <div class="col-12">
              <a href="app-user-edit" class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i>تعديل </a>
              <button class="btn btn-outline-danger"><i class="feather icon-trash-2"></i> حذف</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- account end -->
    <!-- information start -->
    <div class="col-md-12 col-12 ">
      <div class="card">
        <div class="card-body">
          <div class="card-title mb-2">المعلومات الاساسية </div>
          <table>
            <tr>
              <td class="font-weight-bold">تاريخ الميلاد </td>
              <td>28 January 1998
              </td>
            </tr>
            <tr>
              <td class="font-weight-bold">رقم الهاتف</td>
              <td>+65958951757</td>
            </tr>
            
           
            <tr>
              <td class="font-weight-bold">الجنس</td>
              <td>female</td>
            </tr>
            <tr>
              <td class="font-weight-bold">البلد </td>
              <td>email, message, phone
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <!-- information start -->
   
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
    <!-- permissions end -->
  </div>
</section>
<!-- page users view end -->
@endsection