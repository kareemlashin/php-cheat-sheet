<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>-------------------------------- Cookies   --------------------------------------------<br>";
    /*
    * Cookies  used to now who is person 
    * Cookies  used to set setting person
    * Cookies   
    */
  $name22 = 'COOKIE_NAME_Cookies_Cookies';
  $value22 = 'VALUE_Cookies_Cookies';
  $expireTime22 = strtotime('+1 years');
  $path22 = '/';
  setcookie($name22,$value22,$expireTime22,$path22);
 
  echo "<pre>";
  print_r($_COOKIE);
  echo "</pre>";
  echo "isset". isset($_COOKIE['COOKIE_NAME_Cookies_Cookies']);
  // remove  
  # unset($_COOKIE['remember_user']); 
  # setcookie("key","",time()-3600);

?>

<?php 
session_start();
$_SESSION['NAME']="NAME1";
$_SESSION['AGE']="AGE";
$_SESSION['SALARY']="SALARY";

echo "<br> ".$_SESSION['NAME']." <br>";
echo "<br> ".$_SESSION['AGE']." <br>";
echo "<br> ".$_SESSION['SALARY']." <br>";
#session_unset();   // clear
#session_destroy(); // no session
?>

<!DOCTYPE html>
<html lang="en">

<head>

          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <style>
          .f-100{font-size: 50px;}
          span{
            background-color: #eee;
            color: #000;
            border-radius: 25px;
            display: inline-block;
            margin-left: 10px;
            margin-right: 10px;
            padding: 5px 10px;
            min-width: 50px;
            max-width: 60px;
            text-align: center;
            
          }
          .one{
              width: 50px;
              height: 50px;
              background-color: red;
              color: #fff;
              border-radius: 50%;
              display: flex;
              align-items: center;
              justify-content: center;
          }
              </style>
</head>

<body>             

<div class="f-100">
<?php 
include("./two.php")
?>
</div>
<div class="f-100">
    <?php include("include.php"); ?>
</div>

<?php
          //  tool to dynamic web
          //  PHP Hypertext Preprocessor 
          //  server side  code in server 
          //  web server 
          //  amp => apache mysql php
          //  x a m p p =>all operator system apache mysql php perl
          //  IDE integrated development environment
          //  mix html and php
          
?>


<?php
    echo "syntax < ?php ? >";
?>


<div>
<?php
    echo "echo to print";
    echo "<br>---------------------------------------------------------------------------------------";
?>
</div>
    <?php include("include.php"); ?>
<div>
<?php
              echo "this name line is statement echo & ";
              print "print => ";
              print "to print";
              echo "<br> echo is fast ";
              echo "<br> echo output all type of data ";
              echo "<br> echo is language construct ";
              echo "<br> double quote  ";
              echo "<br> single quote  ";
              echo "<h1 class='name'>h1</h1> ";
              echo "<h1 class=\"name\">skip \"\" </h1> ";
?>
</div>

        <?php include("include.php"); ?>
        <?php
            echo "---------------------------------------------------------------------------------------<br>";
            echo "variables";
            echo "<br>-----------------------------------------------------------------------------------<br>";
            $numberNum = 23;
            $name      = "kareem lashin";
            echo "<p>name $name</p>";
            echo "<p>age $numberNum</p>";
            echo "<br>----------------------------------------------------------------------------------<br>";
            echo "<br>------------------------------------rules variables-------------------------------<br>";
            echo "<ul>
            <li>start_</li>
            <li>start char</li>
            <li>no space</li>
            <li>name_name</li>
            <li>nameName</li>
            <li>this cant use because this is devin in php</li>
            </ul>";
        ?>

<?php 
    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------ Concatenation ------------------------------------<br>";
    $one  = 23;
    $two  = " kareem lashin ";
    $two .= " kareem elsayed ";
    echo $one . ' ' . $two;
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>----------------------------------  Comments  -----------------------------------------<br>";
    // Comments
    /*
    * Comments
    * Comments
    */
    //=========================================================================
    //==                       Comments                                      ==
    //=========================================================================
    $news = "hello";   // Comments
    $news2 = "hello";  # Comments

