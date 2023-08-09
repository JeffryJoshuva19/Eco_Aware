 <head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="frontend/css/header.css" rel="stylesheet">

    <script src="frontend/js/header.js"></script>
 </head>
    <header class="neww">
      <!--// NAV BAR //-->
     
     
      <div class="container check">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4">
          <a href="/get_home" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <div class="circular-image">
              <img src="frontend/resource/Logo.png" alt="logoImage">
            </div>
            <span class="fs-4 coustom">Green-Madurai</span>
          </a>

    
          <ul class="nav nav-pills" id="nav-list">
            <li class="nav-item"><a href="/get_home" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Air</a></li>
            <li class="nav-item"><a href="#" class="nav-link">water</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Activites</a></li>
            <h1 class="dropdown ">
           <button class="btn clr" type="button" id="headingDropdown" data-bs-toggle="dropdown" aria-expanded="false">others</button>
              <div class="dropdown-menu" aria-labelledby="headingDropdown">
                  <a class="dropdown-item" href="querydetails.php">Querydetails</a>
                  <a class="dropdown-item" href="#">contact</a>
                  <a class="dropdown-item" href="#">Wast</a>
              </div>
            </h1>
            <div id="test">
              <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
            </div>
          </ul>
        </header>
      </div>         
      </div> 
      <h1 class="cent ant">"Let's make Madurai green and clean."</h1>
      <div class="down">
         
         <a class="next-page" href="#about-section"><i class="animated pulse infinite fa fa-chevron-circle-down fa-2x" aria-hidden="true"></i></a>
      </div>
  </header>
  <script>
    function loadGoogleTranslate(){
      new google.translate.TranslateElement("test");
    }
  </script>