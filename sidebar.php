<div class="sidebar">
     <div class="inside-widget">
          <?php if ( is_active_sidebar("sidebar1") )  {
              dynamic_sidebar("sidebar1"); 
          } else {
              echo "<h4> This is a sidebar1. <br/> You can edit it in your widgets. </h4>";
          }
          ?>
    </div>
    <div class="inside-widget">
          <?php if ( is_active_sidebar("sidebar2") )  {
              dynamic_sidebar("sidebar2"); 
          } else {
              echo "<h4> This is a sidebar2. <br/> You can edit it in your widgets. </h4>";
          }
          ?>
    </div>
    <div class="inside-widget">
          <?php if ( is_active_sidebar("sidebar3") )  {
              dynamic_sidebar("sidebar3"); 
          } else {
              echo "<h4> This is a sidebar2. <br/> You can edit it in your widgets. </h4>";
          }
          ?>
    </div>
</div>