?>



<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------  Data Type ---------------------------------------<br>";


    $str         =    "string";  
    $num         =    55;
    $bool        =    true;
    $float_num   =    10.55;          #float not int num
    $arr         =    array("Volvo", "BMW", "Toyota");
    $dataNull    =    null;
    $obj         =    new book();
    $res         =    mysqli_connect("","","","");


    class book{
          function FunctionName()
          {
          }
    }

    echo "<br>------------------------------------ str  ---------------------------------------------------<br>";
    var_dump($str);
    echo "<br>------------------------------------      ---------------------------------------------------<br>";
    echo gettype($str);
    echo "<br>------------------------------------ num  ---------------------------------------------------<br>";

    var_dump($num);
    echo "<br>------------------------------------   ---------------------------------------------------<br>";
    echo gettype($num);
    echo "<br>------------------------------------ bool  -----------------------------------------------<br>";

    var_dump($bool);
    echo "<br>------------------------------------   ---------------------------------------------------<br>";
    echo gettype($bool);
    echo "<br>------------------------------------ float  ----------------------------------------------<br>";


    var_dump($float_num);        # float
    echo "<br>------------------------------------    ---------------------------------------------------<br>";
    echo gettype($float_num);    # double
    echo "<br>------------------------------------ arr  -------------------------------------------------<br>";

    var_dump($arr);
    echo "<br>------------------------------------   ---------------------------------------------------<br>";
    echo gettype($arr);
    echo "<br>------------------------------------ data Null  ------------------------------------------<br>";

    var_dump($dataNull);  
    echo "<br>------------------------------------   ---------------------------------------------------<br>";
    echo gettype($dataNull);
    echo "<br>------------------------------------ obj  ------------------------------------------------<br>";

     var_dump($obj);
    echo "<br>------------------------------------   ---------------------------------------------------<br>";
    echo gettype($obj);
    echo "<br>------------------------------------ resource  -------------------------------------------<br>";

    var_dump($res);         # boolean if cant find if find resource
    echo "<br>------------------------------------   ---------------------------------------------------<br>";
    echo gettype($res);    # boolean if cant find if find resource
    echo "<br>------------------------------------   ---------------------------------------------------<br>";

    

?>


<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------  Constant ----------------------------------------<br>";

    /*
    * syntax
    * GLOBAL 
    * level scope
    * cant change value
    */

    const CONST_ALL="SECOND";

    $var_all   =  "value";
    $var_data=5455;

    define('CONSTANT_ALL' , "VALUE Constant" , false);
    define('NAME_ALL',"ALLnEWS");
    define("NAME","4444");

    // MAGIC Constant
    echo CONSTANT_ALL;

    echo '<br>';
    echo __DIR__;
    echo '<br>';
    echo __FILE__;
    echo '<br>';
    echo __LINE__;
?>
    
<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------  If, Elseif, Else --------------------------------<br>";
    $data_one  =      true;
    $type      =      gettype($data_one);
    if ($data_one) {
        echo "<h6 class=\"kareem\">kareem $data_one  ----- $type ---- $type2</h6>";
    }else{
        echo "<h5 class=\"$data_one\">data $data_one </h5>";
    }
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------  Arithmetic Operators ----------------------------<br>";
    # +  => +=  => same add any 
    # -  => -=
    # *  => *= 
    # %  => %=
    # /  => /=
    # **
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------ Assignment Operators  ----------------------------<br>";
    # =
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------ Comparison Operators  ----------------------------<br>";
    # 
    #
    # getter than >  >= 
    # less than   <  <= 
    # ===
    # ==
    # !==
    # !=
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>--------------------------- Increment / Decrement Operators  --------------------------<br>";
    $addNum=55;
    $subNum=44;
    echo ++$addNum . '<br>';
    echo --$subNum;
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------  Logical Operators -------------------------------<br>";
    # and    &&
    # or     ||
    # not    ! 
    # xor    any one true not all true
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>--------------------------- Error Control Operator  -----------------------------------<br>";
    // @
    # $file= @fopen("on.text","r") or die("this file is not found");
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>--------------------------------- String Operators   ----------------------------------<br>";
    $onws   =  "php";
    $onws  .=  " oop";
    echo $onws;
