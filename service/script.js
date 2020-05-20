"use strict"
function f1()
{
    var name = document.getElementById('name').value;
    if(name=="")
    {
        document.getElementById('msg').innerHTML = "null submission";
    }

    else if(name.length<2)
    {
        document.getElementById('msg').innerHTML = "length can't be less than 2";
    }

    else if(name[0]>=97 || name[0]<=122)
    {
        document.getElementById('msg').innerHTML = "can't start wit number";
    }
    else
    {
       document.getElementById('msg').innerHTML = ""; 
    }
    for(var i=0; i<name.length; i++)
    {
        if(name[i]=='.' ||name[i]=='-')
        {
            document.getElementById('msg').innerHTML = "name can't contain . or -";
        }
    }
        }
        function f2()
        {
            var email = document.getElementById('email').value;
            if(email=="")
    {
        document.getElementById('msg1').innerHTML = "null submission";
    }
    else if(!email.includes("@"))
    {
        document.getElementById('msg1').innerHTML = "use valid email address";
    }
    else
    {
        document.getElementById('msg1').innerHTML = "";

    }

        }
        function f3()
        {
            var password = document.getElementById('password').value;
            if(password.length<5)
            {
                document.getElementById('msg2').innerHTML ="password length should be 6";
            } 
            else
            {
                document.getElementById('msg2').innerHTML ="";
            }
        }
        function f4()
        {
            if(document.getElementById('male').checked) { 
                document.getElementById("msg3").innerHTML 
                    = "";
            } 
            else if(document.getElementById('female').checked) { 
            document.getElementById("msg3").innerHTML 
                    = "";  
            } 
            else if(document.getElementById('others').checked) { 
               document.getElementById("msg3").innerHTML 
                    = "";
            } 
            else { 
                document.getElementById("msg3").innerHTML 
                    = "No one selected"; 
            } 
        }
       function f5()
       {
         var day = document.getElementById('day').value;
            var month = document.getElementById('month').value;
            var year = document.getElementById('year').value;
            if( day>=0 || day<=31 && month>=1|| month<=12 && year>=1900 || year<=2016)
            {
                 document.getElementById("msg4").innerHTML 
                    = "";
            }
            else
            {
                 document.getElementById("msg4").innerHTML 
                    = "select correct date";
            }
       }
       function f6()
       {
           var selectElement =  
                    document.getElementById('blood');
                      
            var output = selectElement.value; 
            if(output=="choose")
            {
            document.getElementById('msg5').innerHTML = "Select one";   
            }
            else if(output=="A+")
            {
            document.getElementById('msg5').innerHTML = "";   
            }
            else if(output=="B+")
            {
            document.getElementById('msg5').innerHTML = "";   
            }
            else if(output=="A-")
            {
            document.getElementById('msg5').innerHTML = "";   
            }
       }
       function f7()
       {
           if (document.getElementById('ssc').checked)
            {
             document.getElementById("msg6").innerHTML 
                    = "";
            }
            else if (document.getElementById('hsc').checked)
            {
                document.getElementById("msg6").innerHTML 
                    = "";
            }
            else if (document.getElementById('bsc').checked)
            {
                document.getElementById("msg6").innerHTML 
                    = "";
            }
            else if (document.getElementById('msc').checked)
            {
                document.getElementById("msg6").innerHTML 
                    = "";
            }
            else
            {
                 document.getElementById("msg6").innerHTML 
                    = "No one selected";
            }
       }
       function f7()
{
    var childname = document.getElementById('childname').value;
    if(childname=="")
    {
        document.getElementById('msg7').innerHTML = "null submission";
    }

    else if(childname.length<2)
    {
        document.getElementById('msg7').innerHTML = "length can't be less than 2";
    }

    else if(childname[0]>=97 || childname[0]<=122)
    {
        document.getElementById('msg7').innerHTML = "can't start wit number";
    }
    else
    {
       document.getElementById('msg7').innerHTML = ""; 
    }
    for(var i=0; i<childname.length; i++)
    {
        if(childname[i]=='.' ||childname[i]=='-')
        {
            document.getElementById('msg7').innerHTML = "name can't contain . or -";
        }
    }
        }
     