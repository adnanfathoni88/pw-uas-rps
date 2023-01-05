<script src="<?= base_url('public/bs.min.js') ?>"></script>
<script src="<?= base_url('public/main.js') ?>"></script>
<?php if (isset($js)) : ?>
    <?php foreach ($js as $j) : ?>
        <script src="<?= base_url('public/' . $j) ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
</body>

</html>