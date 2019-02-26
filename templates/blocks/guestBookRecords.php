<div class="row">
    <div class="col">
        <?php
        $guestBookRecords = new \Model\GuestBookRecords();

        $records = $guestBookRecords->getVisible();

        foreach ($records as $record) {
            $record->show();
        }
        ?>
    </div>
</div>