<!DOCTYPE html>
<html>
<head>

<?php foreach ($stylesheets as $stylesheet):?>
  <?=HTML::style($stylesheet)."\n";?>
<?php endforeach;?>
</head>
<body>
  <div class='container_16'>
    <div class='toprow grid_16'>
      <div class='logo alpha grid_6'>
        <img height='100px' />
      </div>
      <div class='info omega grid_10'>
        <div class='grid_2 alpha'>
          LAT | RUS
        </div>
        <div class='grid_4'>
          Jūsu grozs: 0
        </div>
        <div class='grid_4 omega'>
          Sveiks, viesi
        </div>
      </div>
    </div>
  </div>
</body>
</html>
