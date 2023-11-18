<style>
.wrapper,
.buttonscc button{
  background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}

.buttonscc button:hover:before{
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  border-radius: 50%;
  background: #ecf0f3;
  box-shadow: inset -3px -3px 7px #ffffff,
              inset 3px 3px 5px #ceced1;
}
.buttonscc button:hover:before{
  z-index: -1;
  border-radius: 25px;
}

.wrapper .buttonscc{
  display: flex;
  width: 100%;
  justify-content: space-between;
}
.buttonscc button {
  position: relative;
  width: 90%;
  border: none;
  outline: none;
  padding: 6px 15px;
  text-align: center;
  text-decoration: none;
  color: #000;
  font-size: 17px;
  font-weight: 700;
  border-radius: 25px;
  cursor: pointer;
  z-index: 4;
}
.buttonscc button:hover{
    color: darkcyan;
}
.buttonscc button i {
    text-align: center;
    font-size: 15px;
    top: 0.8px;
}
.buttonscc button:first-child{
  margin-right: 10px;
}
.buttonscc button:last-child{
  margin-left: 10px;
}
</style> 
<link
      rel="stylesheet"
      data-purpose="Layout StyleSheet"
      title="Web Awesome"
      href="/css/app-wa-02670e9412103b5852dcbe140d278c49.css?vsn=d"
    >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css"
      >
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
<body>
    <!-- Main Content -->
    <div class="container p-3 my-5"style="box-shadow: -3px -3px 7px #ffffff,3px 3px 5px #ceced1;
    background: #ecf0f3; border-radius: 10px;">
        <div class="w-100 justify-content-between">
                    <h4><b><i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i> Order History <i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i></b></h4>
                </div>
        <!-- DataTable Code starts -->
        <table id="example" class="table nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>No.#</th>
                    <th>DateTime</th>
                    <th>Transaction ID</th>
                    <th class="text-center">Amount</th>
                    <th class="text-center">Order Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                                $i = 1;
                                $qry = $conn->query("SELECT o.*,concat(c.firstname,' ',c.lastname) as client from `orders` o inner join clients c on c.id = o.client_id where o.client_id = '".$_settings->userdata('id')."' order by unix_timestamp(o.date_created) desc ");
                                while($row = $qry->fetch_assoc()):
                            ?>    
                 <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><span class="badge badge-primary border px-3 rounded-pill"><?php echo date("M-d-Y - H:i A",strtotime($row['date_created'])) ?></span></td>
                                    <td><?php echo md5($row['id']); ?></td>
                                    <td class="text-center"><?php echo number_format($row['amount']) ?> </td>
                                    <td class="text-center">
                                            <?php if($row['status'] == 0): ?>
                                                <span class="badge badge-warning text-light border px-3 rounded-pill">Pending</span>
                                            <?php elseif($row['status'] == 1): ?>
                                                <span class="badge badge-success border px-3 rounded-pill">Packed</span>
                                            <?php elseif($row['status'] == 2): ?>
                                                <span class="badge badge-danger border px-3 rounded-pill">Cancelled</span>
                                            <?php elseif($row['status'] == 3): ?>
                                                <span class="badge badge-success">Delivered</span>
                                            <?php else: ?>
                                                <span class="badge badge-warning">Out for Delivery</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-center">
                                <div class="buttonscc">
                            <span><a href="javascript:void(0)" class="view_order" data-id="<?php echo $row['id'] ?>"><button><i class="fa-sharp fa-solid fa-magnifying-glass"></i> View</button></a></span>
                          </div>
                            </td>
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
    <script>
    function cancel_book($id){
        start_loader()
        $.ajax({
            url:_base_url_+"classes/Master.php?f=update_book_status",
            method:"POST",
            data:{id:$id,status:2},
            dataType:"json",
            error:err=>{
                console.log(err)
                alert_toast("an error occured",'error')
                end_loader()
            },
            success:function(resp){
                if(typeof resp == 'object' && resp.status == 'success'){
                    alert_toast("Book Cancelled successfully",'success')
                    setTimeout(function(){
                        location.reload()
                    },2000)
                }else{
                    console.log(resp)
                    alert_toast("an error occured",'error')
                }
                end_loader()
            }
        })
    }
    $(function(){
        $('.view_order').click(function(){
            uni_modal("Order Details","./admin/orders/view_order.php?view=user&id="+$(this).attr('data-id'),'large')
        })
    })

</script>
</body>
<script>
$("#example").DataTable({
  responsive: true,
});
</script>