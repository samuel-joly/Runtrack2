<form action="index.php" method="get">
       
    <div>
        <label for="height">Height :</label>
        <input type="text" name="height"/>
    </div>
   
    <div>
        <label for="width">Width :</label>
        <input name="width" type="text"/>
    </div>
   
    <input type="submit" value="Créer"style="width:100%;margin-top:15px;"/>
   
</form>
 
 
<div id="houseZone">
 
    <?php
       
        $height = $_GET["height"];
        $width = $_GET["width"];
       
        $Rodrigo = 0;
        $count = $height;
       
        while($Rodrigo<$height*2)
        {
            if ($Rodrigo==0)
            {
                $air=0;
                while($air < (($width - $Rodrigo)*2 ))
                {
                    echo "&nbsp";
                    $air ++;
                }
               
                echo "/\\";
            }
            else if($Rodrigo < $height)
            {
                $air=0;
                while($air < ($width - $Rodrigo)*2 )
                {
                    echo "&nbsp";
                    $air ++;
                }
               
                echo "/";
                $roof = 0;
                while($roof < (($width-($width-$Rodrigo))*2))
                {
                    echo "_";
                    $roof ++;
                }                  
               
                echo "\\";
            }
           
            else if($Rodrigo >= $height && $Rodrigo <= $height*2)
            {
               
                $air=0;
                while($air < $width+2 )
                {
                    echo "&nbsp";
                    $air ++;
                }
               
               
                echo "|";
               
                $wall = 0;
               
                while ($wall<($width*2)-4)
                {
                    if($count == 1)  
                    {
                        if($wall < $width-2)
                        {
                            echo "_";
                        }
                    }
                    else
                    {
                        echo "&nbsp";                          
                    }
                    $wall++;
                }
                echo "|";
               
                $count--;
            }
           
           
           
           
            echo "<br/>";
           
            $Rodrigo ++;
        }
       
       
       
       
 
 
    ?>
 
 
</div>
 
 
<style type="text/css">
   
    body
    {
        display:flex;
    }
   
    #houseZone
    {
        width:50%;
        height:500px;
        border:1px solid grey;
        margin:auto;
        overflow:scroll;
    }
   
    #houseZone *
    {
        margin:20px
    }
   
    #infoZone
    {
       
       
    }
   
   
    form
    {
        display:flex;
        flex-direction:column;
        width:150px;
        margin:auto;
    }
   
    div
    {
        display:flex;
        margin-top:5px;
    }
   
 
 
    label
    {
        width:90%;
        font-size:20px;
    }
   
    input
    {
        height:30px;
        width:30px;
        border-width:1px;
        background-color:rgba(160,160,160,70);
    }
 
</style>