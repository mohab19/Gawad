$(function () {
  'use strict';

  var CName = true;
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

  var tbody = $('#tbody');
  var cateName = $('#cateName');
  var cateCap = $('#cateCap');
  var csrf = $('meta[name="csrf-token"]').attr('content');

  function addCategory(category) {
    tbody.append('<tr id="url'+category.id+'"><td>'+category.name+'</td><td>'+category.caption+'</td><td>'+category.created_at+'</td><td>'+category.updated_at+'</td><td><a href="/Category/'+category.id+'"><button class="btn btn-success"><i class="fa fa-edit fa-lg"></i></button></a><form style="display: inline-block;" action="/Category/'+category.id+'" method="post"><input type="hidden" name="_token" value="'+csrf+'"><input type="hidden" name="_method" value="DELETE"><button type="submit" value="'+category.id+'" class="btn btn-danger deleCate"><i class="fa fa-trash fa-lg"></i></button></form></td></tr>');
  }

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

  $('.deleCate').on('click', function (e) {
    e.preventDefault();
    var id = $(this).val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "DELETE",
        url: '/Category/' + id,
        data: id,
        success: function (data) {
            $("#url" + id).remove();
        },
        error: function (data) {
            alert('Something went wrong, please refresh the page!');
        }
    });
  });

});
