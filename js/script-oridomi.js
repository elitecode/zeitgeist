$(document).ready(function(){

        var demos, logo, methods, folded;
        if (!OriDomi.isSupported) {
            alert("Not supported");
            return;
        }
          else{
              //alert("supported");
          }
          setTimeout(function(){
          folded = new OriDomi('#homepage-logo', 
          {
                vPanels:         5,     // number of panels when folding left or right (vertically oriented)
                hPanels:         3,     // number of panels when folding top or bottom
                speed:           1200,  // folding duration in ms
                ripple:          2,     // backwards ripple effect when animating
                shadingIntesity: .5,    // lessen the shading effect
                perspective:     800,   // smaller values exaggerate 3D distortion
                maxAngle:        40,    // keep the user's folds within a range of -40 to 40 degrees
                //shading:         '' // change the shading type
          });
          
              //folded.fracture(800);
              //folded.accordion(100).wait(100);
  //    folded.accordion(0).ramp(30).curl(-30).stairs(300).accordion(30);    
  //    folded.setRipple().accordion(28).stairs(-40);//.ramp(30).curl(-30).stairs(300).accordion(30);   
  console.log(folded);
  setTimeout(function(){
   folded.curl(-50,top,function(){console.log("done");});
   }, 100);
  // //folded.curl(50).collapse().setSpeed(2000).stairs(-29).foldUp().unfold();
  //     //folded.curl(50).collapse().setSpeed(2000).stairs(-29).foldUp().unfold();
      }, 100);
});
