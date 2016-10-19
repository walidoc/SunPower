


@extends('layouts.admin')

@section('content')


     @if (count($customers) > 0)
        <br><br>
        <div class="container">
         <div class="well col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                @foreach ($customers as $customer)
                <div class="row user-row">
                    <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                        <img class="img-circle"
                             src="http://www.doktorfitik.com/wp-content/uploads/2016/01/profile-image-50x50.png"
                             alt="User Pic">
                    </div>
                    <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                        <strong>{{ $customer->name }}</strong><br>
                        <span class="text-muted">User State: {{ $customer->gouvernorat }}</span>
                    </div>
                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".{{ $customer->name }}">
                        <i class="glyphicon glyphicon-chevron-down text-muted"></i>
                    </div>
                </div>
                <div class="row user-infos {{ $customer->name }}">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Customer informations</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                                        <img class="img-circle"
                                             src="http://www.federconsumatoritoscana.it/sites/default/files/noavatar.gif"
                                             alt="User Pic">
                                    </div>
                                    <div class="col-xs-2 col-sm-2 hidden-md hidden-lg">
                                        <img class="img-circle"
                                             src="http://www.federconsumatoritoscana.it/sites/default/files/noavatar.gif"
                                             alt="User Pic">
                                    </div>
                                    <div class="col-xs-10 col-sm-10 hidden-md hidden-lg">
                                        <strong>{{ $customer->name }}</strong><br>
                                        <dl>
                                            <dt>Customer State:</dt>
                                            <dd>{{ $customer->gouvernorat }}</dd>
                                            <dt> Address:</dt>
                                            <dd>{{ $customer->address }}</dd>
                                            <dt>Zipcode:</dt>
                                            <dd>{{ $customer->zipcode }}</dd>
                                            <dt>Email:</dt>
                                            <dd>{{ $customer->email }}</dd>
                                            <dt>Tel:</dt>
                                            <dd>{{ $customer->tel }}</dd>
                                        </dl>
                                    </div>
                                    <div class=" col-md-9 col-lg-9 hidden-xs hidden-sm">
                                        <strong>{{ $customer->name }}</strong><br>
                                        <table class="table table-user-information">
                                            <tbody>
                                            <tr>
                                                <td>User State:</td>
                                                <td>{{ $customer->gouvernorat }}</td>
                                            </tr>
                                            <tr>
                                                <td>Address:</td>
                                                <td>{{ $customer->address }}</td>
                                            </tr>
                                            <tr>
                                                <td>Zipcode:</td>
                                                <td>{{ $customer->zipcode }}</td>
                                            </tr>
                                            <tr>
                                                <td>Email:</td>
                                                <td>{{ $customer->email }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tel:</td>
                                                <td>{{ $customer->tel }}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-sm btn-primary" type="button"
                                        data-toggle="tooltip"
                                        data-original-title="Send message to user"><i class="glyphicon glyphicon-envelope"></i></button>
                                <span class="pull-right">
                                    <a href="{{ URL::to('customers/'.$customer->id.'/edit') }}"  
                                        type="submit"><button class="btn btn-sm btn-warning" type="button"
                                            data-toggle="tooltip"
                                            data-original-title="Edit this user"><i class="glyphicon glyphicon-edit"></i></button></a>
                                    <a href="{{ URL::to('customers/'.$customer->id.'/delete') }}"  
                                        type="submit"><button class="btn btn-sm btn-danger" type="button"
                                            data-toggle="tooltip"
                                            data-original-title="Remove this user"><i class="glyphicon glyphicon-remove"></i></button></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>  
                @endforeach      
            </div>
        </div>
        <style type="text/css">
            .user-row {
                    margin-bottom: 14px;
                }

                .user-row:last-child {
                    margin-bottom: 0;
                }

                .dropdown-user {
                    margin: 13px 0;
                    padding: 5px;
                    height: 100%;
                }

                .dropdown-user:hover {
                    cursor: pointer;
                }

                .table-user-information > tbody > tr {
                    border-top: 1px solid rgb(221, 221, 221);
                }

                .table-user-information > tbody > tr:first-child {
                    border-top: 0;
                }


                .table-user-information > tbody > tr > td {
                    border-top: 0;
                }

        </style>
        <script type="text/javascript">
            $(document).ready(function() {
                var panels = $('.user-infos');
                var panelsButton = $('.dropdown-user');
                panels.hide();

                //Click dropdown
                panelsButton.click(function() {
                    //get data-for attribute
                    var dataFor = $(this).attr('data-for');
                    var idFor = $(dataFor);

                    //current button
                    var currentButton = $(this);
                    idFor.slideToggle(400, function() {
                        //Completed slidetoggle
                        if(idFor.is(':visible'))
                        {
                            currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
                        }
                        else
                        {
                            currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
                        }
                    })
                });


                $('[data-toggle="tooltip"]').tooltip();

            });
        </script>
    @endif



@endsection