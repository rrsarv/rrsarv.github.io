
<?php 
$name = $_REQUEST['name']; 
$email = $_REQUEST['email']; 
$country = $_REQUEST['country']; 
$city = $_REQUEST['city']; 
$addres = $_REQUEST['addres']; 
$password = $_REQUEST['password'];; 
$fam = $_REQUEST['fam']; 
$lang = $_REQUEST['lang']; 
$prof = $_REQUEST['prof']; 
$info = $_REQUEST['info']; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/profil.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <header class="container-fluid d-flex  align-items-center">  
      <div class="cont col-12 d-flex justify-content-between align-items-center">

      <div class="container-list col-8 d-flex justify-content-between align-items-center">
        <a href="#" class="b0 col-4" >smartFix</a>
        <a href="http://maket/start-clean/Main.html#" class="b1 col-1">Главное</a>
        <a href="#" class="b2 col-1">Поиск</a>
        <a href="#" class="b3 col-1">Корзина</a>
       
      </div>
        </div>
    </header>
    
    <main class="main">

        <div class="card mb-3" >
            <div class="row g-0">
              <div class="col-md-4">
                <img src="img/нетфото.jpg" class="img-fluid rounded-start" height="40%" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?php echo "$name";?> <?php echo "$fam";?></h5>
                  <p class="card-text">
                    <p>Email: <?php echo "$email";?></p>
                    <p>Страна: <?php echo "$country";?></p> 
                    <p>Город: <?php echo "$city";?></p> 
                    <p>Язык: <?php echo "$lang";?></p>
                    <p>Адрес: <?php echo "$addres";?></p>
                    <p>Профессия: <?php echo "$prof";?></p>
                    
                  </p>
                  <p class="card-text"><small class="text-body-secondary">Онлайн</small></p>
                  <p></p>
                </div>
              </div>
              
            </div>
            
          </div>
          <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
              О себе
            </button>
          </p>
          <div style="min-height: 120px;">
            <div class="collapse collapse-horizontal" id="collapseWidthExample">
              <div class="card card-body" style="width: 300px;">
                <p><?php echo "$info";?></p>
              </div>
            </div>
          </div>
        <div class="contatata">
          
            <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">Отложенные</div>
                  </div>
                  <span class="badge text-bg-primary rounded-pill">5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">Доставки</div>
                    Близжайшая: 29.03.2024
                  </div>
                  <span class="badge text-bg-primary rounded-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">Лист ожидания</div>
                  </div>
                  <span class="badge text-bg-primary rounded-pill">1</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Мои покупки</div>
                      Оставьте отзывы на покупки
                    </div>
                    <span class="badge text-bg-primary rounded-pill"></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Мои способы оплаты</div>
                    </div>
                    <span class="badge text-bg-primary rounded-pill"></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Финансы</div>
                    </div>
                    <span class="badge text-bg-primary rounded-pill"></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Активные сеансы</div>
                    </div>
                    <span class="badge text-bg-primary rounded-pill"></span>
                  </li>
              </ol>
    </main>

    <dno class="dno">
      <div class="dnoo">
        <img src="img/футер.png"  alt="dnooo" >
      </div>
    </div>
    </body>

