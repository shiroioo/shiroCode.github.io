<div class="container">
		<h1 class="text-center">Semester 2</h1>
		<div class="row">
		
    <div class="wrapper">
       

                
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th scope="col">Bil.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NDP</th>
                    <th scope="col">slot 1</th>
                    <th scope="col">slot 2</th>
                    <th scope="col">slot 3</th>
                    <th scope="col">slot 4</th>
                    <th scope="col">slot 5</th>
                </tr>
            </thead>
            <tbody>
			<?php
                    $sql = "SELECT * FROM pelajar2;";
                    $result = mysqli_query($conn, $sql);
                    $resultcheck = mysqli_num_rows($result);
                    
        
                     if ($resultcheck > 0){
                        $n=1;
                        while ($row = mysqli_fetch_assoc($result)){
                
                            $name = $row['nama'];
                            $NDP = $row['NDP'];
                            //$time = $row['DateInserted'];
                            
                            
                            
                                echo '<tr>
                                <th scope="row">'.$n.'</th>
                                <td>'.$name.'</td>
                                <td>'.$NDP.'</td>
                                <td><input type="checkbox" name="hadir1" value="1">.</td>
								<td><input type="checkbox" name="hadir2" value="1">.</td>
								<td><input type="checkbox" name="hadir3" value="1">.</td>
								<td><input type="checkbox" name="hadir4" value="1">.</td>
								<td><input type="checkbox" name="hadir5" value="1">.</td>
                                </tr>';
                            
                            
                                //<td>'.$time.'</td>  masukkan sekali
                                $n++;
                            

              
                        }
                    }
                ?>
                

    
            </tbody>
        </table>
        
    </div>
</div>