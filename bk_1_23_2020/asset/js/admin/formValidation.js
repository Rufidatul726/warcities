function gameName()
{
     
         var name =  document.getElementById("name").value;
   
     if (name ==="") 
    {
        
                 document.getElementById('nameError').style.color="red";
                 document.getElementById('nameError').innerHTML = 'please Enter  Name';
                  return false;

    }
   else if (name.length <= 2) 
    {
        
                 document.getElementById('nameError').style.color="red";
                 document.getElementById('nameError').innerHTML = 'Must Be Three Character';
                  return false;

    }
    
   else
   {
        
                 document.getElementById('nameError').style.color="green";
                 document.getElementById('nameError').innerHTML = 'ok';
   }

    
}



function messageName()
{
     
         var name =  document.getElementById("message").value;
   
     if (name ==="") 
    {
        
                 document.getElementById('messageError').style.color="red";
                 document.getElementById('messageError').innerHTML = 'please Enter  Name';
                  return false;

    }
   else if (name.length <= 10) 
    {
        
                 document.getElementById('messageError').style.color="red";
                 document.getElementById('messageError').innerHTML = 'Must Be more than 10 Character';
                  return false;

    }
    
   else
   {
        
                 document.getElementById('messageError').style.color="green";
                 document.getElementById('messageError').innerHTML = 'ok';
   }

    
}

function tranjectiofunType()
{
     
         var name =  document.getElementById("tranjectiontype").value;
   
     if (name ==="") 
    {
        
                 document.getElementById('typeError').style.color="red";
                 document.getElementById('typeError').innerHTML = 'please Enter  Name';
                  return false;

    }
   else if (name.length <= 2) 
    {
        
                 document.getElementById('typeError').style.color="red";
                 document.getElementById('typeError').innerHTML = 'Must Be 3 Character';
                  return false;

    }
    
   else
   {
        
                 document.getElementById('typeError').style.color="green";
                 document.getElementById('typeError').innerHTML = 'ok';
   }

    
}









function tranjectiofun()
{
     
         var name =  document.getElementById("tranjection").value;
   
     if (name ==="") 
    {
        
                 document.getElementById('tranError').style.color="red";
                 document.getElementById('tranError').innerHTML = 'please Enter  Name';
                  return false;

    }
   else if (name.length <= 4) 
    {
        
                 document.getElementById('tranError').style.color="red";
                 document.getElementById('tranError').innerHTML = 'More Than 5 Character';
                  return false;

    }
    
   else
   {
        
                 document.getElementById('tranError').style.color="green";
                 document.getElementById('tranError').innerHTML = 'ok';
   }

    
}





function tableName()
{
     
         var Tablename =  document.getElementById("table").value;
   
     if (Tablename ==="") 
    {
        
                 document.getElementById('tableError').style.color="red";
                 document.getElementById('tableError').innerHTML = 'please Enter Table Name';
                  return false;

    }
   else if (Tablename.length <= 2) 
    {
        
                 document.getElementById('tableError').style.color="red";
                 document.getElementById('tableError').innerHTML = 'Must Be Three Character';
                  return false;

    }
    
   else
   {
        
                 document.getElementById('tableError').style.color="green";
                 document.getElementById('tableError').innerHTML = 'ok';
   }

    
}


function log()
{
     
         var loginId =  document.getElementById("loginId").value;
   
     if (loginId ==="") 
    {
        
                 document.getElementById('loginIdError').style.color="red";
                 document.getElementById('loginIdError').innerHTML = 'please Enter Login Id';
                  return false;

    }
   else if (loginId.length <= 2) 
    {
        
                 document.getElementById('loginIdError').style.color="red";
                 document.getElementById('loginIdError').innerHTML = 'Must Be Three Character';
                  return false;

    }
    
   else
   {
        
                 document.getElementById('loginIdError').style.color="green";
                 document.getElementById('loginIdError').innerHTML = 'ok';
   }

    
}


function showPrice() {
    
      var price = document.getElementById('sprice').value;
                
                if (isNaN(price)) 
                {
                    document.getElementById('priceError').style.color="red";
                    document.getElementById('priceError').innerHTML = 'only number are allowd';
                    return false;
                }
                
                   document.getElementById('priceError').style.color="green";
                   document.getElementById('priceError').innerHTML = 'ok';
                   return true;
             }
             
             
             
  function heading()
{
     
         var headline =  document.getElementById("heding").value;
   
     if (headline ==="") 
    {
        
                 document.getElementById('headingError').style.color="red";
                 document.getElementById('headingError').innerHTML = 'please Enter Table Name';
                  return false;

    }
   else if (headline.length <= 2) 
    {
        
                 document.getElementById('headingError').style.color="red";
                 document.getElementById('headingError').innerHTML = 'Must Be Three Character';
                  return false;

    }
    
   else
   {
        
                 document.getElementById('headingError').style.color="green";
                 document.getElementById('headingError').innerHTML = 'ok';
   }

    
}     

  function textedti()
{
       
         var description =  document.getElementById("editor").value;
       
   
     if (description ==="") 
    {
        
                 document.getElementById('descripError').style.color="red";
                 document.getElementById('descripError').innerHTML = 'please enter detail description ';
                  return false;

    }
   
    
   else
   {
        
                 document.getElementById('descripError').style.color="green";
                 document.getElementById('descripError').innerHTML = 'ok';
   }

    
}





 function screenShot()
{
        
      var scrn =  document.getElementById("gallery-photo-add").value;
     
    
   
     if (scrn ==="") 
    {
        
                 document.getElementById('screeError').style.color="red";
                 document.getElementById('screeError').innerHTML = 'must select pic ';
                  return false;

    }
   
    
   else
   {
        
                 document.getElementById('screeError').style.color="green";
                 document.getElementById('screeError').innerHTML = 'ok';
   }

    
}


 function screenShotnew()
{
        
     
     
     var x = document.getElementById('imgshow');
    
   x.style.display = "none";
   
     

    
}

function isMObileNumber() {
    
      var mobile = document.getElementById('table').value;
                
                if (isNaN(mobile)) 
                {
                    document.getElementById('tableError').style.color="red";
                    document.getElementById('tableError').innerHTML = 'only number are allowd';
                    return false;
                }
                if(mobile < 1)
                {
                    document.getElementById('tableError').style.color="red";
                    document.getElementById('tableError').innerHTML = 'only positive number';
                    return false;
                    
                }
                   document.getElementById('tableError').style.color="green";
                   document.getElementById('tableError').innerHTML = 'ok';
                   return true;
             }
             
             
             
 function run()
{
    var dropdownvalue = document.getElementById("gametype").value;
    
   
   if( dropdownvalue === "" || dropdownvalue === null || dropdownvalue === "disabled" )
   {
      document.getElementById('selectError').style.color="red";
      document.getElementById('selectError').innerHTML = 'must select one';
                    return false;
   }
   
   
   
   else
       
       document.getElementById('selectError').style.color="green";
       document.getElementById('selectError').innerHTML = 'ok';
                    return true;
       
}