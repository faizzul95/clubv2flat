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
        <h2>Contactus List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Contact Name</th>
		<th>Contact Email</th>
		<th>Contact Comment</th>
		<th>Contact Date Issue</th>
		
            </tr><?php
            foreach ($contactus_data as $contactus)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $contactus->contact_name ?></td>
		      <td><?php echo $contactus->contact_email ?></td>
		      <td><?php echo $contactus->contact_comment ?></td>
		      <td><?php echo $contactus->contact_date_issue ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>