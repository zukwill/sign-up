<?php
if ($_POST['Password']==$_POST['ConfirmPassword']){ 
    echo "თქვენ წარმატებით გაიარეთ რეგისტრაცია";
} else {
    echo "პაროლი და მისი კონფირმაცია არასწორია";
}
?>