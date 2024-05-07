<form method="POST" class="cont_table">
    <!-- <button class="btn_add" name="btn-add"><i class="fas fa-plus-circle"></i> Add</button> -->

    <table class="table table_add">
        <tr>
            <th key='name'>Name</th>
            <th key='case_num'>Case number</th>
            <th key='jaw'>Jaw</th>
            <th key='printer_type'>printer Type</th>
            <th key='resin_type'>Resin type</th>
            <th key='nesting'>Nisting</th>
            <th key='printing'>Printing</th>
            <th key='finishing'>Finishing</th>
            <th key='light_cure'>Light cure</th>
            <th key='ready'>Ready</th>
            <th>-</th>
        </tr>


        <tr>

            <td>
                <select name="name" id="">
                    <option value="NULL">-</option>
                    <option value="khaled">Khaled</option>
                    <option value="Ramadan">Ramadan</option>
                    <option value="Omar">Omar</option>
                </select>
            </td>

            <td><input type="text" name="case_num" required></td>

            <td>
                <select name="jaw" id="">
                    <option value="upper">Upper</option>
                    <option value="lower">Lower</option>
                    <option value="upper&lower">Upper & Lower</option>
                </select>
            </td>

            <td>
                <select name="printer_type" id="">
                    <option value="wiibox">Wiibox</option>
                    <option value="ph_shuffle">Phrozen Shuffle</option>
                    <option value="ph_sonic">Phrozen Sonic</option>
                </select>
            </td>

            <td>
                <select name="resin_type" id="">
                    <option value="orange_wii">Orange Wiibox</option>
                    <option value="blue_wii">Blue Wiibox</option>
                    <option value="gray_wii">Gray Wiibox</option>
                    <option value="amd3">AMD3-Gray</option>
                    <option value="tmg7">TMG7-Gray</option>
                    <option value="dmd21">DMD21-sand</option>
                </select>
            </td>

            <td>
                <div class="container">
                    <div class="checkbox">
                        <input type="checkbox" id="checkbox2" name="nisting">
                        <label for="checkbox2"></label>
                    </div>
                </div>
            </td>

            <td>
                <div class="container">
                    <div class="checkbox">
                        <input type="checkbox" id="checkbox3" name="printing">
                        <label for="checkbox3"></label>
                    </div>
                </div>
            </td>

            <td>
                <div class="container">
                    <div class="checkbox">
                        <input type="checkbox" id="checkbox4" name="finishing">
                        <label for="checkbox4"></label>
                    </div>
                </div>
            </td>

            <td>
                <div class="container">
                    <div class="checkbox">
                        <input type="checkbox" id="checkbox5" name="light_cure">
                        <label for="checkbox5"></label>
                    </div>
                </div>
            </td>

            <td>
                <div class="container">
                    <div class="checkbox">
                        <input type="checkbox" id="checkbox6" name="ready">
                        <label for="checkbox6"></label>
                    </div>
                </div>
            </td>

            <!-- <td class="cont_btn_save"><button class="btn_save" type="submit" name="btn_save"><i
                        class="far fa-save"></i></button></td> -->

            <td class="cont_btn_save"><button class="btn_save" type="submit" name="btn_save"><img src="img/save.png"
                        alt="" srcset=""></button></td>

        </tr>

    </table>
</form>