?>

<?php 
    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------   Loop -------------------------------------------<br>";
    for ($i=0; $i <5 ; $i++) { 
        echo $i .'<br>';
    }
    /*
    for ($i=0; $i < 5; $i++) { 
        # code...
    }
    foreach ($variable as $key => $value) {
        # code...
    }
    while ($a <= 10) {
        # code...
    }
    do {
        # code...
    } while ($a <= 10);
    */
    for ($i=0; $i < 10; $i++) { 
        # code...
    }
    echo '<br>';
    $a=0;
    while ($a <= 5) {
        echo $a .'<br>';
        ++$a;
    }

    echo '<br>';
    $z=0;
    do {
        echo $z .'<br>';
        $z++;
    } while ($z <= 5);
        echo '<br>';

    for ($x=0; $x <5 ; $x++) { 
        if ($x==1) {
            continue;
        }
        
        if ($x==4) {
                break;
        }

        echo $x .'<br>';
    }
    echo '<br>';
    $all=array("1"=>'one','555'=>"fif",'1597'=>"now",'123'=>"lolo");
    foreach ($all as $key => $value) {
        echo "<div>$value</div>";
        echo "<div>$key</div>";
    }
    foreach ($all as $key => $value) {
        # code...
                echo "<div>$key</div>";

    }

?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------ Function   ---------------------------------------<br>";
    function name() {
    echo "Function";
    }
    name();
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>-------------------------  Function With Arguments ------------------------------------<br>";
    function name2($var) {
    echo "Function ". $var;
    }
    name2("  Arguments");
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------  Function With Return   --------------------------------------<br>";
    function name3($var) {
    return "return ". $var;
    }
    $retu= name3("  Arguments");
    echo "<div>$retu</div>";
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------ Function default  --------------------------------<br>";
    function name4($var=99) {
    return "return ". $var;
    }
    $retu4= name4("  Arguments");
    echo "<div>$retu4</div>";
