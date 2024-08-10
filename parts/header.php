<?php include 'config.php'; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
   <![endif]-->
   <!--[if IE 7]>         
   <html class="no-js lt-ie9 lt-ie8">
      <![endif]-->
      <!--[if IE 8]>         
      <html class="no-js lt-ie9">
         <![endif]-->
         <!--[if gt IE 8]><!--> 
         <html class="no-js" lang="en-US">
            <!--<![endif]-->
            <head>
               <meta charset="UTF-8" />
               <meta name="viewport" content="width=device-width, initial-scale=1.0" />
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <link rel="pingback" href="https: //domainname.com/xmlrpc.php" />
               <title>AnoFiles | Anonymous file sharing and storage</title>
               <!-- style and script resources -->
               <script src=""></script>
               <!--meta properties -->
               <meta name="description" content=" Your site description." />
               <!--detailed robots meta https://developers.google.com/search/reference/robots_meta_tag -->
               <meta name="robots" content="index, follow, max-snippet: -1, max-image-preview:large, max-video-preview: -1" />
               <link rel="canonical" href="" />
               <!--open graph meta tags for social sites and search engines-->
               <meta property="og:locale" content="en_US" />
               <meta property="og:type" content="website" />
               <meta property="og:title" content="  Opengraph content 25 char are best" />
               <meta property="og:description" content="  #description." />
               <meta property="og:url" content="" />
               <meta property="og:site_name" content="" />
               <meta property="og:image" content="images//hom-banner-compressed.jpg" />
               <meta property="og:image:secure_url" content="images//hom-banner-compressed.jpg" />
               <meta property="og:image:width" content="1200" />
               <meta property="og:image:height" content="660" />
               <!--twitter description-->
               <meta name="twitter:card" content="summary_large_image" />
               <meta name="twitter:description" content="." />
               <meta name="twitter:title" content="" />
               <meta name="twitter:site" content="@" />
               <meta name="twitter:image" content="images/hom-banner-compressed.jpg" />
               <meta name="twitter:creator" content="@" />
               <!--opengraph tags for location or address for information panel in google-->
               <meta name="og:latitude" content="" />
               <meta name="og:longitude" content="" />
               <meta name="og:street-address" content="" />
               <meta name="og:locality" content="" />
               <meta name="og:region" content="" />
               <meta name="og:postal-code" content="" />
               <meta name="og:country-name" content="" />
               <!--search engine verification-->
               <meta name="google-site-verification" content="" />
               <meta name="yandex-verification" content="" />
               <!--powered by meta-->
               <meta name="generator" content="" />
               <!-- Site fevicon icons -->
               <link rel="icon" href="images/icon/cropped-cropped-favicon-1-1-32x32.png" sizes="32x32" />
               <link rel="icon" href="images/icon/cropped-cropped-favicon-1-1-192x192.png" sizes="192x192" />
               <link rel="apple-touch-icon-precomposed" href="images/icon/cropped-cropped-favicon-1-1-180x180.png" />
               <meta name="msapplication-TileImage" content="images/icon/cropped-cropped-favicon-1-1-270x270.png" />
               <!--complete list of meta tags at - https://gist.github.com/lancejpollard/1978404 -->
               <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
               <style>
                html {
    font-family: 'Inter' !important;
}
               </style>
            </head>
            <body>
               <!-- ========== HEADER ========== -->
               <header class="flex flex-wrap  md:justify-start md:flex-nowrap z-50 w-full bg-white border-b border-gray-200">
                  <nav class="relative max-w-[85rem] w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 py-2 px-4 sm:px-6 lg:px-8">
                     <div class="flex justify-between items-center gap-x-1">
                        <a class="flex-none font-bold text-xl text-black focus:outline-none focus:opacity-80" href="<?= ROOT_URL ?>" aria-label="Brand"><span class="bg-clip-text bg-gradient-to-l from-blue-600 to-violet-500 text-transparent">AnoFiles</span></a>
                        <!-- Collapse Button -->
                        <button type="button" class="hs-collapse-toggle md:hidden relative size-9 flex justify-center items-center font-medium text-[12px] rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" id="hs-header-base-collapse"  aria-expanded="false" aria-controls="hs-header-base" aria-label="Toggle navigation"  data-hs-collapse="#hs-header-base" >
                           <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <line x1="3" x2="21" y1="6" y2="6"/>
                              <line x1="3" x2="21" y1="12" y2="12"/>
                              <line x1="3" x2="21" y1="18" y2="18"/>
                           </svg>
                           <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M18 6 6 18"/>
                              <path d="m6 6 12 12"/>
                           </svg>
                           <span class="sr-only">Toggle navigation</span>
                        </button>
                        <!-- End Collapse Button -->
                     </div>
                     <!-- Collapse -->
                     <div id="hs-header-base" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block "  aria-labelledby="hs-header-base-collapse" >
                        <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
                           <div class="py-2 md:py-0  flex flex-col md:flex-row md:items-center gap-0.5 md:gap-1">
                              <div class="grow">
                                 <div class="flex flex-col md:flex-row md:justify-end md:items-center gap-0.5 md:gap-1">
                                    <a class="p-2 flex items-center text-sm bg-gray-100 text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100" href="<?= ROOT_URL ?>" aria-current="page">
                                       <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                          <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/>
                                          <path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                                       </svg>
                                       Home
                                    </a>
                                    <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100" href="<?= ROOT_URL ?>">
                                       <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                          <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                                          <circle cx="12" cy="7" r="4"/>
                                       </svg>
                                       Offer
                                    </a>
                                    <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100" href="<?= ROOT_URL ?>">
                                       <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                          <path d="M12 12h.01"/>
                                          <path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>
                                          <path d="M22 13a18.15 18.15 0 0 1-20 0"/>
                                          <rect width="20" height="14" x="2" y="6" rx="2"/>
                                       </svg>
                                       Terms
                                    </a>
                                    <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100" href="<?= ROOT_URL ?>">
                                       <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                          <path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/>
                                          <path d="M18 14h-8"/>
                                          <path d="M15 18h-5"/>
                                          <path d="M10 6h8v4h-8V6Z"/>
                                       </svg>
                                       About
                                    </a>
                                 </div>
                              </div>
                              <div class="my-2 md:my-0 md:mx-2">
                                 <div class="w-full h-px md:w-px md:h-4 bg-gray-100 md:bg-gray-300"></div>
                              </div>
                              <!-- Button Group -->
                              <div class=" flex flex-wrap items-center gap-x-1.5">
                                 <a class="py-[7px] transition-all px-2.5 inline-flex items-center font-medium text-sm rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" href="<?= ROOT_URL ?>">
                                 Sign in
                                 </a>
                                 <a class="transition-all py-2 px-2.5 inline-flex items-center font-medium text-sm rounded-lg text-white bg-clip bg-gradient-to-tl grad from-violet-300 to-blue-400 bg-transparent hover:to-blue-500 disabled:opacity-50 disabled:pointer-events-none" href="<?= ROOT_URL ?>">
                                 <svg class="shrink-0 size-4 mr-2" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M10.614 17.796a.946.946 0 0 1-1.744 0l-.877-2.01a7.74 7.74 0 0 0-3.94-3.992l-2.416-1.072c-.768-.341-.768-1.458 0-1.8l2.34-1.038a7.75 7.75 0 0 0 3.997-4.125l.89-2.142a.946.946 0 0 1 1.757 0l.89 2.142a7.75 7.75 0 0 0 3.997 4.125l2.34 1.039c.768.34.768 1.458 0 1.799l-2.415 1.072a7.74 7.74 0 0 0-3.941 3.991zM4.54 9.822c2.285 1.015 4.144 2.683 5.202 4.978c1.059-2.295 2.917-3.963 5.203-4.978c-2.313-1.026-4.177-2.776-5.203-5.111c-1.025 2.335-2.89 4.085-5.202 5.111M19.4 22.69l.247-.566a4.37 4.37 0 0 1 2.221-2.25l.76-.339a.53.53 0 0 0 0-.963l-.717-.319a4.37 4.37 0 0 1-2.253-2.326l-.254-.611a.507.507 0 0 0-.942 0l-.254.61a4.37 4.37 0 0 1-2.253 2.327l-.718.32a.53.53 0 0 0 0 .962l.76.338a4.37 4.37 0 0 1 2.222 2.251l.247.566c.18.414.754.414.934 0m-1.026-3.643l.562-.559l.55.559l-.55.543z"/></svg>
                                 AnoFiles Pro
                                 </a>
                              </div>
                              <!-- End Button Group -->
                           </div>
                        </div>
                     </div>
                     <!-- End Collapse -->
                  </nav>
               </header>
               <!-- ========== END HEADER ========== -->