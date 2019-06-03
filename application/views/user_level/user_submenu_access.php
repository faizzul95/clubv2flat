<div style="overflow-x:auto;">
 <table class="table table-bordered table-striped" id="mytable">
    <thead>
        <tr>
            <th width="30px">No</th>
            <th>Module Name</th>
            <th width="100px">Give Access</th>
        </tr>
        <?php
        $no = 1;
        $level = $this->uri->segment(3);
        foreach ($menu as $m) {
            echo "<tr>
            <td>$no</td>
            <td>$m->menu_title</td>
            <td align='center'><input type='checkbox' ". check_access($level, $m->menu_id)." onClick='give_access($m->menu_id)'></td>
            </tr>";
            $no++;
        }
        ?>
    </thead>
</table>
</div>