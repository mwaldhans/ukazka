<?PHP

// Start the session
session_start();

if (!$_SESSION["id_game"]){$_SESSION["id_game"] = rand(10000,50000);
$_SESSION["hrac"] =1;
}
echo $_SESSION["id_game"];
echo  session_id(); 
 
$myfile = fopen("file/".$_SESSION["id_game"], "r+") or fopen("file/".$_SESSION["id_game"], "w");
 
echo filesize("file/".$_SESSION["id_game"]);
if (fread($myfile,filesize("file/".$_SESSION["id_game"]))==0) {
$txt = '$game="0122222200000";
';
;
fwrite($myfile, $txt);


}
 
include ("file/".$_SESSION["id_game"]);

echo $game; 
 
 
fclose($myfile);
 
  

?>



<script>
function showHint(str) {
  if (str.length == 0) {
    
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        alert(this.responseText);
        document.getElementById(this.responseText).checked = true;
         
         document.getElementById(1).src = 'https://e7.pngegg.com/pngimages/752/449/png-clipart-at-sign-computer-icons-radio-button-miscellaneous-monochrome.png';
      }
    };
    xmlhttp.open("GET", "tah.php?q=00100201", true);
    
    xmlhttp.send();
  }
}
</script>

<br /><br />
<img src='https://user-images.githubusercontent.com/11351528/51387695-f564d000-1b4c-11e9-817d-5e6280f997d0.png' id=1   onclick="showHint('1')" >
  
  <input type="checkbox" id=2>
   <input type="checkbox" id=3><br />
    <input type="checkbox" id=4>
     <input type="checkbox" id=5>
      <input type="checkbox" id=6>
      <br /> <input type="checkbox" id=7>
       <input type="checkbox" id=8>
        <input type="checkbox" id=9>