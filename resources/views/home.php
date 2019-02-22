<?php
    $asset_footer = "";
    $asset_footer = $asset_footer.'<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>';
    $asset_footer = $asset_footer.'<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>';
    $asset_footer = $asset_footer.'<script src="https://fullcalendar.io/releases/fullcalendar-scheduler/1.9.4/scheduler.min.js"></script>';
    $asset_footer = $asset_footer.'<script src="js/home.js"></script>';
?>

<div class="container">
    <div id="calendar" class="app-calendar"></div>
    <div class="widget">
        <a href="/?view=add" id="open-add-page">+</a>
    </div>
</div>