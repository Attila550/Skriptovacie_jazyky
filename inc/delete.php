<?php
include('database.php');
function GetPortfolio(){
    $sql = 'SELECT * FROM portfolio';
    $result = $GLOBALS['mysqli']  -> query($sql);
    foreach ($result as $portfolio) {
        echo '
        <div class="col-md-4">
        <div class="product-item">
          <a href="#"><img src="'.$portfolio['img'].'" alt=""></a>            
            <span>Reviews (24)</span>
          </div>
        </div>
      </div> ';
    }
};

function GetPortfolioAdmin(){
    $sql = 'SELECT * FROM portfolio';
    $result = $GLOBALS['mysqli']  -> query($sql);
    foreach ($result as $portfolio) {
      echo'
      
          <form action = "crud.php" method = "post">
        <div class="col-md-3">
          <input type = "text" name = "id" value = '.$portfolio['id'].' hidden>
                 <input type = "text" name = "img" value = "'.$portfolio['img'].'" placeholder = "img-src">
                      <input type = "submit" name = "edit_portfolio" value = "Upravit">
                      <input type = "submit" name = "remove_portfolio" value = "Vymazat">

               
        </div> 
          </form>';

  }
  echo 
      
  '
  <form action = "crud.php" method = "post">
  <div class="col-md-3">

              <input type = "text" name = "img"  placeholder = "img-src">                  
                  <input type = "submit" name = "add_portfolio" value = "Pridat"> 
      </div> 
      </form>';
      
};