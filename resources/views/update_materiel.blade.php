<!DOCTYPE html>

<head>
    <title>home-materiel</title>

    @include('include.head_link')


    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label,
    input,
    textarea {
        display: block;
        width: 100%;
    }

    label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    input,
    textarea {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    textarea {
        height: 100px;
    }

    .btn-submit {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #45a049;
    }
    </style>

</head>

<body class="animsition">

    <div class="page-wrapper">




        <br><br>

        <body>
            <div class="container">
                <h2>Ajouter un matériel</h2>
                <form action="/update_materiel" method="post" enctype="multipart/form-data">
                    {{@csrf_field()}}

                    <div class=" form-group>
            </div>">
                        <select class="au-input au-input--full" name="categorie" value="{{$materiel->categorie}}">
                            <option>Catégorie</option>
                            <option>Chimique</option>
                            <option>Electronique</option>
                            <option>Médical</option>
                            <option>Sport</option>
                        </select>
                    </div>

                    <input type="hidden" name="id" value="{{$materiel->id}}">

                    <div class="form-group">
                        <label for="reference">Référence :</label>
                        <input type="text" id="reference" value="{{$materiel->reference}}" name="reference" required>
                    </div>

                    <div class="form-group">
                        <label for="commentaire">Commentaire :</label>
                        <input type="text" id="commentaire" value="{{$materiel->commentaire}}" name="commentaire"
                            required>

                    </div>


                    <div class="form-group">
                        <label for="file_name">Photo :</label>
                        <input type="file" name="file_name" value="{{$materiel->file_name}}" id="file_name">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn-submit" value="Enregistrer">
                    </div>
                </form>
            </div>
        </body>
        <br><br>



        <div class="page-container2">

            <!-- STATISTIC-->

            <!-- END STATISTIC-->



            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-8">
                            <!-- RECENT REPORT 2 right-->

                            <!-- END RECENT REPORT 2             -->
                        </div>
                        <div class="col-xl-4">
                            <!-- TASK PROGRESS left-->

                            <!-- END TASK PROGRESS-->
                        </div>
                    </div>
                </div>
            </div>
            </section>

            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6">
                                <!-- USER DATA right-->

                                <!-- END USER DATA-->
                            </div>
                            <div class="col-xl-6">
                                <!-- MAP DATA left-->

                                <!-- END MAP DATA-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2024 Colorlib. All rights reserved. Template by <a
                                        href="lesam">Lesam</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->

        </div>
    </div>


    @include('include.foot_link')
</body>

</html>