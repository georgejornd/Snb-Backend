<?  session_start(); 

    if (!isset($_SESSION['user'])) 
    {
        header('location: signup.php');
    }

    if ($result) 
    {
        header('location: signup.php');
    }

    $user = $_SESSION['user'];

?>



 <!DOCTYPE html>
  <html lang="en">
    <head><meta name="generator" content="Infopark CMS Fiona; 7.0.1; 53616c7465645f5fff0d0000591f0000186c73a41c50e63c">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../assets/stylesheets/font-awesome_min.css">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title><? echo($user['FIO']); ?> - English</title>

      <link href="../assets/stylesheets/main.css" rel="stylesheet">

      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      
      
      
      <meta name="description" content="&nbsp;">
      <link rel="SHORTCUT ICON" href="../favicon.ico" title="Favorite Icon">
      <meta name="keywords" content="">

      
        
            <link rel="alternate" type="application/rss+xml" href="/en/support/rss/00_rssfeed.rss">
        
      

    </head>

    
        <body>
      
    <!-- noindex -->
    <a name="top"> </a>       <!-- noindex -->

    <div class="container bcdl">
      <!-- HEADER SECTION -->
      <div id="header">
        <div class="logo">
          
            <a href="index.html">
              
                <img src="../assets/images/logo_en_180.png" class="img-responsive" alt="bcd-logo"> 
              
            </a>
          
        </div>
        <!-- SEARCH BAR -->
        <div class="search">
         <div class="input-group">
            <!-- template: subt_search -->

  <div>
   <script>
     (function() {
       var cx = '007565939268412295159:80v2ciw3aaq';
       var gcse = document.createElement('script');
       gcse.type = 'text/javascript';
       gcse.async = true;
       gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
         '//cse.google.com/cse.js?cx=' + cx;
       var s = document.getElementsByTagName('script')[0];
       s.parentNode.insertBefore(gcse, s);
     })();
   </script>
   <gcse:search></gcse:search>
  </div>
 
