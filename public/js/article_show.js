/**
 * Created by zhangmpy on 2018/8/8.
 */
var myApp = angular.module("myApp",[]);
    myApp.controller('article',['$scope','$http',function(scope,http){
        http({
            url: '/api/article/41',//请求的url地址
            // data:{},//传递的参数
            dataType:'json',//返回的数据的格式
            type:'get'//请求的方式
        }).then(function successCallback (rs){
            scope.content = rs.data.data;
            console.log(scope.content);
        });
    }]);