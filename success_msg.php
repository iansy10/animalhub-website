<style>
     #uni_modal .modal-footer{
        display:none;
    }
.alert i {
    font-size: 70px;
    color: limegreen;
    margin-left: 41.5%;
    margin: center;
    justify-content: center;
    align-items: center;
    margin-bottom: 10px;
}
.alert h2{
    font-size: 35px;
    font-weight: 900;
    color: limegreen;
    font-family: "Poppins", sans-serif;
    text-align: center;
}
.alert p{
    font-size: 18px;
}
.alert{
    margin-top: 10px;
}
</style>


<div class="alert alert-success">
    <i class="fa-sharp fa-solid fa-circle-check fa-shake"></i>
    <h2>Thank You!</h2>
        <p>Your appointment request has been successfully submitted. The management will reach you as soon as they sees your request and please make sure to come on your scheduled date time!</p>
    </div>
    <div class="form-group text-center">
        <button class="btn btn-sm" type="button" data-dismiss="modal" style="border-radius: 25px;box-shadow: rgba(60,64,67,0.3)0px 1px 2px 0,
                  rgba(60,64,67,0.15)0px 2px 6px 2px;padding: 10px 150px;background-color: darkcyan;color: #fff;margin-bottom: -15px;">OK</button>
    </div>

<script>
    $(function(){
        $('#uni_modal').on('hide.bs.modal',function(){
            location.reload()
        })
    })
</script>