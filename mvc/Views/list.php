<div class="danhsach">
    <h3>DATA TABLE</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Link</th>
                <th>Title</th>
                <th>Content</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $id = 1;
                foreach($data as $value) {
            ?>
            <tr>
                <td><?php echo $stt; ?></td>
                <td><?php echo $value['link']; ?></td>
                <td><?php echo $value['title']; ?></td>
                <td><?php echo $value['content']; ?></td>
                <td><?php echo $value['date']; ?></td>
            </tr>
            <?php
                $id++; }
            ?>
        </tbody>
    </table>
</div>