
<?php


if (isset($_POST['submitPost'])) {
$rawData =  $_POST;

echo json_encode($_POST);






$hashkey = "demoCHANGED"; //Supply to us during iPay account registration;

$fields = array("live" => "0",
	"oid" => "000jkk4",
	"inv" => "1120hkjhk99",
	"ttl" => "1",
	"tel" => "0790577877",
	"eml" => "test.ytytuiyutuyiu@gmail.com",
	"vid" => "demo",
	"curr" => "KES",
	"p1" => "", //Listing uid
	"p2" => "", //amount
	"p3" => "",
	"p4" => "", //USER id
     "cbk" => "http://localhost/shop1.1/building/v2/callback.php",
     "cst" => "1",
	"crl" => "0",
);
/*
----------------------------------------------------------------------------------------------------
 ************(b.) GENERATING THE HASH PARAMETER FROM THE DATASTRING *********************************
----------------------------------------------------------------------------------------------------

The datastring IS concatenated from the data above
 */
$datastring = $fields['live'] . $fields['oid'] . $fields['inv'] . $fields['ttl'] . $fields['tel'] . $fields['eml'] . $fields['vid'] . $fields['curr'] . $fields['p1'] . $fields['p2'] . $fields['p3'] . $fields['p4'] . $fields['cbk'] . $fields['cst'] . $fields['crl'];
//$hashkey = "5de0fbf13b5d4"; //use "demo" for testing where vid also is set to "demo"

/********************************************************************************************************
 * Generating the HashString sample
 */
$generated_hash = hash_hmac('sha1', $datastring, $hashkey);

?>

       <!--/*    Generate the form BELOW   */-->
           <FORM action="https://payments.ipayafrica.com/v3/ke">
            <?php
foreach ($fields as $key => $value) {
	$key;
	echo ' <input hidden="" name="' . $key . '" type="text" value="' . $value . '">';
}
?>


            <INPUT hidden="" name="hsh" type="text" value="<?php echo $generated_hash ?>">
            <button class="btn btn-success float-right" type="submit">  Procced to checkout  </button>

         </form>





  </div></div>
</div>

             <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


<?php
}



?>
<form action = "" method = "post">



<input type = "submit" name="submitPost" value = "Buy">
</form>

