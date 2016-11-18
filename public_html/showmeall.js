/**
 * Created by Impression on 18.11.2016.
 */
var a = 1223;

var myarr = [];
myarr.push({key1:7,key2:8});
myarr.push({key1:27,key2:28});
myarr.push({key1:37,key2:38});
console.log(myarr.pop());
myarr.forEach(function(currObj,index){
    console.log(currObj);
});

