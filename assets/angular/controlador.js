function BuscadorAngular($scope, $http) {

    $scope.listOfCustomers = null;

    $http.get('http://www.hospitalveterinariobenipeixcar.es/search/')
         .success(function (data) {
             $scope.listaBusqueda = data;
         })
}