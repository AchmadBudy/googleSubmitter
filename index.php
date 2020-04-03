<!DOCTYPE html>
<html>

<head>
    <title>Google Form Submitter</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <script type="text/javascript" src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="page-header">
        <pre><h1>Google Form Submitter <small>Infinite Submissions</small></h1></pre>
        <h3>Catetan penting</h3>
        <li>
            isi : random (kalau mau random nama stok 24 nama)
        </li>
        <li>
            isi : random fakultas (kalau mau random fakultas)
        </li>
    </div>
    <br>
    <div class="container">
        <form>
            <div class="form-group" id='id0'>
                <label for="url">Url - Copy everything after /forms and everything before /viewform</label>
                <h4><?php print(htmlspecialchars("https://docs.google.com/forms/<URL-ID>/viewform")) ?></h4>
                <input type="text" class="form-control" id="url" name='url' placeholder="URL-ID">
            </div>

            <div id='input'>
                <div class='form-group' id='id1'>
                    <label for='entry1'>Input 1</label>
                    <input type='text' class='form-control' id='entry1' name='entry1' placeholder='entry.xxx'>
                    <input type='text' class='form-control' id='text1' name='text1' placeholder='Value'>
                </div>
            </div>

            <div class="form-group" id='buttons1'>
                <button onclick='add_f(2);' type='button' class='btn btn-success'>Add Input Field</button>
                <button onclick='remove_f(1);' type='button' class='btn btn-warning'>Remove Input Field</button><br><br>
            </div>

            <label for='entry1'>Number of submissions (consider at a rate of 10 sub/sec to prevent Google from blocking you)</label>
            <input type='text' class='form-control' id='sub' name='sub' placeholder='No. of Submissions'>
            <div class="form-group" id='buttons2'>
                <button type='button' onclick='req(1); return false;' class='btn btn-info'>Submit</button>
            </div>

        </form>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Status</h4>
                </div>
                <div id='modalbody' class="modal-body">
                    <p>Total Submissions : </p>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

</body>

</html>