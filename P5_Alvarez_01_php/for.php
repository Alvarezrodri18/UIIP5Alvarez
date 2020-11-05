<html>  
    <head>     
        <title>Ejemplo de PHP</title> 
        <link rel="stylesheet" href="css/Estilo1.css"> 
    </head>  
    <body>  <p id="p1" >Parte de HTML normal. </p> <BR><BR>  
    <section id="section1">
    <?php     
    echo '<p id="p1" >Parte de PHP<br></p>';     
    for($i=0;$i<10;$i++)     {        
        echo "Linea ".$i."<br>";     
    }  
    ?>
    </section>
    </body> 

</html>