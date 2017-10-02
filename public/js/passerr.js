
    
// $("#btnStart").click(function(){
//     alert("Text:");
// });
    
   



    function checkPass(){  
        var pass_auth = document.getElementById("pass").value;
        var pass_repeat = document.getElementById("rep_pass").value;
        var uname = document.getElementById("username").value
        console.log(pass_auth);
        console.log(pass_repeat);
        console.log(1);  

        if (pass_auth != pass_repeat){

            alert("Password didn't match!!");
            return false;
        }
        else{
            alert("Account Created: "+uname);
            return true;
        }

    

   }    

    function closeWindow(){

  var modal = document.getElementById('id01');
    window.onclick = function(event) 
    {
    if (event.target == modal) 
        {
        modal.style.display = "none";
        }
    }

        
    }