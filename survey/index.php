<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles/custom.css"/>
    <meta charset="utf-8"/>
    <title>Code Retreat Survey</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../img/lcs_logo_tiny.png">
</head>
<body>

<div class="container">

    <!-- Survey - START -->
    <div class="container">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <form class="survey-form">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Technical Skills Survey</h3></div>
                    <div class="panel-body">
                        <input type="text" placeholder="Name"/><br>
                        <input type="text" placeholder="Surname"/><br>
                        Preffered Language:
                        <br/>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default">
                                <input type="radio" autocomplete="off"/> Java
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" autocomplete="off"/> C#
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" autocomplete="off"/> T-SQL
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" autocomplete="off"/> All
                            </label>
                        </div>
                        <br/>
                        <br/>

                        Preffered IDE:
                        <br/>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default">
                                <input type="radio" autocomplete="off"/>MS Visual Studio
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" autocomplete="off"/>MS VS Code
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" autocomplete="off"/>MS SQL Man Studio
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" autocomplete="off"/>All
                            </label>
                        </div>
                        <br/>
                        <br/>
                        <textarea placeholder="Suggestions"></textarea><br>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Experience Rating</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-5">
                                <span style="font-size:22px;">Stay:</span>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-7">
                                <div id="rate1" style="margin-top:6px;"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-5">
                                <span style="font-size:22px;">Food:</span>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-7">
                                <div id="rate2" style="margin-top:6px;"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-5">
                                <span style="font-size:22px;">Service:</span>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-7">
                                <div id="rate3" style="margin-top:6px;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Travel Satisfaction</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <span style="font-size:22px;">Travel:</span>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                <button id="decrease1" style="width:100%; max-width:35px;">-</button>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <div style="width:100%;" id="progress1"></div>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                <button id="increase1" style="width:100%; max-width:35px;">+</button>
                            </div>
                        </div>
                        <div class="clearfix"><br/></div>
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <span style="font-size:22px;">Transfer:</span>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                <button id="decrease2" style="width:100%; max-width:35px;">-</button>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <div style="width:100%;" id="progress2"></div>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                <button id="increase2" style="width:100%; max-width:35px;">+</button>
                            </div>
                        </div>
                        <div class="clearfix"><br/></div>
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <span style="font-size:22px;">Checkin:</span>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                <button id="decrease3" style="width:100%; max-width:35px;">-</button>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <div style="width:100%;" id="progress3"></div>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                <button id="increase3" style="width:100%; max-width:35px;">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- you need to include the shieldui css and js assets in order for the components to work -->
    <link rel="stylesheet" type="text/css"
          href="https://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css"/>
    <script type="text/javascript"
            src="https://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

    <script type="text/javascript">
        jQuery(function ($) {
            $('#rate1').shieldRating({
                max: 7,
                step: 0.1,
                value: 0,
                markPreset: false
            });

            $('#rate2').shieldRating({
                max: 7,
                step: 0.1,
                value: 0,
                markPreset: false
            });

            $('#rate3').shieldRating({
                max: 7,
                step: 0.1,
                value: 0,
                markPreset: false
            });

            var progress1 = $("#progress1").shieldProgressBar({
                value: 50,
                text: {
                    enabled: true,
                    template: "{0} %"
                }
            }).swidget();

            var progress2 = $("#progress2").shieldProgressBar({
                value: 50,
                text: {
                    enabled: true,
                    template: "{0} %"
                }
            }).swidget();

            var progress3 = $("#progress3").shieldProgressBar({
                value: 50,
                text: {
                    enabled: true,
                    template: "{0} %"
                }
            }).swidget();


            $("#increase1").shieldButton({
                events: {
                    click: function () {
                        progress1.value(progress1.value() + 10);
                    }
                }
            });
            $("#decrease1").shieldButton({
                events: {
                    click: function () {
                        progress1.value(progress1.value() - 10);
                    }
                }
            });

            $("#increase2").shieldButton({
                events: {
                    click: function () {
                        progress2.value(progress2.value() + 10);
                    }
                }
            });
            $("#decrease2").shieldButton({
                events: {
                    click: function () {
                        progress2.value(progress2.value() - 10);
                    }
                }
            });

            $("#increase3").shieldButton({
                events: {
                    click: function () {
                        progress3.value(progress3.value() + 10);
                    }
                }
            });
            $("#decrease3").shieldButton({
                events: {
                    click: function () {
                        progress3.value(progress3.value() - 10);
                    }
                }
            });
        });
    </script>

    <style>
        .slider {
            width: 100%;
        }
    </style>

    <!-- Survey - END -->

</div>

</body>
</html>