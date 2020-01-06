<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style><?php include './public/css/style.css' ?></style>
    <title>SHOW DATATABLE</title>
</head>
<body>
    <div class="list">
        <h3 class="bg-info">DATA TABLE</h3>
        <table class="table">
            <colgroup>
                <col span="1" style="width: 5%;">
                <col span="1" style="width: 10%;">
                <col span="1" style="width: 20%;">
                <col span="1" style="width: 50%;">
                <col span="1" style="width: 15%;">
            </colgroup>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Link</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $stt = 1;
                    foreach($data as $value) {
                ?>
                <tr>
                    <td class="stt" scope="row"><?php echo $stt; ?></td>
                    <td><?php echo $value['savedb_link']; ?></td>
                    <td><a href = "http://localhost/CrawlerCurlMVC/home/showDataDetail?id=<?= $value['savedb_id']?>" target="self"><?php echo $value['savedb_title']; ?></a></td>
                    <td class="content"><?php print_r($value['savedb_content']); ?></td>
                    <td><?php echo $value['savedb_date']; ?></td>
                </tr>
                <?php
                    $stt++; }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>