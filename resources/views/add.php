<div class="container">
    <div class="form-content">
        <form method="post">
            <div class="form-header">
                <h3>Create new work</h3>
            </div>

            <?php
                if(isset($success)){
                    echo "<div class='alert alert-success'>${success}</div>";
                }else if(isset($error)){
                    echo "<div class='alert alert-error'>${error}</div>";
                }
            ?>

            <div class="form-group">
                <label for="name">Work name</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="text" autocomplete="off" id="start_date" name="start_date" class="form-control" data-toggle="datepicker">
            </div>
            <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="text" autocomplete="off" id="end_date" name="end_date" class="form-control" data-toggle="datepicker">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="0">Planning</option>
                    <option value="1">Doing</option>
                    <option value="2">Complete</option>
                </select>
            </div>
            <div class="form-group" style="text-align: right">
                <button type="button" id="back-home" class="btn btn-secondary">Back to Home</button>
                <button class="btn btn-info" style="padding-left: 20px; padding-right: 20px">OK</button>
            </div>
        </form>
    </div>
</div>