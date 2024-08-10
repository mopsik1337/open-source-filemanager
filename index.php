<?php include 'parts/header.php'; ?>

<div class="main">
<!-- Hero -->
<div class="relative overflow-hidden">
  <!-- Gradients -->
  <div aria-hidden="true" class="flex absolute -top-96 start-1/2 transform -translate-x-1/2">
    <div class="bg-gradient-to-r from-violet-300/50 to-purple-100 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] transform -translate-x-[10rem]"></div>
    <div class="bg-gradient-to-tl from-blue-50 via-blue-100 to-blue-50 blur-3xl w-[90rem] h-[50rem] rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem]"></div>
  </div>
  <!-- End Gradients -->

  <div class="relative z-10">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
      <div class="max-w-2xl text-center mx-auto">
        <p class="inline-block text-sm font-medium bg-clip-text bg-gradient-to-l from-blue-600 to-violet-500 text-transparent">
          Free, fast and no fucking card required!
        </p>

        <!-- Title -->
        <div class="mt-5 max-w-2xl">
          <h1 class="block font-semibold text-gray-800 text-4xl md:text-5xl lg:text-6xl">
            <span class="bg-clip-text bg-gradient-to-l from-violet-600 to-blue-500 text-transparent">Anonymous</span> file sharing w/ high speed
          </h1>
        </div>
        <!-- End Title -->

        <div class="mt-5 max-w-3xl">
          <p class="text-lg text-gray-600">AnoFiles offers the free online storage with 300MB per user. You can easily share your files with anyone and receive files from anyone.</p>
        </div>

        <div class="mt-8" data-hs-file-upload='{
  "url": "/upload",
  "extensions": {
    "default": {
      "class": "shrink-0 size-5"
    },
    "xls": {
      "class": "shrink-0 size-5"
    },
    "zip": {
      "class": "shrink-0 size-5"
    },
    "csv": {
      "icon": "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M4 22h14a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v4\"/><path d=\"M14 2v4a2 2 0 0 0 2 2h4\"/><path d=\"m5 12-3 3 3 3\"/><path d=\"m9 18 3-3-3-3\"/></svg>",
      "class": "shrink-0 size-5"
    }
  }
}'>
  <template data-hs-file-upload-preview="">
    <div class="p-3 bg-white border border-solid border-gray-300 rounded-xl">
      <div class="mb-1 flex justify-between items-center">
        <div class="flex items-center gap-x-3">
          <span class="size-10 flex justify-center items-center border border-gray-200 text-gray-500 rounded-lg" data-hs-file-upload-file-icon="">
            <img class="rounded-lg hidden" data-dz-thumbnail="">
          </span>
          <div>
            <p class="text-sm font-medium text-gray-800">
              <span class="truncate inline-block max-w-[300px] align-bottom" data-hs-file-upload-file-name=""></span>.<span data-hs-file-upload-file-ext=""></span>
            </p>
            <p class="text-xs text-gray-500" data-hs-file-upload-file-size=""></p>
          </div>
        </div>
        <div class="flex items-center gap-x-2">
          <button type="button" class="text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800" data-hs-file-upload-remove="">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 6h18"></path>
              <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
              <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
              <line x1="10" x2="10" y1="11" y2="17"></line>
              <line x1="14" x2="14" y1="11" y2="17"></line>
            </svg>
          </button>
        </div>
      </div>

      <div class="flex items-center gap-x-3 whitespace-nowrap">
        <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" data-hs-file-upload-progress-bar="">
          <div class="flex flex-col justify-center rounded-full overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap transition-all duration-500 hs-file-upload-complete:bg-green-500" style="width: 0" data-hs-file-upload-progress-bar-pane=""></div>
        </div>
        <div class="w-10 text-end">
          <span class="text-sm text-gray-800">
            <span data-hs-file-upload-progress-bar-value="">0</span>%
          </span>
        </div>
      </div>
    </div>
  </template>

  <div class="cursor-pointer p-12 flex justify-center bg-white border border-dashed border-gray-300 rounded-xl" data-hs-file-upload-trigger="">
    <div class="text-center">
      <span class="inline-flex justify-center items-center size-16 bg-gray-100 text-gray-800 rounded-full">
        <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
          <polyline points="17 8 12 3 7 8"></polyline>
          <line x1="12" x2="12" y1="3" y2="15"></line>
        </svg>
      </span>

      <div class="mt-4 flex flex-wrap justify-center text-sm leading-6 text-gray-600">
        <span class="pe-1 font-medium text-gray-800">
          Drop your file here or
        </span>
        <span class="bg-white font-semibold text-blue-600 hover:text-blue-700 rounded-lg decoration-2 hover:underline focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-600 focus-within:ring-offset-2">browse</span>
      </div>

      <p class="mt-1 text-xs text-gray-400">
        Pick a file up to 25MB.
      </p>
    </div>
  </div>
  
  <div class="mt-4 mb-4 space-y-2 empty:mt-0" data-hs-file-upload-previews="">
  
  </div>
  <a class="py-3 justify-center text-white px-4 inline-flex items-center gap-x-2 w-full !text-center text-sm font-medium rounded-lg bg-blue-500 hover:bg-blue-600 transition disabled:opacity-50 disabled:pointer-events-none" href="<?= ROOT_URL ?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M7 18a4.6 4.4 0 0 1 0-9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1"/><path d="m9 15l3-3l3 3m-3-3v9"/></g></svg>
  Complete uploading</a>