?>
<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------ Array    -----------------------------------------<br>";
    // Array Indexed
    $arrVar1=array("l","k","j");
    echo $arrVar1[0];
    echo "<pre>";
    print_r($arrVar1);
    echo "</pre>";
    foreach ($arrVar1 as $key => $value) {
        # code...
        echo "$value <br>";

    }
    // Array Associative
    $arrVar2=array("ee"=>"l","ll"=>"k","ggg"=>"j");
    $arrVar2['fff']="fffff";
    echo "<br>" . $arrVar2["ee"] ."11111111111";

    foreach ($arrVar2 as $key => $value) {
        # code...
        echo $value . " " . $key . "<br>";

    }
    //Array Multidimensional
    $arrVar3=array(array("l","k","j"),array("l","k","j"),array("l","k","j"));
    $arrVar5=array("1"=>array("l","k","j"),"2"=>array("l","k","j"),"3"=>array("l","k","j"));
      echo $arrVar5["1"][1];
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------ Array Methods  -----------------------------------<br>";
    $newArr=array("12","22","33","44","55","10");
    if (in_array(44,$newArr)) {
            echo "in array";

    }else{
        echo "not in array";

    }

    $search=array_search("44",$newArr);
    echo "<br> yes " . $search . " value " . $newArr[$search];
    $newArr2=array("1"=>"12","2"=>"22","3"=>"33","4"=>"44","5"=>"55","6"=>"10");


    if (array_key_exists("4",$newArr)) {
            echo "<br> key exists in array";

    }else{
        echo "<br> key exists not in array";
    }

    echo "<br>";
    echo "<br>";

    array_push($newArr,"4444","4444444444444444444444");
    array_unshift($newArr,"first","ff1","ff2");
    echo "<br>";
    echo "<br>";


    array_pop($newArr);
    array_shift($newArr);
    echo "<br>";
    echo "sort";



    sort($newArr,SORT_REGULAR);   
    print_r($newArr);

    echo "<br>";
    echo "<br>";
    echo "Rsort";


    Rsort($newArr,SORT_STRING);      
    print_r($newArr);
    echo "<br>";
    echo "<br>";


    // string => number
    echo "<br>";
    print_r($newArr);
    echo "<br>";
    echo "array_reverse";



    array_reverse($newArr);
    print_r($newArr);
    echo "<br>";
    echo "<br>";

    
    array_reverse($newArr,false); // save index
    print_r($newArr);
    echo "<br>";
    echo "shuffle";

    
    shuffle($newArr); // خلط العناصر
    print_r($newArr);
    echo "<br>";

    //Associative 
    print_r($newArr2);
        echo "Asort";

    Asort($newArr2,SORT_STRING);   
    echo "<br>";
    echo "ARsort";


    ARsort($newArr2,SORT_STRING);      
    print_r($newArr2);
    echo "<br>";

    
    //Associative 
    print_r($newArr2);
    echo "ksort";
    ksort($newArr2,SORT_STRING);   
    echo "<br>";
    echo "KRsort";


    KRsort($newArr2,SORT_STRING);      
    print_r($newArr2);
    echo "<br>";
    echo "<br>";
    
    
    //fill


    echo "<br> array_fill <br> <br>";
    echo "<br> array_fill <br>";
    
    $arrNew33=array_fill(1,5,"ffff");
    $arrNew23=array_fill(1,1,array("212","5454","159753"));
    echo "<br> array_fill <br>";
    print_r($arrNew33);
    echo "<br> array_fill <br>";
    print_r($arrNew23);

    echo "<br>";
    //sum
    echo "arrSum";

    $arrSum=array(1,2,3,55,554,5454,5454,54587899,56533232,45454);
    $su=array_sum($arrSum);
    echo "<br>".$su; // float point , i ignore string 

    echo "<br>";
    echo "array_rand";

    //random name , count
    $rand=array_rand($arrSum,3);
    print_r($rand);
    echo "<br>";    
    echo "array_unique";



    //array unique
    $arrUNi=array(1,2,3,1,2,3,1,2,3,4,56,1,2,3);
    $un=array_unique($arrUNi);

    echo "<br>";
    echo "<br>";
    print_r($arrUNi);

    echo "<br>";
    echo "<br>";
    print_r($un);


?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------   ------------------------------------------------<br>";
    $lamborghinis = array("Urus", "Huracan", "Aventador");
    echo "Size of the array is: ". 
    sizeof($lamborghinis);
    echo "<br>";

    
    /************ */
    echo is_array($lamborghinis) ? 'Array' : 'not an Array';
        echo "<br>";

    /************ */
    $mycar = "Urus";
    // using ternary operator
    echo is_array($mycar) ? 'Array' : 'not an Array';
    echo "<br>";

    /************ */
    $concept = "estoque";
    echo in_array($concept, $lamborghinis) ? 'Added to the Lineup' : 'Not yet!';
    echo "<br>";

    /************ */

    /************ */
    $hatchbacks = array(
        "Suzuki" => "Baleno",
        "Skoda" => "Fabia",
        "Hyundai" => "i20",
        "Tata" => "Tigor"
    );

    $friends = array("Vinod", "Javed", "Navjot", "Samuel");
    $merged = array_merge($hatchbacks, $friends);
    
    /************ */
    
    sort($lamborghinis);
    print_r($lamborghinis);    echo "<br>";

    /************ */
    
    $num33 = array(10, 20, 30, 40, 50);
    print_r(array_reverse($num33));    echo "<br>";

    /************ */
    
    $colors = array("red", "black", "blue", "green", "white", "yellow");
    echo "Color of the day: ". $colors[array_rand($colors)];
    echo "<br>";
    
    /************ */
    print_r(array_slice($colors, 2, 3));    
    echo "<br>";
    
    $a2=array("purple","orange");
    array_splice($colors, 2, 3,$a2);
    print_r($colors);    echo "<br>";


