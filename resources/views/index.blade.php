<Doctype! html>
    <head>
        <title>Tracker</title> 
         <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <!-- Bootstrap cdn -->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
         <!-- end of bootstrap cdn -->
         <link rel="stylesheet" type="text/css" href="{{url('/css/style.css')}}">
         <style>
         .container {
            padding: 2rem 0rem;
            }

        h4 {
            margin: 2rem 0rem 1rem;
            }

        .table-image {
             td, th {
                 vertical-align: middle;
                     }
                    }
         
         </style>
        </head>
    <body >
        <div class="wrapper">
            <?php echo file_get_contents('resources/preserve.svg');?>
        <!-- code for adding bootstrap model -->
        <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Home List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- trying something -->
      <div class="container">
  <div class="row">
    <div class="col-12">
		<table class="table table-image">
		  <thead>
		    <tr>
		      <th scope="col">Image</th>
		      <th scope="col">Title</th>
		      <th scope="col">Specification</th>
		      <th scope="col">price</th>
              <th scope="col">Bedroom</th>
              <th scope="col">Bathromm</th>
              <th scope="col">Garage</th>
              <th scope="col">Status</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td class="w-25">
			      <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/sheep-3.jpg" class="img-fluid img-thumbnail" alt="Sheep">
		      </td>
		      <td>Home Title will be here</td>
		      <td>The specification of the home will be here</td>
		      <td>9130</td>
              <td>2</td>
              <td>2</td>
              <td>2</td>
              <td>sold</td>
		    </tr>
		    <tr>
		      <td class="w-25">
			      <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/sheep-3.jpg" class="img-fluid img-thumbnail" alt="Sheep">
		      </td>
		      <td>Home Title will be here</td>
		      <td>The specification of the home will be here</td>
		      <td>9130</td>
              <td>2</td>
              <td>2</td>
              <td>2</td>
              <td>sold</td>
		    </tr>
            <tr>
		      <td class="w-25">
			      <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/sheep-3.jpg" class="img-fluid img-thumbnail" alt="Sheep">
		      </td>
		      <td>Home Title will be here</td>
		      <td>The specification of the home will be here</td>
		      <td>9130</td>
              <td>2</td>
              <td>2</td>
              <td>2</td>
              <td>sold</td>
		    </tr>
            <tr>
		      <td class="w-25">
			      <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/sheep-3.jpg" class="img-fluid img-thumbnail" alt="Sheep">
		      </td>
		      <td>Home Title will be here</td>
		      <td>The specification of the home will be here</td>
		      <td>9130</td>
              <td>2</td>
              <td>2</td>
              <td>2</td>
              <td>sold</td>
		    </tr>
		  </tbody>
		</table>   
    </div>
  </div>
</div>

      <!-- tried  -->







      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



        <!-- end of code for adding bootstrap model -->
         </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script>
    var appUrl = window.location.href;
       $('g').click(function(){
        var id = $(this).find("text").text();
        console.log(id);
        $.ajax({
             type: "post",
             url: appUrl+"api/lot/click",
             data:{
                "id":id
             },
             dataType:"json",
             success: function(result){
                $('#exampleModalCenter').modal();
             }

       });
       });

    //    Ajx for counting the impression of lot
       $.ajax({
             type: "post",
             url: appUrl+"api/lot/impression",
             dataType:"json",
             success: function(result){
                 console.log(result);
             }

       });
    </script>


</html>