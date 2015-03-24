//angular app for saving/creating guestbook comments

(function() {
    var app = angular.module('cApp', []);

    app.controller('CommentsController', function CommentsController($scope) {

        var master = this;
        $scope.person = '';
        $scope.email = '';
        $scope.message = '';

        (function panelSwitcher() {
            master.tab = 0;
            master.msg = 'View Comments';

            master.selectTab = function(setTab, setMsg) {
                master.tab = setTab;
                master.msg = setMsg;
            };

            master.isSelected = function(checkTab) {
                return master.tab === checkTab;
            };
        })();
    });

})();