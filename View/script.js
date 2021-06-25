function sliderChange(val,rangeId) {

    if(rangeId=="range1"){
    document.getElementById('value1').innerHTML = val+ "&deg"; // get
    }

    if(rangeId=="range2"){
        document.getElementById('value2').innerHTML = val+ "&deg"; // get
        }

    if(rangeId=="range3"){
         document.getElementById('value3').innerHTML = val+ "&deg"; // get
            }

    if(rangeId=="range4"){
        document.getElementById('value4').innerHTML = val+ "&deg"; // get
                }
    if(rangeId=="range5"){
         document.getElementById('value5').innerHTML = val+ "&deg"; // get
              }   
              
    if(rangeId=="range6"){
        document.getElementById('value6').innerHTML = val+ "&deg"; // get
         }

}


function resetDeg(){


document.getElementById('value1').innerHTML="0 "+ " &deg";
document.getElementById('value2').innerHTML="0 "+ " &deg";
document.getElementById('value3').innerHTML="0 "+ " &deg";
document.getElementById('value4').innerHTML="0 "+ " &deg";
document.getElementById('value5').innerHTML="0 "+ " &deg";
document.getElementById('value6').innerHTML="0 "+ " &deg";

}


