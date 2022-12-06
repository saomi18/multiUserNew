<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galery</title>
    <style>
        * {
    box-sizing : border-box;
}
:root{
    font-size : 16px;
}
body{
    font-family : "Blank Ops One", Cursive;
    overflow : hidden;
    margin : 0;
    background : linear-gradient(0deg, #cdf1d2 0%, #d3ffdc 100%);
    height: 100vh;
    display : flex;
    justify-content : center;
    align-items : center;
}
.container{
    width : 100%;
    display : flex;
    padding : 0 20px;
}
.slide{
    height : 80vh;
    border-radius : 20px;
    margin : 10px;
    cursor : pointer;
    color : #fff;
    flex : 1;
    background-size : cover;
    background-position : center;
    background-repeat : no-repeat;
    position : relative;
    transition : all 0.7s ease-in-out;
    filter : blur(1px);
}
.slide h3{
    position: absolute;
    font-size: clamp(1rem, 5vw, 5rem);
    bottom : 20px;
    left: 20px;
    margin: 0;
    opacity: 0;
    background-color: #e3fdf5;
    background-image: linear-gradient(-225deg, #e3fdf5 0%, #ffe6fa 100%);
    -webkit-background-clip:text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}
.slide.active{
    flex: 10;
    filter: blur(0px);
}
.slide.active h3{
    opacity : 1;
    transition: opacity 0.3s ease-in 0.4s;
}
/* responsive */
@media screen and (max-width:50rem){
.container{
    display: flex;
    height: 90vh;
    flex-direction: column;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    align-content: center;
}
.slide{
    width :90vh;
    border-radius: 20px;
    margin:10px;
} 
}
    </style>
</head>
<body>
    <div class="container">
        <div class="slide" style="background-image:url('img1.jpg');">
            <h3>gambar 1</h3>
        </div>

        <div class="slide" style="background-image:url('img2.jpg');">
            <h3>gambar 2</h3>
        </div>

        <div class="slide" style="background-image:url('img3.jpg');">
            <h3>gambar 3</h3>
        </div>

        <div class="slide" style="background-image:url('img4.jpg');">
            <h3>gambar 4</h3>
        </div>

        <div class="slide" style="background-image:url('img5.jpg');">
            <h3>gambar 5</h3>
        </div>

        <div class="slide" style="background-image:url('img6.jpg');">
            <h3>gambar 6</h3>
        </div>
    </div>
    <script>
        activeslideimg();

function activeslideimg(activeSlide = 2){
    const slides = document.querySelectorAll(".slide");

    slides[activeSlide].classList.add("active");

    for(const slide of slides){
        slide.addEventListener("click", () => {
            clearActiveClasses();

            slide.classList.add("active");
        });
    }

    function clearActiveClasses(){
        slides.forEach((slide) => {
            slide.classList.remove("active");
        });
    }
}
    </script>
</body>
</html>