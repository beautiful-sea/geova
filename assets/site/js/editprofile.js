

//VER UMA PRÉVIA DA IMAGEM DE PERFIL || CAPA SELECIONADA
preview = null;
function changeEditImg(input, modal){

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      preview = e.target.result;
      if(modal == "Img"){
        $('#edit'+modal+'Profile').attr('src', preview);
      }else{
        $('#edit'+modal+'Profile').css('background-image', "url("+preview+")");
      }


    }
    reader.readAsDataURL(input.files[0]);
    $("#edit"+modal+"Profile").css('border', 'solid 5px #4caf50');
  }
};

//AO SALVAR ALTERAÇÃO DA FOTO DE PERFIL
function editImgProfile() {

  form = $("#formImgProfile");

// Pegar dados do formulário
var formData = new FormData($(form)[0]);
var url = form.attr( "action" );
// Enviar os dados via post para rota
$.ajax({
  type: "POST",
  url: url,
  data: formData,
  processData:false,
  contentType: false

}).done(function( data ) {
  window.location.reload(); 
})
}

//AO SALVAR ALTERAÇÃO DA CAPA DE PERFIL
function editImgCover() {

  form = $("#formImgCover");

// Pegar dados do formulário
var formData = new FormData($(form)[0]);
var url = form.attr( "action" );
// Enviar os dados via post para rota
$.ajax({
  type: "POST",
  url: url,
  data: formData,
  processData:false,
  contentType: false

}).done(function( data ) {
  window.location.reload(); 
})
}

//AO CLICLAR NO ICONE DE FERRAMENTA DA BIO
function editBio(){
  $("#textAreaBio").css('display', 'block');
  $("#bio").css('display', 'none');
  $("#iconBio").css('display', 'none');
}

//CANCELA EDIÇÃO DA BIO
function cancelBio(){
  $("#textAreaBio").css('display', 'none');
  $("#bio").css('display', 'block');
  $("#iconBio").css('display', 'block');
}

//SALVAR NOVA BIO
function saveBio(){
  value = $("textarea").val();
  data =  {name: "description", value: value};
  $.ajax({
    type: "POST",
    url: "/me_edit",
    data: data
  }); 
  $("#bio").html(value);
  cancelBio(); 
}

//EXPANDE A TABELA COM OS DADOS DO USUÁRIO
$("#expandAbout").click(function(){
  if($(this).hasClass("fa-angle-down")){
    $("table").css("display","inline-table");
    $(this).removeClass("fa-angle-down").addClass("fa-angle-up");
  }else if($(this).hasClass("fa-angle-up")){
    $("table").css("display","none");
    $(this).addClass("fa-angle-down").removeClass("fa-angle-up");
  }
});

//AO CLICAR EM ADICIONAR PESSOA, REMOVER PESSOA DA LISTA E BUSCAR OUTRAS
$(".input-suggest-following").click(function(){
  id = this.id;
  $.post("/follow",{id:id}).done(function(data){
    setTimeout(function(){

      //remove sugestoes e adiciona novas
      if($(".suggest-following-"+id).next().is(":hidden")){
        $(".suggest-following-"+id).next().css("display","flex");
      }else{
        $(".suggest-following-"+id).next().next().css("display","flex");
      }
      $(".suggest-following-"+id).remove();

      //Se não tiver mais sugestões, remover box
      if(!$(".input-suggest-following").length){
        $(".box-maybe-meet").remove();
      }

    },2000);
  });
});



