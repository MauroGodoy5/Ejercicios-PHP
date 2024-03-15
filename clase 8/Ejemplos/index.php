<?php require_once 'header.inc.php'; ?>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
           <?php require_once 'superior.inc.php'; ?>
            <div class="navbar-default sidebar" role="navigation">
                <?php require_once 'menu.inc.php'; ?>
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Elementos b&aacute;sicos de un formulario
                        </div>
                        <div class="panel-body">
                            <form role="form" action="index.php">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- seccion central izquierda -->
                                        <div class="form-group">
                                            <label>Cuadro de texto</label>
                                            <input class="form-control">
                                            <p class="help-block">Texto de ayuda.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Cuadro de texto con placeholder</label>
                                            <input class="form-control" placeholder="Esto es el placeholder...">
                                        </div>
                                        <div class="form-group">
                                            <label>Selector</label>
                                            <select class="form-control">
                                                <option>item 1</option>
                                                <option>item 2</option>
                                                <option>item 3</option>
                                                <option>item 4</option>
                                                <option>item 5</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Para subir archivos</label>
                                            <input type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>Textarea</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- seccion central derecha -->
                                        <div class="form-group">
                                            <label>Checkboxes [selecci&oacute;n m&uacute;ltiple]</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 1
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 2
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Inline Checkboxes</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">1
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">2
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">3
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Radio Buttons [selecci&oacute;n &uacute;nica]</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Inline Radio Buttons</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
                                            </label>
                                        </div>

                                        <button type="submit" class="btn btn-default">Bot&oacute;n de tipo Submit</button>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->

                                </div>
                            </form>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php require_once 'footer.inc.php'; ?>