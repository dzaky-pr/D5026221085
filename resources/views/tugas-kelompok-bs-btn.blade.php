<!-- Darrell Valentino 5026221086 -->
<!-- Dzaky Purnomo Rifa'i 5026221085 -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      <h1 class="text-center mt-5 mb-4">BS4 Button Components</h1>
      <div class="d-flex align-items-center">
        <div class="mt-2">
          <button type="button" class="btn w-25">Basic</button>
          <button type="button" class="btn btn-primary w-25">Primary</button>
          <button type="button" class="btn btn-secondary w-25">Secondary</button>
          <button type="button" class="btn btn-success w-25">Success</button>
          <button type="button" class="btn btn-info w-25">Info</button>
          <button type="button" class="btn btn-warning w-25">Warning</button>
          <button type="button" class="btn btn-danger w-25">Danger</button>
          <button type="button" class="btn btn-dark w-25">Dark</button>
          <button type="button" class="btn btn-light w-25">Light</button>
        </div>
        <div class="mt-2">
          <button type="button" class="btn btn-outline-primary w-25">Primary</button>
          <button type="button" class="btn btn-outline-secondary w-25">Secondary</button>
          <button type="button" class="btn btn-outline-success w-25">Success</button>
          <button type="button" class="btn btn-outline-info w-25">Info</button>
          <button type="button" class="btn btn-outline-warning w-25">Warning</button>
          <button type="button" class="btn btn-outline-danger w-25">Danger</button>
          <button type="button" class="btn btn-outline-dark w-25">Dark</button>
          <button type="button" class="btn btn-outline-light text-dark w-25">Light</button>
        </div>
      </div>
      <h1 class="text-center mt-5 mb-4">Variasi Size Button BS4</h1>
      <div class="mt-2">
        <button type="button" class="btn btn-primary btn-block mb-2">Full-Width Button</button>
        <button type="button" class="btn btn-lg btn-outline-primary w-25">Large</button>
        <button type="button" class="btn btn-outline-secondary w-25">Default</button>
        <button type="button" class="btn btn-sm btn-outline-success w-25">Small</button>
      </div>

      <h1 class="text-center mt-5 mb-4">Buttons State BS4</h1>
      <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-primary active mr-1">Active Primary</button>
        <button type="button" class="btn btn-primary mr-1" disabled>Disabled Primary</button>
        <a href="#" class="btn btn-primary disabled">Disabled Link</a>
      </div>
      <h1 class="text-center mt-5 mb-4">Spinner Buttons BS4</h1>
      <div class="d-flex justify-content-center mb-4">
        <button class="btn btn-primary mr-2">
          <span class="spinner-border spinner-border-sm"></span>
        </button>
        <button class="btn btn-primary mr-2">
          <span class="spinner-border spinner-border-sm"></span>
          Loading..
        </button>
        <button class="btn btn-primary mr-2" disabled>
          <span class="spinner-border spinner-border-sm"></span>
          Loading..
        </button>
        <button class="btn btn-primary" disabled>
          <span class="spinner-grow spinner-grow-sm"></span>
          Loading..
        </button>
      </div>
    </div>

  </body>
</html>