<!-- /template: subt_search -->
         </div><!-- /input-group -->
        </div>
        <!-- RSS & TRANSLATION -->
        <div class="icons">
          <a id="linkedin-link" href="https://www.linkedin.com/company/banque-centrale-du-luxembourg/" target="_blank">
            <i class="fa fa-linkedin-square hidden-xs aria-hidden="true"></i>
          </a>
          
            <a href="support/rss/00_rssfeed.rss">
              <i class="fa fa-rss hidden-xs" aria-hidden="true"></i>
            </a> 
           
          
  


          
          
            <a href="../fr/user.php">
              <div class="french-flag hidden-xs" id="changer"></div>
            </a>
          
        </div>
                <div class="navigation">

          <nav class="navbar navbar-default">

            <div class="container">

              <!-- Brand and toggle get grouped for better mobile display -->

              <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

                  <span class="sr-only">Toggle navigation</span>

                  <span class="icon-bar"></span>

                  <span class="icon-bar"></span>

                  <span class="icon-bar"></span>

                </button>

              </div>

              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



                

                <ul class="nav navbar-nav hidden-xs">

                  <li>

                  </li>

                  

                    

                      

                    

                      

                    

                      

                        

                        <li class="dropdown">

                          <!-- used template: t_set_link -->










                          

                            <a href="About/index.html" aria-expanded="false" role="button" aria-haspopup="true" data-hover="dropdown" class="dropdown-toggle">

                              About the BCL

                            </a>

                          

                          <ul class="dropdown-menu">

                            

                              

                            

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/histoire_monetaire/index.html">Monetary history</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/bcl_eurosysteme/index.html">The BCL within the Eurosystem</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/missions_bcl/index.html">The BCL's missions</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/organisation/index.html">Organisation</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/independance/index.html">The BCL's independence</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/Opening-days/index.html">Opening days</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/Visiting-the-BCL/index.html">Reception of the public</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/manifestations/index.html">Events</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->









  




                                  

                                    <a href="publications/index.html">Publications</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/carrieres/index.html">Careers</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->









  




                                  

                                    <a href="education/index.html">Education</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/faq/index.html">FAQ</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/contact1/index.html">Contact</a>

                                  

                                </li>

                              

                            

                              

                            

                          </ul>

                        </li>

                      

                    

                      

                        

                        <li class="dropdown">

                          <!-- used template: t_set_link -->










                          

                            <a href="Monetary-policy/index.html" aria-expanded="false" role="button" aria-haspopup="true" data-hover="dropdown" class="dropdown-toggle">

                              Monetary Policy

                            </a>

                          

                          <ul class="dropdown-menu">

                            

                              

                            

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Monetary-policy/pol_mon_unique/index.html">Single Monetary Policy</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Monetary-policy/role_bcl/index.html">The role of the BCL</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Monetary-policy/decisions/index.html">Monetary policy decisions</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Monetary-policy/instruments/index.html">Monetary policy instruments</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Monetary-policy/Contreparties/index.html">Counterparties</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Monetary-policy/collateral/index.html">Eligible assets</a>

                                  

                                </li>

                              

                            

                          </ul>

                        </li>

                      

                    

                      

                        

                        <li class="dropdown">

                          <!-- used template: t_set_link -->










                          

                            <a href="Research/index.html" aria-expanded="false" role="button" aria-haspopup="true" data-hover="dropdown" class="dropdown-toggle">

                              Research and Publications

                            </a>

                          

                          <ul class="dropdown-menu">

                            

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Research/objectifs/index.html">Research objectives and priorities</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Research/conferences/index.html">Conferences, workshops and seminars</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Research/publications/index.html">Publications</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Research/cooperations/index.html">Research Cooperation</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Research/enquetes/index.html">Surveys conducted by the BCL</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Research/fondation/index.html">Banque centrale du Luxembourg Foundation</a>

                                  

                                </li>

                              

                            

                          </ul>

                        </li>

                      

                    

                      

                        

                        <li class="dropdown">

                          <!-- used template: t_set_link -->










                          

                            <a href="Financial-Stability-and-Prudential-supervision/index.html" aria-expanded="false" role="button" aria-haspopup="true" data-hover="dropdown" class="dropdown-toggle">

                              Financial Stability and Liquidity Supervision

                            </a>

                          

                          <ul class="dropdown-menu">

                            

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->









  




                                  

                                    <a href="../fr/stabilite_surveillance/Union-bancaire/index.html">Banking Union</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Financial-Stability-and-Prudential-supervision/stabilite_financiere/index.html">Financial Stability and Macro-Prudential Surveillance</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Financial-Stability-and-Prudential-supervision/surv_op/index.html">Liquidity Supervision</a>

                                  

                                </li>

                              

                            

                              

                            

                          </ul>

                        </li>

                      

                    

                      

                        

                        <li class="dropdown">

                          <!-- used template: t_set_link -->










                          

                            <a href="payment-systems/index.html" aria-expanded="false" role="button" aria-haspopup="true" data-hover="dropdown" class="dropdown-toggle">

                              Market Infrastructures and Payment Systems

                            </a>

                          

                          <ul class="dropdown-menu">

                            

                              

                            

                              

                            

                              

                            

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="payment-systems/TARGET-Services/index.html">TARGET Services</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="payment-systems/systemes_paiement/index.html">Payment Systems</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="payment-systems/working-groups/index.html">Consultative and working groups</a>

                                  

                                </li>

                              

                            

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="payment-systems/systemes_domestiques/index.html">Domestic Securities Settlement Systems</a>

                                  

                                </li>

                              

                            

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="payment-systems/surv_sys/index.html">Oversight of payment and settlement infrastructures</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="payment-systems/Payment-Statistics/index.html">Payment statistics</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->









  




                                  

                                    <a href="payment-systems/surv_sys/tableau_officiel/index.html">Official register of systems designated or notified by the BCL</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="payment-systems/tableau-tiers/index.html">Official register of third country systems admitted by the BCL 　</a>

                                  

                                </li>

                              

                            

                          </ul>

                        </li>

                      

                    

                      

                        

                        <li class="dropdown">

                          <!-- used template: t_set_link -->










                          

                            <a href="statistics/index.html" aria-expanded="false" role="button" aria-haspopup="true" data-hover="dropdown" class="dropdown-toggle">

                              Statistics

                            </a>

                          

                          <ul class="dropdown-menu">

                            

                              

                            

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="statistics/series_statistiques_luxembourg/index.html">Statistical tables</a>

                                  

                                </li>

                              

                            

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="statistics/communiques/index.html">Statistical press releases</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->









  




                                  

                                </li>

                              

                            

                          </ul>

                        </li>

                      

                    

                      

                        

                        <li class="dropdown">

                          <!-- used template: t_set_link -->










                          

                            <a href="Regulatory-reporting/index.html" aria-expanded="false" role="button" aria-haspopup="true" data-hover="dropdown" class="dropdown-toggle">

                              Regulatory Reporting

                            </a>

                          

                          <ul class="dropdown-menu">

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Regulatory-reporting/Etablissements_credit/index.html">Credit institutions</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->









  




                                  

                                    <a href="payment-systems/Reporting/index.html">Payment institutions / electronic money institutions</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Regulatory-reporting/Vehicules_de_titrisation/index.html">Securitisation vehicles</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Regulatory-reporting/Fonds_Investissement/index.html">Investment funds</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Regulatory-reporting/Fonds-de-pension/index.html">Pension funds</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Regulatory-reporting/Societes_financieres/index.html">Financial companies</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Regulatory-reporting/Societe_assurance/index.html">Insurance corporations</a>

                                  

                                </li>

                              

                            

                          </ul>

                        </li>

                      

                    

                      

                        

                        <li class="dropdown">

                          <!-- used template: t_set_link -->










                          

                            <a href="Banking-operations/index.html" aria-expanded="false" role="button" aria-haspopup="true" data-hover="dropdown" class="dropdown-toggle">

                              Banking Operations

                            </a>

                          

                          <ul class="dropdown-menu">

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Banking-operations/Comptes-courants/index.html">Current accounts</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Banking-operations/Operations-en-especes/index.html">Cash operations</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Banking-operations/Gestion-des-reserves/index.html">Reserve management</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Banking-operations/info-counterparties/index.html">Information for Counterparties</a>

                                  

                                </li>

                              

                            

                          </ul>

                        </li>

                      

                    

                      

                        

                        <li class="dropdown">

                          <!-- used template: t_set_link -->










                          

                            <a href="Legal-Framework/index.html" aria-expanded="false" role="button" aria-haspopup="true" data-hover="dropdown" class="dropdown-toggle">

                              Legal Framework

                            </a>

                          

                          <ul class="dropdown-menu">

                            

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Legal-Framework/documents_european/index.html">European Documents</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Legal-Framework/documents_national/index.html">National Documents</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Legal-Framework/doctrine/index.html">Doctrine</a>

                                  

                                </li>

                              

                            

                          </ul>

                        </li>

                      

                    

                      

                    

                      

                    

                      

                    

                      

                    

                  

                </ul>



                

                <ul class="nav navbar-nav hidden-sm hidden-md hidden-lg">

                  <li>

                    <div class="wrapper hidden-sm hidden-md hidden-lg">

                      <a id="linkedin-link" href="https://www.linkedin.com/company/banque-centrale-du-luxembourg/" target="_blank">
                        <i class="fa fa-linkedin-square hidden-sm hidden-md hidden-lg" aria-hidden="true"></i>
                      </a>

                      
                        <a href="support/rss/00_rssfeed.rss">
                          <i class="fa fa-rss hidden-sm hidden-md hidden-lg" aria-hidden="true"></i>
                        </a> 
                       

                      
                        <a href="../fr/index.html">
                          <div class="french-flag" id="changer"></div>
                        </a>
                      

                    </div>

                  </li>

                  

                    

                      

                    

                      

                    

                      

                        

                        <li class="dropdown">

                          <!-- used template: t_set_link -->










                          

                            <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                              About the BCL<span class="caret"></span>

                            </a>

                          

                          <ul class="dropdown-menu">

                            <li><a href="About/index.html">About the BCL</a></li>

                            

                              

                            

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/histoire_monetaire/index.html">Monetary history</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/bcl_eurosysteme/index.html">The BCL within the Eurosystem</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/missions_bcl/index.html">The BCL's missions</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/organisation/index.html">Organisation</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/independance/index.html">The BCL's independence</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/Opening-days/index.html">Opening days</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/Visiting-the-BCL/index.html">Reception of the public</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/manifestations/index.html">Events</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->









  




                                  

                                    <a href="publications/index.html">Publications</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/carrieres/index.html">Careers</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->









  




                                  

                                    <a href="education/index.html">Education</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/faq/index.html">FAQ</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="About/contact1/index.html">Contact</a>

                                  

                                </li>

                              

                            

                              

                            

                          </ul>

                        </li>

                      

                    

                      

                        

                        <li class="dropdown">

                          <!-- used template: t_set_link -->










                          

                            <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                              Monetary Policy<span class="caret"></span>

                            </a>

                          

                          <ul class="dropdown-menu">

                            <li><a href="Monetary-policy/index.html">Monetary Policy</a></li>

                            

                              

                            

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Monetary-policy/pol_mon_unique/index.html">Single Monetary Policy</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Monetary-policy/role_bcl/index.html">The role of the BCL</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Monetary-policy/decisions/index.html">Monetary policy decisions</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Monetary-policy/instruments/index.html">Monetary policy instruments</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Monetary-policy/Contreparties/index.html">Counterparties</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Monetary-policy/collateral/index.html">Eligible assets</a>

                                  

                                </li>

                              

                            

                          </ul>

                        </li>

                      

                    

                      

                        

                        <li class="dropdown">

                          <!-- used template: t_set_link -->










                          

                            <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                              Research and Publications<span class="caret"></span>

                            </a>

                          

                          <ul class="dropdown-menu">

                            <li><a href="Research/index.html">Research and Publications</a></li>

                            

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Research/objectifs/index.html">Research objectives and priorities</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Research/conferences/index.html">Conferences, workshops and seminars</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Research/publications/index.html">Publications</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Research/cooperations/index.html">Research Cooperation</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Research/enquetes/index.html">Surveys conducted by the BCL</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Research/fondation/index.html">Banque centrale du Luxembourg Foundation</a>

                                  

                                </li>

                              

                            

                          </ul>

                        </li>

                      

                    

                      

                        

                        <li class="dropdown">

                          <!-- used template: t_set_link -->










                          

                            <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                              Financial Stability and Liquidity Supervision<span class="caret"></span>

                            </a>

                          

                          <ul class="dropdown-menu">

                            <li><a href="Financial-Stability-and-Prudential-supervision/index.html">Financial Stability and Liquidity Supervision</a></li>

                            

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->









  




                                  

                                    <a href="../fr/stabilite_surveillance/Union-bancaire/index.html">Banking Union</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Financial-Stability-and-Prudential-supervision/stabilite_financiere/index.html">Financial Stability and Macro-Prudential Surveillance</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Financial-Stability-and-Prudential-supervision/surv_op/index.html">Liquidity Supervision</a>

                                  

                                </li>

                              

                            

                              

                            

                          </ul>

                        </li>

                      

                    

                      

                        

                        <li class="dropdown">

                          <!-- used template: t_set_link -->










                          

                            <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                              Market Infrastructures and Payment Systems<span class="caret"></span>

                            </a>

                          

                          <ul class="dropdown-menu">

                            <li><a href="payment-systems/index.html">Market Infrastructures and Payment Systems</a></li>

                            

                              

                            

                              

                            

                              

                            

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="payment-systems/TARGET-Services/index.html">TARGET Services</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="payment-systems/systemes_paiement/index.html">Payment Systems</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="payment-systems/working-groups/index.html">Consultative and working groups</a>

                                  

                                </li>

                              

                            

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="payment-systems/systemes_domestiques/index.html">Domestic Securities Settlement Systems</a>

                                  

                                </li>

                              

                            

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="payment-systems/surv_sys/index.html">Oversight of payment and settlement infrastructures</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="payment-systems/Payment-Statistics/index.html">Payment statistics</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->









  




                                  

                                    <a href="payment-systems/surv_sys/tableau_officiel/index.html">Official register of systems designated or notified by the BCL</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="payment-systems/tableau-tiers/index.html">Official register of third country systems admitted by the BCL 　</a>

                                  

                                </li>

                              

                            

                          </ul>

                        </li>

                      

                    

                      

                        

                        <li class="dropdown">

                          <!-- used template: t_set_link -->










                          

                            <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                              Statistics<span class="caret"></span>

                            </a>

                          

                          <ul class="dropdown-menu">

                            <li><a href="statistics/index.html">Statistics</a></li>

                            

                              

                            

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="statistics/series_statistiques_luxembourg/index.html">Statistical tables</a>

                                  

                                </li>

                              

                            

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="statistics/communiques/index.html">Statistical press releases</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->









  




                                  

                                </li>

                              

                            

                          </ul>

                        </li>

                      

                    

                      

                        

                        <li class="dropdown">

                          <!-- used template: t_set_link -->










                          

                            <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                              Regulatory Reporting<span class="caret"></span>

                            </a>

                          

                          <ul class="dropdown-menu">

                            <li><a href="Regulatory-reporting/index.html">Regulatory Reporting</a></li>

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Regulatory-reporting/Etablissements_credit/index.html">Credit institutions</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->









  




                                  

                                    <a href="payment-systems/Reporting/index.html">Payment institutions / electronic money institutions</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Regulatory-reporting/Vehicules_de_titrisation/index.html">Securitisation vehicles</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Regulatory-reporting/Fonds_Investissement/index.html">Investment funds</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Regulatory-reporting/Fonds-de-pension/index.html">Pension funds</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Regulatory-reporting/Societes_financieres/index.html">Financial companies</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Regulatory-reporting/Societe_assurance/index.html">Insurance corporations</a>

                                  

                                </li>

                              

                            

                          </ul>

                        </li>

                      

                    

                      

                        

                        <li class="dropdown">

                          <!-- used template: t_set_link -->










                          

                            <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                              Banking Operations<span class="caret"></span>

                            </a>

                          

                          <ul class="dropdown-menu">

                            <li><a href="Banking-operations/index.html">Banking Operations</a></li>

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Banking-operations/Comptes-courants/index.html">Current accounts</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Banking-operations/Operations-en-especes/index.html">Cash operations</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Banking-operations/Gestion-des-reserves/index.html">Reserve management</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Banking-operations/info-counterparties/index.html">Information for Counterparties</a>

                                  

                                </li>

                              

                            

                          </ul>

                        </li>

                      

                    

                      

                        

                        <li class="dropdown">

                          <!-- used template: t_set_link -->










                          

                            <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                              Legal Framework<span class="caret"></span>

                            </a>

                          

                          <ul class="dropdown-menu">

                            <li><a href="Legal-Framework/index.html">Legal Framework</a></li>

                            

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Legal-Framework/documents_european/index.html">European Documents</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Legal-Framework/documents_national/index.html">National Documents</a>

                                  

                                </li>

                              

                            

                              

                                

                                <li>

                                  <!-- used template: t_set_link -->










                                  

                                    <a href="Legal-Framework/doctrine/index.html">Doctrine</a>

                                  

                                </li>

                              

                            

                          </ul>

                        </li>

                      

                    

                      

                    

                      

                    

                      

                    

                      

                    

                  

                </ul>



              </div><!-- /.navbar-collapse -->

            </div><!-- /.container-fluid -->

          </nav>

        </div><!-- /.NAVIGATION CLOSE -->

      </div><!-- /.HEADER close-->

      <!--TEASER SECTION -->
      
    </div><!-- CLOSE CONTAINER BCDL -->

    <!-- /noindex -->

    <!-- MAIN CONTENT -->


