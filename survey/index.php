<?php
$title = "";
$language = "";
$ide = "";
$suggestion = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        if (isset($_POST['java']))
            $language = 'Java';
        if (isset($_POST['csharp']))
            $language = 'C#';
        if (isset($_POST['tsql']))
            $language = 'T-SQL';
        if (isset($_POST['alllang']))
            $language = 'All';
    }

    if (isset($_POST['msvs']))
        $ide = 'MS Visual Studio';
    if (isset($_POST['vscode']))
        $ide = 'Visual Studio Code';
    if (isset($_POST['ssms']))
        $ide = 'SQL Server Management Studio';
    if (isset($_POST['allide']))
        $ide = 'All';

    $language = 'Preffered Language: ' . $language;
    $ide = 'Preffered IDE: ' . $ide;

    $email_from = 'kgaugelo.molema@firstrand.co.za';

    $email_subject = "Survey - $name $surname";

    if (isset($_POST['suggestion']))
        $suggestion = 'Suggestion: ' . $_POST['suggestion'];
    $email_body = "$name $surname\n$language\n$ide\n$suggestion\n";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: kgaugelo.molema@firstrand.co.za \r\n";
    $to = "kmolema@gmail.com";

    if (isset($_POST['name']))
        mail($to, $email_subject, $email_body, $headers);
    $title = "**Thank you for your response**";
}
?>
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
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                echo "<div id='title'>$title</div>";
                //echo $_SERVER['REQUEST_METHOD'];
                exit;
            }
            ?>
            <form method="post" action="index.php" class="survey-form">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Technical Survey</h3></div>
                    <div class="panel-body">
                        <input name="name" type="text" placeholder="Name"/><br>
                        <input name="surname" type="text" placeholder="Surname"/><br>
                        <strong>Most Preffered Language:</strong>
                        <br/>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default">
                                <input name="java" type="radio" autocomplete="off"/> Java
                            </label>
                            <label class="btn btn-default">
                                <input name="csharp" type="radio" autocomplete="off"/> C#
                            </label>
                            <label class="btn btn-default">
                                <input name="tsql" type="radio" autocomplete="off"/> T-SQL
                            </label>
                            <label class="btn btn-default">
                                <input name="alllang" type="radio" autocomplete="off"/> All
                            </label>
                        </div>
                        <br/>
                        <br/>

                        <strong>Most Preffered IDE:</strong>
                        <br/>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default">
                                <input name="msvs" type="radio" autocomplete="off"/>MS Visual Studio
                            </label>
                            <label class="btn btn-default">
                                <input name="vscode" type="radio" autocomplete="off"/>MS VS Code
                            </label>
                            <label class="btn btn-default">
                                <input name="ssms" type="radio" autocomplete="off"/>MS SQL Man Studio
                            </label>
                            <label class="btn btn-default">
                                <input name="allide" type="radio" autocomplete="off"/>All
                            </label>
                        </div>
                        <br/>
                        <br/>
                        <textarea name="suggestion" placeholder="Suggestions"></textarea><br>
                        <button type="submit">Submit</button>
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