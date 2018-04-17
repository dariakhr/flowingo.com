<div class="row">
  <div class="col-lg-9">
  <form class="" action="/admin/categorys/new" method="post">
    <button type="submit" class="btn btn-success">
      <span class="glyphicon glyphicon-plus">Add category</span></a>
    </button>
  </form>
</div>
<div class="col-lg-3">
  <form class="" action="/admin/categorys/deleteall" method="post">
    <button type="submit" class="btn btn-danger">
      <span class="glyphicon glyphicon-remove">Delete all categories</span></a>
    </button>
  </form>
</div>
</div>


<h1>CATEGORYS:</h1>
  <table class="table table-bordered table-hover">
    <tbody>
      <tr>
        <th>id</th>
        <th>title</th>
        <th>created_at</th>
        <th>updated_at</th>
        <th>position</th>
        <th>edit</th>
        <th>delete</th>
      </tr>
      <?php foreach ($data['categorys'] as $categorys):?>
      <tr>
        <td><?= $categorys['id']; ?></td>
        <td><?= $categorys['title']; ?></td>
        <td><?= $categorys['created_at']; ?></td>
        <td><?= $categorys['updated_at']; ?></td>
        <td><?= $categorys['position']; ?></td>
        <td>
          <form class="" action="/admin/categorys/update" method="post">
            <input type="hidden" name="category_id" value="<?= $categorys['id']; ?>">
            <button class='btn-primary' type="submit" name="button" id='go'>
            <span class="glyphicon glyphicon-pencil"></span></button>
          </form>
        </td>
        <td>
          <form class="" action="/admin/categorys/destroy" method="post">
            <input type="hidden" name="category_id" value="<?= $categorys['id']; ?>">
            <button class='btn-danger' type="submit" name="button">
            <span class="glyphicon glyphicon-remove"></span></button>
          </form>
        </td>

      </tr>
    <?php endforeach ?>
    </tbody>
  </table>
<form class="edit" action="index.html" method="post">

</form>

<!-- <div id="modal_form" class='container-fluid'>
  <div id="modal_close">
    <button class='btn-danger' type="submit" name="button">
      <span class="glyphicon glyphicon-remove"></span>
    </button>
  </div>=
  <h3>Time for edit:</h3>
  <form class="" action="index.html" method="post">
    <div class="">
      <h4>Title</h4><input type="text" name="" value="">
      <h4>Position</h4><input type="text" name="" value="">
      <h4>Visible</h4><input type="text" name="" value="">
    </div>
    <button class='btn-success' type="submit" name="button">
      <span class="glyphicon glyphicon-ok"></span></button>
    </form>

  </div>
  <div id="overlay"></div> -->