</div>

        <!-- Buttons -->
        <div class="mt-8 gap-3 flex justify-center">
          <a class="py-3 transition-all text-white px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border-transparent bg-clip bg-gradient-to-tl grad from-violet-300 to-blue-400 bg-transparent hover:to-blue-500 disabled:opacity-50 disabled:pointer-events-none" href="<?= ROOT_URL ?>">
            Get started
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
          </a>
          <a class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" href="<?= ROOT_URL ?>">
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M10.614 17.796a.946.946 0 0 1-1.744 0l-.877-2.01a7.74 7.74 0 0 0-3.94-3.992l-2.416-1.072c-.768-.341-.768-1.458 0-1.8l2.34-1.038a7.75 7.75 0 0 0 3.997-4.125l.89-2.142a.946.946 0 0 1 1.757 0l.89 2.142a7.75 7.75 0 0 0 3.997 4.125l2.34 1.039c.768.34.768 1.458 0 1.799l-2.415 1.072a7.74 7.74 0 0 0-3.941 3.991zM4.54 9.822c2.285 1.015 4.144 2.683 5.202 4.978c1.059-2.295 2.917-3.963 5.203-4.978c-2.313-1.026-4.177-2.776-5.203-5.111c-1.025 2.335-2.89 4.085-5.202 5.111M19.4 22.69l.247-.566a4.37 4.37 0 0 1 2.221-2.25l.76-.339a.53.53 0 0 0 0-.963l-.717-.319a4.37 4.37 0 0 1-2.253-2.326l-.254-.611a.507.507 0 0 0-.942 0l-.254.61a4.37 4.37 0 0 1-2.253 2.327l-.718.32a.53.53 0 0 0 0 .962l.76.338a4.37 4.37 0 0 1 2.222 2.251l.247.566c.18.414.754.414.934 0m-1.026-3.643l.562-.559l.55.559l-.55.543z"/></svg>
            AnoFiles <span class="px-3 py-1 text-white rounded-xl bg-clip bg-gradient-to-tl grad from-violet-300 to-blue-400 bg-transparent">Pro</span>
          </a>
        </div>
        <!-- End Buttons -->
      </div>
    </div>
  </div>
</div>
<!-- End Hero -->
</div>

<?php include 'parts/footer.php'; ?>