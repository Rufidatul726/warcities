function pname()
{
    var name = document.getElementById('playerName').value;



    if (name.length <= 2)
    {

        document.getElementById('playerNameError').style.color = "red";
        document.getElementById('playerNameError').innerHTML = 'more than 3 letter';
        return false;
    }
    else
        document.getElementById('playerNameError').style.color = "green";
    document.getElementById('playerNameError').innerHTML = "OK";
    return true;
}


function vEmail()
{
    var mail = document.getElementById('email').value;
    if (mail !== 0) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


        if (re.test(mail))
        {
            document.getElementById('emailError').style.color = "green";

            document.getElementById('emailError').innerHTML = 'ok';
            return true;

        }
        else {
            document.getElementById('emailError').style.color = "red";
            document.getElementById('emailError').innerHTML = 'invalid email';
            return false;
        }

    }
}



function isMObileNumber() {
    
      var mobile = document.getElementById('mobile').value;
                
                if (isNaN(mobile)) 
                {
                    document.getElementById('mobileError').style.color="red";
                    document.getElementById('mobileError').innerHTML = 'only number are allowd';
                    return false;
                }
                if((mobile.length<=10))
                {
                    document.getElementById('mobileError').style.color="red";
                    document.getElementById('mobileError').innerHTML = 'atleast 11 number';
                    return false;
                    
                }
                   document.getElementById('mobileError').style.color="green";
                   document.getElementById('mobileError').innerHTML = 'ok';
                   return true;
             }
             
 function vname()
{
    var vname = document.getElementById('vName').value;



    if (vname.length <= 4)
    {

        document.getElementById('vNameError').style.color = "red";
        document.getElementById('vNameError').innerHTML = 'more than 3 letter';
        return false;
    }
    else
        document.getElementById('vNameError').style.color = "green";
    document.getElementById('vNameError').innerHTML = "OK";
    return true;
}


function ptag()
{
    var ptag = document.getElementById('pTag').value;



    if (ptag.length <= 4)
    {
        document.getElementById('pTagError').style.color = "red";
        document.getElementById('pTagError').innerHTML = 'more than 3 letter';
        return false;
    }
    else
        document.getElementById('pTagError').style.color = "green";
    document.getElementById('pTagError').innerHTML = "OK";
    return true;
} 


function claneName()
{
    var cname = document.getElementById('cName').value;



    if (cname.length <= 3)
    {
        document.getElementById('cNameError').style.color = "red";
        document.getElementById('cNameError').innerHTML = 'more than 3 letter';
        return false;
    }
    else
        document.getElementById('cNameError').style.color = "green";
    document.getElementById('cNameError').innerHTML = "OK";
    return true;
} 


function gameTagId()
{
    var cname = document.getElementById('gameTagid').value;



    if (cname.length <= 3)
    {
        document.getElementById('gameTagidError').style.color = "red";
        document.getElementById('gameTagidError').innerHTML = 'more than 3 letter';
        return false;
    }
    else
        document.getElementById('gameTagidError').style.color = "green";
    document.getElementById('gameTagidError').innerHTML = "OK";
    return true;
} 





function clanTag()
{
    var ctage = document.getElementById('cTag').value;



    if (ctage.length <= 3)
    {
        document.getElementById('cTagError').style.color = "red";
        document.getElementById('cTagError').innerHTML = 'more than 3 letter';
        return false;
    }
    else
        document.getElementById('cTagError').style.color = "green";
    document.getElementById('cTagError').innerHTML = "OK";
    return true;
}



function checkpassword()
{
    var pass = document.getElementById('password').value;



    if (pass.length <= 4)
    {
        document.getElementById('passError').style.color = "red";
        document.getElementById('passError').innerHTML = 'more than 4 letter';
        return false;
    }
    else
        document.getElementById('passError').style.color = "green";
    document.getElementById('passError').innerHTML = "OK";
    return true;
}


