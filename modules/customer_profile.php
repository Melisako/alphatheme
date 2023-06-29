
<style>
.customer .container{
    width:50%;
    margin: 0 auto;
}
.customer-table {
    width: 100%;
    border-collapse: collapse;
}

.customer-table th,
.customer-table td {
    padding: 8px;
    border: 1px solid #ccc;
}

.customer-table th {
    background-color: #f2f2f2;
  
}


</style>

<?php
if (have_rows('personal_information')) :
    while (have_rows('personal_information')) :
        the_row();
        $first_name = get_sub_field('first_name');
        $last_name = get_sub_field('last_name');
        $email = get_sub_field('email');
        $date_of_birth = get_sub_field('date_of_birth');
        $description = get_sub_field('description');
?>
        <div class="customer">
            <div class="container">
            <table class="customer-table">
                <tr>
                    <th>First Name</th>
                    <td><?php echo $first_name; ?></td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td><?php echo $last_name; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td><?php echo $date_of_birth; ?></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><?php echo $description; ?></td>
                </tr>
            </table>
            </div>
        </div>
<?php
    endwhile;
endif;
?>
