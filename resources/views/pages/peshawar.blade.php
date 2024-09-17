@include('layouts.navbar')

<!DOCTYPE html>
    <html lang="en">
     
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>SOGH Orthopaedic And General Hospital</title>
  <script src="./node_modules/preline/dist/preline.js"></script>
  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
      <link href="{{asset('/assets/css/app.css')}}" rel="stylesheet">
      <!--=============== CSS ===============-->
    
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>
<body>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="aspect-w-32 aspect-h-7">
          <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1678717867038-d98cfb794402?q=80&w=3270&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image Description">
        </div>
    </div>
    <!-- Hero -->
<div class="bg-neutral-900">
    <div class="max-w-5xl mx-auto px-4 xl:px-0 pt-24 lg:pt-32 pb-24">
      <h1 class="font-semibold text-white text-5xl md:text-6xl">
        <span class="text-[#ff0] ">Peshawar:</span> The City of Flowers
      </h1>
      <div class="max-w-4xl">
        <p class="mt-5 text-neutral-400 text-lg">
            Peshawar, the capital of Khyber Pakhtunkhwa Province in Pakistan, is the oldest living city in South Asia, with a recorded history dating back to at least 539 BC. The city has been known by many names over the centuries, including "Pushapura," a Sanskrit word meaning "the city of flowers."

            For centuries, Peshawar was the first stop for travelers between Central Asia and the Indian sub-continent through the Khyber Pass. The city has also seen waves of invaders from many empires, including Persian, Greek, Buddhist, Kushan, Hun, Mughal, Sikh, and British.
            
            The legacies of these civilisations mark the modern Peshawar, a city of more than four million people. At its heart is the 16th-century Mughal Mosque Mohabbad Khan, and the city sits in the shadows of Bala Hissar Fort, whose foundations are as old as Peshawar itself. Nearby is Peshawar Museum, with an extensive collection of Gandhara relics, reflecting the glory of the Buddhist civilization that ruled the Peshawar valley from the 6th century BC to the 11th century AD.
        </p>
      </div>
    </div>
  </div>
  <!-- End Hero -->
</body>
</html>

@include('layouts.footer')