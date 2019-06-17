<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Join_member_activity List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Act Id</th>
		<th>User Id</th>
		<th>Join Date</th>
		<th>Join Status</th>
		
            </tr><?php
            foreach ($join_member_activity_data as $join_member_activity)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $join_member_activity->act_id ?></td>
		      <td><?php echo $join_member_activity->user_id ?></td>
		      <td><?php echo $join_member_activity->join_date ?></td>
		      <td><?php echo $join_member_activity->join_status ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>