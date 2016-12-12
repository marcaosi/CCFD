<?php require_once("../includes/cabecalho_ccfd.php"); ?>

<div class="container-fluid">
	<div class="row content">
		<div class="col-xs-10 col-xs-offset-1 page-inside">
			<h3 class="title-page-inside">Fotos</h3>
			<div class="row" style="margin-top: 20px">
		  		<div class="col-xs-12">
		  			<div class="row" id="albums">
		  			</div>
				</div>
	  		</div>
		</div>
	</div>
</div>

<?php require_once("../includes/rodape_ccfd.php"); ?>

<script>
  var token = "1151936208229978|WiriY9SjVKwi-z8sgERb6RjcnVg";
  function buscarAlbumsFacebook(){
    $.ajax({
      url: "https://graph.facebook.com/v2.8/866476266768511?fields=albums&access_token="+token,
      type: 'GET',
      success: function(retorno){
        console.log(retorno.albums.data.length)
        // retorno.albums.data.sort(function(a,b){
        //   if(a.)
        // });
        for (var k = 0; k < retorno.albums.data.length; k++) {
          if(k%6 == 0){
            $('<div>', {
              class: 'row',
              id: Math.floor(k/6)
            }).appendTo('#albums')
          }
        }
        var j = 0;
        $.each( retorno.albums.data, function( i, val ) {
          f(val.id, j);
          //console.log(i%6);
          console.log(val.id)
          j++;
        });
      }
    });
  }


  function f(id, j){
    $.when(

        $.getJSON('https://graph.facebook.com/'+id,
          {'fields': 'cover_photo,link,name', 'access_token':token}
        )

    ).done(function(json){
            $.ajax({
              url: "https://graph.facebook.com/v2.8/"+json.cover_photo.id+"?fields=picture&access_token="+token,
              type: 'GET',
              success: function(retorno){

                $('<div>', {
                  class: 'col-xs-6 col-sm-4 col-md-3 col-lg-2',
                  id: retorno.id
                }).appendTo('#'+Math.floor(j/6));

                console.log(j)

                $('<a>', {
                  html: $('<img>', {
                            class: 'img-responsive thumbnail',
                            src: retorno.picture,
                            alt: json.name,
                            height: '100px',
                            width: '150px'
                        }),
                  href: json.link,
                  target: '_blank'
                }).appendTo('#'+retorno.id);
                console.log(retorno.nome)
                $('<p>',{
                  html: json.name,
                  class: 'text-center'
                }).appendTo('#'+retorno.id);
                //$("#foto").attr('src', retorno.picture);
              }
            });
      }
    );
  }

  $(document).ready(function() {
    buscarAlbumsFacebook();
    $("#menu-foto").addClass('active');
  });
</script>