<div class="row">
  <!-- div content -->
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="card-header">
        <h2>Judul</h2>
      </div>
      <div class="card-body" style="height: 500px;">
        <p style="padding-left: 20px">
          Deskripsi
        </p>
        <br>
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12">
            <!-- <form class="form-group"> -->
            <!-- </form> -->
            <!-- </form> -->
            <!-- <form action=""> -->

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
    <div class="card">
      <div class="card-header">
        <h3>Log</h3>
      </div>
      <div class="card-body" style="overflow:scroll; height:500px;">
        <div id="response"></div>
        <p id="processing"></p>
      </div>
    </div>
  </div>
  <!-- akhir div log -->

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
  function libAjax() {
    var req;

    function start() {
      var hashtags = $("input[name='hashtags']").val();
      // "parameter1=" + parameter1.value + "&parameter2=" + parameter2.value

      var page_url = '<?php echo site_url('Like/run_like_hashtags') ?>';
      req = new XMLHttpRequest();
      var data = "hashtags=" + hashtags;
      req.open("POST", page_url, true);
      req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      req.onprogress = function(e) {
        console.log('onprogress');
        // ******** HERE : it's the actual line that output live from the echo stuff;ob_flush();flush();
        $('#processing').html(e.currentTarget.responseText);
      }
      req.send(data);
    }

    function stop() {
      req.abort();
    }
    return {
      start: start,
      stop: stop
    }
  }

  var obj = libAjax();
  $("#btnn").click(function() {
    obj.start();
  });

  $("#btnn_stop").click(function() {
    obj.stop();
  });
</script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->