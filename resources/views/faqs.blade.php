
@extends('layouts.master')


@section('content')

<div class="wrapper">

@include('layouts.sidebar')

<div class="main-panel">

@include('layouts.nav')
<div class="content">
  <div class="container-fluid">
      <div class="card">

          <div class="card-header" data-background-color="purple">
              <h4 class="faq-title text-center">Frequently Asked Questions</h4>
          </div>

          <div class="card-content">
              <div class="row">

                  <div class="col-md-6">

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Q: How can i check my semester results?
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            Answer:  <br> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Collapsible Group Item #2
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Collapsible Group Item #3
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-heading">Panel heading without title</div>
                        <div class="panel-body">
                          Panel content
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                          Panel content
                        </div>
                      </div>
                  </div>
              </div>
              <br>
              <br>
              <!-- <div class="places-buttons">
                  <div class="row">
                      <div class="col-md-6 col-md-offset-3 text-center">
                          <h5>Notifications Places
                              <p class="category">Click to view notifications</p>
                          </h5>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                          <div class="col-md-4">
                              <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','left')">Top Left</button>
                          </div>
                          <div class="col-md-4">
                              <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','center')">Top Center</button>
                          </div>
                          <div class="col-md-4">
                              <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','right')">Top Right</button>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                          <div class="col-md-4">
                              <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','left')">Bottom Left</button>
                          </div>
                          <div class="col-md-4">
                              <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','center')">Bottom Center</button>
                          </div>
                          <div class="col-md-4">
                              <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','right')">Bottom Right</button>
                          </div>
                      </div>
                  </div>
              </div> -->
          </div>
      </div>
  </div>
</div>
</div>
</div>

@endsection
