    $(function(){
        
        
        $('#signUpButton').click(function(){
            $("#signInForm").hide();
            $("#signUpForm").fadeToggle();
         });

        $('#signInButton').click(function(){
            $("#signUpForm").hide();
            $("#signInForm").fadeToggle();
        });

        $('#signUpBtn').click(function(e){
             e.preventDefault();
             signUp();
         });

        $('#signInBtn').click(function(e){
            e.preventDefault();
            signIn();
        });
        //$("#preloader").fadeOut("slow").delay(2000);
        
        $( "#formWrapper" ).delay(3000).fadeIn( 800 );
        $( "#preloader" ).delay(2000).fadeOut( 300 );
        //$(".button-collapse").sideNav();
    });            
    
