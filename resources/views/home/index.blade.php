@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="top-container">
        <img class="top-cloud" src="images/cloud.png" alt="cloud">
        <h1 class="text-primary">I am Sunny</h1>
        <p>A programmer</p>

        <img class="bottom-cloud" src="images/cloud.png" alt="cloud">
        <img class="mountain" src="images/mountain.png" alt="mountain">
    </div>



    <div class="container-fluid skills">
        <div class="col-md-12 bg-light">
        <div class=" m-auto pt-9 pb-5 my-info">
            <img src="images/mphoto.png" alt="">
            <h2 class="text-primary">Sunny Lawrence</h2>
            <p class="text-secondary">I am a web developer and mobile app developer.I work as web developer and mobile app developer at Grace Technologies. I 💖 coffee.</p>
        </div>
        </div>
       
        <hr>
        <h2 class="text-primary">My Skills</h2>
        <div class="my-skills">
            <img class="skills-img" src="images/computer.png" alt="">
            <h4 class="text-dark">Web design and development</h4>
            <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo vitae magni eveniet quis, velit molestias
                voluptatum eligendi aperiam sunt unde! Reprehenderit expedita obcaecati unde quas ipsum aliquid inventore
                dolorum iste.
            </p>

            
        </div>
        
      <div class="product">
        <img class="skills-img1" src="images/mobile.png" alt="">
        <h4 class="text-dark">Web design and development</h4>
        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo vitae magni eveniet quis, velit molestias
            voluptatum eligendi aperiam sunt unde! Reprehenderit expedita obcaecati unde quas ipsum aliquid inventore
            dolorum iste.
        </p>
      </div>
      <hr class="product-hr">
      <div class="contact-me">
          <h2 class="text-primary">Get in Touch</h2>
          <h3 class="text-dark">If you love coding as much as I do</h3>
          <p class="text-secondary"> We can talk about coding while coding our project and eat hot burgers on th go</p>

          <a class=" btn btn-success" href="#">Contact me</a>
      </div>
    </div>
<hr>


   
@endsection