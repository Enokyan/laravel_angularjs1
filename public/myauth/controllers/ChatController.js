myApp.controller('ChatCtrl', function($scope,$http,$interval) {
    var results = {};
////////////users
    $http.post('getuser', {
    }).then(function(response) {
        $scope.users=response.data;
    });

///////////select msg users
    $scope.GetUserMessage = function(id){
        $interval(SelectNewMessage, 3333);
        $scope.to_id = id;
        angular.element('.send_msg').removeAttr('disabled');

        $http.post('SelectMessage', {
            to_user : id
        }).then(function(response) {
            $scope.result = results;
            $scope.result.messages=response.data;
        });
    };
//////////// send message users
    $scope.SendMsg = function() {
        id  = $scope.to_id;
        msg = $scope.message;
        $http.post('sendMessage', {
            id : id,
            msg: msg
        }).then(function(response) {
            newmessage = response.data;
            $scope.result.messages.push({
                name:newmessage[1],
                msg:newmessage[0].msg,
                created_at:newmessage[0].created_at
            });
        });
        $scope.message ='';
    };
/////////// setinterval users msg
    function SelectNewMessage() {
        to_user  = $scope.to_id;
        $http.post('SelectNewMessage', {
            to_user : to_user
        }).then(function(response) {
            $scope.result = results;
            newmessage = response.data;
            if(newmessage.length >0 ){
                angular.forEach(newmessage,function(value,key){
                    $scope.result.messages.push({
                        name:value.name,
                        msg:value.msg,
                        created_at:value.created_at
                    });
                })
            }
        });
    }
});
