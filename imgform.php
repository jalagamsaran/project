<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sin.css">
  </head>
  <body>
    <div class="container">
        <div class="title">Enter your Details</div>
          <form action="imgresume.php" method="get">
            <div class="personal-details">
                <div class="input-box">
                    <span class="details">Full name</span>
                    <input type="text" name="name" placeholder="John" required>
                </div>    
                <div class="input-text">
                    <span class="details">Objective</span>
                    <input type="text-area" rows="5" cols="33" name="objective" placeholder="Your Career Objective" required>
                </div>  
                <div class="input-box">
                    <span class="details">Date of Birth</span>
                    <input type="text" name="dob" placeholder="10/02/2003" required>
                </div> 
                <div class="input-box">
                    <span class="details">Nationality</span>
                    <input type="text" name="nationality" placeholder="Enter your Nationality" required>
                </div>   
                <div class="Education-details">  
                    <div class="input-box">
                        <span class="details">College Name</span>
                        <input type="text" name="eng" placeholder="Enter your college name" required>
                    </div> 
                    <div class="input-box">
                        <span class="details">College percentage/CGPA</span>
                        <input type="text" name="enggpa" placeholder="Enter your College percentage/CGPA" required>
                    </div> 
                    <div class="input-box">
                        <span class="details">Intermediate college Name</span>
                        <input type="text" name="college" placeholder="Enter your Intermediate college name" required>
                    </div>    
                    <div class="input-box">
                        <span class="details">Intermediate percentage/CGPA</span>
                        <input type="text" name="colgpa" placeholder="Enter your college name" required>
                    </div> 
                    <div class="input-box">
                        <span class="details">School name</span>
                        <input type="text" name="school" placeholder="Enter your School name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">School percentage/CGPA</span>
                        <input type="text" name="schgpa" placeholder="Enter your college name" required>
                    </div>     
                
        
                        <div class="input-box">
                            <span class="details">Enter your primary Coding languages</span>
                            <input type="text" name="pcoding" placeholder="Java" required>
                           </div> 
                       <div class="input-box">
                        <span class="details">Enter your secondary Coding languages</span>
                        <input type="text" name="scoding" placeholder="python" required>
                       </div> 
                                   
                <div class="input-text">
                    <span class="details">Enter your Mini Projects</span>
                    <input type="text" rows="5" cols="33" name="miniproject" placeholder="Enter your project name">
                </div>
        
                <div class="input-text">
                    <span class="details">Enter your Major Projects</span>
                    <input type="text" rows="5" cols="33" name="majorproject" placeholder="Enter your project name">
                </div>

               <div class="input-text">
                <span class="details">Enter your Certificate</span>
                <input type="URL" rows="5" cols="33" name="certificates" placeholder="Enter your Certifcate link">
               </div> 
            
                <div class="input-box">
                    <span class="details">Enter your SoftSkills</span>
                    <input type="text" name="soft" placeholder="communication">
                </div> 

                <div class="input-box">
                    <span class="details">Enter your First Language you can speak</span>
                    <input type="text" name="flanguage" placeholder="Other than telugu" required>
                </div> 

                <div class="input-box">
                    <span class="details">Enter your Second  Language you can speak</span>
                    <input type="text" name="slanguage" placeholder="Other than telugu" required>
                </div> 
            
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="email" placeholder="john12@gmail.com" required>
                </div>
                <div class="input-box">
                    <span class="details">phone number</span>
                    <input type="text" name="phno" placeholder="9999999999" required>
                </div>
                <div class="input-text">
                    <span class="details">Address</span>
                    <input type="text-area" rows="5" cols="33"name="address" placeholder="Guntur" required>
                </div>
                <div class="input-box">
                    <span class="details">LinkedIn profile</span>
                    <input type="URL" name="linkpro" placeholder="Linked profile URL">
                </div>
                <div class="input-box">
                    <span class="details">Github profile</span>
                    <input type="URL" name="gitpro" placeholder="Github profile URL">
                </div> 
                <div class="profile">
                   <label for="avatar">Choose a profile picture: </label>
                   <input type="file" id="avatar" name="avatar" accept="image/png,image/jpeg" required>
                </div>
                <div class="input-box">
                <span class="details"> Enter your Hobbies</span>
                <input type="text" name="hobbies" placeholder="Reading,playing">
                </div> 
                <div class="button">
                <input type="submit" value="Generate CV">
               </div>
        </form>                          
    </div>  
</body>
</html>
