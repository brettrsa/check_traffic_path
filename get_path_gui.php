<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Southey</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://d396qusza40orc.cloudfront.net/startup%2Fcode%2Fbootstrap-combined.no-icons.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css">
   <link href="http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,300,400,600,700,800"
          rel="stylesheet" type="text/css">
    <style type="text/css">

      /* Large desktop */
      @media (min-width: 980px) {
        body {
         padding-top: 60px;
        }
       .linediv-l {
         border-right: 1px white solid;
        }
       .linediv-r {
         border-left: 1px white solid;
       }
      }
     /* All form factors */

      /* Main body and headings */
      body{
        font-family: 'Open Sans', Helvetica, Arial, sans-serif;
      }
      .heading, .subheading {
        font-family: 'Ubuntu', Helvetica, Arial, sans-serif;
        text-align: center;
      }
      p.lead {
        padding-top: 1.5%;
        font-size: 24px;
        line-height: 30px;
      }
      p {
        font-size: 18px;
        line-height: 24px;
      }

    </style>
  </head>
  <body>

    <!-- Mobile-friendly navbar adapted from example. -->
    <!-- http://twitter.github.io/bootstrap/examples/starter-template.html -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar"
                  data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>


    <div class="container">
      <div class="row-fluid heading">
        <div class="span12">
          <h1>Southey - BAAN Traffic Path </h1>
        </div>
      </div>
      <div class="row-fluid subheading">
        <div class="span12">
          <p>
           <?
  	     $now = date('Y-m-d H:i:s');
             echo "Generated: $now<br />";
           ?>
          </p>
          <p class="lead">
        <?

          $output = `/usr/local/bin/get-path.sh`;
          $static = 1;

	  if($output == $static)
          {
            echo '-----------------------------------------------------------------------<br/>';
  	    echo 'The traffic path is via the IPSec tunnel<br/>';
	    echo 'This tunnel is located on router-z <br/>';
            echo '-----------------------------------------------------------------------';
          }
	  else
          {
	    echo '---------------------------------------------------------------------------<br/>';
	    echo 'The traffic path is via the PPTP tunnel via Dialer0<br/>';
	    echo 'This tunnel is located on router-x <br/>';
	    echo '-------------------------------------------------------------------------';
          }

        ?>
          </p>
        </div>
      </div>
</body>
</html>
