
//Deleta postagem
$(".deletePost").on("click",function(){
  post = $(event.target).closest(".materialUp");
  idPost = $(post).attr("id");

  $.post("/delpost", {id: idPost}).done(function(data){
    console.log(data);
    $(post).remove();
  })
});

//BUSCA O HORÁRIO DA POSTAGEM E CONVERTE EM TEMPO PASSADO
getTimePosted();
setInterval(function(){getTimePosted()},6000);

function getTimePosted(){
  var path = window.location.pathname;
  var url = (path == "/me")? "/getmyposts":"/getpostsfollowing";
  idPost = $(".article-post").attr("id");

  $.ajax({
    type: "POST",
    url: url,
    success: function(result){
      $.each(JSON.parse(result), function(key,value){
        time = moment(value.dtpost, "YYYYMMDD h:mm:ss").fromNow();
        $("#timePost"+value.id).html(time);
      });
    }
  });
}

//ESCURECER RESTANTE DA TELA E FOCAR NA POSTAGEM
$("#inputPost").on("focus",function(event){
  $("#postSomeThing").css("z-index","99999");
  $(".darkness").addClass("darkness_active");
});
// DESFAZER PROCESSO ANTERIOR
$("#inputPost").on("blur",function(event){
  $("#postSomeThing").css("z-index","0");
  $(".darkness").removeClass("darkness_active");
});

// ALTERNAR BOTÕES DE 'ESCREVER POST' E 'ADICIONAR IMAGEM'
$(".panel-button").on("click",function(event){
  if($(this).hasClass("panel-button-active") == false){
    $(".panel-button").toggleClass("panel-button-active");
    $("#sendPost").toggleClass("isHidden");
    $(".add-post-img").toggleClass("isHidden");
  }
  
})

//AO SELECIONAR UMA IMAGEM PARA POSTAGEM
preview = null;
function change(input){

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      preview = e.target.result;
      $('#previewImg').attr('src', preview);
      $('.box-previewImg').removeClass('isHidden');
    }
    reader.readAsDataURL(input.files[0]);
  }
};

//FECHAR BOX PREVIEW DA IMAGEM
$(".close-box-img").on("click",function(){
  $(".box-previewImg").toggleClass("isHidden");
});



//-----------------COMENTÁRIOS DO POST-----------------------
//AO VOTAR NOS COMENTÁRIOS
$(".vote").click(function(){
  var upIsChecked = $('#radio-up').is(':checked');
  var downIsChecked = $('#radio-down').is(':checked');
  console.log(upIsChecked,downIsChecked);
  if(upIsChecked){
    $(".vote.up i").toggleClass("voted");
  }else if(downIsChecked){
    $(".vote.down i").toggleClass("voted");
  }
});

$(".media .media-heading button").click(function(){
  if($(this).children().eq(0).hasClass("glyphicon-minus")){
    $(this).children().eq(0).removeClass("glyphicon-minus");
    $(this).children().eq(0).addClass("glyphicon-plus");
  }else{
    $(this).children().eq(0).removeClass("glyphicon-plus");
    $(this).children().eq(0).addClass("glyphicon-minus");
  }
  
})

$(".comments-shared").click(function(e){
  $(".comments-here").empty();
  var idPost = $(this).data("id");
  $("#modalComments").data("id",idPost);
  console.log(idPost);
  $("#modalComments").modal("show");
});

var x = 0;
$("#amountComments").click(function(){
  $(".comments-here").empty();
  var id = $("#modalComments").data("id");
  $.ajax({
    url: "/getCBIP",
    method:"POST",
    data: {id:id},
    beforeSend : function(){
      $(".beforeSend").css("visibility",'visible');
    }
  }).done(function(results){
    $(".beforeSend").css("visibility",'hidden');
    
    
    var posts = JSON.parse(results);
    var comment = 0;

    attComments(posts,comment);
  });
});

$("#formComment").on("submit",function(){
  var comment = $("textarea[name='comment']").val();
  var id_post = $("#modalComments").data("id");
  if(!comment){
    return false;
  }

  $.ajax({
    url:"/comment",
    method:"POST",
    data:{comment,id_post}
  }).done(function(result){
    $("textarea[name='comment']").val('');
  });
});

function attComments(posts,comment){
  var noPhoto = "/files/media/users/profile_default.png";
  $.each(posts,function(key,value){
    comment = '<li class="comment-item" id="'+value.id+'">\
    <div class="more" style="float:right">\
    <svg class="olymp-three-dots-icon">\
    <use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>\
    </svg><ul class="more-dropdown"><li>\
    <a href="javascript:delcomment('+value.id+')">Apagar Comentário</a></li></ul></div>\
    <div class="post__author author vcard">\
    <img width="26px" src="'+value.img_profile+'" onerror="this.src=\''+noPhoto+'\'" alt="author">\
    \
    <div class="author-date">\
    <p><a class="h6 post__author-name fn"\
    href="#">'+value.name+'</a> '+value.comment+' </p>\
    \
    <a href="#" class="post-add-icon inline-items">\
    <svg class="olymp-heart-icon">\
    <use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>\
    <span>7</span>\
    </a>\
    <a href="#" class="reply">Responder</a>\
    \
    <div class="post__date">\
    <time class="published" datetime="2017-03-24T18:18">\
    1 hour ago\
    </time>\
    </div>\
    \
    <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>\
    </div>\
    \
    </div>\
    \
    </li>';

    $(".comments-here").append(comment);
  }); 

  if(comment == 0){
    $(".comments-here").append('Seja o primeiro a comentar!');
  }
  $("#formComment").next() 
}

function delcomment(idcomment){
  confirm = true;

  if(confirm == true){
    $.ajax({
      url:"/delcomment",
      method:"POST",
      data:{idcomment}
    }).done(function(result){
      console.log(result);
    });

    $("#"+idcomment).remove(); 
  }

}