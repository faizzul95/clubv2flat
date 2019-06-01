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
        <h2>Application List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Application Id</th>
		<th>User Id</th>
		<th>Application Date</th>
		<th>Application Evaluate Date</th>
		<th>Application Status</th>
		
            </tr><?php
            foreach ($application_data as $application)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $application->application_id ?></td>
		      <td><?php echo $application->user_id ?></td>
		      <td><?php echo $application->application_date ?></td>
		      <td><?php echo $application->application_evaluate_date ?></td>
		      <td><?php echo $application->application_status ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>