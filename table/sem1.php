<div class="container">
		<h1 class="text-center">Kelas Sem 1</h1>
		<div class="row">
		
    <div class="wrapper">
        <form class="searchdate">
            <label for="birthday">Date:</label>
            <input type="date" id="birthday" name="birthday">
            <input type="submit" value="Submit">
        </form>
    
        <form class="kemaskini-kehadiran" method="post" action="#">
                    
            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th scope="col">Bil.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NDP</th>
                        <th scope="col">Slot 1</th>
                        <th scope="col">slot 2</th>
                        <th scope="col">slot 3</th>
                        <th scope="col">slot 4</th>
                        <th scope="col">slot 5</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM pelajar;";
                        $result = mysqli_query($conn, $sql);
                        $resultcheck = mysqli_num_rows($result);
                        
            
                        if ($resultcheck > 0){
                            $n=1;
                            
                            while ($row = mysqli_fetch_assoc($result)){
                    
                                $name = $row['nama'];
                                $NDP = $row['NDP'];
                                $hadir = $row['BilHadir'];
                                //$time = $row['DateInserted'];
                                
                                
                                
                                    echo '<tr>
                                    <th scope="row">'.$n.'</th>
                                    <td>'.$name.'</td>
                                    <td>'.$NDP.'</td>
                                    <td><input type="checkbox" name="hadir[]" value="1">.</td>
                                    <td><input type="checkbox" name="hadir[]" value="1">.</td>
                                    <td><input type="checkbox" name="hadir[]" value="1">.</td>
                                    <td><input type="checkbox" name="hadir[]" value="1">.</td>
                                    <td><input type="checkbox" name="hadir[]" value="1">.</td>
                                    </tr>';
                                    
                                    
                                    
                                    //<td>'.$time.'</td>  masukkan sekali
                                    $n++;
                                

                
                            }
                            
                        }
                    ?>
                    

        
                </tbody>
            </table>
            <button class="save" type="submit">Save</button>
        </form>
        
    </div>
</div>