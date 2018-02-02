<?php
session_start();
  include 'api/dbc.php';
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Freefall | CMS</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Morris -->
    <link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
    <?php include "includes/navigation.php" ?>


        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
<?php include "includes/header.php" ?>
        </div>


        <div class="wrapper wrapper-content animated fadeInRight">




          <div class="row">
              <div class="col-lg-12">
                <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Achternaam</th>
                <th>Email</th>
                <th>Username</th>
                <th>Functies</th>
            </tr>
            </thead>
            <tbody>
              <?php
              $sql = mysqli_query($conn, "SELECT * FROM fr_users");
                while ($row = mysqli_fetch_array($sql)) {
                  $id = $row['id'];
                  $name = $row['name'];
                  $surname = $row['surname'];
                  $email = $row['email'];
                  $username = $row['username'];
                  $password = $row['password'];
                  ?>
                  <tr  class="trMain">
                    <th class="<?php echo $id ?>"><?php echo $id ?></th>
                    <td><?php echo $name ?></td>
                    <td><?php echo $surname ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $username ?></td>
                    <td><a href="#" class="btn btn-danger btnDeleteUsers">Verwijderen</a>
                    <a data-toggle="modal" class="btn btn-success" href="#modal-form2">Bijwerken</a></td>
                      <?php
                    } ?>

                  </td>

                  </tr>
            </tbody>
            <tfoot>
            <tr>
              <th>ID</th>
              <th>Naam</th>
              <th>Achternaam</th>
              <th>Email</th>
              <th>Username</th>
              <th>Functies</th>
            </tr>
            </tfoot>
            </table>
                </div>
              </div>
          </div>

<!-- MODAL - gebruikers toevoegen  -->
                            <a data-toggle="modal" class="btn btn-primary" href="#modal-form">Toevoegen</a>

                            <div id="modal-form" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <div class="col-sm-12"><h3 class="m-t-none m-b">Gebruikers Toevoegen</h3>

                                                    <p>Voer de gebruikers gegevens in</p>

                                                    <form action="api/insertUser.php" method="post">

                                                        <div class="form-group">
                                                          <label>Naam</label> <input name="surname"  class="form-control"></div>
                                                        <div class="form-group">
                                                          <label>Voornaam</label> <input name="name"  class="form-control"></div>
                                                          <div class="form-group">
                                                            <label>Email Adress</label> <input type="email" name="email"  class="form-control"></div>
                                                            <div class="form-group">
                                                              <label>Gebruikersnaam</label> <input name="username"  class="form-control"></div>
                                                          <div class="form-group">
                                                            <label>Wachtwoord</label> <input name="password"  class="form-control"></div>
                                                          <div class="form-group">
                                                            <label>Functie</label> <input name="function"  class="form-control"></div>
                                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Registreer</strong></button>

                                                        </div>
                                                    </form>
                                                </div>

                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <!--MODAL - gebruikers bijwerken -->
                            <div id="modal-form2" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <div class="col-sm-12"><h3 class="m-t-none m-b">Gebruikers Toevoegen</h3>

                                                    <p>Voer de gebruikers gegevens in</p>

                                                    <form role="form">
                                                        <div class="form-group"><label>Gebruikersnaam</label> <input type="email"  class="form-control"></div>
                                                        <div class="form-group"><label>Wachtwoord</label> <input type="password"  class="form-control"></div>
                                                        <div class="form-group"><label>Functie</label> <input type="function"  class="form-control"></div>
                                                        <div class="form-group"><label>Naam</label> <input type="surname"  class="form-control"></div>
                                                        <div class="form-group"><label>Voornaam</label> <input type="name"  class="form-control"></div>
                                                        <div class="form-group"><label>ID</label> <input type="id"  class="form-control"></div>
                                                        <div class="form-group"><label>Functies</label> <input type="functions"  class="form-control"></div>
                                                        <div>
                                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Registreer</strong></button>

                                                        </div>
                                                    </form>
                                                </div>

                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

        </div>


        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>

© Copyright 2017.
</strong> All Rights Reserved.
            </div>
        </div>

        </div>


        Naam
    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/dataTables/datatables.min.js"></script>


    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="js/plugins/flot/curvedLines.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Sweet alert -->
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                bLengthChange: false,
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'Projecten'},
                    {extend: 'pdf', title: 'Projecten'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
        $('.btnDeleteUsers').click(function () {
    swal({
        title: "Bent u Zeker",
        text: "U zult het project niet meer terug krijgen!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Verwijderen",
        closeOnConfirm: true
    }, function () {
          window.location.href = 'api/delete_user.php?id=<?php echo $id; ?>';
    });
});
    </script>
</body>
</html>
