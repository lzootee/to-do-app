<div class="container">
    <div class="form-content">
        <form method="post">
            <div class="form-header">
                <h3>Update work</h3>
            </div>

            <?php
            if(isset($success)){
                echo "<div class='alert alert-success'>${success}</div>";
            }else if(isset($error)){
                echo "<div class='alert alert-error'>${error}</div>";
            }
            ?>

            <input type="hidden" name="id" value="<?php echo $work->id; ?>">

            <div class="form-group">
                <label for="name">Work name</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo $work->name; ?>">
            </div>
            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="text" autocomplete="off" id="start_date" name="start_date" class="form-control" data-toggle="datepicker"
                       value="<?php echo $work->date_start; ?>">
            </div>
            <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="text" autocomplete="off" id="end_date" name="end_date" class="form-control" data-toggle="datepicker"
                       value="<?php echo $work->date_end; ?>">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="0" <?php if($work->status == 0) echo "selected" ?>>Planning</option>
                    <option value="1" <?php if($work->status == 1) echo "selected" ?>>Doing</option>
                    <option value="2" <?php if($work->status == 2) echo "selected" ?>>Complete</option>
                </select>
            </div>
            <div class="form-group" style="text-align: right">
                <button type="button" id="back-home" class="btn btn-secondary">Back to Home</button>
                <button class="btn btn-info" style="padding-left: 20px; padding-right: 20px">OK</button>
            </div>
        </form>
    </div>
</div>