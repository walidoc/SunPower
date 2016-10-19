var app = angular.module('app', [])
	
	.controller('ctrl', function($scope) {
		
		$scope.calculatePV = function() {
			$scope.nbPV = Math.floor( $scope.roofSize / 5);
		}

		$scope.calculConsumption = function() {
			$scope.needies = Math.floor( $scope.consumption / 42);
		}

		$scope.calculEnergy = function() {
			$scope.production = Math.floor( $scope.nbChosen * 1.4 * 30);
			$scope.benefits = Math.floor( $scope.production * 0.24 );
		}

	});