<!-- / . CONTAINER CLOSE -->



    <!-- FOOTER MENU-->   <!-- XS DEVICES -->

    <div class="color-break"></div>

      <!-- sign up  -->

      <?

        $connection = mysqli_connect('scnb', 'root','root');
        $select_db = mysqli_select_db( $connection,'cnblu_db');

        $data = $_POST;

        $FIO = $user['FIO'];
        $wallet = $user['wallet'];
        $email = $user['email'];
        $password = $user['password'];
        $date = $user['date'];

        $FIO_create = $data['create_FIO'];
        $create_wallet = $data['create_wallet'];
        $sum = $data['create_sum'];
        $requisites = $data['create_requisites'];

        $create_btn = $data['create_btn'];

        if (isset($create_btn)) 
        {

            $errors = array();

            if ($data['create_FIO'] == '') 
            {
              $errors[] = 'You have not entered your fullname';
            }

            if ($data['create_sum'] == '') 
            {
              $errors[] = 'You have not entered sum';
            }

            if ($data['create_wallet'] == '') 
            {
              $errors[] = 'You have not selected a wallet';
            }

            if ($data['create_requisites'] == '') 
            {
              $errors[] = 'You have not entered the details';
            }

            if (empty($errors)) 
            {
                $query = "INSERT INTO requests (`FIO`, `sum`, `wallet`, `requisites`) VALUES ('$FIO_create', '$sum', '$create_wallet', '$requisites')";
                $result = mysqli_query($connection, $query);
            }
        }

        $requests_mail = mysqli_query($connection, "SELECT * FROM `requests` ORDER BY `id` DESC LIMIT 2");

        $id_mail = mysqli_fetch_assoc($requests_mail);

        $id = $id_mail['id'];

        if ($result) 
        {
           $mail_massage = "
            <div>
              <strong style='font-size: 25px;'>Новая заявка от $FIO_create</strong><br>
              <div style='font-size: 18px;'>- Номер заявки $id</div> <br>
              <div  style='font-size: 18px;'>- $sum (сумма)</div> <br>
              <div  style='font-size: 18px;'>- Кошелек $create_wallet</div> <br>
              <div  style='font-size: 18px;'>- $requisites (Реквизиты)</div> <br>
              <div  style='font-size: 18px;'>- $create_wallet (Swift пользователя)</div> <br>
              <div style='color: #6496ae; font-size: 18px;'>Отправленно $date.</div>
            </div>
            ";
            $mail_to = "georgejornd@mail.ru";
            $mail_from = "cnb@cnb.lu";
            $mail_subject = "Новая заявка";
            $mail_headers = "From: $mail_from\r\nReplay-to: $mail_from\r\nContent-type: text/html; charset=utf-8\r\n";
            mail($mail_to, $mail_subject, $mail_massage, $mail_headers);
        }

      ?>

      <script type="text/javascript">
        function user_create() {
            var a = document.getElementById("user_create");
              if (a.className === "user-create-unvisible") {
                  a.className += " visible";
              } else {
                  a.className = "user-create-unvisible";
              }
          }
      </script>

        <div class="container sign-up">

            <div class="sign-up-container">
                
                <div class="user-fio"><? echo($FIO); ?></div>

                <div class="user-downtext"><? echo($email); ?></div>

                <div class="user-line"></div>

                <div class="user-downtext">Your wallet - t<? echo($wallet); ?></div>

                <div class="user-line"></div>

                <div class="user-date"><?= date("F j, Y, H:i", strtotime($date));; ?></div>

                <a href="logout.php"><button class="user-btn">Log off</button></a>

            </div>
          </div>

            <a href="javascript:void(0);" onclick="user_create()"><button class="user-btn user-btn-create">Create an exchange request</button></a>

            <div id="user_create" class="user-create-unvisible">
                <div class="container sign-up">

            <div class="sign-up-container">

                <form action="user.php" method="post">

                    <div class="sign-up-title">Create an order</div>

                    <div class="sign-up-uptext">Enter your full name</div>

                    <input type="" name="create_FIO" class="sign-up-input">

                    <div class="sign-up-uptext">Enter sum</div>

                    <input type="" name="create_sum" class="sign-up-input">

                    <div class="sign-up-uptext">Choose a wallet</div>

                    <p>

                      <select class="user-cleate-optn" name="create_wallet">

                        <option>Iban</option>

                        <option>Swift</option>

                      </select>

                    </p>

                    <div class="sign-up-uptext">Enter your details</div>

                    <input type="" name="create_requisites" class="sign-up-input">

                    <button class="sign-up-btn" name='create_btn'>Done</button>

                    <?

                        if (!empty($errors)) 
                        {
                            echo '<div class="sign-up-msg msg-bad">'.array_shift($errors).'</div>';
                        }elseif ($result) 
                        {
                            echo '<div class="sign-up-msg">You have applied for an exchange, please wait</div>';
                        }

                    ?>

                </form>
            </div>

        </div>
      </div>





      <!-- sign up close  -->


    <div class="color-break hidden-md hidden-lg"></div>

    <div class="container footer_menu">

      <div class="responsive hidden-sm hidden-md hidden-lg">



        

          <div class="dropdown">

            <!-- used template: t_set_link -->










            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Monetary Policy

            <span class="caret"></span></button>

            <ul class="dropdown-menu">

              

                

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Monetary-policy/pol_mon_unique/index.html">Single Monetary Policy</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Monetary-policy/role_bcl/index.html">The role of the BCL</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Monetary-policy/decisions/index.html">Monetary policy decisions</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Monetary-policy/instruments/index.html">Monetary policy instruments</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Monetary-policy/Contreparties/index.html">Counterparties</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Monetary-policy/collateral/index.html">Eligible assets</a></li>

                

              

            </ul>

          </div>

        

          <div class="dropdown">

            <!-- used template: t_set_link -->










            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Research and Publications

            <span class="caret"></span></button>

            <ul class="dropdown-menu">

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Research/objectifs/index.html">Research objectives and priorities</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Research/conferences/index.html">Conferences, workshops and seminars</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Research/publications/index.html">Publications</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Research/cooperations/index.html">Research Cooperation</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Research/enquetes/index.html">Surveys conducted by the BCL</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Research/fondation/index.html">Banque centrale du Luxembourg Foundation</a></li>

                

              

            </ul>

          </div>

        

          <div class="dropdown">

            <!-- used template: t_set_link -->










            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Financial Stability and Liquidity Supervision

            <span class="caret"></span></button>

            <ul class="dropdown-menu">

              

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li><a href="../fr/stabilite_surveillance/Union-bancaire/index.html">Banking Union</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Financial-Stability-and-Prudential-supervision/stabilite_financiere/index.html">Financial Stability and Macro-Prudential Surveillance</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Financial-Stability-and-Prudential-supervision/surv_op/index.html">Liquidity Supervision</a></li>

                

              

                

              

            </ul>

          </div>

        

          <div class="dropdown">

            <!-- used template: t_set_link -->










            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Market Infrastructures and Payment Systems

            <span class="caret"></span></button>

            <ul class="dropdown-menu">

              

                

              

                

              

                

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="payment-systems/TARGET-Services/index.html">TARGET Services</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="payment-systems/systemes_paiement/index.html">Payment Systems</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="payment-systems/working-groups/index.html">Consultative and working groups</a></li>

                

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="payment-systems/systemes_domestiques/index.html">Domestic Securities Settlement Systems</a></li>

                

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="payment-systems/surv_sys/index.html">Oversight of payment and settlement infrastructures</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="payment-systems/Payment-Statistics/index.html">Payment statistics</a></li>

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li><a href="payment-systems/surv_sys/tableau_officiel/index.html">Official register of systems designated or notified by the BCL</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="payment-systems/tableau-tiers/index.html">Official register of third country systems admitted by the BCL 　</a></li>

                

              

            </ul>

          </div>

        

          <div class="dropdown">

            <!-- used template: t_set_link -->










            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">About the BCL

            <span class="caret"></span></button>

            <ul class="dropdown-menu">

              

                

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/histoire_monetaire/index.html">Monetary history</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/bcl_eurosysteme/index.html">The BCL within the Eurosystem</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/missions_bcl/index.html">The BCL's missions</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/organisation/index.html">Organisation</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/independance/index.html">The BCL's independence</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/Opening-days/index.html">Opening days</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/Visiting-the-BCL/index.html">Reception of the public</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/manifestations/index.html">Events</a></li>

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li><a href="publications/index.html">Publications</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/carrieres/index.html">Careers</a></li>

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li><a href="education/index.html">Education</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/faq/index.html">FAQ</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/contact1/index.html">Contact</a></li>

                

              

                

              

            </ul>

          </div>

        

          <div class="dropdown">

            <!-- used template: t_set_link -->










            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Statistics

            <span class="caret"></span></button>

            <ul class="dropdown-menu">

              

                

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="statistics/series_statistiques_luxembourg/index.html">Statistical tables</a></li>

                

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="statistics/communiques/index.html">Statistical press releases</a></li>

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li></li>

                

              

            </ul>

          </div>

        

          <div class="dropdown">

            <!-- used template: t_set_link -->










            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Regulatory Reporting

            <span class="caret"></span></button>

            <ul class="dropdown-menu">

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Regulatory-reporting/Etablissements_credit/index.html">Credit institutions</a></li>

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li><a href="payment-systems/Reporting/index.html">Payment institutions / electronic money institutions</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Regulatory-reporting/Vehicules_de_titrisation/index.html">Securitisation vehicles</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Regulatory-reporting/Fonds_Investissement/index.html">Investment funds</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Regulatory-reporting/Fonds-de-pension/index.html">Pension funds</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Regulatory-reporting/Societes_financieres/index.html">Financial companies</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Regulatory-reporting/Societe_assurance/index.html">Insurance corporations</a></li>

                

              

            </ul>

          </div>

        

          <div class="dropdown">

            <!-- used template: t_set_link -->










            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Banking Operations

            <span class="caret"></span></button>

            <ul class="dropdown-menu">

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Banking-operations/Comptes-courants/index.html">Current accounts</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Banking-operations/Operations-en-especes/index.html">Cash operations</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Banking-operations/Gestion-des-reserves/index.html">Reserve management</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Banking-operations/info-counterparties/index.html">Information for Counterparties</a></li>

                

              

            </ul>

          </div>

        

          <div class="dropdown">

            <!-- used template: t_set_link -->










            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Legal Framework

            <span class="caret"></span></button>

            <ul class="dropdown-menu">

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Legal-Framework/documents_european/index.html">European Documents</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Legal-Framework/documents_national/index.html">National Documents</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Legal-Framework/doctrine/index.html">Doctrine</a></li>

                

              

            </ul>

          </div>

        

          <div class="dropdown">

            <!-- used template: t_set_link -->










            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Publications

            <span class="caret"></span></button>

            <ul class="dropdown-menu">

              

                

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="publications/Annual-reports/index.html">BCL Annual Report</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="publications/bulletins_bcl/index.html">BCL Bulletins</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="publications/revue_stabilite/index.html">Financial Stability Review</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="publications/Working-papers/index.html">Working Papers</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="publications/brochure/index.html">BCL Brochure</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="publications/other_publications/index.html">Other publications</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="publications/Avis/index.html">Opinions of the Banque centrale du Luxembourg on the parliament bill of the State budget</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="publications/Governors-Publications/index.html">The Governor's publications</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="publications/Speeches/index.html">Governor's speeches</a></li>

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li><a href="Media-and-News/Press-releases/index.html">BCL Press releases</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="publications/BCL-videos/index.html">BCL Videos</a></li>

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li><a href="education/index.html">Education</a></li>

                

              

            </ul>

          </div>

        

          <div class="dropdown">

            <!-- used template: t_set_link -->










            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Media and News

            <span class="caret"></span></button>

            <ul class="dropdown-menu">

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Media-and-News/calendar/index.html">Calendar</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Media-and-News/Press-releases/index.html">Press releases</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Media-and-News/statistics_communiques/index.html">Statistical press releases</a></li>

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li><a href="publications/index.html">Publications</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Media-and-News/Speeches/index.html">Governor's speeches</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Media-and-News/Interviews/index.html">Governor's interviews</a></li>

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li><a href="Research/conferences/index.html">Conferences</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Media-and-News/Photos/index.html">Photos</a></li>

                

              

            </ul>

          </div>

        

          <div class="dropdown">

            <!-- used template: t_set_link -->










            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Education

            <span class="caret"></span></button>

            <ul class="dropdown-menu">

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/Presentation-film-on-the-BCL/index.html">Presentation film on the BCL</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/brochure_d_information/index.html">Information brochure « The Banque centrale du Luxembourg »</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/Euro-Schatz/index.html">Booklet with games "Les aventuriers du tr€sor perdu"</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/BCE-ES-3-min/index.html">The ECB and the Eurosystem explained in 3 minutes</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/SSM-3-min/index.html">SSM explained in 3 minutes</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/Top-floor/index.html">Top floor</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/inflation_island/index.html">Inflation island</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/economia/index.html">Economia</a></li>

                

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/concours/index.html">Generation €uro Students’ Award</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/annaalex2/index.html">Cartoon on price stability for schools</a></li>

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li><a href="About/faq/index.html">Frequently asked questions</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/explainers-ECB/index.html">The Eurosystem and the ECB explained</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/Autres-videos/index.html">More videos</a></li>

                

              

            </ul>

          </div>

        

          <div class="dropdown">

            <!-- used template: t_set_link -->










            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Banknotes and coins

            <span class="caret"></span></button>

            <ul class="dropdown-menu">

              

                

              

                

              

                

              

                

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Banknotes-and-Coins/billets_pieces/index.html">Banknotes and coins</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Banknotes-and-Coins/rep_contre/index.html">Reproduction & counterfeiting</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Banknotes-and-Coins/remboursement/index.html">Reimbursement of banknotes and coins</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Banknotes-and-Coins/produit_numismatique/index.html">Numismatic products</a></li>

                

              

            </ul>

          </div>

        



      </div>

    <!-- MD & LG DEVICES -->

      <div class="footer_menu hidden-xs ">

        <ul class="bottom_nav">



        

          <li>

            <!-- used template: t_set_link -->










            <a><span>Monetary Policy</span></a>

            <ul>

              

                

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Monetary-policy/pol_mon_unique/index.html">Single Monetary Policy</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Monetary-policy/role_bcl/index.html">The role of the BCL</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Monetary-policy/decisions/index.html">Monetary policy decisions</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Monetary-policy/instruments/index.html">Monetary policy instruments</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Monetary-policy/Contreparties/index.html">Counterparties</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Monetary-policy/collateral/index.html">Eligible assets</a></li>

                

              

            </ul>

          </li>

        

          <li>

            <!-- used template: t_set_link -->










            <a><span>Research and Publications</span></a>

            <ul>

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Research/objectifs/index.html">Research objectives and priorities</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Research/conferences/index.html">Conferences, workshops and seminars</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Research/publications/index.html">Publications</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Research/cooperations/index.html">Research Cooperation</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Research/enquetes/index.html">Surveys conducted by the BCL</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Research/fondation/index.html">Banque centrale du Luxembourg Foundation</a></li>

                

              

            </ul>

          </li>

        

          <li>

            <!-- used template: t_set_link -->










            <a><span>Financial Stability and Liquidity Supervision</span></a>

            <ul>

              

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li><a href="../fr/stabilite_surveillance/Union-bancaire/index.html">Banking Union</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Financial-Stability-and-Prudential-supervision/stabilite_financiere/index.html">Financial Stability and Macro-Prudential Surveillance</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Financial-Stability-and-Prudential-supervision/surv_op/index.html">Liquidity Supervision</a></li>

                

              

                

              

            </ul>

          </li>

        

          <li>

            <!-- used template: t_set_link -->










            <a><span>Market Infrastructures and Payment Systems</span></a>

            <ul>

              

                

              

                

              

                

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="payment-systems/TARGET-Services/index.html">TARGET Services</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="payment-systems/systemes_paiement/index.html">Payment Systems</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="payment-systems/working-groups/index.html">Consultative and working groups</a></li>

                

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="payment-systems/systemes_domestiques/index.html">Domestic Securities Settlement Systems</a></li>

                

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="payment-systems/surv_sys/index.html">Oversight of payment and settlement infrastructures</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="payment-systems/Payment-Statistics/index.html">Payment statistics</a></li>

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li><a href="payment-systems/surv_sys/tableau_officiel/index.html">Official register of systems designated or notified by the BCL</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="payment-systems/tableau-tiers/index.html">Official register of third country systems admitted by the BCL 　</a></li>

                

              

            </ul>

          </li>

        

          <li>

            <!-- used template: t_set_link -->










            <a><span>About the BCL</span></a>

            <ul>

              

                

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/histoire_monetaire/index.html">Monetary history</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/bcl_eurosysteme/index.html">The BCL within the Eurosystem</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/missions_bcl/index.html">The BCL's missions</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/organisation/index.html">Organisation</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/independance/index.html">The BCL's independence</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/Opening-days/index.html">Opening days</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/Visiting-the-BCL/index.html">Reception of the public</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/manifestations/index.html">Events</a></li>

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li><a href="publications/index.html">Publications</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/carrieres/index.html">Careers</a></li>

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li><a href="education/index.html">Education</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/faq/index.html">FAQ</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="About/contact1/index.html">Contact</a></li>

                

              

                

              

            </ul>

          </li>

        

          <li>

            <!-- used template: t_set_link -->










            <a><span>Statistics</span></a>

            <ul>

              

                

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="statistics/series_statistiques_luxembourg/index.html">Statistical tables</a></li>

                

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="statistics/communiques/index.html">Statistical press releases</a></li>

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li></li>

                

              

            </ul>

          </li>

        

          <li>

            <!-- used template: t_set_link -->










            <a><span>Regulatory Reporting</span></a>

            <ul>

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Regulatory-reporting/Etablissements_credit/index.html">Credit institutions</a></li>

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li><a href="payment-systems/Reporting/index.html">Payment institutions / electronic money institutions</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Regulatory-reporting/Vehicules_de_titrisation/index.html">Securitisation vehicles</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Regulatory-reporting/Fonds_Investissement/index.html">Investment funds</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Regulatory-reporting/Fonds-de-pension/index.html">Pension funds</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Regulatory-reporting/Societes_financieres/index.html">Financial companies</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Regulatory-reporting/Societe_assurance/index.html">Insurance corporations</a></li>

                

              

            </ul>

          </li>

        

          <li>

            <!-- used template: t_set_link -->










            <a><span>Banking Operations</span></a>

            <ul>

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Banking-operations/Comptes-courants/index.html">Current accounts</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Banking-operations/Operations-en-especes/index.html">Cash operations</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Banking-operations/Gestion-des-reserves/index.html">Reserve management</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Banking-operations/info-counterparties/index.html">Information for Counterparties</a></li>

                

              

            </ul>

          </li>

        

          <li>

            <!-- used template: t_set_link -->










            <a><span>Legal Framework</span></a>

            <ul>

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Legal-Framework/documents_european/index.html">European Documents</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Legal-Framework/documents_national/index.html">National Documents</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Legal-Framework/doctrine/index.html">Doctrine</a></li>

                

              

            </ul>

          </li>

        

          <li>

            <!-- used template: t_set_link -->










            <a><span>Publications</span></a>

            <ul>

              

                

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="publications/Annual-reports/index.html">BCL Annual Report</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="publications/bulletins_bcl/index.html">BCL Bulletins</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="publications/revue_stabilite/index.html">Financial Stability Review</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="publications/Working-papers/index.html">Working Papers</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="publications/brochure/index.html">BCL Brochure</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="publications/other_publications/index.html">Other publications</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="publications/Avis/index.html">Opinions of the Banque centrale du Luxembourg on the parliament bill of the State budget</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="publications/Governors-Publications/index.html">The Governor's publications</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="publications/Speeches/index.html">Governor's speeches</a></li>

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li><a href="Media-and-News/Press-releases/index.html">BCL Press releases</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="publications/BCL-videos/index.html">BCL Videos</a></li>

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li><a href="education/index.html">Education</a></li>

                

              

            </ul>

          </li>

        

          <li>

            <!-- used template: t_set_link -->










            <a><span>Media and News</span></a>

            <ul>

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Media-and-News/calendar/index.html">Calendar</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Media-and-News/Press-releases/index.html">Press releases</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Media-and-News/statistics_communiques/index.html">Statistical press releases</a></li>

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li><a href="publications/index.html">Publications</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Media-and-News/Speeches/index.html">Governor's speeches</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Media-and-News/Interviews/index.html">Governor's interviews</a></li>

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li><a href="Research/conferences/index.html">Conferences</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Media-and-News/Photos/index.html">Photos</a></li>

                

              

            </ul>

          </li>

        

          <li>

            <!-- used template: t_set_link -->










            <a><span>Education</span></a>

            <ul>

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/Presentation-film-on-the-BCL/index.html">Presentation film on the BCL</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/brochure_d_information/index.html">Information brochure « The Banque centrale du Luxembourg »</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/Euro-Schatz/index.html">Booklet with games "Les aventuriers du tr€sor perdu"</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/BCE-ES-3-min/index.html">The ECB and the Eurosystem explained in 3 minutes</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/SSM-3-min/index.html">SSM explained in 3 minutes</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/Top-floor/index.html">Top floor</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/inflation_island/index.html">Inflation island</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/economia/index.html">Economia</a></li>

                

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/concours/index.html">Generation €uro Students’ Award</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/annaalex2/index.html">Cartoon on price stability for schools</a></li>

                

              

                

                  <!-- used template: t_set_link -->









  




                  <li><a href="About/faq/index.html">Frequently asked questions</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/explainers-ECB/index.html">The Eurosystem and the ECB explained</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="education/Autres-videos/index.html">More videos</a></li>

                

              

            </ul>

          </li>

        

          <li>

            <!-- used template: t_set_link -->










            <a><span>Banknotes and coins</span></a>

            <ul>

              

                

              

                

              

                

              

                

              

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Banknotes-and-Coins/billets_pieces/index.html">Banknotes and coins</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Banknotes-and-Coins/rep_contre/index.html">Reproduction & counterfeiting</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Banknotes-and-Coins/remboursement/index.html">Reimbursement of banknotes and coins</a></li>

                

              

                

                  <!-- used template: t_set_link -->










                  <li><a href="Banknotes-and-Coins/produit_numismatique/index.html">Numismatic products</a></li>

                

              

            </ul>

          </li>

        





        </ul>

      </div>

    </div> <!-- CLOSE FOOTER MENU CONTAINER-->

      

    <!-- noindex -->
    <!-- FOOTER -->
    <!-- bo /t_footer -->

    <!-- FOOTER -->

    <div class="color-break hidden-md hidden-lg"></div>

    <div class="container footer">

      



      <!-- FOOTER FOR XS DEVICES -->

      <div class="row hidden-sm hidden-md hidden-lg">

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

          <div class="footer_col logo">

            

              <img src="../assets/images/logo_en_100.png" alt="bcd-logo"> 

            

          </div>

        </div>

        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">

          <div class="footer_col contact">

            <h2>Contact</h2>

            <ul>

              <li>Phone: <a href="tel://352-2030-1613">(+352)&nbsp;2030&nbsp;-&nbsp;1613</a></li>

              <li><a href="mailto:info@cnb.lu">E-Mail: info@cnb.lu</a></li>

              

                <li>

                  <a href="support/contact/index.html" title="Contact">Contact</a>

                </li>

              

            </ul>

          </div>

        </div>

        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">

          <div class="footer_col info">

            <h2>Info</h2>

            <ul>

              

                <li>

                  <a href="support/newsletter/index.php" title="Newsletter">Newsletter</a>

                </li>

              

                <li>

                  <a href="About/faq/index.html" title="FAQ">FAQ</a>

                </li>

              

                <li>

                  <a href="support/glossaire/index.html" title="Glossary">Glossary</a>

                </li>

              

            </ul>

          </div>

        </div>

      </div>

      <div class="row hidden-sm hidden-md hidden-lg">

        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">

          <div class= "footer_col impress">

            <h2>Impress</h2>

            <ul>

              

                <li>

                  <a href="support/disclaimer/index.html" title="Disclaimer">Disclaimer</a>

                </li>

              

                <li>

                  <a href="../fr/support/copyright/index.html" title="Copyright">Copyright</a>

                </li>

              

                <li>

                  <a href="support/sitemap/index.html" title="Sitemap">Sitemap</a>

                </li>

              

            </ul>

          </div>

        </div>

        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">

          <div class="footer_col links">

            <h2>Links</h2>

            <ul>

              

                <li>

                  <a href="https://eshop.bcl.lu/" title="E-SHOP">E-SHOP</a>

                </li>

              

                <li>

                  <a href="http://www.epco.lu/" title="EPCO">EPCO</a>

                </li>

              

                <li>

                  <a href="support/liens/index.html" title="Other links">Other links</a>

                </li>

              

            </ul>

          </div>

        </div>

      </div>



      <!-- FOOTER FOR SM DEVICES -->

      <div class="row hidden-xs hidden-md hidden-lg">

        <div class="col-sm-2">

          <div class="footer_col logo">

           <img src="../assets/images/logo-ipad.png" alt="logo_en_100">

          </div>

        </div>

        <div class="col-sm-3 padding">

          <div class="footer_col contact">

            <h2>Contact</h2>

            <ul>

              <li>Phone: <a href="tel://352-2030-1613">(+352)&nbsp;2030&nbsp;-&nbsp;1613</a></li>

              <li><a href="mailto:info@cnb.lu">E-Mail: info@cnb.lu</a></li>

              

                <li>

                  <a href="support/contact/index.html" title="Contact">Contact</a>

                </li>

              

            </ul>

          </div>

        </div>

        <div class="col-sm-2">

          <div class="footer_col info">

            <h2>Info</h2>

            <ul>

              

                <li>

                  <a href="support/newsletter/index.php" title="Newsletter">Newsletter</a>

                </li>

              

                <li>

                  <a href="About/faq/index.html" title="FAQ">FAQ</a>

                </li>

              

                <li>

                  <a href="support/glossaire/index.html" title="Glossary">Glossary</a>

                </li>

              

            </ul>

          </div>

        </div>

        <div class="col-sm-2">

          <div class= "footer_col impress">

            <h2>Impress</h2>

            <ul>

              

                <li>

                  <a href="support/disclaimer/index.html" title="Disclaimer">Disclaimer</a>

                </li>

              

                <li>

                  <a href="../fr/support/copyright/index.html" title="Copyright">Copyright</a>

                </li>

              

                <li>

                  <a href="support/sitemap/index.html" title="Sitemap">Sitemap</a>

                </li>

              

            </ul>

          </div>

        </div>

        <div class="col-sm-3">

          <div class="footer_col links">

            <h2>Links</h2>

            <ul>

              

                <li>

                  <a href="https://eshop.bcl.lu/" title="E-SHOP">E-SHOP</a>

                </li>

              

                <li>

                  <a href="http://www.epco.lu/" title="EPCO">EPCO</a>

                </li>

              

                <li>

                  <a href="support/liens/index.html" title="Other links">Other links</a>

                </li>

              

            </ul>

          </div>

        </div>

      </div>



      <!-- FOOTER FOR MD LG DEVICES -->

      <div class="row hidden-xs hidden-sm">

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

          <div class="footer_col logo">

            

              <img src="../assets/images/logo_en_100.png" alt="bcd-logo"> 

            

          </div>

        </div>

        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">

          <div class="footer_col contact">

            <h2>Contact</h2>

            <ul>

              <li>Phone: (+352)&nbsp;2033&nbsp;-&nbsp;1755</li>

              <li><a href="mailto:info@cnb.lu">E-Mail: info@cnb.lu</a></li>

              

                <li>

                  <a href="support/contact/index.html" title="Contact">Contact</a>

                </li>

              

            </ul>

          </div>

        </div>

        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">

          <div class="footer_col info">

            <h2>Info</h2>

            <ul>

              

                <li>

                  <a href="support/newsletter/index.php" title="Newsletter">Newsletter</a>

                </li>

              

                <li>

                  <a href="About/faq/index.html" title="FAQ">FAQ</a>

                </li>

              

                <li>

                  <a href="support/glossaire/index.html" title="Glossary">Glossary</a>

                </li>

              

            </ul>

          </div>

        </div>

        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">

          <div class= "footer_col impress">

            <h2>Impress</h2>

            <ul>

              

                <li>

                  <a href="support/disclaimer/index.html" title="Disclaimer">Disclaimer</a>

                </li>

              

                <li>

                  <a href="../fr/support/copyright/index.html" title="Copyright">Copyright</a>

                </li>

              

                <li>

                  <a href="support/sitemap/index.html" title="Sitemap">Sitemap</a>

                </li>

              

            </ul>

          </div>

        </div>

        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">

          <div class="footer_col links">

            <h2>Links</h2>

            <ul>

              

                <li>

                  <a href="https://eshop.bcl.lu/" title="E-SHOP">E-SHOP</a>

                </li>

              

                <li>

                  <a href="http://www.epco.lu/" title="EPCO">EPCO</a>

                </li>

              

                <li>

                  <a href="support/liens/index.html" title="Other links">Other links</a>

                </li>

              

            </ul>

          </div>

        </div>

      </div><!--CLOSE ROW-->



      

    </div><!-- CLOSE CONTAINER FOOTER -->

<!-- eo /t_footer -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../assets/javascripts/jquery_min.js"></script>

    <script src="../assets/javascripts/bootstrap/bootstrap_min.js"></script>
    <script src="../assets/javascripts/bootstrap-hover-dropdown.js"></script>
    <script src="../assets/javascripts/carousel.js"></script>
    <script src="../assets/javascripts/lightbox_min.js"></script>
    <script src="../assets/javascripts/jquery_pajinate_min.js"></script>
    <script src="../assets/javascripts/main.js"></script>

    <!-- /noindex -->
  </body>
</html>

