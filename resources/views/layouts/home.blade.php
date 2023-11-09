<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Get one link for all of your links">
    <meta name="keywords" content="With JavaLink you can simply put all of your links into one and share it on your social media">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:description" content="With JavaLink you can simply put all of your links into one and share it on your social media">
    <meta property="og:image" content="{{ asset('static/favicon/android-chrome-192x192.png') }}">
    @include('extensions.favicon')
    @stack('styles')
</head>
<body >
  <nav style="background: linear-gradient(120deg, #fff, #54bd95,#ffffff); display: flex; align-items: center; justify-content: space-between; gap: 20px; padding: 20px;">
    <div style="color: #54bd95; font: 600 50px/60% Inter, sans-serif;">
      <a href="#" style="text-decoration: none; color: #54bd95;">JavaLink</a>
    </div>
    <div style="display: flex; align-items: center; gap: 20px;">
      <div style="color: #000; font: 500 16px Inter, sans-serif;"><a href="#" style="text-decoration: none; color: #000;">Template JavaLink</a></div>
      <div style="color: #000; font: 500 16px Inter, sans-serif; white-space: nowrap;"><a href="#" style="text-decoration: none; color: #000;">Harga</a></div>
    </div>
    <div style="display: flex; align-items: center; gap: 20px;">
      <div style="color: #000; font: 500 16px Inter, sans-serif;"><a href="#" style="text-decoration: none; color: #000;">Login</a></div>
      <div style="color: #f8f8fa; white-space: nowrap; border-radius: 10px; background-color: #54bd95; padding: 13px 12px 13px 10px; font: 500 16px Inter, sans-serif;">
        <a href="#" style="text-decoration: none; color: #f8f8fa;">Sign Up</a>
      </div>
    </div>
  </nav>
  
    @yield('content')
    <footer id="sticky-footer" style="background: #87cef5;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 10px 20px; text-align: left;">
          <div style="color: #FFFFFF; font-size: 28px; font-family: Poppins; font-weight: 700; margin-bottom: 20px;">Siap Untuk Membuat? Secepat Kilat</div>
          <div style="display: flex; flex-wrap: wrap; justify-content: left; gap: 20px;">
            <div style="flex: 1;">
                <div style="display: flex; justify-content: left; align-items: left; flex-wrap: wrap; gap: 20px;">
                    <div style="height: 100%; position: relative">
                        <div style="left: 120px; position: relative; background: #2288C0; border-radius: 20px; box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5);">
                            <button href="/register" style="color: #FFFFFF; font-size: 36px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                                <a href="/register">Coba Gratis</a>
                            </button>
                        </div>
                    </div>
                    
                    <div style="width: 100%; display: flex; justify-content: right; align-items: right; margin-top:-2cm;">
                <div style="display: flex; gap: 40px;">
                  <div>
                          <div style="width: 32px; height: 32px; max-width: 100%; max-height: 100%; color:black;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598a2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486c.145-.373.319-.64.599-.92c.28-.28.546-.453.92-.598c.282-.11.705-.24 1.485-.276c.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92a.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217a4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334a2.667 2.667 0 0 1 0-5.334z"/>
                      </svg>
                    </div>
                  </div>
                  <div>
                          <div style="width: 32px; height: 32px; max-width: 100%; max-height: 100%; color:black;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131c.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                      </svg>
                    </div>
                  </div>
                  <div>
                          <div style="width: 32px; height: 32px; max-width: 100%; max-height: 100%; color:black;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586c.173-.431.568-.878 1.232-.878c.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252c-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                      </svg>
                    </div>
                  </div>
                  <div>
                          <div style="width: 32px; height: 32px; max-width: 100%; max-height: 100%; color:black;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-pinterest" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297c.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943c.682 0 1.012.512 1.012 1.127c0 .686-.437 1.712-.663 2.663c-.188.796.4 1.446 1.185 1.446c1.422 0 2.515-1.5 2.515-3.664c0-1.915-1.377-3.254-3.342-3.254c-2.276 0-3.612 1.707-3.612 3.471c0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907c-.035.146-.116.177-.268.107c-1-.465-1.624-1.926-1.624-3.1c0-2.523 1.834-4.84 5.286-4.84c2.775 0 4.932 1.977 4.932 4.62c0 2.757-1.739 4.976-4.151 4.976c-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097a8 8 0 1 0 0-16z"/>
                      </svg>
                    </div>
                  </div>
                  <div>
                          <div style="width: 32px; height: 32px; max-width: 100%; max-height: 100%; color:black;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                        <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
                      </svg>
                    </div>
                  </div>
                </div>
              </div> 
    </footer>
    @stack('scripts')
    @include('extensions.google')
    @include('extensions.cookie')
</body>
</html>
