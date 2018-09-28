<?php                                   
                                        
        $users = array(                                 
         0=>array(                                     
                'id' => 10,                                      
                'name' => 'Messi',                                       
                'email' => array(                                        
                'gmail' => '10@gmail.com',                                       
                'yahoo' => '10@yahoo.com',                                       
        ),                                      
        ),                                      
        1=>array(                                      
                'id' => 7,                                        
                'name' => 'Ronaldo',                                     
                'email' => array(                                        
                'gmail' => '7@gmail.com',                                        
                'yahoo' => '7@yahoo.com',                                        
        ),                                      
        ),
        2=>array(
                'id' => 13, 
                'name' => 'Muller',
                'email' => array(
                'gmail' => '13@gmail.com',
                'yahoo' => '13@yahoo.com',
        ),
        ),
        3=>array(
                'id' => 11, 
                'name' => 'Neymar',
                'email' => array(
                'gmail' => '11@gmail.com',
                'yahoo' => '11@yahoo.com',
        ),
        ),                                     
                                                
);                                      
?>                                      
<html>                                  
        <head>                      
        </head>                                                           
        <body>  
                <h1>Hiện bảng thông tin</h1>                        
                <table>                
                        <tr>            
                                <td>ID</td>     
                                <td>Name</td>   
                                <td>Email</td>
                        </tr>
                        <?php for ($i=0 ; $i < count($users); $i++):?>
                         <tr>
                                <td><?php echo $users[$i]['id'];?></td>
                                <td><?php echo $users[$i]['name'];?></td> 
                                <td><?php echo $users[$i]['email']['gmail'];?></td> 
                        <?php endfor; ?>
                         </tr> 
                </table>
                <h1>Tìm ID 15</h1>
                        <p>
                                <?php
                                        $check = false;
                                        for($i=0 ; $i < count($users); $i++){
                                        if($users[$i]['id'] == 15){
                                                $check = true;
                                        }
                                }
                                if($check == true){
                                        echo" Co ID = 15 trong mang ";
                                }else{
                                        echo"Khong co ID 15 trong mang ";
                                }
                                ?>
                        </p>
                        <h1>Sắp xếp ID theo thứ tự tăng dần</h1>
                <table>                 
                        <tr>            
                                <td>ID</td>     
                                <td>Name</td>   
                                <td>Email</td>
                        </tr>
                        <?php for ($i=0 ; $i < count($users); $i++):?>
                         <tr>
                                <?php sort($users)['id'];?>
                                <td><?php echo $users[$i]['id'];?></td>
                                <td><?php echo $users[$i]['name'];?></td> 
                                <td><?php echo $users[$i]['email']['gmail'];?></td>
                               
                                <?php endfor; ?>
                         </tr> 
                </table>
        </body>                         
</html>                                 