<div class="row">
  <!-- div content -->
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="card-header">
        <h2>Comment Hashtag</h2>
      </div>
      <div class="card-body" style="height: 500px;">
        <p style="padding-left: 20px">
          This feature for comment all posting which have tags on your input
        </p>
        <br>
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12">

            <!-- <form class="form-group"> -->
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">
                <i class="fa fa-code" aria-hidden="true"></i>
              </span>
              <input type="text" name="hashtags" id="hashtags" class="form-control" placeholder="input hasgtag">
            </div>

            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">
                <i class="fa fa-comment" aria-hidden="true"></i>
              </span>
              <textarea name="comment" id="comment" class="form-control" placeholder="Your commands"> </textarea>
            </div>

            <button id="btnn" class="btn btn-danger">Start</button>
            <button id="btnn_stop" class="btn btn-primary"> STOP </button>
            <!-- </form> -->

          </div>

        </div>
        <br>
      </div>
    </div>
  </div>
  <!-- akhir div content -->
  <!-- Div Log -->
  <div class="col-md-4 col-sm-12 col-xs-12">
    <div class="card" style="height: 500px;">
      <h3>Log</h3>
    </div>
    <div class="card-body" style="overflow:scroll; height:320px;">

    </div>
  </div>
</div>
<!-- akhir div log -->

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
  $('#tbnn').click(function() {
    var hashtags = $("input[name='hashtags']").val();
    var comment = $("input[name='comment']").val();
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