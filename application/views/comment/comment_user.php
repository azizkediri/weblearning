<div class="row">
  <!-- div content -->
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="card-header">
        <h2>Comment User</h2>
      </div>
      <div class="card-body" style="height: 500px;">
        <p style="padding-left: 20px">
          This feature for comment all posting user on your input
        </p>
        <br>
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12">
            <?php echo form_open('Comment/run_comment_user'); ?>
            <form class="form-group">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </span>
                <input type="text" name="hashtags" id="hashtags" class="form-control" placeholder="input user">
              </div>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="fa fa-comment" aria-hidden="true"></i>
                </span>
                <textarea name="comment" id="comment" class="form-control" placeholder="Your commands"> </textarea>
              </div>
              <button id="btnn" class="btn btn-danger">Start</button>
              <button id="btnn_stop" class="btn btn-primary"> STOP </button>
            </form>
            <?php echo form_close(); ?>
          </div>

        </div>
        <br>
      </div>
    </div>
  </div>
  <!-- akhir div content -->
    

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
  $('#tbnn').click(function() {
    var hashtags = $("input[name='hashtags']").val();

    $.ajax({
      url: '<?php echo base_url() . "index.php/Comment/run_comment_hastags/" ?>',
      type: 'POST',
      data: {
        hashtags: hashtags,
        comment: comment
      },
      success: function(data) {
        // $('#processing').html(data);
        $('#processing').html(data);

      }
    });


  });
</script>