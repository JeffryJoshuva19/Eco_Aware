<?php
include "libs/load.php";
?>
<head>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="vendor/assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="Hugo 0.112.5">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="vendor/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="vendor/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="css/home.css" rel="stylesheet">
    <script src="js/home.js"></script>
    <link href="css/admin.css" rel="stylesheet">
    

  </head>
</head>
<?php load_temp("header1.php"); ?>

<body>
    <div class="container">
    <div class="card-header">
        <h4 class="card-title">Query details update</h4>
        <div class="d-flex flex-row-reverse mb-3 ">
            <a href="javascript:void(0);" class="btn btn-primary mb-2"
                type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1">Add</a>
        </div>
    </div>
    <div class="table-container ad">
                <table class="table">
                <thead class="custom-thead">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Area</th>
                    <th scope="col">Ward Number</th>
                    <th scope="col">queries</th>
                    <th scope="col">status</th>
                    <th scope="col">Edit</th>


                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. ... To take a trivial example, which of us ever undertakes laborious physical</td>
                    <td>@mdo</td>
                    <td>
                        <div class="d-flex">
                            <a href="#" onclick="editUser('{{single_item.id}}')" ><?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 91 91" height="30px" id="Layer_1" version="1.1" viewBox="0 0 91 91" width="30px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M76.931,85.25H3.313V7.739l55.802,0.001L84.88,31.732v45.572C84.88,81.675,81.303,85.25,76.931,85.25z" fill="#FDE497"/><g><path d="M48.222,61.858L30.559,44.194L67.736,7.019c3.025-3.03,7.944-3.03,10.972,0l6.689,6.69    c3.029,3.03,3.029,7.94,0,10.973L48.222,61.858z" fill="#9ABFDA"/><path d="M48.222,64.371L48.222,64.371c-0.666,0-1.306-0.266-1.776-0.736L28.782,45.971    c-0.981-0.98-0.981-2.572,0-3.553L65.96,5.242c1.937-1.939,4.516-3.008,7.262-3.008c2.745,0,5.325,1.069,7.264,3.009l6.688,6.69    c4.002,4.003,4.003,10.519,0.001,14.524L49.998,63.635C49.527,64.105,48.888,64.371,48.222,64.371z M34.111,44.194l14.11,14.11    l35.399-35.399c2.043-2.046,2.044-5.375-0.001-7.42l-6.688-6.69c-0.99-0.991-2.308-1.537-3.71-1.537s-2.719,0.545-3.707,1.536    L34.111,44.194z" fill="#454B53"/></g><path d="M81.451,31.142c-0.643,0-1.286-0.246-1.776-0.736L62.009,12.744c-0.981-0.981-0.981-2.572,0-3.553   c0.98-0.98,2.572-0.981,3.553,0l17.666,17.662c0.981,0.981,0.981,2.572,0,3.553C82.737,30.896,82.095,31.142,81.451,31.142z" fill="#454B53"/><g><polygon fill="#E0F1F8" points="47.981,61.611 24.103,68.068 30.75,44.386   "/><path d="M24.103,70.58c-0.661,0-1.307-0.262-1.785-0.744c-0.636-0.643-0.878-1.576-0.634-2.447l6.647-23.682    c0.241-0.859,0.92-1.525,1.783-1.752c0.863-0.225,1.78,0.023,2.412,0.654l17.231,17.225c0.634,0.634,0.883,1.558,0.651,2.424    c-0.231,0.867-0.906,1.545-1.771,1.778l-23.879,6.457C24.542,70.552,24.321,70.58,24.103,70.58z M32.009,49.197l-4.292,15.291    l15.418-4.17L32.009,49.197z" fill="#454B53"/></g><path d="M48.178,46.75c-0.644,0-1.286-0.246-1.776-0.736c-0.981-0.981-0.981-2.572,0-3.554l17.182-17.179   c0.981-0.981,2.573-0.979,3.553,0c0.981,0.981,0.981,2.572,0,3.553L49.954,46.014C49.464,46.504,48.82,46.75,48.178,46.75z" fill="#454B53"/><path d="M76.967,88.355H3.313c-1.388,0-2.513-1.125-2.513-2.513V7.74c0-1.388,1.125-2.513,2.513-2.513h49.455   c1.388,0,2.513,1.125,2.513,2.513s-1.125,2.513-2.513,2.513H5.825V83.33h71.142c2.892,0,5.243-2.354,5.243-5.248V41.017   c0-1.388,1.125-2.513,2.513-2.513s2.513,1.125,2.513,2.513v37.065C87.235,83.747,82.629,88.355,76.967,88.355z" fill="#454B53"/></g></svg></a>
                             <a href="#" onclick="delete_item('{{single_item.id}}')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 30" x="0px" hight="30px" width="30px" stroke="#FF0000" fill="#FF0000" y="0px"><g><path d="M12,1.25A10.75,10.75,0,1,0,22.75,12,10.76,10.76,0,0,0,12,1.25Zm3.53,13.22a.75.75,0,0,1,0,1.06.75.75,0,0,1-1.06,0L12,13.06,9.53,15.53a.75.75,0,0,1-1.06,0,.75.75,0,0,1,0-1.06L10.94,12,8.47,9.53A.75.75,0,0,1,9.53,8.47L12,10.94l2.47-2.47a.75.75,0,0,1,1.06,1.06L13.06,12Z"/></g></svg></a>
                        </div>
                    </td>

                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting.</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>

                </tbody>
                </table>
               
                
        </div>
        <hr>
        <h1>Events</h1>
        <div class="d-flex flex-row-reverse mb-3">
        <a href="javascript:void(0);" class="btn btn-primary mb-2"type="button" data-bs-toggle="modal" data-bs-target="#modalGrid">Add</a>
        </div>
    <div class="table-container ad">
                <table class="table">
                <thead class="custom-thead">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Area</th>
                    <th scope="col">Ward Number</th>
                    <th scope="col">queries</th>
                    <th scope="col">status</th>
                    <th scope="col">Edit</th>


                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. ... To take a trivial example, which of us ever undertakes laborious physical</td>
                    <td>@mdo</td>
                    <td>
                        <div class="d-flex">
                            <a href="#" onclick="editUser('{{single_item.id}}')" ><?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 91 91" height="30px" id="Layer_1" version="1.1" viewBox="0 0 91 91" width="30px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M76.931,85.25H3.313V7.739l55.802,0.001L84.88,31.732v45.572C84.88,81.675,81.303,85.25,76.931,85.25z" fill="#FDE497"/><g><path d="M48.222,61.858L30.559,44.194L67.736,7.019c3.025-3.03,7.944-3.03,10.972,0l6.689,6.69    c3.029,3.03,3.029,7.94,0,10.973L48.222,61.858z" fill="#9ABFDA"/><path d="M48.222,64.371L48.222,64.371c-0.666,0-1.306-0.266-1.776-0.736L28.782,45.971    c-0.981-0.98-0.981-2.572,0-3.553L65.96,5.242c1.937-1.939,4.516-3.008,7.262-3.008c2.745,0,5.325,1.069,7.264,3.009l6.688,6.69    c4.002,4.003,4.003,10.519,0.001,14.524L49.998,63.635C49.527,64.105,48.888,64.371,48.222,64.371z M34.111,44.194l14.11,14.11    l35.399-35.399c2.043-2.046,2.044-5.375-0.001-7.42l-6.688-6.69c-0.99-0.991-2.308-1.537-3.71-1.537s-2.719,0.545-3.707,1.536    L34.111,44.194z" fill="#454B53"/></g><path d="M81.451,31.142c-0.643,0-1.286-0.246-1.776-0.736L62.009,12.744c-0.981-0.981-0.981-2.572,0-3.553   c0.98-0.98,2.572-0.981,3.553,0l17.666,17.662c0.981,0.981,0.981,2.572,0,3.553C82.737,30.896,82.095,31.142,81.451,31.142z" fill="#454B53"/><g><polygon fill="#E0F1F8" points="47.981,61.611 24.103,68.068 30.75,44.386   "/><path d="M24.103,70.58c-0.661,0-1.307-0.262-1.785-0.744c-0.636-0.643-0.878-1.576-0.634-2.447l6.647-23.682    c0.241-0.859,0.92-1.525,1.783-1.752c0.863-0.225,1.78,0.023,2.412,0.654l17.231,17.225c0.634,0.634,0.883,1.558,0.651,2.424    c-0.231,0.867-0.906,1.545-1.771,1.778l-23.879,6.457C24.542,70.552,24.321,70.58,24.103,70.58z M32.009,49.197l-4.292,15.291    l15.418-4.17L32.009,49.197z" fill="#454B53"/></g><path d="M48.178,46.75c-0.644,0-1.286-0.246-1.776-0.736c-0.981-0.981-0.981-2.572,0-3.554l17.182-17.179   c0.981-0.981,2.573-0.979,3.553,0c0.981,0.981,0.981,2.572,0,3.553L49.954,46.014C49.464,46.504,48.82,46.75,48.178,46.75z" fill="#454B53"/><path d="M76.967,88.355H3.313c-1.388,0-2.513-1.125-2.513-2.513V7.74c0-1.388,1.125-2.513,2.513-2.513h49.455   c1.388,0,2.513,1.125,2.513,2.513s-1.125,2.513-2.513,2.513H5.825V83.33h71.142c2.892,0,5.243-2.354,5.243-5.248V41.017   c0-1.388,1.125-2.513,2.513-2.513s2.513,1.125,2.513,2.513v37.065C87.235,83.747,82.629,88.355,76.967,88.355z" fill="#454B53"/></g></svg></a>
                             <a href="#" onclick="delete_item('{{single_item.id}}')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 30" x="0px" hight="30px" width="30px" stroke="#FF0000" fill="#FF0000" y="0px"><g><path d="M12,1.25A10.75,10.75,0,1,0,22.75,12,10.76,10.76,0,0,0,12,1.25Zm3.53,13.22a.75.75,0,0,1,0,1.06.75.75,0,0,1-1.06,0L12,13.06,9.53,15.53a.75.75,0,0,1-1.06,0,.75.75,0,0,1,0-1.06L10.94,12,8.47,9.53A.75.75,0,0,1,9.53,8.47L12,10.94l2.47-2.47a.75.75,0,0,1,1.06,1.06L13.06,12Z"/></g></svg></a>
                        </div>
           
                   </td>

                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting.</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>

                </tbody>
                </table>
        </div>
        <h1>News</h1>
        <div class="d-flex flex-row-reverse mb-3">
        <a href="javascript:void(0);" class="btn btn-primary mb-2"type="button" data-bs-toggle="modal" data-bs-target="#modalGrid">Add</a>
        </div>
    <div class="table-container ad">
                <table class="table">
                <thead class="custom-thead">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Area</th>
                    <th scope="col">Ward Number</th>
                    <th scope="col">queries</th>
                    <th scope="col">status</th>
                    <th scope="col">Edit</th>


                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. ... To take a trivial example, which of us ever undertakes laborious physical</td>
                    <td>@mdo</td>
                    <td>
                        <div class="d-flex">
                            <a href="#" onclick="editUser('{{single_item.id}}')" ><?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 91 91" height="30px" id="Layer_1" version="1.1" viewBox="0 0 91 91" width="30px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M76.931,85.25H3.313V7.739l55.802,0.001L84.88,31.732v45.572C84.88,81.675,81.303,85.25,76.931,85.25z" fill="#FDE497"/><g><path d="M48.222,61.858L30.559,44.194L67.736,7.019c3.025-3.03,7.944-3.03,10.972,0l6.689,6.69    c3.029,3.03,3.029,7.94,0,10.973L48.222,61.858z" fill="#9ABFDA"/><path d="M48.222,64.371L48.222,64.371c-0.666,0-1.306-0.266-1.776-0.736L28.782,45.971    c-0.981-0.98-0.981-2.572,0-3.553L65.96,5.242c1.937-1.939,4.516-3.008,7.262-3.008c2.745,0,5.325,1.069,7.264,3.009l6.688,6.69    c4.002,4.003,4.003,10.519,0.001,14.524L49.998,63.635C49.527,64.105,48.888,64.371,48.222,64.371z M34.111,44.194l14.11,14.11    l35.399-35.399c2.043-2.046,2.044-5.375-0.001-7.42l-6.688-6.69c-0.99-0.991-2.308-1.537-3.71-1.537s-2.719,0.545-3.707,1.536    L34.111,44.194z" fill="#454B53"/></g><path d="M81.451,31.142c-0.643,0-1.286-0.246-1.776-0.736L62.009,12.744c-0.981-0.981-0.981-2.572,0-3.553   c0.98-0.98,2.572-0.981,3.553,0l17.666,17.662c0.981,0.981,0.981,2.572,0,3.553C82.737,30.896,82.095,31.142,81.451,31.142z" fill="#454B53"/><g><polygon fill="#E0F1F8" points="47.981,61.611 24.103,68.068 30.75,44.386   "/><path d="M24.103,70.58c-0.661,0-1.307-0.262-1.785-0.744c-0.636-0.643-0.878-1.576-0.634-2.447l6.647-23.682    c0.241-0.859,0.92-1.525,1.783-1.752c0.863-0.225,1.78,0.023,2.412,0.654l17.231,17.225c0.634,0.634,0.883,1.558,0.651,2.424    c-0.231,0.867-0.906,1.545-1.771,1.778l-23.879,6.457C24.542,70.552,24.321,70.58,24.103,70.58z M32.009,49.197l-4.292,15.291    l15.418-4.17L32.009,49.197z" fill="#454B53"/></g><path d="M48.178,46.75c-0.644,0-1.286-0.246-1.776-0.736c-0.981-0.981-0.981-2.572,0-3.554l17.182-17.179   c0.981-0.981,2.573-0.979,3.553,0c0.981,0.981,0.981,2.572,0,3.553L49.954,46.014C49.464,46.504,48.82,46.75,48.178,46.75z" fill="#454B53"/><path d="M76.967,88.355H3.313c-1.388,0-2.513-1.125-2.513-2.513V7.74c0-1.388,1.125-2.513,2.513-2.513h49.455   c1.388,0,2.513,1.125,2.513,2.513s-1.125,2.513-2.513,2.513H5.825V83.33h71.142c2.892,0,5.243-2.354,5.243-5.248V41.017   c0-1.388,1.125-2.513,2.513-2.513s2.513,1.125,2.513,2.513v37.065C87.235,83.747,82.629,88.355,76.967,88.355z" fill="#454B53"/></g></svg></a>
                             <a href="#" onclick="delete_item('{{single_item.id}}')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 30" x="0px" hight="30px" width="30px" stroke="#FF0000" fill="#FF0000" y="0px"><g><path d="M12,1.25A10.75,10.75,0,1,0,22.75,12,10.76,10.76,0,0,0,12,1.25Zm3.53,13.22a.75.75,0,0,1,0,1.06.75.75,0,0,1-1.06,0L12,13.06,9.53,15.53a.75.75,0,0,1-1.06,0,.75.75,0,0,1,0-1.06L10.94,12,8.47,9.53A.75.75,0,0,1,9.53,8.47L12,10.94l2.47-2.47a.75.75,0,0,1,1.06,1.06L13.06,12Z"/></g></svg></a>
                        </div>
                    </td>

                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting.</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    </tr>

                </tbody>
                </table>
        </div>

    </div>
    <!-- Delete modeal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
    <!-- edit modal for events -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="input-block">
                        <label for="edit_itemname" class="form-label">Event Name</label>
                        <input type="text" class="form-control" name="edit_itemname" id="edit_itemname" placeholder="Event Name" />
                    </div>
                    <div class="input-block">
                        <label for="edit_itemname" class="form-label">Event Discription</label>
                        <textarea type="text" class="form-control" name="edit_itemname" id="edit_itemname" placeholder="Event Discription" ></textarea>
                    </div>
                    <div class="input-block">
                        <label for="edit_itemname" class="form-label">Event Link</label>
                        <input type="text" class="form-control" name="edit_itemname" id="edit_itemname" placeholder="Event Link" />
                    </div>
                    <div class="input-block">
                        <label for="edit_itemname" class="form-label">Event Date</label>
                        <input type="date" class="form-control" name="edit_itemname" id="edit_itemname" placeholder="Event Date" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
    <!-- Add event -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="input-block">
                        <label for="edit_itemname" class="form-label">Event Name</label>
                        <input type="text" class="form-control" name="edit_itemname" id="edit_itemname" placeholder="Item Name" />
                    </div>
                    <div class="input-block">
                        <label for="edit_itemname" class="form-label">Event Discription</label>
                        <input type="text" class="form-control" name="edit_itemname" id="edit_itemname" placeholder="Item Name" />
                    </div>
                    <div class="input-block">
                        <label for="edit_itemname" class="form-label">Event Link</label>
                        <input type="text" class="form-control" name="edit_itemname" id="edit_itemname" placeholder="Item Name" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
    <!-- edit modal for newst -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
        <!-- Add news -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>

        

    <?php load_temp("footer.php"); ?>

</body>
<style>
.table-container {
max-height: 300px; /* Adjust the height as needed */
overflow-y: auto;
}
</style>