<!DOCTYPE html>
<html lang="en">
<head>
    <title>Todo List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css">
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.print.css">-->
    <link rel="stylesheet" href="https://fullcalendar.io/releases/fullcalendar-scheduler/1.9.4/scheduler.min.css">

</head>
<body>

   <?php echo $content?$content:'Welcome'; ?>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
   <script src="js/datepicker.min.js"></script>

   <?php if(isset($asset_footer)) echo $asset_footer; ?>


   <script>
       $(document).ready(function () {
           $('[data-toggle="datepicker"]').datepicker({
               format: 'yyyy-mm-dd'
           });

           $('#back-home').on('click', function () {
               window.location.href = "/";
           });
       });
   </script>
</body>
</html>