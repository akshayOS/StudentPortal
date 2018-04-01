function validatename(){
                var name1=document.registration_form.name.value;
                var letters = /^[A-Za-z ]+$/;
                if(name1=="" || name1==null){
                    document.registration_form.name.style.border="2px solid red";
                    document.getElementById("errorname").style.display="block";
                    return false;
                }
                else if (!name1.match(letters)) {
                    document.registration_form.name.style.border="2px solid red";
                    document.getElementById("errorname1").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.name.style.border="2px solid green";
                    document.getElementById("errorname").style.display="none";
                    document.getElementById("errorname1").style.display="none";
                    return true;
                }
            }


            function validatedate(){
                var date1=document.registration_form.dob.value;
                if(date1=="" || date1==null){
                    document.registration_form.dob.style.border="2px solid red";
                    document.getElementById("errordate").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.dob.style.border="2px solid green";
                    document.getElementById("errordate").style.display="none";
                    return true;
                }
            }


            function validategender() {
				if(document.getElementById('gender_male').checked||document.getElementById('gender_female').checked){
                    document.getElementById("errorgender").style.display="none";
                    return true;
                }
                else{
                    document.getElementById("errorgender").style.display="block";
                    return false;
                }
            }

            function validatedegree() {
                var degree1=document.registration_form.degree.value;
                if(degree1=="Select your degree"){
                    document.registration_form.degree.style.border="2px solid red";
                    document.getElementById("errordegree").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.degree.style.border="2px solid green";
                    document.getElementById("errordegree").style.display="none";
                    return true;
                }
            }

            function validatebranch() {
                var branch1=document.registration_form.branch.value;
                if(branch1=="Select your Branch"){
                    document.registration_form.branch.style.border="2px solid red";
                    document.getElementById("errorbranch").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.branch.style.border="2px solid green";
                    document.getElementById("errorbranch").style.display="none";
                    return true;
                }
            }

            function validateyear(){
                var year1=document.registration_form.yr_of_passing.value;
                if(year1=="" || year1==null){
                    document.registration_form.yr_of_passing.style.border="2px solid red";
                    document.getElementById("erroryear1").style.display="block";
                    return false;
                }
                else if (year1.length!=4 || year1>2022) {
                    document.registration_form.yr_of_passing.style.border="2px solid red";
                    document.getElementById("erroryear1").style.display="none";
                    document.getElementById("erroryear2").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.yr_of_passing.style.border="2px solid green";
                    document.getElementById("erroryear1").style.display="none";
                    document.getElementById("erroryear2").style.display="none";
                    return true;
                }
            }

            function validateregno(){
                var regno1=document.registration_form.regno.value;
                if(regno1=="" || regno1==null){
                    document.registration_form.regno.style.border="2px solid red";
                    document.getElementById("errorregno1").style.display="block";
                    return false;
                }
                else if (regno1.length!=8 ) {
                    document.registration_form.regno.style.border="2px solid red";
                    document.getElementById("errorregno1").style.display="none";
                    document.getElementById("errorregno2").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.regno.style.border="2px solid green";
                    document.getElementById("errorregno1").style.display="none";
                    document.getElementById("errorregno2").style.display="none";
                    return true;
                }
            }


            function validaterollno(){
                var rollno1=document.registration_form.rollno.value;
                if(rollno1=="" || rollno1==null){
                    document.registration_form.rollno.style.border="2px solid red";
                    document.getElementById("errorrollno1").style.display="block";
                    return false;
                }
                else if (rollno1.length!=8) {
                    document.registration_form.rollno.style.border="2px solid red";
                    document.getElementById("errorrollno1").style.display="none";
                    document.getElementById("errorrollno2").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.rollno.style.border="2px solid green";
                    document.getElementById("errorrollno1").style.display="none";
                    document.getElementById("errorrollno2").style.display="none";
                    return true;
                }
            }

            function validatecontactno(){
                var num1 = /^([0-9]{10})+$/;
                var contactno1=document.registration_form.contactno.value;
                if(contactno1=="" || contactno1==null){
                    document.registration_form.contactno.style.border="2px solid red";
                    document.getElementById("errorcontactno1").style.display="block";
                    return false;
                }
                else if (contactno1.length!=10 || !contactno1.match(num1) ) {
                    document.registration_form.contactno.style.border="2px solid red";
                    document.getElementById("errorcontactno1").style.display="none";
                    document.getElementById("errorcontactno2").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.contactno.style.border="2px solid green";
                    document.getElementById("errorcontactno1").style.display="none";
                    document.getElementById("errorcontactno2").style.display="none";
                    return true;
                }
            }

            function validateemail(){
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                var email1=document.registration_form.email.value;
                if(email1=="" || email1==null){
                    document.registration_form.email.style.border="2px solid red";
                    document.getElementById("erroremail1").style.display="block";
                    return false;
                }
                else if (!email1.match(mailformat)) {
                    document.registration_form.email.style.border="2px solid red";
                    document.getElementById("erroremail1").style.display="none";
                    document.getElementById("erroremail2").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.email.style.border="2px solid green";
                    document.getElementById("erroremail1").style.display="none";
                    document.getElementById("erroremail2").style.display="none";
                    return true;
                }
            }

            function validatepassword(){
                var numeric=/(?=^.{6,}$)(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*]+)(?![.\n]).*$/;
                var password1=document.registration_form.password.value;
                if(password1=="" || password1==null){
                    document.registration_form.password.style.border="2px solid red";
                    document.getElementById("errorpass1").style.display="block";
                    document.getElementById("errorpass2").style.display="none";
                    document.getElementById("errorpass3").style.display="none";
                    return false;
                }
                else if (password1.length<6) {
                    document.registration_form.password.style.border="2px solid red";
                    document.getElementById("errorpass1").style.display="none";
                    document.getElementById("errorpass2").style.display="block";
                    document.getElementById("errorpass3").style.display="none";
                    return false;
                }
                else if (!password1.match(numeric)) {
                    document.registration_form.password.style.border="2px solid red";
                    document.getElementById("errorpass1").style.display="none";
                    document.getElementById("errorpass2").style.display="none";
                    document.getElementById("errorpass3").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.password.style.border="2px solid green";
                    document.getElementById("errorpass1").style.display="none";
                    document.getElementById("errorpass2").style.display="none";
                    document.getElementById("errorpass3").style.display="none";
                    return true;
                }
            }

            function validateconfirmpassword(){
                var password1=document.registration_form.password.value;
                var cpassword1=document.registration_form.confirmpassword.value;
                if(cpassword1=="" || cpassword1==null){
                    document.registration_form.confirmpassword.style.border="2px solid red";
                    document.getElementById("errorcpass1").style.display="block";
                    return false;
                }
                else if (cpassword1!=password1) {
                    document.registration_form.confirmpassword.style.border="2px solid red";
                    document.getElementById("errorcpass1").style.display="none";
                    document.getElementById("errorcpass2").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.confirmpassword.style.border="2px solid green";
                    document.getElementById("errorcpass1").style.display="none";
                    document.getElementById("errorcpass2").style.display="none";
                    return true;
                }
            }


            function validatequestion() {
                var q1=document.registration_form.security_ques.value;
                if(q1=="Select your option"){
                    document.registration_form.security_ques.style.border="2px solid red";
                    document.getElementById("errorques").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.security_ques.style.border="2px solid green";
                    document.getElementById("errorques").style.display="none";
                    return true;
                }
            }


            function validateanswer() {
                var ans1=document.registration_form.answer.value;
                if(ans1=="" || ans1==null){
                    document.registration_form.answer.style.border="2px solid red";
                    document.getElementById("errorans").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.answer.style.border="2px solid green";
                    document.getElementById("errorans").style.display="none";
                    return true;
                }
            }




                    function next1(n){

                            if(n==1){
                                var test=validatename() & validatedate() & validategender();
                                if (test) {
                                document.getElementById('tab1').style.display="none";
                                document.getElementById('tab2').style.display="block";
                                    
                                }
                                else{
                                document.getElementById('tab1').style.display="block";
                                document.getElementById('tab2').style.display="none";
                                }
                                

                            }
                            else if (n==2) {
                                var test1=validatedegree() & validatebranch() & validateyear() & validateregno() & validaterollno();
                                if (test1) {
                                    document.getElementById('tab1').style.display="none";
                                    document.getElementById('tab2').style.display="none";
                                    document.getElementById('tab3').style.display="block";
                                }
                                else{
                                    document.getElementById('tab1').style.display="none";
                                    document.getElementById('tab2').style.display="block";
                                    document.getElementById('tab3').style.display="none";
                                }
                            }

                            else if (n==3) {
                                var test2=validatecontactno() & validateemail();
                                if (test2) {
                                document.getElementById('tab1').style.display="none";
                                document.getElementById('tab2').style.display="none";
                                document.getElementById('tab3').style.display="none";
                                document.getElementById('tab4').style.display="block";
                                }
                                else{
                                    document.getElementById('tab1').style.display="none";
                                document.getElementById('tab2').style.display="none";
                                document.getElementById('tab3').style.display="block";
                                document.getElementById('tab4').style.display="none";
                                }
                                
                                }
                                else if (n==4){
                                    var test3=validatepassword() & validateconfirmpassword() & validquestion() & validanswer();
                                    if(test3){
                                        return true;
                                    }
                                    else{
                                        return false;
                                    }
                                }
                            }
                            
                    function prev1(n) {
                               if(n==2){
                                 document.getElementById('tab2').style.display="none";
                                document.getElementById('tab1').style.display="block";
                            }
                            else if (n==3) {
                                 document.getElementById('tab1').style.display="none";
                                document.getElementById('tab3').style.display="none";
                                document.getElementById('tab2').style.display="block";
                                
                            }
                            else if (n==4) {
                                document.getElementById('tab1').style.display="none";
                                document.getElementById('tab2').style.display="none";
                                document.getElementById('tab4').style.display="none";
                                document.getElementById('tab3').style.display="block";
                                } 
                            }


                    function isvalid(){
                        var valid1=next1(4);
                        var valid2=validatename() & validatedate() & validategender() & validatedegree() & validatebranch() & validateyear() & validateregno() & validaterollno() & validatecontactno() & validateemail() & validatepassword() & validateconfirmpassword() & validquestion() & validanswer();
                        if(valid1 && valid2){
                            return true;
                        }
                        else{
                            return false;
                        }
                    }
                            
