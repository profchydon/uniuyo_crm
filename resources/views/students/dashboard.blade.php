
@extends('layouts.master')


@section('content')

<div class="wrapper">

@include('layouts.sidebar')

<div class="main-panel">

@include('layouts.nav')
<div class="content">
    <div class="container-fluid">
        <div class="row">

            @include('messages')

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="orange">
                        <i class="material-icons">email</i>
                    </div>
                    <div class="card-content">
                        <p class="category">CONTACT CUSTOMER CARE</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="" class="contact-now" data-toggle="modal" data-target=".customercare">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="green">
                        <i class="material-icons">remove_red_eye</i>
                    </div>
                    <div class="card-content">
                        <p class="category">CLICK TO VIEW RESULT</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="" class="view-now">View Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="red">
                        <i class="material-icons">people</i>
                    </div>
                    <div class="card-content">
                        <p class="category">BOOK AN APPOINTMENT</p>

                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="" class="book-now" data-toggle="modal" data-target=".appointment">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="blue">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <div class="card-content">
                        <p class="category">BOOK AN APPOINTMENT</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="" class="book-now">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-6 col-md-12">

                <div class="card card-nav-tabs">

                    <div class="card-header" data-background-color="purple">

                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">

                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="active">
                                        <a href="#profile" data-toggle="tab">
                                            <i class="material-icons">info_outline</i> News
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#messages" data-toggle="tab">
                                            <i class="material-icons">code</i> Website
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#settings" data-toggle="tab">
                                            <i class="material-icons">cloud</i> Server
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>

                    <div class="card-content">
                        <div class="tab-content">
                            <div class="tab-pane active" id="profile">
                                <div class="row news-row">

                                    <div class="col-md-3">
                                        <img src="/img/uniuyo1.png" alt="news_logo"  class="img img-responsive"/>
                                    </div>

                                    <div class="col-md-9">
                                        <p>
                                          This is to inform you that the Postgraduate screening exercise which was postponed due to strike action by the Staff Unions of Universities has been rescheduled to hold from Monday, October 09, 2017 to Friday, October 13, 2017.  The schedule is hereby attached and also shown below <a href="#" data-toggle="modal" data-target=".news" class="read-more">read more..</a>
                                        </p>
                                    </div>
                                </div>

                                <hr>

                                <div class="row news-row">

                                    <div class="col-md-3">
                                        <img src="/img/uniuyo1.png" alt="news_logo"  class="img img-responsive"/>
                                    </div>

                                    <div class="col-md-9">
                                        <p>
                                          The National Universities Commission (NUC) Accreditation Team to the Department of Architecture, Faculty of Environmental Studies departed University of Uyo, Tuesday June 20, 2017 after an exit meeting with the University Management held in the office of the Vice-Chancellor.
                                          <a href="#" data-toggle="modal" data-target=".news2" class="read-more">read more..</a>
                                        </p>
                                    </div>
                                </div>

                                <hr>

                                <div class="row news-row">

                                    <div class="col-md-3">
                                        <img src="/img/pix.jpg" alt="news_logo"  class="img img-responsive"/>
                                    </div>

                                    <div class="col-md-9">
                                        <p>
                                          The National Universities Commission (NUC) Accreditation Team to the Department of Architecture, Faculty of Environmental Studies departed University of Uyo, Tuesday June 20, 2017 after an exit meeting with the University Management held in the office of the Vice-Chancellor.
                                          <a href="#" data-toggle="modal" data-target=".news3" class="read-more">read more..</a>
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane" id="messages">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                            </td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="settings">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                            </td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="orange">
                        <h4 class="title">Employees Stats</h4>
                        <p class="category">New employees on 15th September, 2016</p>
                    </div>
                    <div class="card-content table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Salary</th>
                                <th>Country</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dakota Rice</td>
                                    <td>$36,738</td>
                                    <td>Niger</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Minerva Hooper</td>
                                    <td>$23,789</td>
                                    <td>Curaçao</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sage Rodriguez</td>
                                    <td>$56,142</td>
                                    <td>Netherlands</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Philip Chaney</td>
                                    <td>$38,735</td>
                                    <td>Korea, South</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection
