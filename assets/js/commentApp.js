//angular app for saving/creating guestbook comments

(function() {
    var app = angular.module('cApp', []);

    app.controller('CommentsController', function CommentsController($scope) {

        var master = this;
        $scope.person = '';
        $scope.message = '';
        $scope.email = '';
    });
})();