<form action="print_tr-admin.php" method="post" class="cont_table">
    <div>
        <input id="myInput" onkeyup="myFunction()" name="SearchValuee" type="text" placeholder="Search..">
        <!-- <input type="submit" name="search" value="filter"> -->
    </div>
    <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"> -->
    <table class="table table_show" id="myTable">
        <tr>

            <th key='id'>ID &nbsp;</th>
            <th key='name'>Name</th>
            <th key='case_num'>Case number</th>
            <th key='jaw'>Jaw</th>
            <th key='printer_type'>printer Type</th>
            <th key='resin_type'>Resin type</th>
            <th key='nesting'>Nesting</th>
            <th key='printing'>Printing</th>
            <th key='finishing'>Finishing</th>
            <th key='light_cure'>Light cure</th>
            <th key='ready'>Ready</th>
            <th key='date'>date</th>
            <th>-</th>
        </tr>

        <?php

        //define total number of results you want per page  
        $results_per_page = 20;
        $num_per_page = 20;

        $sql_show = "select * from print ORDER BY id DESC ";
        $result_page = mysqli_query($con, $sql_show);
        $number_of_result = mysqli_num_rows($result_page);

        // Determine number of total pages available
        $number_of_pages = ceil($number_of_result / $results_per_page);

        // Determine which page number visitor is currently on 
        if (!isset($_GET['page'])) {
            $page = 1;
        } else {
            $page = $_GET['page'];
        }

        // Determine the sql LIMIT starting number for the results on the displaying page

        $this_page_first_result = ($page - 1) * $results_per_page;

        // Retrieve selected result from database and display them on page

        $sql_show = "select * from print ORDER BY id DESC LIMIT " . $this_page_first_result . ',' . $results_per_page;
        $result_page = mysqli_query($con, $sql_show);

        while ($row = mysqli_fetch_array($result_page)) {

            if (!$row['nisting'] == "on" && !$row['printing'] == "on" && !$row['finishing'] == "on" && !$row['light_cure'] == "on" && !$row['ready'] == "on") {
                $bgColor = ' style="background-color: #ED8D8D;" '; /*new*/
            } else if ($row['nisting'] == "on" && $row['printing'] == "on" && $row['finishing'] == "on" && $row['light_cure'] == "on" && $row['ready'] == "on") {
                $bgColor = ' style="background-color: #444b50" '; /* finish */
            } else {
                $bgColor = ' style="background-color: #b9b9b9;" '; /* start */
            }

            echo "<form action='print_tr-admin.php' method='POST' >";
            echo "<tr $bgColor >";
            echo "<input hidden name='id'  value='" . "   " . $row['id'] . "   " . "'>";

            echo "<td>" . "   " . $row['id'] . "    " . "</td>";

            if ($row['name'] == "khaled") {
                echo "<td> 
                                <select name='name'>
                                    <option value='NULL'>-</option>
                                    <option value='khaled' selected >Khaled</option>
                                    <option value='Ramadan'>Ramadan</option>
                                    <option value='Omar'>Omar</option>
                                </select>
                        </td>";
            } else if ($row['name'] == "Ramadan") {
                echo "<td> 
                                <select name='name'>
                                    <option value='NULL'>-</option>
                                    <option value='khaled'>Khaled</option>
                                    <option value='Ramadan' selected >Ramadan</option>
                                    <option value='Omar'>Omar</option>
                                </select>
                        </td>";
            } else if ($row['name'] == "Omar") {
                echo "<td> 
                                <select name='name'>
                                    <option value='NULL'>-</option>
                                    <option value='khaled'>Khaled</option>
                                    <option value='Ramadan'>Ramadan</option>
                                    <option value='Omar' selected >Omar</option>
                                </select>
                        </td>";
            } else if ($row['name'] == "NULL" || $row['name'] == "" || $row['name'] == " " || $row['name'] == "-") {
                echo "<td> 
                                <select name='name'>
                                    <option value='NULL' selected>-</option>
                                    <option value='khaled'>Khaled</option>
                                    <option value='Ramadan'>Ramadan</option>
                                    <option value='Omar'>Omar</option>
                                </select>
                        </td>";
            }

            echo "<td class='tr'> <input name='case_number' value='" . $row['case_number'] . "'></td>";

            if ($row['jaw'] == "upper") {
                echo "<td name='jaw'> 
                                <select name='jaw'>
                                    <option value='upper' selected>Upper</option>
                                    <option value='lower'>Lower</option>
                                    <option value='upper&lower'>Upper & Lower</option>
                                </select>
                                </td>";
            } else if ($row['jaw'] == "lower") {
                echo "<td name='jaw'> 
                                <select name='jaw'>
                                    <option value='upper' >Upper</option>
                                    <option value='lower' selected>Lower</option>
                                    <option value='upper&lower'>Upper & Lower</option>
                                </select>
                                </td>";
            } elseif ($row['jaw'] == "upper&lower") {
                echo "<td > 
                                <select name='jaw'>
                                    <option value='upper'>Upper</option>
                                    <option value='lower'>Lower</option>
                                    <option value='upper&lower' selected>Upper & Lower</option>
                                </select>
                                </td>";
            }

            if ($row['printer_type'] == "wiibox") {
                echo "<td > 
                                 <select name='printer_type'>
                                    <option value='wiibox' selected>Wiibox</option>
                                    <option value='ph_shuffle'>Phrozen Shuffle</option>
                                    <option value='ph_sonic'>Phrozen Sonic</option>
                                </select>
                                </td>";
            } else if ($row['printer_type'] == "ph_shuffle") {
                echo "<td > 
                                 <select name='printer_type'>
                                    <option value='wiibox'>Wiibox</option>
                                    <option value='ph_shuffle' selected>Phrozen Shuffle</option>
                                    <option value='ph_sonic'>Phrozen Sonic</option>
                                </select>
                                </td>";
            } else if ($row['printer_type'] == "ph_sonic") {
                echo "<td > 
                                 <select name='printer_type'>
                                    <option value='wiibox'>Wiibox</option>
                                    <option value='ph_shuffle'>Phrozen Shuffle</option>
                                    <option value='ph_sonic' selected>Phrozen Sonic</option>
                                </select>
                                </td>";
            }

            if ($row['resin_type'] == "orange_wii") {
                echo "<td> 
                                
                                <select name='resin_type'>
                                    <option value='orange_wii' selected>Orange Wiibox</option>
                                    <option value='blue_wii'>Blue Wiibox</option>
                                    <option value='gray_wii'>Gray Wiibox</option>
                                    <option value='amd3'>AMD3-Gray</option>
                                    <option value='tmg7'>TMG7-Gray</option>
                                    <option value='dmd21'>DMD21-sand</option>
                                </select>

                                </td>";
            } else if ($row['resin_type'] == "blue_wii") {
                echo "<td > 
                                
                                <select name='resin_type'>
                                    <option value='orange_wii'>Orange Wiibox</option>
                                    <option value='blue_wii' selected>Blue Wiibox</option>
                                    <option value='gray_wii'>Gray Wiibox</option>
                                    <option value='amd3'>AMD3-Gray</option>
                                    <option value='tmg7'>TMG7-Gray</option>
                                    <option value='dmd21'>DMD21-sand</option>
                                </select>


                                </td>";
            } else if ($row['resin_type'] == "gray_wii") {
                echo "<td > 
                                
                                <select name='resin_type'>
                                    <option value='orange_wii'>Orange Wiibox</option>
                                    <option value='blue_wii'>Blue Wiibox</option>
                                    <option value='gray_wii' selected>Gray Wiibox</option>
                                    <option value='amd3'>AMD3-Gray</option>
                                    <option value='tmg7'>TMG7-Gray</option>
                                    <option value='dmd21'>DMD21-sand</option>
                                </select>


                                </td>";
            } else if ($row['resin_type'] == "amd3") {
                echo "<td > 
                                
                                <select name='resin_type'>
                                    <option value='orange_wii'>Orange Wiibox</option>
                                    <option value='blue_wii'>Blue Wiibox</option>
                                    <option value='gray_wii'>Gray Wiibox</option>
                                    <option value='amd3' selected>AMD3-Gray</option>
                                    <option value='tmg7'>TMG7-Gray</option>
                                    <option value='dmd21'>DMD21-sand</option>
                                </select>


                                </td>";
            } else if ($row['resin_type'] == "tmg7") {
                echo "<td > 
                                
                                <select name='resin_type'>
                                    <option value='orange_wii'>Orange Wiibox</option>
                                    <option value='blue_wii'>Blue Wiibox</option>
                                    <option value='gray_wii'>Gray Wiibox</option>
                                    <option value='amd3'>AMD3-Gray</option>
                                    <option value='tmg7' selected>TMG7-Gray</option>
                                    <option value='dmd21'>DMD21-sand</option>
                                </select>


                                </td>";
            } else if ($row['resin_type'] == "dmd21") {
                echo "<td > 
                                
                                <select name='resin_type'>
                                    <option value='orange_wii'>Orange Wiibox</option>
                                    <option value='blue_wii'>Blue Wiibox</option>
                                    <option value='gray_wii'>Gray Wiibox</option>
                                    <option value='amd3'>AMD3-Gray</option>
                                    <option value='tmg7'>TMG7-Gray</option>
                                    <option value='dmd21' selected>DMD21-sand</option>
                                </select>


                                </td>";
            }


            if ($row['nisting'] == "on") {
                echo "<td class=''> 
                                
                                <img src='img/check.png' class='fas fa-check-circle nisting_i'>
                                
                                <div class='container'>
                                    <div class='checkbox nisting_c'>
                                        <input type='checkbox' id='checkbox_ni" . $row['id'] . "' name='nisting' checked>
                                        <label for='checkbox_ni" . $row['id'] . "'></label>
                                    </div>
                                </div>

                                </td>";
            } else {
                echo "<td> 
                                
                                <img src='img/cancel.png' class='fas fa-times nisting_n'>
                                
                                <div class='container'>
                                    <div class='checkbox nisting_nc'>
                                        <input type='checkbox' id='checkbox_ni" . $row['id'] . "' name='nisting' >
                                        <label for='checkbox_ni" . $row['id'] . "'></label>
                                    </div>
                                </div>

                                </td>";
            }

            if ($row['printing'] == "on") {
                echo "<td name='printing'> 
                                
                                <img src='img/check.png' class='fas fa-check-circle printing_i'>
                                
                                <div class='container'>
                                    <div class='checkbox printing_c'>
                                        <input type='checkbox' id='checkbox_pr" . $row['id'] . "' name='printing' checked>
                                        <label for='checkbox_pr" . $row['id'] . "'></label>
                                    </div>
                                </div>
                                </td>";
            } else {
                echo "<td > 
                                
                               <img src='img/cancel.png' class='fas fa-times printing_n'>

                                <div class='container'>
                                    <div class='checkbox printing_nc'>
                                        <input type='checkbox' id='checkbox_pr" . $row['id'] . "' name='printing' >
                                        <label for='checkbox_pr" . $row['id'] . "'></label>
                                    </div>
                                </div>
                                </td>";
            }

            if ($row['finishing'] == "on") {
                echo "<td > 
                                
                                <img src='img/check.png' class='fas fa-check-circle finishing_i'>
                                
                                <div class='container'>
                                    <div class='checkbox finishing_c'>
                                        <input type='checkbox' id='checkbox_fi" . $row['id'] . "' name='finishing' checked>
                                        <label for='checkbox_fi" . $row['id'] . "'></label>
                                    </div>
                                </div>
                                </td>";
            } else {
                echo "<td > 
                            
                                <img src='img/cancel.png' class='fas fa-times finishing_n'>
 
                                <div class='container'>
                                    <div class='checkbox finishing_nc'>
                                        <input type='checkbox' id='checkbox_fi" . $row['id'] . "' name='finishing' >
                                        <label for='checkbox_fi" . $row['id'] . "'></label>
                                    </div>
                                </div>
                                </td>";
            }

            if ($row['light_cure'] == "on") {
                echo "<td > 
                                
                                <img src='img/check.png' class='fas fa-check-circle light_cure_i'>
                                
                                <div class='container'>
                                    <div class='checkbox light_cure_c'>
                                        <input type='checkbox' id='checkbox_lc" . $row['id'] . "' name='light_cure' checked>
                                        <label for='checkbox_lc" . $row['id'] . "'></label>
                                    </div>
                                </div>
                                </td>";
            } else {
                echo "<td> 
                                
                                <img src='img/cancel.png' class='fas fa-times light_cure_n'>
                                
                                <div class='container'>
                                    <div class='checkbox light_cure_nc'>
                                        <input type='checkbox' id='checkbox_lc" . $row['id'] . "' name='light_cure' >
                                        <label for='checkbox_lc" . $row['id'] . "'></label>
                                    </div>
                                </div>
                                </td>";
            }

            if ($row['ready'] == "on") {
                echo "<td > 
                              
                                <img src='img/check.png' class='fas fa-check-circle ready_i'>

                                <div class='container'>
                                    <div class='checkbox ready_c'>
                                        <input type='checkbox' id='checkbox_re" . $row['id'] . "' name='ready' checked>
                                        <label for='checkbox_re" . $row['id'] . "'></label>
                                    </div>
                                </div>
                                </td>";
            } else {
                echo "<td > 
                                
                             <img src='img/cancel.png' class='fas fa-times ready_n'>
                                <div class='container'>
                                    <div class='checkbox ready_nc'>
                                        <input type='checkbox' id='checkbox_re" . $row['id'] . "' name='ready' >
                                        <label for='checkbox_re" . $row['id'] . "'></label>
                                    </div>
                                </div>
                                </td>";
            }
            echo "<td class='tr'> <input name='date' value='" . $row['date'] . "'></td>";
            echo '<td class="cont_btn">
                
                            
                            <div class="btn_upd" type="" name=""><img src="img/edit.png" alt="" srcset=""></div>
                            <button class="btn_save_update" type="submit" name="btn_save_update" ><img src="img/save.png" alt="" srcset=""></button>
                            <button class="btn_del" type="submit" name="btn-delete"><img src="img/delete.png" alt="" srcset=""></button>
                           
                            </td>';
            echo "</tr>";
            echo "</form>";
        }

        ?>

        <!-- <div class="btn_upd" type="" name=""><i class="far fa-edit"></i></div> -->
        <!-- <button class="btn_save_update" type="submit" name="btn_save_update"><i class="far fa-save"></i></button> -->
        <!-- <button class="btn_del" type="submit" name="btn-delete"><i class="far fa-trash-alt"></i></button> -->

    </table>
    <?php
    // echo '<div class="_page">';

    // echo ' <a id="curidx" class="pagination" href="print_tr-admin.php?page=1">' . "First" . '</a>';
    // for ($page = 1; $page <= $number_of_pages; $page++) {
    //     echo ' <a id="curidx" class="pagination" href="print_tr-admin.php?page=' . $page . '">' . $page . '</a>';
    // }
    // echo ' <a id="curidx" class="pagination" href="print_tr-admin.php?page=' . $number_of_pages . '">' . "Last" . '</a>';
    // echo '</div>';
    ?>
    <?php


    echo '  <div class="pagination">';

    $pr_query = "select * from print ";
    $pr_result = mysqli_query($con, $pr_query);
    $total_record = mysqli_num_rows($pr_result);

    $total_page = ceil($total_record / $num_per_page);

    if ($page > 1) {
        echo "<a href='print_tr-admin.php?page=" . ($page - 1) . "' class='btn btn-danger prev'>Previous</a>";
    }


    for ($i = 1; $i < $total_page; $i++) {
        echo "<a href='print_tr-admin.php?page=" . $i . "' class='btn btn-primary'>$i</a>";
    }

    if ($i > $page) {
        echo "<a href='print_tr-admin.php?page=" . ($page + 1) . "' class='btn btn-danger next'>Next</a>";
    }

    echo '</div>';


    ?>
</form>