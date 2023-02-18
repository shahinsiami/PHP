<?php
//////////////////////////////////

function prepare_input($data) {
    return trim(htmlspecialchars(stripcslashes($data)));
}

function get_input($input_name, $array) {
    if(isset($array[$input_name])) {
        return prepare_input($array[$input_name]);
    }
    return null;
}

function ArraySum($array) {
    $sum = 0;
    foreach($array as $item) {
        $sum += $item;
    }
    return $sum;
}

function ArrayMean($array) {
    return ArraySum($array)/count($array);
}

function ArrayVariance($array) {
    
    $n = count($array);
    if($n == 1) {
        return 0;
    }
    
    $mean = ArrayMean($array);
    
    /*
    $s = 0;
    foreach($array as $item) {
        $s += pow($item - $mean, 2);
    }
    */
    
    $d = array_map(function($x) use ($mean) {return pow($x - $mean, 2); }, $array);
    $s = ArraySum($d);
    
    return $s/($n - 1);
}

function ArrayStDev($array) {
    return sqrt(ArrayVariance($array));
}

//////////////////////////////////
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Statistics using PHP</title>
    </head>
    <body>
        <?php
        
        include_once('functions.php');
        
        if(!empty($_POST)):
            
            $nums = get_input('nums', $_POST);
            $nums = str_replace("\r\n", ",", $nums);
            $nums = str_replace("\n", ",", $nums);

            $data = array();
            $initial_data = explode(",", $nums);
            foreach($initial_data as $item) {
                if(!empty($item)) {
                    if(filter_var($item, FILTER_VALIDATE_FLOAT) !== false) {
                        $data[] = floatval($item);
                    }
                }
            }
        
        endif;
        ?>
        <form method="post">
            
            <label for="nums">Enter numbers list:</label><br>
            <textarea id="nums" name="nums" rows="10" cols="10"><?php echo get_input('nums', $_POST); ?></textarea><br>
            <br>
            <input type="submit" value="Submit">
            
        </form>
        
        <?php
        if(!empty($data)) {
            
            $count = count($data);
            $sum = ArraySum($data);
            $mean = ArrayMean($data);
            $var = ArrayVariance($data);
            $std = ArrayStDev($data);
            
            echo "<p>Count: $count</p>";
            echo "<p>Sum: $sum</p>";
            echo "<p>Mean: $mean</p>";
            echo "<p>Variance: $var</p>";
            echo "<p>StDev: $std</p>";
        }
        ?>
        
    </body>
</html>

//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
?>