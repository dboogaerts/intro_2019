$(function() {
  console.log("action", history.data);

    getAllcategories();
    getHomeProducts();
    
  $(".categorie_select").on("change", e => {
    console.log("event", e);
    history.pushState({ action: "cat" }, "category", "./category");
  });
});

function getAllcategories() {
  $.get("./categories.php", data => {
    $(data).each((index, element) => {
      const option = $("<option>");
      option.attr("value", element.id);
      option.text(element.nom);
      console.log(option, element.nom);
      $(".categorie_select").append(option);
    });
  });
}

function getHomeProducts(){
    $.get('produits.php', (data)=> {
        $('.title').text('Tshirt Récents')
        $(data.first).each((index,img)=>{
          console.log('tee');
            $('.content_home>.pageContent').append(createThumb(img));
        })
    });
}

function createThumb(image) {
    const thumb = $("<div>",{class:'thumb'});
    $('<p>').text(image.prod_nom).appendTo(thumb);
    $('<img>').attr('src',`labo_img/${image.prod_img_pt}`).appendTo(thumb)
    return thumb;
}