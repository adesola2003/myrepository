$main-bg:linear-gradient(hsl(273, 75%, 66%), hsl(240, 73%, 65%));
$second: white;
$main-width: 886px;
$main-height: 480px;
$font: Arial, Helvetica, sans-serif;

$Mobile: 375px;
 $Desktop: 1440px;
    
 @media screen and (max-width:$Desktop){
     
 

.main{
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    background-image:$main-bg;
    width: $main-width;
    height: $main-height;
    
    border-radius: 10px;
    position: relative;
    top: 60px;
    left: 280px;
    font-family: $font;
}

.main img{
    width: 395px;
    
    margin-top: 50px;
    margin-left: 40px;
    border-bottom-left-radius: 10px;
    border-top-left-radius: 10px;
    border-top-right-radius: none;
    border-bottom-right-radius: none;
    border-left: none;
}

.second{
    display: inline;
    
    
}

.faq{
    width: 390px;
    height: 389px;
    background-color: white;
    margin-left: 407px;
    margin-top: -414px;
    text-align: left;
    border-bottom-left-radius: none;
    border-top-left-radius: none;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
}
.faq h1{
    padding-top: 30px;
    padding-left: 20px;
}
p{

    padding-left: 35px;
    font-size: 11px;
}

p span{
    font-size: 15px;
    margin-left: -10px;
}
div .dropdown{
    position: relative;
    display: inline-block;
}
div .dropbtn{

    color: white;
    border: none;
    cursor: pointer;
}
div .dropdown-content{
    position: absolute;

    z-index: 1;
    display:none;

}
div .dropdown-content p{
    color: black;
    font-size: 10px;
    text-decoration: none;
    position: relative;
    top: -27px;
    display: block;
}
div .dropdown:hover .dropdown-content{ 
            display: block;
}
input{
    cursor: pointer;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    padding: 4px;
    position: relative;
    left: 20px;
    width: 300px;
}
:placeholder-shown{
    padding: 15px;
}
.input{
    font-size: 11px;
    
    position: relative;
    left: 20px;
    outline: none;
}
.inputs{
    font-size: 11px;
    border: none;
    outline: none;
    position: relative;
   left: 20px;
}
.input:placeholder-shown{
    padding: 0;
}

.inputs:placeholder-shown{
    padding: 0;

}
input:hover{

    color: orangered;
}

.attribution{
    text-align: center;
}

.main_mobile{
    display: none;
}
.attributions{
    
        display: none;
    
}





.img{
    width: 600px;
    position: relative;
    left: 70px;
    top:20px;
}

.srs{
    width: 200px;
    position: relative;
    left: 300px;
    top: 30px;
}
.rsd{
    width: 220px;
    position: relative;
    top: 70px;
    left: -60px;
}

.red{
    background-color: white;
}

 }


















 @media screen and (max-width:$Mobile){


    $main-bg:linear-gradient(hsl(273, 75%, 66%), hsl(240, 73%, 65%));
$second: white;
$main-width: 375px;
$main-height: 820px;
$font: Arial, Helvetica, sans-serif;


    .main{
        display: none;
    }
.main_mobile{

    display: block;
   
    background-image:$main-bg;
    width: $main-width;
    height: $main-height;
    border-radius: 10px;
   
    position: relative;
    top: -80px;
    
    font-family: $font;
}
.attribution{
    
    display: none;

}
.attributions{
    
    display: block;

}

.main_mobile img{
    width: 306px;
    
    border-bottom-left-radius: none;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: none;
    position: relative;
    left: 30px;
    top: 40px;
}

.wo{
    width: 302px;
    background-color: white;
    position: relative;
    top: 15px;
    left: 30px;
    border-bottom-left-radius: 10px;
    border-top-left-radius: none;
    border-top-right-radius: none;
    border-bottom-right-radius: 10px;
}

.faqs{
    width: 270px;
    height: 389px;
    background-color: white;
   
    text-align: center;
    border-radius: 10px;
}
.faqs .fa{
    position: relative;
    top: 20px;
}

input{
    cursor: pointer;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    padding: 4px;
    position: relative;
    left: 20px;
    width: 230px;
}

p{

    padding-left: 20px;
    font-size: 11px;
}

p span{
    font-size: 15px;
    position: relative;
    left: 80px;
    top: -16px;
}
.inputs{
    font-size: 11px;
    border: none;
    outline: none;
    position: relative;
   left: 18px;
}

input:hover{

    color: orangered;
}
}











































































































 <!--   <div class="faq">
                <h1>FAQ</h1>
                <div class="dropdown">
            <input type="text"class="btn" placeholder="How many members can i invite? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "><span style="color: orangered; position: absolute; z-index: 40; top:10px;">v</span>
                <div class="dropdown-content">
             <p >You can invite up to 2 additional users on the Free plan. There is no limit on 
                    team members for the Premium plan.</p>
                </div>
                </div>
                 
            !--<input type="text" placeholder="How many members can i invite? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "><span style="color: orangered; position: absolute; z-index: 40; top: 150px;">v</span>--
           
         <br>
                <div><p><b>What is the maximum file upload size? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  <span style="color: orangered">^</span> </b></p></div>

                
                <input type="text" class="inputs" placeholder="No more than 2GB. All files in your account must fit" style="padding-left: 20px;">
                <input type="text" class="input" placeholder="your alloted space" readonly style="padding-left: 20px;">

                <div class="dropdown">
                <input type="text" placeholder="How can i reset my password? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;"><span style="color: orangered; position: absolute; z-index: 40; top: 10px;">v</span>

                    <div class="dropdown-content">
                <p>Click “Forgot password” from the login page or “Change password” from your profile page.
                A reset link will be emailed to you.</p>
                    </div>

            </div> 
            <div class="dropdown">
                <input type="text" placeholder="Can i cancel my subscription? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;"><span style="color: orangered; position: absolute; z-index: 40; top: 17px;">v</span>

                <div class="dropdown-content">
                <p>Yes! Send us a message and we’ll process your request no questions asked.</p>
            </div> 
            </div>
                
            <div class="dropdown">
                <input type="text" placeholder="Do you provide additional support? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;">
                <span style="color: orangered; position: absolute; z-index: 40; top: 10px;">v</span>

                <div class="dropdown-content">
                <p> Chat and email support is available 24/7. Phone lines are open during normal business hours.</p>
                </div>
            </div> 
            </div>
        </div>
       
    </div>
    <br><br><br><br>
    <div class="attribution">
        Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. 
        Coded by <a href="#">Olasehinde Mary Oluwakanyinsola</a>.
      </div>

    -->
















      <!--<div class="main_mobile">
       
            <img class="img" src="image/Capture1.JPG">
            <div class="wo">
            <div class="faqs">
                <h1 class="fa">FAQ</h1>
                <div>

             <input type="text" placeholder="How many members can i invite? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "><span style="color: orangered; position: absolute; z-index: 40; top: 70px;">v</span>
            </div>
                <div><p><b>What is the maximum file upload size? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  <span style="color: orangered">^</span> </b></p></div>

                
                <input type="text" class="inputs" placeholder="No more than 2GB. All files in your account" style="padding-left: 20px;">
                <input type="text" class="input" placeholder=" must fit your alloted space" readonly style="padding-left: 20px;">

                <div>
                <input type="text" placeholder="How can i reset my password? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;"><span style="color: orangered; position: absolute; z-index: 40; top: 210px;">v</span>
            </div> 
            <div>
                <input type="text" placeholder="Can i cancel my subscription? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;"><span style="color: orangered; position: absolute; z-index: 40; top: 260px;">v</span>
            </div> 
                
            <div>
                <input type="text" placeholder="Do you provide additional support? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;">
                <span style="color: orangered; position: absolute; z-index: 40; top: 306px;">v</span>
            </div> 
            </div>
        </div>
       
      </div>
      
    <br><br><br><br>
   <!-- <div class="attribution">
        Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. 
        Coded by <a href="#">Olasehinde Mary Oluwakanyinsola</a>.
      </div>-->
  