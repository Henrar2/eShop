//    ANIMATION IS LAGGY (Revisit or Delete)
function navHandle(){
    var el = document.getElementsByClassName("text");
    var dash = document.getElementById("dashbar");
    dash.style.transition="200ms";
    if(dash.style.width=="6rem"){
        //Hide the items first
        for(let i=0;i<el.length;i++){
            el[i].style.transisition = "200ms";
            el[i].style.display = "none";
        }
        // wait 400ms
        setTimeout(function(){
            //Expand DashBar 
            dash.style.width="2.5%";
        },200);   
    }else{
        // Expand DashBar first
        dash.style.width="6rem";
        //wait 400ms
        setTimeout(function(){
            //Display all items
            for(let i=0;i<el.length;i++){
                el[i].style.transisition = "200ms";
                el[i].style.display = "inline";
            }
        },200);
    }     
}

// function navHandle(){
//     document.getElementById("dashbar").style.transition="400ms";
//     document.getElementById("text1").style.transition="400ms";
//     document.getElementById("text2").style.transition="400ms";
//     document.getElementById("text3").style.transition="400ms";
//     document.getElementById("text4").style.transition="400ms";

//     if(document.getElementById("dashbar").style.width=="6rem"){
//         document.getElementById("dashbar").style.width="2.5%";
//         document.getElementById("text1").style.display="none";
//         document.getElementById("text2").style.display="none";
//         document.getElementById("text3").style.display="none";
//         document.getElementById("text4").style.display="none";
//     }else{
//         document.getElementById("dashbar").style.transition="400ms";
//         document.getElementById("dashbar").style.width="6rem";
//         document.getElementById("text1").style.display="inline";
//         document.getElementById("text2").style.display="inline";
//         document.getElementById("text3").style.display="inline";
//         document.getElementById("text4").style.display="inline";
//     }
// }