function checkrepassword()
{
    var pass = document.getElementById('password').value;
     var repass = document.getElementById('repassword').value;


    if (pass === repass)
    {
        
          document.getElementById('repasswordError').style.color = "green";
    document.getElementById('repasswordError').innerHTML = "OK";
    return true;
       
    }
    else
        
         document.getElementById('repasswordError').style.color = "red";
        document.getElementById('repasswordError').innerHTML = 'password not match';
        return false;
      
}





function checkepassword()
{
    var pass = document.getElementById('epassword').value;



    if (pass.length <= 4)
    {
        document.getElementById('epassError').style.color = "red";
        document.getElementById('epassError').innerHTML = 'more than 4 letter';
        return false;
    }
    else
        document.getElementById('epassError').style.color = "green";
    document.getElementById('epassError').innerHTML = "OK";
    return true;
}


function checkreepassword()
{
    var pass = document.getElementById('epassword').value;
     var repass = document.getElementById('reepassword').value;


    if (pass === repass)
    {
        
          document.getElementById('reepasswordError').style.color = "green";
    document.getElementById('reepasswordError').innerHTML = "OK";
    return true;
       
    }
    else
        
         document.getElementById('reepasswordError').style.color = "red";
        document.getElementById('reepasswordError').innerHTML = 'password not match';
        return false;
      
}


function emaiError()
{

    var errorValue = document.getElementById('emailError').firstChild.innerHTML;
    


    if(errorValue === "ok")
    { 
        document.getElementById('emailError').style.color = "green";
            document.getElementById('emailError').innerHTML = "ok";
        return true;
        
    }
    else
    {
        document.getElementById('emailError').style.color = "red";

            document.getElementById('emailError').innerHTML = "please retype email address";
        
        return false;
    }  
   
}

 function teamname()
{
    var name = document.getElementById('teamName').value;



    if (name.length <= 2)
    {

        document.getElementById('teamNameError').style.color = "red";
        document.getElementById('teamNameError').innerHTML = 'more than 3 letter';
        return false;
    }
    else
        document.getElementById('teamNameError').style.color = "green";
    document.getElementById('teamNameError').innerHTML = "OK";
    return true;
}

 function ptwoname()
{
    var vname = document.getElementById('ptwoName').value;



    if (vname.length <= 4)
    {

        document.getElementById('ptwoError').style.color = "red";
        document.getElementById('ptwoError').innerHTML = 'more than 3 letter';
        return false;
    }
    else
        document.getElementById('ptwoError').style.color = "green";
    document.getElementById('ptwoError').innerHTML = "OK";
    return true;
}



 function pthree()
{
    var vname = document.getElementById('pthreeName').value;



    if (vname.length <= 4)
    {

        document.getElementById('pthreeNameError').style.color = "red";
        document.getElementById('pthreeNameError').innerHTML = 'more than 3 letter';
        return false;
    }
    else
        document.getElementById('pthreeNameError').style.color = "green";
    document.getElementById('pthreeNameError').innerHTML = "OK";
    return true;
}


 function pfour()
{
    var vname = document.getElementById('pfourName').value;



    if (vname.length <= 4)
    {

        document.getElementById('pfourNameError').style.color = "red";
        document.getElementById('pfourNameError').innerHTML = 'more than 3 letter';
        return false;
    }
    else
        document.getElementById('pfourNameError').style.color = "green";
    document.getElementById('pfourNameError').innerHTML = "OK";
    return true;
}




 function pfive()
{
    var vname = document.getElementById('pfiveName').value;



    if (vname.length <= 4)
    {

        document.getElementById('pfiveNameError').style.color = "red";
        document.getElementById('pfiveNameError').innerHTML = 'more than 3 letter';
        return false;
    }
    else
        document.getElementById('pfiveNameError').style.color = "green";
    document.getElementById('pfiveNameError').innerHTML = "OK";
    return true;
}



 function substitute()
{
    var vname = document.getElementById('subtituteName').value;



    if (vname.length <= 4)
    {

        document.getElementById('subtituteNameError').style.color = "red";
        document.getElementById('subtituteNameError').innerHTML = 'more than 3 letter';
        return false;
    }
    else
        document.getElementById('subtituteNameError').style.color = "green";
    document.getElementById('subtituteNameError').innerHTML = "OK";
    return true;
}