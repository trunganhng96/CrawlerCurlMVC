<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../../../public/css/style.css"> -->
    <title>SHOW DATATABLE</title>
</head>
<body>
    <div class="list" style="margin: auto">
        <h3 class="bg-info" style="text-align:center; color:white">DATA TABLE</h3>
        <table class="table">
            <colgroup>
                <col span="1" style="width: 5%;">
                <col span="1" style="width: 10%;">
                <col span="1" style="width: 20%;">
                <col span="1" style="width: 50%;">
                <col span="1" style="width: 15%;">
            </colgroup>
            <thead class="thead-dark" style="text-align:center">
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
                    <td scope="row" style="text-align:center"><?php echo $stt; ?></td>
                    <td><?php echo $value['savedb_link']; ?></td>
                    <td><?php echo $value['savedb_title']; ?></td>
                    <td style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2; max-height: 3.2em;line-height: 1.3em;"><a href="http://192.168.31.123/CrawlerCurlMVC/home/showDataDetail"  target="self"><?php print_r($value['savedb_content']); ?></a></td>
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