?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------   ------------------------------------------------<br>";
    echo "<br>";
    echo "array_filter";

    function test_odd($var)
    {
    return($var ==2);
    }

    $ax=array(1,3,2,3,4);
    print_r(array_filter($ax,"test_odd"));
    
    echo "<br>";
    echo "array_merge <br>";
    
    
    $ax1=array("red","green");
    $ax2=array("blue","yellow");
    print_r(array_merge($ax1,$ax2));


    echo "<br>";
    echo "array_rand <br>";

    $ax=array("red","green","blue","yellow","brown");
    $random_keys=array_rand($ax,3);
    print_r($random_keys);

    echo "<br> array_replace <br>";

    $a1=array("red","green");
    $a2=array("blue","yellow");
    print_r(array_replace($a1,$a2));
?>
<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------   ------------------------------------------------<br>";


    /*
    
    * is_array($array)
    
    * array_rand($array,$num)                                   array shuffle array output uum
    
    * array_pop($array)
    
    * array_shift($array)
    
    * array_unshift($array,"")
    
    * array_push($array,"value")
    
    * array_replace($array1,$array2)                           replace array to anther array
    
    * array_merge($array1,$array2)                             merge array1 and array2
    
    * array_filter($ax,"function")                             filter array 
    
    * array_splice($array, place, remove , $array_replace);         
    
    * array_slice($array, start, length)
    
    * array_reverse($array)
    
    * sort($array)
    * rsort($array)
    * Asort($array)
    * ARsort($array)
    * KRsort($array)
    * k by key replace a

    * array_unique($array)
    
    * array_sum($array)
    
    * array_fill(1,5,"fill")
    
    * in_array($array,"value")
    
    * sizeof($array)
    
    * shuffle($array)
    
    * array_search("value",$array)                              return index
    
    * count($array)

    */

     /*
    !         SORT_REGULAR - compare items normally (don't change types)

    ?         SORT_NUMERIC - compare items numerically

    todo      SORT_STRING - compare items as strings

    */
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------ Explode   ----------------------------------------<br>";
    $str_one="m1 1m 2m 3m m4 m5 m6 m7 m8 m9 m10";
    echo "<br>" . $str_one ."<br>";
    $one_explode=explode(" ",$str_one);
    $one_explode2=explode(" ",$str_one,2);
    echo "<pre>";
    print_r($one_explode);
    echo "</pre>";
    echo "<pre>";
    print_r($one_explode2);
    echo "</pre>";

    foreach ($one_explode as $key => $value) {
        echo "<h1>$value</h1>";
    }
    $str_one3="html,css,js,sass,jquery,boot,uikit,angular,vue,vuex,ngxs,rxjs";
    $skils=explode(",",$str_one3);
    foreach ($skils as $key => $value) {
        echo "<span>$value</span>";
    }

?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------ Implode   ----------------------------------------<br>";
    $Implode_str= array("one", "two","three","four");
    $manager=implode(" | ",$Implode_str);
    $manager2=implode(" & ",$Implode_str);
    echo "<br>". $manager ."<br>";
    echo "<br>". $manager2 ."<br>";
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------  join --------------------------------------------<br>";

    $join_str2= array("one", "two","three","four");
    $manager3=join(" | ",$join_str2);
    $manager4=join(" & ",$join_str2);
    echo "<br>". $manager3 ."<br>";
    echo "<br>". $manager4 ."<br>";

