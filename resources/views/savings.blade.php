@extends('layouts.app')

@section('content')

    <div class="row" ng-controller="ctrl">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Savings Calculator</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">

                    <!-- Placing the map -->
                    <div style="margin: 0 auto; text-align:center; margin-right: 20px;">
                       <div id="map"></div>
                       <p>Area (grey area): <span id="span-area">0</span> mt&sup2;<br />
                       <a href="#" onclick="measureReset()">Reset Measure</a><br />
                       <a href="#" id="zoom-to-area">Find me!</a>   
                    </div>

                </div>

                <div class="col-md-4">
                    <p>Enter your roof size (mt&sup2;):
                        <input type="text" class="form-control" ng-model="roofSize" ng-change="calculatePV()">
                    </p> 

                    </br>
                        <div ng-show="roofSize">You could install @{{ nbPV }} panel on your roof</div>
                    </br>

                    <p>What's your monthly consumption of energy (Kwh):
                        <input type="text" class="form-control" ng-model="consumption" ng-change="calculConsumption()">
                    </p>

                    </br>
                        <div ng-show="consumption">You need to install @{{ needies }} panel </div>
                    </br>

                    <p>So How many panels do you want to install? :
                        <input type="text" class="form-control" ng-model="nbChosen" ng-change="calculEnergy()">
                    </p>

                    </br>
                        <div ng-show="nbChosen"> This will produce @{{ production }} Kwh/month</br>
                                 And will save you @{{ benefits }} $/month</div>
                    </br>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>

@endsection