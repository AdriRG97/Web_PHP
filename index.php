<?php
/*
 * dw17_Proyecto Jobeet - Bolsa de empleo 
 * Cuatrovientos - 2º DAM - Desarrollo Web & Interfaces Web 
 * Aplicación PHP MVC: Crud
 * 
 * @version    0.1
 * @author     Ander Frago <ander_frago@cuatrovientos.org>
*/
// Analize session
require_once(dirname(__FILE__) . '/utils/SessionUtils.php');
// Redirects to login page in public views or private views
SessionUtils::insertHeader()
?>


    <div class="container">
        <section>
            <article>
                <header class="d-flex">
                    <img class="img-fluid ml-auto mr-auto mb-4" src="http://via.placeholder.com/400x400">
                </header>
                <p><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipiscing elit. Aliquam ac ullamcorper
                    elit, in volutpat magna. Nullam suscipit libero id tellus blandit tristique. Duis nisl lectus,
                    ullamcorper interdum ligula quis, pulvinar lacinia ipsum. Aenean accumsan vestibulum dui nec tempus.
                    Phasellus et posuere mi, vel venenatis dolor. Maecenas molestie sapien eget lectus hendrerit, ac
                    auctor dolor consectetur. Nulla facilisi. Quisque fringilla tellus vitae lorem dictum, quis
                    venenatis dui luctus. Duis congue ullamcorper feugiat. Pellentesque mi ligula, congue ac
                    sollicitudin sed, placerat tempus metus. Proin dignissim vel libero quis venenatis.</p>
                <p><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipiscing elit. Aliquam ac ullamcorper
                    elit, in volutpat magna. Nullam suscipit libero id tellus blandit tristique. Duis nisl lectus,
                    ullamcorper interdum ligula quis, pulvinar lacinia ipsum. Aenean accumsan vestibulum dui nec tempus.
                    Phasellus et posuere mi, vel venenatis dolor. Maecenas molestie sapien eget lectus hendrerit, ac
                    auctor dolor consectetur. Nulla facilisi. Quisque fringilla tellus vitae lorem dictum, quis
                    venenatis dui luctus. Duis congue ullamcorper feugiat. Pellentesque mi ligula, congue ac
                    sollicitudin sed, placerat tempus metus. Proin dignissim vel libero quis venenatis.</p>
                <p><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipiscing elit. Aliquam ac ullamcorper
                    elit, in volutpat magna. Nullam suscipit libero id tellus blandit tristique. Duis nisl lectus,
                    ullamcorper interdum ligula quis, pulvinar lacinia ipsum. Aenean accumsan vestibulum dui nec tempus.
                    Phasellus et posuere mi, vel venenatis dolor. Maecenas molestie sapien eget lectus hendrerit, ac
                    auctor dolor consectetur. Nulla facilisi. Quisque fringilla tellus vitae lorem dictum, quis
                    venenatis dui luctus. Duis congue ullamcorper feugiat. Pellentesque mi ligula, congue ac
                    sollicitudin sed, placerat tempus metus. Proin dignissim vel libero quis venenatis.</p>
            </article>
        </section>
    </div>

<?php include("app/views/public/footer.php") ?>