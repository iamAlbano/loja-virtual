<div class="alert alert-<?= $data['type']; ?> alert-dismissible fade show fixed-top" role="alert">
    <?= $data['message']; ?>

    <?php if($data["type"] !="visually-hidden")
    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'; ?>
</div>