@extends('layouts.app')

@section('content')
<script> </script>
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body" ng-app="myApp" ng-controller="myController">
                <div class="tab">
                
                <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr ng-repeat="builder in builders">
      <td>if</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

 
            
    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
var app = angular.module('myApp', []);
app.controller('myController', function($scope, $http) {

$http({

method: 'GET',

url: "http://127.0.0.1:8000/api/lot",

dataType:"json", 

contentType:"application/json; charset=utf-8"

}).then(function(response) {
$scope.builders = response.data;
});


</script>
@endsection
