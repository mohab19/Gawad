$(function () {

  var tbody = $('#tbody');
  var cateName = $('#cateName');
  var cateCap = $('#cateCap');
  var csrf = $('input[name="_token"]');
  function addCategory(category) {
    tbody.append('<tr><td>'+category.name+'</td><td>'+category.caption+'</td><td>'+category.created_at+'</td><td>'+category.updated_at+'</td><td><a href="/subCtegory/'+category.id+'"><button class="btn btn-success"><i class="fa fa-edit fa-lg"></i></button></a><a href="#"><button class="btn btn-danger"><i class="fa fa-trash fa-lg"></i></button></a></td></tr>');
  }
  $.ajax({
    type: 'GET',
    url: '/Categories',
    success: function (categories) {
      $.each(categories, function(index, category) {
        addCategory(category);
      });
    },
    error: function () {
      alert('Error: Something wrong with loading Category table data!');
    }
  });

  $('#add-category').on('click', function(e) {
    e.preventDefault();
    var category = {
      _token: csrf.val(),
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
  });

});
