<!doctype html>
<html lang="en">
    <head>
        <!-- CSRF Token -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <title>Introducing CSS Frameworks</title>

        <!-- Fonts -->
        
        <!-- Scripts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
        crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .list-css:hover{
                background-color: #343A40;
                color: white;
                transition: background-color .45s, color .25s;
            }
            .footer-link{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="col-md-12">
                <div class="row pt-5 pb-2">
                    <h1 class="px-0">Hello kiddo!</h1>
                </div>
                <div class="row py-1">
                    <div class="mb-3 px-0">
                        <input type="text" id="name" placeholder="Type Something here..." class="form-control">
                    </div>
                </div>
                <div class="row col-md-12 mx-auto" style="height: 100px;">
                    <div class="d-flex align-items-center">
                        <h1 class="show py-3 text-center mx-auto"></h1>
                    </div>
                </div>

                <div class="row pt-1">
                    <h2 class="pb-2 px-0">Let's Dive In</h2>
                    <p>I have used only one php file here. So imagine what else you could do if you used more advanced frameworks. So learn fast and learn everything.
                        Similarly you could use bootstrap examples to create more beautiful web pages, Refer their website to learn its functions.
                    </p>
                    <div class="list-group py-2 border-dark">
                        <li class="list-group-item list-group-item-action bg-primary text-light">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Four technologies with Two frameworks to ease my work functionality.</h5>
                            </div>
                        </li>
                        <li class="list-group-item list-group-item-action list-css">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">PHP</h5>
                            </div>
                            <p class="mb-1">Some placeholder content in a paragraph.</p>
                            <small>And some small print.</small>
                        </li>
                        <li class="list-group-item list-group-item-action list-css">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">CSS</h5>
                            </div>
                            <p class="mb-1">Some placeholder content in a paragraph.</p>
                            <small>And some small print.</small>
                        </li>
                        <li class="list-group-item list-group-item-action list-css">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Javascript</h5>
                            </div>
                            <p class="mb-1">Some placeholder content in a paragraph.</p>
                            <small>And some small print.</small>
                        </li>
                        <li class="list-group-item list-group-item-action bg-success text-light">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Bootstrap</h5>
                                <small>Framework</small>
                            </div>
                            <p class="mb-1">A design framework for Cascading Style Sheets. Visit here 
                                <a href="https://getbootstrap.com/" class="footer-link text-light"><u>https://getbootstrap.com/</u></a> to learn more
                            </p>
                            <small>Bootstrap is widely used specially for its 12 Grid Column interface design creating standards for web designing.</small>
                            
                        </li>
                        <li class="list-group-item list-group-item-action bg-danger text-light">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Jquery</h5>
                                <small>Framework</small>
                            </div>
                            <p class="mb-1">A design framework for Javascript. Visit here 
                                <a href="https://getbootstrap.com/" class="footer-link text-light"><u>https://www.w3schools.com/jquery/jquery_get_started.asp</u></a> to learn more
                            </p>
                            <small>Jquery makes javascript easier to use..</small>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-dark">
            <div class="container">
            <div class="py-5 row text-secondary">
                <div class="col-12 col-md my-auto">
                <small class="d-block mb-3 text-muted">
                    &copy; 
                    <script>
                    document.write(new Date().getFullYear())
                    </script>,
                <a href="{{('https://www.instagram.com/captain_burah')}}" class="footer-link text-light" target="_blank" >
                    Captain Burah
                </a>for a better world. Made in Peace.
                </small>
                </div>
                <div class="col-md-6">
                    <div class="row col-md-12">
                        <div class="col-6 col-md text-left">
                            <h5 class="font-weight-bold m-0 mt-2">Pages</h5>
                            <ul class="text-small text-secondary">
                                <li class="d-block"><a class="py-0 pr-0 footer-link text-secondary" href="#">Home</a></li>
                                <li class="d-block"><a class="py-0 pr-0 footer-link text-secondary" href="#">Some Page</a></li>
                                <li class="d-block"><a class="py-0 pr-0 footer-link text-secondary" href="#">Cool Page</a></li>
                                <li class="d-block"><a class="py-0 pr-0 footer-link text-secondary" href="#">Shit Page</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md text-left">
                            <h5 class="font-weight-bold m-0 mt-2">Resources</h5>
                            <ul class="list-unstyled text-small">
                                <li class="d-block"><a class="py-0 pr-0 footer-link text-secondary" href="#">Resource</a></li>
                                <li class="d-block"><a class="py-0 pr-0 footer-link text-secondary" href="#">Resource name</a></li>
                                <li class="d-block"><a class="py-0 pr-0 footer-link text-secondary" href="#">Another resource</a></li>
                                <li class="d-block"><a class="py-0 pr-0 footer-link text-secondary" href="#">Final resource</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </footer>
        <script>
            //--- Jquery script: for the server to understand the below code format we add the jquery link in the header/footer ---
            //--- By default the browser understand only vanilla javascript ---
            $('#name').keyup(function () {
            $('.show').html('').append($(this).val());
            });
        </script>
    </body>
</html>