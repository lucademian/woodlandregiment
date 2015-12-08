<?php
    $line_break = '&#13;&#10;';
    $indent_text = '&nbsp&nbsp&nbsp&nbsp';
    $input = $_POST["text"];
    if(!isset($_POST["text"])){
        $display_text = "Enter text...";
    } else{
        $input = str_split($input);
        for($i = 0; $i < count($input); $i+=1)
        {
            switch($input[$i])
            {
                case ";":
                    $input[$i] = $input[$i] . $line_break;
                    break;
                case "{":
                    $input[$i] = $input[$i] . $line_break . $indent_text;
                    break;
                case "}":
                    $input[$i] = $input[$i] . $line_break;
                    break;
            }
        }
        $display_text = implode($input);
    }
?>
<form mehod="post" action="expand.php">
    <textarea name="text">
        <?php echo $display_text; ?>
    </textarea>
    <input type="submit" value="Submit">
</form>
<h1>Updated</h1>