?>
<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------ String Functions  --------------------------------<br>";
    $base_str   = "kareem  lashin   bad ali    ";
    $bad  =array('bad','bad','bad','bad');
    $good  =array(' ',' ',' ',' ',' ',' ',' ',' ');
    $str_change=str_replace($bad,$good,$base_str);
    echo "<br>";

    echo "<div >".$str_change ."</div>";
    echo "<br>";
    parse_str("name=Peter&age=43",$myArray2);
    print_r($myArray2);
    /* 

    * str_split($string,num)  //1 to char //5 => 5 cahr and الباقي 

    * chunk_split($string,length 76 ,end['any'])   end => \r\n  // in length put end

    * Str_Replace('replace_a','replace_with',$string,$i => count)
    * Str_Replace(array('k',"n"),array('kareem',"a"),$string,$i => count)
    * Str_Replace(array('k',"n","a"),array('kareem'),$string,$i => count) n & a => empty string

    * str_Repeat($string,Repeat>0)

    * str_shuffle($string)
    
    * strlen($string)

    * addslashes($string)   add skip '' ""  
    * stripslashes($string) clean skip 

    * strip_tags($string) remove tags
    * strip_tags($string,"<br> <span>") remove all tags but not remove br , span

    * strtolower($string)
    * strtoupper($string)
    * lcfirst($string)
    * ucfirst($string)
    * ucwords($string)

    * Trim($string) no space 
    * ltrim($string)
    * rtrim($string)
    * Trim($string,"char") no space  and remove char
    * ltrim($string,"char")
    * rtrim($string,"char")

    * str_word_count($string) number of word
    * str_word_count($string,1) as array word
    * str_word_count($string,2) as assistive array  key position
    * str_word_count($string,2,"$ - & *") count special char 

    * parse_str($string,$array) convert string to array

    * nl2br($string, default true)  \n new line   <br />
    * nl2br($string , false)  \n new line         <br> with out self close

    * strpos($string,"value")
    * strpos($string,"value",start from)
    * stripos($string,"value")
    * stripos($string,"value",start from)    
    * strrpos($string,"value")
    * strrpos($string,"value",-start from)
    
    * strstr($string,"value search",default => false)  all after this  
    * strstr($string,"value search",true)  all before this  
    * strchr() == strstr()

    * strcmp 0 ==  
    * strcmp any num <0  اكبر منه بعدد حروف
    * strcmp -num اقل منه بعدد حروف

    * strncmp($string1,$string2,length) هل عدد length مساوي في string 1 and 2

    * strrev($string)

    * substr($string,start,num of char) 

    * substr_count($string,"value",start,num of char) how many value count in string after substr

    */
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>---------------------------- Include, Require  ----------------------------------------<br>";
    echo "<br> print in include ".$git1 ."<br>";
    include_once("./include_once.php");
    // require  == include
    // include warning 
    // require fatal error
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>--------------------------------- Switch  ---------------------------------------------<br>";
    $cas="1";
    switch ($cas) {
        case "1":
        {
            echo "1";
            break;
        }
            case "2":
        {
            echo "2";
            break;
        }
            case "3":
        {
            echo "3";
            break;
        }
        default:
        {
            echo "default";
        }
    }
?>

