<!DOCTYPE html>

<head>
    <title>update_etudiant</title>

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
                <h2>Update étudiant</h2>
                <form action="/update/etudiant" method="post" enctype="multipart/form-data">
                    {{@csrf_field()}}
                    @isset($etudiant)
                    <div class="form-group">
                        <label for="nom">Nom Etudiant :</label>
                        <input type="text" id="nom" name="nom" value="{{$etudiant->nom}}" required>
                    </div>

                    <input type="hidden" name="id" value="{{$etudiant->id}}">

                    <div class="form-group">
                        <label for="prenom">Prenom Etudiant :</label>
                        <input type="text" id="prenom" name="prenom" value="{{$etudiant->prenom}}" required>
                    </div>

                    <div class=" form-group>
                    </div>">
                        <select class="au-input au-input--full" name="ecole" value="{{$etudiant->ecole}}">
                            <option>3IAC</option>
                            <option>PISTI</option>
                            <option>ICIA</option>
                            <option>ISTDI</option>
                            <option>SEAS</option>
                        </select>
                    </div>

                    <div class=" form-group">
                        <label for="filiere">Filière :</label>
                        <input type="text" id="filiere" name="filiere" value="{{$etudiant->filiere}}" required>

                    </div>

                    <div class=" form-group">
                        <label for="phone">Phone :</label>
                        <input type="number" name="phone" id="phone" value="{{$etudiant->phone}}">
                    </div>

                    <div class=" form-group">
                        <label for="cni">Numero cni :</label>
                        <input type="text" name="cni" id="cni" value="{{$etudiant->cni}}">
                    </div>

                    <div class=" form-group">
                        <label for="email">Email :</label>
                        <input type="email" name="email" id="email" value="{{$etudiant->email}}">
                    </div>



                    <div class=" form-group">
                        <input type="submit" class="btn-submit" value="Enregistrer">
                    </div>
                </form>
                @endisset
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
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a
                                        href="https://colorlib.com">Colorlib</a>.</p>
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