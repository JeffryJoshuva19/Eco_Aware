<?php
include "libs/load.php";
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="frontend/vendor/assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="Hugo 0.112.5">
    <link href="frontend/vendor/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> 
    <link href="frontend/css/admin.css" rel="stylesheet">
  </head>


<body>
    <?php load_temp("header1.php");?>
   {%include "header1.php"%}
    <div class="container">
        <h1 class="adjt">Admin panel</h1>
        <div class="card-header">
            <h4 class="card-title">Query details update</h4>
            
        </div>
        <div class="table-container ad">
                    <table class="fl-table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Area</th>
                        <th scope="col">Ward Number</th>
                        <th scope="col">Edit</th>


                    </tr>
                    </thead>
                    <tbody>
                        {% for i in queryy%}
                        <tr>
                        <th scope="row">{{loop.index}}</th>
                        <td>{{i.area}}</td>
                        <td>{{i.wardnum}}</td>
                        <td>
                            <div class="">
                                <a href="#" onclick="view_query('{{i.id}}')"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 512 640" hight="30px" width="30px" fill="#1A5D1A" stroke="#1A5D1A" x="0px" y="0px"><path d="M85.1,325.837c56.936,40.773,116.031,62.324,170.9,62.324s113.962-21.551,170.9-62.324c42.62-30.521,68.891-60.723,69.989-61.993a12,12,0,0,0,0-15.688c-1.1-1.27-27.369-31.472-69.989-61.993C369.962,145.39,310.867,123.839,256,123.839S142.038,145.39,85.1,186.163c-42.62,30.521-68.891,60.723-69.989,61.993a12,12,0,0,0,0,15.688C16.211,265.114,42.482,295.316,85.1,325.837ZM342.886,256A86.886,86.886,0,1,1,256,169.114,86.985,86.985,0,0,1,342.886,256Zm128.538,0a439.686,439.686,0,0,1-58.975,50.664c-29.5,21.067-72.064,45.369-120.184,54.125a110.887,110.887,0,0,0,0-209.578c48.12,8.756,90.679,33.058,120.184,54.125A439.686,439.686,0,0,1,471.424,256ZM99.551,205.336c29.505-21.067,72.064-45.369,120.184-54.125a110.887,110.887,0,0,0,0,209.578c-48.12-8.756-90.679-33.058-120.184-54.125A439.629,439.629,0,0,1,40.576,256,439.686,439.686,0,0,1,99.551,205.336Z"/><path d="M256,302.078A46.078,46.078,0,1,0,209.922,256,46.131,46.131,0,0,0,256,302.078Zm0-68.156A22.078,22.078,0,1,1,233.922,256,22.1,22.1,0,0,1,256,233.922Z"/></svg></a>
                                <a href="#" onclick="delete_item('{{i.id}}')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 30" x="0px" hight="30px" width="30px" stroke="#FF0000" fill="#FF0000" y="0px"><g><path d="M12,1.25A10.75,10.75,0,1,0,22.75,12,10.76,10.76,0,0,0,12,1.25Zm3.53,13.22a.75.75,0,0,1,0,1.06.75.75,0,0,1-1.06,0L12,13.06,9.53,15.53a.75.75,0,0,1-1.06,0,.75.75,0,0,1,0-1.06L10.94,12,8.47,9.53A.75.75,0,0,1,9.53,8.47L12,10.94l2.47-2.47a.75.75,0,0,1,1.06,1.06L13.06,12Z"/></g></svg></a>
                                
                            </div>
                        </td>

                        </tr>
                        {% endfor %}

                    </tbody>
                    </table>    
        </div>
        <hr>
        <h1>Events</h1>
        <div class="d-flex flex-row-reverse">
            <a href="#" class="btn btn-primary mb-2"type="button" data-bs-toggle="modal" data-bs-target="#eventModal">Add</a>
        </div>
        <div class="table-container ad">
                    <table class="fl-table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Event name</th>
                        <th scope="col">Event link</th>
                        <th scope="col">Date</th>
                        <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        {%for i in eventt%}
                        <tr>
                        <th scope="row">{{loop.index}}</th>
                        <td>{{i.event_name}}</td>
                        <td>{{i.event_link}}</td>
                        <td>{{i.event_date}}</td>
                        <td>
                            <div class="">
                                <a href="#" onclick="view_edis('{{i.id}}')"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 512 640" hight="30px" width="30px" fill="#1A5D1A" stroke="#1A5D1A" x="0px" y="0px"><path d="M85.1,325.837c56.936,40.773,116.031,62.324,170.9,62.324s113.962-21.551,170.9-62.324c42.62-30.521,68.891-60.723,69.989-61.993a12,12,0,0,0,0-15.688c-1.1-1.27-27.369-31.472-69.989-61.993C369.962,145.39,310.867,123.839,256,123.839S142.038,145.39,85.1,186.163c-42.62,30.521-68.891,60.723-69.989,61.993a12,12,0,0,0,0,15.688C16.211,265.114,42.482,295.316,85.1,325.837ZM342.886,256A86.886,86.886,0,1,1,256,169.114,86.985,86.985,0,0,1,342.886,256Zm128.538,0a439.686,439.686,0,0,1-58.975,50.664c-29.5,21.067-72.064,45.369-120.184,54.125a110.887,110.887,0,0,0,0-209.578c48.12,8.756,90.679,33.058,120.184,54.125A439.686,439.686,0,0,1,471.424,256ZM99.551,205.336c29.505-21.067,72.064-45.369,120.184-54.125a110.887,110.887,0,0,0,0,209.578c-48.12-8.756-90.679-33.058-120.184-54.125A439.629,439.629,0,0,1,40.576,256,439.686,439.686,0,0,1,99.551,205.336Z"/><path d="M256,302.078A46.078,46.078,0,1,0,209.922,256,46.131,46.131,0,0,0,256,302.078Zm0-68.156A22.078,22.078,0,1,1,233.922,256,22.1,22.1,0,0,1,256,233.922Z"/></svg></a>
                                <a href="#" onclick="edit_event('{{i.id}}')" ><?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 91 91" height="30px" id="Layer_1" version="1.1" viewBox="0 0 91 91" width="30px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M76.931,85.25H3.313V7.739l55.802,0.001L84.88,31.732v45.572C84.88,81.675,81.303,85.25,76.931,85.25z" fill="#FDE497"/><g><path d="M48.222,61.858L30.559,44.194L67.736,7.019c3.025-3.03,7.944-3.03,10.972,0l6.689,6.69    c3.029,3.03,3.029,7.94,0,10.973L48.222,61.858z" fill="#9ABFDA"/><path d="M48.222,64.371L48.222,64.371c-0.666,0-1.306-0.266-1.776-0.736L28.782,45.971    c-0.981-0.98-0.981-2.572,0-3.553L65.96,5.242c1.937-1.939,4.516-3.008,7.262-3.008c2.745,0,5.325,1.069,7.264,3.009l6.688,6.69    c4.002,4.003,4.003,10.519,0.001,14.524L49.998,63.635C49.527,64.105,48.888,64.371,48.222,64.371z M34.111,44.194l14.11,14.11    l35.399-35.399c2.043-2.046,2.044-5.375-0.001-7.42l-6.688-6.69c-0.99-0.991-2.308-1.537-3.71-1.537s-2.719,0.545-3.707,1.536    L34.111,44.194z" fill="#454B53"/></g><path d="M81.451,31.142c-0.643,0-1.286-0.246-1.776-0.736L62.009,12.744c-0.981-0.981-0.981-2.572,0-3.553   c0.98-0.98,2.572-0.981,3.553,0l17.666,17.662c0.981,0.981,0.981,2.572,0,3.553C82.737,30.896,82.095,31.142,81.451,31.142z" fill="#454B53"/><g><polygon fill="#E0F1F8" points="47.981,61.611 24.103,68.068 30.75,44.386   "/><path d="M24.103,70.58c-0.661,0-1.307-0.262-1.785-0.744c-0.636-0.643-0.878-1.576-0.634-2.447l6.647-23.682    c0.241-0.859,0.92-1.525,1.783-1.752c0.863-0.225,1.78,0.023,2.412,0.654l17.231,17.225c0.634,0.634,0.883,1.558,0.651,2.424    c-0.231,0.867-0.906,1.545-1.771,1.778l-23.879,6.457C24.542,70.552,24.321,70.58,24.103,70.58z M32.009,49.197l-4.292,15.291    l15.418-4.17L32.009,49.197z" fill="#454B53"/></g><path d="M48.178,46.75c-0.644,0-1.286-0.246-1.776-0.736c-0.981-0.981-0.981-2.572,0-3.554l17.182-17.179   c0.981-0.981,2.573-0.979,3.553,0c0.981,0.981,0.981,2.572,0,3.553L49.954,46.014C49.464,46.504,48.82,46.75,48.178,46.75z" fill="#454B53"/><path d="M76.967,88.355H3.313c-1.388,0-2.513-1.125-2.513-2.513V7.74c0-1.388,1.125-2.513,2.513-2.513h49.455   c1.388,0,2.513,1.125,2.513,2.513s-1.125,2.513-2.513,2.513H5.825V83.33h71.142c2.892,0,5.243-2.354,5.243-5.248V41.017   c0-1.388,1.125-2.513,2.513-2.513s2.513,1.125,2.513,2.513v37.065C87.235,83.747,82.629,88.355,76.967,88.355z" fill="#454B53"/></g></svg></a>
                                <a href="#" onclick="delete_event('{{i.id}}')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 30" x="0px" hight="30px" width="30px" stroke="#FF0000" fill="#FF0000" y="0px"><g><path d="M12,1.25A10.75,10.75,0,1,0,22.75,12,10.76,10.76,0,0,0,12,1.25Zm3.53,13.22a.75.75,0,0,1,0,1.06.75.75,0,0,1-1.06,0L12,13.06,9.53,15.53a.75.75,0,0,1-1.06,0,.75.75,0,0,1,0-1.06L10.94,12,8.47,9.53A.75.75,0,0,1,9.53,8.47L12,10.94l2.47-2.47a.75.75,0,0,1,1.06,1.06L13.06,12Z"/></g></svg></a>
                                
                            </div>
            
                        </td>

                        </tr>
                        {% endfor %}
                    </tbody>
                    </table>
        </div>
        <h1>News</h1>
        <div class="d-flex flex-row-reverse mb-3">
            <a href="#" class="btn btn-primary mb-2" type="button" data-bs-toggle="modal" data-bs-target="#newsmodal">Add</a>
        </div>
        <div class="table-container ad">
                    <table class="fl-table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">News Title</th>
                        <th scope="col">News link</th>
                        <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for i in newss%}
                        <tr>
                        <th scope="row">{{loop.index}}</th>
                        <td>{{i.news_title}}</td>
                        <td>{{i.news_link}}</td>
                        <td>
                            <div class="">
                                <a href="#" onclick="view_newsdis('{{i.id}}')"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 512 640" hight="30px" width="30px" fill="#1A5D1A" stroke="#1A5D1A" x="0px" y="0px"><path d="M85.1,325.837c56.936,40.773,116.031,62.324,170.9,62.324s113.962-21.551,170.9-62.324c42.62-30.521,68.891-60.723,69.989-61.993a12,12,0,0,0,0-15.688c-1.1-1.27-27.369-31.472-69.989-61.993C369.962,145.39,310.867,123.839,256,123.839S142.038,145.39,85.1,186.163c-42.62,30.521-68.891,60.723-69.989,61.993a12,12,0,0,0,0,15.688C16.211,265.114,42.482,295.316,85.1,325.837ZM342.886,256A86.886,86.886,0,1,1,256,169.114,86.985,86.985,0,0,1,342.886,256Zm128.538,0a439.686,439.686,0,0,1-58.975,50.664c-29.5,21.067-72.064,45.369-120.184,54.125a110.887,110.887,0,0,0,0-209.578c48.12,8.756,90.679,33.058,120.184,54.125A439.686,439.686,0,0,1,471.424,256ZM99.551,205.336c29.505-21.067,72.064-45.369,120.184-54.125a110.887,110.887,0,0,0,0,209.578c-48.12-8.756-90.679-33.058-120.184-54.125A439.629,439.629,0,0,1,40.576,256,439.686,439.686,0,0,1,99.551,205.336Z"/><path d="M256,302.078A46.078,46.078,0,1,0,209.922,256,46.131,46.131,0,0,0,256,302.078Zm0-68.156A22.078,22.078,0,1,1,233.922,256,22.1,22.1,0,0,1,256,233.922Z"/></svg></a>
                                <a href="#" onclick="edit_news('{{i.id}}')" ><?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 91 91" height="30px" id="Layer_1" version="1.1" viewBox="0 0 91 91" width="30px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M76.931,85.25H3.313V7.739l55.802,0.001L84.88,31.732v45.572C84.88,81.675,81.303,85.25,76.931,85.25z" fill="#FDE497"/><g><path d="M48.222,61.858L30.559,44.194L67.736,7.019c3.025-3.03,7.944-3.03,10.972,0l6.689,6.69    c3.029,3.03,3.029,7.94,0,10.973L48.222,61.858z" fill="#9ABFDA"/><path d="M48.222,64.371L48.222,64.371c-0.666,0-1.306-0.266-1.776-0.736L28.782,45.971    c-0.981-0.98-0.981-2.572,0-3.553L65.96,5.242c1.937-1.939,4.516-3.008,7.262-3.008c2.745,0,5.325,1.069,7.264,3.009l6.688,6.69    c4.002,4.003,4.003,10.519,0.001,14.524L49.998,63.635C49.527,64.105,48.888,64.371,48.222,64.371z M34.111,44.194l14.11,14.11    l35.399-35.399c2.043-2.046,2.044-5.375-0.001-7.42l-6.688-6.69c-0.99-0.991-2.308-1.537-3.71-1.537s-2.719,0.545-3.707,1.536    L34.111,44.194z" fill="#454B53"/></g><path d="M81.451,31.142c-0.643,0-1.286-0.246-1.776-0.736L62.009,12.744c-0.981-0.981-0.981-2.572,0-3.553   c0.98-0.98,2.572-0.981,3.553,0l17.666,17.662c0.981,0.981,0.981,2.572,0,3.553C82.737,30.896,82.095,31.142,81.451,31.142z" fill="#454B53"/><g><polygon fill="#E0F1F8" points="47.981,61.611 24.103,68.068 30.75,44.386   "/><path d="M24.103,70.58c-0.661,0-1.307-0.262-1.785-0.744c-0.636-0.643-0.878-1.576-0.634-2.447l6.647-23.682    c0.241-0.859,0.92-1.525,1.783-1.752c0.863-0.225,1.78,0.023,2.412,0.654l17.231,17.225c0.634,0.634,0.883,1.558,0.651,2.424    c-0.231,0.867-0.906,1.545-1.771,1.778l-23.879,6.457C24.542,70.552,24.321,70.58,24.103,70.58z M32.009,49.197l-4.292,15.291    l15.418-4.17L32.009,49.197z" fill="#454B53"/></g><path d="M48.178,46.75c-0.644,0-1.286-0.246-1.776-0.736c-0.981-0.981-0.981-2.572,0-3.554l17.182-17.179   c0.981-0.981,2.573-0.979,3.553,0c0.981,0.981,0.981,2.572,0,3.553L49.954,46.014C49.464,46.504,48.82,46.75,48.178,46.75z" fill="#454B53"/><path d="M76.967,88.355H3.313c-1.388,0-2.513-1.125-2.513-2.513V7.74c0-1.388,1.125-2.513,2.513-2.513h49.455   c1.388,0,2.513,1.125,2.513,2.513s-1.125,2.513-2.513,2.513H5.825V83.33h71.142c2.892,0,5.243-2.354,5.243-5.248V41.017   c0-1.388,1.125-2.513,2.513-2.513s2.513,1.125,2.513,2.513v37.065C87.235,83.747,82.629,88.355,76.967,88.355z" fill="#454B53"/></g></svg></a>
                                <a href="#" onclick="delete_news('{{i.id}}')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 30" x="0px" hight="30px" width="30px" stroke="#FF0000" fill="#FF0000" y="0px"><g><path d="M12,1.25A10.75,10.75,0,1,0,22.75,12,10.76,10.76,0,0,0,12,1.25Zm3.53,13.22a.75.75,0,0,1,0,1.06.75.75,0,0,1-1.06,0L12,13.06,9.53,15.53a.75.75,0,0,1-1.06,0,.75.75,0,0,1,0-1.06L10.94,12,8.47,9.53A.75.75,0,0,1,9.53,8.47L12,10.94l2.47-2.47a.75.75,0,0,1,1.06,1.06L13.06,12Z"/></g></svg></a>
                            </div>
                        </td>

                        </tr>
                        {% endfor %}
                    </tbody>
                    </table>
        </div>
        <h1>contacts</h1>
        <div class="d-flex flex-row-reverse mb-3">
            <a href="#" class="btn btn-primary mb-2" type="button" data-bs-toggle="modal" data-bs-target="#contactmodal">Add</a>
        </div>
        <div class="table-container ad">
            <table class="fl-table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nmae</th>
                <th scope="col">Phone No</th>
                <th scope="col">Email</th>
                <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                {% for i in contactt%}
                <tr>
                <th scope="row">{{loop.index}}</th>
                <td>{{i.name}}</td>
                <td>{{i.phone_num}}</td>
                <td>{{i.email}}</td>

                <td>
                    <div class="">
                        <a href="#" onclick="edit_contact('{{i.id}}')" ><?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 91 91" height="30px" id="Layer_1" version="1.1" viewBox="0 0 91 91" width="30px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M76.931,85.25H3.313V7.739l55.802,0.001L84.88,31.732v45.572C84.88,81.675,81.303,85.25,76.931,85.25z" fill="#FDE497"/><g><path d="M48.222,61.858L30.559,44.194L67.736,7.019c3.025-3.03,7.944-3.03,10.972,0l6.689,6.69    c3.029,3.03,3.029,7.94,0,10.973L48.222,61.858z" fill="#9ABFDA"/><path d="M48.222,64.371L48.222,64.371c-0.666,0-1.306-0.266-1.776-0.736L28.782,45.971    c-0.981-0.98-0.981-2.572,0-3.553L65.96,5.242c1.937-1.939,4.516-3.008,7.262-3.008c2.745,0,5.325,1.069,7.264,3.009l6.688,6.69    c4.002,4.003,4.003,10.519,0.001,14.524L49.998,63.635C49.527,64.105,48.888,64.371,48.222,64.371z M34.111,44.194l14.11,14.11    l35.399-35.399c2.043-2.046,2.044-5.375-0.001-7.42l-6.688-6.69c-0.99-0.991-2.308-1.537-3.71-1.537s-2.719,0.545-3.707,1.536    L34.111,44.194z" fill="#454B53"/></g><path d="M81.451,31.142c-0.643,0-1.286-0.246-1.776-0.736L62.009,12.744c-0.981-0.981-0.981-2.572,0-3.553   c0.98-0.98,2.572-0.981,3.553,0l17.666,17.662c0.981,0.981,0.981,2.572,0,3.553C82.737,30.896,82.095,31.142,81.451,31.142z" fill="#454B53"/><g><polygon fill="#E0F1F8" points="47.981,61.611 24.103,68.068 30.75,44.386   "/><path d="M24.103,70.58c-0.661,0-1.307-0.262-1.785-0.744c-0.636-0.643-0.878-1.576-0.634-2.447l6.647-23.682    c0.241-0.859,0.92-1.525,1.783-1.752c0.863-0.225,1.78,0.023,2.412,0.654l17.231,17.225c0.634,0.634,0.883,1.558,0.651,2.424    c-0.231,0.867-0.906,1.545-1.771,1.778l-23.879,6.457C24.542,70.552,24.321,70.58,24.103,70.58z M32.009,49.197l-4.292,15.291    l15.418-4.17L32.009,49.197z" fill="#454B53"/></g><path d="M48.178,46.75c-0.644,0-1.286-0.246-1.776-0.736c-0.981-0.981-0.981-2.572,0-3.554l17.182-17.179   c0.981-0.981,2.573-0.979,3.553,0c0.981,0.981,0.981,2.572,0,3.553L49.954,46.014C49.464,46.504,48.82,46.75,48.178,46.75z" fill="#454B53"/><path d="M76.967,88.355H3.313c-1.388,0-2.513-1.125-2.513-2.513V7.74c0-1.388,1.125-2.513,2.513-2.513h49.455   c1.388,0,2.513,1.125,2.513,2.513s-1.125,2.513-2.513,2.513H5.825V83.33h71.142c2.892,0,5.243-2.354,5.243-5.248V41.017   c0-1.388,1.125-2.513,2.513-2.513s2.513,1.125,2.513,2.513v37.065C87.235,83.747,82.629,88.355,76.967,88.355z" fill="#454B53"/></g></svg></a>
                        <a href="#" onclick="delete_contact('{{i.id}}')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 30" x="0px" hight="30px" width="30px" stroke="#FF0000" fill="#FF0000" y="0px"><g><path d="M12,1.25A10.75,10.75,0,1,0,22.75,12,10.76,10.76,0,0,0,12,1.25Zm3.53,13.22a.75.75,0,0,1,0,1.06.75.75,0,0,1-1.06,0L12,13.06,9.53,15.53a.75.75,0,0,1-1.06,0,.75.75,0,0,1,0-1.06L10.94,12,8.47,9.53A.75.75,0,0,1,9.53,8.47L12,10.94l2.47-2.47a.75.75,0,0,1,1.06,1.06L13.06,12Z"/></g></svg></a>
                    </div>
                </td>
                </tr>
                {% endfor %}
            </tbody>
            </table>
        </div>
    {%include "footer.php"%}
    <!--Edit Contact-->
    <div class="modal fade" id="edit_contact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Contact</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/update_contact" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" id="editconid" name="editconid" value="">
                        <div class="input-block">
                            <label for="edit_addimgfile1" class="form-label">Logo</label>
                            <input type="file" accept="image/*" name="edit_contactimg" id="edit_contactimg" oninput="edit_addoutput1.src=window.URL.createObjectURL(this.files[0])">
                            
                        </div>
                        <div class="input-block">
                            <label for="eventlink" class="form-label">Name</label>
                            <input type="text" class="form-control" name="edit_contactname" id="edit_contactname" placeholder="Name" required />
                        </div>
                        <div class="input-block">
                            <label for="eventdis" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="edit_phonenum" id="edit_phonenum"  placeholder="Phone Number" required></textarea>
                        </div>
                        <div class="input-block">
                            <label for="eventlink" class="form-label">Email</label>
                            <input type="email" class="form-control" name="edit_email" id="edit_email" placeholder="Email" required />
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--Add Contact-->
    <div class="modal fade" id="contactmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Contact</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/post_contact" method="POST" enctype="multipart/form-data">
                        <div class="input-block">
                            <label for="edit_addimgfile1" class="form-label">Logo</label>
                            <input type="file" accept="image/*" name="contact_img" id="contact_img" oninput="edit_addoutput1.src=window.URL.createObjectURL(this.files[0])">
                            
                        </div>
                        <div class="input-block">
                            <label for="eventlink" class="form-label">Name</label>
                            <input type="text" class="form-control" name="contact_name" id="contact_name" placeholder="Name" required />
                        </div>
                        <div class="input-block">
                            <label for="eventdis" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone_num" id="phone_num"  placeholder="Phone Number" required></textarea>
                        </div>
                        <div class="input-block">
                            <label for="eventlink" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required />
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--Add news-->
    <div class="modal fade" id="newsmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/post_news" method="POST" enctype="multipart/form-data">
                        <div class="input-block">
                            <label for="edit_addimgfile1" class="form-label"><img id="edit_newsimagev" src=""></label>
                            <input type="file" accept="image/*" name="newsimage" id="newsimage" oninput="edit_addoutput1.src=window.URL.createObjectURL(this.files[0])">
                            
                        </div>
                        <div class="input-block">
                            <label for="eventlink" class="form-label">News Title</label>
                            <input type="text" class="form-control" name="newstitle" id="newstitle" placeholder="News Title" required />
                        </div>
                        <div class="input-block">
                            <label for="eventdis" class="form-label">News Description</label>
                            <textarea class="form-control limited-textarea" name="newsdis" id="newsdis" rows="2" placeholder="Enter up to two lines of news discription" required></textarea>
                        </div>
                        <div class="input-block">
                            <label for="eventlink" class="form-label">News Link</label>
                            <input type="text" class="form-control" name="newslink" id="newslink" placeholder="News Link" required />
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--edit news-->
    <div class="modal fade" id="edit_news" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/update_news" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" id="editnewid" name="editnewid" value="">
                        <div class="input-block">
                            <label for="edit_addimgfile1" class="form-label"><img id="edit_newsimagev" src=""></label>
                            <input type="file" accept="image/*" name="edit_newsimagev" id="edit_newsimagev" oninput="edit_addoutput1.src=window.URL.createObjectURL(this.files[0])">
                            
                        </div>
                        <div class="input-block">
                            <label for="eventlink" class="form-label">News Title</label>
                            <input type="text" class="form-control" name="edit_newstitle" id="edit_newstitle" placeholder="News Title" required />
                        </div>
                        <div class="input-block">
                            <label for="eventdis" class="form-label">News Description</label>
                            <textarea class="form-control limited-textarea" name="edit_newsdis" id="edit_newsdis" rows="2" placeholder="Enter up to two lines of news discription" required></textarea>
                        </div>
                        <div class="input-block">
                            <label for="eventlink" class="form-label">News Link</label>
                            <input type="text" class="form-control" name="edit_newslink" id="edit_newslink" placeholder="News Link" required />
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit News</button>
                </div>
                </form>
            </div>
        </div>
    </div>
   
    <!-- edit modal for events -->
    <div class="modal fade" id="edit_event" tabindex="-1" aria-labelledby="edit_eventModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="edit_eventModalLabel">Edit Event</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/update_event" method="POST">
                        <span id="errname" class="text-primary"></span>
                        <input type="hidden" class="form-control" id="editid" name="editid" value="">
                        <div class="input-block">
                            <label for="edit_itemname" class="form-label">Event Name</label>
                            <input type="text" class="form-control" name="edit_eventname" id="edit_eventname" placeholder="Event Name" />
                        </div>
                        <div class="input-block">
                            <label for="edit_itemname" class="form-label">Event Discription</label>
                            <textarea type="text" class="form-control" name="edit_eventdis" id="edit_eventdis" placeholder="Event Discription" ></textarea>
                        </div>
                        <div class="input-block">
                            <label for="edit_itemname" class="form-label">Event Link</label>
                            <input type="text" class="form-control" name="edit_eventlink" id="edit_eventlink" placeholder="Event Link" />
                        </div>
                        <div class="input-block">
                            <label for="edit_itemname" class="form-label">Event Date</label>
                            <input type="date" class="form-control" name="edit_eventdate" id="edit_eventdate" placeholder="Event Date" />
                        </div>
                    
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" onclick="update_event()">Edit Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--view modal-->
    <div class="modal fade" id="vieww" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="viewModalLabel">View</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p id="vie"><p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    
    
    <!-- Add event -->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="newsModalLabel">Add News</h1>
                <span id="errname" class="text-primary"></span>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/post_event" method="POST">
                <div class="modal-body">
                    <div class="input-block">
                        <label for="eventname" class="form-label">Event Name</label>
                        <input type="text" class="form-control" name="eventname" id="eventname" placeholder="Event Name" required />
                    </div>
                    <div class="input-block">
                        <label for="eventdis" class="form-label">Event Description</label>
                        <input type="text" class="form-control" name="eventdis" id="eventdis" placeholder="Event Description" required />
                    </div>
                    <div class="input-block">
                        <label for="eventlink" class="form-label">Event Link</label>
                        <input type="text" class="form-control" name="eventlink" id="eventlink" placeholder="Event Link" required />
                    </div>
                    <div class="input-block">
                        <label for="eventdate" class="form-label">Event Date</label>
                        <input type="date" class="form-control" name="eventdate" id="eventdate" placeholder="Event Date" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add Event</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form> 
        </div>
    </div>
   
    <!-- Add news -->
    
      













   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Popper.js for Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<script>
    function delete_item(data){
        var id = data;
        $.ajax({
            type    : "GET",
            url     : 'delete_query/'+id,
            id    : id,
            contentType: "application/json",
            success: function(data) {
                location.reload();
            },
        });
        return false;
    }
    function add_event() {
        
            alert("*");

            var formData = {
                eventname: $("#eventname").val(),
                eventdis: $("#eventdis").val(),
                eventlink: $("#eventlink").val(),
                eventdate: $("#eventdate").val(),
            };
            console.log(formData);
    
            $.ajax({
                type: "POST",
                url: "/post_event",
                data: formData,
                dataType: "json",
                encode: true,
            }).done(function(data1) {
                if (data1 === "Successfully Inserted") {
                    location.reload();
                } else if (data1 === "Already this event Exist") {
                    $("#errname").html(data1);
                }
            });
    
            event.preventDefault();
       
    }
    function delete_event(data){
        var id = data;
        $.ajax({
            type    : "GET",
            url     : 'delete_event/'+id,
            id    : id,
            contentType: "application/json",
            success: function(data) {
                location.reload();
            },
        });
        return false;
    }
    function edit_event(data)
    {
        var id = data;
        
        $.ajax( {
            type    : "put",
            url     : '/put_event/'+id,
            id    : id,
            contentType: "application/json",
            success: function(data) {
                $("#editid").val(data.id);
                $("#edit_eventname").val(data.event_name);
                $("#edit_eventdis").val(data.event_dis);
                $("#edit_eventlink").val(data.event_link);
                $("#edit_eventdate").val(data.event_date);
                $("#edit_event").modal('show');
            },
        });
        return false;
    }
    function update_event(){
        var formData = {
            editid: $("#editid").val(),
            edit_eventname: $("#edit_eventname").val(),
            edit_eventdis: $("#edit_eventdis").val(),
            edit_eventlink: $("#edit_eventlink").val(),
            edit_eventdate: $("#edit_eventdate").val(),
            
        };
        $.ajax({
            type: "post",
            url: "/update_event",
            data: formData,
            dataType: "json",
            encode: true,
            }).done(function (data) {
                if (data == "Already this event Exist"){
                    $("#errnames").html(data);
                }
                if (data == "Successfully Inserted"){
                    location.reload();
                }
            });
            event.preventDefault();
    }
    function view_query(data)
    {
        var id = data;
        
        $.ajax( {
            type    : "put",
            url     : '/put_query/'+id,
            id    : id,
            contentType: "application/json",
            success: function(data) {
                var a = document.getElementById("vie");
                a.innerHTML = data.query;
                $("#vieww").modal('show');
            },
        });
        return false;
    }
    function view_edis(data){
        var id = data;
        
        $.ajax( {
            type    : "put",
            url     : '/put_eventdis/'+id,
            id    : id,
            contentType: "application/json",
            success: function(data) {
                var a = document.getElementById("vie");
                a.innerHTML = data.event_dis;
                $("#vieww").modal('show');
            },
        });
        return false;

    }
    function view_newsdis(data){
        var id = data;
        $.ajax( {
            type    : "put",
            url     : '/put_newsdis/'+id,
            id    : id,
            contentType: "application/json",
            success: function(data) {
                var a = document.getElementById("vie");
                a.innerHTML = data.news_dis;
                $("#vieww").modal('show');
            },
        });
        return false;

    }
    function delete_news(data){
        var id = data;
        $.ajax({
            type    : "GET",
            url     : 'delete_news/'+id,
            id    : id,
            contentType: "application/json",
            success: function(data) {
                location.reload();
            },
        });
        return false;

    }
    function edit_news(data) {
        var id = data;
    
        $.ajax({
            type: "PUT", 
            url: '/put_news/' + id,  
            contentType: "application/json",
            success: function (data) {
                image_path = "frontend/resource/upload_image/"+data.news_image;
                alert(image_path)
                $("#editnewid").val(data.id);
                $("#edit_newsimagev").attr("src",image_path);
                $("#edit_newstitle").val(data.news_title);
                $("#edit_newsdis").val(data.news_dis);
                $("#edit_newslink").val(data.news_link);
                $("#edit_news").modal('show');
            },
           
        });
        return false;
    }
    function delete_contact(data){
        var id = data;
        $.ajax({
            type    : "GET",
            url     : 'delete_contact/'+id,
            id    : id,
            contentType: "application/json",
            success: function(data) {
                location.reload();
            },
        });
        return false;

    }
    function edit_contact(id) {
        $.ajax({
            type: "PUT",
            url: '/put_contact/' + id,
            contentType: "application/json",
            success: function (data) {
                var image_path = "frontend/resource/upload_image/" + data.logo;
                $("#editconid").val(data.id);
                $("#edit_contactimg").attr("src", image_path);
                $("#edit_contactname").val(data.name);
                $("#edit_phonenum").val(data.phone_num);
                $("#edit_email").val(data.email);
                $("#edit_contact").modal('show');
            },
           
        });
    }
    
    
</script>
</body>
</html>
