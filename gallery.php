<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gallery</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
  .main{
    padding: 50px 0;
}

.main h1{
    font-size: 42px;
    color: #333;
    font-weight: 700;
}

.main ul{
    margin-top: 50px;
}

.main ul li{
    padding: 10px 15px;
    border: 2px solid #333;
    margin-right: 10px;
    margin-bottom: 10px;
    font-weight: 700;
    cursor: pointer;
    transition: all .5s ease;
  color: #333;
}

.main ul li.active,
.main ul li:hover{
    background-color: #0000ff;
    color: #FFF;
    border: 2px solid #0000ff;
}

.main ul li:last-of-type{
    margin-right: 0 ;
}

.main ul li:nth-of-type(3),
.main ul li:nth-of-type(4),
.main ul li:nth-of-type(5){
    flex-grow: 2
}

.main .container-fluid{
  overflow: hidden;
  padding: 15px;
}

.main .container-fluid .col-md-3{
    padding: 15px;
    float: left;
    transition: all 5s ease-in-out
}

.main .container-fluid img{
    width: 100%
}

@media (max-width: 767px){
    .main .container-fluid img{
        margin-bottom: 15px
    }
}
</style>
  
</head>

<body>
<!-- include header file -->
    <?php include "includes/header2.php";?>
  <section class="main text-center">
  <div class="container">
    <h1>BMJM Gallery</h1>
    <ul class="list-unstyled row">
      <li class="col-md active" data-class="all">ALL</li>
      <li class="col-md" data-class="mosque">MOSQUE</li>
      <li class="col-md" data-class="events">EVENTS</li>

    </ul>
  </div>
  <div class="container-fluid ">
    <div class="col-md-3 images" data-class="mosque">
      <img src="images/msq1.jpg" alt="" style="width:300px;height:200px;">
    </div>
    <div class="col-md-3 images" data-class="mosque">
      <img src="images/ms1.jpg" alt="" style="width:300px;height:200px;">
    </div>
    <div class="col-md-3 images" data-class="mosque">
      <img src="images/ms2.jpg" alt="" style="width:300px;height:200px;">
    </div>
    <div class="col-md-3 images" data-class="mosque">
      <img src="images/ms3.jpg" alt="" style="width:300px;height:200px;">
    </div>
    
    <div class="col-md-3 images" data-class="mosque">
      <img src="images/ms4.jpg" alt="" style="width:300px;height:200px;">
    </div>
    <div class="col-md-3 images" data-class="mosque">
      <img src="images/ms5.jpg" alt="" style="width:300px;height:200px;">
    </div>

    <div class="col-md-3 images" data-class="mosque">
      <img src="images/ms6.jpg" alt="" style="width:300px;height:200px;">
    </div>
    <div class="col-md-3 images" data-class="mosque">
      <img src="images/ms7.jpg" alt="" style="width:300px;height:200px;">
    </div>
    <div class="col-md-3 images" data-class="events">
      <img src="images/ms8.jpeg" alt="" style="width:300px;height:200px;">
    </div>
    <div class="col-md-3 images" data-class="events">
      <img src="images/ms9.jpeg" alt="" style="width:300px;height:200px;">
    </div>
    <div class="col-md-3 images" data-class="events">
      <img src="images/ms10.jpeg" alt="" style="width:300px;height:200px;">
    </div>
  </div>
</section>
 
    <script> 
const listItems = document.querySelectorAll('.main li');
const allimages = document.querySelectorAll('.main .container-fluid .images');

function toggleActiveClass(active){
    listItems.forEach(item => {
      item.classList.remove('active');
    })
    active.classList.add('active');
}

function toggleimages(dataClass){
    if(dataClass === 'all'){
        for(let i = 0; i<allimages.length; i++){
            allimages[i].style.display = 'block';
        }
    }else{
        for(let i = 0; i<allimages.length; i++)
            allimages[i].dataset.class === dataClass ? allimages[i].style.display = 'block' : allimages[i].style.display = 'none';
    }
}

for(let i = 0; i < listItems.length; i++){
    listItems[i].addEventListener('click', function(){
        toggleActiveClass(listItems[i]);
        toggleimages(listItems[i].dataset.class);
    });
}
    </script>

    <?php include "includes/footer.php";?>
</body>
</html>