<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <title>jewelry gallery</title>

    <link rel="stylesheet" href="bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="thumbnail-gallery.css">
</head>
<body>

<div class="container gallery-container">

<h1><img onclick="showHide()" id="category" src="images/logo.svg" alt="">

<div class="tz-gallery">


    <div class="row">
      <div id="set"></div>
      <div id="chain"></div>
      <div id="bracelets"></div>
      <div id="name"></div>
      <div id="other"></div>           
    </div>

    <?php require 'base.php' ?>
</div>


<script>

const imgIco = document.querySelector('#category')

    
var i = 0; 
var imgArr = []; 

var imageCount = 0;
var imageSave;

var countCount = 0;
var countSave;

var sl1 = 0;
var sl2 = 0; 
var sl3 = 0;
var sl4 = 1; 
var slid;
var slidNum;

var jpgImgSave;
var jpgCount = 0;

var slidSave;
var slidCount = 0;
var slidCount2 = 0;
var slidCount3 = 0;

var create = 0;

var categoryCreate;
var categoryCreateCo = 0;


function PhotoSlider() {

    var photoUrlJs = JSON.parse('<?php echo $jsonbase; ?>');
    categoryCreate = photoUrlJs[categoryCreateCo]
    categoryCreateCo++
    categoryCreateCo++
  
  // добавим элемент в конец <body>
  var element = document.getElementById(categoryCreate);
  var p = document.createElement('div');
  p.className = 'col-sm-6 col-md-4'
  element.appendChild(p);

  var em = document.createElement('div');
  em.className = 'thumbnail'

  // вставить в параграф текстовый и обычный узлы
  p.append(em);

  var lightbox = document.createElement('a');
  lightbox.className = 'lightbox'

  var caption = document.createElement('div');
  caption.className = 'caption'

  em.append(lightbox,caption);

  var squareHead = document.createElement('div');
  squareHead.id = 'squareHead'

  var squareHead2 = document.createElement('div');
  squareHead2.id = 'squareHead'

  var image = document.createElement('img');  // создаю элемент фото

   var photoUrlJs = JSON.parse('<?php echo $json; ?>');

  image.setAttribute('src', photoUrlJs[jpgCount])// добавляю атребут
  jpgCount++
  jpgCount++
  

  image.setAttribute('alt', 'Park')// добавляю атребут
  imageCount++
  imageCount = String(imageCount)
  imageSave = 'image' + imageCount
  console.log(imageSave)
  image.id = imageSave// добавляю атребут
  
  slidCount++
  slidCount3++
  slid = "slider("+slidCount+","+slidCount2+","+slidCount3+")"
  console.log(slid)
  console.log(slidCount2)

  image.setAttribute('onclick', slid)// добавляю атребут

  slidCount2++
  slidCount2++

  slidCount3++

  lightbox.append(squareHead2,image,squareHead);

  var contelem = document.createElement('div');
  contelem.className = 'contelem'
 
  caption.append(contelem);

  var count = document.createElement('img');
  countCount++
  countCount = String(countCount)
  countSave = 'count' + countCount
  console.log(countSave)
  count.id = countSave
  count.setAttribute('src', 'images/count.svg')
  count.setAttribute('alt', '')
  count.setAttribute('class', 'co')

  contelem.append(count);
}




var arrLenght = '<?php echo $co;?>';
console.log(arrLenght)
var coCreate = arrLenght / 2

while (create < coCreate) { // выводит 0, затем 1, затем 2
    create++
    PhotoSlider()
 }



var imageSlederCo = 0;
var imageSlederI = 1;

var category = 1;
var set = document.getElementById('set'); 
var chain = document.getElementById('chain'); 
var bracelets = document.getElementById('bracelets'); 
var names = document.getElementById('name'); 
var other = document.getElementById('other'); 

function showHide() {
  
  if(category >= 6){
    category = 0;
  }

  if (category == 0) {

    set.style.display = "block"; 
    chain.style.display = "block";
    bracelets.style.display = "block"; 
    names.style.display = "block";
    other.style.display = "block";
    const imageUrl = "images/logo.svg";
    imgIco.setAttribute('src', imageUrl)
  }

  if (category == 1) {

    set.style.display = "block"; 
    chain.style.display = "none";
    bracelets.style.display = "none"; 
    names.style.display = "none";
    other.style.display = "none";
    const imageUrl = "images/logo1.svg";
    imgIco.setAttribute('src', imageUrl)
  }

  if (category == 2) {

    set.style.display = "none"; 
    chain.style.display = "block";
    bracelets.style.display = "none"; 
    names.style.display = "none";
    other.style.display = "none";
    const imageUrl = "images/logo2.svg";
    imgIco.setAttribute('src', imageUrl)
  }
    if (category == 3) {

    set.style.display = "none"; 
    chain.style.display = "none";
    bracelets.style.display = "block"; 
    names.style.display = "none";
    other.style.display = "none";
    const imageUrl = "images/logo3.svg";
    imgIco.setAttribute('src', imageUrl)
  }
    if (category == 4) {

    set.style.display = "none"; 
    chain.style.display = "none";
    bracelets.style.display = "none"; 
    names.style.display = "block";
    other.style.display = "none";
    const imageUrl = "images/logo4.svg";
    imgIco.setAttribute('src', imageUrl)
  }
    if (category == 5) {

    set.style.display = "none"; 
    chain.style.display = "none";
    bracelets.style.display = "none"; 
    names.style.display = "none";
    other.style.display = "block";
    const imageUrl = "images/logo5.svg";
    imgIco.setAttribute('src', imageUrl)
  }

  category++
  console.log(category);
 
  //var obj = document.getElementById(element_id); 
  //obj.style.display = "block"; 
} 


function slider(num,num2,num3) {
    
    if(imageSlederI == 1){
        
        imageSlederI++
        console.log(imageSlederI)
         num = String(num)
         var imgCo = 'image' + num
         var countCo = 'count' + num
         var img = document.getElementById(imgCo)
         var coun = document.getElementById(countCo)
         
         var photoUrlJs = JSON.parse('<?php echo $json; ?>');
         img.setAttribute('src',photoUrlJs[num2])
         coun.setAttribute('src','images/count.svg')
    }
    else{

        imageSlederI--
        console.log(imageSlederI)
         num = String(num)
         var imgCo = 'image' + num
         var countCo = 'count' + num
         var img = document.getElementById(imgCo)
         var coun = document.getElementById(countCo)
         
         var photoUrlJs = JSON.parse('<?php echo $json; ?>');
         img.setAttribute('src',photoUrlJs[num3])
         coun.setAttribute('src','images/count2.svg')

    }

}

function ppp(){

    var photoUrlJs = JSON.parse('<?php echo $json; ?>');

}


function PhotoSwap(){
    var photoUrlJs = JSON.parse('<?php echo $json; ?>');
    i++
    var img = document.getElementById('image')
    img.setAttribute('src',photoUrlJs[i])
}</script>


</body>

</html>