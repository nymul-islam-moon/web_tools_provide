@extends('master')
@section('title')
    Dashboard
@endsection

@section('content')
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
      <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Sales Monitoring</li>
            </ol>
          </nav>
          <h4 class="mg-b-0 tx-spacing--1">Welcome to Dashboard</h4>
        </div>
        <div class="d-none d-md-block">
          <button class="btn btn-sm pd-x-15 btn-white btn-uppercase"><i data-feather="mail" class="wd-10 mg-r-5"></i> Email</button>
          <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="printer" class="wd-10 mg-r-5"></i> Print</button>
          <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i data-feather="file" class="wd-10 mg-r-5"></i> Generate Report</button>
        </div>
      </div>

      <div class="row row-xs">

        <div class="col-lg-5 col-xl-5  mg-b-10">
          <div class="card">
            <div class="card-body pd-20" style="height: 270px;">
              <div class="user-w">
                <div class="d-sm-flex mg-b-10">
                  <div class="media">
                    <div class="wd-40 wd-md-50 ht-40 ht-md-50 bg-indigo tx-white mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded op-6">
                      <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="media-body">
                      <h6 class="tx-sans tx-uppercase tx-10 tx-spacing-1 tx-color-03 tx-semibold tx-nowrap mg-b-5 mg-md-b-8">Balance</h6>
                      <h4 class="tx-20 tx-sm-18 tx-md-24 tx-normal tx-rubik mg-b-0">$1,958,104</h4>
                    </div>
                  </div>

                  <div class="media mg-t-20 mg-sm-t-0 mg-sm-l-15 mg-md-l-40">
                    <div class="wd-40 wd-md-50 ht-40 ht-md-50 bg-pink tx-white mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded op-5">
                      <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                    <div class="media-body">
                      <h6 class="tx-sans tx-uppercase tx-10 tx-spacing-1 tx-color-03 tx-semibold mg-b-5 mg-md-b-8">Orders</h6>
                      <h4 class="tx-20 tx-sm-18 tx-md-24 tx-normal tx-rubik mg-b-0">$234,769<small>.50</small></h4>
                    </div>
                  </div>

                </div>
              </div>
              <div class="user-w">
                <div class="d-sm-flex mg-b-10">
                  <div class="media">
                    <div class="wd-40 wd-md-50 ht-40 ht-md-50 bg-success tx-white mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded op-6">
                      <i class="fa-solid fa-message"></i>
                    </div>
                    <div class="media-body">
                      <h6 class="tx-sans tx-uppercase tx-10 tx-spacing-1 tx-color-03 tx-semibold tx-nowrap mg-b-5 mg-md-b-8">Tickets</h6>
                      <h4 class="tx-20 tx-sm-18 tx-md-24 tx-normal tx-rubik mg-b-0">$1,958,104</h4>
                    </div>
                  </div>

                  <div class="media mg-t-20 mg-sm-t-0 mg-sm-l-15 mg-md-l-40">
                    <div class="wd-40 wd-md-50 ht-40 ht-md-50 bg-info tx-white mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded op-5">
                      <i class="fa-regular fa-file-chart-column"></i>
                    </div>
                    <div class="media-body">
                      <h6 class="tx-sans tx-uppercase tx-10 tx-spacing-1 tx-color-03 tx-semibold mg-b-5 mg-md-b-8">Reports</h6>
                      <h4 class="tx-20 tx-sm-18 tx-md-24 tx-normal tx-rubik mg-b-0">$234,769<small>.50</small></h4>
                    </div>
                  </div>

                </div>
              </div>
              <div class="user-w">
                <div class="d-sm-flex mg-b-10">
                  <div class="media">
                    <div class="wd-40 wd-md-50 ht-40 ht-md-50 bg-primary tx-white mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded op-6">
                      <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="media-body">
                      <h6 class="tx-sans tx-uppercase tx-10 tx-spacing-1 tx-color-03 tx-semibold tx-nowrap mg-b-5 mg-md-b-8">Referrals</h6>
                      <h4 class="tx-20 tx-sm-18 tx-md-24 tx-normal tx-rubik mg-b-0">$1,958,104</h4>
                    </div>
                  </div>

                  <div class="media mg-t-20 mg-sm-t-0 mg-sm-l-15 mg-md-l-40">
                    <div class="wd-40 wd-md-50 ht-40 ht-md-50 bg-orange tx-white mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded op-5">
                      <i class="fa-solid fa-pen"></i>
                    </div>
                    <div class="media-body">
                      <h6 class="tx-sans tx-uppercase tx-10 tx-spacing-1 tx-color-03 tx-semibold mg-b-5 mg-md-b-8">Requests</h6>
                      <h4 class="tx-20 tx-sm-18 tx-md-24 tx-normal tx-rubik mg-b-0">$234,769<small>.50</small></h4>
                    </div>
                  </div>

                </div>
              </div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div>

        <div class="col-lg-3 col-xl-3  mg-b-10">
          <div class="card">
            <div class="card-header pd-t-20 pd-b-0 bd-b-0">
              <h6 class="mg-b-5">Actions</h6>
            </div><!-- card-header -->
            <div class="card-body pd-20" style="max-height: 226px; overflow: scroll;">
              <div class="accordion accordion-style2">
                <h6>Our Domains</h6>
                <div>LuFix.to || LuFix.io || LuFix.pw || LuFix.site || LuFix.pro
                  Make sure you Save Them!</div>
                <h6> Become a Seller </h6>
                <div>...</div>
                <h6>Terms of Service</h6>
                <div>...</div>
                <h6> Contact Us </h6>
                <div>...</div>
              </div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div>

        <div class="col-lg-4 col-xl-4  mg-b-10">
          <div class="card">
            <div class="card-header pd-t-20 pd-b-0 bd-b-0">
              <h6 class="mg-b-5">Products Overview</h6>
            </div><!-- card-header -->
            <div class="card-body pd-20">
              <div id="carouselExample2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExample3" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExample3" data-slide-to="1"></li>
                  <li data-target="#carouselExample3" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://via.placeholder.com/500x281" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Heading</h5>
                      <p>Description</p>
                    </div>
                  </div>
                  <div class="carousel-item ">
                    <img src="https://via.placeholder.com/500x281" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Heading-1</h5>
                      <p>Description-2</p>
                    </div>
                  </div>
                  <!-- more items goes here -->
                </div>
                <a class="carousel-control-prev" href="#carouselExample2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"><i data-feather="chevron-left"></i></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"><i data-feather="chevron-right"></i></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div>
      </div>
      <div class="row row-xs">
        <div class="col-md-6 mg-b-10">
          <div class="card">
            <div class="card-header pd-t-10 pd-b-10">
              <h6 class="mg-b-5 mg-t-5"> <i class="fa-light fa-bullhorn mr-2"></i>Latest News</h6>
            </div>
            <!-- card-header -->
            <div class="card-body pd-20" style="max-height: 388px; overflow: scroll;">
                <div class="laters-news">
                  <div class="bg-white shadow-sm p-3 rounded bd-l bd-5 bd-primary mb-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="card-title text-primary"><i class="fa-light fa-star ml-2"></i> Card title that wraps to a new line</h5>
                      <span class="text-muted">22-09-2022 10:00</span>
                    </div>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                  <div class="bg-white shadow-sm p-3 rounded bd-l bd-5 bd-primary mb-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="card-title text-primary"><i class="fa-light fa-star ml-2"></i> Card title that wraps to a new line</h5>
                      <span class="text-muted">22-09-2022 10:00</span>
                    </div>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                  <div class="bg-white shadow-sm p-3 rounded bd-l bd-5 bd-primary mb-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="card-title text-primary"><i class="fa-light fa-star ml-2"></i> Card title that wraps to a new line</h5>
                      <span class="text-muted">22-09-2022 10:00</span>
                    </div>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                  <div class="bg-white shadow-sm p-3 rounded bd-l bd-5 bd-primary mb-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="card-title text-primary"><i class="fa-light fa-star ml-2"></i> Card title that wraps to a new line</h5>
                      <span class="text-muted">22-09-2022 10:00</span>
                    </div>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>


                </div>
            </div>
            <!-- card-body -->
          </div>
          <!-- card -->
        </div>
        <div class="col-6 mg-b-10">
          <div class="card">
            <div class="card-header pd-t-10 pd-b-10">
              <h6 class="mg-b-5 mg-t-5"> <i class="fa-light fa-bullhorn mr-2"></i>Available Products</h6>
            </div>
            <!-- card-header -->
            <div class="card-body pd-20">
              <canvas id="myChart_s" height="200"></canvas>
            </div>
          </div>
        </div>

      </div>

      <div class="row row-xs">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mg-b-0">Last Order</h6>
              <div class="tx-13 d-flex align-items-center">
                <span class="mg-r-5"></span> <a href="" class="d-flex align-items-center link-03 lh-0">Latest 30 Order <i class="icon ion-ios-arrow-down mg-l-5"></i></a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-dashboard mg-b-0">
                <thead>
                <tr>
                  <th class="text-center">ID</th>
                  <th class="text-center">Item</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Details</th>
                  <th class="text-right">Date</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="tx-medium text-center">1</td>
                  <td class="text-center tx-teal">CPANEL </td>
                  <td class="text-center tx-pink">Processing</td>
                  <td class="tx-medium text-center">$28,670.90 <span class="mg-l-5 tx-10 tx-normal tx-success"><i class="icon ion-md-arrow-up"></i> 4.5%</span></td>
                  <td class="text-right tx-color-03 tx-normal">03/05/2018</td>
                </tr>
                <tr>
                  <td class="tx-medium text-center">1</td>
                  <td class="text-center tx-teal">CPANEL </td>
                  <td class="text-center tx-pink">Processing</td>
                  <td class="tx-medium text-center">$28,670.90 <span class="mg-l-5 tx-10 tx-normal tx-success"><i class="icon ion-md-arrow-up"></i> 4.5%</span></td>
                  <td class="text-right tx-color-03 tx-normal">03/05/2018</td>
                </tr>
                <tr>
                  <td class="tx-medium text-center">1</td>
                  <td class="text-center tx-teal">CPANEL </td>
                  <td class="text-center tx-pink">Processing</td>
                  <td class="tx-medium text-center">$28,670.90 <span class="mg-l-5 tx-10 tx-normal tx-success"><i class="icon ion-md-arrow-up"></i> 4.5%</span></td>
                  <td class="text-right tx-color-03 tx-normal">03/05/2018</td>
                </tr>
                <tr>
                  <td class="tx-medium text-center">1</td>
                  <td class="text-center tx-teal">CPANEL </td>
                  <td class="text-center tx-pink">Processing</td>
                  <td class="tx-medium text-center">$28,670.90 <span class="mg-l-5 tx-10 tx-normal tx-success"><i class="icon ion-md-arrow-up"></i> 4.5%</span></td>
                  <td class="text-right tx-color-03 tx-normal">03/05/2018</td>
                </tr>
                <tr>
                  <td class="tx-medium text-center">1</td>
                  <td class="text-center tx-teal">CPANEL </td>
                  <td class="text-center tx-pink">Processing</td>
                  <td class="tx-medium text-center">$28,670.90 <span class="mg-l-5 tx-10 tx-normal tx-success"><i class="icon ion-md-arrow-up"></i> 4.5%</span></td>
                  <td class="text-right tx-color-03 tx-normal">03/05/2018</td>
                </tr>
                <tr>
                  <td class="tx-medium text-center">1</td>
                  <td class="text-center tx-teal">CPANEL </td>
                  <td class="text-center tx-pink">Processing</td>
                  <td class="tx-medium text-center">$28,670.90 <span class="mg-l-5 tx-10 tx-normal tx-success"><i class="icon ion-md-arrow-up"></i> 4.5%</span></td>
                  <td class="text-right tx-color-03 tx-normal">03/05/2018</td>
                </tr>
                <tr>
                  <td class="tx-medium text-center">1</td>
                  <td class="text-center tx-teal">CPANEL </td>
                  <td class="text-center tx-pink">Processing</td>
                  <td class="tx-medium text-center">$28,670.90 <span class="mg-l-5 tx-10 tx-normal tx-success"><i class="icon ion-md-arrow-up"></i> 4.5%</span></td>
                  <td class="text-right tx-color-03 tx-normal">03/05/2018</td>
                </tr>
                <tr>
                  <td class="tx-medium text-center">1</td>
                  <td class="text-center tx-teal">CPANEL </td>
                  <td class="text-center tx-pink">Processing</td>
                  <td class="tx-medium text-center">$28,670.90 <span class="mg-l-5 tx-10 tx-normal tx-success"><i class="icon ion-md-arrow-up"></i> 4.5%</span></td>
                  <td class="text-right tx-color-03 tx-normal">03/05/2018</td>
                </tr>
                <tr>
                  <td class="tx-medium text-center">1</td>
                  <td class="text-center tx-teal">CPANEL </td>
                  <td class="text-center tx-pink">Processing</td>
                  <td class="tx-medium text-center">$28,670.90 <span class="mg-l-5 tx-10 tx-normal tx-success"><i class="icon ion-md-arrow-up"></i> 4.5%</span></td>
                  <td class="text-right tx-color-03 tx-normal">03/05/2018</td>
                </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer text-right">
              <button type="button" class="btn btn-secondary btn-sm m-auto">View All</button>
            </div>
          </div>

        </div>
        <div class="col-md-3">
          <div class=" message_section">
            <div class="row">
              <div class="new_message_head">
                <div class="pull-left"><button><i class="fa fa-plus-square-o" aria-hidden="true"></i> New Message</button></div><div class="pull-right"><div class="dropdown">
                <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-cogs" aria-hidden="true"></i>  Setting
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Logout</a></li>
                </ul>
              </div></div>
              </div><!--new_message_head-->

              <div class="chat_area">
                <ul class="list-unstyled">
                  <li class="left d-flex ">
                   <span class="chat-img1 ">
                    <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
                   </span>
                    <div class="chat-body1 clearfix">
                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                      <div class="chat_time pull-right">09:40PM</div>
                    </div>
                  </li>
                  <li class="left d-flex ">
                   <span class="chat-img1 pull-left">
                   <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
                   </span>
                    <div class="chat-body1 clearfix">
                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                      <div class="chat_time pull-right">09:40PM</div>
                    </div>
                  </li>
                  <li class="left d-flex ">
                   <span class="chat-img1 pull-left">
                   <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
                   </span>
                    <div class="chat-body1 clearfix">
                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                      <div class="chat_time pull-right">09:40PM</div>
                    </div>
                  </li>
                  <li class="left clearfix admin_chat">
                   <span class="chat-img1 pull-right">
                   <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
                   </span>
                    <div class="chat-body1 clearfix">
                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                      <div class="chat_time pull-left">09:40PM</div>
                    </div>
                  </li>
                  <li class="left clearfix admin_chat">
                   <span class="chat-img1 pull-right">
                   <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
                   </span>
                    <div class="chat-body1 clearfix">
                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                      <div class="chat_time pull-left">09:40PM</div>
                    </div>
                  </li>




                </ul>
              </div><!--chat_area-->
              <div class="message_write">
                <textarea class="form-control" placeholder="type a message"></textarea>
                <div class="clearfix"></div>
                <div class="chat_bottom"><a href="#" class="pull-left upload_btn"><i class="fa fa-cloud-upload" aria-hidden="true"></i>
                  Add Files</a>
                  <a href="#" class="pull-right btn btn-success">
                    Send</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
    <!-- container -->
  </div>
@endsection
