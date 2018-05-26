$(function () {


  var CName = true;
  var subName = true;
  var productName = true;
  //Filtiration for username field
  $('#cateName').blur(function () {
      if ($(this).val().length <= 3) {
          $(this).css('border', '1px solid #F00');
          $(this).parent().find('.cs-alert').fadeIn(400);
          CName = true;
      } else {
          $(this).css('border', '1px solid #080');
          $(this).parent().find('.cs-alert').fadeOut(200);
          CName = false;
      }
  });
  //Filtiration for Sub-Category's name field
  $('#subName').blur(function () {
      if ($(this).val().length <= 3) {
          $(this).css('border', '1px solid #F00');
          $(this).parent().find('.cs-alert').fadeIn(400);
          subName = true;
      } else {
          $(this).css('border', '1px solid #080');
          $(this).parent().find('.cs-alert').fadeOut(200);
          subName = false;
      }
  });

  $('#productName').blur(function () {
      if ($(this).val().length <= 3) {
          $(this).css('border', '1px solid #F00');
          $(this).parent().find('.cs-alert').fadeIn(400);
          productName = true;
      } else {
          $(this).css('border', '1px solid #080');
          $(this).parent().find('.cs-alert').fadeOut(200);
          productName = false;
      }
  });

  var $tbody = $('#tbody');
  var $subBody = $('#subBody');
  var $Pbody = $('#Pbody');
  var cateName = $('#cateName');
  var cateCap = $('#cateCap');
  var csrf = $('meta[name="csrf-token"]').attr('content');

  var CategoryTemp= "" +
  "<tr id='url{{id}}'>" +
  "<td>{{name}}</td>" +
  "<td>{{caption}}</td>" +
  "<td>{{created_at}}</td>" +
  "<td>{{updated_at}}</td>" +
  "<td><a href='/Category/{{id}}'><button value='{{id}}' class='btn btn-success AccCat'><i class='fa fa-edit fa-lg'></i></button></a>" +
    "<form style='display: inline-block; margin-left: 3px;' action='/Category/{{id}}' method='post'>" +
      "<input type='hidden' name='_token' value='"+csrf+"'>" +
      "<input type='hidden' name='_method' value='DELETE'>" +
      "<button type='submit' value='{{id}}' class='btn btn-danger delCat'>" +
        "<i class='fa fa-trash fa-lg'></i>" +
      "</button> " +
    "</form>" +
  "</td>" +
  "</tr>";

  var subCategoryTemp = "" +
  "<tr id='sub{{id}}'>" +
    "<td>{{name}}</td>" +
    "<td>{{caption}}</td>" +
    "<td>{{count(subCategory->Product)}}</td>" +
    "<td>{{created_at}}</td>" +
    "<td>{{updated_at}}</td>" +
    "<td>" +
      "<a href='/subCategory/{{id}}'>" +
        "<button value='{{id}}' class='btn btn-success AccCat'><i class='fa fa-edit fa-lg'></i></button>" +
      "</a>" +
      "<form style='display: inline-block; margin-left: 3px;' action='/subCategory/{{id}}' method='post'>" +
        "<input type='hidden' name='_token' value='"+csrf+"'>" +
        "<input type='hidden' name='_method' value='DELETE'>" +
        "<button type='submit' value='{{id}}' class='btn btn-danger delSub'>" +
          "<i class='fa fa-trash fa-lg'></i>" +
        "</button> " +
      "</form>" +
    "</td>" +
  "</tr>";

  var ProductTemp = "" +
  "<tr id='pid{{id}}'>" +
    "<td>0</td>" +
    "<td>{{path}}</td>" +
    "<td>{{name}}</td>" +
    "<td>{{caption}}</td>" +
    "<td>" +
      "<a href=>" +
        "<button value='{{id}}' class='btn btn-success AccCat'><i class='fa fa-edit fa-lg'></i></button>" +
      "</a>" +
      "<form style='display: inline-block; margin-left: 3px;' action='/product/{{id}}' method='post'>" +
        "<input type='hidden' name='_token' value='"+csrf+"'>" +
        "<input type='hidden' name='_method' value='DELETE'>" +
        "<button type='submit' value='{{id}}' class='btn btn-danger delSub'>" +
          "<i class='fa fa-trash fa-lg'></i>" +
        "</button> " +
      "</form>" +
    "</td>" +
  "</tr>";

  function addCategory(category) {
    $tbody.append(Mustache.render(CategoryTemp, category));
  }

  function addSubCategory(subCategory) {
    $subBody.append(Mustache.render(subCategoryTemp, subCategory));
  }

  function addProduct(Product) {
    $Pbody.append(Mustache.render(ProductTemp, Product));
  }

  $.ajax({
    type: 'GET',
    url: '/Categories',
    success: function(Categories) {
      $.each(Categories, function(i, category) {
        addCategory(category);
      });
    }, error: function () {
        alert('Error Loading Page, please try again!');
    }
  });

  $('#add-category').on('click', function(e) {
    if(CName === false) {
      e.preventDefault();
      var category = {
        _token: csrf,
        name: cateName.val(),
        caption: cateCap.val(),
      };
      $.post({
        type: 'POST',
        url: '/Categories',
        data: category,
        success: function(newCategory) {
          addCategory(newCategory);
        },
        error: function () {
          alert('Error: Something wrong with Posting Category table data!');
        }
      });
    } else if(CName === true) {
        e.preventDefault();
        $('#cateName').blur();
    }
  });

  var cat_id = $('#cat_id');
  var $subName = $('#subName');
  var $subCap = $('#subCap');
  $('#add-subCategory').on('click', function(e) {
    if(subName === false) {
      e.preventDefault();
      var subCategory = {
        cat_id: cat_id.val(),
        name: $subName.val(),
        caption: $subCap.val(),
      };
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $.ajax({
        type: 'POST',
        url: '/subCategory',
        data: subCategory,
        success: function(newSub) {
          addSubCategory(newSub);
        },
        error: function () {
          alert('Error: Something wrong with Posting Sub-Category table data!');
        }
      });
    } else if(subName === true) {
        e.preventDefault();
        $('#subName').blur();
    }
  });

  var subCat_id = $('#subCat_id').val();
  var family_id = $('#family_id').val();
  var path = $('#path')[0].files[0];
  var productName = $('#productName').val();
  var productCap = $('#productCap').val();
  $('#add-product').on('click', function(e) {
    if(productName === false) {
      e.preventDefault();
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
              'Content-Type': 'multipart/form-data',
          }
      });
      var formData = new FormData(this);
      formData.append('subCat_id', subCat_id);
      formData.append('family_id', family_id);
      formData.append('path', path);
      formData.append('name', productName);
      formData.append('caption', $('#productCap').val());
      $.ajax({
        type: "POST",
        url: '/product',
        data: formData,
        cache: false,
        processData: false,
        success: function(Product) {
          addProduct(Product);
        },
        error: function () {
          alert('Error: Something wrong with Posting in Product table data!');
        }
      });
    } else if(productName === true) {
        e.preventDefault();
        $('#subName').blur();
    }
  });

  $tbody.delegate('.delCat', 'click', function (e) {
    e.preventDefault();
    var id = $(this).val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var $tr = $("#url" + id);
    $.ajax({
        type: "DELETE",
        url: '/Category/' + id,
        data: id,
        success: function (data) {
            $tr.fadeOut(300, function () {
              $(this).remove();
            });
        },
        error: function (data) {
            alert('Something went wrong, please refresh the page!');
        }
    });
  });

  $subBody.delegate('.delSub', 'click', function (e) {
    e.preventDefault();
    var id = $(this).val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var $tr = $("#url" + id);
    $.ajax({
        type: "DELETE",
        url: '/subCategory/' + id,
        data: id,
        success: function (data) {
            $tr.fadeOut(300, function () {
              $(this).remove();
            });
        },
        error: function (data) {
            alert('Something went wrong, please refresh the page!');
        }
    });
  });

});
