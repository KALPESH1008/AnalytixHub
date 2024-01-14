<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    div.introduction {
    padding: 1em;
    background: #f5f5f5;
    box-shadow: 3px 3px 8px hsl(0, 0%, 70%);
}

/* Card Based Layout - Base styles */

.row{
    display: flex;
    justify-content: center;
    gap: 30px;
}



article.col-md-4 col-lg-3 {
  background: #f5f5f5;
  margin-top: 1em;  
  margin-bottom: 2em;
  box-shadow: 3px 3px 8px hsl(0, 0%, 70%);
}

div.card-content {
  background: #f5f5f5;
  padding: 0.5em;
  margin-top: 1em;  
  margin-bottom: 2em;
  box-shadow: 3px 3px 8px hsl(0, 0%, 70%);
  width: 340px;
  height: 410px;
  border: 1px  solid #1882E4;
}

div.card-content h3 {
  margin-bottom: 0.5em;
  font-weight: normal;
}

div.card-content:hover{
    border: 5px  solid #1882E4;
}
.spectrum1 {
    width: 80%;
    height: 250px;
    margin-left: 10%;
   border-radius: 200px;
      
  }


div a, a:hover {
  text-decoration: none;
}

div a:hover {
  opacity: 0.8;
  
}

.team-heading{
    text-align: center;
    color: #1882E4;
    font-size: 40px;
    margin: 50px;
}
.social-icons img {
    width: 40px;
    height: 40px;
    margin: 5px;
    margin-left: 10px;
}

.social-icons{
    margin-left: 70px;
}

.spectrum-h2{
    text-align: center;
    color: #1882E4;
    font-size: 20px;
    margin: 0%;
    padding: 10px;
}

.spectrum-h3{
    text-align: center;
    color: #1882E4;
    font-size: 15px;
    padding: 10px;
}
</style>
<body>
    
<div class="container-team">
    <h1 class="team-heading">
        Our Team
    </h1>
    <div class="row">
  
      <article class="col-md-4 col-lg-3">
        <div class="card-content"  >
        
            <a class="spectrum-a" href="./proffesor_chetan.html"><img class="spectrum1" src="./assets/img/Chetan.jpg" alt="Professor 2" style="object-fit: cover;">
                <h4 class="spectrum-h2">Dr. Chetan Shelke</h4>
                <h4 class="spectrum-h3">Associate Professor, Data Scientist, and Prolific Researcher</h4>
        
                <div class="social-icons">
                    <a href="#"><img src="./assets/img/facebook-icon.png" alt="Facebook"></a>
                    <a href="#"><img src="./assets/img/linkedin.png" alt="LinkedIn"></a>
                    <a href="#"><img src="./assets/img/instagram.png" alt="Instagram"></a>
                    <a href="#"><img src="./assets/img/twitter.png" alt="Twitter"></a>
                </div>
        </div>
        <!-- .card-content -->
      </article>
      <!-- .card -->

      
      <article class="col-md-4 col-lg-3">
        <div class="card-content">
        
            <a class="spectrum-a" href="./proffesor_prajakta.html"><img class="spectrum1" style="object-fit: cover;" src="./assets/img/Prajakta Patil.jpg" alt="Professor 2">
                <h4 class="spectrum-h2">Prajakta Patil</h4>
                <h4 class="spectrum-h3"> Founder of AnalytixHub </h4>
        
                <div class="social-icons">
                    <a href="#"><img src="./assets/img/facebook-icon.png" alt="Facebook"></a>
                    <a href="#"><img src="./assets/img/linkedin.png" alt="LinkedIn"></a>
                    <a href="#"><img src="./assets/img/instagram.png" alt="Instagram"></a>
                    <a href="#"><img src="./assets/img/twitter.png" alt="Twitter"></a>
                </div>
        </div>
        <!-- .card-content -->
      </article>

      
      <article class="col-md-4 col-lg-3">
        <div class="card-content">
        
            <a class="spectrum-a" href="./proffesor_sagar.html"><img class="spectrum1" src="./assets/img/sagarsir.jpg" alt="Professor 2">
                <h4 class="spectrum-h2">Sagar Kulkarni</h4>
                <h4 class="spectrum-h3">Professor of AIMI</h4>
        
                <div class="social-icons">
                    <a href="#"><img src="./assets/img/facebook-icon.png" alt="Facebook"></a>
                    <a href="#"><img src="./assets/img/linkedin.png" alt="LinkedIn"></a>
                    <a href="#"><img src="./assets/img/instagram.png" alt="Instagram"></a>
                    <a href="#"><img src="./assets/img/twitter.png" alt="Twitter"></a>
                </div>
        </div>
        <!-- .card-content -->
      </article>

      
      

    </div>
  </div>
  
</body>
</html>