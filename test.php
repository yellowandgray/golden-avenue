<html>
    <head>
        <title>Space-O | Ajax submit form</title>
    </head>
    <body>
        <h1>jQuery post form data using .ajax() method</h1>
        <!-- our form -->
        <form id='userForm'>
            <div><input type='text' name='name' placeholder='Name' /></div>
            <div><input type='text' name='email' placeholder='Email' /></div>
            <div><input type='text' name='number' placeholder='Mobile Number' /></div>
            <div><input type='submit' value='Submit' /></div>
        </form>
        <style type="text/css">
            table {
                border-collapse: collapse;
            }

            table, th, td {
                border: 1px solid black;
            }

        </style>
        <!-- where the response will be displayed -->
        <div id='response'></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
        <script>
            $(document).ready(function () {
                $('#userForm').submit(function () {

        // show that something is loading
                    $('#response').html("<b>Loading response...</b>");

        // Call ajax for pass data to other place
                    $.ajax({
                        type: 'POST',
                        url: 'contact-form.php',
                        data: $(this).serialize() // getting filed value in serialize form
                    })
                            .done(function (data) { // if getting done then call.

        // show the response
                                $('#response').html(data);

                            })
                            .fail(function () { // if fail then getting message

        // just in case posting your form failed
                                alert("Posting failed.");

                            });

        // to prevent refreshing the whole page page
                    return false;

                });
            });
        </script>

    </body>
</html>