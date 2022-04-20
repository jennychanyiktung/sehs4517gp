<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <script src="https://kit.fontawesome.com/1ed92467bb.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

       
        <style>
                  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}
.container2{
    margin: 0px 5%;
}
.container2 .title{
    text-align: center;
    font-size: 30px;
}
.container2 img{
    width: 80%;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 5% auto;
}
.container3{
    margin: 5%;
    line-height: 30px;
}
.container3 i{
    padding-right: 10px;
    color: black;
}
.container3  a{
    text-decoration: none;
}
.container3 span a{
    color: black;
}
.container3 i:hover, .container3 span a:hover{
    color: #008DD0;
}
.container3 span{
    color: #0ABAB5;
    font-size: 16px;
    font-weight: 600;
}
.container4{
    margin: 5%;
}
.container4 .title{
    font-size: 24px;
    line-height: 29px;
    color: #554F90;
    font-weight: 700;
    margin-bottom:3% ;
}
.container4 p{
    font-size: 20px;
    line-height: 30px;
    margin-bottom: 4%;
}
@media all and (max-width:700px){
    .container2 img{
        width: 100%;
    }
    .container4 .title{
        font-size: 22px;
    }
    .container4 p{
        font-size: 18px;
    }
}
                                 
        </style>
        
@include('layouts.nav')
<!-- <body> -->
 <!-- content -->
    <div class="container3">
        <a href="{{ url('home') }}"> <i class="fa-solid fa-house"></i></a> 
        <i class="fa-solid fa-chevron-right"></i>
        <span class="title"><a href="{{ url('youth1') }}">Mental Support</a> </span>
        <i class="fa-solid fa-chevron-right"></i>
        <span class="title">Teens Psychological Counselling</span>
    </div>
    
    <div class="container2">
        <div class="title">Element of Emotion</div>
        <img src="img/youth1/image 57.png" alt="">
    </div>
    
    <div class="container4">
        <div class="title">How do I listen to people? How do I speak to people?</div>
        <p>Every word, whether it comes out of kindness or ill will, from the other person's mouth or from your own inner voice, different emotions become a set of notes that amplify, refine, or even reshape the meaning of the original words, a distortion that changes according to your and the other person's emotions. In times of peace and gratitude, she can walk with you to the wide plain; in times of anger and hatred, she can throw each other into the hot pot. </p>
        <p>Sometimes a brief moment of distress can make you stop, take a few steps back, look at the troubled self in front of you, want to tell you the things that are hard to say, and listen to the inner voice that has been guarding you. The heart does not lie, when the emotions are up and down, give yourself and the other person a 30% discount on what they say, as a discount for loving yourself and the other person.</p>
    </div>

@include('layouts.footer')

</body>
</html>