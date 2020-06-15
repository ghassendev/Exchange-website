<php require
<html>
<style>
    p{
        background-color:blue;
    }


    h1{
        background-color:grey;
    }

    td,th {
        border: 1px solid rgb(190, 190, 190);
        padding: 10px;
    }
    
    td {
        text-align: center;
    }
    
    tr:nth-child(even) {
        background-color: #eee;
    }
    
    th[scope=col] {
        background-color: #696969;
        color: #fff;
    }
    
    th[scope=row] {
        background-color: #d7d9f2;
    }
    
    caption {
        padding: 10px;
        caption-side: bottom;
    }
    
    table {
        border-collapse: collapse;
        border: 2px solid rgb(200, 200, 200);
        letter-spacing: 1px;
        font-family: sans-serif;
        font-size: .8rem;
        background-color: white;
    }
    body{
        background-image: url(bgc.jpg);
    }
    </style>

<center>


<table border='1' style=width:50%>
<tr><td> Devise </td>
    <td> Montant Par rapport dollar </td> </tr>

    <?php
    foreach ($json['rates'] as $cur=>$val )
    {
        echo"<tr>";

         echo"<th scope=col>". $cur."</th>";
         echo"<th scope=row>".$val."</th>";
         echo"</tr>";       
      }   
 ?>   
       </table>

    <?php
    echo "<body><center><h1>le date d'aujourdhui est :".$find ."
    <br>",date('h:i:s a'),"</center> </h1>";
    ?>

    <a href='deconnexion.php'>deconnexion</a>













