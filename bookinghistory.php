<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
<body>
    <!-- Main Content -->
    <div class="container p-3 my-5"style="box-shadow: -3px -3px 7px #ffffff,3px 3px 5px #ceced1;
    background: #ecf0f3; border-radius: 10px;">
        <div class="w-100 justify-content-between">
                    <h4><b><i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i> Appointment History <i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i></b></h4>
                </div>
        <!-- DataTable Code starts -->
        <table id="example" class="table table-striped nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>No.#</th>
                    <th>Date Created</th>
                    <th>Appointment Schedule</th>
                    <th>Service</th>
                    <th class="text-center">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $i = 1;
                        $qry = $conn->query("SELECT a.*,a.ailment,a.services,a.date_sched,a.status,a.id as aid from `appointments` a inner join patient_list p on p.id = a.patient_id order by unix_timestamp(a.date_sched) desc");
                        while($row = $qry->fetch_assoc()):
                    ?>       
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><span class="badge badge-primary border px-3 rounded-pill"><?php echo date("M-d-Y - H:i A",strtotime($row['date_created'])) ?></span></td>
                    <td><span class="badge badge-info border px-3 rounded-pill"><?php echo date("M-d-Y - h:i A",strtotime($row['date_sched'])) ?></span></td>
                    <td><span class="badge badge-info border px-3 rounded-pill"><?php echo $row['services'] ?></span></td>
                    <td class="text-center"><?php 
                                switch($row['status']){ 
                                    case(''): 
                                        echo '<span class="badge badge-warning border px-3 rounded-pill">Pending</span>';
                                    break; 
                                    case(1): 
                                    echo '<span class="badge badge-success border px-3 rounded-pill">Confirmed</span>';
                                    break; 
                                    case(2): 
                                        echo '<span class="badge badge-danger border px-3 rounded-pill">Cancelled</span>';
                                    break; 
                                    default: 
                                        echo '<span class="badge badge-secondary">NA</span>';
                                } 
                                ?></td>
                    <!--<td><?php $status=$row['ailment'];
                                        if($status==''){
 echo "Waiting for confirmation";   
} else{
echo $status;
}
?>  </td>-->
                </tr>  
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <!-- DataTable JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>

    <!-- Custom JS -->
    <script></script>
</body>
<script>
$("#example").DataTable({
  responsive: true,
});
</script>