<?php 



    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>---------------------------------- File   ---------------------------------------------<br>";
    $file="one.text";
    if (file_exists($file)) {
    echo "ok <br>";    
    file_put_contents($file,"file_put_contents"); // if not found create file
    }else{
        echo "not f <br>";
    }

    if (is_writable($file)) {
    echo "is_writable <br>";    
    }else{
        echo "not is_writable <br>";
    }
    if (!is_dir("public")) {
    mkdir("public");
    }
    if (is_dir("public1")) {
    rmdir("public1");
    }
    # Dirname = folder name
    echo __FILE__ . "<br>"; 
    
    # "/../" to back
    echo dirname("C:\xampp\htdocs\php\php\lecture_1\index.php") . "<br>";
    #dirname(file,2) 2 to back 
    echo basename(__FILE__,".php"); # to back name  file with out ext
    
    /*
    * is_dir 
    * file_exists
    * mkdir
    * rmdir
    * is_writable 
    * file_put_contents
    * basename 
    * dirname
    */
    # file_put_contents(FILE,DATA,MODE | LOCK_EX)
    #LOCK_EX NOT ANY CAN WRITE WHEN WRITE
    /*
    * [mode] =>  
    * FILE_APPEND  TO JUST UPDATE
    * TO REMOVE NOT PUT FILE_FILE_APPEND
    * 
    */
    


    # file_get_contents(path,include_path,context,start,length)
    echo "<br>" . file_get_contents("one.text",false,NULL,3,4) ."<br>";

    # copy , rename
    /*
    copy(old_file,new_file)
    */
   # copy("kareem.php","./public/kareem_new.php");
   # rename("./public/kareem_new.php","./public/rename.php");
   # copy("E:/cv/banks/1.jpeg","./public/2.jpeg");
?>
<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>--------------------------------  Pathinfo --------------------------------------------<br>";
   $file_info = pathinfo(__DIR__);
    echo "<br>";
   print_r(pathinfo(__DIR__));
      echo "</pre> <br>";

   echo $file_info["dirname"] ."<br>";
   echo $file_info["basename"] ."<br>";
   echo $file_info["filename"] ."<br>";

   // remove file
   # unlink("ppp.php");
  

?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------ Scandir ------------------------------------------<br>";
    echo "<pre> ";
    print_r( scandir("C:/xampp/htdocs/php/php/lecture_1",SCANDIR_SORT_NONE));
    echo "</pre> <br>";
    echo "<pre> ";
    print_r( scandir("C:/xampp/htdocs/php/php/lecture_1",SCANDIR_SORT_ASCENDING));
    echo "</pre> <br>";

    echo "<pre> ";
    print_r( scandir("C:/xampp/htdocs/php/php/lecture_1",SCANDIR_SORT_DESCENDING));
    echo "</pre> <br>";

?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>--------------------------------- Fopen  ----------------------------------------------<br>";
    /*
    [mode]
    r  : just read 
    r+ : read and write
    w  : write and clear and create if not exist  pointer in start
    w+ : write and read                           pointer in start
    a  : write  [create if not exist]          pointer in end
    a+ : write and read [create if not exist]  pointer in end
    x  : create a new 
    x+ : create a new

    */
    $op  =  fopen("fopen.text","r");
?>
<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>---------------------------------- Fread  ---------------------------------------------<br>";
    $fr  =  fread($op,filesize("fopen.text"));
    echo    filesize("fopen.text") . "<br>";
    echo $fr . "<br>";
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>----------------------------------  Fwrite --------------------------------------------<br>";
        $op2   = fopen("fopen.text","r+");
        $write = fwrite($op2," kareem lashin lashin lashin ");

    echo $fr . "<br>";

?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------ Fseek  -------------------------------------------<br>";
    # index string in file
    # SEEK_SET 
    # SEEK_END START FROM END 
    # SEEK_CUR AFTER LAST INDEX
    $sek   = fseek($op2,0);
    echo $sek;
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>--------------------------------- Fclose    -------------------------------------------<br>";
    fclose($op2); # TO CLOSE FILE
?>
<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------ Globals ------------------------------------------<br>";
    // $GLOBALS["NAME_VAR"]
    $BB   = "BB";
    function item2() {
    echo $GLOBALS["BB"];
    }
    item2();
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------ Server  ------------------------------------------<br>";
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";
    echo $_SERVER["SERVER_NAME"];