function feedbackname(){
var name2=document.feedback_form.name.value;
                var letters = /^[A-Za-z ]+$/;
                if(name2=="" || name2==null){
                    document.feedback_form.name.style.border="2px solid red";
                    return false;
                }
                else if (!name2.match(letters)) {
                    document.feedback_form.name.style.border="2px solid red";
                    return false;
                }
                else{
                    document.feedback_form.name.style.border="2px solid green";
                    return true;
                }
}
function feedbackemail(){
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                var email2=document.feedback_form.email.value;
                if(email2=="" || email2==null){
                    document.feedback_form.email.style.border="2px solid red";
                    return false;
                }
                else if (!email2.match(mailformat)) {
                    document.feedback_form.email.style.border="2px solid red";
                    return false;
                }
                else{
                    document.feedback_form.email.style.border="2px solid green";
                    return true;
                }
}

function feedbacktext(){
var feedback1=document.feedback_form.feedback.value;
if(feedback1=="" || feedback1==null){
                    document.feedback_form.feedback.style.border="2px solid red";
                    return false;
                }
                else{
                    document.feedback_form.feedback.style.border="2px solid green";
                    return true;
                }
}
function validate3(){
         var testing=feedbackname() & feedbackemail() & feedbacktext();
         if (testing) {
            return true;
         }
         else{
            return false;
         }
      }