$(document).ready(function(){

/*  $.getJSON( "http://jelletd163.163.axc.nl/Frendr/empdata.json", {
    dataType: "json"
    })
    .done(function( data ){*/
  

  var data = [
      {"name":"Dummy1","cooking":"1","sports":"1","walking":"0","culture":"1","movies":"0"},
      {"name":"Dummy2","cooking":"1","sports":"0","walking":"0","culture":"1","movies":"0"},
      {"name":"Dummy3","cooking":"1","sports":"0","walking":"1","culture":"1","movies":"0"},
      {"name":"Dummy4","cooking":"0","sports":"1","walking":"1","culture":"0","movies":"0"},
      {"name":"Dummy5","cooking":"0","sports":"1","walking":"1","culture":"0","movies":"1"},
      {"name":"Dummy6","cooking":"1","sports":"0","walking":"1","culture":"1","movies":"1"},
      {"name":"Dummy7","cooking":"1","sports":"1","walking":"0","culture":"1","movies":"1"},
      {"name":"Dummy8","cooking":"1","sports":"1","walking":"0","culture":"0","movies":"0"},
      {"name":"Dummy9","cooking":"0","sports":"0","walking":"0","culture":"1","movies":"0"},
      {"name":"Dummy10","cooking":"0","sports":"0","walking":"0","culture":"0","movies":"0"},

  ];

//Information about the person that makes the request
    var matchRequest = 2;
    var counter = 0

    if (data[matchRequest].cooking==1){
      counter++;
    }
    if (data[matchRequest].sports==1){
      counter++;
    }
    if (data[matchRequest].walking==1){
      counter++;
    }
    if (data[matchRequest].culture==1){
      counter++;
    }
    if (data[matchRequest].movies==1){
      counter++;
    }

//Matching the person that made the request with at most three others

    var bestmatch1 = "";
    var bestmatch2="";
    var bestmatch3="";

    var bestcounter1 = 0;
    var bestcounter2= 0;
    var bestcounter3= 0;

    var array1 = [];
    var array2 = [];
    var array3 = [];

      for (var i = 0; i <= data.length - 1; i++) {
        var match = 0;
        var array = [];

        if (data[matchRequest] != data[i]) {
          if (data[matchRequest].cooking==data[i].cooking && data[matchRequest].cooking==1){
            array.push(" cooking");
            match++;
          }
          if (data[matchRequest].sports==data[i].sports && data[matchRequest].sports==1 ){
            array.push(" sports");
            match++;
          }
          if (data[matchRequest].walking==data[i].walking  && data[matchRequest].walking==1 ){
            array.push(" walking");
            match++;
          }
          if (data[matchRequest].culture==data[i].culture && data[matchRequest].culture==1){
            array.push(" culture");
            match++;
          }
          if (data[matchRequest].movies==data[i].movies && data[matchRequest].movies==1){
            array.push(" movies");
            match++;
          }

          if (bestcounter1 < match) {
            bestcounter1 = match;
            bestmatch1 = data[i].name;
            array1 = array;
          } else if (bestcounter1 >= match && bestcounter2 < match){
            bestcounter2 = match;
            bestmatch2 = data[i].name;  
            array2 = array;
          } else if (bestcounter2 >= match && bestcounter3 < match){
            bestcounter3 = match;
            bestmatch3 = data[i].name;  
            array3 = array;
          }

      };   
    };


  if(counter !=0){

    $('#bestmatch1').html(bestmatch1);
    $('#bestcounter1').html((Math.round((bestcounter1/counter)*1000)/1000)*100+"%"+" "+array1);
    $('#bestmatch2').html(bestmatch2);
    $('#bestcounter2').html((Math.round((bestcounter2/counter)*1000)/1000)*100+"%"+" "+array2);
    $('#bestmatch3').html(bestmatch3);
    $('#bestcounter3').html((Math.round((bestcounter3/counter)*1000)/1000)*100+"%"+" "+array3);
  } else {
    $('#header1').html("No Matches Found"); 
    $('#header2').html("");  
    $('#header3').html("");  
  }
//  });
});

