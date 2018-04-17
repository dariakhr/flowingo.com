<form class="" action="/admin/categorys/index" method="post">
  <button type="submit" class="btn btn-success">
    <span class="glyphicon glyphicon-share-alt">All categorys</span></a>
  </button>
</form>

<h1 class="text-center">Time to add new category:</h1>
<form class="mt-25 text-center categorys-new" action="/admin/categorys/create" method="post">
  <label>New Category</label>
  <input type="text" name="title" placeholder="Enter new category">
  <button type="submit" class="btn btn-danger " name="button">
    <i class="fa fa-angle-right"></i>
  </button>
  <p>visible</p>
  <input type="checkbox" name="visible" value="visible">
</form>