?>

<form method="get" action="get.php">
<input name="name">
<input name="name2">
<input name="name3">
<button>go</button>
</form>
<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------ Get  ---------------------------------------------<br>";
    // request 
    // get query
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------ POST  --------------------------------------------<br>";
    // no query
    // and get send data 
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>-------------------------------- Request  ---------------------------------------------<br>";
    /*
    * 
    * 
    * 
    * 
    * 
    * 
    * 
    * 
    *  
    */
?>


<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------ sleep   ------------------------------------------<br>";
    // stop many second
    # sleep(1);
    # usleep(1000000); 1 second
    echo "1";
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>-------------------------------- Exit, Die  -------------------------------------------<br>";
    # exit() to exit not complete any thing 
    # die 
    # $file_use=fopen($file,"r") or exit("print");
    # $file_use=fopen($file,"r") or die("print");
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>--------------------------------- Uniqid   --------------------------------------------<br>";
    # not repute
    // uniqid("start in ")
    // uniqid("start in ","more_entropy" true 23 char)
    // uniqid("start in ","more_entropy" false 13 char)
    $random=uniqid("start_in_1",true); // 13 char  to used in image 
    echo $random;
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>--------------------------------  Filter  ---------------------------------------------<br>";
    # Filter to Filter  any thing
    # filter script
    $Filter_as="<h1>Filter  bad  </h1>";
    foreach (filter_list() as  $value) {
        echo $value ."<br>";
    }
    echo filter_var($Filter_as,FILTER_SANITIZE_STRING);
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>-------------------------------- Filter_Var   -----------------------------------------<br>";
    # filter_var($var,FILTER_TYPE,$OPTION);
    $OPTION_Filter=array("options"=>array("key"=>"value","key"=>"value","key"=>"value",));
    # echo filter_var($Filter_as,FILTER_SANITIZE_STRING,$OPTION_Filter);

?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------  Date  -------------------------------------------<br>";
    $now_date='';
    echo time() . "<br>";
    echo time() . "<br>";
    echo time() . "<br>";
    echo date_default_timezone_get() . "<br>"; // time zone 
    echo date_default_timezone_set("Africa/Cairo") . "<br>"; // set time zone 
    echo date_default_timezone_get() . "<br>"; // time zone 
  
    echo date('Y-m-d') . "<br>";
    # date('Y-m-d',$time_stamp) . "<br>";
    echo date('Y-m-d h:i:s') . "<br>";
    echo date('Y-m-d') . "<br>";
    
    
    echo date('d')   . "<br>";        // day of month
    echo date('Y')   . "<br>";       // year
    echo date('l')   . "<br>";      // day of week
    echo date('1')   . "<br>";     // 2nd  3tr  
    echo date('F')   . "<br>";    // moth english
    echo date('m')   . "<br>";   // moth number
    echo date('A')   . "<br>";  // A am , pm

?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>----------------------------------- Strtotime   ---------------------------------------<br>";
    #now to start
    $string_to_time=strtotime('now',time()-3600); // [+/-] day / week  /month /year 
    echo $string_to_time;
    echo date('Y-m-d h:i:s',$string_to_time) . "<br>";

?>
<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>-----------------------------------  Php.ini   ----------------------------------------<br>";
    # file 
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>--------------------------------- chmod   ---------------------------------------------<br>";
 /*   
    // Read and write for owner, nothing for everybody else

    chmod("test.txt",0600);



    // Read and write for owner, read for everybody else

    chmod("test.txt",0644);



    // Everything for owner, read and execute for everybody else

    chmod("test.txt",0755);



    // Everything for owner, read for owner's group

    chmod("test.txt",0740);
    */
?>

<?php 

    echo "<br>---------------------------------------------------------------------------------------<br>";
    echo "<br>------------------------------------ phpinfo  -----------------------------------------<br>";
    phpinfo();

?>


 
</body>
</html>
