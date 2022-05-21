<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand">BlogWeb</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                  
                  
                    
                    <?php
                        
                        echo '<li class="nav-item">
                        <a href="register.php" class="nav-link">Register</a>
                    </li>';

                        session_start();
                        if(isset($_SESSION['admin_name'])){

                          echo '<li class="nav-item">
                          <a href="./admin/insert_post.php" class="nav-link">Insert a post</a>
                          </li>';

                          echo '<li class="nav-item">
                        <a href="logout.php" class="nav-link">Logout</a>
                        </li>';
                          
                      }
                      else
                        if(isset($_SESSION['user_name'])){
                          echo '<li class="nav-item">
                          <a href="logout.php" class="nav-link">Logout</a>
                          </li>';
                      }
                      else{

                        echo ' <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                        </li>';
                      } 
                    ?>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!--Showcase-->
    <section class="section bg-dark text-light pt-5 text-center">
        <div class="container">
            <div class="d-lg-flex">
                <div>
                    <h1>Create your <span class="text-warning">Web Page</span></h1>
                    <p>A web page or webpage is a document, commonly written in HTML, that is viewed in an Internet browser. A web page can be accessed by entering a URL address into a browser's address bar. A web page may contain text, graphics, and hyperlinks to other web pages and files.</p>
                    <button class="btn btn-primary btn-lg mb-5">Register</button>
                    <button class="btn btn-secondary btn-lg mb-5">Sign-up</button>
                </div>
                <img class="pb-5 img-fluid d-none d-sm-block" src="images/Blog-Safely.jpg" alt="">
            </div>
        </div>
    </section>

    <!---Boxes-->
    <section class="p-5">
      <div class="container">
        <div class="row text-center g-4">
          <div class="col-md">
            <div class="card bg-dark text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-laptop"></i>
                </div>
                <h3 class="card-title mb-3">
                  HTML
                </h3>
                <p class="card-text">
                  HTML is a form of bookmarking aimed at presenting text documents on a single page, using a special rendering software called HTML user agent, the best example of such software being the web browser.  HTML provides the means by which the content of a document can be annotated with various types of metadata and playback instructions.  Rendering guidelines can range from minor text embellishments, such as the specificity that a particular word should be underlined, or that the image should be inserted, to sophisticated scripts, image maps and forms.  Metadata can include information about the title and author of the document, structural information about how the document is divided into different segments, paragraphs, lists, titles, etc.  and crucial information that allowed the document to be linked to other documents to form such hyperlinks (or the web).
                </p>
                <a id="readmore" class="btn btn-primary" onclick="readMore(this)">Read more</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="col-md">
              <div class="card bg-secondary text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-person-square"></i>
                  </div>
                  <h3 class="card-title mb-3">
                    CSS
                  </h3>
                  <p class="card-text">
                    CSS or Cascading Style Sheets is a standard for formatting elements of an HTML document.  Styles can be attached to HTML elements via external files or within the document.CSS can also be used to format XHTML, XML and SVGL elements.  CSS is one of the basic technologies used in web development, along with HTML and JavaScript.
                      CSS allows the separation and visual presentation of a web page's content, including available colors and fonts. Separating page elements improves page accessibility and allows for more flexibility and control over presentation feature specifications.
                  </p>
                  <a id="readmore" class="btn btn-dark" onclick="readMore(this)">Read more</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="col-md">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-people"></i>
                  </div>
                  <h3 class="card-title mb-3">
                    JAVASCRIPT
                  </h3>
                  <p class="card-text">
                    JavaScript (JS) is an object-oriented programming language based on the concept of prototypes. [9]  It is mainly used for introducing some functionalities in the web pages, the JavaScript code from these pages being run by the browser.  The language is well known for its use in building websites, but it is also used for accessing embedded objects in other applications.  It was originally developed by Brendan Eich of Netscape Communications Corporation as Mocha, then LiveScript, and eventually called JavaScript.
                  </p>
                  <a class="btn btn-primary" onclick="readMore(this)">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <div class="d">
    <div class="blog">
    <h2 class="h2">Latest Blog Post</h2>  
    <?php

      require_once("./php/getPosts.php");
      getMainPosts();

?>
      
      <div class="blog-card-group">
        <div class="blog-card">
          <div class="blog-card-banner">
            <img src="images/1.png" width="250" class="blog-banner-img">
          </div>
          <div class="blog-content-wrapper">
            <button class="blog-topic text-tiny">Database</button>

            <h3>
              <a href="#" class="h3">Building microservices with Dropwizard,MongoDB & Docker_</a>
            </h3>

            <p class="blog-text">This NoSQL database oriented to documents </p>
           
          </div>
        </div>

        <div class="blog-card">
          <div class="blog-card-banner">
            <img src="images/2.png" width="250" class="blog-banner-img">
          </div>
          <div class="blog-content-wrapper">
            <button class="blog-topic text-tiny">Web Performance</button>

            <h3>
              <a href="#" class="h3">Fast web page loading on a $20 feature phone</a>
            </h3>

            <p class="blog-text">Feature phones are affordable (under $20-25), low-end devices enabling 100s of millions of users in developing countries to leverage the web. Think of them as a light version of a smart phone</p>
            
          </div>
        </div>

        <div class="blog-card">
          <div class="blog-card-banner">
            <img src="images/3.png" width="250" class="blog-banner-img">
          </div>
          <div class="blog-content-wrapper">
            <button class="blog-topic text-tiny">Accessibility</button>

            <h3>
              <a href="#" class="h3">Accessibility Tips for Web Developers</a>
            </h3>

            <p class="blog-text">It's awesome to build sites that are inclusive and accessible to everyone. There are at least six key areas of disability we can optimize for: visual, hearing, mobility,cognition , speech and neural.Many tools and resources can help here, even if you're totally new to web accessibility</p>
            
          </div>
        </div>
      </div>
    </div>
  </div>

    
     

    <section class="section bg-dark text-light">
      <footer class="section bg-dark text-light text-center mb-lg-0">
        <div class="container p-4">
          <div class="d-flex justify-content-center row">
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Informations</h5>
    
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">Contact</a>
                </li>
                <li>
                  <a href="#!" class="text-white">About us</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Terms and conditions</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Cookie Usage Policy</a>
                </li>
              </ul>
            </div>
    
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Links</h5>
    
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">Bootstrap</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Html</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Css</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Javascript</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
       
    
     
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-white" href="#">WebBlog.com</a>
      
      </footer>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>