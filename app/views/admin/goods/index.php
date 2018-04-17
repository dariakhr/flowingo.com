<h1>HERE ARE OUR GOODS:</h1>
<div class="row">
  <div class="col-lg-9">
    <form class="" action="/admin/goods/new" method="post">
      <button type="submit" class="btn btn-success">
        <span class="glyphicon glyphicon-plus">Add good</span></a>
      </button>
    </form>
  </div>
  <br>
  <br>
  <table class="table table-bordered table-hover">
    <tbody>
      <tr>
        <th>id</th>
        <th>title</th>
        <th>descrition</th>
        <th>price</th>
        <th>photo</th>
        <th>date</th>
        <th>category_id</th>
        <th>edit</th>
        <th>delete</th>
      </tr>
      <?php foreach ($data['goods'] as $goods):?>
      <tr>
        <td><?= $goods['id']; ?></td>
        <td><?= $goods['title']; ?></td>
        <td><?= $goods['description']; ?></td>
        <td><?= $goods['price']; ?></td>
        <td><img src='<?= $goods['photo']?>' width="100" height="100"/></td>

        <td><?= $goods['date']; ?></td>
        <td><?= $goods['category_id']; ?></td>


        <td>
          <form class="" action="/admin/categorys/edit" method="post">
            <button class='btn-primary' type="submit" name="button"><span class="glyphicon glyphicon-pencil"></button></span>
          </form>
        </td>
        <td>
          <form class="" action="/admin/goods/destroy" method="post">
            <input type="hidden" name="goods_id" value="<?= $goods['id']; ?>">
            <button class='btn-danger' type="submit" name="button">
            <span class="glyphicon glyphicon-remove"></button></span>
          </form>
        </td>

      </tr>
    <?php endforeach ?>
    </tbody>
  </table>
