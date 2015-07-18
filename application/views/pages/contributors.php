

<!--======================================================================= TABLE================================================================= -->

<div class="container" id="contributors">
    <div class="section-header">
                <h2 class="section-title text-center">Our Contributors</h2>
            </div>
<div class="table-responsive">
<table class="table table-hover table-striped table-bordered">

    <tr style="color: #01a89e">
        <th class="col-sm-6">Name</th>
        <th class="col-sm-6">Role</th>
    </tr>
   
   <?php
          foreach ($results as $item) :

                     extract($item);
                // include 'templates/press.php';
                  include 'C:\xampp1\htdocs\mashproject\application\views\templates\tmpl_con.php';
                 endforeach
    ?>



</table>
</div>
</div>

