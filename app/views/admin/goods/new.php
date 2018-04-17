<form class="" action="/admin/goods/index" method="post">
  <button type="submit" class="btn btn-success">
    <span class="glyphicon glyphicon-share-alt">All goods</span></a>
  </button>
</form>

<h1 class="text-center">Time to add new good:</h1>
<form class="mt-25 text-center categorys-new" action="/admin/goods/create" method="post">
  <label>New Good</label>
  <input type="text" name="title" placeholder="Enter title">
  <input type="text" name="description" placeholder="Enter description">
  <input type="text" name="price" placeholder="Enter price">
  <input type="text" name="photo" placeholder="Enter photo">
  <input type="text" name="category_id" placeholder="Enter category_id">

  <button type="submit" class="btn btn-danger " name="button">
    <i class="fa fa-angle-right"></i>
  </button>

</form>
