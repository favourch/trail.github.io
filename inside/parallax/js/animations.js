init = function(){
      jarallax = new Jarallax();
      
      
      jarallax.addAnimation('.planet2',[{progress: "0%", top:"7%"}, {progress: "10%", top: "50%"}]);
      jarallax.addAnimation('.planet2',[{progress: "10%", left:"7%"}, {progress: "30%", left: "83%"}]);
      jarallax.addAnimation('.planet2',[{progress: "80%", top:"50%"}, {progress: "100%", top: "60%"}]);
     
      jarallax.addAnimation('.planet1',[{progress: "5%", left:"78%"}, {progress: "20%", left: "5%"}]);   
      jarallax.addAnimation('.planet1',[{progress: "0%", top:"25%"}, {progress: "20%", top: "50%"}]);

       jarallax.addAnimation('.planet1',[{progress: "95%", top:"50%"}, {progress: "100%", top: "20%"}]);
        jarallax.addAnimation('.planet1',[{progress: "95%", left:"5%"}, {progress: "100%", left: "40%"}]);
     
    }