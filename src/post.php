
 <?php 
 if(!isset($_SESSION['addtocart2'])){
    $_SESSION['addtocart2'] = array();
 }
 if(!isset($_SESSION['buynow'])){
    $_SESSION['buynow'] = array();
 }

    
     if(isset($_POST["submit0"])){
        $a = '<img style="width: 20px; height: 20px;" src="images/football.png">';
		$b = 'Product 101';
		$c = 'Price: $150.00';
        $naman = array($a ,$b ,$c ,1);
        if(count($_SESSION["addtocart2"]) == 0) {
            array_push( $_SESSION["addtocart2"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["addtocart2"]) ; $i++){
                
                if($_SESSION["addtocart2"][$i][1]=='Product 101'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["addtocart2"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["addtocart2"] ,$naman);
            }
        }
    }
    if(isset($_POST["submit1"])){
        $a = '<img style="width: 20px; height: 20px; src="images/tennis.png">';
		$b = 'Product 102';
		$c = 'Price: $120.00';
        $naman = array($a ,$b ,$c ,1);
        if(count($_SESSION["addtocart2"]) == 0) {
            array_push( $_SESSION["addtocart2"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["addtocart2"]) ; $i++){
                
                if($_SESSION["addtocart2"][$i][1]=='Product 102'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["addtocart2"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["addtocart2"] ,$naman);
            }
        }
    }
    if(isset($_POST["submit2"])){
        $a = '<img style="width: 20px; height: 20px; src="images/basketball.png">';
		$b = 'Product 103';
		$c = 'Price: $90.00';
        $naman = array($a ,$b ,$c ,1);
        if(count($_SESSION["addtocart2"]) == 0) {
            array_push( $_SESSION["addtocart2"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["addtocart2"]) ; $i++){
                
                if($_SESSION["addtocart2"][$i][1]=='Product 103'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["addtocart2"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["addtocart2"] ,$naman);
            }
        }
    }
    if(isset($_POST["submit3"])){
        $a = '<img style="width: 20px; height: 20px; src="images/table-tennis.png">';
		$b = 'Product 104';
		$c = 'Price: $110.00';
        $naman = array($a ,$b ,$c ,1);
        if(count($_SESSION["addtocart2"]) == 0) {
            array_push( $_SESSION["addtocart2"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["addtocart2"]) ; $i++){
                
                if($_SESSION["addtocart2"][$i][1]=='Product 104'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["addtocart2"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["addtocart2"] ,$naman);
            }
        }
    }
    if(isset($_POST["submit4"])){
        $a = '<img style="width: 20px; height: 20px; src="images/soccer.png">';
		$b = 'Product 105';
		$c = 'Price: $80.00';
        $naman = array($a ,$b ,$c ,1);
        if(count($_SESSION["addtocart2"]) == 0) {
            array_push( $_SESSION["addtocart2"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["addtocart2"]) ; $i++){
                
                if($_SESSION["addtocart2"][$i][1]=='Product 105'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["addtocart2"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["addtocart2"] ,$naman);
            }
        }
       
    }

    if(isset($_POST["buynow0"])){
        $a = '<img style="width: 20px; height: 20px;" src="images/football.png">';
		$b = 'Product 101';
		$c = 'Price: $150.00';
        $naman = array($a ,$b ,$c ,1);
       if(count($_SESSION["buynow"]) == 0) {
            array_push( $_SESSION["buynow"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["buynow"]) ; $i++){
                
                if($_SESSION["buynow"][$i][1]=='Product 101'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["buynow"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["buynow"] ,$naman);
            }
        }
    }
    if(isset($_POST["buynow1"])){
        $a = '<img style="width: 20px; height: 20px; src="images/tennis.png">';
		$b = 'Product 102';
		$c = 'Price: $120.00';
        $naman = array($a ,$b ,$c ,1);
       if(count($_SESSION["buynow"]) == 0) {
            array_push( $_SESSION["buynow"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["buynow"]) ; $i++){
                
                if($_SESSION["buynow"][$i][1]=='Product 102'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["buynow"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["buynow"] ,$naman);
            }
        }
    }
    if(isset($_POST["buynow2"])){
        $a = '<img style="width: 20px; height: 20px; src="images/basketball.png">';
		$b = 'Product 103';
		$c = 'Price: $90.00';
        $naman = array($a ,$b ,$c ,1);
       if(count($_SESSION["buynow"]) == 0) {
            array_push( $_SESSION["buynow"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["buynow"]) ; $i++){
                
                if($_SESSION["buynow"][$i][1]=='Product 103'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["buynow"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["buynow"] ,$naman);
            }
        }
    }
    if(isset($_POST["buynow3"])){
        $a = '<img style="width: 20px; height: 20px; src="images/table-tennis.png">';
		$b = 'Product 104';
		$c = 'Price: $110.00';
        $naman = array($a ,$b ,$c ,1);
       if(count($_SESSION["buynow"]) == 0) {
            array_push( $_SESSION["buynow"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["buynow"]) ; $i++){
                
                if($_SESSION["buynow"][$i][1]=='Product 104'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["buynow"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["buynow"] ,$naman);
            }
        }
    }
    if(isset($_POST["buynow4"])){
        $a = '<img style="width: 20px; height: 20px; src="images/soccer.png">';
		$b = 'Product 105';
		$c = 'Price: $80.00';
        $naman = array($a ,$b ,$c ,1);
       if(count($_SESSION["buynow"]) == 0) {
            array_push( $_SESSION["buynow"] ,$naman);
        } else {
            $_SESSION['flag'] = 0;
            for($i = 0 ; $i < count($_SESSION["buynow"]) ; $i++){
                
                if($_SESSION["buynow"][$i][1]=='Product 105'){
                    $_SESSION['flag'] = 1;
                  $_SESSION["buynow"][$i][3]++;
                }

            }
            if($_SESSION['flag'] == 1){
            } else {
                array_push( $_SESSION["buynow"] ,$naman);
            }
        }
       
    }
function display() {
    echo '<table><tr><th>image</th><th>id</th><th>price</th><th>quantity</th></tr>';
    echo '<button type="submit" name="remove">remove all</button>';
    echo '<button type="submit" name="add">add all</button>';
    $i = 0;
      foreach( $_SESSION["addtocart2"] as $key => $value){
          //echo $key;
           echo '<tr><td>'.$value[0].'</td>';
           echo '<td>'.$value[1].'</td>';
           echo '<td>'.$value[2].'</td>';
           echo '<td>'.$value[3].'</td>';
           echo '<td><input type="text" name="text'.$i.'"></td>';
           echo '<td><input type="submit" name="edit'.$i.'" value="Edit"></td>';
           echo '<td><input type="submit" name="del'.$i.'" value="Delete"></td>';
           echo '<td><input type="submit" name="move'.$i.'" value="Buy Now"></td></tr>';
           echo '<br>';
           $i++;
      }

    echo '</table>';
 }
function dis() {
    echo '<table><tr><th>image</th><th>id</th><th>price</th><th>quantity</th></tr>';
    echo '<button type="submit" name="remove1">remove all</button>';
    $i = 0;
      foreach( $_SESSION["buynow"] as $key => $value){
           echo '<tr><td>'.$value[0].'</td>';
           echo '<td>'.$value[1].'</td>';
           echo '<td>'.$value[2].'</td>';
           echo '<td>'.$value[3].'</td>';
           echo '<td><input type="text1" name="text1'.$i.'"></td>';
           echo '<td><input type="submit" name="Edit'.$i.'" value="Edit"></td>';
           echo '<td><input type="submit" name="Del'.$i.'" value="Delete"></td>';
           echo '<td><input type="submit" name="Move'.$i.'" value="Move To Cart"></td></tr>';
           echo '<br>';
           $i++;
      }

    echo '</table>';
}
for($j = 0;$j < count($_SESSION['addtocart2']) ; $j++){
    if(isset($_POST['move'.$j])) {

          array_push($_SESSION['buynow'],$_SESSION['addtocart2'][$j]);
          array_splice($_SESSION['addtocart2'],$j,1);
    }
}
for($j = 0;$j < count($_SESSION['buynow']) ; $j++){
    if(isset($_POST['Move'.$j])) {

          array_push($_SESSION['addtocart2'],$_SESSION['buynow'][$j]);
          array_splice($_SESSION['buynow'],$j,1);
    }
}
for($j = 0;$j < count($_SESSION['addtocart2']) ; $j++){
   
    if(isset($_POST['del'.$j])) {
        array_splice($_SESSION['addtocart2'],$j,1);
    }
 }
 for($j = 0;$j < count($_SESSION['buynow']) ; $j++){
   
    if(isset($_POST['Del'.$j])) {
        array_splice($_SESSION['buynow'],$j,1);
    }
 }
 for($j = 0;$j < count($_SESSION['addtocart2']) ; $j++){
    if(isset($_POST['edit'.$j])) {
        foreach( $_SESSION["addtocart2"] as $key => $value){
            if($key == $j) {
                 $_SESSION["addtocart2"][$key][3] = $_POST['text'.$j];
            }
        }
        
    }
  
 }
 for($j = 0;$j < count($_SESSION['buynow']) ; $j++){
    if(isset($_POST['Edit'.$j])) {
        foreach( $_SESSION["buynow"] as $key => $value){
            if($key == $j) {
                 $_SESSION["buynow"][$key][3] = $_POST['text1'.$j];
            }
        }
        
    }
  
 }
  if(isset($_POST['remove'])){
    unset($_SESSION['addtocart2']);
     
  }
  if(isset($_POST['add'])){
      foreach($_SESSION['addtocart2'] as $key => $value){
      array_push($_SESSION['buynow'] ,$_SESSION['addtocart2'][$key]);
    }
    unset($_SESSION['addtocart2']);
     
  }
  if(isset($_POST['remove1'])){
    unset($_SESSION['buynow']);
      
  }


?>