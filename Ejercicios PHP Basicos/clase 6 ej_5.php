<Html>
<Title> Prop02-5.php </Title>
<Body>
<?Php



 $producto=array(
 
        array("mouse",1000),
        array("monitor",5000),
        array("teclado",20000),
        array("auriculares",1500000),
        array("gabinete",60000),
        array("webcam",85000)
 );

    $mayorproducto="";
    $mayornombre="";
    

 for($i=0;$i<count($producto);$i++) {


    

        for($j=0;$j<count($producto[$i]);$j++) 
        {
                
                
                if($producto [$i][$j] > $mayorproducto){
                    $mayorproducto= $producto [$i][$j];
                    $mayornombre=$producto[$i] [$j-1];
                    
                }
                
        
            
        
        }
    
    }
        echo "$mayorproducto <br>".$mayornombre;

        
        
 
 ?>
</Body>
</Html>   