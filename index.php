<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>GATOT KACA LUKMAN</title>
  </head>
  <body>
    <div class="container">
      <div class="card mt-5">
        <div class="card-header">
         GATOT KACA LUKMAN
       </div>
       <div class="card-body">
        <form id="form_search" method="post">
          <div class="mb-3">
            <label class="form-label">Cari</label>
            <input type="text" class="form-control" id="search" name="search" placeholder="Cari disini...">
          </div>
          <button type="submit" class="btn btn-warning text-white">Cari</button>
        </form> 
        <p class="text-center mt-2"><img width="10%" src="./img/gatot.png" alt=""></p>
        <p class="text-center mt-2"><a href="http://gatot.lukman/" target="_blank" style="text-decoration:none;">Gatot Kaca </a></p>
      </div>
    </div>

    <div class="card mt-5">
      <div class="card-header">
       Hasil Pencarian
     </div>
     <div class="card-body">

      <div class="hasil" id="hasil"></div>

      <p class="text-center mt-2"><a href="http://gatot.lukman/" target="_blank" style="text-decoration:none;">GATOT</a></p>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
  $(document).on('submit','#form_search',function(e){
    e.preventDefault();
    var search = $('#search').val();
      // memulai ajax
      $.ajax({
        url: 'get_data.php', 
        method: 'post',  
        data: {search:search},    
        success:function(data){   
          $('#hasil').html(data);
          console.log(data);
        }
      });
    });
  </script>
</body>
</html>