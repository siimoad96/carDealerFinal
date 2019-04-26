@include('layouts.admin')

<div class="container">
        <h1 >{{$title}}</h1>
        
            <br> <br> <br>
     
        
                
            <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Ville</th>
                        <th>NOTE</th>
                        <th>Tél</th>
                        <th>Modifier client</th>
                        <th>Supprimer client</th>
        
                    </tr>
                 <?php
        /*
                 foreach(getClients($username) as $key => $value) {
                     ?>
                    <tr>
                        <form action="modifier.php" method="POST" >
                            <td><?= $value['id_user'] ?></td>
                            <td><?= $value['username'] ?></td>
                            <td><?= $value['lastname'] ?></td>
                            <td><?= $value['firstname'] ?></td>
                            <td><?= $value['cin'] ?></td>
                            <td><?= $value['address'] ?></td>
                            <td><?= '0'.$value['tel'] ?></td>
                            <td> <input type="submit" class="button5" value="Modifier"></td>
                            <td> <input type="submit" class="button5" value="Supprimer"></td>
                            <input type="hidden" name="id_client"  value=" <?php echo $value['id_user']; ?>">
                        </form>
                    </tr>
                 <?php }*/ ?>
             
                    </table>
                  
                
        </table>

   </div>
        