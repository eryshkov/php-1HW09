<div class="row">
    <div class="col">
        <?php
        $guestBookRecords = new \Model\GuestBookRecords();

        foreach ($guestBookRecords->getAll() as $record) {
            $record->show();
        }
        ?>
    </div>
</div>