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
        <h2>Activity List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Act Name</th>
		<th>Act Post By</th>
		<th>Act Description</th>
		<th>Act Date</th>
		<th>Act Time</th>
		<th>Act Venue</th>
		<th>Act Category</th>
		<th>Act Image</th>
		<th>Act Fee</th>
		
            </tr><?php
            foreach ($activity_member_data as $activity_member)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $activity_member->act_name ?></td>
		      <td><?php echo $activity_member->act_post_by ?></td>
		      <td><?php echo $activity_member->act_description ?></td>
		      <td><?php echo $activity_member->act_date ?></td>
		      <td><?php echo $activity_member->act_time ?></td>
		      <td><?php echo $activity_member->act_venue ?></td>
		      <td><?php echo $activity_member->act_category ?></td>
		      <td><?php echo $activity_member->act_image ?></td>
		      <td><?php echo $activity_member->act_fee ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>