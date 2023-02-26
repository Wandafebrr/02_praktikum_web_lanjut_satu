<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praktikum 3</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

:root{
    --orange:#ff7800;
    --black:#130f40;
    --light-color:#666;
    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
    --border:.2rem solid rgba(0,0,0,.1);
    --outline:.1rem solid rgba(0,0,0,.1);
    --outline-hover:.2rem solid var(--black);
}

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: all .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 7rem;
}

body{
    background:#eee;
}

.col{
    width: 25%;
    height: 50%;
}

</style>

</head>
<body>
<h1 style="text-align: center; margin-top:100px; margin-bottom:50px">NEWS</h1>
    <div class="row row-cols-1 row-cols-md-2 g-4" style="margin-left:300px">
        <div class="col">
          <div class="card">
            {{-- <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.rumah123.com%2Fpanduan-properti%2Ftips-properti-109481-furniture-unik-untuk-rumah-kecil-id.html&psig=AOvVaw0RkbVDmpXlnnl__ELz0Zg-&ust=1677421134111000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCLja5ujusP0CFQAAAAAdAAAAABAJ" class="card-img-top" alt="..."> --}}
            <div class="card-body">
              <h4 class="card-title text-center text-decoration-none"><a href="/news/bencana-alam">Bencana Alam</a> </h4>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            {{-- <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fshopee.co.id%2FCREATIVE-ART-DVISORY-AESTHETIC-IPHONE-CASE-%2528READY-STOCK-IP-6-13-PRO-MAX%2529-i.336143411.8916842705&psig=AOvVaw3EP7D55R8YG_dBTpKMH4WT&ust=1677420673632000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCLD9mo3tsP0CFQAAAAAdAAAAABAF"class="card-img-top" alt="..."> --}}
            <div class="card-body">
              <h4 class="card-title text-center text-decoration-none"><a href="/news/intermezzo">Intermezzo</a></h4>

            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            {{-- <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fid.pinterest.com%2Fpin%2F33917803435699940%2F&psig=AOvVaw3EP7D55R8YG_dBTpKMH4WT&ust=1677420673632000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCLD9mo3tsP0CFQAAAAAdAAAAABAK" class="card-img-top" alt="..."> --}}
            <div class="card-body">
              <h4 class="card-title text-center text-decoration-none"><a href="/news/olahraga">Olahraga</a> </h4>

            </div>
          </div>
        </div>
      </div>

      <button type="button" class="btn btn-dark position-absolute top-50 start-50 translate-middle"><a href="/" class="text-decoration-none"><h3 style="color: white">Back to Home</h3></a></button>

</body>
</html>
